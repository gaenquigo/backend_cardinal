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
 * Class HistoricPAI_CORPOAMAZONIA_Seeder
 */
class HistoricPAI_CORPOAMAZONIA_Seeder extends Seeder
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
        'director_name' => 'Luis Alexander Mejia Bustos ',
        'group_id' => 16,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
        
        DB::table('strategic_lines')->insert([
          'name' => ' Fortalecimiento Institucional',
          'weighing' => 16,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Porcentaje de actualización y reporte de la información en el SIAC.',
          'weighing' => 16,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Administración de la oferta natural',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline3 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Gestión integral de la biodiversidad y servicios eco sistémicos',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline4 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Cambio climático  y gestión del riesgo',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline5 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'Fortalecimiento étnico',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline6 = DB::getPdo()->lastInsertId();
          
          
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1: : Gestión ambiental estratégica para la paz',
            'weighing' => 50,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2 : Sistema de servicios de información ambiental SIAC',
            'weighing' => 50,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1: Determinantes y asuntos ambientales para el ordenamiento ambiental territorial y el desarrollo sostenible.',
            'weighing' => 50,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2: Sistemas de áreas protegidas (SIRAP).',
            'weighing' => 50,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1:  Control, vigilancia y seguimiento',
            'weighing' => 16,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2: Reglamentación y acuerdos de conservación para el uso adecuado de los recursos naturales.',
            'weighing' => 16,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 3: Licenciamiento ambiental para el aprovechamiento sostenible de la oferta natural.',
            'weighing' => 17,
            ]);
            $idprogram7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 4: Pasivos ambientales.',
            'weighing' => 17,
            ]);
            $idprogram8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 5: Gestión integral del agua.',
            'weighing' => 17,
            ]);
            $idprogram9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 6: Gestión integral de residuos sólidos, peligrosos y hospitalarios.',
            'weighing' => 17,
            ]);
            $idprogram10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1: Conocimiento y monitoreo de la biodiversidad y servicios ecosistémicos.',
            'weighing' => 25,
            ]);
            $idprogram11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2: Uso sostenible de la biodiversidad y servicios ecosistémicos.',
            'weighing' => 25,
            ]);
            $idprogram12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 3:Conservación de la biodiversidad y servicios ecosistémicos.',
            'weighing' => 25,
            ]);
            $idprogram13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 4: Educación ambiental.',
            'weighing' => 25,
            ]);
            $idprogram14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1: Procesos de adaptación y mitigación del cambio climático en el contexto amazónico.',
            'weighing' => 50,
            ]);
            $idprogram15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2: Gestión para el conocimiento y reducción del riesgo de desastres.',
            'weighing' => 50,
            ]);
            $idprogram16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline6,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1: Conocimiento tradicional y biodiversidad.',
            'weighing' => 50,
            ]);
            $idprogram17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline6,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2: Protección de la diversidad étnica y fortalecimiento de la participación.',
            'weighing' => 50,
            ]);
            $idprogram18 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.1.1: Modernización institucional',
              'weighing' => 100,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 1.2.1: Desarrollo e implementación del sistema de información ambiental.',
              'weighing' => 100,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 2.1.1:   Elaboración e implementación de instrumentos y protocolos técnicos para la gestión ambiental',
              'weighing' => 50,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 2.1.2: Apoyo a procesos regionales y locales de ordenamiento ambiental territorial.',
              'weighing' => 50,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 2.2.1:  Estudios y declaración de áreas protegidas regionales del sur de la amazonia.',
              'weighing' => 50,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'PROYECTO 2.2.2. Manejo y administración de áreas protegidas.',
              'weighing' => 50,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'PROYECTO 3.1.1. Fortalecimiento de los mecanismos e instancias de articulación interinstitucional y comunitaria, para el control y vigilancia al aprovechamiento, tráfico y comercialización de uso formal y no formal de la oferta natural.',
              'weighing' => 100,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'PROYECTO 3.2.1. Expedición de reglamentación específica para el uso y manejo de los recursos naturales renovables.',
              'weighing' => 100,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'PROYECTO 3.3.1. Evaluación y seguimiento a las licencias, concesiones, autorizaciones y permisos expedidos para la ejecución de proyectos, obras o actividades de competencia de Corpoamazonia.',
              'weighing' => 100,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram8,
              'project' => 'PROYECTO 3.4.1 Restauración de ecosistemas y suelos degradados.',
              'weighing' => 100,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'PROYECTO 3.5.1. Manejo y uso sostenible del agua.',
              'weighing' => 50,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram9,
              'project' => 'PROYECTO 3.5.2. Formulación e implementación de instrumentos de planificación y ordenación de cuencas hidrográficas',
              'weighing' => 50,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram10,
              'project' => 'PROYECTO 3.6.1. Implementación de estrategias para la prevención, recuperación, valorización, control y seguimiento al manejo integral de residuos sólidos, convencionales y peligrosos.',
              'weighing' => 100,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram11,
              'project' => 'PROYECTO 4.1.1. Implementación del plan regional de biodiversidad del sur de la amazonia colombiana (Parbsac) y plan de investigaciones y transferencia de conocimiento y tecnología (Pitctec).',
              'weighing' => 50,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram11,
              'project' => 'PROYECTO 4.1.2. Fortalecimiento del Centro Experimental Amazónico (CEA) como escenario de investigación, conocimiento, transferencia de tecnología y turismo sostenible.',
              'weighing' => 50,
              ]);
              $idproject15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram12,
              'project' => 'PROYECTO 4.2.1. Alternativas productivas sostenibles como estrategias para la seguridad alimentaria, el mejoramiento de la productividad local y la restauración de áreas deforestadas y degradadas.',
              'weighing' => 50,
              ]);
              $idproject16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram12,
              'project' => 'PROYECTO 4.2.2. Implementación del programa regional de negocios verdes.',
              'weighing' => 50,
              ]);
              $idproject17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram13,
              'project' => 'PROYECTO 4.3.1. Implementación de iniciativas y/o estrategias de conservación ex-situ o in-situ de especies de flora y fauna silvestre, y de ecosistemas estratégicos prioritarios.',
              'weighing' => 100,
              ]);
              $idproject18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram14,
              'project' => 'PROYECTO 4.4.1. Diseño e implementación de un programa de educación ambiental en el ámbito de la educación formal, no formal e informal.',
              'weighing' => 100,
              ]);
              $idproject19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram15,
              'project' => 'PROYECTO 5.1.2. Implementación de estrategias de monitoreo del cambio climático.',
              'weighing' => 100,
              ]);
              $idproject20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram16,
              'project' => 'PROYECTO 5.2.1. Asistencia técnica para la incorporación de la gestión integral del riesgo de desastres y cambio climático en los instrumentos de planificación territorial y de desarrollo local.',
              'weighing' => 100,
              ]);
              $idproject21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram17,
              'project' => 'PROYECTO 6.1.1. Conocimiento tradicional e iniciativas productivas asociadas al manejo de los recursos naturales.',
              'weighing' => 33,
              ]);
              $idproject22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram17,
              'project' => 'PROYECTO 6.1.2. Ordenación y planificación ancestral del territorio con los pueblos indígenas y comunidades afrodescendientes.',
              'weighing' => 33,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram17,
              'project' => 'PROYECTO 6.1.3. Fortalecimiento a la educación ambiental propia.',
              'weighing' => 34,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram18,
              'project' => 'PROYECTO 6.2.1. Protección al derecho fundamental de la consulta previa y fortalecimiento de mecanismos de participación en el sector ambiental',
              'weighing' => 33,
              ]);
              $idproject25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram18,
              'project' => 'PROYECTO 6.2.2. Coordinación y fortalecimiento institucional propio.',
              'weighing' => 33,
              ]);
              $idproject26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram18,
              'project' => 'PROYECTO 6.2.3. Construcción participativa de acuerdos interculturales para el uso tradicional de los recursos naturales en sus territorios.',
              'weighing' => 34,
              ]);
              $idproject27 = DB::getPdo()->lastInsertId();
              
              
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
                
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 12,
					'goal_2' => 6,
					'goal_3' => 8,
					'goal_4' => 22,
					'goal_1_balance' => 12,
					'goal_2_balance' => 6,
					'goal_3_balance' => 8,
					'goal_4_balance' => 22,
					'total_goal' => 48,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 16,
					'goal_2' => 16,
					'goal_3' => 16,
					'goal_4' => 13,
					'goal_1_balance' => 16,
					'goal_2_balance' => 16,
					'goal_3_balance' => 16,
					'goal_4_balance' => 13,
					'total_goal' => 61,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 4,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 4,
					'total_goal' => 6,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 25,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 100,
					'goal_1_balance' => 25,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 100,
					'total_goal' => 127,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 29,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 100,
					'goal_1_balance' => 29,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 100,
					'total_goal' => 135,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 150,
					'goal_2' => 384,
					'goal_3' => 384,
					'goal_4' => 105,
					'goal_1_balance' => 150,
					'goal_2_balance' => 384,
					'goal_3_balance' => 384,
					'goal_4_balance' => 105,
					'total_goal' => 1023,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 1,
					'total_goal' => 5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
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
					'weighing' => 49,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 773,
					'goal_2' => 653,
					'goal_3' => 653,
					'goal_4' => 851,
					'goal_1_balance' => 773,
					'goal_2_balance' => 653,
					'goal_3_balance' => 653,
					'goal_4_balance' => 851,
					'total_goal' => 2930,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 87,
					'goal_2' => 87,
					'goal_3' => 87,
					'goal_4' => 329,
					'goal_1_balance' => 87,
					'goal_2_balance' => 87,
					'goal_3_balance' => 87,
					'goal_4_balance' => 329,
					'total_goal' => 590,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 779,
					'goal_2' => 108,
					'goal_3' => 697,
					'goal_4' => 51,
					'goal_1_balance' => 779,
					'goal_2_balance' => 108,
					'goal_3_balance' => 697,
					'goal_4_balance' => 51,
					'total_goal' => 1635,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 125,
					'goal_2' => 126,
					'goal_3' => 95,
					'goal_4' => 122,
					'goal_1_balance' => 125,
					'goal_2_balance' => 126,
					'goal_3_balance' => 95,
					'goal_4_balance' => 122,
					'total_goal' => 468,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 600,
					'goal_2' => 600,
					'goal_3' => 600,
					'goal_4' => 641,
					'goal_1_balance' => 600,
					'goal_2_balance' => 600,
					'goal_3_balance' => 600,
					'goal_4_balance' => 641,
					'total_goal' => 2441,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
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
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 29,
					'goal_2' => 27,
					'goal_3' => 27,
					'goal_4' => 19,
					'goal_1_balance' => 29,
					'goal_2_balance' => 27,
					'goal_3_balance' => 27,
					'goal_4_balance' => 19,
					'total_goal' => 102,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 29,
					'goal_2' => 22,
					'goal_3' => 31,
					'goal_4' => 16,
					'goal_1_balance' => 29,
					'goal_2_balance' => 22,
					'goal_3_balance' => 31,
					'goal_4_balance' => 16,
					'total_goal' => 98,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 4,
					'goal_1_balance' => 0,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 4,
					'total_goal' => 10,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 1,
					'total_goal' => 5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 2,
					'total_goal' => 13,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 10,
					'goal_2' => 20,
					'goal_3' => 20,
					'goal_4' => 10,
					'goal_1_balance' => 10,
					'goal_2_balance' => 20,
					'goal_3_balance' => 20,
					'goal_4_balance' => 10,
					'total_goal' => 60,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 5,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 100,
					'goal_1_balance' => 5,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 100,
					'total_goal' => 115,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 3,
					'goal_2' => 6,
					'goal_3' => 7,
					'goal_4' => 5,
					'goal_1_balance' => 3,
					'goal_2_balance' => 6,
					'goal_3_balance' => 7,
					'goal_4_balance' => 5,
					'total_goal' => 21,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 100,
					'total_goal' => 108,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 7000,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 100,
					'goal_1_balance' => 7000,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 100,
					'total_goal' => 7100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 20,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 100,
					'goal_1_balance' => 20,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 100,
					'total_goal' => 128,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 6,
					'goal_2' => 7,
					'goal_3' => 14,
					'goal_4' => 5,
					'goal_1_balance' => 6,
					'goal_2_balance' => 7,
					'goal_3_balance' => 14,
					'goal_4_balance' => 5,
					'total_goal' => 32,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 6,
					'goal_2' => 2,
					'goal_3' => 24,
					'goal_4' => 1,
					'goal_1_balance' => 6,
					'goal_2_balance' => 2,
					'goal_3_balance' => 24,
					'goal_4_balance' => 1,
					'total_goal' => 33,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 1,
					'total_goal' => 5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 4952,
					'goal_2' => 5,
					'goal_3' => 10,
					'goal_4' => 17,
					'goal_1_balance' => 4952,
					'goal_2_balance' => 5,
					'goal_3_balance' => 10,
					'goal_4_balance' => 17,
					'total_goal' => 4984,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 5,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 5,
					'goal_4_balance' => 1,
					'total_goal' => 6,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 16,
					'goal_2' => 11,
					'goal_3' => 11,
					'goal_4' => 13,
					'goal_1_balance' => 16,
					'goal_2_balance' => 11,
					'goal_3_balance' => 11,
					'goal_4_balance' => 13,
					'total_goal' => 51,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 99,
					]);
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 99,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
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
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 99,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 99,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 5,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 5,
					'total_goal' => 9,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 3,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 3,
					'total_goal' => 8,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
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
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'INDICADOR: 1. Porcentaje de modernización institucional.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'INDICADOR: 1. Porcentaje de actualización y reporte de la información en el SIAC.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'INDICADOR: 1. Ejecución de acciones en gestión ambiental urbana.',
                    'goal_1' => 12,
                    'goal_2' => 6,
                    'goal_3' => 8,
                    'goal_4' => 22,
                    'goal' => 48,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'INDICADOR: 1. Porcentaje de municipios asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT.',
                    'goal_1' => 16,
                    'goal_2' => 16,
                    'goal_3' => 16,
                    'goal_4' => 13,
                    'goal' => 61,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'INDICADOR: 1. Porcentaje de la superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP.',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 4,
                    'goal' => 6,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'INDICADOR: 1. Porcentaje de áreas protegidas con planes de manejo en ejecución.',
                    'goal_1' => 25,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 100,
                    'goal' => 127,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'INDICADOR: 1. Número de acciones y reglamentos para apoyar la implementación del control y vigilancia.',
                    'goal_1' => 29,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 100,
                    'goal' => 135,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'INDICADOR: 2. Porcentaje de quejas y contravenciones atendidas.',
                    'goal_1' => 150,
                    'goal_2' => 384,
                    'goal_3' => 384,
                    'goal_4' => 105,
                    'goal' => 1023,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'INDICADOR:1. Porcentaje de cuerpos de agua con reglamentación del uso de las aguas.',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 1,
                    'goal' => 5,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'INDICADOR: 2. Número de normas generadas.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 2,
                    'goal' => 5,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'INDICADOR:1. Porcentaje de autorizaciones ambientales con seguimiento.',
                    'goal_1' => 773,
                    'goal_2' => 653,
                    'goal_3' => 653,
                    'goal_4' => 851,
                    'goal' => 2930,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'INDICADOR:2. Tiempo promedio de trámite para la resolución de autorizaciones ambientales otorgadas por la Corporación.',
                    'goal_1' => 87,
                    'goal_2' => 87,
                    'goal_3' => 87,
                    'goal_4' => 329,
                    'goal' => 590,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'INDICADOR:3. Porcentaje de procesos sancionatorios resueltos.',
                    'goal_1' => 779,
                    'goal_2' => 108,
                    'goal_3' => 697,
                    'goal_4' => 51,
                    'goal' => 1635,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'INDICADOR:  1. Número de diagnósticos y planes de restauración de pasivos ambientales. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'INDICADOR: 2. Porcentaje de suelos degradados en recuperación o rehabilitación.',
                    'goal_1' => 125,
                    'goal_2' => 126,
                    'goal_3' => 95,
                    'goal_4' => 122,
                    'goal' => 468,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'INDICADOR: 3. Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación.',
                    'goal_1' => 600,
                    'goal_2' => 600,
                    'goal_3' => 600,
                    'goal_4' => 641,
                    'goal' => 2441,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'INDICADOR: 1. Porcentaje de planes de saneamiento y manejo de vertimientos (PSMV) con seguimiento.',
                    'goal_1' => 29,
                    'goal_2' => 27,
                    'goal_3' => 27,
                    'goal_4' => 19,
                    'goal' => 102,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'INDICADOR: 2. Porcentaje de programas del uso eficiente y   ahorro del agua (PUEAA) con seguimiento.',
                    'goal_1' => 29,
                    'goal_2' => 22,
                    'goal_3' => 31,
                    'goal_4' => 16,
                    'goal' => 98,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'INDICADOR: 1. Porcentaje de avance en la formulación y/o ajuste de los planes de ordenación y manejo de cuencas (POMCA), planes de manejo de acuíferos (PMA) y planes de manejo de microcuencas (PMM).',
                    'goal_1' => 0,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 4,
                    'goal' => 10,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'INDICADOR: 2. Porcentaje de cuerpos de agua con plan de ordenamiento del recurso hídrico (PORH) adoptados.',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 1,
                    'goal' => 5,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'INDICADOR: 3. Porcentaje de planes de ordenación y manejo de cuencas (POMCA), planes de manejo de acuíferos (PMA) y planes de manejo de microcuencas (PMM) en ejecución.',
                    'goal_1' => 1,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 2,
                    'goal' => 13,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'INDICADOR: 1. Porcentaje de planes de gestión integral de residuos sólidos (PGIRS) con seguimiento a metas de aprovechamiento.',
                    'goal_1' => 10,
                    'goal_2' => 20,
                    'goal_3' => 20,
                    'goal_4' => 10,
                    'goal' => 60,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'INDICADOR: 1.  Porcentaje de implementación del Parbsac y Pitctec.',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 100,
                    'goal' => 115,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'INDICADOR: 1. Porcentaje de avance de las acciones definidas para el mejoramiento de la gestión.',
                    'goal_1' => 3,
                    'goal_2' => 6,
                    'goal_3' => 7,
                    'goal_4' => 5,
                    'goal' => 21,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'INDICADOR: 1. Porcentaje de sectores con acompañamiento para la reconversión hacia sistemas sostenibles de producción en los departamentos de Amazonas, Caquetá y Putumayo.',
                    'goal_1' => 0,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 100,
                    'goal' => 108,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'INDICADOR: 2. Porcentaje de avance en la formulación del plan de ordenación forestal.',
                    'goal_1' => 7000,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 7100,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'INDICADOR: 3. Porcentaje de implementación del programa regional de negocios verdes por la autoridad ambiental.',
                    'goal_1' => 20,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 100,
                    'goal' => 128,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => 'INDICADOR: 1. Porcentaje de especies amenazadas con medidas de conservación y manejo en ejecución.',
                    'goal_1' => 6,
                    'goal_2' => 7,
                    'goal_3' => 14,
                    'goal_4' => 5,
                    'goal' => 32,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => 'INDICADOR: 2. Porcentaje de especies invasoras con medidas de prevención, control y manejo en ejecución.',
                    'goal_1' => 6,
                    'goal_2' => 2,
                    'goal_3' => 24,
                    'goal_4' => 1,
                    'goal' => 33,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'INDICADOR: 3. Porcentaje de páramos delimitados por el MADS, con zonificación y régimen de usos adoptados por la CAR.',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 1,
                    'goal' => 5,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'INDICADOR:1. Ejecución de acciones en educación ambiental..',
                    'goal_1' => 4952,
                    'goal_2' => 5,
                    'goal_3' => 10,
                    'goal_4' => 17,
                    'goal' => 4984,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'INDICADOR 1. Porcentaje de redes y estaciones de monitoreo en operación.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 5,
                    'goal_4' => 1,
                    'goal' => 6,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => 'INDICADOR: 1. Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial.',
                    'goal_1' => 16,
                    'goal_2' => 11,
                    'goal_3' => 11,
                    'goal_4' => 13,
                    'goal' => 51,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'INDICADOR: 1. Porcentaje de alternativas productivas sostenible impulsadas en pueblos indígenas y comunidades afrodescendientes.',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 7,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'INDICADOR: 1. Porcentaje de instrumentos de planificación y ordenamiento apoyados.',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 7,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'INDICADOR: 1. Porcentaje de comunidades e instituciones étnicas apoyadas en el proceso de educación propia.',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 6,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'INDICADOR: 1. Porcentaje de procesos de liderazgo de derechos ambientales y territoriales apoyados.',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 3,
                    'goal' => 9,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => 'INDICADOR: 1. Porcentaje de estrategias de coordinación y/o acuerdos con comunidades étnicas en gobernanza de los recursos naturales.',
                    'goal_1' => 0,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 5,
                    'goal' => 9,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'INDICADOR: 1. Número de acuerdos con indígenas y comunidades afrodescendientes en el uso tradicional de los recursos naturales.',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 3,
                    'goal' => 8,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'ASIGNACION PRESUPUESTAL',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
					
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 1,
						'description' => 'Se elaboró Plan de Mejoramiento de los 5 Hallazgos
					evidenciados por ICONTEC en la auditoria de
					renovación, se levantaron las 5 acciones
					correctivas y se hizo seguimieto a cada una de
					ellas, logrando el cierre del 60% de estas.
					Durante la vigencia 2016 se realizó auditorias
					Internas en la Direccion General el 16 de Agosto
					de 2016, en la DTC el 17 Agosto, en la DTP el 23
					Agosto y DTA el 16 de Noviembre de 2016, se
					elaboraron los respectivos informes de auditoria y
					se levantaron las acciones correctivas de auderdo
					a los hallazgos evidenciados; y se se estan
					adelantando acciones de mejoramiento conforme a lo
					evidenciado.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizo la actializacion del los sub sistemas (SIRH),(SNIF) y (SIUR) en un 93 %',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 
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
						'value' => 12,
						'description' => 'Diagnóstico para los municipios de Santiago y Puerto Caicedo, lineamientos a través de los expedientes ambientales para su incorporación a través de Esquemas y Ordenamiento Ambiental Territorial.
					Se realizó el acompañamiento a los municipios de Solano, Valparaíso, San José del Fragua, Curillo, Morelia, Belen de los Andaquies, Albania, Milan, Florencia, artagena del Chaira, en la socialización de los lineamientos técnicos de gestión del riesgo y socialización de las determinantes ambientales para la incorporación
					de los componentes ambientales y la gestión ambiental en el sector urbano del municipio en el ajuste y revisión del EOT',
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
						'value' => 16,
						'description' => 'Los municipios  asesorados o asistidos en la inclusión del componente ambiental  fueron: Puerto Nariño en Amazonas; 
					Florencia,  El Doncello,  Milán,  Belén de Los Andaquíes,  San José del Fragua,  Solano, Solita,  Curillo y Valparaíso en Caquetá;  Santiago y Puerto Caicedo en  utumayo.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 

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
						'value' => 25,
						'description' => 'En ejecución Plan de manejo reserva forestal cuenca alta rio Mocoa (Ejecución PMASIS). Implementación de acciones de ordenamiento y
					zonificación para la protección y recuperación de áreas degradadas o suceptibles a ser deterioradas.',
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
						'value' => 29,
						'description' => '23 comités de control y vigilancia, 20 municipales y 3 departamentales - Se participa en pacto por la madera legal en Amazonas y se participo en 8
					eventos en marco de las mesas forestales 2 Caquetá 2 amazonas y 4 putumayo.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 150,
						'description' => 'En la Territorial Amazonas se atendieron 59 Peticiones, Quejas y Reclamos durante la vigencia 2016 y Se atendieron noventa y un (91) denuncias
					ambientales, fueron atendidas oportunamente 56,04 % que corresponden a 51 denuncias, los recursos más afectados fueron el hídrico y el recurso suelo.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 0.25,
						'description' => 'Se realizó la contratación para realizar la
					actualización del Plan de Gestión Ambiental de la
					Región del sur de la amazonia colombiana para el
					periodo 2017-2037, mediante contrato CPS-0602 de
					2016. y se avanza en la Construccion.',
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
						'value' => 773,
						'description' => 'De acuerdo con los informes suministrados por las direcciones territoriales de Amazonas, Caquetá y Putumayo, de los 773 expedientes asignados para
					seguimiento a 31 de Diciembre, se realizaron 679 seguimientos, lo cual equivale al 88%. A continuación se discrimina el seguimiento por departamento:
					- Putumayo: Realizó seguimiento a de 435 de 447 expedientes, equivalente al 97%. - Caquetá: Realizó seguimiento a 146 de 215 expedientes, equivalente al 68%
					- Amazonas: Realizó seguimiento a 98 de 111 expedientes, equivalente al 98%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 123,
						'description' => 'De acuerdo con los informes suministrados por las
					direcciones territoriales de Amazonas, Caquetá y
					Putumayo, el tiempo promedio empleado para la
					resolución de trámites ambientales fue de 123
					días. A continuación se presenta el resultado por
					departamento: Putumayo: 158 días Caquetá: 124 días Amazonas: 87 días.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 40,
						'description' => 'Actos administrativos de iniciación de
					procedimiento sancionatorio expedidos equivalen
					779 de los cuales se fallaron 40, los cuales
					equivalen al
					5.1 %',
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
						'value' => 0.25,
						'description' => 'A través de Contrato Interadministrativo Nº 0848
					de 2015, Se ejecutó el proyecto: Diagnóstico
					ambiental de las áreas de formalización de minería
					tradicional rechazada en jurisdicción de
					Corpoamazonia e imposición de las medidas de
					restauración ambiental.
					Objetivos del proyecto: Definir acuerdos con la
					comunidad a intervenir en las áreas de formación
					de minería tradicional rechazadas.Conceptuar
					técnica y ambientalmente cada una de las áreas
					solicitadas para el desarrollo de minería
					tradicional que fueron rechazadas.Especificar ambientalmente la situación de las áreas de formalización de minería tradicional rechazadas en la jurisdicción de Corpoamazonia. Mostrar los resultados obtenidos en la ejecución del proyecto.Realizar la interventoría del Proyecto.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 125,
						'description' => 'Se realizó a través de la Restauración Pasiva la recuperacion de 196 hectáreas superando la meta establecida de 125 hectáreas.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 600,
						'description' => 'A través de la implementación del PMASIS se viene
					adelantando la reforestación 655 hectáreas en la
					zona de la reserva forestal protectora de la
					cuenca alta del rio Mocoa.
					Además a través de la ejecución de Subproyectos
					de inversión ambiental:   Recuperación de
					ecosistemas degradados en los Departamentos de
					Caquetá y Putumayo  .
					Inversiones para la preservación y restauración
					de ecosistemas a través del aprestamiento e
					impulso de las cadenas de valor de Caquetá,
					Putumayo y Amazonas, se realizó el
					enriquecimiento de 32 hectáreas distribuidas de la
					siguiente manera: Putumayo: Doce (12) hectáreas,
					Caquetá: Cuatro (4) hectáreas, Amazonas: Diez y
					seis (16) hectáreas y Fortalecimiento de la
					Gobernanza Forestal en la jurisdicción de
					CORPOAMAZONIA.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>1,
						'value' => 29,
						'description' => 'Se realizo seguimiento a 29 Planes de Saneamiento
					y Manejo de
					Vertimientos (PSMV), Putumayo (13), Caquetá
					(14),
					Amazonas (2).',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 29,
						'description' => 'Seguimiento a (29) programas de Uso Eficiente y
					Ahorro de Agua (PUEAA), Putumayo (11), Caquetá
					(16), Amazonas (2).',
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
						'activity_id' => $idactivity32,
						'year' =>1,
						'value' => 1,
						'description' => 'La Territorial Amazonas de Corpoamazonia adopto el
					Plan de Manejo Ambiental de la microcuenca
					Yahuarcaca mediante Resolución No. 1401 del 31 de
					octubre de 2016 y actualmente se están generando
					acciones para su implementación.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 10,
						'description' => 'Diez (10) Planes de gestión integral de residuos
					sólidos (PGIRS) con seguimiento a metas de
					aprovechamiento. Putumayo (6) (Puerto Caicedo,
					Valle del Guamuez, Sibundoy, Colón, Santiago y
					Mocoa), Caquetá (2) (Florencia y San Vicente del
					Caguán) , Amazonas (2) (Leticia y Puerto Nariño).',
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
						'description' => 'Se elaboró una propuesta de evaluación del
					accionar de Corpoamazonia en la implementación del
					PARBSAC en el periodo 2007-2016; ademas se
					recopiló la información de soporte de dicho
					accionar. A la fecha se han formulado los siguientes
					proyectos que apoyan la implementación del PARBSAC
					y/o PITCTEC: 1. “Establecimiento de Areas de
					Importancia para la Conservación de las Aves
					–AICAs- en la Amazonia Colombiana, Fase
					I”, 2. “Fortalecimiento de la
					Gobernanza Forestal en la Jurisdicción de
					Corpoamazonia”; 3. “Fortalecimiento
					del ecosistema de competitividad de los negocios
					verdes y sostenibles en el sur de la amazonia',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 3,
						'description' => 'Se realizó mantenimiento de las eras de
					germinación y crecimiento, así como de la
					infraestructra general del vivero; se adecuó el
					sendero que conduce del jardín botánico al vivero
					forestal. Se tiene lista la información referente a nombre
					científico, nombre común, usos y fotografía de 100
					especies medicinales priorizadas, para ser
					incluidas en el libro de plantas medicinales del
					CEA.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
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
						'value' => 7000,
						'description' => 'Se avanza en la implementacion',
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
						'value' => 20,
						'description' => 'Con apoyo de la cooperación alemana GIZ se logro
					actualizar plan de acción a 2017 y la capacitación
					del equipo de apoyo y de representantes de
					instituciones que hacen parte de la comisión
					regional de competitividad del departamento sobre
					aspectos clave de los negocios verdes y los
					criterios para ello además de facilitar la
					creación de la ventanilla regional de negocios
					verdes.
					Con apoyo del equipo técnico se asesora a
					iniciativas y empresas de negocios verdes además
					de actualizar a la fecha a 20 empresas de negocios
					verdes.
					De igual forma se ha participación en eventos
					feriales de promoción como expoflorencia donde
					participaron empresarios el subsector artesanías.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>1,
						'value' => 6,
						'description' => 'las 6 especies con medida de conservacion
					implementadas son: (Odonthophorus hyperythrus,
					Hypopyrrhus pyrohypogaster, Tinamus osgoodi,
					Tremarctos ornatus, Tapirus pinchaque, Lagothrix
					lagothricha) con medidas de conservación y/o
					manejo implementadas.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia45 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 6,
						'description' => 'De las seis especies invasoras (Achatina fulica,
					Helix aspersa, Oncorhynchus mykiss, Oreochromis
					niloticus, Cyprinus carpio y Cyprinus carpio sp.)
					presentes en la jurisdicción de CORPOAMAZONIA, en
					el PAI 2016-2019 se priorizaron dos (A.fulica, H.
					aspersa). Se reporta un avance de 47 actividades
					de capacitación en Amazonas para prevenir la
					introducción de caracol gigante africano y caracol
					de jardín en el departamento, 38 jornadas de
					control de A. fulica en Putumayo y Caquetá y 17
					recolecciones de H. aspersa en el Alto Putumayo.
					Además se realizaron 55 actividades de
					capacitación para dar a conocer el método de
					control fisicoquímico y ecología de las especies,
					dirigida a la comunidad de la jurisdicción
					afectada por la presencia de los moluscos
					invasores.

					Ejecución del Subproyecto: Prevención, Manejo y
					Control de Caracol Gigante Africano (Achatina
					fulica) en la Jurisdicción de CORPOAMAZONIA y
					Caracol de Jardín (Helix aspersa) en el Alto
					Putumayo-FASE III.

					Consolidación de resultados de las
					investigaciones a). Hábitos biológicos de Helix
					aspersa, b). Impactos causados en el suelo por
					disposición final de Achatina fulica y Helix
					aspersa y c). Éxito adaptativo de Achatina fulica
					en bosque húmedo tropical y zonas agroforestales.


					2. Capacitación a 3.503 personas presentes en la
					jurisdicción de Corpoamazonia a través de
					capacitaciones, 49 en Putumayo, 6 en Caquetá y
					47 en Amazonas.

					3. Jornadas de recolección, 28 eventos con un
					total colectado de 554 Kg de caracol gigante
					africano en medio y bajo Putumayo, 17 actividades
					de colecta, con 38 kg de caracol de jardín
					sacrificados en el Alto Putumayo y 10 jornadas de
					recolección en el que se colectó 131 kg de caracol
					gigante africano en Caquetá.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 4952,
						'description' => 'Hasta la fecha se ha logrado concienciar a 4.952
					personas en cada una de actividades planteadas en
					el proyecto   Capacitación, recorriendo y educando
					ambientalmente a la comunidad ribereña de la zona
					de integración fronteriza de los Ríos Putumayo y
					Amazonas  , en las comunidades de Agualongo,
					Puerto Ospina, Resguardo Indígena El Hacha,
					Cecilia Cocha, Lagarto Cocha, Tukunaré y Refugio,
					Puerto Nariño, Leticia, Tarapacá, Puerto Arica, La
					Chorrera, San Rafael.
					Se han desarrollado 10 cursos en competencia
					ambientales, 19 cursos en competencias laborales;
					y 59 cursos no formales en temáticas ambientales
					Para el fortalecimiento de la estrategia de
					comunicación se han emitido a través de las
					emisoras contratadas en Putumayo y Amazonas; 828
					mensajes ambientales de 30 segundos y 26
					microprogramas de 5 minutos, que invitan a la
					protección de los recursos naturales y del río',
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
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 16,
						'description' => 'La Territorial Amazonas realizo capacitaciones al Comité de Gestión del Riesgo del municipio de 16 municipios de la jurisdiccion en temas de identificación de áreas de amenaza y de los planes de contingencia para el manejo de hidrocarburos en el marco del plan nacional de gestión del riesgo de desastres PNGRD.
					Se realizó la elaboración de documentos técnicos de  identificación y caracterización de sitios críticos de amenazas en los municipios de: Caqueta, Putumayo y Amazonas, como insumo para su incorporación dentro de los instrumentos de planificación territorial como los Planes de Ordenamiento Territorial, planes municipales de gestión del Riesgo de desastres y planes de contingencia, apoyando igualmente al definición de obras, acciones o proyectos encaminados a la prevención y mitigación de riesgos en cada municipio.

					',
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
						'description' => 'Se realizó la implementación de una (1) estrategia
					productiva, que consistió en la siembra de 7
					chagras, distribuidas de la siguiente forma 4 en
					Amazonas, 2 en Putumayo y 1 en Caquetá.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 1,
						'description' => 'La Territorial Amazonas ejecuto el proyecto
					Formulación del Plan de Manejo Ambiental del
					territorio Indígena adscrito al Consejo Indígena
					de Puerto Alegría (COINPA) del Resguardo Predio
					Putumayo, departamento de Amazonas, por un valor
					de $463.802.466, con el cual se entrego el Plan de
					Manejo Ambiental Intecultural de la organización
					indígena COINPA.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
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
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 2,
						'description' => 'Actividades realizadas en el marco de la ejecución
					del proyecto practicas tradicionales.',
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
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 1,
						'description' => 'La Territorial Amazonas realizó en la vigencia
					2016, un documento preliminar de acuerdos
					interculturales para el aprovechamiento de los
					recursos naturales en territorios indigenas en el
					municipio de Leticia.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 58,
						'description' => 'Durante la vigencia 2017, se realizó la auditoria de seguimiento por ICONTEC y CORPOAMAZONIA ratifico  la certificación bajo la norma ISO 9001-2008',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 95,
						'description' => 'SIAC: Sistema de Información Ambiental de Colombia.
					100% Ingreso a la plataforma   Registros SNIF (96)
					84%   de Registros SIRH (220)
					100%   de Registros RESPEL (323)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 6,
						'description' => 'Jornadas de recolección de residuos sólidos en la jurisdicción y campañas de educación ambiental con diferentes entes y comunidad en general. Se logró recolectar un total de 15.141 kilogramos de residuos (1.524 Kg en Amazonas, 3.784 Kg en Caquetá y 9.833 Kg en Putumayo)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 16,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 1,
						'description' => 'Se avanza en la aplicación de la ruta para la declaratoria de  áreas protegidas en la cual se ha priorizado en el Departamento de Caquetá:  Cuenca Bajo Río Caguán, Paramo Miraflores y Distrito de Conservación de Suelos y Aguas de Caquetá, las cuales se encuentran en la fase I de acercamiento de la Ruta. Estas áreas cuentan con documentos de valoración de las iniciativas; objetos y objetivos de conservación, fichas de seguimiento a procesos, elaboración de Geodatabe y los polígonos indicativos de cada área igualmente se adelantan procesos de consolidación de trabajo con actores estratégicos y  esta activa la mesa técnica para bajo Caguán.
					Se avanza en el proceso de ampliación de la reserva de la cuenca alta del Rio Mocoa en su costado Sur y Norte con la intervención del MADS.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 1,
						'description' => 'Se implementa el Plan de Manejo  Reserva Forestal Cuenca alta del rio Mocoa (RFCARM). Contratación del plan de manejo para la restauración de 95 has en predios públicos, Mantenimiento  de 622 has, apoyo a los municipios de Mocoa y san Francisco en  al inclusión de componente ambiental  en sus planes de ordenamiento territorial. Aislamiento de 102 has de predios contiguos a la RFPCARM y que serán cedidos a la CORPORACIÓN por INVIAS y la contratación de 5 guardabosques para realizar monitoreo directo y continuo a la reserva.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 3,
						'description' => 'Caquetá: Firma del acuerdo por la madera legal, que permitirá el desarrollo de la cadena productiva y la mesa forestal, el empoderamiento y fortalecimiento del gremio de productores y transformadores de la madera. Realización de Mesas Forestales con los departamentos del Caquetá, Guaviare, Putumayo y Amazonas, como espacios de diálogo y articulación de acciones de control a la deforestación.
					Putumayo: Realización de (17) Comités de Control y Vigilancia, donde se coordinaron operativos para el control a la movilización ilegal de flora y aprovechamiento ilegal de yacimientos mineros. Se realizó la firma del acuerdo por la madera legal en Puerto Asís. CDA y CORPOAMAZONIA firman carta de intención para celebrar un convenio marco interadministrativo, con el fin de fortalecer el ejercicio de la autoridad ambiental en la Amazonia Colombiana.
					En Amazonas: Actualización del Acuerdo Intersectorial por la Madera Legal y la creación de una ordenanza departamental que permita darle fuerza de ley a la iniciativa.
					Se realizaron 326 medidas de control y vigilancia (39 Amazonas, 165 Caquetá y 122 Putumayo)  acciones que permitieron la recepción de 7950 especímenes de fauna silvestre.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 339,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 1,
						'description' => 'Se consigue la aprobación ante el OCAD de Corpoamazonia del proyecto denominado   Formulación del Plan de Ordenamiento del Recurso Hídrico del Río Orito, Departamento del Putumayo en jurisdicción de Corpoamazonia Orito. Código BPIN 20173223000008  ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 1,
						'description' => 'Se formulo el Plan de  Gestión Ambiental (PGAR) 2017-2019 el cual fue dispuesto a Consulta Pública para que cualquier ciudadano realice sus observaciones, en aras de ser consideradas en la elaboración definitiva de este documento.
					Se actualizaron   los procedimientos y términos de referencia para regular las concesiones de agua, permisos de vertimientos, PSMV, PUEAA, exploración sísmica terrestre, planes de contingencia para el transporte de hidrocarburos, derivados y sustancias nocivas',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 543,
						'description' => 'La meta propuesta es realizar seguimiento al 90% de 726 expedientes (653 expedientes)
					DTP: 370 de 380 (97%) 
					DTC:  116 de 242  (48%)  
					DTA:  57 de 104  (55%.)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 169,
						'description' => 'Tiempo aproximado por Departamento

					  DTP: 148 Días
					  DTC:  148 Días
					  DTC:  210 Días',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 69,
						'description' => 'En la Jurisdicción se apertura 216 procesos sancionatorios, como meta se propone resolver el 50% (108 procesos)  y se fallaron 69 correspondiente a un 31%.

					Putumayo: Aperturados 74, Fallados 50 (67%).
					Caquetá: Aperturados 76, Fallados 10 (13%)
					Amazonas: Aperturados 66 y Fallados 9 de otras vigencias.(13%)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 1,
						'description' => 'Se formulo el Diagnóstico y Recuperación del área afectada y no atendida del Pozo Azul Grande ubicado en puerto asís. 
					Entidades participantes: MADS, Min. Minas, AHH, Gran Tierra Energy y CORPOAMAZONIA',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 126,
						'description' => 'Se realizó a través de la Restauración Pasiva la recuperacion de 196 hectáreas superando la meta establecida de 126 hectáreas.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 600,
						'description' => 'A través de la implementación del PMASIS se viene adelantando la reforestación 655 hectáreas en la zona de la reserva forestal protectora de la cuenca alta del rio Mocoa.
					Además a través de la ejecución de Subproyectos de inversión ambiental:   Recuperación de ecosistemas degradados en los Departamentos de Caquetá y Putumayo  .
					Inversiones para la preservación y restauración de ecosistemas a través del aprestamiento e impulso de las cadenas de valor de Caquetá, Putumayo y Amazonas, se realizó el enriquecimiento de 32 hectáreas distribuidas de la siguiente manera: Putumayo: Doce (12) hectáreas, Caquetá: Cuatro (4) hectáreas, Amazonas: Diez y seis (16) hectáreas y Fortalecimiento de la Gobernanza Forestal en la jurisdicción de CORPOAMAZONIA.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 19,
						'description' => 'Putumayo: Realizo seguimiento a la implementación de 13 PSMV.
					Caquetá: Seguimiento a 4 PSMV de los municipios de Curillo, Morelia, San José del Fragua y Milán.
					Amazonas: Seguimiento a 2 PSMV de Leticia y Puerto Nariño.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 22,
						'description' => 'Putumayo: 
					Seguimiento a la implementación de 13 PUEAA en el departamento.
					Se hace el requerimiento  a  los 13 municipios para que realicen la actualización del instrumento (PUEAA)
					Caquetá: 
					Seguimiento y revisión documental a 8 PUEAA de los 14 aprobados en el Departamento.
					Amazonas: Seguimiento  2 PUEA del municipio de Leticia y  Puerto Nariño.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 3,
						'description' => 'Formulación de los documentos de las fases de aprestamiento y diagnóstico del POMCA del Río Hacha y ejecución del PMA del Sistema Hídrico San Antonio.
					Formulación del documento de la fase de Aprestamiento de la Subzona Alto río Putumayo.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 1,
						'description' => 'Fueron aprobados por parte del OCAD de Corpoamazonia, recursos de inversión provenientes del Sistema General de Regalías-SGR, para ejecución del proyecto   Formulación del Plan de Ordenamiento del Recurso Hídrico del Río Orito, Departamento del Putumayo en jurisdicción de Corpoamazonia Orito. Código BPIN 20173223000008  ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 4,
						'description' => 'La Territorial Amazonas de Corpoamazonia adopto el Plan de Manejo Ambiental de la microcuenca Yahuarcaca mediante Resolución No. 1401 del 31 de octubre de 2016 y actualmente se están generando acciones para su implementación.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 7,
						'description' => 'Amazonas: Seguimiento a las metas de aprovechamiento PGIRS de los Municipios de Leticia y Puerto Nariño.
					Caquetá: Seguimiento a cuatro (4) PGIRS del departamento: San Vicente del Caguán, Cartagena del Chairá, Albania y Morelia. 
					Putumayo:  Seguimiento al  PGIRS del Municipio de Mocoa',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 3.5,
						'description' => 'Se publicaron los siguientes documentos: 
					“Plan de conservación para Oso Andino (Tremarctos ornatus) y Danta de Montaña (Tapirus pinchaque) en el Departamento del Putumayo”.
					“Serranías del Guaviare, Guaviare, Colombia. Anfibios y reptiles de la Serranía La Lindosa, Cerro Azul y El Capricho”.
					 “Alternativas sostenibles para la protección y conservación de los bosques de la Amazonia Colombia”. 
					Se firmaron OCHO (8) convenios producto de las alianzas estratégicas a realizadas por CORPOAMAZONIA:
					Miércoles de biodiversidad  se realizaron SEIS (6) conferencias con una participaron 499  personas de manera presencial y 5819 a través redes sociales.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 4.2,
						'description' => 'El plan de colección de Suruma se encuentra en un 80%.
					Se levanta el informe de funcionamiento del Parque temático SURUMA. 
					Se avanza en el diseño e implementación de ensayos de propagación de tres especies nativas amenazadas. 
					Se continúa con la propagación de 20 especies forestales productoras protectoras.
					Se implementa un programa de educación ambiental en el Parque temático de fauna emblemática Suruma.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 2.4,
						'description' => 'Se ha participado en las Alianzas Productivas con Asociaciones, para el fortalecimiento y articulación  en  líneas productivas de  cacao, palmito, pimienta, sacha inchi,  ganadería (Sistemas silvopastoriles) y piscicultura (cachama). En cuanto a los sectores priorizados, los mismos se articulan con la clasificación de la categoría bienes y servicios sostenibles provenientes de los recursos naturales del Programa de Negocios verdes enfocado así: Sector Biocomercio (turismo de naturaleza, Productos no maderables).',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 3.2,
						'description' => 'Se formalizó  la ventanilla de negocios verdes del sur de la amazonia bajo resolución  No 798 del 20 de junio de 2017.

					Ejecución del proyecto   Negocios Verdes - Nodo Amazonia en los departamentos de Amazonas, Caquetá y Putumayo“.

					Visitas de seguimiento en los departamentos de la jurisdicción donde se identificaron 42 empresas activas en Amazonas, 50 en Caquetá y en 68 en Putumayo.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 7,
						'description' => 'Con el apoyo de la Fundación Omacha y WWF Colombia, se lidera la investigación “Un río Cuatro países”. 
					Se publicó  junto con la WWF el libro “Plan de conservación para Oso Andino (Tremarctos ornatus) y Danta de Montaña (Tapirus pinchaque) en el departamento del Putumayo”',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 2,
						'description' => 'Ejecución de acciones de prevención, manejo y control del caracol gigante africano, se remitieron lineamientos a las Secretarías de salud departamentales y municipales, ICA, Policía Nacional.
					Se realizaron reuniones interinstitucionales para la prevención y control de caracol  Gigante Africano en los municipios de Mocoa y Villagarzón.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 2,
						'description' => 'El fondo de compensación ambiental aprobó el proyecto denominado “Plan de Manejo y Gestión de los Complejos de páramos Miraflores Picachos en Caquetá”.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 5,
						'description' => 'Capacitaciones  en centros de formación (Aurora, Anaconda, CEA, Centros de servicios Ambientales), 20 acompañamientos a los CIDEAS Municipales. 

					Convenio de cooperación con (Visión Amazonia, Conservación Internacional, Corpoica y MEN ) para fortalecer la gestión  ambiental, 5984 Personas sensibilizados en hábitos ambientales , conmemoración de fechas ambientales.

					Implementación de Dos Estrategias de comunicación participativa.

					Acompañamiento a las juntas de acción comunal, comités ambientales y de la sociedad civil en gestión ambiental de la jurisdicción.

					Acompañamiento a 75 instituciones educativas  talleres comunitarios frente al manejo del caracol africano, manejo de residuos sólidos, y gestión del recurso hídrico y articulación con movimientos ambientalistas (Caquetá Diversa) para fortalecimiento organizacional de la Red, Nodo Puerto Rico en lanzamiento Libro   Somos Ambiente y Paz  , Nodo Cartagena del Chairá en jornada del Día Internacional de los Bosques',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 11,
						'description' => 'La Territorial Amazonas realizo capacitaciones al Comité de Verificación de sitios críticos de amenaza en los municipios de Colón, Santiago, Sibundoy y San Francisco y se adelantaron visitas de verificación de ocupación de rondas hídricas y áreas de inundación en los municipios de Sibundoy, Santiago, Colón, San Francisco, Valle del Guamuez, San Miguel y Villagarzón.
					Se realizó la visita técnica de verificación de sitios críticos de inundación y socavación lateral de cauces en el área urbana del municipio de Leguízamo.
					Acompañamiento técnico de concertación en proceso de ajuste del EOT del municipio de La Montañita - Caquetá.
					Se realizó la asesoría al municipio de Puerto Asís en el tema de amenaza por inundación por el río Putumayo y el acompañamiento técnico en proceso de definición de Sistema de Alerta Temprana para el municipio de Mocoa. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 1.7,
						'description' => 'Se ejecutó un proyecto de fortalecimiento a las prácticas tradicionales   con pueblos indígenas  y afrodecendientes en la jurisdicción.
					Se suscribió un convenio con la alcaldía de Villagarzón “Implementación de plantaciones de Chontaduro fruto (Bractis gasipaes) en sistemas Agroforestales como alternativa de producción Sostenible en Comunidades Afrodescendientes del Municipio de Villagarzón Putumayo”',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'description' => 'Realizó la formulación de un proyecto de ordenamiento territorial indígena y gestión del riesgo del resguardo Santa Rita del municipio de Leguizamo el cual inicio ejecución en Diciembre de 2017 en convenio de la asociación ACILAPP.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 2,
						'description' => 'Se formuló el proyecto para el fortalecimiento de la educación ambiental propia del pueblo  inga de los departamentos del Putumayo y Caquetá, el cual inicio ejecución en Diciembre de 2017 en convenio con la asociación Tandachiridy Ingahokuna. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 1,
						'description' => 'Caquetá: Socializaron  5 Procesos de  herramientas de participación y normatividad étnica.  
					Se realizo la socialización del plan de desarrollo Afrocaqueteño y la ley 70 de 1993, en los municipios de San Vicente del Caguán y Cartagena del Chaira, con las comunidades Afros.
					Se estableció un rubro económico para apoyar el proceso de consulta previa de 68  comunidades  indígenas y 6 territorios colectivos dentro del proceso de formulación del POMCA de la Subzona Hidrográfica Alto Río Putumayo. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 1,
						'description' => 'Municipio de San Vicente del Caguán y Solita, socialización del Decreto 4635 del 2011, la Ley 70 del 93, acuerdos de articulación para frenar la deforestación. 
					Se está ejecutando  un proyecto de fortalecimiento Institucional en el que se adelantan estrategias de gobernanza de los recursos naturales tales como: 1. Un acuerdo de manejo y uso de los recursos naturales del territorio del puerto sábalo en el municipio de Solano en el departamento del Caquetá. 2. Un corredor bilógico en el resguardo yurayaco que consiste en vincular una franja de bosque con el parque natural alto fragua INDI-WASI en el municipio San José del Fragua en el departamento del Caquetá',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 98,
						'description' => 'Actualización del certificado “ICONTEC ISO 9001- VERSION 2008 a 2015”.
					Seguimiento al plan de mejoramiento de auditoría externa e interna.
					32 Acciones Correctivas de auditoria interna y 6 Acciones Correctivas de auditoria Externa

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 86,
						'description' => 'SIAC: Sistema de Información Ambiental de Colombia.
					SNIF: 2.431 Registros Ingresados de 2.431 100%
					SIRH: 94  Registros Actualizados de 100        94%
					SIUR: 98 Registros Actualizados de 134         73%  
					RUA: 34 Registros Actualizados de 44            77%
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 8,
						'description' => 'Socialización Mapas de ruido con los municipios: Montañita, San Vicente, El Doncello, Florencia, Mocoa y Leticia; y   concertación para su incorporación en el ordenamiento territorial.
					Putumayo (Taller contaminación auditiva) dirigido alcaldías de Puerto Asís, Mocoa, San Miguel, Valle del Guamuez y la Dorada.
					Acciones en GAU en 6 municipios (Puerto Asís, Mocoa, Sibundoy San Francisco , Colon y Santiago): espacio publico 
					Socialización Mapas de ruido, municipios: Florencia en Caquetá y Mocoa en Putumayo y   concertación para su incorporación en el ordenamiento territorial.
					Taller contaminación auditiva con alcaldías de Puerto Asís, Mocoa, San Miguel, Valle del Guamuez para comerciantes y propietarios de establecimientos públicos.
					Segunda Jornada POSCONSUMO en 8 municipios - Putumayo, 1 - Cauca 21,3 toneladas recolectadas con una de cobertura de 489.078 habitantes .
					Primera etapa Construcción colector interceptor en el Caño El Despeje, municipio de Florencia, Incluyendo el tratamiento final (ejecución al 100%.)
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 16,
						'description' => 'MUNICIPIOS ASESORADOS EN COMPONENTE AMBIENTAL EN LOS PROCESOS DE PLANIFICACIÓN Y ORDENAMIENTO TERRITORIAL
					Putumayo: 8 (Villagarzon, Santiago, Mocoa, Orito, Puerto Asís, Sibundoy, San Miguel y  leguizamo)
					Caquetá: 6 (Florencia, La Montañita, San Vicente del Caguán, Milán, San José del Fragua y El Doncello) 
					Amazonas:  2  (Leticia y Puerto Nariño)

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 1,
						'description' => 'Proceso Declaratoria Rio San Juan Fase I ( Preparación) 20%
					Reserva Forestal de la Cuenca Alta del Rio Mocoa. 58,3%
					Complejo de Páramos Miraflores_Picachos en Caquetá. En proceso inscripción RUNAP 95%
					Área de bajo Caguán. 40%.
					Determinación del DCSAC, como Estrategia Complementaria de Conservación 80%.

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 1,
						'description' => 'Se avanza en el proceso de declaratoria de Miraflores en Caquetá, que a octubre de 2018 finaliza la Fase III, de declaratoria.
					Se avanza en la construcción del documento denominado Plan de establecimiento y manejo forestal para un área de 95 ha en las veredas Minchoy, Patoyaco, San Martin, Campucana  y san Luis de Chonta Yaco.

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 3,
						'description' => 'Caquetá: 72 Operativos Control Vigilancia; (43 móviles y 29 puestos fijos), 2.213 m3 de madera y 180 bultos de carbón vegetal en 1083 vehículos revisados.
					Putumayo: Estrategia Burbuja Ambiental, 2 Operativos por extracción ilegal de yacimientos mineros, 696 personas capacitadas, 2 comunidades sensibilizadas y capacitadas,  3 comités  Institucionales municipales, 78 operativos de  control y vigilancia con 1229 m3 de madera monitoreados, de los cuales 141.66 m3 fueron decomisados det 1199 vehículos revisados.
					Amazonas: 17 decomisos de productos forestales  ( 12 maderables y 5 no maderables)
					 50 actuaciones de control de fauna:  299 especímenes vivos recuperados ( 45 en Leticia y 254 en Puerto Nariño).
					Mesa Forestal “Formulación plan de acción contra la deforestación” en Leticia. 
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 339,
						'description' => 'En la Territorial Amazonas se atendieron 59 Peticiones, Quejas y Reclamos durante la vigencia 2016 y Se atendieron noventa y un (91) denuncias
					ambientales, fueron atendidas oportunamente 56,04 % que corresponden a 51 denuncias, los recursos más afectados fueron el hídrico y el recurso suelo.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 2,
						'description' => 'El PORH es el instrumento de planificación que define la conveniencia o no de adelantar en un determinado cuerpo de agua una reglamentación de uso del agua; es así como a la fecha el único PORH que se encuentra en marcha en la jurisdicción de CORPOAMAZONIA es sobre el Río Orito en el departamento de Putumayo, aprobado por el OCAD el pasado 03/10/2017mediante acuerdo 025 y acta 026 de la misma fecha por un valor de $1.529.989.047',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 1,
						'description' => 'El documento PGAR fue socializado y aprobado por el Consejo Directivo mediante acuerdo No. 008 del 27 de junio de 2018. .
					Resolución 0743 de 2018- Suspende la utilización de motosierras y discos de corte.
					Resolución 0586 de 2018 - Por medio de la cual se actualiza la tasa de aprovechamiento forestal y el valor del Salvoconducto Único Nacional
					Resolución 0996 de 2018 Diagnostico Ambiental de Alternativas (DAA). para proyectos de generación de Energía Hidroeléctrica con capacidad menor a 100 MW.
					Resolución 1246 de 24 de septiembre de 2018 “Establecen criterios de desarrollo de proyectos de Meliponicultura”.

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 543,
						'description' => 'Seguimiento a 246 expedientes de 435
					DTP: 156 de 202 (77%)
					DTC:  61 de 172  (35%)
					DTA:  29 de 61 (48%.)
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 169,
						'description' => 'Tiempo aproximado por Departamento
					  DTP:  155 Días
					  DTC:  126 Días
					  DTA:  88 Días
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 63,
						'description' => '697 procesos sancionatorios Vigentes 
					63 fallados correspondiente a un 9%.
					PUTUMAYO: Aperturados 22, Fallados 18 (81%).
					CAQUETÁ: Aperturados 28, Fallados 49 incluye otras vigencias.
					AMAZONAS: Aperturados 13 y Fallados 2 (15%)
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 1,
						'description' => 'Se formulo el Diagnóstico y Recuperación del área afectada y no atendida del Pozo Azul Grande ubicado en puerto asís. 
					Entidades participantes: MADS, Min. Minas, AHH, Gran Tierra Energy y CORPOAMAZONIA',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 95,
						'description' => 'Aislamiento: de 8 Km para un área de 30 hectáreas, en el proyecto Restauración de la cobertura vegetal en la Vereda Platoyaco en el municipio de Santiago, departamento del Putumayo.
					Plantaciones: 16 ha de sistemas agroforestales sostenibles “Maderables, plátano, chontaduro”  municipio Villagarzon Putumayo. 
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 600,
						'description' => 'Convenio cooperación  Prog Mundial Alimento – Corpoamazonia adelanta lo siguiente: 
					Restauración ; 8.193 hs  activa, 6,15 hs pasiva. Mocoa putumayo
					Canje ecológico Entrega 4049 bonos alimentarios a 8 veredas de Mocoa por trabajos restauración en área afectada  por movimientos en masa.
					Bosques de Paz “Barrio Condominio Norte y el Carmen”:
					 Identificación de núcleos a reforestar 
					Conformación grupo guardianes de paz  y 8 núcleos  de reforestar.
					Delimitación de los sitios  (trazo de ejes)
					Siembra de 150 plántulas de Chiparo y Guadua en área deforestada por evento 31 Marzo
					Convenio: Corpoamazonia- CI : Donación 3,471 plántulas, para  3,5 ha restauradas 
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 27,
						'description' => 'PUTUMAYO
					Seguimiento y monitoreo
					13 PSMV
					Santiago, Colón, Sibundoy, San Francisco, Mocoa, Villagarzón, Puerto Guzmán, Puerto Caicedo, Puerto Asís, Orito, Valle del Guamuéz, Puerto Leguizamo y San Miguel. 
					CAQUETÁ
					Seguimiento a 
					6 PSMV
					Curillo, Paujil, Solano, Puerto Rico, Belén de los Andaquíes  y La Montañita
					AMAZONAS
					Seguimiento a 
					2 PSMV
					En Leticia y Pto. Nariño
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 31,
						'description' => 'PUTUMAYO
					Seguimiento y monitoreo
					13 PSMV
					Santiago, Colón, Sibundoy, San Francisco, Mocoa, Villagarzón, Puerto Guzmán, Puerto Caicedo, Puerto Asís, Orito, Valle del Guamuéz, Puerto Leguizamo y San Miguel. 
					CAQUETÁ
					Seguimiento a 
					6 PSMV
					Curillo, Paujil, Solano, Puerto Rico, Belén de los Andaquíes  y La Montañita AMAZONAS
					Seguimiento a 
					2 PSMV
					En Leticia y Pto. Nariño




					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 3,
						'description' => 'Se aprobó el documento de la fase de Prospectiva y Zonificación Ambiental del POMCA del río Hacha.

					Se formularon y aprobaron las fases de aprestamiento, diagnóstico, prospectiva y formulación del POMCA del rio Hacha necesarias para la consolidación del documento final.

					Se tiene una propuesta proyectada de la resolución de adopción del POMCA del Rio Hacha y se inicia el proceso de publicidad
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 1,
						'description' => 'PROYECTO PORH RÍO ORITO EN EJECUCION
					Fuente Financiación: OCAD regalías $ 1.529,898,047
					Etapas:
					ALISTAMIENTO INSTITUCIONAL 
					DIAGNÓSTICO 
					IDENTIFICACIÓN DE USOS POTENCIALES
					FORMULACIÓN 

					Resultados:
					Documento de alistamiento institucional
					Res. 0518 2018 - Declara en Ordenamiento el río Orito
					Acuerdos y protocolización de consulta previa  con 25 comunidades indígenas y 7 territorios colectivos

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 4,
						'description' => 'Ejecución siguientes Planes: 
					Plan de Ordenación y Manejo de la Cuenca Alta-Alta del Río  Putumayo.
					Plan de Manejo de la Quebrada Yahuarcaca.  
					Plan de Manejo del Sistema Hídrico San Antonio.
					Plan de Ordenación y Manejo de la Cuenca del Río El Doncello.
					Plan de Ordenación y Manejo de la Cuenca del Río Yarumo. Las principales actividades son de restauración, estabilización de taludes, enriquecimiento forestal,  protección de rondas hídricas, educación ambiental, manejo de residuos solidos.
					Otras Acciones Municipio valle del Guamuez:
					Construcción Red alcantarillado sanitario Vereda Santa Rosa 
					Una planta de tratamiento aguas residuales  funcionando 100% 
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 20,
						'description' => 'PUTUMAYO
					Seguimiento a 11 PGIRS :
					Santiago, Colón, Sibundoy, San Francisco, Mocoa, Puerto Guzmán, Villagarzón, Puerto Caicedo, Orito, San Miguel y Valle del Guamuez 
					CAQUETÁ
					2 Visitas técnicas 
					Municipios de Albanía y Morelia. 
					AMAZONAS
					2 Visitas técnicas 
					Leticia y Puerto Nariño

					  
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 5,
						'description' => 'I simposio de Meliponicultura en Colombia 
					Miércoles de Biodiversidad
					Dos proyectos aprobados “Conservación de la abejas nativas y conservación de tortugas”
					Publicación de la cartilla la Chagra Sostenible comunidad indígena puerto  Asís.
					60 Acciones de divulgación ”Protección Recursos Naturales Fauna-Flora”, (Pagina Web,  Radio,  Calendario Ecológico,  Redes sociales, foros contra la deforestación)
					Dos cartillas divulgativas “Actualizacion POMCA Rio Hacha y Nuestra fauna silvestre”.
					3  Investigaciones :
					Evaluación productiva del grillo amazónico en tres ambientes confinados
					Evaluación de un sistema tipo chagra para la producción de forraje para alimentación de herbívoros. 
					 
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 7,
						'description' => '299 personas capacitadas en Educación Ambiental CEA.
					Ensayo y transplante de 18.864 Plántula de Cedro Cebollo “Cedrela odorata”.
					Mejoramiento de 80 metros lineales de Sendero   Yagé”.
					Disponibilidad de  78.075 plántulas de 40 especies forestales en eras de crecimiento.
					Germinación de 2.063 Plántulas Forestales: 1.713 Cedro Cebollo  (Cedrela odorata) , 350 de Pino (Podocarpus oleifolius).
					Reporte financiero SURUAMA  Ingresos de $62.646.000 por concepto de entradas así: 12.176 visitantes (29% con enfoque diferencial, 62% adultos, 4% adolescentes y 2% extranjeros). 
					Edición de un 90% Libro plantas medicinales “uso y métodos preparación de 100 plantas medicinales ”
					Acuerdo proyecto COMUNICA: Equipamiento y certificación de laboratorio de aguas para realizar seguimiento y uso de recurso hídrico.
					Adecuación de áreas de manejo y rehabilitación de fauna silvestre en el CREAS y dotación clínica veterinaria con 5 elementos quirúrgicos
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 4,
						'description' => 'Se construyó una (1) mesa sectorial para el cacao en municipio del valle del Guamuez con la participación de la entidad alianza productiva y Ministerio de Agricultura; Convenio entre GIZ, ONUDC y con el SENA.
					Taller de manejo de plagas y manejo de agroquímicos con 60 Productores de Cacao de ASOPROCAF del municipio del Valle del Guamuez.
					Con preservar Colombia se implementa 10 hectáreas bajo arreglos agroforestales y con CORPOAMAZONIA se adelanta el modelo piloto de reconversión productiva.
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 3.2,
						'description' => 'Mesa interinstitucional del Caquetá para la operación de la ventanilla de negocios verdes nodo Caquetá 
					Asesoría a las empresas inscritas en el programa de Negocios Verdes de los Subsectores Turismo de Naturaleza, No Maderables, Maderables y Agrosistemas Sostenibles.
					Ocho eventos con la vinculación de  44 empresas para la promoción de los productos del programa de Negocios Verdes.
					Formación técnico-ambiental de alianzas productivas (Pimienta, Cacao, Palmito y caña) apoyadas por el programa alianzas productivas del Ministerio de Agricultura.
					Construcción de 25 planes de mejora a 25 empresas de negocios verdes (6 en Amazonas, 8 en Caquetá y 11 en Putumayo).

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 7,
						'description' => 'liberación de 111 Tortugas de las especie “Podocnemis unifilis” y Tortugas Arrau (Podocnemis expansa).
					Acciones de prevención, con: Familias  campesinas del corredor Aléa y entidades como  Amerisur y el ITP.
					30 entregas voluntarias de fauna silvestre en marco del proyecto CASA.
					Se rescataron 4 monos churucos (Lagothrix lagotricha) y Una incautación de Tigrillo (Leopardus Tigrinus) por tenencia ilegal en Puerto Leguizamo Putumayo. 
					Formación de 40 personas en Promotoría Ambiental Comunitaria en  conservación de aves en el corredor Alea en Puerto Asís  Putumayo.
					Educación ambiental para mitigar el conflicto entre Oso de anteojos y comunidad Campesina zona rural del Valle de Sibundoy

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 13,
						'description' => '29   Jornadas de Capacitación en prevención, control y manejo de especies invasoras (Caracol Gigante Africano (Achatina fulica)) logrando sensibilizar a 876 en  Caquetá y Putumayo.
					Recolección de 225 kilos de caracol gigante africano (Achatina fulica) en Mocoa, Villagarzón, Leguízamo  y Puerto Asís con participación de 253 personas de diferentes instituciones
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 2,
						'description' => 'El fondo de compensación ambiental financia por un valor de $500.000.000. 

					Ejecutor: Universidad Distrital Francisco José de Caldas

					Primeros paramos en Colombia con zonificación y régimen de uso
					Consolidación de la comisión conjunta con la CAM caso complejo de paramo Miraflores y con CORMACARENA para el complejo de paramo Picachos, con gestión y manejo.
					Insumos bases para la formulacion del  Plan de Manejo del AP – PRMP.
					Localizado en el sur de la cordillera oriental Piedemonte Andino Amazonico - Caquetá. 
					5 Municipios:
					San Vicente del Caguán. 
					Puerto Rico. 
					El Doncello. 
					El Paujil 
					Florencia 
					330. 235 habitantes 
					Extensión de 10.061,49 ha Complejo de Paramos.
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 10,
						'description' => 'Caquetá
					4 CIDEAS
					San Vicente del Caguán, Solano,  Solita y San José del Fragua
					Participación de 49 persona
					Putumayo
					5 CIDEAS
					Mocoa, Puerto Asís , Puerto Caicedo, Puerto Leguízamo y Orito
					 Participación de 176 personas 
					37 PRAES
					De instituciones educativas en los departamentos de Amazonas, Caquetá y Putumayo.
					4 Procedas :  asesorados y acompañado 3 en Caquetá y 1 en Putumayo.
					821 campañas Educación Ambiental (180 radio, 15 publicaciones web,  621 redes sociales y 5 videos ambientales)
					Suscripción de acuerdos o alianzas para la implementación de estrategias de educación ambiental.  CORPOAMAZONIA y la Fundación AGRITEAM CANADÁ CONSULTING LTD.
					(14) fechas Calendario  Ambiental: Total de 3.223 personas sensibilizadas enfocados  la protección y cuidado de los recursos naturales .
					Amazonas:  5  actividades – 299 personas.
					Caquetá: 13 Actividades -  492 personas.
					Putumayo: 24 Actividades – 2.432 personas.
					Red de Jóvenes : Asesoró y acompañó 3  en Caquetá “Montañita, Florencia y Valparaíso”, y putumayo conformación Red jóvenes de ambiente Nodo Mocoa.


					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 2,
						'description' => 'Evaluación de SAT Mocoa para complementación con
					sensores de movimiento
					Estaciones meteorológicas en proceso de
					instalación microcuenca Taruca y en Mulato en
					Mocoa 
					Análisis de datos meteorológicos de fuentes
					hídricas en Putumayo para establecimiento de
					Sistemas de Alerta Temprana',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 11,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 2,
						'description' => 'La Territorial Amazonas realizo capacitaciones al Comité de Verificación de sitios críticos de amenaza en los municipios de Colón, Santiago, Sibundoy y San Francisco y se adelantaron visitas de verificación de ocupación de rondas hídricas y áreas de inundación en los municipios de Sibundoy, Santiago, Colón, San Francisco, Valle del Guamuez, San Miguel y Villagarzón.
					Se realizó la visita técnica de verificación de sitios críticos de inundación y socavación lateral de cauces en el área urbana del municipio de Leguízamo.
					Acompañamiento técnico de concertación en proceso de ajuste del EOT del municipio de La Montañita - Caquetá.
					Se realizo la asesoría al municipio de Puerto Asís en el tema de amenaza por inundación por el río Putumayo y el acompañamiento técnico en proceso de definición de Sistema de Alerta Temprana para el municipio de Mocoa. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 2,
						'description' => 'Ejecución Proyecto: “Aplicación de Autoestimación del avalúo catastral de resguardos indígenas del departamento de Putumayo”
					Compilación de información jurídica de los 24 Resguardos Indígenas del Departamento del Putumayo.
					Se logro la formulacion del plan de ordenamiento propio del Resguardo Indígena Santa Rita de Puerto Leguizamo.
					En ejecución proyecto: “Formulacion Del Plan Integral De Vida Del Cabildo Indígena Inga   José Homero en Mocoa, - Putumayo.”
					En ejecución proyecto: “Construcción de Reglamento Interno Del Cabildo Indígena Puerto Rico Del Pueblo Kichwa en Leguizamo, - Putumayo”
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 2,
						'description' => 'Fortalecimiento a la educación ambiental propia 
					Caquetá: En el Centro de Capacitación indígena Reojaché y la Institución Educativa Coreguaje; y las comunidades indigenas Jerico Consaya y la Reserva comunitaria Manantial.
					Putumayo: Colegio Bilingüe Artesanal, Hogar Infantil Bacetemingnbe Yebna, Modalidad propia Intercultural y IE Atum Ñambi de Villagarzón.

					Ejecución “Proyecto de educación ambiental propia con el pueblo Inga con 6 instituciones etnoeducativas de Caquetá y Putumayo”, se han realizado recorridos territoriales para la caracterización de espacios de Uso y chagras, diálogos de saberes intergeneracionales con sabedores y estudiantes de 6 Instituciones Etnoeducativos de Caquetá y Putumayo, en el marco del Eje Nukanchipa Alpa , Territorio y Cosmovisión del modelo etnoeducativo del pueblo Inga.
					En ejecución Proyecto “Fortalecimiento de los espacios de gobernabilidad y educación propia del pueblo Inga, Murui y Kichwa en Caquetá y Putumayo”.

					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 2,
						'description' => 'Acompañamiento a procesos de consulta previa
					3 en Caquetá: 
					Centrales hidroeléctricas-cuenca del rio Guayas “Universal tream”.
					Adquisición sísmica – “Energy Colombia”.
					Perforación Exploratoria CEIBA – “Energy Colombia”.
					10 en Putumayo: 
					Sísmica Betra “Concejo comunitario primavera-puerto asís, Alto Paraíso-Orito”
					Gran Tierra (Concejo Comunitario “Puerto limón, Martin Lutherking, Orconepul, palenque, Madela y tesalia- Orito”).
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 2,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 2,
						'description' => 'Se ha proyectado hacer acompañamiento para la realizacion de tres acuerdos de manejo de los recursos en territorios indigenas: con comunidades indigenas del municipio de Mocoa, Leguizamo y Santiago en el departamento del Putumayo',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 90,
						'description' => 'PLATAFORMA TECNOLÓGICA
					Se amplia  el  ancho de banda  en un 50% en Leticia- Amazonas, Florencia – Caquetá, Leguizamo y Mocoa Putumayo mejorando así la calidad del servicio.
					Instalación de red y configuración de la intranet en el oficina de intención al ciudadano.

					INCONTEC
					Actualización del certificado “ICONTEC ISO 9001- VERSION 2008 a 2015”.

					IMPLEMENTACIÓN DEL MODELO INTEGRADO DE PLANEACIÓN Y GESTIÓN
					Actividades Dimensión MIPG: 100% del 32% Programado en el Plan Acción 2016-2019
					Talento Humano                         
					Gestión con Valores.
					Evaluación de Resultados.
					Información y comunicación.
					Actividades de control Interno.                  


					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 100,
						'description' => 'SIAC: Sistema de Información Ambiental de Colombia.
					SNIF:  100%  1014 Registros Ingresados de (1014)
					SIRH:100%  107  Registros Actualizados de (107)
					RESPEL: 86% 78 Usuarios actualizados de (90)


					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 22,
						'description' => 'Acciones En Gestión Ambiental Urbana en 22 Municipios así;

					28 Toneladas recolectadas en tercera Jornada de recolección de residuos post-consumo en 6 Municipios:
					Putumayo: Mocoa, Puerto Asís, Orito y Valle del Guamuez. Caquetá: Florencia Amazonas: Leticia

					6 campañas de Sensibilización a usuarios que transportan residuos de construcción y demolición-RCD

					Resolución 957 Socialización integral de los siguientes componentes para los 16 Municipios del departamento del Caquetá ( 12 campañas sobre sensibilización sobre uso eficiente y ahorro de agua Acotamiento de las rondas hídricas Ríos Sangoyaco, Rumiyaco y Pepino, Quebradas: Taruca, Taruquita, Conejo y Almorzadero en Putumayo)
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 13,
						'description' => 'Asistencia técnica en temas de seguimiento a la STC 4360 de 2018, Cambio Climático, Gestión del Riesgo de Desastre y se socialización de los Determinantes Ambientales a 13 MUNICIPIOS; 8 en Putumayo (San Miguel, Puerto Leguizamo, Puerto Caicedo, Valle del Guamuez, Puerto Guzmán, Puerto Asís, Orito, Villagarzón) 3 en Caquetá (Cartagena del Chaira, Puerto Rico, San Vicente del Caguan Florencia, El Doncello, Curillo, Solita, La Montañita, Morelia, Albania y Valparaíso ) y 2 Amazonas (Puerto Nariño y Leticia).',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 4,
						'description' => '1. Se avanzo en el proceso de declaratoria de las 4 Areas  áreas:
					 San Juan – Putumayo: Fase uno de preparación avance estimado de 15%. 
					 Bajo Caguan-  Caquetá, se encuentra en fase dos aprestamientos con un avance del 45%.
					 DCSAC- Caquetá: sobre el cual se corrió la ruta declaratoria dando como resultado la no viabilidad de la zona como área protegida  100%. Inicio de la zonificación como estrategia complementaria de conservación. 
					 Se avanza en la fase 2 de aprestamiento, de ruta declaratoria para la cuenca alta del Rio Mocoa.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 100,
						'description' => 'En ejecución los contratos para la realización del tercer mantenimiento a las 622 hectáreas reforestadas dentro de la reserva forestal protectora de la cuenca alta del río Mocoa, junto con un proceso de acompañamiento social a la comunidad del área de influencia. 
					Para el Proyecto de compensación por Levantamiento de Veda, en este periodo se realizaron los Estudio para la formulación e implementación de medidas de propagación de especies prioritarias de Brómelias, Orquídeas, líquenes, helechos arborescentes y musgos, se cuenta con seis (6) monografías para la consulta al público de estas especies priorizadas, se realizaron dos (2) talleres de capacitación en propagación de Brómelias y orquídeas con la participación de 80 asistentes de la comunidad de ambos municipios, con la intención de promover alternativas de sustento sostenible para los habitantes de la reserva, se cuenta con un cultivo de 5.000 ejemplares propagados de más de 300 especies para la zona de la reserva forestal en los municipios de Mocoa y San Francisco, logrando además consolidar una base de datos con más de 1.200 especies registradas para la zona, Se documentan por primera vez para el país 6 especies de orquídeas, encontradas en el Departamento del Putumayo, sobre el piedemonte Andino-amazónico, que se constituyen en nuevos reportes para el inventario nacional de orquídeas.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 100,
						'description' => 'Control y vigilancia de los Recursos naturales se realizaron 2 comité Departamental de CVR en Leticia, Florencia
					4 comités Municipales 1 comité de la Burbuja Ambiental en Putumayo 
					13 comités locales en los municipios de Puerto Guzmán, Leguizamo, Solano, Curillo, San Vicente del Caguán, Puerto Rico, Cartagena del Chairá, Valparaíso, San José del Fragua, San Vicente del Caguan, Cartagena del Chairá, Belén de los Andaquíes y Tarapacá

					Mesas Forestales; 15 reuniones de la Mesa Forestal en los municipios de Puerto Guzmán, Puerto Asís, Leguizamo y Leticia y capacitaciones en los siguientes temas:

					Protocolos 0, 1, 2 y 3 de Gobernanza Forestal 
					Productos maderables y no maderables, 
					SISA VITAL y SUNL

					Retos y oportunidades con las asociaciones, empresas de madereros y usuarios del bosque y especies del Cites en Amazonas 
					Pacto por la madera legal.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 78,
						'description' => 'Se atendieron un total de 105 quejas, reclamos, manifestación y/o peticiones; de las cuales se terminaron oportunamente un total de 82, correspondientes al 78.1%, Terminadas después de tiempo 15, correspondiente al 14.29%, Total terminadas 91 correspondiente al 92.38%, en trámite se encuentran 8 correspondiente al 7.62%',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 0.9,
						'description' => 'Revisión de la información del censo de usuarios, oferta y demanda hídrica en términos de calidad y cantidad para la zona de estudio según lo establecido en el PORH Del Río Orito, y elaboración del proyecto de distribución de aguas mediante el cual se definen la distribución de caudales del Río Orito de acuerdo a los usos del agua a asignar. 
					Se realizó el tercer comité técnico con la consultoría, con el objetivo de hacer Seguimiento a la ejecución de las actividades programadas en el marco del Contrato No. 0387 de 2019 y se hace entrega de los informes técnicos de avance en cumplimiento de dicho Contrato.
					REGLAMENTACION:
					Resolución 1761 de 25/11/2019 “Por medio de la cual se ordena la apertura del proceso de reglamentación de los usos y aprovechamientos de agua de la corriente hídrica del Río Orito, en la jurisdicción de los municipios de Orito, Puerto Asís y Puerto Caicedo, en el departamento del Putumayo, de acuerdo con el PORH formulado, en la jurisdicción de CORPOAMAZONIA”.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 2,
						'description' => 'Resolución 1246 “Por medio de la cual se establecen criterios para el desarrollo de proyectos de Meliponicultura”.
					Resolución 1243 “Por medio de la cual se reglamenta el aprovechamiento sostenible de productos forestales no maderables mediante el modo de asociación”.
					Gestión y evaluación de 5 tramites ambientales para el aprovechamiento de productos no maderables en predios  privados y públicos en Puerto Asís - Putumayo, la Pedrera y Tarapacá – Amazonas, en 429 has. 

					GIAS AMBIENTALES:
					4 de Asaí: Asociación de productores agropecuarios del Paraíso (ASOPARAISO) (2), Zona de reserva campesina la Perla Amazónica (1), Junta de acción comunal vereda Madroño (1).
					1 de Camu – camu: Asociación de mujeres comunitarias de Tarapacá ASMOCUTAR.  

					Identificación de la oferta de Asaí en 24 veredas de la reserva campesina la Perla Amazónica del Municipio de Puerto Asís - Putumayo.
					Elaboración de 2 planes de manejo de Asaí (Euterpe precatoria) en 650 ha de bosque natural del municipio de Leguízamo. 
					Apoyo en la formulación del Plan de manejo forestal maderable en modo asociación, 100 has en Inspección Galilea, ASOFOREST

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 457,
						'description' => 'De acuerdo con los informes suministrados por las direcciones territoriales de Amazonas, Caquetá y Putumayo, de los 851 expedientes asignados para seguimiento a A 22 de Noviembre, se realizaron 457 seguimientos, lo cual equivale al 54%. A continuación, se discrimina el seguimiento por departamento:
					Amazonas: Realizó seguimiento a 53 de 69 expedientes, equivalente al 77%
					Caquetá: Realizó seguimiento a  87 de 301 expedientes, equivalente al 29%
					Putumayo: Realizó seguimiento  a 317 de 481 expedientes, equivalente al 66%.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 36,
						'description' => 'De los 329 tramites otorgados, 36 tramites cumplieron con los tiempos establecidos acorde al procedimiento P-LAR-002, correspondiendo a 1 de licencias ambientales, 4 de Permisos arboles aislados, 8 Permisos de Vertimientos, 4 de emisiones atmosféricas, 6 Permiso de prospección de aguas subterráneas Autorizaciones de Ocupación de Cauces, playas y lechos y   12 Concesiones de Aguas, alcanzando un porcentaje de cumplimiento del 11.
					El tiempo promedio efectivo de trámite consolidado de enero noviembre corresponde a 193 días hábiles cumpliendo en el 2019 el 45% de la meta fijada.
					El tiempo promedio de trámites por territorial es el siguiente:

					 Amazonas: 245 días.
					 Caquetá: 155 días 
					 Putumayo: 178 días
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 45,
						'description' => 'De acuerdo con los informes suministrados por las direcciones territoriales de Amazonas, Caquetá y Putumayo, para el segundo semestre de 2019, se aperturaron 51 procesos de los cuales se fallaron 46, así.

					PUTUMAYO: Aperturados 26, Fallados 24 (92%).
					CAQUETÁ: Aperturados 17, Fallados 14 (82%)
					AMAZONAS: Aperturados 8 y Fallados 8 (100%) 

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 0.8,
						'description' => 'Se avanzó en la formulación del documento de pasivos ambientales, en el cuál para el tercer trimestre del año se identificaron y valoraron un total de 13 pasivos ambientales actuales, relacionados a la actividad de extracción minera ilegal de oro aluvial, de estos pasivos ambientales, se realizó en gran parte un análisis multitemporal para evaluar sus condiciones actuales. Para los sectores agropecuarios y de residuos no se comprobó la existencia de pasivos ambientales por estas actividades productivas.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 122,
						'description' => 'En el marco proyecto “Implementación de estrategias para recuperar coberturas y restaurar áreas degradadas en los departamentos del Caquetá y Putumayo   se instaló 19,57 hectáreas de sistemas productivos: 
					Departamento del Caquetá: 
					a) Municipio de San Vicente del Caguan, veredas Arenoso y Alto Arenoso: 5 ha.
					b) Municipio de Puerto Rico, veredas El Carmelo, Alto Carmelo y la Estrellita:4 ha. 

					Departamento del Putumayo: 
					a) Municipio de San Miguel, veredas San Fernando y San Vicente: 2 hectáreas 
					b) Municipio del Valle del Guamuez, veredas Alto Palmira y Miravalle: 5 hectáreas. 
					c) c) Municipio de San Francisco, veredas el Diamante y San Pablo: 3,57 hectáreas.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 641,
						'description' => 'Proyecto “Rehabilitación ecológica y participativa de la cuenca del Rio Doncello en Caquetá.” 

					• 300 ha con servicios de protección de ecosistemas.
					 
					• 278 ha implementación de sistema agroforestales:
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 19,
						'description' => 'Planes de Saneamiento y Manejo de Vertimientos (PSMV) se realizó Seguimientos a 19 Municipios (6 de Caquetá, 11 del Putumayo y 2 seguimientos a PSMV con apertura de PASA en el Amazonas.)',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 16,
						'description' => 'Se realizo seguimiento de PUEAA a 16 Municipios asi;
					Caquetá: 9 Municipios con evaluaciones
					Putumayo: 4 Municipios con evaluaciones
					Amazonas: 2 Municipios con evaluaciones (Leticia y puerto Nariño).

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 4,
						'description' => 'Se formulan y adoptan de 2 POMCAS Y 2 PMM asi.
					1. Plan de Ordenación y Manejo de la Cuenca Hidrográfica del rio Hacha. Resolución 1666 de 2018.
					2. Aprobada la fase de Aprestamiento del Plan de Ordenación y Manejo de la Subzona Hidrográfica del rio Alto Putumayo
					3. Plan de Manejo de la microcuenca quebrada Yahuarcaca. Resolución 1401 de 2016.
					4. Plan de Manejo de la microcuenca San Antonio. Resolución 1784 de 2016.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 1,
						'description' => 'Se formulan y adoptan: 
					1. Plan de ordenamiento del recurso hídrico (PORH) del río Orito. Resolución 1188 de 2019.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 2,
						'description' => 'En el marco del componente programático de los POMCAS en relación a los programas de conservación, protección y restauración forestal, se avanza en la formulación de dos proyectos así: 

					a) Construcción y operación de un vivero permanente predio los lagos municipio de Leticia, departamento de amazonas por un valor de 114.000.000,00

					b) construcción y operación de un vivero permanente en el municipio de Florencia, departamento de Caquetá por un valor de 200.000.000,00
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 10,
						'description' => 'Se realizaron diez (10) visitas de control y seguimiento a la implementación del Plan de Gestión Integral de Residuos Sólidos como se detalla a continuación: en Putumayo se realizó seguimiento a cinco (5) municipios, Puerto Asís concepto técnico DTP 0890 del 18/11/2019, Orito concepto técnico DTP 0912 del 7/11/2019, Puerto Caicedo concepto técnico DTP 0911 del 22/10/2019, Puerto Guzmán concepto técnico DTP 0914 del 22/117/2019 y Puerto Leguizamo concepto técnico DTP 0913 del 15/11/2019. En Caquetá realizo a cinco (5) municipios como Solano concepto técnico DTC 0582, Florencia concepto técnico DTC 0722, El Doncello concepto técnico DTC 0761, Puerto Rico concepto técnico 0763 y Morelia concepto técnico DTC 0772. En Leticia realizo a dos (2) municipios.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 90,
						'description' => 'Se emitieron 14 Boletines de las actividades más relevantes en el CEA en forma de noticias cortas para las redes sociales institucionales en la temática de usos de las plantas medicinales en el Jardín Botánico, Fauna silvestre, Seguridad y Salud en el Trabajo, Guianza Turística y Educación Ambiental.

					Implementación del proyecto   Desarrollo de estrategias para la conservación y preservación de ecosistemas en el marco del PARBSAC en la jurisdicción de la Corporación Amazonas, Caquetá y Putumayo  .  
					A la fecha el proyecto se ha socializado en los municipios de Leguizamo, Puerto Asís, Leticia, Puerto Guzmán, San José del Fragua y San Vicente del Caguán. 
					Así mismo, se tienen identificados 87 puntos en donde se establecerán las 200 parcelas. Estos puntos se identificaron y se seleccionaron por tener aprovechamientos forestales vigentes. El proyecto tiene una duración de 11 meses empezando desde febrero y finalizando en diciembre del presente año.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 5,
						'description' => 'Acciones parque Suruma: 
					 Construcción de Casa comedero en el hábitat de Dantas.
					 Limpieza, adecuación y apoyo en el enriquecimiento ambiental del hábitat de tigrillos en el CREAS a cargo del equipo técnico.
					 Se realizó la limpieza, adecuación y apoyo en el enriquecimiento ambiental del hábitat 37  en el CREAS a cargo del equipo técnico.
					 Se realizó adecuación de hábitat 33 de CREAS.
					 Se realizó la construcción y adecuación de comederos en  el hábitat de Dantas en Suruma.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 90,
						'description' => 'Como avances de la Experiencia Piloto en el marco de la alianza productiva con PRESERVAR Colombia, se realizó la articulación con diferentes actores de la cadena así: 

					1. Reunión con la Alcaldía del Valle del Guamuéz donde participaron Secretaría de Agricultura Municipal y otros actores con el fin de apoyar el proceso adelantado por la Asociacion de productores de cacao de la Florida -ASOPROCAF-. 
					Así mismo se realizaron 7 Visitas en campo de seguimiento a los productores de cacao de ASOPROCAF, para prestar el acompañamiento en el manejo poscosecha y verificar avances en la alianza productiva con PRESERVAR Colombia.  
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 100,
						'description' => 'Se elaboró acuerdo de adopción del   Plan de la Unidad de Ordenación Forestal Yarí-Caguán   en una extensión de 686.771,76 Ha en la superficie correspondiente al municipio de Cartagena del Chairá, departamento de Caquetá, el cual se encuentra para aprobación del Consejo Directivo de CORPOAMAZONIA.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 100,
						'description' => '4 ventanillas de negocios verdes para la estructuración y seguimiento al plan de trabajo a elaborar para el año 2020.

					Se realizó la recopilación de las matrices de criterios de negocios verdes y se avanzó en la revisión y recopilación de 175 planes de mejora.

					“CONCURSO DE NEGOCIOS VERDES DEL SUR DE LA AMAZONIA COLOMBIANA. EMPRENDIMIENTO, AMBIENTE Y PAZ”.

					4 Muestras empresariales en el marco de la celebración del día de la niñez, celebración del taller construyendo país en Mocoa, el marco de la cumbre de gobernadores en Florencia – Caquetá y Mayoyoque Municipio de Puerto Guzmán.

					5 reunionés de ventanillas de Negocios verdes 1 en Putumayo, 2 en Amazonas y 2 en Caquetá.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 5,
						'description' => 'En el proceso de control y vigilancia se han desarrollado acciones para 5 especies :
					Panthera onca: a través de la medida Entrega voluntaria, el ejemplar se encuentra en las instalaciones de CAV provisional de fauna en la ciudad de Leticia.
					Lagothrix lagothricha: En el periodo que comprende enero a marzo de 2019, ingresaron siete ejemplares vivos seis se encuentran en hogar de paso en el departamento de Caquetá y uno se encuentra recibiendo atención médica veterinaria en el CAV de Mocoa.
					Podocnemis expansa:
					En el periodo que comprende de enero a marzo de 2019, se recuperaron 12 ejemplares vivos, los cuales tuvieron como destino final la liberación.
					Podocnemis unifilis:
					Ejecución del proyecto   Conservación de félidos silvestres en la subzona hidrográfica Alto río Putumayo hasta Cuimbè en el departamento de Putumayo  , para dos especies amenazadas, Leopardus tigrinus y Panthera Onca; en el piedemonte andino amazónico, sobre los municipios de Santiago, San Francisco, Mocoa, Sibundoy, Colón, Villagarzón, Puerto Caicedo, Orito, San Miguel y Valle del Guamuez, los cuales se ubican sobre la Subzona hidrográfica Alto Putumayo Hasta Cuimbè del Departamento del Putumayo.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'description' => '1315 personas capacitadas en control y manejo de caracol Gigante Africano en 33 Jornadas.
					10 en Caquetá.
					23 en Putumayo.
					10 Jornadas de control físico-químico aplicadas al Molusco para un total de 358 Kilos recolectados y eliminados.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 1,
						'description' => 'La adopción y aprobación de los planes de manejo del complejo de páramos Miraflores y Picachos, se debe realizar acorde a Ley de páramos (1930 de 2018) una vez las corporaciones con las cuales se comparten estos ecosistemas (CORMACARENA y la CAM), realicen sus Planes de Manejo.  

					Los planes de manejo se constituyen en insumos básicos para la planificación y manejo del Parque Regional Natural Miraflores y Picachos
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 17,
						'description' => '2691 personas sensibilizadas en hábitos Ambientales y 54 Instituciones participantes
					11 CIDEAS: (Putumayo 9; Caqueta 2) 
					 6 PREES: Con instituciones educativas
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 1,
						'description' => 'Se instaló un sistema de monitoreo y pronóstico soportado en un modelo de calidad del aire (WRF-CHEM)  operado por Corpoamazonia que le permite tener información en tiempo real con cobertura para toda la jurisdicción para emisiones antropogénicas y biogenicas  actualizado diariamente con observaciones satelitales.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 13,
						'description' => 'Asistencia técnica para la elaboración de planes de acción para la reducción de la deforestación y asistencia técnica para su inclusión dentro de los procesos de ajuste de los POT de 5 municipios: San José del Fragua y Milán en el departamento de Caquetá. Puerto Caicedo, Villagarzón y Valle del Guamuez Putumayo.

					- Elaboración de documentos de caracterización de cambio climático de 4 municipios de la jurisdicción: San José del Fragua y Milán en el departamento de Caquetá. Puerto Caicedo y Villagarzón en Putumayo.

					- Asistencia técnica en los procesos de generación de lineamientos para el cumplimiento de la Sentencia de la Corte STC 4360 de 2018, a través de talleres de convocatoria en los departamentos de Putumayo y Amazonas: 11 municipios en Putumayo y Gobernación: Mocoa, Santiago, San Francisco, Colón, Puerto Guzmán, Puerto Caicedo, Puerto Asís, Villagarzón, Orito, Valle del Guamuez, San Miguel y Gobernación del Putumayo. Concejos Municipales de: Puerto Caicedo, Mocoa, San Francisco, Valle del Guamuez. Consejos Territoriales de Planeación de: Valle del Guamuez, Orito, Mocoa, Puerto Guzmán, Departamental Empresas de Servicios Públicos de los municipios de Colón, Sibundoy, Puerto Guzmán, Valle del Guamuez. 2 municipios de Amazonas: Leticia y Puerto Nariño.

					- Asistencia técnica en Gestión del riesgo de desastres y cambio climático en 5 municipios de la jurisdicción: San José del Fragua y Milán en el departamento de Caquetá. Puerto Caicedo, Colón, Sibundoy, Santiago y Villagarzón en Putumayo.

					- Realización de visitas técnicas e informes de verificación de sitios críticos con presencia de eventos de inundación, deslizamientos, socavación de cauces, entre otros, en 5 municipios de la jurisdicción: San José del Fragua y Milán en el departamento de Caquetá. Puerto Guzmán, Puerto Caicedo y Villagarzón, en Putumayo.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 2,
						'description' => 'Mediante el proyecto: Implementación de Plantaciones de Chontaduro Fruto (Bactris gasipaes) en Sistemas Agroforestales como Alternativa de producción Sostenible en Comunidades Afrodescendientes del Municipio de Villagarzón Putumayo, se tiene: 100% de avance Sistemas agroforestales sostenibles establecidos (1 hectárea), 100% Área degradadas y márgenes de fuentes hídricas recuperadas (16 parcelas implementadas) suelos realizados.

					Se ejecutó el proyecto: “RESTAURACIÓN DE ÁREAS DEGRADAS EN EL RESGUARDO INDÍGENA HUITORA DEL  MUNICIPIO DE SOLANO, DEPARTAMENTO DEL CAQUETÁ”, el cual estableció la implementación de 10 has de sistemas productivos sostenibles, 5 has potreros restaurados con el establecimiento de sistemas productivos sostenibles y 5 has de aislamiento de áreas restauradas
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 2,
						'description' => '1. Formulación del diagnóstico socio-ambiental del territorio, de la comunidad del pueblo cofan del   putumayo”- Ejecutor: Mesa permanente del pueblo Cofan.
					2. Formulación del diagnóstico socio-ambiental del territorio, katsa su en el pueblo inkal awa de   putumayo - ejecutor: acipap inkal awa.
					3. Actualización del plan integral de vida del cabildo camentsa  biya de sibundoy   - ejecutor: cabildo indigena kamentsa biya de sibundoy.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 2,
						'description' => 'Dos procesos de educación ambiental propia con instituciones etnoeducativas del pueblo Camentsa en el departamento del Putumayo: Colegio Bilingüe Artesanal, Hogar Infantil Bacetemingnbe Yebna, Modalidad propia Intercultural.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 3,
						'description' => 'Tres acompañamientos a consultas previas con Consejos Comunitarios; C.C Burdines, C.C Afro Primavera, C.C El Triunfo y Seis acompañamientos en consultas previas con Comunidades Indígenas: Resguardo Wasipungo,Cabildo indigena Corebaju, Resguardo Indigena Yarinal y el Resguardo Indigena Santa Rosa del Guamuez.

					Se firmaron acuerdos con comunidades étnicas en gobernanza de los recursos naturales:

					1. RESGUARDO INDIGENA HONDURAS - Caquetá 
					2. CONSEJO COMUNITARIO LA MARIA - Putumayo
					3. RESGUARDO CAMENTSA BIYA DEL MUNICIPIO DE MOCOA - Putumayo
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 5,
						'description' => 'Se realizaron 5 experiencias de coordinación ambiental con Concejos Comunitarios Afrodescendientes de Putumayo, firmándose 5 acuerdos.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 3,
						'description' => 'Se firmaron 3 acuerdos piloto interculturales para el uso tradicional de los recursos naturales en los territorios, con los siguientes resguardos Indígenas del departamento del Putumayo:

					1. Resguardo Camëntsá biya del municipio de Sibundoy. 
					2. Resguardo inga de san Andrés del municipio de Santiago. 
					3. Resguardo Camëntsá inga del Municipio de san francisco.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
			
					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 16,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 3300000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3300000000,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 85780000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 85780000,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 900000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 900000000,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 79154000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 79154000,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 710731474,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 710731474,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 359344000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 359344000,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 33686000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 33686000,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 300000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 300000000,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 1033476000,
						'functioning_percentage' => 17.7597,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 82.2403,
						'functioning' => 183542237.172,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 849933762.828,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 95600000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 95600000,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 33590000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 33590000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 3448263796,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3448263796,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 804495000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 804495000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 2502186571,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2502186571,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 2324634000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2324634000,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 3922673000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3922673000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 96450000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 96450000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1318000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1318000000,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 83112000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 83112000,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 5863645000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5863645000,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 377311000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 377311000,
						'year' => 2,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 35370000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 35370000,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 315000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 315000000,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 300000000,
						'functioning_percentage' => 88.1758,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 11.8242,
						'functioning' => 264527400,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 35472600,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 213803151,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 213803151,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 77422000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 77422000,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 2772073694,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2772073694,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 1058091745,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1058091745,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 2760932134,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2760932134,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 2936987442,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2936987442,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 4443143879,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4443143879,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 80000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 80000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1700000000,
						'functioning_percentage' => 15,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 85,
						'functioning' => 255000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1445000000,
						'year' => 3,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 71000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 71000000,
						'year' => 3,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 4765849536,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4765849536,
						'year' => 3,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 279000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 279000000,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 35500000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 35500000,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 500000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 500000000,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 300000000,
						'functioning_percentage' => 21.173,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 78.827,
						'functioning' => 63519000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 236481000,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 169565711,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 169565711,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 40580385,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 40580385,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 1936902352,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1936902352,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 1755950066,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1755950066,
						'year' => 3,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 2954078992,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2954078992,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 2729212033,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2729212033,
						'year' => 3,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 4850068000,
						'functioning_percentage' => 97,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 3,
						'functioning' => 4704565960,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 145502040,
						'year' => 4,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 33000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 33000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1879753000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1879753000,
						'year' => 4,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 39000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 39000000,
						'year' => 4,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 58000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 58000000,
						'year' => 4,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 13015095021.27,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 13015095021.27,
						'year' => 4,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 283626000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 283626000,
						'year' => 4,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 36650000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 36650000,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 313347000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 313347000,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 50000000,
						'functioning_percentage' => 81.537,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 18.463,
						'functioning' => 40768500,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9231500,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 121370000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 121370000,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 64885000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 64885000,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 4116250802,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4116250802,
						'year' => 4,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 1606442839,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1606442839,
						'year' => 4,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 3117471180,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3117471180,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 4224106888,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4224106888,
						'year' => 4,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();
						
					DB::table('implementations')->insert([
						'p_a_i_s_id'=>$idpai1,
						]);
						$idImplementation1 = DB::getPdo()->lastInsertId();
						
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3634623070.29,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 112769540.5,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1560302574.67,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 80142085,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 474366590,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 279959438.2,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 39081771,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 324096923.07,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 479309875.64,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 128587885.55,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 42071160.88,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3448263796,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 961286585.51,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2447091460.5,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 27668789,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4275545482.4,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 120775192,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2217424882.63,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 70664338,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3133033099,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 221823217,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 42470591,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 387030130.08,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 343359681.4,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 271016149.89,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 94674253,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2772073694,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1171638519.81,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2235443212,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 286913556.14,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4813624576.11,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 87916141,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2037940077.2,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 75494974,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4315234429,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 313059145,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 57732574,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 372462040.59,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 24191712,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 560465719.09,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 78877686.24,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1936902352,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1820123582.06,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2402422559,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1933389543.3,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 5610101896.6,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 17529279,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1340076886.9,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 13118688,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 73303322,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 9097357476.05,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 66610003,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 59244908,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 440680778.74,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 111083490,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 216851990.59,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 168085030.96,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 4116250802,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1901742908.2,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3060025040.08,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2515498862,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 
 						DB::table('cost_sources')->insert([
							'father_id' => 2,
							'code' => '2.1.1',
							'name' => 'GASTOS DE PERSONAL',
							'description' => 'GASTOS DE PERSONAL',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 16,
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
							'group_id' => 16,
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
							'group_id' => 16,
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
							'group_id' => 16,
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
							'group_id' => 16,
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
							'group_id' => 16,
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
							'group_id' => 16,
							]);
							$idFuenteGasto4 = DB::getPdo()->lastInsertId();
							
						DB::table('cost_sources')->insert([
							'father_id' => 2,
							'code' => '2.1.5',
							'name' => 'Contribuciones',
							'description' => 'Contribuciones',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 16,
							]);
							$idFuenteGasto8 = DB::getPdo()->lastInsertId();
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 2527481383,
								'value_comitted' => 2478196779,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 16,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 461928774,
								'value_comitted' => 460564774,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto2,
								'p_a_i_id' => $idpai1,
								'group_id' => 16,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 1433427195,
								'value_comitted' => 1367553573,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto3,
								'p_a_i_id' => $idpai1,
								'group_id' => 16,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 21321984,
								'value_comitted' => 21321984,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 16,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 15731861,
								'value_comitted' => 15731861,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto6,
								'p_a_i_id' => $idpai1,
								'group_id' => 16,
								]);
								$idGasto5 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 10000000,
								'value_comitted' => 0,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto7,
								'p_a_i_id' => $idpai1,
								'group_id' => 16,
								]);
								$idGasto6 = DB::getPdo()->lastInsertId();
							
								
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 1771337411,
									'value_comitted' => 1759156443,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 16,
									]);
									$idGasto7 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 138362466,
									'value_comitted' => 138362466,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto2,
									'p_a_i_id' => $idpai1,
									'group_id' => 16,
									]);
									$idGasto8 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 549044482,
									'value_comitted' => 548926496,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto3,
									'p_a_i_id' => $idpai1,
									'group_id' => 16,
									]);
									$idGasto9 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 26155212,
									'value_comitted' => 26155212,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto4,
									'p_a_i_id' => $idpai1,
									'group_id' => 16,
									]);
									$idGasto10 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 17287000,
									'value_comitted' => 12705016,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto5,
									'p_a_i_id' => $idpai1,
									'group_id' => 16,
									]);
									$idGasto11 = DB::getPdo()->lastInsertId();
									
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 2565810322,
										'value_comitted' => 2540415569,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 16,
										]);
										$idGasto12 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 113173601,
										'value_comitted' => 112871051,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 16,
										]);
										$idGasto13 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 1570486986,
										'value_comitted' => 1530229487.5,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto3,
										'p_a_i_id' => $idpai1,
										'group_id' => 16,
										]);
										$idGasto14 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 14668891,
										'value_comitted' => 14668891,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 16,
										]);
										$idGasto15 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 2713000,
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
										'group_id' => 16,
										]);
										$idGasto16 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 16796908,
										'value_comitted' => 16796908,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto6,
										'p_a_i_id' => $idpai1,
										'group_id' => 16,
										]);
										$idGasto17 = DB::getPdo()->lastInsertId();
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 1843803525,
											'value_comitted' => 1840136678,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 16,
											]);
											$idGasto18 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 482752654,
											'value_comitted' => 480744604,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto2,
											'p_a_i_id' => $idpai1,
											'group_id' => 16,
											]);
											$idGasto19 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 389966000,
											'value_comitted' => 386873180,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto3,
											'p_a_i_id' => $idpai1,
											'group_id' => 16,
											]);
											$idGasto20 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 27122955,
											'value_comitted' => 27122955,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto4,
											'p_a_i_id' => $idpai1,
											'group_id' => 16,
											]);
											$idGasto21 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 17287000,
											'value_comitted' => 7918801,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto5,
											'p_a_i_id' => $idpai1,
											'group_id' => 16,
											]);
											$idGasto22 = DB::getPdo()->lastInsertId();

											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2777878167,
												'value_comitted' => 2732655212,
												'value_paid' => 2521634619.83,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 16,
												]);
												$idGasto23 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 12023402,
												'value_comitted' => 12023402,
												'value_paid' => 12023402,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto4,
												'p_a_i_id' => $idpai1,
												'group_id' => 16,
												]);
												$idGasto25 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 12258259,
												'value_comitted' => 12258259,
												'value_paid' => 12258259,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto5,
												'p_a_i_id' => $idpai1,
												'group_id' => 16,
												]);
												$idGasto26 = DB::getPdo()->lastInsertId();
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2670618,
												'value_comitted' => 1979528,
												'value_paid' => 1979528,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto7,
												'p_a_i_id' => $idpai1,
												'group_id' => 16,
												]);
												$idGasto27 = DB::getPdo()->lastInsertId();
												
												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 1999627861,
													'value_comitted' => 1969721388,
													'value_paid' => 1963543293,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 16,
													]);
													$idGasto28 = DB::getPdo()->lastInsertId();
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 28232284,
													'value_comitted' => 28232284,
													'value_paid' => 28232284,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto4,
													'p_a_i_id' => $idpai1,
													'group_id' => 16,
													]);
													$idGasto30 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 17806000,
													'value_comitted' => 17806000,
													'value_paid' => 17806000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto5,
													'p_a_i_id' => $idpai1,
													'group_id' => 16,
													]);
													$idGasto31 = DB::getPdo()->lastInsertId();

													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 2009741088,
														'value_comitted' => 1974246386,
														'value_paid' => 1958706588,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto1,
														'p_a_i_id' => $idpai1,
														'group_id' => 16,
														]);
														$idGasto32 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 66954877,
														'value_comitted' => 66933943,
														'value_paid' => 66587943,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto2,
														'p_a_i_id' => $idpai1,
														'group_id' => 16,
														]);
														$idGasto33 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 2562237993,
														'value_comitted' => 2550489698.01,
														'value_paid' => 2346907055.01,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto3,
														'p_a_i_id' => $idpai1,
														'group_id' => 16,
														]);
														$idGasto34 = DB::getPdo()->lastInsertId();

													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 113298996,
														'value_comitted' => 113298996,
														'value_paid' => 113298996,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto7,
														'p_a_i_id' => $idpai1,
														'group_id' => 16,
														]);
														$idGasto35 = DB::getPdo()->lastInsertId();
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 26101400,
														'value_comitted' => 26101400,
														'value_paid' => 26101400,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto8,
														'p_a_i_id' => $idpai1,
														'group_id' => 16,
														]);
														$idGasto36 = DB::getPdo()->lastInsertId();
														
														
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 2045877895,
															'value_comitted' => 2045877895,
															'value_paid' => 2045877895,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto1,
															'p_a_i_id' => $idpai1,
															'group_id' => 16,
															]);
															$idGasto37 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 265045350,
															'value_comitted' => 259704250,
															'value_paid' => 120440857,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto2,
															'p_a_i_id' => $idpai1,
															'group_id' => 16,
															]);
															$idGasto38 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 685217468,
															'value_comitted' => 685146668,
															'value_paid' => 652229710,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto3,
															'p_a_i_id' => $idpai1,
															'group_id' => 16,
															]);
															$idGasto39 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 72990467,
															'value_comitted' => 72990467,
															'value_paid' => 72990467,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto7,
															'p_a_i_id' => $idpai1,
															'group_id' => 16,
															]);
															$idGasto40 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 30000000,
															'value_comitted' => 30000000,
															'value_paid' => 30000000,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto4,
															'p_a_i_id' => $idpai1,
															'group_id' => 16,
															]);
															$idGasto41 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 18340000,
															'value_comitted' => 18340000,
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
															'group_id' => 16,
															]);
															$idGasto42 = DB::getPdo()->lastInsertId();
     
			
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity2,
							'source_id' =>$idPlan1,
							'value' => 948478000,
							'goal' => 0,
							'evidence_balance' => 948478000,
							'age' => 1,
							]);
							$idactivitySource1 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity4,
							'source_id' =>$idPlan1,
							'value' => 237119,
							'goal' => 0,
							'evidence_balance' => 237119,
							'age' => 1,
							]);
							$idactivitySource2 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity6,
							'source_id' =>$idPlan1,
							'value' => 750000,
							'goal' => 0,
							'evidence_balance' => 750000,
							'age' => 1,
							]);
							$idactivitySource3 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity8,
							'source_id' =>$idPlan1,
							'value' => 450000,
							'goal' => 0,
							'evidence_balance' => 450000,
							'age' => 1,
							]);
							$idactivitySource4 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity15,
							'source_id' =>$idPlan1,
							'value' => 550000,
							'goal' => 0,
							'evidence_balance' => 550000,
							'age' => 1,
							]);
							$idactivitySource6 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity18,
							'source_id' =>$idPlan1,
							'value' => 30000,
							'goal' => 0,
							'evidence_balance' => 30000,
							'age' => 1,
							]);
							$idactivitySource7 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity22,
							'source_id' =>$idPlan1,
							'value' => 950000,
							'goal' => 0,
							'evidence_balance' => 950000,
							'age' => 1,
							]);
							$idactivitySource8 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity26,
							'source_id' =>$idPlan1,
							'value' => 100000,
							'goal' => 0,
							'evidence_balance' => 100000,
							'age' => 1,
							]);
							$idactivitySource9 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity29,
							'source_id' =>$idPlan1,
							'value' => 107937,
							'goal' => 0,
							'evidence_balance' => 107937,
							'age' => 1,
							]);
							$idactivitySource10 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity35,
							'source_id' =>$idPlan1,
							'value' => 189370,
							'goal' => 0,
							'evidence_balance' => 189370,
							'age' => 1,
							]);
							$idactivitySource12 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity37,
							'source_id' =>$idPlan1,
							'value' => 530649,
							'goal' => 0,
							'evidence_balance' => 530649,
							'age' => 1,
							]);
							$idactivitySource13 = DB::getPdo()->lastInsertId();
							
							
							
						DB::table('activity_sources')->insert([
							'activity_id' => $idactivity39,
							'source_id' =>$idPlan1,
							'value' => 176883,
							'goal' => 0,
							'evidence_balance' => 176883,
							'age' => 1,
							]);
							$idactivitySource14 = DB::getPdo()->lastInsertId();
							
							
							
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia2,
								'activity_source_id' =>$idactivitySource1,
								'value' => 948478000,
								]);
								$idevidenceFinancial1 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia4,
								'activity_source_id' =>$idactivitySource2,
								'value' => 237119,
								]);
								$idevidenceFinancial2 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia6,
								'activity_source_id' =>$idactivitySource3,
								'value' => 750000,
								]);
								$idevidenceFinancial3 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia8,
								'activity_source_id' =>$idactivitySource4,
								'value' => 450000,
								]);
								$idevidenceFinancial4 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia15,
								'activity_source_id' =>$idactivitySource6,
								'value' => 550000,
								]);
								$idevidenceFinancial6 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia18,
								'activity_source_id' =>$idactivitySource7,
								'value' => 30000,
								]);
								$idevidenceFinancial7 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia22,
								'activity_source_id' =>$idactivitySource8,
								'value' => 950000,
								]);
								$idevidenceFinancial8 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia26,
								'activity_source_id' =>$idactivitySource9,
								'value' => 100000,
								]);
								$idevidenceFinancial9 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia29,
								'activity_source_id' =>$idactivitySource10,
								'value' => 107937,
								]);
								$idevidenceFinancial10 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia35,
								'activity_source_id' =>$idactivitySource12,
								'value' => 189370,
								]);
								$idevidenceFinancial12 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia37,
								'activity_source_id' =>$idactivitySource13,
								'value' => 530649,
								]);
								$idevidenceFinancial13 = DB::getPdo()->lastInsertId();
								
								
								
							DB::table('evidence_financial')->insert([
								'evidence_id' => $idevidencia39,
								'activity_source_id' =>$idactivitySource14,
								'value' => 176883,
								]);
								$idevidenceFinancial14 = DB::getPdo()->lastInsertId();
								
								
								
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity2,
									'source_id' =>$idPlan30,
									'value' => 1945435623,
									'goal' => 0,
									'evidence_balance' => 1945435623,
									'age' => 2,
									]);
									$idactivitySource27 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity4,
									'source_id' =>$idPlan30,
									'value' => 90200000,
									'goal' => 0,
									'evidence_balance' => 90200000,
									'age' => 2,
									]);
									$idactivitySource28 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity6,
									'source_id' =>$idPlan30,
									'value' => 422612000,
									'goal' => 0,
									'evidence_balance' => 422612000,
									'age' => 2,
									]);
									$idactivitySource29 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity8,
									'source_id' =>$idPlan30,
									'value' => 478739819,
									'goal' => 0,
									'evidence_balance' => 478739819,
									'age' => 2,
									]);
									$idactivitySource30 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity10,
									'source_id' =>$idPlan27,
									'value' => 200000000,
									'goal' => 0,
									'evidence_balance' => 200000000,
									'age' => 2,
									]);
									$idactivitySource31 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity12,
									'source_id' =>$idPlan27,
									'value' => 294985000,
									'goal' => 0,
									'evidence_balance' => 294985000,
									'age' => 2,
									]);
									$idactivitySource32 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity15,
									'source_id' =>$idPlan27,
									'value' => 100000000,
									'goal' => 0,
									'evidence_balance' => 100000000,
									'age' => 2,
									]);
									$idactivitySource33 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity18,
									'source_id' =>$idPlan27,
									'value' => 29518000,
									'goal' => 0,
									'evidence_balance' => 29518000,
									'age' => 2,
									]);
									$idactivitySource34 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity22,
									'source_id' =>$idPlan27,
									'value' => 1074524848,
									'goal' => 0,
									'evidence_balance' => 1074524848,
									'age' => 2,
									]);
									$idactivitySource35 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity26,
									'source_id' =>$idPlan27,
									'value' => 1024215661.88,
									'goal' => 0,
									'evidence_balance' => 1024215661.88,
									'age' => 2,
									]);
									$idactivitySource36 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity29,
									'source_id' =>$idPlan20,
									'value' => 112721336.48,
									'goal' => 0,
									'evidence_balance' => 112721336.48,
									'age' => 2,
									]);
									$idactivitySource37 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity33,
									'source_id' =>$idPlan18,
									'value' => 1197996729.48,
									'goal' => 0,
									'evidence_balance' => 1197996729.48,
									'age' => 2,
									]);
									$idactivitySource38 = DB::getPdo()->lastInsertId();
									
									
									
									DB::table('activity_sources')->insert([
										'activity_id' => $idactivity26,
										'source_id' =>$idPlan20,
										'value' => 5750923663.52,
										'goal' => 0,
										'evidence_balance' => 5750923663.52,
										'age' => 2,
										]);
										$idactivitySource40 = DB::getPdo()->lastInsertId();
										
										
										
									DB::table('activity_sources')->insert([
										'activity_id' => $idactivity29,
										'source_id' =>$idPlan18,
										'value' => 120003270.52,
										'goal' => 0,
										'evidence_balance' => 120003270.52,
										'age' => 2,
										]);
										$idactivitySource41 = DB::getPdo()->lastInsertId();
										
										
										
									DB::table('activity_sources')->insert([
										'activity_id' => $idactivity33,
										'source_id' =>$idPlan28,
										'value' => 1058091745,
										'goal' => 0,
										'evidence_balance' => 1058091745,
										'age' => 2,
										]);
										$idactivitySource42 = DB::getPdo()->lastInsertId();
										
										
										
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia68,
											'activity_source_id' =>$idactivitySource27,
											'value' => 1945315546,
											]);
											$idevidenceFinancial27 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia70,
											'activity_source_id' =>$idactivitySource28,
											'value' => 90196252,
											]);
											$idevidenceFinancial28 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia72,
											'activity_source_id' =>$idactivitySource29,
											'value' => 421911500,
											]);
											$idevidenceFinancial29 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia74,
											'activity_source_id' =>$idactivitySource30,
											'value' => 473118356,
											]);
											$idevidenceFinancial30 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia76,
											'activity_source_id' =>$idactivitySource31,
											'value' => 200000000,
											]);
											$idevidenceFinancial31 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia78,
											'activity_source_id' =>$idactivitySource32,
											'value' => 282900000,
											]);
											$idevidenceFinancial32 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia81,
											'activity_source_id' =>$idactivitySource33,
											'value' => 99866472,
											]);
											$idevidenceFinancial33 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia84,
											'activity_source_id' =>$idactivitySource34,
											'value' => 29300000,
											]);
											$idevidenceFinancial34 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia88,
											'activity_source_id' =>$idactivitySource35,
											'value' => 1048711690.5,
											]);
											$idevidenceFinancial35 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia92,
											'activity_source_id' =>$idactivitySource36,
											'value' => 1024215661.88,
											]);
											$idevidenceFinancial36 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia95,
											'activity_source_id' =>$idactivitySource37,
											'value' => 112721336.48,
											]);
											$idevidenceFinancial37 = DB::getPdo()->lastInsertId();
											
											
											
										DB::table('evidence_financial')->insert([
											'evidence_id' => $idevidencia99,
											'activity_source_id' =>$idactivitySource38,
											'value' => 1197996729.48,
											]);
											$idevidenceFinancial38 = DB::getPdo()->lastInsertId();
											
											
											
											DB::table('evidence_financial')->insert([
												'evidence_id' => $idevidencia92,
												'activity_source_id' =>$idactivitySource40,
												'value' => 2029006387.62,
												]);
												$idevidenceFinancial40 = DB::getPdo()->lastInsertId();
												
												
												
											DB::table('evidence_financial')->insert([
												'evidence_id' => $idevidencia95,
												'activity_source_id' =>$idactivitySource41,
												'value' => 97930083.5199995,
												]);
												$idevidenceFinancial41 = DB::getPdo()->lastInsertId();
												
												
												
											DB::table('evidence_financial')->insert([
												'evidence_id' => $idevidencia99,
												'activity_source_id' =>$idactivitySource42,
												'value' => 2215120521.52,
												]);
												$idevidenceFinancial42 = DB::getPdo()->lastInsertId();
												
												
												
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity2,
													'source_id' =>$idPlan33,
													'value' => 472200000,
													'goal' => 0,
													'evidence_balance' => 472200000,
													'age' => 3,
													]);
													$idactivitySource50 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity4,
													'source_id' =>$idPlan33,
													'value' => 118050000,
													'goal' => 0,
													'evidence_balance' => 118050000,
													'age' => 3,
													]);
													$idactivitySource51 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity6,
													'source_id' =>$idPlan33,
													'value' => 250000000,
													'goal' => 0,
													'evidence_balance' => 250000000,
													'age' => 3,
													]);
													$idactivitySource52 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity8,
													'source_id' =>$idPlan33,
													'value' => 350000000,
													'goal' => 0,
													'evidence_balance' => 350000000,
													'age' => 3,
													]);
													$idactivitySource53 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity10,
													'source_id' =>$idPlan33,
													'value' => 254750000,
													'goal' => 0,
													'evidence_balance' => 254750000,
													'age' => 3,
													]);
													$idactivitySource54 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity15,
													'source_id' =>$idPlan42,
													'value' => 135000000,
													'goal' => 0,
													'evidence_balance' => 135000000,
													'age' => 3,
													]);
													$idactivitySource55 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity18,
													'source_id' =>$idPlan42,
													'value' => 19518000,
													'goal' => 0,
													'evidence_balance' => 19518000,
													'age' => 3,
													]);
													$idactivitySource56 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity22,
													'source_id' =>$idPlan42,
													'value' => 1507882352,
													'goal' => 0,
													'evidence_balance' => 1507882352,
													'age' => 3,
													]);
													$idactivitySource57 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity26,
													'source_id' =>$idPlan43,
													'value' => 1225192555.5,
													'goal' => 0,
													'evidence_balance' => 1225192555.5,
													'age' => 3,
													]);
													$idactivitySource58 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity29,
													'source_id' =>$idPlan43,
													'value' => 139590166.5,
													'goal' => 0,
													'evidence_balance' => 139590166.5,
													'age' => 3,
													]);
													$idactivitySource59 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity33,
													'source_id' =>$idPlan35,
													'value' => 2082803784,
													'goal' => 0,
													'evidence_balance' => 2082803784,
													'age' => 3,
													]);
													$idactivitySource60 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity35,
													'source_id' =>$idPlan35,
													'value' => 1772053000,
													'goal' => 0,
													'evidence_balance' => 1772053000,
													'age' => 3,
													]);
													$idactivitySource61 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity37,
													'source_id' =>$idPlan35,
													'value' => 208570151,
													'goal' => 0,
													'evidence_balance' => 208570151,
													'age' => 3,
													]);
													$idactivitySource62 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity39,
													'source_id' =>$idPlan35,
													'value' => 609288160.5,
													'goal' => 0,
													'evidence_balance' => 609288160.5,
													'age' => 3,
													]);
													$idactivitySource63 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity42,
													'source_id' =>$idPlan45,
													'value' => 140000000,
													'goal' => 0,
													'evidence_balance' => 140000000,
													'age' => 3,
													]);
													$idactivitySource64 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity44,
													'source_id' =>$idPlan45,
													'value' => 1503612445,
													'goal' => 0,
													'evidence_balance' => 1503612445,
													'age' => 3,
													]);
													$idactivitySource65 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity48,
													'source_id' =>$idPlan45,
													'value' => 76044000,
													'goal' => 0,
													'evidence_balance' => 76044000,
													'age' => 3,
													]);
													$idactivitySource66 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity50,
													'source_id' =>$idPlan45,
													'value' => 46226293.98,
													'goal' => 0,
													'evidence_balance' => 46226293.98,
													'age' => 3,
													]);
													$idactivitySource67 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity52,
													'source_id' =>$idPlan36,
													'value' => 51800000,
													'goal' => 0,
													'evidence_balance' => 51800000,
													'age' => 3,
													]);
													$idactivitySource68 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity54,
													'source_id' =>$idPlan36,
													'value' => 22287811.09,
													'goal' => 0,
													'evidence_balance' => 22287811.09,
													'age' => 3,
													]);
													$idactivitySource69 = DB::getPdo()->lastInsertId();
													
													
													
												DB::table('activity_sources')->insert([
													'activity_id' => $idactivity56,
													'source_id' =>$idPlan39,
													'value' => 236268811.09,
													'goal' => 0,
													'evidence_balance' => 236268811.09,
													'age' => 3,
													]);
													$idactivitySource70 = DB::getPdo()->lastInsertId();
													
													
													
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity10,
														'source_id' =>$idPlan42,
														'value' => 274502000,
														'goal' => 0,
														'evidence_balance' => 274502000,
														'age' => 3,
														]);
														$idactivitySource71 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity29,
														'source_id' =>$idPlan35,
														'value' => 93134440.5,
														'goal' => 0,
														'evidence_balance' => 93134440.5,
														'age' => 3,
														]);
														$idactivitySource73 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity39,
														'source_id' =>$idPlan45,
														'value' => 963329294.02,
														'goal' => 0,
														'evidence_balance' => 963329294.02,
														'age' => 3,
														]);
														$idactivitySource74 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity50,
														'source_id' =>$idPlan38,
														'value' => 500000000,
														'goal' => 0,
														'evidence_balance' => 500000000,
														'age' => 3,
														]);
														$idactivitySource75 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity54,
														'source_id' =>$idPlan34,
														'value' => 71000000,
														'goal' => 0,
														'evidence_balance' => 71000000,
														'age' => 3,
														]);
														$idactivitySource76 = DB::getPdo()->lastInsertId();
														
														
														
													DB::table('activity_sources')->insert([
														'activity_id' => $idactivity56,
														'source_id' =>$idPlan41,
														'value' => 40580385,
														'goal' => 0,
														'evidence_balance' => 40580385,
														'age' => 3,
														]);
														$idactivitySource77 = DB::getPdo()->lastInsertId();
														
														
														
														DB::table('activity_sources')->insert([
															'activity_id' => $idactivity56,
															'source_id' =>$idPlan40,
															'value' => 23021803.91,
															'goal' => 0,
															'evidence_balance' => 23021803.91,
															'age' => 3,
															]);
															$idactivitySource80 = DB::getPdo()->lastInsertId();
															
															
															
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia134,
																'activity_source_id' =>$idactivitySource50,
																'value' => 472200000,
																]);
																$idevidenceFinancial50 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia136,
																'activity_source_id' =>$idactivitySource51,
																'value' => 90196252,
																]);
																$idevidenceFinancial51 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia138,
																'activity_source_id' =>$idactivitySource52,
																'value' => 250000000,
																]);
																$idevidenceFinancial52 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia140,
																'activity_source_id' =>$idactivitySource53,
																'value' => 361607081.7,
																]);
																$idevidenceFinancial53 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia142,
																'activity_source_id' =>$idactivitySource54,
																'value' => 254750000,
																]);
																$idevidenceFinancial54 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia147,
																'activity_source_id' =>$idactivitySource55,
																'value' => 135000000,
																]);
																$idevidenceFinancial55 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia150,
																'activity_source_id' =>$idactivitySource56,
																'value' => 19300000,
																]);
																$idevidenceFinancial56 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia154,
																'activity_source_id' =>$idactivitySource57,
																'value' => 1048711690.5,
																]);
																$idevidenceFinancial57 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia158,
																'activity_source_id' =>$idactivitySource58,
																'value' => 1165892349.25,
																]);
																$idevidenceFinancial58 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia161,
																'activity_source_id' =>$idactivitySource59,
																'value' => 139590166.5,
																]);
																$idevidenceFinancial59 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia165,
																'activity_source_id' =>$idactivitySource60,
																'value' => 1330313467,
																]);
																$idevidenceFinancial60 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia167,
																'activity_source_id' =>$idactivitySource61,
																'value' => 241853740,
																]);
																$idevidenceFinancial61 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia169,
																'activity_source_id' =>$idactivitySource62,
																'value' => 64754934.5,
																]);
																$idevidenceFinancial62 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia171,
																'activity_source_id' =>$idactivitySource63,
																'value' => 609288160.5,
																]);
																$idevidenceFinancial63 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia174,
																'activity_source_id' =>$idactivitySource64,
																'value' => 139116388,
																]);
																$idevidenceFinancial64 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia176,
																'activity_source_id' =>$idactivitySource65,
																'value' => 1503421408,
																]);
																$idevidenceFinancial65 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia180,
																'activity_source_id' =>$idactivitySource66,
																'value' => 76044000,
																]);
																$idevidenceFinancial66 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia182,
																'activity_source_id' =>$idactivitySource67,
																'value' => 46226293.98,
																]);
																$idevidenceFinancial67 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia184,
																'activity_source_id' =>$idactivitySource68,
																'value' => 51800000,
																]);
																$idevidenceFinancial68 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia186,
																'activity_source_id' =>$idactivitySource69,
																'value' => 22287811.09,
																]);
																$idevidenceFinancial69 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('evidence_financial')->insert([
																'evidence_id' => $idevidencia188,
																'activity_source_id' =>$idactivitySource70,
																'value' => 236268811.09,
																]);
																$idevidenceFinancial70 = DB::getPdo()->lastInsertId();
																
																
																
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia182,
																	'activity_source_id' =>$idactivitySource75,
																	'value' => 350876384.56,
																	]);
																	$idevidenceFinancial75 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia186,
																	'activity_source_id' =>$idactivitySource76,
																	'value' => 66712185.91,
																	]);
																	$idevidenceFinancial76 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('evidence_financial')->insert([
																	'evidence_id' => $idevidencia188,
																	'activity_source_id' =>$idactivitySource77,
																	'value' => 40580385,
																	]);
																	$idevidenceFinancial77 = DB::getPdo()->lastInsertId();
																	
																	
																	
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia188,
																		'activity_source_id' =>$idactivitySource80,
																		'value' => 22972946.91,
																		]);
																		$idevidenceFinancial80 = DB::getPdo()->lastInsertId();
																		
																		
																		
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity2,
																			'source_id' =>$idPlan61,
																			'value' => 2983538963,
																			'goal' => 0,
																			'evidence_balance' => 2983538963,
																			'age' => 4,
																			]);
																			$idactivitySource82 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity4,
																			'source_id' =>$idPlan61,
																			'value' => 70232000,
																			'goal' => 0,
																			'evidence_balance' => 70232000,
																			'age' => 4,
																			]);
																			$idactivitySource83 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity6,
																			'source_id' =>$idPlan61,
																			'value' => 502939000,
																			'goal' => 0,
																			'evidence_balance' => 502939000,
																			'age' => 4,
																			]);
																			$idactivitySource84 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity8,
																			'source_id' =>$idPlan61,
																			'value' => 667396925,
																			'goal' => 0,
																			'evidence_balance' => 667396925,
																			'age' => 4,
																			]);
																			$idactivitySource85 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity10,
																			'source_id' =>$idPlan58,
																			'value' => 180796000,
																			'goal' => 0,
																			'evidence_balance' => 180796000,
																			'age' => 4,
																			]);
																			$idactivitySource86 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity12,
																			'source_id' =>$idPlan58,
																			'value' => 346791733,
																			'goal' => 0,
																			'evidence_balance' => 346791733,
																			'age' => 4,
																			]);
																			$idactivitySource87 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity15,
																			'source_id' =>$idPlan58,
																			'value' => 1469471729.97,
																			'goal' => 0,
																			'evidence_balance' => 1469471729.97,
																			'age' => 4,
																			]);
																			$idactivitySource88 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity18,
																			'source_id' =>$idPlan58,
																			'value' => 125950000,
																			'goal' => 0,
																			'evidence_balance' => 125950000,
																			'age' => 4,
																			]);
																			$idactivitySource89 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity22,
																			'source_id' =>$idPlan58,
																			'value' => 1077365000,
																			'goal' => 0,
																			'evidence_balance' => 1077365000,
																			'age' => 4,
																			]);
																			$idactivitySource90 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity26,
																			'source_id' =>$idPlan58,
																			'value' => 150421917.03,
																			'goal' => 0,
																			'evidence_balance' => 150421917.03,
																			'age' => 4,
																			]);
																			$idactivitySource91 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity29,
																			'source_id' =>$idPlan51,
																			'value' => 812967267,
																			'goal' => 0,
																			'evidence_balance' => 812967267,
																			'age' => 4,
																			]);
																			$idactivitySource92 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity33,
																			'source_id' =>$idPlan51,
																			'value' => 2798555674.72,
																			'goal' => 0,
																			'evidence_balance' => 2798555674.72,
																			'age' => 4,
																			]);
																			$idactivitySource93 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity35,
																			'source_id' =>$idPlan51,
																			'value' => 113825000,
																			'goal' => 0,
																			'evidence_balance' => 113825000,
																			'age' => 4,
																			]);
																			$idactivitySource94 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity37,
																			'source_id' =>$idPlan51,
																			'value' => 1317704797,
																			'goal' => 0,
																			'evidence_balance' => 1317704797,
																			'age' => 4,
																			]);
																			$idactivitySource95 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity39,
																			'source_id' =>$idPlan51,
																			'value' => 943790633.620001,
																			'goal' => 0,
																			'evidence_balance' => 943790633.620001,
																			'age' => 4,
																			]);
																			$idactivitySource96 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity42,
																			'source_id' =>$idPlan48,
																			'value' => 1828044927.62,
																			'goal' => 0,
																			'evidence_balance' => 1828044927.62,
																			'age' => 4,
																			]);
																			$idactivitySource97 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('activity_sources')->insert([
																			'activity_id' => $idactivity44,
																			'source_id' =>$idPlan52,
																			'value' => 63206166.6200008,
																			'goal' => 0,
																			'evidence_balance' => 63206166.6200008,
																			'age' => 4,
																			]);
																			$idactivitySource98 = DB::getPdo()->lastInsertId();
																			
																			
																			
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity8,
																				'source_id' =>$idPlan58,
																				'value' => 765454422,
																				'goal' => 0,
																				'evidence_balance' => 765454422,
																				'age' => 4,
																				]);
																				$idactivitySource99 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity26,
																				'source_id' =>$idPlan51,
																				'value' => 7028251648.93,
																				'goal' => 0,
																				'evidence_balance' => 7028251648.93,
																				'age' => 4,
																				]);
																				$idactivitySource100 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity42,
																				'source_id' =>$idPlan59,
																				'value' => 1606442839,
																				'goal' => 0,
																				'evidence_balance' => 1606442839,
																				'age' => 4,
																				]);
																				$idactivitySource102 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity44,
																				'source_id' =>$idPlan56,
																				'value' => 121370000,
																				'goal' => 0,
																				'evidence_balance' => 121370000,
																				'age' => 4,
																				]);
																				$idactivitySource103 = DB::getPdo()->lastInsertId();
																				
																				
																				
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity44,
																					'source_id' =>$idPlan46,
																					'value' => 145502040,
																					'goal' => 0,
																					'evidence_balance' => 145502040,
																					'age' => 4,
																					]);
																					$idactivitySource105 = DB::getPdo()->lastInsertId();
																					
																					
																						DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity44,
																					'source_id' =>$idPlan54,
																					'value' => 313347000,
																					'goal' => 0,
																					'evidence_balance' => 313347000,
																					'age' => 4,
																					]);
																					$idactivitySource106 = DB::getPdo()->lastInsertId();
																					
																					
																						DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity44,
																					'source_id' =>$idPlan49,
																					'value' => 39000000,
																					'goal' => 0,
																					'evidence_balance' => 39000000,
																					'age' => 4,
																					]);
																					$idactivitySource107 = DB::getPdo()->lastInsertId();
																					
																					
																						DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity44,
																					'source_id' =>$idPlan50,
																					'value' => 58000000,
																					'goal' => 0,
																					'evidence_balance' => 58000000,
																					'age' => 4,
																					]);
																					$idactivitySource108 = DB::getPdo()->lastInsertId();
																					
																					
																						DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity44,
																					'source_id' =>$idPlan53,
																					'value' => 36650000,
																					'goal' => 0,
																					'evidence_balance' => 36650000,
																					'age' => 4,
																					]);
																					$idactivitySource109 = DB::getPdo()->lastInsertId();
																					
																					
																						DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity44,
																					'source_id' =>$idPlan55,
																					'value' => 9231500,
																					'goal' => 0,
																					'evidence_balance' => 9231500,
																					'age' => 4,
																					]);
																					$idactivitySource110 = DB::getPdo()->lastInsertId();
																					
																					
																						DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity44,
																					'source_id' =>$idPlan57,
																					'value' => 64885000,
																					'goal' => 0,
																					'evidence_balance' => 64885000,
																					'age' => 4,
																					]);
																					$idactivitySource111 = DB::getPdo()->lastInsertId();
																					
																					
																					
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia200,
																						'activity_source_id' =>$idactivitySource82,
																						'value' => 2983467238,
																						]);
																						$idevidenceFinancial82 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia202,
																						'activity_source_id' =>$idactivitySource83,
																						'value' => 69165063,
																						]);
																						$idevidenceFinancial83 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia204,
																						'activity_source_id' =>$idactivitySource84,
																						'value' => 480071247,
																						]);
																						$idevidenceFinancial84 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia206,
																						'activity_source_id' =>$idactivitySource85,
																						'value' => 667396925,
																						]);
																						$idevidenceFinancial85 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia208,
																						'activity_source_id' =>$idactivitySource86,
																						'value' => 120359943,
																						]);
																						$idevidenceFinancial86 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia210,
																						'activity_source_id' =>$idactivitySource87,
																						'value' => 254547489.5,
																						]);
																						$idevidenceFinancial87 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia213,
																						'activity_source_id' =>$idactivitySource88,
																						'value' => 1336518244,
																						]);
																						$idevidenceFinancial88 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia216,
																						'activity_source_id' =>$idactivitySource89,
																						'value' => 124621000,
																						]);
																						$idevidenceFinancial89 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia220,
																						'activity_source_id' =>$idactivitySource90,
																						'value' => 922221298.5,
																						]);
																						$idevidenceFinancial90 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia224,
																						'activity_source_id' =>$idactivitySource91,
																						'value' => 150421917.03,
																						]);
																						$idevidenceFinancial91 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia227,
																						'activity_source_id' =>$idactivitySource92,
																						'value' => 692593329,
																						]);
																						$idevidenceFinancial92 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia231,
																						'activity_source_id' =>$idactivitySource93,
																						'value' => 1903765852.3,
																						]);
																						$idevidenceFinancial93 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia233,
																						'activity_source_id' =>$idactivitySource94,
																						'value' => 72362842,
																						]);
																						$idevidenceFinancial94 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia235,
																						'activity_source_id' =>$idactivitySource95,
																						'value' => 1278494625.08,
																						]);
																						$idevidenceFinancial95 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia237,
																						'activity_source_id' =>$idactivitySource96,
																						'value' => 707453688.61,
																						]);
																						$idevidenceFinancial96 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia240,
																						'activity_source_id' =>$idactivitySource97,
																						'value' => 1828044927.62,
																						]);
																						$idevidenceFinancial97 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia242,
																						'activity_source_id' =>$idactivitySource98,
																						'value' => 63206166.6200008,
																						]);
																						$idevidenceFinancial98 = DB::getPdo()->lastInsertId();
																						
																						
																						
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia206,
																							'activity_source_id' =>$idactivitySource99,
																							'value' => 670604437,
																							]);
																							$idevidenceFinancial99 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia224,
																							'activity_source_id' =>$idactivitySource100,
																							'value' => 5338841805.33,
																							]);
																							$idevidenceFinancial100 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia240,
																							'activity_source_id' =>$idactivitySource102,
																							'value' => 1318437216.16,
																							]);
																							$idevidenceFinancial102 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia242,
																							'activity_source_id' =>$idactivitySource103,
																							'value' => 121370000,
																							]);
																							$idevidenceFinancial103 = DB::getPdo()->lastInsertId();
																							
																							
																							
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia242,
																								'activity_source_id' =>$idactivitySource105,
																								'value' => 145502040,
																								]);
																								$idevidenceFinancial105 = DB::getPdo()->lastInsertId();
																								
																								
																									DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia242,
																								'activity_source_id' =>$idactivitySource106,
																								'value' => 313347000,
																								]);
																								$idevidenceFinancial106 = DB::getPdo()->lastInsertId();
																								
																								
																									DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia242,
																								'activity_source_id' =>$idactivitySource107,
																								'value' => 39000000,
																								]);
																								$idevidenceFinancial107 = DB::getPdo()->lastInsertId();
																								
																								
																									DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia242,
																								'activity_source_id' =>$idactivitySource108,
																								'value' => 58000000,
																								]);
																								$idevidenceFinancial108 = DB::getPdo()->lastInsertId();
																								
																								
																									DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia242,
																								'activity_source_id' =>$idactivitySource109,
																								'value' => 36650000,
																								]);
																								$idevidenceFinancial109 = DB::getPdo()->lastInsertId();
																								
																								
																									DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia242,
																								'activity_source_id' =>$idactivitySource110,
																								'value' => 9231500,
																								]);
																								$idevidenceFinancial110 = DB::getPdo()->lastInsertId();
																								
																								
																									DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia242,
																								'activity_source_id' =>$idactivitySource111,
																								'value' => 460256910.379999,
																								]);
																								$idevidenceFinancial111 = DB::getPdo()->lastInsertId();
																								
																								
    }
  }