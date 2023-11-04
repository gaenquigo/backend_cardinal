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
 * Class HistoricPAI_CORTOLIMA_Seeder
 */
class HistoricPAI_CORTOLIMA_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'PLAN DE ACCIÓN INSTITUCIONAL 2016 - 2019 Agua para la vida y el desarrollo',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'JORGE ENRIQUE CARDOSO RODRÍGUEZ',
        'group_id' => 28,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
       
        
        DB::table('strategic_lines')->insert([
          'name' => 'LÍNEA ESTRATÉGICA 1: AGUA PARA LA VIDA Y EL DESARROLLO',
          'weighing' => 14,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'LÍNEA ESTRATÉGICA 2: ECOSISTEMAS ESTRATÉGICOS',
          'weighing' => 14,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'LÍNEA ESTRATÉGICA 3: GESTIÓN DEL RIESGO',
          'weighing' => 14,
          'p_a_i_id' => $idpai1,
          ]);
          $idline3 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'LÍNEA ESTRATÉGICA 4: CAMBIO CLIMÁTICO',
          'weighing' => 14,
          'p_a_i_id' => $idpai1,
          ]);
          $idline4 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'LÍNEA ESTRATÉGICA 5: PLANIFICACIÓN AMBIENTAL',
          'weighing' => 14,
          'p_a_i_id' => $idpai1,
          ]);
          $idline5 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'LÍNEA ESTRATÉGICA 6: EDUCACIÓN Y CULTURA AMBIENTAL',
          'weighing' => 15,
          'p_a_i_id' => $idpai1,
          ]);
          $idline6 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'LÍNEA ESTRATÉGICA 7 : GESTIÓN INSTITUCIONAL',
          'weighing' => 15,
          'p_a_i_id' => $idpai1,
          ]);
          $idline7 = DB::getPdo()->lastInsertId();
          
          
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1: GESTIÓN DEL RECURSO HÍDRICO',
            'weighing' => 14,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 2  GESTIÓN DE ECOSISTEMAS',
            'weighing' => 14,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 3 CONOCIMIENTO Y ATENCIÓN DE RIESGO DE DESASTRES',
            'weighing' => 14,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 4 ESTRATEGIA REGIONAL PARA ATENCIÓN AL CAMBIO CLIMÁTICO',
            'weighing' => 14,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 5: APOYO A INSTRUMENTOS DE PLANIFICACIÓN AMBIENTAL',
            'weighing' => 14,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline6,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 6 GESTIÓN SOCIOAMBIENTAL Y CULTURAL',
            'weighing' => 15,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline7,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 7: FORTALECIMIENTO INSTITUCIONAL PARA UNA GESTIÓN EFICIENTE, TRANSPARENTE Y DE CALIDAD',
            'weighing' => 15,
            ]);
            $idprogram7 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.1. Consolidación del conocimiento de la oferta y demanda del agua',
              'weighing' => 33,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.2. Apoyo a proyectos de saneamiento básico',
              'weighing' => 33,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 1.3  Apoyo a la construcción y optimización de sistemas de abastecimiento de recurso hídrico a las comunidades indígenas ',
              'weighing' => 34,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.1 Consolidación del Sistema Departamental de Áreas Protegidas',
              'weighing' => 14,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.2 Seguimiento y control a fauna y flora',
              'weighing' => 14,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.3  Manejo de los ecosistemas estratégicos, áreas protegidas y bosques.',
              'weighing' => 14,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.4 Administración de los ecosistemas estratégicos, áreas protegidas, predios adquiridos.',
              'weighing' => 14,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.5 Sistematización de la información de contaminación y calidad de los recursos naturales y el ambiente ',
              'weighing' => 14,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.6 Estrategia para la prevención y reducción del impacto por la actividad minera en el departamento',
              'weighing' => 15,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.7  Control y seguimiento de la contaminación y la calidad de los recursos naturales por actividades productivas',
              'weighing' => 15,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 3.1. Fortalecimiento del conocimiento y de las estrategias de reducción de los  Riesgos de desastres ',
              'weighing' => 50,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No 3.2. Organización,  Planificación, Atención y Mitigación de las amenazas y riesgo de desastres',
              'weighing' => 50,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.1.  Desarrollo de estrategias de adaptación y mitigación al cambio climático',
              'weighing' => 33,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.2 Establecimiento de convenios y/o agendas con sectores productivos con alto impacto ambiental',
              'weighing' => 33,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No 4.3 Apoyo a proyectos agroecológicos',
              'weighing' => 34,
              ]);
              $idproject15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.1  Apoyo a instrumentos de planificación ambiental territorial',
              'weighing' => 20,
              ]);
              $idproject16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.2. Ordenación y manejo del recurso hídrico',
              'weighing' => 20,
              ]);
              $idproject17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.3 Formulación de los estudios del estado actual y planes de manejo de los ecosistemas estratégicos',
              'weighing' => 20,
              ]);
              $idproject18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.4 Apoyo a instrumentos de planeación en saneamiento básico',
              'weighing' => 20,
              ]);
              $idproject19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.5 Diseño paisajístico del sistema de espacio publico (Consolidación del Plan de Silvicultura Urbana en municipios del Departamento)',
              'weighing' => 20,
              ]);
              $idproject20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.1  Incorporación de la Dimensión Ambiental en el sector formal y no formal',
              'weighing' => 50,
              ]);
              $idproject21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.2 Estrategia de comunicación ambiental',
              'weighing' => 50,
              ]);
              $idproject22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.1 Sistematización y racionalización de tramites ',
              'weighing' => 33,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.2  Implementación de herramientas para TICs y Consolidación de la Estrategia de Gobierno en línea',
              'weighing' => 33,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.3. Consolidación y  sostenimiento del Sistema de Gestión Integrado',
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
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 10,
					'goal_2' => 10,
					'goal_3' => 10,
					'goal_4' => 20,
					'total_goal' => 50,
					'goal_1_balance' => 10,
					'goal_2_balance' => 10,
					'goal_3_balance' => 10,
					'goal_4_balance' => 20,
					'total_goal' => 50,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 4,
					'total_goal' => 10,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 4,
					'total_goal' => 10,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 18,
					'goal_2' => 18,
					'goal_3' => 18,
					'goal_4' => 18,
					'total_goal' => 72,
					'goal_1_balance' => 18,
					'goal_2_balance' => 18,
					'goal_3_balance' => 18,
					'goal_4_balance' => 18,
					'total_goal' => 72,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 34,
					]);
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2,
					'goal_2' => 4,
					'goal_3' => 5,
					'goal_4' => 7,
					'total_goal' => 18,
					'goal_1_balance' => 2,
					'goal_2_balance' => 4,
					'goal_3_balance' => 5,
					'goal_4_balance' => 7,
					'total_goal' => 18,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 100,
					]);
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 3,
					'goal_3' => 2,
					'goal_4' => 2,
					'total_goal' => 8,
					'goal_1_balance' => 1,
					'goal_2_balance' => 3,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'total_goal' => 3,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'total_goal' => 12,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 10000,
					'goal_2' => 12946,
					'goal_3' => 4441,
					'goal_4' => 26000,
					'total_goal' => 53387,
					'goal_1_balance' => 10000,
					'goal_2_balance' => 12946,
					'goal_3_balance' => 4441,
					'goal_4_balance' => 26000,
					'total_goal' => 53387,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 2,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 0,
					'goal_2_balance' => 2,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'total_goal' => 8,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'total_goal' => 10,
					'goal_1_balance' => 1,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 10,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 900,
					'goal_2' => 950,
					'goal_3' => 1450,
					'goal_4' => 1200,
					'total_goal' => 4500,
					'goal_1_balance' => 900,
					'goal_2_balance' => 950,
					'goal_3_balance' => 1450,
					'goal_4_balance' => 1200,
					'total_goal' => 4500,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'total_goal' => 8,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'total_goal' => 12,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 330,
					'goal_2' => 300,
					'goal_3' => 300,
					'goal_4' => 653.4,
					'total_goal' => 1583.4,
					'goal_1_balance' => 330,
					'goal_2_balance' => 300,
					'goal_3_balance' => 300,
					'goal_4_balance' => 653.4,
					'total_goal' => 1583.4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 1663,
					'goal_2' => 1100,
					'goal_3' => 1100,
					'goal_4' => 1100,
					'total_goal' => 4963,
					'goal_1_balance' => 1663,
					'goal_2_balance' => 1100,
					'goal_3_balance' => 1100,
					'goal_4_balance' => 1100,
					'total_goal' => 4963,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 43045,
					'goal_2' => 20500,
					'goal_3' => 22750,
					'goal_4' => 97350,
					'total_goal' => 183645,
					'goal_1_balance' => 43045,
					'goal_2_balance' => 20500,
					'goal_3_balance' => 22750,
					'goal_4_balance' => 97350,
					'total_goal' => 183645,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 30,
					'goal_2' => 51,
					'goal_3' => 60,
					'goal_4' => 70,
					'total_goal' => 211,
					'goal_1_balance' => 30,
					'goal_2_balance' => 51,
					'goal_3_balance' => 60,
					'goal_4_balance' => 70,
					'total_goal' => 211,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 262000,
					'goal_2' => 90000,
					'goal_3' => 100000,
					'goal_4' => 100000,
					'total_goal' => 552000,
					'goal_1_balance' => 262000,
					'goal_2_balance' => 90000,
					'goal_3_balance' => 100000,
					'goal_4_balance' => 100000,
					'total_goal' => 552000,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 8,
					'goal_3' => 10,
					'goal_4' => 12,
					'total_goal' => 31,
					'goal_1_balance' => 1,
					'goal_2_balance' => 8,
					'goal_3_balance' => 10,
					'goal_4_balance' => 12,
					'total_goal' => 31,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 12000,
					'goal_2' => 12200,
					'goal_3' => 12400,
					'goal_4' => 12600,
					'total_goal' => 49200,
					'goal_1_balance' => 12000,
					'goal_2_balance' => 12200,
					'goal_3_balance' => 12400,
					'goal_4_balance' => 12600,
					'total_goal' => 49200,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 45.7,
					'goal_2' => 1166,
					'goal_3' => 1354.66,
					'goal_4' => 1500,
					'total_goal' => 4066.36,
					'goal_1_balance' => 45.7,
					'goal_2_balance' => 1166,
					'goal_3_balance' => 1354.66,
					'goal_4_balance' => 1500,
					'total_goal' => 4066.36,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 6,
					'goal_2' => 6,
					'goal_3' => 6,
					'goal_4' => 6,
					'total_goal' => 24,
					'goal_1_balance' => 6,
					'goal_2_balance' => 6,
					'goal_3_balance' => 6,
					'goal_4_balance' => 6,
					'total_goal' => 24,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 40,
					'goal_2' => 20,
					'goal_3' => 20,
					'goal_4' => 20,
					'total_goal' => 100,
					'goal_1_balance' => 40,
					'goal_2_balance' => 20,
					'goal_3_balance' => 20,
					'goal_4_balance' => 20,
					'total_goal' => 100,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 100,
					]);
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2000,
					'goal_2' => 2000,
					'goal_3' => 2200,
					'goal_4' => 2200,
					'total_goal' => 8400,
					'goal_1_balance' => 2000,
					'goal_2_balance' => 2000,
					'goal_3_balance' => 2200,
					'goal_4_balance' => 2200,
					'total_goal' => 8400,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
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
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 3000,
					'goal_2' => 3100,
					'goal_3' => 3500,
					'goal_4' => 3500,
					'total_goal' => 13100,
					'goal_1_balance' => 3000,
					'goal_2_balance' => 3100,
					'goal_3_balance' => 3500,
					'goal_4_balance' => 3500,
					'total_goal' => 13100,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 70,
					'goal_2' => 73,
					'goal_3' => 72,
					'goal_4' => 0.74,
					'total_goal' => 215.74,
					'goal_1_balance' => 70,
					'goal_2_balance' => 73,
					'goal_3_balance' => 72,
					'goal_4_balance' => 0.74,
					'total_goal' => 215.74,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 0,
					'total_goal' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 100,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 47,
					'goal_2' => 47,
					'goal_3' => 16,
					'goal_4' => 25,
					'total_goal' => 135,
					'goal_1_balance' => 47,
					'goal_2_balance' => 47,
					'goal_3_balance' => 16,
					'goal_4_balance' => 25,
					'total_goal' => 135,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 15,
					'goal_2' => 10,
					'goal_3' => 11,
					'goal_4' => 11,
					'total_goal' => 47,
					'goal_1_balance' => 15,
					'goal_2_balance' => 10,
					'goal_3_balance' => 11,
					'goal_4_balance' => 11,
					'total_goal' => 47,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 16,
					'goal_2' => 15,
					'goal_3' => 17,
					'goal_4' => 19,
					'total_goal' => 67,
					'goal_1_balance' => 16,
					'goal_2_balance' => 15,
					'goal_3_balance' => 17,
					'goal_4_balance' => 19,
					'total_goal' => 67,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 34,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'total_goal' => 8,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 2,
					'total_goal' => 8,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 2,
					'total_goal' => 8,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 34,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 5,
					'goal_2' => 6,
					'goal_3' => 5,
					'goal_4' => 5,
					'total_goal' => 21,
					'goal_1_balance' => 5,
					'goal_2_balance' => 6,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 21,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'total_goal' => 16,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'total_goal' => 16,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
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
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 3,
					'total_goal' => 8,
					'goal_1_balance' => 1,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 3,
					'total_goal' => 8,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 100,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 4,
					'goal_2' => 20,
					'goal_3' => 23,
					'goal_4' => 0,
					'total_goal' => 47,
					'goal_1_balance' => 4,
					'goal_2_balance' => 20,
					'goal_3_balance' => 23,
					'goal_4_balance' => 0,
					'total_goal' => 47,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'total_goal' => 12,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 34,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 5,
					'goal_1_balance' => 2,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 5,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 3,
					'goal_1_balance' => 0,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 3,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'total_goal' => 4,
					'goal_1_balance' => 3,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 80000,
					'goal_3' => 0,
					'goal_4' => 113254,
					'total_goal' => 193254,
					'goal_1_balance' => 0,
					'goal_2_balance' => 80000,
					'goal_3_balance' => 0,
					'goal_4_balance' => 113254,
					'total_goal' => 193254,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 2,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 0,
					'total_goal' => 12,
					'goal_1_balance' => 2,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 0,
					'total_goal' => 12,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 100,
					'total_goal' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 100,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 42,
					'goal_2' => 44,
					'goal_3' => 46,
					'goal_4' => 48,
					'total_goal' => 180,
					'goal_1_balance' => 42,
					'goal_2_balance' => 44,
					'goal_3_balance' => 46,
					'goal_4_balance' => 48,
					'total_goal' => 180,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 47,
					'goal_2' => 47,
					'goal_3' => 47,
					'goal_4' => 47,
					'total_goal' => 188,
					'goal_1_balance' => 47,
					'goal_2_balance' => 47,
					'goal_3_balance' => 47,
					'goal_4_balance' => 47,
					'total_goal' => 188,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 100,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 37,
					'goal_2' => 56,
					'goal_3' => 40,
					'goal_4' => 47,
					'total_goal' => 180,
					'goal_1_balance' => 37,
					'goal_2_balance' => 56,
					'goal_3_balance' => 40,
					'goal_4_balance' => 47,
					'total_goal' => 180,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 15,
					'goal_2' => 15,
					'goal_3' => 19,
					'goal_4' => 15,
					'total_goal' => 64,
					'goal_1_balance' => 15,
					'goal_2_balance' => 15,
					'goal_3_balance' => 19,
					'goal_4_balance' => 15,
					'total_goal' => 64,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 48,
					'goal_2' => 48,
					'goal_3' => 48,
					'goal_4' => 48,
					'total_goal' => 192,
					'goal_1_balance' => 48,
					'goal_2_balance' => 48,
					'goal_3_balance' => 48,
					'goal_4_balance' => 48,
					'total_goal' => 192,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 23,
					'goal_2' => 10,
					'goal_3' => 13,
					'goal_4' => 15,
					'total_goal' => 61,
					'goal_1_balance' => 23,
					'goal_2_balance' => 10,
					'goal_3_balance' => 13,
					'goal_4_balance' => 15,
					'total_goal' => 61,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'total_goal' => 16,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'total_goal' => 16,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 1,
					'total_goal' => 4,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 4,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 100,
					]);
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'total_goal' => 16,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
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
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 34,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
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
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 30,
					'goal_2' => 30,
					'goal_3' => 30,
					'goal_4' => 30,
					'total_goal' => 120,
					'goal_1_balance' => 30,
					'goal_2_balance' => 30,
					'goal_3_balance' => 30,
					'goal_4_balance' => 30,
					'total_goal' => 120,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 4,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'total_goal' => 16,
					'goal_1_balance' => 4,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 16,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 34,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'total_goal' => 400,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
	
               DB::table('activities')->insert([
				'objective_id' => $idobjective1,
				'product_id' =>$idobjectiveproduct1,
				'name' => 'Desarrollo, apoyo y ejecución del Sistema de Información Cartográfico Ambiental y del Recurso Hídrico',
				'goal_1' => 10,
				'goal_2' => 10,
				'goal_3' => 10,
				'goal_4' => 20,
				'goal' => 50,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity1 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective1,
				'product_id' =>$idobjectiveproduct2,
				'name' => 'Implementación de redes de monitoreo y caracterización del recurso hídrico del departamento ',
				'goal_1' => 2,
				'goal_2' => 2,
				'goal_3' => 2,
				'goal_4' => 4,
				'goal' => 10,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity2 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective1,
				'product_id' =>$idobjectiveproduct3,
				'name' => 'Monitoreo de caudales y caracterización del recurso hídrico del departamento.',
				'goal_1' => 18,
				'goal_2' => 18,
				'goal_3' => 18,
				'goal_4' => 18,
				'goal' => 72,
				'weighing' => 34,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity3 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective2,
				'product_id' =>$idobjectiveproduct4,
				'name' => 'Apoyo a la implementación y/o optimización de proyectos de tratamiento de aguas residuales ',
				'goal_1' => 2,
				'goal_2' => 4,
				'goal_3' => 5,
				'goal_4' => 7,
				'goal' => 18,
				'weighing' => 100,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity4 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective3,
				'product_id' =>$idobjectiveproduct5,
				'name' => 'Construcción y/o mantenimiento de Jagüeyes',
				'goal_1' => 1,
				'goal_2' => 3,
				'goal_3' => 2,
				'goal_4' => 2,
				'goal' => 8,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity5 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective3,
				'product_id' =>$idobjectiveproduct6,
				'name' => 'Construcción y/o mantenimiento de sistemas de abastecimiento de aguas superficiales y/o subterráneas',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 0,
				'goal' => 3,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity6 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective4,
				'product_id' =>$idobjectiveproduct7,
				'name' => 'Implementación del SIDAP',
				'goal_1' => 3,
				'goal_2' => 3,
				'goal_3' => 3,
				'goal_4' => 3,
				'goal' => 12,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity7 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective4,
				'product_id' =>$idobjectiveproduct8,
				'name' => 'Identificación, caracterización y declaratoria de  áreas protegidas de carácter regional ',
				'goal_1' => 10000,
				'goal_2' => 12946,
				'goal_3' => 4441,
				'goal_4' => 26000,
				'goal' => 53387,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity8 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective4,
				'product_id' =>$idobjectiveproduct9,
				'name' => 'Caracterizar y delimitar zonas amortiguadoras de los PNN',
				'goal_1' => 0,
				'goal_2' => 2,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity9 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective4,
				'product_id' =>$idobjectiveproduct10,
				'name' => 'Fortalecimiento a las Eco regiones en las que participa la Corporación',
				'goal_1' => 2,
				'goal_2' => 2,
				'goal_3' => 2,
				'goal_4' => 2,
				'goal' => 8,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity10 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective5,
				'product_id' =>$idobjectiveproduct11,
				'name' => 'Formulación y/o implementación de planes de manejo de fauna y flora',
				'goal_1' => 1,
				'goal_2' => 3,
				'goal_3' => 3,
				'goal_4' => 3,
				'goal' => 10,
				'weighing' => 20,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity11 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective5,
				'product_id' =>$idobjectiveproduct12,
				'name' => 'Control de tráfico de especies (fauna, flora, maderables)',
				'goal_1' => 900,
				'goal_2' => 950,
				'goal_3' => 1450,
				'goal_4' => 1200,
				'goal' => 4500,
				'weighing' => 20,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity12 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective5,
				'product_id' =>$idobjectiveproduct13,
				'name' => 'Seguimiento y control a especies de fauna exótica y a su problemática asociada',
				'goal_1' => 2,
				'goal_2' => 2,
				'goal_3' => 2,
				'goal_4' => 2,
				'goal' => 8,
				'weighing' => 20,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity13 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective5,
				'product_id' =>$idobjectiveproduct14,
				'name' => 'Mantenimiento y fortalecimiento al CAV y al centro de acopio de flora',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 20,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity14 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective5,
				'product_id' =>$idobjectiveproduct15,
				'name' => 'Posicionamiento de la Gobernanza forestal para el Tolima: Seguimiento y control a la movilización y comercialización de productos forestales',
				'goal_1' => 3,
				'goal_2' => 3,
				'goal_3' => 3,
				'goal_4' => 3,
				'goal' => 12,
				'weighing' => 20,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity15 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective6,
				'product_id' =>$idobjectiveproduct16,
				'name' => 'Restauración y rehabilitación de ecosistemas estratégicos, áreas protegidas y cuencas hidrográficas priorizadas, con fines de protección mediante actividades de reforestación, aislamientos, revegetalización, regeneración natural y corredores biológicos',
				'goal_1' => 330,
				'goal_2' => 300,
				'goal_3' => 300,
				'goal_4' => 653.4,
				'goal' => 1583.4,
				'weighing' => 16,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity16 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective6,
				'product_id' =>$idobjectiveproduct17,
				'name' => 'Mantenimiento de Plantaciones forestales protectoras establecidas ',
				'goal_1' => 1663,
				'goal_2' => 1100,
				'goal_3' => 1100,
				'goal_4' => 1100,
				'goal' => 4963,
				'weighing' => 16,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity17 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective6,
				'product_id' =>$idobjectiveproduct18,
				'name' => 'Aislamiento de nacimientos, Humedales y Rondas Hídricas  en cuencas mayores ordenadas con plan de ordenación y manejo formulado y adoptado por la Corporación
			Corporación.',
				'goal_1' => 43045,
				'goal_2' => 20500,
				'goal_3' => 22750,
				'goal_4' => 97350,
				'goal' => 183645,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity18 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective6,
				'product_id' =>$idobjectiveproduct19,
				'name' => 'Recuperación de zonas degradadas en el departamento del Tolima',
				'goal_1' => 30,
				'goal_2' => 51,
				'goal_3' => 60,
				'goal_4' => 70,
				'goal' => 211,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity19 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective6,
				'product_id' =>$idobjectiveproduct20,
				'name' => 'Adquisición y/o producción de material forestal para actividades de fomento',
				'goal_1' => 262000,
				'goal_2' => 90000,
				'goal_3' => 100000,
				'goal_4' => 100000,
				'goal' => 552000,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity20 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective6,
				'product_id' =>$idobjectiveproduct21,
				'name' => 'Proyectos especiales de apoyo al manejo de ecosistemas estratégicos y/o a la gestión ambiental de los recursos naturales o sistemas de pago por servicios ambientales',
				'goal_1' => 1,
				'goal_2' => 8,
				'goal_3' => 10,
				'goal_4' => 12,
				'goal' => 31,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity21 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective7,
				'product_id' =>$idobjectiveproduct22,
				'name' => 'Administración de predios, sistema de información del banco de tierras y estrategias complementarias a la conservación',
				'goal_1' => 12000,
				'goal_2' => 12200,
				'goal_3' => 12400,
				'goal_4' => 12600,
				'goal' => 49200,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity22 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective7,
				'product_id' =>$idobjectiveproduct23,
				'name' => 'Apoyo a la adquisición de predios para la protección de ecosistemas estratégicos ',
				'goal_1' => 45.7,
				'goal_2' => 1166,
				'goal_3' => 1354.66,
				'goal_4' => 1500,
				'goal' => 4066.36,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity23 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective8,
				'product_id' =>$idobjectiveproduct24,
				'name' => 'Operación de la red de calidad de aire de acuerdo al protocolo de control y vigilancia de calidad de aire.',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity24 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective8,
				'product_id' =>$idobjectiveproduct25,
				'name' => 'Monitoreo de fuentes móviles, acorde al Decreto 948/05.(Realizar Inventario fuentes Móviles y fuentes Fijas)',
				'goal_1' => 6,
				'goal_2' => 6,
				'goal_3' => 6,
				'goal_4' => 6,
				'goal' => 24,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity25 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective9,
				'product_id' =>$idobjectiveproduct26,
				'name' => 'Apoyo y acompañamiento para el cumplimiento de la normatividad ambiental y las buenas prácticas a mineros en procesos de formalización y demás estratégias.',
				'goal_1' => 40,
				'goal_2' => 20,
				'goal_3' => 20,
				'goal_4' => 20,
				'goal' => 100,
				'weighing' => 100,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity26 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective10,
				'product_id' =>$idobjectiveproduct27,
				'name' => 'Control y vigilancia de los recursos naturales y el medio ambiente ',
				'goal_1' => 2000,
				'goal_2' => 2000,
				'goal_3' => 2200,
				'goal_4' => 2200,
				'goal' => 8400,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity27 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective10,
				'product_id' =>$idobjectiveproduct28,
				'name' => 'Evaluación a proyectos de desarrollo en la región',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity28 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective10,
				'product_id' =>$idobjectiveproduct29,
				'name' => 'Seguimiento a proyectos priorizados',
				'goal_1' => 3000,
				'goal_2' => 3100,
				'goal_3' => 3500,
				'goal_4' => 3500,
				'goal' => 13100,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity29 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective10,
				'product_id' =>$idobjectiveproduct30,
				'name' => 'Atención de procesos permisivos y sancionatorios',
				'goal_1' => 70,
				'goal_2' => 73,
				'goal_3' => 72,
				'goal_4' => 0.74,
				'goal' => 215.74,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity30 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective11,
				'product_id' =>$idobjectiveproduct31,
				'name' => 'Análisis regional y urbano  de las Amenazas y  riesgos por movimientos en masa, inundación  en áreas con mayor susceptibilidad',
				'goal_1' => 1,
				'goal_2' => 0,
				'goal_3' => 1,
				'goal_4' => 0,
				'goal' => 2,
				'weighing' => 100,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity31 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective12,
				'product_id' =>$idobjectiveproduct32,
				'name' => 'Fortalecimiento de la organización institucional y comunitaria para la gestión del riesgo de desastres (Consejos Departamentales y Municipales, Comités técnicos de conocimiento, reducción y de manejo de desastres, entre otros) ',
				'goal_1' => 47,
				'goal_2' => 47,
				'goal_3' => 16,
				'goal_4' => 25,
				'goal' => 135,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity32 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective12,
				'product_id' =>$idobjectiveproduct33,
				'name' => 'Asesoramiento a los municipios en la formulación de Planes de Gestión del Riesgo de Desastres   e incorporación del riesgo en los planes de ordenamiento territorial',
				'goal_1' => 15,
				'goal_2' => 10,
				'goal_3' => 11,
				'goal_4' => 11,
				'goal' => 47,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity33 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective12,
				'product_id' =>$idobjectiveproduct34,
				'name' => 'Implementación de acciones para el control y manejo de la erosión y  las inundaciones en el departamento',
				'goal_1' => 16,
				'goal_2' => 15,
				'goal_3' => 17,
				'goal_4' => 19,
				'goal' => 67,
				'weighing' => 34,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity34 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective13,
				'product_id' =>$idobjectiveproduct35,
				'name' => 'Implementación de estrategias de adaptación al cambio climático y a la variabilidad climática',
				'goal_1' => 2,
				'goal_2' => 2,
				'goal_3' => 2,
				'goal_4' => 2,
				'goal' => 8,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity35 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective13,
				'product_id' =>$idobjectiveproduct36,
				'name' => 'Implementación de estrategias para la mitigación de los efectos del cambio climático y la variabilidad climática',
				'goal_1' => 2,
				'goal_2' => 2,
				'goal_3' => 2,
				'goal_4' => 2,
				'goal' => 8,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity36 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective13,
				'product_id' =>$idobjectiveproduct37,
				'name' => 'Conocimiento del impacto económico, social y ambiental del cambio climático',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 34,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity37 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective14,
				'product_id' =>$idobjectiveproduct38,
				'name' => 'Consolidación e implementación de Convenios y proyectos de Producción Mas Limpia - PML ',
				'goal_1' => 5,
				'goal_2' => 6,
				'goal_3' => 5,
				'goal_4' => 5,
				'goal' => 21,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity38 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective14,
				'product_id' =>$idobjectiveproduct39,
				'name' => 'Implementación del programa regional de negocios verdes y biocomercio',
				'goal_1' => 4,
				'goal_2' => 4,
				'goal_3' => 4,
				'goal_4' => 4,
				'goal' => 16,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity39 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective14,
				'product_id' =>$idobjectiveproduct40,
				'name' => 'Promoción de acciones de postconsumo sostenible (RAEE, etc.) ',
				'goal_1' => 4,
				'goal_2' => 4,
				'goal_3' => 4,
				'goal_4' => 4,
				'goal' => 16,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity40 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective14,
				'product_id' =>$idobjectiveproduct41,
				'name' => 'Implementación del Plan Departamental RESPEL',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity41 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective15,
				'product_id' =>$idobjectiveproduct42,
				'name' => 'Apoyo a la implementación y seguimiento de proyectos agroecológicos en el Departamento del Tolima',
				'goal_1' => 1,
				'goal_2' => 2,
				'goal_3' => 2,
				'goal_4' => 3,
				'goal' => 8,
				'weighing' => 100,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity42 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective16,
				'product_id' =>$idobjectiveproduct43,
				'name' => 'Apoyo a la formulación y/o actualización de la  Política de Gestión Ambiental Urbana - PGAU',
				'goal_1' => 4,
				'goal_2' => 20,
				'goal_3' => 23,
				'goal_4' => 0,
				'goal' => 47,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity43 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective16,
				'product_id' =>$idobjectiveproduct44,
				'name' => 'Capacitación, asesoría y apoyo en Ordenamiento Ambiental Territorial',
				'goal_1' => 3,
				'goal_2' => 3,
				'goal_3' => 3,
				'goal_4' => 3,
				'goal' => 12,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity44 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective16,
				'product_id' =>$idobjectiveproduct45,
				'name' => 'Evaluación, concertación y seguimiento a instrumentos de planificación del ordenamiento ambiental territorial',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 34,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity45 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective17,
				'product_id' =>$idobjectiveproduct46,
				'name' => 'Formulación o ajuste de Planes de Ordenación y Manejo de Cuencas Hidrográficas - POMCA y/o Planes de Ordenación y Manejo de Microcuencas',
				'goal_1' => 2,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 5,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity46 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective17,
				'product_id' =>$idobjectiveproduct47,
				'name' => 'Formulación de Planes de Manejo ambiental de Acuíferos - PMA',
				'goal_1' => 0,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 3,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity47 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective17,
				'product_id' =>$idobjectiveproduct48,
				'name' => 'Revisión y Reglamentación de corrientes hídricas declaradas agotadas y/o reglamentadas',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity48 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective17,
				'product_id' =>$idobjectiveproduct49,
				'name' => 'Formulación de Planes de Ordenamiento del Recurso Hídrico - PORH',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 25,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity49 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective18,
				'product_id' =>$idobjectiveproduct50,
				'name' => 'Elaboración y presentación de los documentos técnicos de soporte  para la delimitación de páramos ante el Ministerio de Ambiente y Desarrollo Sostenible',
				'goal_1' => 3,
				'goal_2' => 1,
				'goal_3' => 0,
				'goal_4' => 0,
				'goal' => 4,
				'weighing' => 16,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity50 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective18,
				'product_id' =>$idobjectiveproduct51,
				'name' => 'Formulación, ajuste y/o seguimiento a los planes de manejo de páramos',
				'goal_1' => 0,
				'goal_2' => 80000,
				'goal_3' => 0,
				'goal_4' => 113254,
				'goal' => 193254,
				'weighing' => 16,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity51 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective18,
				'product_id' =>$idobjectiveproduct52,
				'name' => 'Seguimiento, ajuste e implementación del plan departamental de biodiversidad y ecosistemas estratégicos.  ',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity52 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective18,
				'product_id' =>$idobjectiveproduct53,
				'name' => 'Revisión, ajuste y formulación de planes de manejo de ecosistemas  humedales ',
				'goal_1' => 2,
				'goal_2' => 5,
				'goal_3' => 5,
				'goal_4' => 0,
				'goal' => 12,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity53 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective18,
				'product_id' =>$idobjectiveproduct54,
				'name' => 'Evaluación y análisis multitemporal del estado de los bosques en el departamento. ',
				'goal_1' => 0,
				'goal_2' => 0,
				'goal_3' => 0,
				'goal_4' => 100,
				'goal' => 100,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity54 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective18,
				'product_id' =>$idobjectiveproduct55,
				'name' => 'Ajuste del Plan de General de Ordenación Forestal y/o Diseño de corredores de conectividad ecológica en ecosistemas  estratégicos y/o elaboración de mapa de compensaciones ambientales',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 17,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity55 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective19,
				'product_id' =>$idobjectiveproduct56,
				'name' => 'Acompañamiento en la formulación y seguimiento a los  Planes de Saneamiento y Manejo de Vertimientos (PSMV)',
				'goal_1' => 42,
				'goal_2' => 44,
				'goal_3' => 46,
				'goal_4' => 48,
				'goal' => 180,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity56 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective19,
				'product_id' =>$idobjectiveproduct57,
				'name' => 'Seguimiento al programa de aprovechamiento de los PGIRS',
				'goal_1' => 47,
				'goal_2' => 47,
				'goal_3' => 47,
				'goal_4' => 47,
				'goal' => 188,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity57 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective20,
				'product_id' =>$idobjectiveproduct58,
				'name' => 'Formulación, Implementación y puesta en marcha del sistema de información del arbolado urbano e implementación de actividades de manejo, en los municipios del Departamento del Tolima',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 100,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity58 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective21,
				'product_id' =>$idobjectiveproduct59,
				'name' => 'Asesoría y acompañamiento de Proyectos Ambientales Escolares (PRAE)',
				'goal_1' => 37,
				'goal_2' => 56,
				'goal_3' => 40,
				'goal_4' => 47,
				'goal' => 180,
				'weighing' => 14,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity59 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective21,
				'product_id' =>$idobjectiveproduct60,
				'name' => 'Implementación de Proyectos Ambientales Escolares  (PRAE)',
				'goal_1' => 15,
				'goal_2' => 15,
				'goal_3' => 19,
				'goal_4' => 15,
				'goal' => 64,
				'weighing' => 14,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity60 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective21,
				'product_id' =>$idobjectiveproduct61,
				'name' => 'Fortalecimiento del Comité Interinstitucional de Educación Ambiental Departamental y los Comités Municipales de Educación Ambiental (CIDEA) ',
				'goal_1' => 48,
				'goal_2' => 48,
				'goal_3' => 48,
				'goal_4' => 48,
				'goal' => 192,
				'weighing' => 14,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity61 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective21,
				'product_id' =>$idobjectiveproduct62,
				'name' => 'Formulación e implementación de Proyectos Comunitarios de educación ambiental (PROCEDA)',
				'goal_1' => 23,
				'goal_2' => 10,
				'goal_3' => 13,
				'goal_4' => 15,
				'goal' => 61,
				'weighing' => 14,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity62 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective21,
				'product_id' =>$idobjectiveproduct63,
				'name' => 'Formación de  promotores y gestores ambientales ',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 14,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity63 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective21,
				'product_id' =>$idobjectiveproduct64,
				'name' => 'Fortalecimiento del componente ambiental con minorías étnicas',
				'goal_1' => 4,
				'goal_2' => 4,
				'goal_3' => 4,
				'goal_4' => 4,
				'goal' => 16,
				'weighing' => 15,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity64 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective21,
				'product_id' =>$idobjectiveproduct65,
				'name' => 'Apoyo a la creación y formación  de grupos ambientales participativos en la gestión ambiental (Red de Jóvenes, Consejos de cuenca, organizaciones de la sociedad civil, entre otros…)',
				'goal_1' => 4,
				'goal_2' => 4,
				'goal_3' => 4,
				'goal_4' => 4,
				'goal' => 16,
				'weighing' => 15,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity65 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective22,
				'product_id' =>$idobjectiveproduct66,
				'name' => 'Implementar acciones de divulgación de la gestión ambiental',
				'goal_1' => 1,
				'goal_2' => 1,
				'goal_3' => 1,
				'goal_4' => 1,
				'goal' => 4,
				'weighing' => 100,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity66 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective23,
				'product_id' =>$idobjectiveproduct67,
				'name' => 'Implementación de un Plan Corporativo para la racionalización y sistematización de trámites ',
				'goal_1' => 4,
				'goal_2' => 4,
				'goal_3' => 4,
				'goal_4' => 4,
				'goal' => 16,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity67 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective23,
				'product_id' =>$idobjectiveproduct68,
				'name' => 'Estructuración y puesta en marcha de  la Ventanilla Única de Orientación Ambiental - VUA del Departamento del Tolima',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity68 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective23,
				'product_id' =>$idobjectiveproduct69,
				'name' => 'Fortalecimiento del sistema de cobro predial y actualización catastral (Depuración cartera, Instalación de herramientas de apoyo, actualización catastro)',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 34,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity69 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective24,
				'product_id' =>$idobjectiveproduct70,
				'name' => 'Optimización del portal institucional cumpliendo fases y requerimientos  de Gobierno en línea',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity70 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective24,
				'product_id' =>$idobjectiveproduct71,
				'name' => 'Adquisición o Actualización de Hardware, Software y Redes de Comunicaciones',
				'goal_1' => 30,
				'goal_2' => 30,
				'goal_3' => 30,
				'goal_4' => 30,
				'goal' => 120,
				'weighing' => 33,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity71 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective24,
				'product_id' =>$idobjectiveproduct72,
				'name' => 'Apoyo a la visibilización y divulgación de la gestión institucional ',
				'goal_1' => 4,
				'goal_2' => 4,
				'goal_3' => 4,
				'goal_4' => 4,
				'goal' => 16,
				'weighing' => 34,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity72 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective25,
				'product_id' =>$idobjectiveproduct73,
				'name' => 'Mantenimiento y evaluación del Sistema de Gestión Integrado',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity73 = DB::getPdo()->lastInsertId();
				
				
				
			DB::table('activities')->insert([
				'objective_id' => $idobjective25,
				'product_id' =>$idobjectiveproduct74,
				'name' => 'Fortalecimiento para la optimización e implementación del Plan de Gestión Institucional Ambiental-PIGA',
				'goal_1' => 100,
				'goal_2' => 100,
				'goal_3' => 100,
				'goal_4' => 100,
				'goal' => 400,
				'weighing' => 50,
				 'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,
				]);
				$idactivity74 = DB::getPdo()->lastInsertId();
				
				
				
					
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 10,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 1.2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 18,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 12081,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 996,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>1,
						'value' => 261.8,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 1663,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 43045,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 262000,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 12000,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 6,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 40,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>1,
						'value' => 3075,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia28 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 3050,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 70.7,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 0.75,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>1,
						'value' => 47,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 15,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 16,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 1.8,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 1.8,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>1,
						'value' => 0.85,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia41 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia45 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia50 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 42,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 47,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 37,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 15,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 48,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia61 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 23,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 30,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 95,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 10,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 18,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 0.3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 12946,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 1045,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 303,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 1026,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 34900,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 51,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 90000,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 8,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 13361,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 1235.3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 3408,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 4140,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 74.5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 47,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 10,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 15,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 20,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 0.9,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 0.65,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 0.98,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 80000,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 44,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 47,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 56,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 15,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 48,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 10,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 11,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 30,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 90.7,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 10,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 18,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 5,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 4441,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 1600,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 731,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 990.79,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 26500,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 60,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 100000,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 10,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 12400,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 1397.26,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 20,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 2551,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 4231,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 170,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 16,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 11,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 17,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 5,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 23,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 0.89,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 0.99,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 5,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 46,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 47,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 40,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 19,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 48,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 20,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 7,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 0.99,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 95.53,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 20,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 18,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 7,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 26656.52,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 1395,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 673.4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 1229.3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 98650,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 68.5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 128866,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 12,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 13034,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 1647.67,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 6,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 20,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 2665,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 5004,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 1.16,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 31,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 11,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 19,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 113254,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 48,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 47,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 47,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 15,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 48,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 15,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 6,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 30,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 

					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.3',
						'name' => 'Otros Aportes de Otras Entidades',
						'description' => 'Otros Aportes de Otras Entidades',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.2.1.2',
						'name' => 'Venta de Activos',
						'description' => 'Venta de Activos',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 279,
						'code' => '1.2.7.3.3.5',
						'name' => 'Cancelación de reservas Otras tasas',
						'description' => 'Cancelación de reservas Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 250,
						'code' => '1.2.7.4',
						'name' => 'Otros recursos del balance',
						'description' => 'Otros recursos del balance',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						 
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.4',
						'name' => 'Rezago Año Anterior',
						'description' => 'Rezago Año Anterior',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 28,
						]);
						$idFuente19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 18221160961,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 18221160961,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 3209611931,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3209611931,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 1947924860,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 194792486,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1753132374,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 2663244959.07,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2663244959.07,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 1892844735,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1892844735,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 6656125014,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6656125014,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 65765620,
						'functioning_percentage' => 52.7205,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 47.2795,
						'functioning' => 34671963.6921,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 31093656.3079,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 236780000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 236780000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 650000000,
						'functioning_percentage' => 50,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 50,
						'functioning' => 325000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 325000000,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 35000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 35000000,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 5313407511.81,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5313407511.81,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 2158826249.6,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2158826249.6,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1731180199,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1731180199,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 1701960782,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1701960782,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 541617457,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 541617457,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
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
						$idPlan61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 26633705806,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 26633705806,
						'year' => 2,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 3586060000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3586060000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 1947050198,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 194705019.8,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1752345178.2,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 4129209038.33,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4129209038.33,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 2056386389,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2056386389,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 9189306880,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9189306880,
						'year' => 2,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 71026870,
						'functioning_percentage' => 89.06,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 10.94,
						'functioning' => 63256530.422,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 7770339.578,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 255610000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 255610000,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 702000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 702000000,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 5000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5000000,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 9525047597.89,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9525047597.89,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 1570077572.91,
						'functioning_percentage' => 65,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 35,
						'functioning' => 1020550422.3915,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 549527150.5185,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 2350206962,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2350206962,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 264673332,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 264673332,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 1818519000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1818519000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 446909099,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 446909099,
						'year' => 2,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
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
						'year' => 2,
						]);
						$idPlan62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 28050033975,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 28050033975,
						'year' => 3,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 3725110635,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3725110635,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 2655562524,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 265556252.4,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2390006271.6,
						'year' => 3,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 1512033969.03,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1512033969.03,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 2230721933,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2230721933,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 6304489638,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 6304489638,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 71026870,
						'functioning_percentage' => 98.5803,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 1.41970000000001,
						'functioning' => 70018501.52661,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1008368.47339,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 256053600,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 256053600,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 750000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 750000000,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 6000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6000000,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 17237527626.29,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 17237527626.29,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 3032271743.73,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3032271743.73,
						'year' => 3,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 6366509246,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6366509246,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 229449664,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 229449664,
						'year' => 3,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 1905476000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1905476000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 

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
						'year' => 3,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2119369141,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2119369141,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 29491208702,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 29491208702,
						'year' => 4,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 3704116805,
						'functioning_percentage' => 5,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 95,
						'functioning' => 185205840.25,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3518910964.75,
						'year' => 4,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 5660227474.41,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 5660227474.41,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 2797726164,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2797726164,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 7691261224,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 7691261224,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 73157676,
						'functioning_percentage' => 73.69,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 26.31,
						'functioning' => 53909891.4444,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 19247784.5556,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 3135175000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3135175000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 102224,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 102224,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 6000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6000000,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 20824416253.36,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 20824416253.36,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 2497338884.27,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2497338884.27,
						'year' => 4,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 6443280513,
						'functioning_percentage' => 50,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 50,
						'functioning' => 3221640256.5,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3221640256.5,
						'year' => 4,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 1986818712,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1986818712,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					  DB::table('implementations')->insert([
						'p_a_i_s_id'=>$idpai1,
						]);
						$idImplementation1 = DB::getPdo()->lastInsertId();


					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 19096481385.82,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 4094394156.13,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2022029982,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1096442440.5,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2164556403,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 9798297620,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 80928635,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 498199649.79,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1099408471.75,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 5828586393.49,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2682828928.52,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1953291088,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1691321396,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 85840000,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 777313932.77,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 27533680859.71,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4091921031,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2848530242,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1694907467.04,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2243653311,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 9516045139,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 63895206,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 970157197.86,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1761609799.56,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 112231726,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 9526678305.89,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2152718537.72,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4478148742.33,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 163395286,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1791607020,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 466363509.67,
						'financial_plans_id' => $idPlan62,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 30017693234,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2972202155.16,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3377364426,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 364730881,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2360340779,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 7468486570,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 315014340,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 766254331.08,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1955315242.34,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4294867,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 17237527626.29,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3350279462.78,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 7995412439,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 238165115,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1896054800,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 459001838.33,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1384798101.75,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 31404641328,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3668075926,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2425300700.17,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3839743855,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 8520133537,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 43160055,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 4521718392.38,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 358474184,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 41567444,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 20824416253.36,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1936171653.12,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 7209703673.2,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1889507396,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();

						DB::table('cost_sources')->insert([
							'father_id' => 2,
							'code' => '2.1.1',
							'name' => 'GASTOS DE PERSONAL',
							'description' => 'GASTOS DE PERSONAL',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 28,
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
							'group_id' => 28,
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
							'group_id' => 28,
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
							'group_id' => 28,
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
							'group_id' => 28,
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
							'group_id' => 28,
							]);
							$idFuenteGasto4 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 10,
							'code' => '2.1.3.1.1.1.1',
							'name' => 'Fondo de Compensación Ambiental - TSE (20%)',
							'description' => 'Fondo de Compensación Ambiental - TSE (20%)',
							'functioning' => FALSE,
							'compensation' => TRUE,
							'debt_service' => FALSE,
							'group_id' => 28,
							]);
							$idFuenteGasto6 = DB::getPdo()->lastInsertId();
							
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 3533538598,
								'value_comitted' => 3395409609.25,
								'value_paid' => 3208714134.34,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 28,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 883166640.74,
								'value_comitted' => 831712817.06,
								'value_paid' => 692631679.19,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto2,
								'p_a_i_id' => $idpai1,
								'group_id' => 28,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 3418527373.35,
								'value_comitted' => 2608839874.48,
								'value_paid' => 2038579991.17,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto3,
								'p_a_i_id' => $idpai1,
								'group_id' => 28,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 190474638,
								'value_comitted' => 104338643.29,
								'value_paid' => 104338643.29,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 28,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 41124000,
								'value_comitted' => 41091331.48,
								'value_paid' => 41091331.48,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto5,
								'p_a_i_id' => $idpai1,
								'group_id' => 28,
								]);
								$idGasto5 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 462035200,
								'value_comitted' => 436394014.53,
								'value_paid' => 436394014.53,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto7,
								'p_a_i_id' => $idpai1,
								'group_id' => 28,
								]);
								$idGasto6 = DB::getPdo()->lastInsertId();
								
								
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 1587534922,
									'value_comitted' => 1587534922,
									'value_paid' => 1587534922,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 28,
									]);
									$idGasto7 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 99170860,
									'value_comitted' => 99170860,
									'value_paid' => 88531474,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto3,
									'p_a_i_id' => $idpai1,
									'group_id' => 28,
									]);
									$idGasto8 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 7223000,
									'value_comitted' => 7223000,
									'value_paid' => 7223000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto4,
									'p_a_i_id' => $idpai1,
									'group_id' => 28,
									]);
									$idGasto9 = DB::getPdo()->lastInsertId();
									
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 8032000,
									'value_comitted' => 8032000,
									'value_paid' => 8032000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto5,
									'p_a_i_id' => $idpai1,
									'group_id' => 28,
									]);
									$idGasto10 = DB::getPdo()->lastInsertId();
									
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 4301497056.78,
										'value_comitted' => 4061262072.88,
										'value_paid' => 3389229341.73,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 28,
										]);
										$idGasto11 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 1446261326.8,
										'value_comitted' => 1170548521.48,
										'value_paid' => 633374767.94,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 28,
										]);
										$idGasto12 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 4888984977.42,
										'value_comitted' => 4579885254.25,
										'value_paid' => 3231553517.96,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto3,
										'p_a_i_id' => $idpai1,
										'group_id' => 28,
										]);
										$idGasto13 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 240097662,
										'value_comitted' => 160012667.64,
										'value_paid' => 158312403.68,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 28,
										]);
										$idGasto14 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 63510000,
										'value_comitted' => 63505624.46,
										'value_paid' => 63505624.46,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto5,
										'p_a_i_id' => $idpai1,
										'group_id' => 28,
										]);
										$idGasto15 = DB::getPdo()->lastInsertId();

									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 73806253,
										'value_comitted' => 12408648.74,
										'value_paid' => 12408648.74,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto7,
										'p_a_i_id' => $idpai1,
										'group_id' => 28,
										]);
										$idGasto16 = DB::getPdo()->lastInsertId();
										
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 1709052000,
											'value_comitted' => 1709052000,
											'value_paid' => 1696052000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 28,
											]);
											$idGasto17 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 63000000,
											'value_comitted' => 63000000,
											'value_paid' => 49088020,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto2,
											'p_a_i_id' => $idpai1,
											'group_id' => 28,
											]);
											$idGasto18 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 31212000,
											'value_comitted' => 31212000,
											'value_paid' => 31212000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto3,
											'p_a_i_id' => $idpai1,
											'group_id' => 28,
											]);
											$idGasto19 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 7223000,
											'value_comitted' => 7223000,
											'value_paid' => 7223000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto4,
											'p_a_i_id' => $idpai1,
											'group_id' => 28,
											]);
											$idGasto20 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 8032000,
											'value_comitted' => 8032000,
											'value_paid' => 8032000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto5,
											'p_a_i_id' => $idpai1,
											'group_id' => 28,
											]);
											$idGasto21 = DB::getPdo()->lastInsertId();
											
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 4143659499,
												'value_comitted' => 3576170751.24,
												'value_paid' => 3184869516.88,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 28,
												]);
												$idGasto22 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 956003123,
												'value_comitted' => 917312231.81,
												'value_paid' => 433737537.7,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto2,
												'p_a_i_id' => $idpai1,
												'group_id' => 28,
												]);
												$idGasto23 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 6382559662.78,
												'value_comitted' => 6098708271.94,
												'value_paid' => 2576321010.25,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto3,
												'p_a_i_id' => $idpai1,
												'group_id' => 28,
												]);
												$idGasto24 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 176436676,
												'value_comitted' => 119627200.61,
												'value_paid' => 119627200.61,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto4,
												'p_a_i_id' => $idpai1,
												'group_id' => 28,
												]);
												$idGasto25 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 87250000,
												'value_comitted' => 87156869.52,
												'value_paid' => 87156869.52,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto5,
												'p_a_i_id' => $idpai1,
												'group_id' => 28,
												]);
												$idGasto26 = DB::getPdo()->lastInsertId();
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 94500000,
												'value_comitted' => 94352780.49,
												'value_paid' => 94352780.49,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto7,
												'p_a_i_id' => $idpai1,
												'group_id' => 28,
												]);
												$idGasto27 = DB::getPdo()->lastInsertId();
												
												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 1795551000,
													'value_comitted' => 1795551000,
													'value_paid' => 1795551000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 28,
													]);
													$idGasto28 = DB::getPdo()->lastInsertId();
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 94212000,
													'value_comitted' => 94212000,
													'value_paid' => 84790800,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto3,
													'p_a_i_id' => $idpai1,
													'group_id' => 28,
													]);
													$idGasto29 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 7440000,
													'value_comitted' => 7440000,
													'value_paid' => 7440000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto4,
													'p_a_i_id' => $idpai1,
													'group_id' => 28,
													]);
													$idGasto30 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 8273000,
													'value_comitted' => 8273000,
													'value_paid' => 8273000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto5,
													'p_a_i_id' => $idpai1,
													'group_id' => 28,
													]);
													$idGasto31 = DB::getPdo()->lastInsertId();
													
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 14334271098.34,
														'value_comitted' => 13175263800.17,
														'value_paid' => 12915162131.58,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto1,
														'p_a_i_id' => $idpai1,
														'group_id' => 28,
														]);
														$idGasto32 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 1267637980.59,
														'value_comitted' => 813695167.63,
														'value_paid' => 460048352.9,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto2,
														'p_a_i_id' => $idpai1,
														'group_id' => 28,
														]);
														$idGasto33 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 5752950952.84,
														'value_comitted' => 5085412063.86,
														'value_paid' => 3465307346.66,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto3,
														'p_a_i_id' => $idpai1,
														'group_id' => 28,
														]);
														$idGasto34 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 295633564.62,
														'value_comitted' => 292145574.13,
														'value_paid' => 290554434.93,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto4,
														'p_a_i_id' => $idpai1,
														'group_id' => 28,
														]);
														$idGasto35 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 100000000,
														'value_comitted' => 59347535.36,
														'value_paid' => 59347535.36,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto5,
														'p_a_i_id' => $idpai1,
														'group_id' => 28,
														]);
														$idGasto36 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 2435795128.07,
														'value_comitted' => 2435795128.07,
														'value_paid' => 2435795128.07,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => FALSE,
														'compensation' => TRUE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto6,
														'p_a_i_id' => $idpai1,
														'group_id' => 28,
														]);
														$idGasto37 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 640000000,
														'value_comitted' => 615853577.72,
														'value_paid' => 615853577.72,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto7,
														'p_a_i_id' => $idpai1,
														'group_id' => 28,
														]);
														$idGasto38 = DB::getPdo()->lastInsertId();
														
														
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 1876375183,
															'value_comitted' => 1792320476,
															'value_paid' => 1792320476,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto1,
															'p_a_i_id' => $idpai1,
															'group_id' => 28,
															]);
															$idGasto39 = DB::getPdo()->lastInsertId();
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 94212000,
															'value_comitted' => 94212000,
															'value_paid' => 89501400,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto3,
															'p_a_i_id' => $idpai1,
															'group_id' => 28,
															]);
															$idGasto40 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 7685520,
															'value_comitted' => 7685520,
															'value_paid' => 7685520,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto4,
															'p_a_i_id' => $idpai1,
															'group_id' => 28,
															]);
															$idGasto41 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 8546009,
															'value_comitted' => 8546009,
															'value_paid' => 8546009,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto5,
															'p_a_i_id' => $idpai1,
															'group_id' => 28,
															]);
															$idGasto42 = DB::getPdo()->lastInsertId();
				

           DB::table('activity_sources')->insert([
              'activity_id' => $idactivity1,
              'source_id' =>$idPlan1,
              'value' => 128276673.18,
              'goal' => 0,
              'evidence_balance' => 128276673.18,
              'age' => 1,
              ]);
              $idactivitySource1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity2,
              'source_id' =>$idPlan1,
              'value' => 150000000,
              'goal' => 0,
              'evidence_balance' => 150000000,
              'age' => 1,
              ]);
              $idactivitySource2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity3,
              'source_id' =>$idPlan1,
              'value' => 1198412903.82,
              'goal' => 0,
              'evidence_balance' => 1198412903.82,
              'age' => 1,
              ]);
              $idactivitySource3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity4,
              'source_id' =>$idPlan1,
              'value' => 2169525852.81,
              'goal' => 0,
              'evidence_balance' => 2169525852.81,
              'age' => 1,
              ]);
              $idactivitySource4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity5,
              'source_id' =>$idPlan1,
              'value' => 229808125,
              'goal' => 0,
              'evidence_balance' => 229808125,
              'age' => 1,
              ]);
              $idactivitySource5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity6,
              'source_id' =>$idPlan1,
              'value' => 172389995,
              'goal' => 0,
              'evidence_balance' => 172389995,
              'age' => 1,
              ]);
              $idactivitySource6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity7,
              'source_id' =>$idPlan1,
              'value' => 50000000,
              'goal' => 0,
              'evidence_balance' => 50000000,
              'age' => 1,
              ]);
              $idactivitySource7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity8,
              'source_id' =>$idPlan1,
              'value' => 210000000,
              'goal' => 0,
              'evidence_balance' => 210000000,
              'age' => 1,
              ]);
              $idactivitySource8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity10,
              'source_id' =>$idPlan1,
              'value' => 100000000,
              'goal' => 0,
              'evidence_balance' => 100000000,
              'age' => 1,
              ]);
              $idactivitySource10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity11,
              'source_id' =>$idPlan1,
              'value' => 85533843,
              'goal' => 0,
              'evidence_balance' => 85533843,
              'age' => 1,
              ]);
              $idactivitySource11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity12,
              'source_id' =>$idPlan1,
              'value' => 99904293.61,
              'goal' => 0,
              'evidence_balance' => 99904293.61,
              'age' => 1,
              ]);
              $idactivitySource12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity14,
              'source_id' =>$idPlan1,
              'value' => 105292202.04,
              'goal' => 0,
              'evidence_balance' => 105292202.04,
              'age' => 1,
              ]);
              $idactivitySource14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity15,
              'source_id' =>$idPlan1,
              'value' => 115540146.5,
              'goal' => 0,
              'evidence_balance' => 115540146.5,
              'age' => 1,
              ]);
              $idactivitySource15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity16,
              'source_id' =>$idPlan1,
              'value' => 2916674674.79,
              'goal' => 0,
              'evidence_balance' => 2916674674.79,
              'age' => 1,
              ]);
              $idactivitySource16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity17,
              'source_id' =>$idPlan1,
              'value' => 3253025615.06,
              'goal' => 0,
              'evidence_balance' => 3253025615.06,
              'age' => 1,
              ]);
              $idactivitySource17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity18,
              'source_id' =>$idPlan1,
              'value' => 468830827,
              'goal' => 0,
              'evidence_balance' => 468830827,
              'age' => 1,
              ]);
              $idactivitySource18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity20,
              'source_id' =>$idPlan1,
              'value' => 373347398.84,
              'goal' => 0,
              'evidence_balance' => 373347398.84,
              'age' => 1,
              ]);
              $idactivitySource20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity21,
              'source_id' =>$idPlan1,
              'value' => 277723766.91,
              'goal' => 0,
              'evidence_balance' => 277723766.91,
              'age' => 1,
              ]);
              $idactivitySource21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity22,
              'source_id' =>$idPlan1,
              'value' => 104337200,
              'goal' => 0,
              'evidence_balance' => 104337200,
              'age' => 1,
              ]);
              $idactivitySource22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity23,
              'source_id' =>$idPlan1,
              'value' => 2340968480.94,
              'goal' => 0,
              'evidence_balance' => 2340968480.94,
              'age' => 1,
              ]);
              $idactivitySource23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity24,
              'source_id' =>$idPlan1,
              'value' => 55233984.71,
              'goal' => 0,
              'evidence_balance' => 55233984.71,
              'age' => 1,
              ]);
              $idactivitySource24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity26,
              'source_id' =>$idPlan1,
              'value' => 594903011,
              'goal' => 0,
              'evidence_balance' => 594903011,
              'age' => 1,
              ]);
              $idactivitySource26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity27,
              'source_id' =>$idPlan1,
              'value' => 459254057.15,
              'goal' => 0,
              'evidence_balance' => 459254057.15,
              'age' => 1,
              ]);
              $idactivitySource27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity28,
              'source_id' =>$idPlan1,
              'value' => 305878655.5,
              'goal' => 0,
              'evidence_balance' => 305878655.5,
              'age' => 1,
              ]);
              $idactivitySource28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity29,
              'source_id' =>$idPlan1,
              'value' => 249551610.02,
              'goal' => 0,
              'evidence_balance' => 249551610.02,
              'age' => 1,
              ]);
              $idactivitySource29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity30,
              'source_id' =>$idPlan1,
              'value' => 914780817,
              'goal' => 0,
              'evidence_balance' => 914780817,
              'age' => 1,
              ]);
              $idactivitySource30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity31,
              'source_id' =>$idPlan1,
              'value' => 1018372243.33,
              'goal' => 0,
              'evidence_balance' => 1018372243.33,
              'age' => 1,
              ]);
              $idactivitySource31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity32,
              'source_id' =>$idPlan1,
              'value' => 58534583.7900009,
              'goal' => 0,
              'evidence_balance' => 58534583.7900009,
              'age' => 1,
              ]);
              $idactivitySource32 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity33,
              'source_id' =>$idPlan6,
              'value' => 30000000,
              'goal' => 0,
              'evidence_balance' => 30000000,
              'age' => 1,
              ]);
              $idactivitySource33 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity34,
              'source_id' =>$idPlan6,
              'value' => 830714920.94,
              'goal' => 0,
              'evidence_balance' => 830714920.94,
              'age' => 1,
              ]);
              $idactivitySource34 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity35,
              'source_id' =>$idPlan6,
              'value' => 104623440,
              'goal' => 0,
              'evidence_balance' => 104623440,
              'age' => 1,
              ]);
              $idactivitySource35 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity36,
              'source_id' =>$idPlan6,
              'value' => 144000000,
              'goal' => 0,
              'evidence_balance' => 144000000,
              'age' => 1,
              ]);
              $idactivitySource36 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity37,
              'source_id' =>$idPlan6,
              'value' => 111376560,
              'goal' => 0,
              'evidence_balance' => 111376560,
              'age' => 1,
              ]);
              $idactivitySource37 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity38,
              'source_id' =>$idPlan6,
              'value' => 737683994,
              'goal' => 0,
              'evidence_balance' => 737683994,
              'age' => 1,
              ]);
              $idactivitySource38 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity39,
              'source_id' =>$idPlan6,
              'value' => 51371204,
              'goal' => 0,
              'evidence_balance' => 51371204,
              'age' => 1,
              ]);
              $idactivitySource39 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity40,
              'source_id' =>$idPlan6,
              'value' => 21654400,
              'goal' => 0,
              'evidence_balance' => 21654400,
              'age' => 1,
              ]);
              $idactivitySource40 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity41,
              'source_id' =>$idPlan6,
              'value' => 123654400,
              'goal' => 0,
              'evidence_balance' => 123654400,
              'age' => 1,
              ]);
              $idactivitySource41 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity42,
              'source_id' =>$idPlan6,
              'value' => 200000000,
              'goal' => 0,
              'evidence_balance' => 200000000,
              'age' => 1,
              ]);
              $idactivitySource42 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity43,
              'source_id' =>$idPlan6,
              'value' => 20522037.43,
              'goal' => 0,
              'evidence_balance' => 20522037.43,
              'age' => 1,
              ]);
              $idactivitySource43 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity44,
              'source_id' =>$idPlan6,
              'value' => 10000000,
              'goal' => 0,
              'evidence_balance' => 10000000,
              'age' => 1,
              ]);
              $idactivitySource44 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity45,
              'source_id' =>$idPlan6,
              'value' => 29061376,
              'goal' => 0,
              'evidence_balance' => 29061376,
              'age' => 1,
              ]);
              $idactivitySource45 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity46,
              'source_id' =>$idPlan6,
              'value' => 607918304.55,
              'goal' => 0,
              'evidence_balance' => 607918304.55,
              'age' => 1,
              ]);
              $idactivitySource46 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity48,
              'source_id' =>$idPlan6,
              'value' => 199553915.35,
              'goal' => 0,
              'evidence_balance' => 199553915.35,
              'age' => 1,
              ]);
              $idactivitySource48 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity49,
              'source_id' =>$idPlan6,
              'value' => 587331571.08,
              'goal' => 0,
              'evidence_balance' => 587331571.08,
              'age' => 1,
              ]);
              $idactivitySource49 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity50,
              'source_id' =>$idPlan6,
              'value' => 50000000,
              'goal' => 0,
              'evidence_balance' => 50000000,
              'age' => 1,
              ]);
              $idactivitySource50 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity52,
              'source_id' =>$idPlan6,
              'value' => 70975608,
              'goal' => 0,
              'evidence_balance' => 70975608,
              'age' => 1,
              ]);
              $idactivitySource52 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity53,
              'source_id' =>$idPlan6,
              'value' => 50000000,
              'goal' => 0,
              'evidence_balance' => 50000000,
              'age' => 1,
              ]);
              $idactivitySource53 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity55,
              'source_id' =>$idPlan6,
              'value' => 64897184,
              'goal' => 0,
              'evidence_balance' => 64897184,
              'age' => 1,
              ]);
              $idactivitySource55 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity56,
              'source_id' =>$idPlan6,
              'value' => 66117381,
              'goal' => 0,
              'evidence_balance' => 66117381,
              'age' => 1,
              ]);
              $idactivitySource56 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity57,
              'source_id' =>$idPlan6,
              'value' => 75000000,
              'goal' => 0,
              'evidence_balance' => 75000000,
              'age' => 1,
              ]);
              $idactivitySource57 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity58,
              'source_id' =>$idPlan6,
              'value' => 580000000,
              'goal' => 0,
              'evidence_balance' => 580000000,
              'age' => 1,
              ]);
              $idactivitySource58 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity59,
              'source_id' =>$idPlan6,
              'value' => 107168000,
              'goal' => 0,
              'evidence_balance' => 107168000,
              'age' => 1,
              ]);
              $idactivitySource59 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity60,
              'source_id' =>$idPlan6,
              'value' => 80000000,
              'goal' => 0,
              'evidence_balance' => 80000000,
              'age' => 1,
              ]);
              $idactivitySource60 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity61,
              'source_id' =>$idPlan6,
              'value' => 64629115,
              'goal' => 0,
              'evidence_balance' => 64629115,
              'age' => 1,
              ]);
              $idactivitySource61 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity62,
              'source_id' =>$idPlan6,
              'value' => 707324461.44,
              'goal' => 0,
              'evidence_balance' => 707324461.44,
              'age' => 1,
              ]);
              $idactivitySource62 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity63,
              'source_id' =>$idPlan6,
              'value' => 236901959.01,
              'goal' => 0,
              'evidence_balance' => 236901959.01,
              'age' => 1,
              ]);
              $idactivitySource63 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity64,
              'source_id' =>$idPlan6,
              'value' => 129946000,
              'goal' => 0,
              'evidence_balance' => 129946000,
              'age' => 1,
              ]);
              $idactivitySource64 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity65,
              'source_id' =>$idPlan6,
              'value' => 156600094.07,
              'goal' => 0,
              'evidence_balance' => 156600094.07,
              'age' => 1,
              ]);
              $idactivitySource65 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity66,
              'source_id' =>$idPlan11,
              'value' => 441000232.68,
              'goal' => 0,
              'evidence_balance' => 441000232.68,
              'age' => 1,
              ]);
              $idactivitySource66 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity67,
              'source_id' =>$idPlan11,
              'value' => 174841114.28,
              'goal' => 0,
              'evidence_balance' => 174841114.28,
              'age' => 1,
              ]);
              $idactivitySource67 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity68,
              'source_id' =>$idPlan11,
              'value' => 20000000,
              'goal' => 0,
              'evidence_balance' => 20000000,
              'age' => 1,
              ]);
              $idactivitySource68 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity69,
              'source_id' =>$idPlan11,
              'value' => 55231196.61,
              'goal' => 0,
              'evidence_balance' => 55231196.61,
              'age' => 1,
              ]);
              $idactivitySource69 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity70,
              'source_id' =>$idPlan11,
              'value' => 52861148.72,
              'goal' => 0,
              'evidence_balance' => 52861148.72,
              'age' => 1,
              ]);
              $idactivitySource70 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity71,
              'source_id' =>$idPlan11,
              'value' => 146014455.28,
              'goal' => 0,
              'evidence_balance' => 146014455.28,
              'age' => 1,
              ]);
              $idactivitySource71 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity72,
              'source_id' =>$idPlan11,
              'value' => 54500000,
              'goal' => 0,
              'evidence_balance' => 54500000,
              'age' => 1,
              ]);
              $idactivitySource72 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity73,
              'source_id' =>$idPlan11,
              'value' => 151087885.72,
              'goal' => 0,
              'evidence_balance' => 151087885.72,
              'age' => 1,
              ]);
              $idactivitySource73 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity74,
              'source_id' =>$idPlan11,
              'value' => 15000000,
              'goal' => 0,
              'evidence_balance' => 15000000,
              'age' => 1,
              ]);
              $idactivitySource74 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity32,
                'source_id' =>$idPlan6,
                'value' => 407099088.129999,
                'goal' => 0,
                'evidence_balance' => 407099088.129999,
                'age' => 1,
                ]);
                $idactivitySource75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity65,
                'source_id' =>$idPlan11,
                'value' => 64439905.1000003,
                'goal' => 0,
                'evidence_balance' => 64439905.1000003,
                'age' => 1,
                ]);
                $idactivitySource76 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia1,
                  'activity_source_id' =>$idactivitySource1,
                  'value' => 128276673.18,
                  ]);
                  $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia2,
                  'activity_source_id' =>$idactivitySource2,
                  'value' => 49979807.68,
                  ]);
                  $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia3,
                  'activity_source_id' =>$idactivitySource3,
                  'value' => 1152128944.43,
                  ]);
                  $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia4,
                  'activity_source_id' =>$idactivitySource4,
                  'value' => 1831765106.71,
                  ]);
                  $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia5,
                  'activity_source_id' =>$idactivitySource5,
                  'value' => 226132620.47,
                  ]);
                  $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia6,
                  'activity_source_id' =>$idactivitySource6,
                  'value' => 58919740,
                  ]);
                  $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia7,
                  'activity_source_id' =>$idactivitySource7,
                  'value' => 50000000,
                  ]);
                  $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia8,
                  'activity_source_id' =>$idactivitySource8,
                  'value' => 209975991.28,
                  ]);
                  $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia10,
                  'activity_source_id' =>$idactivitySource10,
                  'value' => 100000000,
                  ]);
                  $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia11,
                  'activity_source_id' =>$idactivitySource11,
                  'value' => 85533841.07,
                  ]);
                  $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia12,
                  'activity_source_id' =>$idactivitySource12,
                  'value' => 99601038.91,
                  ]);
                  $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia14,
                  'activity_source_id' =>$idactivitySource14,
                  'value' => 104130036.4,
                  ]);
                  $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia15,
                  'activity_source_id' =>$idactivitySource15,
                  'value' => 115540146.5,
                  ]);
                  $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia16,
                  'activity_source_id' =>$idactivitySource16,
                  'value' => 2108474136.97,
                  ]);
                  $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia17,
                  'activity_source_id' =>$idactivitySource17,
                  'value' => 2884583783.02,
                  ]);
                  $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia18,
                  'activity_source_id' =>$idactivitySource18,
                  'value' => 468738067.37,
                  ]);
                  $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia20,
                  'activity_source_id' =>$idactivitySource20,
                  'value' => 373347398.84,
                  ]);
                  $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia21,
                  'activity_source_id' =>$idactivitySource21,
                  'value' => 277723766.91,
                  ]);
                  $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia22,
                  'activity_source_id' =>$idactivitySource22,
                  'value' => 104315600,
                  ]);
                  $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia23,
                  'activity_source_id' =>$idactivitySource23,
                  'value' => 1579853079.08,
                  ]);
                  $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia24,
                  'activity_source_id' =>$idactivitySource24,
                  'value' => 54850675.62,
                  ]);
                  $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia26,
                  'activity_source_id' =>$idactivitySource26,
                  'value' => 585990299.34,
                  ]);
                  $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia27,
                  'activity_source_id' =>$idactivitySource27,
                  'value' => 439575891.54,
                  ]);
                  $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia28,
                  'activity_source_id' =>$idactivitySource28,
                  'value' => 284193259.5,
                  ]);
                  $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia29,
                  'activity_source_id' =>$idactivitySource29,
                  'value' => 249551610.02,
                  ]);
                  $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia30,
                  'activity_source_id' =>$idactivitySource30,
                  'value' => 913245438.86,
                  ]);
                  $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia31,
                  'activity_source_id' =>$idactivitySource31,
                  'value' => 1000905521.63,
                  ]);
                  $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia32,
                  'activity_source_id' =>$idactivitySource32,
                  'value' => 58534583.7900009,
                  ]);
                  $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia33,
                  'activity_source_id' =>$idactivitySource33,
                  'value' => 28688009.86,
                  ]);
                  $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia34,
                  'activity_source_id' =>$idactivitySource34,
                  'value' => 739486997.3,
                  ]);
                  $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia35,
                  'activity_source_id' =>$idactivitySource35,
                  'value' => 60204640,
                  ]);
                  $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia36,
                  'activity_source_id' =>$idactivitySource36,
                  'value' => 140311729.25,
                  ]);
                  $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia37,
                  'activity_source_id' =>$idactivitySource37,
                  'value' => 71155610.36,
                  ]);
                  $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia38,
                  'activity_source_id' =>$idactivitySource38,
                  'value' => 623288668.93,
                  ]);
                  $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia39,
                  'activity_source_id' =>$idactivitySource39,
                  'value' => 1330385425.29,
                  ]);
                  $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia40,
                  'activity_source_id' =>$idactivitySource40,
                  'value' => 20080000,
                  ]);
                  $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia41,
                  'activity_source_id' =>$idactivitySource41,
                  'value' => 112799400,
                  ]);
                  $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia42,
                  'activity_source_id' =>$idactivitySource42,
                  'value' => 200000000,
                  ]);
                  $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia43,
                  'activity_source_id' =>$idactivitySource43,
                  'value' => 17000000,
                  ]);
                  $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia44,
                  'activity_source_id' =>$idactivitySource44,
                  'value' => 10000000,
                  ]);
                  $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia45,
                  'activity_source_id' =>$idactivitySource45,
                  'value' => 28948995.14,
                  ]);
                  $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia46,
                  'activity_source_id' =>$idactivitySource46,
                  'value' => 577063046.5,
                  ]);
                  $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia48,
                  'activity_source_id' =>$idactivitySource48,
                  'value' => 156549083.35,
                  ]);
                  $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia49,
                  'activity_source_id' =>$idactivitySource49,
                  'value' => 519638126.5,
                  ]);
                  $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia50,
                  'activity_source_id' =>$idactivitySource50,
                  'value' => 49999999.18,
                  ]);
                  $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia52,
                  'activity_source_id' =>$idactivitySource52,
                  'value' => 70853178.42,
                  ]);
                  $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia53,
                  'activity_source_id' =>$idactivitySource53,
                  'value' => 30000000,
                  ]);
                  $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia55,
                  'activity_source_id' =>$idactivitySource55,
                  'value' => 64897183.52,
                  ]);
                  $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia56,
                  'activity_source_id' =>$idactivitySource56,
                  'value' => 66117381,
                  ]);
                  $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia57,
                  'activity_source_id' =>$idactivitySource57,
                  'value' => 75000000,
                  ]);
                  $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia58,
                  'activity_source_id' =>$idactivitySource58,
                  'value' => 579903449.31,
                  ]);
                  $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia59,
                  'activity_source_id' =>$idactivitySource59,
                  'value' => 96999674.97,
                  ]);
                  $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia60,
                  'activity_source_id' =>$idactivitySource60,
                  'value' => 79455819.05,
                  ]);
                  $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia61,
                  'activity_source_id' =>$idactivitySource61,
                  'value' => 64072410.6,
                  ]);
                  $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia62,
                  'activity_source_id' =>$idactivitySource62,
                  'value' => 701623668.69,
                  ]);
                  $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia63,
                  'activity_source_id' =>$idactivitySource63,
                  'value' => 230746411.95,
                  ]);
                  $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia64,
                  'activity_source_id' =>$idactivitySource64,
                  'value' => 129234880,
                  ]);
                  $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia65,
                  'activity_source_id' =>$idactivitySource65,
                  'value' => 156600094.07,
                  ]);
                  $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia66,
                  'activity_source_id' =>$idactivitySource66,
                  'value' => 437087014.53,
                  ]);
                  $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia67,
                  'activity_source_id' =>$idactivitySource67,
                  'value' => 174779005.29,
                  ]);
                  $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia68,
                  'activity_source_id' =>$idactivitySource68,
                  'value' => 20000000,
                  ]);
                  $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia69,
                  'activity_source_id' =>$idactivitySource69,
                  'value' => 55231196.61,
                  ]);
                  $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia70,
                  'activity_source_id' =>$idactivitySource70,
                  'value' => 40748203.44,
                  ]);
                  $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia71,
                  'activity_source_id' =>$idactivitySource71,
                  'value' => 140450660.4,
                  ]);
                  $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia72,
                  'activity_source_id' =>$idactivitySource72,
                  'value' => 54499999.92,
                  ]);
                  $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia73,
                  'activity_source_id' =>$idactivitySource73,
                  'value' => 150905350.09,
                  ]);
                  $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia74,
                  'activity_source_id' =>$idactivitySource74,
                  'value' => 12704313.8,
                  ]);
                  $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia32,
                    'activity_source_id' =>$idactivitySource75,
                    'value' => 366013485.709999,
                    ]);
                    $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia65,
                    'activity_source_id' =>$idactivitySource76,
                    'value' => 56959905.6300003,
                    ]);
                    $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity1,
                      'source_id' =>$idPlan16,
                      'value' => 166048951,
                      'goal' => 0,
                      'evidence_balance' => 166048951,
                      'age' => 2,
                      ]);
                      $idactivitySource77 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity2,
                      'source_id' =>$idPlan16,
                      'value' => 900000000,
                      'goal' => 0,
                      'evidence_balance' => 900000000,
                      'age' => 2,
                      ]);
                      $idactivitySource78 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity3,
                      'source_id' =>$idPlan16,
                      'value' => 1096195134.2,
                      'goal' => 0,
                      'evidence_balance' => 1096195134.2,
                      'age' => 2,
                      ]);
                      $idactivitySource79 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity4,
                      'source_id' =>$idPlan16,
                      'value' => 9182980168.51,
                      'goal' => 0,
                      'evidence_balance' => 9182980168.51,
                      'age' => 2,
                      ]);
                      $idactivitySource80 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity5,
                      'source_id' =>$idPlan16,
                      'value' => 106585828.23,
                      'goal' => 0,
                      'evidence_balance' => 106585828.23,
                      'age' => 2,
                      ]);
                      $idactivitySource81 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' =>$idPlan16,
                      'value' => 26989843.77,
                      'goal' => 0,
                      'evidence_balance' => 26989843.77,
                      'age' => 2,
                      ]);
                      $idactivitySource82 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity7,
                      'source_id' =>$idPlan16,
                      'value' => 150000000,
                      'goal' => 0,
                      'evidence_balance' => 150000000,
                      'age' => 2,
                      ]);
                      $idactivitySource83 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity8,
                      'source_id' =>$idPlan16,
                      'value' => 550000000,
                      'goal' => 0,
                      'evidence_balance' => 550000000,
                      'age' => 2,
                      ]);
                      $idactivitySource84 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity9,
                      'source_id' =>$idPlan16,
                      'value' => 145180000,
                      'goal' => 0,
                      'evidence_balance' => 145180000,
                      'age' => 2,
                      ]);
                      $idactivitySource85 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity10,
                      'source_id' =>$idPlan16,
                      'value' => 138200000,
                      'goal' => 0,
                      'evidence_balance' => 138200000,
                      'age' => 2,
                      ]);
                      $idactivitySource86 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity11,
                      'source_id' =>$idPlan16,
                      'value' => 129520000,
                      'goal' => 0,
                      'evidence_balance' => 129520000,
                      'age' => 2,
                      ]);
                      $idactivitySource87 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity12,
                      'source_id' =>$idPlan16,
                      'value' => 100168690.33,
                      'goal' => 0,
                      'evidence_balance' => 100168690.33,
                      'age' => 2,
                      ]);
                      $idactivitySource88 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity13,
                      'source_id' =>$idPlan16,
                      'value' => 111334531.11,
                      'goal' => 0,
                      'evidence_balance' => 111334531.11,
                      'age' => 2,
                      ]);
                      $idactivitySource89 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity14,
                      'source_id' =>$idPlan16,
                      'value' => 213517933,
                      'goal' => 0,
                      'evidence_balance' => 213517933,
                      'age' => 2,
                      ]);
                      $idactivitySource90 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity15,
                      'source_id' =>$idPlan16,
                      'value' => 229909205.56,
                      'goal' => 0,
                      'evidence_balance' => 229909205.56,
                      'age' => 2,
                      ]);
                      $idactivitySource91 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity16,
                      'source_id' =>$idPlan16,
                      'value' => 2538817179.32,
                      'goal' => 0,
                      'evidence_balance' => 2538817179.32,
                      'age' => 2,
                      ]);
                      $idactivitySource92 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity17,
                      'source_id' =>$idPlan16,
                      'value' => 3041844254.44,
                      'goal' => 0,
                      'evidence_balance' => 3041844254.44,
                      'age' => 2,
                      ]);
                      $idactivitySource93 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity18,
                      'source_id' =>$idPlan16,
                      'value' => 184003178.66,
                      'goal' => 0,
                      'evidence_balance' => 184003178.66,
                      'age' => 2,
                      ]);
                      $idactivitySource94 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity19,
                      'source_id' =>$idPlan16,
                      'value' => 322430217.22,
                      'goal' => 0,
                      'evidence_balance' => 322430217.22,
                      'age' => 2,
                      ]);
                      $idactivitySource95 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity20,
                      'source_id' =>$idPlan16,
                      'value' => 30521600,
                      'goal' => 0,
                      'evidence_balance' => 30521600,
                      'age' => 2,
                      ]);
                      $idactivitySource96 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity21,
                      'source_id' =>$idPlan16,
                      'value' => 1515134346.33,
                      'goal' => 0,
                      'evidence_balance' => 1515134346.33,
                      'age' => 2,
                      ]);
                      $idactivitySource97 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity22,
                      'source_id' =>$idPlan16,
                      'value' => 113895936.32,
                      'goal' => 0,
                      'evidence_balance' => 113895936.32,
                      'age' => 2,
                      ]);
                      $idactivitySource98 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity23,
                      'source_id' =>$idPlan16,
                      'value' => 4673221291.06,
                      'goal' => 0,
                      'evidence_balance' => 4673221291.06,
                      'age' => 2,
                      ]);
                      $idactivitySource99 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity25,
                      'source_id' =>$idPlan16,
                      'value' => 56183712.22,
                      'goal' => 0,
                      'evidence_balance' => 56183712.22,
                      'age' => 2,
                      ]);
                      $idactivitySource101 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity26,
                      'source_id' =>$idPlan16,
                      'value' => 379999410,
                      'goal' => 0,
                      'evidence_balance' => 379999410,
                      'age' => 2,
                      ]);
                      $idactivitySource102 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity27,
                      'source_id' =>$idPlan16,
                      'value' => 251398168.52,
                      'goal' => 0,
                      'evidence_balance' => 251398168.52,
                      'age' => 2,
                      ]);
                      $idactivitySource103 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity28,
                      'source_id' =>$idPlan16,
                      'value' => 279626226.199997,
                      'goal' => 0,
                      'evidence_balance' => 279626226.199997,
                      'age' => 2,
                      ]);
                      $idactivitySource104 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity29,
                      'source_id' =>$idPlan21,
                      'value' => 634754840.97,
                      'goal' => 0,
                      'evidence_balance' => 634754840.97,
                      'age' => 2,
                      ]);
                      $idactivitySource105 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity30,
                      'source_id' =>$idPlan21,
                      'value' => 1051391600.81,
                      'goal' => 0,
                      'evidence_balance' => 1051391600.81,
                      'age' => 2,
                      ]);
                      $idactivitySource106 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity31,
                      'source_id' =>$idPlan21,
                      'value' => 802734658.08,
                      'goal' => 0,
                      'evidence_balance' => 802734658.08,
                      'age' => 2,
                      ]);
                      $idactivitySource107 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity32,
                      'source_id' =>$idPlan21,
                      'value' => 129667308.82,
                      'goal' => 0,
                      'evidence_balance' => 129667308.82,
                      'age' => 2,
                      ]);
                      $idactivitySource108 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity33,
                      'source_id' =>$idPlan21,
                      'value' => 72508802.36,
                      'goal' => 0,
                      'evidence_balance' => 72508802.36,
                      'age' => 2,
                      ]);
                      $idactivitySource109 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity34,
                      'source_id' =>$idPlan21,
                      'value' => 1060987552,
                      'goal' => 0,
                      'evidence_balance' => 1060987552,
                      'age' => 2,
                      ]);
                      $idactivitySource110 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity35,
                      'source_id' =>$idPlan21,
                      'value' => 339514228,
                      'goal' => 0,
                      'evidence_balance' => 339514228,
                      'age' => 2,
                      ]);
                      $idactivitySource111 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity36,
                      'source_id' =>$idPlan21,
                      'value' => 300000000,
                      'goal' => 0,
                      'evidence_balance' => 300000000,
                      'age' => 2,
                      ]);
                      $idactivitySource112 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity37,
                      'source_id' =>$idPlan21,
                      'value' => 60596624.34,
                      'goal' => 0,
                      'evidence_balance' => 60596624.34,
                      'age' => 2,
                      ]);
                      $idactivitySource113 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity38,
                      'source_id' =>$idPlan21,
                      'value' => 783702126.78,
                      'goal' => 0,
                      'evidence_balance' => 783702126.78,
                      'age' => 2,
                      ]);
                      $idactivitySource114 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity39,
                      'source_id' =>$idPlan21,
                      'value' => 110379777.47,
                      'goal' => 0,
                      'evidence_balance' => 110379777.47,
                      'age' => 2,
                      ]);
                      $idactivitySource115 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity40,
                      'source_id' =>$idPlan21,
                      'value' => 24851992.96,
                      'goal' => 0,
                      'evidence_balance' => 24851992.96,
                      'age' => 2,
                      ]);
                      $idactivitySource116 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity41,
                      'source_id' =>$idPlan21,
                      'value' => 24851992.96,
                      'goal' => 0,
                      'evidence_balance' => 24851992.96,
                      'age' => 2,
                      ]);
                      $idactivitySource117 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity42,
                      'source_id' =>$idPlan21,
                      'value' => 493908031.27,
                      'goal' => 0,
                      'evidence_balance' => 493908031.27,
                      'age' => 2,
                      ]);
                      $idactivitySource118 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity43,
                      'source_id' =>$idPlan21,
                      'value' => 57539445.07,
                      'goal' => 0,
                      'evidence_balance' => 57539445.07,
                      'age' => 2,
                      ]);
                      $idactivitySource119 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity44,
                      'source_id' =>$idPlan21,
                      'value' => 102464280,
                      'goal' => 0,
                      'evidence_balance' => 102464280,
                      'age' => 2,
                      ]);
                      $idactivitySource120 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity45,
                      'source_id' =>$idPlan21,
                      'value' => 85200554.93,
                      'goal' => 0,
                      'evidence_balance' => 85200554.93,
                      'age' => 2,
                      ]);
                      $idactivitySource121 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity46,
                      'source_id' =>$idPlan21,
                      'value' => 1627151769.23,
                      'goal' => 0,
                      'evidence_balance' => 1627151769.23,
                      'age' => 2,
                      ]);
                      $idactivitySource122 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity47,
                      'source_id' =>$idPlan21,
                      'value' => 531300800,
                      'goal' => 0,
                      'evidence_balance' => 531300800,
                      'age' => 2,
                      ]);
                      $idactivitySource123 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity48,
                      'source_id' =>$idPlan21,
                      'value' => 193593200,
                      'goal' => 0,
                      'evidence_balance' => 193593200,
                      'age' => 2,
                      ]);
                      $idactivitySource124 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity49,
                      'source_id' =>$idPlan21,
                      'value' => 230463569.109997,
                      'goal' => 0,
                      'evidence_balance' => 230463569.109997,
                      'age' => 2,
                      ]);
                      $idactivitySource125 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity52,
                      'source_id' =>$idPlan25,
                      'value' => 41500000,
                      'goal' => 0,
                      'evidence_balance' => 41500000,
                      'age' => 2,
                      ]);
                      $idactivitySource128 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity53,
                      'source_id' =>$idPlan25,
                      'value' => 177620482,
                      'goal' => 0,
                      'evidence_balance' => 177620482,
                      'age' => 2,
                      ]);
                      $idactivitySource129 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity55,
                      'source_id' =>$idPlan25,
                      'value' => 49800000,
                      'goal' => 0,
                      'evidence_balance' => 49800000,
                      'age' => 2,
                      ]);
                      $idactivitySource131 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity56,
                      'source_id' =>$idPlan25,
                      'value' => 91657800.65,
                      'goal' => 0,
                      'evidence_balance' => 91657800.65,
                      'age' => 2,
                      ]);
                      $idactivitySource132 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity57,
                      'source_id' =>$idPlan25,
                      'value' => 91657800.65,
                      'goal' => 0,
                      'evidence_balance' => 91657800.65,
                      'age' => 2,
                      ]);
                      $idactivitySource133 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity58,
                      'source_id' =>$idPlan25,
                      'value' => 191500000,
                      'goal' => 0,
                      'evidence_balance' => 191500000,
                      'age' => 2,
                      ]);
                      $idactivitySource134 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity59,
                      'source_id' =>$idPlan25,
                      'value' => 89443644.18,
                      'goal' => 0,
                      'evidence_balance' => 89443644.18,
                      'age' => 2,
                      ]);
                      $idactivitySource135 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity60,
                      'source_id' =>$idPlan25,
                      'value' => 133787016,
                      'goal' => 0,
                      'evidence_balance' => 133787016,
                      'age' => 2,
                      ]);
                      $idactivitySource136 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity61,
                      'source_id' =>$idPlan25,
                      'value' => 64005010,
                      'goal' => 0,
                      'evidence_balance' => 64005010,
                      'age' => 2,
                      ]);
                      $idactivitySource137 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity62,
                      'source_id' =>$idPlan25,
                      'value' => 403654207.07,
                      'goal' => 0,
                      'evidence_balance' => 403654207.07,
                      'age' => 2,
                      ]);
                      $idactivitySource138 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity63,
                      'source_id' =>$idPlan25,
                      'value' => 229695600,
                      'goal' => 0,
                      'evidence_balance' => 229695600,
                      'age' => 2,
                      ]);
                      $idactivitySource139 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity65,
                      'source_id' =>$idPlan25,
                      'value' => 481366441.55,
                      'goal' => 0,
                      'evidence_balance' => 481366441.55,
                      'age' => 2,
                      ]);
                      $idactivitySource141 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity66,
                      'source_id' =>$idPlan25,
                      'value' => 491116160,
                      'goal' => 0,
                      'evidence_balance' => 491116160,
                      'age' => 2,
                      ]);
                      $idactivitySource142 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity67,
                      'source_id' =>$idPlan25,
                      'value' => 192562075,
                      'goal' => 0,
                      'evidence_balance' => 192562075,
                      'age' => 2,
                      ]);
                      $idactivitySource143 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity68,
                      'source_id' =>$idPlan25,
                      'value' => 18376083.88,
                      'goal' => 0,
                      'evidence_balance' => 18376083.88,
                      'age' => 2,
                      ]);
                      $idactivitySource144 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity69,
                      'source_id' =>$idPlan25,
                      'value' => 681762781,
                      'goal' => 0,
                      'evidence_balance' => 681762781,
                      'age' => 2,
                      ]);
                      $idactivitySource145 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity70,
                      'source_id' =>$idPlan25,
                      'value' => 40504000,
                      'goal' => 0,
                      'evidence_balance' => 40504000,
                      'age' => 2,
                      ]);
                      $idactivitySource146 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity71,
                      'source_id' =>$idPlan25,
                      'value' => 319904300.66,
                      'goal' => 0,
                      'evidence_balance' => 319904300.66,
                      'age' => 2,
                      ]);
                      $idactivitySource147 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity73,
                      'source_id' =>$idPlan25,
                      'value' => 186024833.82,
                      'goal' => 0,
                      'evidence_balance' => 186024833.82,
                      'age' => 2,
                      ]);
                      $idactivitySource149 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity74,
                      'source_id' =>$idPlan25,
                      'value' => 11746720,
                      'goal' => 0,
                      'evidence_balance' => 11746720,
                      'age' => 2,
                      ]);
                      $idactivitySource150 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity28,
                        'source_id' =>$idPlan28,
                        'value' => 471743724.840003,
                        'goal' => 0,
                        'evidence_balance' => 471743724.840003,
                        'age' => 2,
                        ]);
                        $idactivitySource151 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity49,
                        'source_id' =>$idPlan25,
                        'value' => 237333629.790003,
                        'goal' => 0,
                        'evidence_balance' => 237333629.790003,
                        'age' => 2,
                        ]);
                        $idactivitySource152 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia75,
                          'activity_source_id' =>$idactivitySource77,
                          'value' => 163036951,
                          ]);
                          $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia76,
                          'activity_source_id' =>$idactivitySource78,
                          'value' => 576732148.64,
                          ]);
                          $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia77,
                          'activity_source_id' =>$idactivitySource79,
                          'value' => 922823761.35,
                          ]);
                          $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia78,
                          'activity_source_id' =>$idactivitySource80,
                          'value' => 3360772490.98,
                          ]);
                          $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia79,
                          'activity_source_id' =>$idactivitySource81,
                          'value' => 101861097.6,
                          ]);
                          $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia80,
                          'activity_source_id' =>$idactivitySource82,
                          'value' => 22790800,
                          ]);
                          $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia81,
                          'activity_source_id' =>$idactivitySource83,
                          'value' => 149999999.56,
                          ]);
                          $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia82,
                          'activity_source_id' =>$idactivitySource84,
                          'value' => 545080627.57,
                          ]);
                          $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia83,
                          'activity_source_id' =>$idactivitySource85,
                          'value' => 99584445.12,
                          ]);
                          $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia84,
                          'activity_source_id' =>$idactivitySource86,
                          'value' => 20080000,
                          ]);
                          $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia85,
                          'activity_source_id' =>$idactivitySource87,
                          'value' => 99099521.22,
                          ]);
                          $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia86,
                          'activity_source_id' =>$idactivitySource88,
                          'value' => 100168586.58,
                          ]);
                          $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia87,
                          'activity_source_id' =>$idactivitySource89,
                          'value' => 65638347.24,
                          ]);
                          $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia88,
                          'activity_source_id' =>$idactivitySource90,
                          'value' => 174622207.82,
                          ]);
                          $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia89,
                          'activity_source_id' =>$idactivitySource91,
                          'value' => 219909205.51,
                          ]);
                          $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia90,
                          'activity_source_id' =>$idactivitySource92,
                          'value' => 2488613078.08,
                          ]);
                          $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia91,
                          'activity_source_id' =>$idactivitySource93,
                          'value' => 2768730062.96,
                          ]);
                          $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia92,
                          'activity_source_id' =>$idactivitySource94,
                          'value' => 184001178,
                          ]);
                          $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia93,
                          'activity_source_id' =>$idactivitySource95,
                          'value' => 322429812.33,
                          ]);
                          $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia94,
                          'activity_source_id' =>$idactivitySource96,
                          'value' => 30521600,
                          ]);
                          $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia95,
                          'activity_source_id' =>$idactivitySource97,
                          'value' => 632133419.66,
                          ]);
                          $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia96,
                          'activity_source_id' =>$idactivitySource98,
                          'value' => 113452000,
                          ]);
                          $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia97,
                          'activity_source_id' =>$idactivitySource99,
                          'value' => 2823578948.17,
                          ]);
                          $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia99,
                          'activity_source_id' =>$idactivitySource101,
                          'value' => 55265504.22,
                          ]);
                          $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia100,
                          'activity_source_id' =>$idactivitySource102,
                          'value' => 340892954.53,
                          ]);
                          $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia101,
                          'activity_source_id' =>$idactivitySource103,
                          'value' => 251341820.52,
                          ]);
                          $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia102,
                          'activity_source_id' =>$idactivitySource104,
                          'value' => 279626226.199997,
                          ]);
                          $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia103,
                          'activity_source_id' =>$idactivitySource105,
                          'value' => 618536132.59,
                          ]);
                          $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia104,
                          'activity_source_id' =>$idactivitySource106,
                          'value' => 1016417267.08,
                          ]);
                          $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia105,
                          'activity_source_id' =>$idactivitySource107,
                          'value' => 530632122.29,
                          ]);
                          $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia106,
                          'activity_source_id' =>$idactivitySource108,
                          'value' => 127256744.98,
                          ]);
                          $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia107,
                          'activity_source_id' =>$idactivitySource109,
                          'value' => 51723088.08,
                          ]);
                          $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia108,
                          'activity_source_id' =>$idactivitySource110,
                          'value' => 1020661439.17,
                          ]);
                          $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia109,
                          'activity_source_id' =>$idactivitySource111,
                          'value' => 314303169.52,
                          ]);
                          $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia110,
                          'activity_source_id' =>$idactivitySource112,
                          'value' => 192165160.98,
                          ]);
                          $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia111,
                          'activity_source_id' =>$idactivitySource113,
                          'value' => 37617119,
                          ]);
                          $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia112,
                          'activity_source_id' =>$idactivitySource114,
                          'value' => 739728739.03,
                          ]);
                          $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia113,
                          'activity_source_id' =>$idactivitySource115,
                          'value' => 1662592860.99,
                          ]);
                          $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia114,
                          'activity_source_id' =>$idactivitySource116,
                          'value' => 17068000,
                          ]);
                          $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia115,
                          'activity_source_id' =>$idactivitySource117,
                          'value' => 24851933.59,
                          ]);
                          $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia116,
                          'activity_source_id' =>$idactivitySource118,
                          'value' => 493626624.94,
                          ]);
                          $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia117,
                          'activity_source_id' =>$idactivitySource119,
                          'value' => 57539445.07,
                          ]);
                          $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia118,
                          'activity_source_id' =>$idactivitySource120,
                          'value' => 97207280,
                          ]);
                          $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia119,
                          'activity_source_id' =>$idactivitySource121,
                          'value' => 70923170.77,
                          ]);
                          $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia120,
                          'activity_source_id' =>$idactivitySource122,
                          'value' => 1560290317.31,
                          ]);
                          $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia121,
                          'activity_source_id' =>$idactivitySource123,
                          'value' => 531048431.95,
                          ]);
                          $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia122,
                          'activity_source_id' =>$idactivitySource124,
                          'value' => 176914843.57,
                          ]);
                          $idevidenceFinancial124 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia123,
                          'activity_source_id' =>$idactivitySource125,
                          'value' => 230463569.109997,
                          ]);
                          $idevidenceFinancial125 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia126,
                          'activity_source_id' =>$idactivitySource128,
                          'value' => 41499999.98,
                          ]);
                          $idevidenceFinancial128 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia127,
                          'activity_source_id' =>$idactivitySource129,
                          'value' => 177620199.44,
                          ]);
                          $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia129,
                          'activity_source_id' =>$idactivitySource131,
                          'value' => 49800000,
                          ]);
                          $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia130,
                          'activity_source_id' =>$idactivitySource132,
                          'value' => 75803947.62,
                          ]);
                          $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia131,
                          'activity_source_id' =>$idactivitySource133,
                          'value' => 91657800.29,
                          ]);
                          $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia132,
                          'activity_source_id' =>$idactivitySource134,
                          'value' => 191497842.69,
                          ]);
                          $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia133,
                          'activity_source_id' =>$idactivitySource135,
                          'value' => 43069130.51,
                          ]);
                          $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia134,
                          'activity_source_id' =>$idactivitySource136,
                          'value' => 122592416,
                          ]);
                          $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia135,
                          'activity_source_id' =>$idactivitySource137,
                          'value' => 54342758,
                          ]);
                          $idevidenceFinancial137 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia136,
                          'activity_source_id' =>$idactivitySource138,
                          'value' => 294642413.97,
                          ]);
                          $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia137,
                          'activity_source_id' =>$idactivitySource139,
                          'value' => 172633492.66,
                          ]);
                          $idevidenceFinancial139 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia139,
                          'activity_source_id' =>$idactivitySource141,
                          'value' => 441283313.55,
                          ]);
                          $idevidenceFinancial141 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia140,
                          'activity_source_id' =>$idactivitySource142,
                          'value' => 466911871.66,
                          ]);
                          $idevidenceFinancial142 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia141,
                          'activity_source_id' =>$idactivitySource143,
                          'value' => 187589932.38,
                          ]);
                          $idevidenceFinancial143 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia142,
                          'activity_source_id' =>$idactivitySource144,
                          'value' => 14616887.88,
                          ]);
                          $idevidenceFinancial144 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia143,
                          'activity_source_id' =>$idactivitySource145,
                          'value' => 679772293.12,
                          ]);
                          $idevidenceFinancial145 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia144,
                          'activity_source_id' =>$idactivitySource146,
                          'value' => 34939200,
                          ]);
                          $idevidenceFinancial146 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia145,
                          'activity_source_id' =>$idactivitySource147,
                          'value' => 317076638,
                          ]);
                          $idevidenceFinancial147 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia147,
                          'activity_source_id' =>$idactivitySource149,
                          'value' => 185922967.07,
                          ]);
                          $idevidenceFinancial149 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia148,
                          'activity_source_id' =>$idactivitySource150,
                          'value' => 4596720,
                          ]);
                          $idevidenceFinancial150 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia102,
                            'activity_source_id' =>$idactivitySource151,
                            'value' => 441447487.060003,
                            ]);
                            $idevidenceFinancial151 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia123,
                            'activity_source_id' =>$idactivitySource152,
                            'value' => 98802678.5000032,
                            ]);
                            $idevidenceFinancial152 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity1,
                              'source_id' =>$idPlan32,
                              'value' => 537134803.43,
                              'goal' => 0,
                              'evidence_balance' => 537134803.43,
                              'age' => 3,
                              ]);
                              $idactivitySource153 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity2,
                              'source_id' =>$idPlan32,
                              'value' => 612724395.31,
                              'goal' => 0,
                              'evidence_balance' => 612724395.31,
                              'age' => 3,
                              ]);
                              $idactivitySource154 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity3,
                              'source_id' =>$idPlan32,
                              'value' => 925890134,
                              'goal' => 0,
                              'evidence_balance' => 925890134,
                              'age' => 3,
                              ]);
                              $idactivitySource155 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity4,
                              'source_id' =>$idPlan32,
                              'value' => 17324814169,
                              'goal' => 0,
                              'evidence_balance' => 17324814169,
                              'age' => 3,
                              ]);
                              $idactivitySource156 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity5,
                              'source_id' =>$idPlan32,
                              'value' => 298366138.33,
                              'goal' => 0,
                              'evidence_balance' => 298366138.33,
                              'age' => 3,
                              ]);
                              $idactivitySource157 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity6,
                              'source_id' =>$idPlan32,
                              'value' => 529740900.13,
                              'goal' => 0,
                              'evidence_balance' => 529740900.13,
                              'age' => 3,
                              ]);
                              $idactivitySource158 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity7,
                              'source_id' =>$idPlan32,
                              'value' => 281868208.48,
                              'goal' => 0,
                              'evidence_balance' => 281868208.48,
                              'age' => 3,
                              ]);
                              $idactivitySource159 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity8,
                              'source_id' =>$idPlan32,
                              'value' => 286131790.92,
                              'goal' => 0,
                              'evidence_balance' => 286131790.92,
                              'age' => 3,
                              ]);
                              $idactivitySource160 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity9,
                              'source_id' =>$idPlan32,
                              'value' => 145180000,
                              'goal' => 0,
                              'evidence_balance' => 145180000,
                              'age' => 3,
                              ]);
                              $idactivitySource161 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity10,
                              'source_id' =>$idPlan32,
                              'value' => 175000000,
                              'goal' => 0,
                              'evidence_balance' => 175000000,
                              'age' => 3,
                              ]);
                              $idactivitySource162 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity11,
                              'source_id' =>$idPlan32,
                              'value' => 100000000,
                              'goal' => 0,
                              'evidence_balance' => 100000000,
                              'age' => 3,
                              ]);
                              $idactivitySource163 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity12,
                              'source_id' =>$idPlan32,
                              'value' => 112634181.98,
                              'goal' => 0,
                              'evidence_balance' => 112634181.98,
                              'age' => 3,
                              ]);
                              $idactivitySource164 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity13,
                              'source_id' =>$idPlan32,
                              'value' => 87732954.45,
                              'goal' => 0,
                              'evidence_balance' => 87732954.45,
                              'age' => 3,
                              ]);
                              $idactivitySource165 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity14,
                              'source_id' =>$idPlan32,
                              'value' => 147267045.55,
                              'goal' => 0,
                              'evidence_balance' => 147267045.55,
                              'age' => 3,
                              ]);
                              $idactivitySource166 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity15,
                              'source_id' =>$idPlan32,
                              'value' => 55627731,
                              'goal' => 0,
                              'evidence_balance' => 55627731,
                              'age' => 3,
                              ]);
                              $idactivitySource167 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity16,
                              'source_id' =>$idPlan32,
                              'value' => 1738763058.69,
                              'goal' => 0,
                              'evidence_balance' => 1738763058.69,
                              'age' => 3,
                              ]);
                              $idactivitySource168 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity17,
                              'source_id' =>$idPlan32,
                              'value' => 2346151102.83,
                              'goal' => 0,
                              'evidence_balance' => 2346151102.83,
                              'age' => 3,
                              ]);
                              $idactivitySource169 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity18,
                              'source_id' =>$idPlan32,
                              'value' => 1066512243.76,
                              'goal' => 0,
                              'evidence_balance' => 1066512243.76,
                              'age' => 3,
                              ]);
                              $idactivitySource170 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity19,
                              'source_id' =>$idPlan32,
                              'value' => 240729167.41,
                              'goal' => 0,
                              'evidence_balance' => 240729167.41,
                              'age' => 3,
                              ]);
                              $idactivitySource171 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity20,
                              'source_id' =>$idPlan32,
                              'value' => 133233805.03,
                              'goal' => 0,
                              'evidence_balance' => 133233805.03,
                              'age' => 3,
                              ]);
                              $idactivitySource172 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity21,
                              'source_id' =>$idPlan32,
                              'value' => 904532144.700005,
                              'goal' => 0,
                              'evidence_balance' => 904532144.700005,
                              'age' => 3,
                              ]);
                              $idactivitySource173 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity22,
                              'source_id' =>$idPlan41,
                              'value' => 147495259.02,
                              'goal' => 0,
                              'evidence_balance' => 147495259.02,
                              'age' => 3,
                              ]);
                              $idactivitySource174 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity23,
                              'source_id' =>$idPlan41,
                              'value' => 4557311341.52,
                              'goal' => 0,
                              'evidence_balance' => 4557311341.52,
                              'age' => 3,
                              ]);
                              $idactivitySource175 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity24,
                              'source_id' =>$idPlan41,
                              'value' => 76855000,
                              'goal' => 0,
                              'evidence_balance' => 76855000,
                              'age' => 3,
                              ]);
                              $idactivitySource176 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity25,
                              'source_id' =>$idPlan41,
                              'value' => 48000000,
                              'goal' => 0,
                              'evidence_balance' => 48000000,
                              'age' => 3,
                              ]);
                              $idactivitySource177 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity26,
                              'source_id' =>$idPlan41,
                              'value' => 156865818.02,
                              'goal' => 0,
                              'evidence_balance' => 156865818.02,
                              'age' => 3,
                              ]);
                              $idactivitySource178 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity27,
                              'source_id' =>$idPlan41,
                              'value' => 307018000,
                              'goal' => 0,
                              'evidence_balance' => 307018000,
                              'age' => 3,
                              ]);
                              $idactivitySource179 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity28,
                              'source_id' =>$idPlan41,
                              'value' => 250000000,
                              'goal' => 0,
                              'evidence_balance' => 250000000,
                              'age' => 3,
                              ]);
                              $idactivitySource180 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity29,
                              'source_id' =>$idPlan41,
                              'value' => 775507794,
                              'goal' => 0,
                              'evidence_balance' => 775507794,
                              'age' => 3,
                              ]);
                              $idactivitySource181 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity30,
                              'source_id' =>$idPlan41,
                              'value' => 1059262516,
                              'goal' => 0,
                              'evidence_balance' => 1059262516,
                              'age' => 3,
                              ]);
                              $idactivitySource182 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity32,
                              'source_id' =>$idPlan41,
                              'value' => 200000000,
                              'goal' => 0,
                              'evidence_balance' => 200000000,
                              'age' => 3,
                              ]);
                              $idactivitySource184 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity33,
                              'source_id' =>$idPlan41,
                              'value' => 80785714.28,
                              'goal' => 0,
                              'evidence_balance' => 80785714.28,
                              'age' => 3,
                              ]);
                              $idactivitySource185 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity34,
                              'source_id' =>$idPlan41,
                              'value' => 1487389651.71,
                              'goal' => 0,
                              'evidence_balance' => 1487389651.71,
                              'age' => 3,
                              ]);
                              $idactivitySource186 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity35,
                              'source_id' =>$idPlan41,
                              'value' => 117340866,
                              'goal' => 0,
                              'evidence_balance' => 117340866,
                              'age' => 3,
                              ]);
                              $idactivitySource187 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity36,
                              'source_id' =>$idPlan41,
                              'value' => 195217732,
                              'goal' => 0,
                              'evidence_balance' => 195217732,
                              'age' => 3,
                              ]);
                              $idactivitySource188 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity37,
                              'source_id' =>$idPlan41,
                              'value' => 108862152,
                              'goal' => 0,
                              'evidence_balance' => 108862152,
                              'age' => 3,
                              ]);
                              $idactivitySource189 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity38,
                              'source_id' =>$idPlan41,
                              'value' => 830871746.11,
                              'goal' => 0,
                              'evidence_balance' => 830871746.11,
                              'age' => 3,
                              ]);
                              $idactivitySource190 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity39,
                              'source_id' =>$idPlan41,
                              'value' => 142000000,
                              'goal' => 0,
                              'evidence_balance' => 142000000,
                              'age' => 3,
                              ]);
                              $idactivitySource191 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity40,
                              'source_id' =>$idPlan41,
                              'value' => 58600000,
                              'goal' => 0,
                              'evidence_balance' => 58600000,
                              'age' => 3,
                              ]);
                              $idactivitySource192 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity41,
                              'source_id' =>$idPlan41,
                              'value' => 80000000,
                              'goal' => 0,
                              'evidence_balance' => 80000000,
                              'age' => 3,
                              ]);
                              $idactivitySource193 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity42,
                              'source_id' =>$idPlan41,
                              'value' => 588877156.33,
                              'goal' => 0,
                              'evidence_balance' => 588877156.33,
                              'age' => 3,
                              ]);
                              $idactivitySource194 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity43,
                              'source_id' =>$idPlan41,
                              'value' => 100000000,
                              'goal' => 0,
                              'evidence_balance' => 100000000,
                              'age' => 3,
                              ]);
                              $idactivitySource195 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity44,
                              'source_id' =>$idPlan41,
                              'value' => 108000000,
                              'goal' => 0,
                              'evidence_balance' => 108000000,
                              'age' => 3,
                              ]);
                              $idactivitySource196 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity45,
                              'source_id' =>$idPlan41,
                              'value' => 100000000,
                              'goal' => 0,
                              'evidence_balance' => 100000000,
                              'age' => 3,
                              ]);
                              $idactivitySource197 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity46,
                              'source_id' =>$idPlan41,
                              'value' => 1036820787,
                              'goal' => 0,
                              'evidence_balance' => 1036820787,
                              'age' => 3,
                              ]);
                              $idactivitySource198 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity47,
                              'source_id' =>$idPlan41,
                              'value' => 900000000,
                              'goal' => 0,
                              'evidence_balance' => 900000000,
                              'age' => 3,
                              ]);
                              $idactivitySource199 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity48,
                              'source_id' =>$idPlan41,
                              'value' => 95576195,
                              'goal' => 0,
                              'evidence_balance' => 95576195,
                              'age' => 3,
                              ]);
                              $idactivitySource200 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity49,
                              'source_id' =>$idPlan41,
                              'value' => 624879272.17,
                              'goal' => 0,
                              'evidence_balance' => 624879272.17,
                              'age' => 3,
                              ]);
                              $idactivitySource201 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity51,
                              'source_id' =>$idPlan41,
                              'value' => 259657219,
                              'goal' => 0,
                              'evidence_balance' => 259657219,
                              'age' => 3,
                              ]);
                              $idactivitySource203 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity52,
                              'source_id' =>$idPlan41,
                              'value' => 100000000,
                              'goal' => 0,
                              'evidence_balance' => 100000000,
                              'age' => 3,
                              ]);
                              $idactivitySource204 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity53,
                              'source_id' =>$idPlan41,
                              'value' => 100000000,
                              'goal' => 0,
                              'evidence_balance' => 100000000,
                              'age' => 3,
                              ]);
                              $idactivitySource205 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity54,
                              'source_id' =>$idPlan41,
                              'value' => 400000000,
                              'goal' => 0,
                              'evidence_balance' => 400000000,
                              'age' => 3,
                              ]);
                              $idactivitySource206 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity55,
                              'source_id' =>$idPlan41,
                              'value' => 369149856.020004,
                              'goal' => 0,
                              'evidence_balance' => 369149856.020004,
                              'age' => 3,
                              ]);
                              $idactivitySource207 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity56,
                              'source_id' =>$idPlan44,
                              'value' => 122173506,
                              'goal' => 0,
                              'evidence_balance' => 122173506,
                              'age' => 3,
                              ]);
                              $idactivitySource208 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity57,
                              'source_id' =>$idPlan44,
                              'value' => 120000000,
                              'goal' => 0,
                              'evidence_balance' => 120000000,
                              'age' => 3,
                              ]);
                              $idactivitySource209 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity58,
                              'source_id' =>$idPlan44,
                              'value' => 140000000,
                              'goal' => 0,
                              'evidence_balance' => 140000000,
                              'age' => 3,
                              ]);
                              $idactivitySource210 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity59,
                              'source_id' =>$idPlan44,
                              'value' => 111110606.66,
                              'goal' => 0,
                              'evidence_balance' => 111110606.66,
                              'age' => 3,
                              ]);
                              $idactivitySource211 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity60,
                              'source_id' =>$idPlan44,
                              'value' => 171640000,
                              'goal' => 0,
                              'evidence_balance' => 171640000,
                              'age' => 3,
                              ]);
                              $idactivitySource212 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity61,
                              'source_id' =>$idPlan44,
                              'value' => 76288940,
                              'goal' => 0,
                              'evidence_balance' => 76288940,
                              'age' => 3,
                              ]);
                              $idactivitySource213 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity62,
                              'source_id' =>$idPlan44,
                              'value' => 441100600,
                              'goal' => 0,
                              'evidence_balance' => 441100600,
                              'age' => 3,
                              ]);
                              $idactivitySource214 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity63,
                              'source_id' =>$idPlan44,
                              'value' => 169603100,
                              'goal' => 0,
                              'evidence_balance' => 169603100,
                              'age' => 3,
                              ]);
                              $idactivitySource215 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity64,
                              'source_id' =>$idPlan44,
                              'value' => 117901900.33,
                              'goal' => 0,
                              'evidence_balance' => 117901900.33,
                              'age' => 3,
                              ]);
                              $idactivitySource216 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity65,
                              'source_id' =>$idPlan44,
                              'value' => 342643328,
                              'goal' => 0,
                              'evidence_balance' => 342643328,
                              'age' => 3,
                              ]);
                              $idactivitySource217 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity66,
                              'source_id' =>$idPlan44,
                              'value' => 463764520.01,
                              'goal' => 0,
                              'evidence_balance' => 463764520.01,
                              'age' => 3,
                              ]);
                              $idactivitySource218 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity67,
                              'source_id' =>$idPlan44,
                              'value' => 110104193,
                              'goal' => 0,
                              'evidence_balance' => 110104193,
                              'age' => 3,
                              ]);
                              $idactivitySource219 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity68,
                              'source_id' =>$idPlan44,
                              'value' => 30000000,
                              'goal' => 0,
                              'evidence_balance' => 30000000,
                              'age' => 3,
                              ]);
                              $idactivitySource220 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity69,
                              'source_id' =>$idPlan44,
                              'value' => 55750000,
                              'goal' => 0,
                              'evidence_balance' => 55750000,
                              'age' => 3,
                              ]);
                              $idactivitySource221 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity70,
                              'source_id' =>$idPlan44,
                              'value' => 17469600,
                              'goal' => 0,
                              'evidence_balance' => 17469600,
                              'age' => 3,
                              ]);
                              $idactivitySource222 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity71,
                              'source_id' =>$idPlan44,
                              'value' => 591284400,
                              'goal' => 0,
                              'evidence_balance' => 591284400,
                              'age' => 3,
                              ]);
                              $idactivitySource223 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity72,
                              'source_id' =>$idPlan44,
                              'value' => 58112000,
                              'goal' => 0,
                              'evidence_balance' => 58112000,
                              'age' => 3,
                              ]);
                              $idactivitySource224 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity73,
                              'source_id' =>$idPlan44,
                              'value' => 197888000,
                              'goal' => 0,
                              'evidence_balance' => 197888000,
                              'age' => 3,
                              ]);
                              $idactivitySource225 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity74,
                              'source_id' =>$idPlan44,
                              'value' => 15000000,
                              'goal' => 0,
                              'evidence_balance' => 15000000,
                              'age' => 3,
                              ]);
                              $idactivitySource226 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity21,
                                'source_id' =>$idPlan41,
                                'value' => 1775183550.11,
                                'goal' => 0,
                                'evidence_balance' => 1775183550.11,
                                'age' => 3,
                                ]);
                                $idactivitySource227 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity55,
                                'source_id' =>$idPlan44,
                                'value' => 130850143.979996,
                                'goal' => 0,
                                'evidence_balance' => 130850143.979996,
                                'age' => 3,
                                ]);
                                $idactivitySource228 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia149,
                                  'activity_source_id' =>$idactivitySource153,
                                  'value' => 536923303.05,
                                  ]);
                                  $idevidenceFinancial153 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia150,
                                  'activity_source_id' =>$idactivitySource154,
                                  'value' => 314617434.16,
                                  ]);
                                  $idevidenceFinancial154 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia151,
                                  'activity_source_id' =>$idactivitySource155,
                                  'value' => 922733556.2,
                                  ]);
                                  $idevidenceFinancial155 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia152,
                                  'activity_source_id' =>$idactivitySource156,
                                  'value' => 7669564992.43,
                                  ]);
                                  $idevidenceFinancial156 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia153,
                                  'activity_source_id' =>$idactivitySource157,
                                  'value' => 262224465.25,
                                  ]);
                                  $idevidenceFinancial157 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia154,
                                  'activity_source_id' =>$idactivitySource158,
                                  'value' => 529740698.9,
                                  ]);
                                  $idevidenceFinancial158 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia155,
                                  'activity_source_id' =>$idactivitySource159,
                                  'value' => 281868208.47,
                                  ]);
                                  $idevidenceFinancial159 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia156,
                                  'activity_source_id' =>$idactivitySource160,
                                  'value' => 285540076.96,
                                  ]);
                                  $idevidenceFinancial160 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia157,
                                  'activity_source_id' =>$idactivitySource161,
                                  'value' => 138553596.55,
                                  ]);
                                  $idevidenceFinancial161 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia158,
                                  'activity_source_id' =>$idactivitySource162,
                                  'value' => 174999997.15,
                                  ]);
                                  $idevidenceFinancial162 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia159,
                                  'activity_source_id' =>$idactivitySource163,
                                  'value' => 99898999.99,
                                  ]);
                                  $idevidenceFinancial163 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia160,
                                  'activity_source_id' =>$idactivitySource164,
                                  'value' => 107143613.18,
                                  ]);
                                  $idevidenceFinancial164 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia161,
                                  'activity_source_id' =>$idactivitySource165,
                                  'value' => 22732954.45,
                                  ]);
                                  $idevidenceFinancial165 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia162,
                                  'activity_source_id' =>$idactivitySource166,
                                  'value' => 114217093.26,
                                  ]);
                                  $idevidenceFinancial166 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia163,
                                  'activity_source_id' =>$idactivitySource167,
                                  'value' => 35967253.32,
                                  ]);
                                  $idevidenceFinancial167 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia164,
                                  'activity_source_id' =>$idactivitySource168,
                                  'value' => 1184181104.41,
                                  ]);
                                  $idevidenceFinancial168 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia165,
                                  'activity_source_id' =>$idactivitySource169,
                                  'value' => 1983172112.59,
                                  ]);
                                  $idevidenceFinancial169 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia166,
                                  'activity_source_id' =>$idactivitySource170,
                                  'value' => 455236520.93,
                                  ]);
                                  $idevidenceFinancial170 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia167,
                                  'activity_source_id' =>$idactivitySource171,
                                  'value' => 229634890.04,
                                  ]);
                                  $idevidenceFinancial171 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia168,
                                  'activity_source_id' =>$idactivitySource172,
                                  'value' => 77180318.4,
                                  ]);
                                  $idevidenceFinancial172 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia169,
                                  'activity_source_id' =>$idactivitySource173,
                                  'value' => 904532144.700005,
                                  ]);
                                  $idevidenceFinancial173 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia170,
                                  'activity_source_id' =>$idactivitySource174,
                                  'value' => 147151571.04,
                                  ]);
                                  $idevidenceFinancial174 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia171,
                                  'activity_source_id' =>$idactivitySource175,
                                  'value' => 3061874361.42,
                                  ]);
                                  $idevidenceFinancial175 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia172,
                                  'activity_source_id' =>$idactivitySource176,
                                  'value' => 3572861.51,
                                  ]);
                                  $idevidenceFinancial176 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia173,
                                  'activity_source_id' =>$idactivitySource177,
                                  'value' => 47142182.46,
                                  ]);
                                  $idevidenceFinancial177 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia174,
                                  'activity_source_id' =>$idactivitySource178,
                                  'value' => 137087018.02,
                                  ]);
                                  $idevidenceFinancial178 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia175,
                                  'activity_source_id' =>$idactivitySource179,
                                  'value' => 265814147.31,
                                  ]);
                                  $idevidenceFinancial179 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia176,
                                  'activity_source_id' =>$idactivitySource180,
                                  'value' => 222024305.64,
                                  ]);
                                  $idevidenceFinancial180 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia177,
                                  'activity_source_id' =>$idactivitySource181,
                                  'value' => 756058969.22,
                                  ]);
                                  $idevidenceFinancial181 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia178,
                                  'activity_source_id' =>$idactivitySource182,
                                  'value' => 986058986.78,
                                  ]);
                                  $idevidenceFinancial182 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia180,
                                  'activity_source_id' =>$idactivitySource184,
                                  'value' => 197990762.82,
                                  ]);
                                  $idevidenceFinancial184 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia181,
                                  'activity_source_id' =>$idactivitySource185,
                                  'value' => 80538779.82,
                                  ]);
                                  $idevidenceFinancial185 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia182,
                                  'activity_source_id' =>$idactivitySource186,
                                  'value' => 1285182679.11,
                                  ]);
                                  $idevidenceFinancial186 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia183,
                                  'activity_source_id' =>$idactivitySource187,
                                  'value' => 117340865.1,
                                  ]);
                                  $idevidenceFinancial187 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia184,
                                  'activity_source_id' =>$idactivitySource188,
                                  'value' => 195177600,
                                  ]);
                                  $idevidenceFinancial188 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia185,
                                  'activity_source_id' =>$idactivitySource189,
                                  'value' => 90157621.71,
                                  ]);
                                  $idevidenceFinancial189 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia186,
                                  'activity_source_id' =>$idactivitySource190,
                                  'value' => 634159229.72,
                                  ]);
                                  $idevidenceFinancial190 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia187,
                                  'activity_source_id' =>$idactivitySource191,
                                  'value' => 1774274293.41,
                                  ]);
                                  $idevidenceFinancial191 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia188,
                                  'activity_source_id' =>$idactivitySource192,
                                  'value' => 54944379.99,
                                  ]);
                                  $idevidenceFinancial192 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia189,
                                  'activity_source_id' =>$idactivitySource193,
                                  'value' => 79998720,
                                  ]);
                                  $idevidenceFinancial193 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia190,
                                  'activity_source_id' =>$idactivitySource194,
                                  'value' => 557161552.16,
                                  ]);
                                  $idevidenceFinancial194 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia191,
                                  'activity_source_id' =>$idactivitySource195,
                                  'value' => 99999999.15,
                                  ]);
                                  $idevidenceFinancial195 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia192,
                                  'activity_source_id' =>$idactivitySource196,
                                  'value' => 76055633.41,
                                  ]);
                                  $idevidenceFinancial196 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia193,
                                  'activity_source_id' =>$idactivitySource197,
                                  'value' => 85030360,
                                  ]);
                                  $idevidenceFinancial197 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia194,
                                  'activity_source_id' =>$idactivitySource198,
                                  'value' => 1017534878.8,
                                  ]);
                                  $idevidenceFinancial198 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia195,
                                  'activity_source_id' =>$idactivitySource199,
                                  'value' => 899443478.46,
                                  ]);
                                  $idevidenceFinancial199 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia196,
                                  'activity_source_id' =>$idactivitySource200,
                                  'value' => 88288667.68,
                                  ]);
                                  $idevidenceFinancial200 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia197,
                                  'activity_source_id' =>$idactivitySource201,
                                  'value' => 620399714,
                                  ]);
                                  $idevidenceFinancial201 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia199,
                                  'activity_source_id' =>$idactivitySource203,
                                  'value' => 259501578.83,
                                  ]);
                                  $idevidenceFinancial203 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia200,
                                  'activity_source_id' =>$idactivitySource204,
                                  'value' => 97889214.23,
                                  ]);
                                  $idevidenceFinancial204 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia201,
                                  'activity_source_id' =>$idactivitySource205,
                                  'value' => 100000000,
                                  ]);
                                  $idevidenceFinancial205 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia202,
                                  'activity_source_id' =>$idactivitySource206,
                                  'value' => 399999999.5,
                                  ]);
                                  $idevidenceFinancial206 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia203,
                                  'activity_source_id' =>$idactivitySource207,
                                  'value' => 369149856.020004,
                                  ]);
                                  $idevidenceFinancial207 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia204,
                                  'activity_source_id' =>$idactivitySource208,
                                  'value' => 122173506,
                                  ]);
                                  $idevidenceFinancial208 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia205,
                                  'activity_source_id' =>$idactivitySource209,
                                  'value' => 90707994.82,
                                  ]);
                                  $idevidenceFinancial209 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia206,
                                  'activity_source_id' =>$idactivitySource210,
                                  'value' => 105511959.92,
                                  ]);
                                  $idevidenceFinancial210 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia207,
                                  'activity_source_id' =>$idactivitySource211,
                                  'value' => 107644539,
                                  ]);
                                  $idevidenceFinancial211 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia208,
                                  'activity_source_id' =>$idactivitySource212,
                                  'value' => 129967751,
                                  ]);
                                  $idevidenceFinancial212 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia209,
                                  'activity_source_id' =>$idactivitySource213,
                                  'value' => 76288940,
                                  ]);
                                  $idevidenceFinancial213 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia210,
                                  'activity_source_id' =>$idactivitySource214,
                                  'value' => 383723593.26,
                                  ]);
                                  $idevidenceFinancial214 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia211,
                                  'activity_source_id' =>$idactivitySource215,
                                  'value' => 98791631.21,
                                  ]);
                                  $idevidenceFinancial215 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia212,
                                  'activity_source_id' =>$idactivitySource216,
                                  'value' => 112468080,
                                  ]);
                                  $idevidenceFinancial216 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia213,
                                  'activity_source_id' =>$idactivitySource217,
                                  'value' => 324085342.05,
                                  ]);
                                  $idevidenceFinancial217 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia214,
                                  'activity_source_id' =>$idactivitySource218,
                                  'value' => 461855060,
                                  ]);
                                  $idevidenceFinancial218 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia215,
                                  'activity_source_id' =>$idactivitySource219,
                                  'value' => 109351366.6,
                                  ]);
                                  $idevidenceFinancial219 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia216,
                                  'activity_source_id' =>$idactivitySource220,
                                  'value' => 29969400,
                                  ]);
                                  $idevidenceFinancial220 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia217,
                                  'activity_source_id' =>$idactivitySource221,
                                  'value' => 55589600,
                                  ]);
                                  $idevidenceFinancial221 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia218,
                                  'activity_source_id' =>$idactivitySource222,
                                  'value' => 17469600,
                                  ]);
                                  $idevidenceFinancial222 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia219,
                                  'activity_source_id' =>$idactivitySource223,
                                  'value' => 570353427.29,
                                  ]);
                                  $idevidenceFinancial223 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia220,
                                  'activity_source_id' =>$idactivitySource224,
                                  'value' => 42067573.39,
                                  ]);
                                  $idevidenceFinancial224 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia221,
                                  'activity_source_id' =>$idactivitySource225,
                                  'value' => 191307402.6,
                                  ]);
                                  $idevidenceFinancial225 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia222,
                                  'activity_source_id' =>$idactivitySource226,
                                  'value' => 8511561.54,
                                  ]);
                                  $idevidenceFinancial226 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia169,
                                    'activity_source_id' =>$idactivitySource227,
                                    'value' => 670325766.759995,
                                    ]);
                                    $idevidenceFinancial227 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia203,
                                    'activity_source_id' =>$idactivitySource228,
                                    'value' => 130850143.849996,
                                    ]);
                                    $idevidenceFinancial228 = DB::getPdo()->lastInsertId();
                                    
								 DB::table('activity_sources')->insert([
									'activity_id' => $idactivity1,
									'source_id' =>$idPlan48,
									'value' => 216068333.61,
									'goal' => 0,
									'evidence_balance' => 216068333.61,
									'age' => 4,
									]);
									$idactivitySource229 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity2,
									'source_id' =>$idPlan48,
									'value' => 477166497.97,
									'goal' => 0,
									'evidence_balance' => 477166497.97,
									'age' => 4,
									]);
									$idactivitySource230 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity3,
									'source_id' =>$idPlan48,
									'value' => 669704599,
									'goal' => 0,
									'evidence_balance' => 669704599,
									'age' => 4,
									]);
									$idactivitySource231 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity4,
									'source_id' =>$idPlan48,
									'value' => 19729016055,
									'goal' => 0,
									'evidence_balance' => 19729016055,
									'age' => 4,
									]);
									$idactivitySource232 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity5,
									'source_id' =>$idPlan48,
									'value' => 330750069,
									'goal' => 0,
									'evidence_balance' => 330750069,
									'age' => 4,
									]);
									$idactivitySource233 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity6,
									'source_id' =>$idPlan48,
									'value' => 87658507.6,
									'goal' => 0,
									'evidence_balance' => 87658507.6,
									'age' => 4,
									]);
									$idactivitySource234 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity7,
									'source_id' =>$idPlan48,
									'value' => 100850866,
									'goal' => 0,
									'evidence_balance' => 100850866,
									'age' => 4,
									]);
									$idactivitySource235 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity8,
									'source_id' =>$idPlan48,
									'value' => 315948795.08,
									'goal' => 0,
									'evidence_balance' => 315948795.08,
									'age' => 4,
									]);
									$idactivitySource236 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity9,
									'source_id' =>$idPlan48,
									'value' => 74013680,
									'goal' => 0,
									'evidence_balance' => 74013680,
									'age' => 4,
									]);
									$idactivitySource237 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity10,
									'source_id' =>$idPlan48,
									'value' => 20000000,
									'goal' => 0,
									'evidence_balance' => 20000000,
									'age' => 4,
									]);
									$idactivitySource238 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity11,
									'source_id' =>$idPlan48,
									'value' => 153719170.98,
									'goal' => 0,
									'evidence_balance' => 153719170.98,
									'age' => 4,
									]);
									$idactivitySource239 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity12,
									'source_id' =>$idPlan48,
									'value' => 187355508.24,
									'goal' => 0,
									'evidence_balance' => 187355508.24,
									'age' => 4,
									]);
									$idactivitySource240 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity13,
									'source_id' =>$idPlan48,
									'value' => 40563323.44,
									'goal' => 0,
									'evidence_balance' => 40563323.44,
									'age' => 4,
									]);
									$idactivitySource241 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity14,
									'source_id' =>$idPlan48,
									'value' => 105055325.92,
									'goal' => 0,
									'evidence_balance' => 105055325.92,
									'age' => 4,
									]);
									$idactivitySource242 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity15,
									'source_id' =>$idPlan48,
									'value' => 33723257.1,
									'goal' => 0,
									'evidence_balance' => 33723257.1,
									'age' => 4,
									]);
									$idactivitySource243 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity16,
									'source_id' =>$idPlan48,
									'value' => 2419446922.95,
									'goal' => 0,
									'evidence_balance' => 2419446922.95,
									'age' => 4,
									]);
									$idactivitySource244 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity17,
									'source_id' =>$idPlan48,
									'value' => 3136736072.03,
									'goal' => 0,
									'evidence_balance' => 3136736072.03,
									'age' => 4,
									]);
									$idactivitySource245 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity18,
									'source_id' =>$idPlan48,
									'value' => 1242094052.55,
									'goal' => 0,
									'evidence_balance' => 1242094052.55,
									'age' => 4,
									]);
									$idactivitySource246 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity19,
									'source_id' =>$idPlan48,
									'value' => 151337665.530003,
									'goal' => 0,
									'evidence_balance' => 151337665.530003,
									'age' => 4,
									]);
									$idactivitySource247 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity20,
									'source_id' =>$idPlan57,
									'value' => 223779430,
									'goal' => 0,
									'evidence_balance' => 223779430,
									'age' => 4,
									]);
									$idactivitySource248 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity21,
									'source_id' =>$idPlan57,
									'value' => 3638031165.35,
									'goal' => 0,
									'evidence_balance' => 3638031165.35,
									'age' => 4,
									]);
									$idactivitySource249 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity22,
									'source_id' =>$idPlan57,
									'value' => 143284265,
									'goal' => 0,
									'evidence_balance' => 143284265,
									'age' => 4,
									]);
									$idactivitySource250 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity23,
									'source_id' =>$idPlan57,
									'value' => 8275224643.09,
									'goal' => 0,
									'evidence_balance' => 8275224643.09,
									'age' => 4,
									]);
									$idactivitySource251 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity24,
									'source_id' =>$idPlan57,
									'value' => 100000056.48,
									'goal' => 0,
									'evidence_balance' => 100000056.48,
									'age' => 4,
									]);
									$idactivitySource252 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity25,
									'source_id' =>$idPlan57,
									'value' => 33085077,
									'goal' => 0,
									'evidence_balance' => 33085077,
									'age' => 4,
									]);
									$idactivitySource253 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity26,
									'source_id' =>$idPlan57,
									'value' => 211759172,
									'goal' => 0,
									'evidence_balance' => 211759172,
									'age' => 4,
									]);
									$idactivitySource254 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity27,
									'source_id' =>$idPlan57,
									'value' => 327846883.45,
									'goal' => 0,
									'evidence_balance' => 327846883.45,
									'age' => 4,
									]);
									$idactivitySource255 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity28,
									'source_id' =>$idPlan57,
									'value' => 196683121.5,
									'goal' => 0,
									'evidence_balance' => 196683121.5,
									'age' => 4,
									]);
									$idactivitySource256 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity29,
									'source_id' =>$idPlan57,
									'value' => 1266560408.81,
									'goal' => 0,
									'evidence_balance' => 1266560408.81,
									'age' => 4,
									]);
									$idactivitySource257 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity30,
									'source_id' =>$idPlan57,
									'value' => 1339681429,
									'goal' => 0,
									'evidence_balance' => 1339681429,
									'age' => 4,
									]);
									$idactivitySource258 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity32,
									'source_id' =>$idPlan57,
									'value' => 346870724,
									'goal' => 0,
									'evidence_balance' => 346870724,
									'age' => 4,
									]);
									$idactivitySource260 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity33,
									'source_id' =>$idPlan57,
									'value' => 107454525,
									'goal' => 0,
									'evidence_balance' => 107454525,
									'age' => 4,
									]);
									$idactivitySource261 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity34,
									'source_id' =>$idPlan57,
									'value' => 3227850982.03,
									'goal' => 0,
									'evidence_balance' => 3227850982.03,
									'age' => 4,
									]);
									$idactivitySource262 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity35,
									'source_id' =>$idPlan57,
									'value' => 135540534,
									'goal' => 0,
									'evidence_balance' => 135540534,
									'age' => 4,
									]);
									$idactivitySource263 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity36,
									'source_id' =>$idPlan57,
									'value' => 335261119.67,
									'goal' => 0,
									'evidence_balance' => 335261119.67,
									'age' => 4,
									]);
									$idactivitySource264 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity37,
									'source_id' =>$idPlan57,
									'value' => 87959346.29,
									'goal' => 0,
									'evidence_balance' => 87959346.29,
									'age' => 4,
									]);
									$idactivitySource265 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity38,
									'source_id' =>$idPlan57,
									'value' => 513516911.220005,
									'goal' => 0,
									'evidence_balance' => 513516911.220005,
									'age' => 4,
									]);
									$idactivitySource266 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity39,
									'source_id' =>$idPlan49,
									'value' => 353716880,
									'goal' => 0,
									'evidence_balance' => 353716880,
									'age' => 4,
									]);
									$idactivitySource267 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity40,
									'source_id' =>$idPlan49,
									'value' => 103672543,
									'goal' => 0,
									'evidence_balance' => 103672543,
									'age' => 4,
									]);
									$idactivitySource268 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity41,
									'source_id' =>$idPlan49,
									'value' => 88815317,
									'goal' => 0,
									'evidence_balance' => 88815317,
									'age' => 4,
									]);
									$idactivitySource269 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity42,
									'source_id' =>$idPlan49,
									'value' => 923229009,
									'goal' => 0,
									'evidence_balance' => 923229009,
									'age' => 4,
									]);
									$idactivitySource270 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity44,
									'source_id' =>$idPlan49,
									'value' => 1024473516.77,
									'goal' => 0,
									'evidence_balance' => 1024473516.77,
									'age' => 4,
									]);
									$idactivitySource272 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity45,
									'source_id' =>$idPlan49,
									'value' => 58065028,
									'goal' => 0,
									'evidence_balance' => 58065028,
									'age' => 4,
									]);
									$idactivitySource273 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity46,
									'source_id' =>$idPlan49,
									'value' => 99921211.8700051,
									'goal' => 0,
									'evidence_balance' => 99921211.8700051,
									'age' => 4,
									]);
									$idactivitySource274 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity47,
									'source_id' =>$idPlan59,
									'value' => 223703271.09,
									'goal' => 0,
									'evidence_balance' => 223703271.09,
									'age' => 4,
									]);
									$idactivitySource275 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity48,
									'source_id' =>$idPlan59,
									'value' => 125190407,
									'goal' => 0,
									'evidence_balance' => 125190407,
									'age' => 4,
									]);
									$idactivitySource276 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity49,
									'source_id' =>$idPlan59,
									'value' => 238100848,
									'goal' => 0,
									'evidence_balance' => 238100848,
									'age' => 4,
									]);
									$idactivitySource277 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity51,
									'source_id' =>$idPlan59,
									'value' => 134308321.92,
									'goal' => 0,
									'evidence_balance' => 134308321.92,
									'age' => 4,
									]);
									$idactivitySource279 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity52,
									'source_id' =>$idPlan59,
									'value' => 23400000,
									'goal' => 0,
									'evidence_balance' => 23400000,
									'age' => 4,
									]);
									$idactivitySource280 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity53,
									'source_id' =>$idPlan59,
									'value' => 5020000,
									'goal' => 0,
									'evidence_balance' => 5020000,
									'age' => 4,
									]);
									$idactivitySource281 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity55,
									'source_id' =>$idPlan59,
									'value' => 54783472.68,
									'goal' => 0,
									'evidence_balance' => 54783472.68,
									'age' => 4,
									]);
									$idactivitySource283 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity56,
									'source_id' =>$idPlan59,
									'value' => 151267231,
									'goal' => 0,
									'evidence_balance' => 151267231,
									'age' => 4,
									]);
									$idactivitySource284 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity57,
									'source_id' =>$idPlan59,
									'value' => 57624117,
									'goal' => 0,
									'evidence_balance' => 57624117,
									'age' => 4,
									]);
									$idactivitySource285 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity58,
									'source_id' =>$idPlan59,
									'value' => 199373827.41,
									'goal' => 0,
									'evidence_balance' => 199373827.41,
									'age' => 4,
									]);
									$idactivitySource286 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity59,
									'source_id' =>$idPlan59,
									'value' => 28378634,
									'goal' => 0,
									'evidence_balance' => 28378634,
									'age' => 4,
									]);
									$idactivitySource287 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity60,
									'source_id' =>$idPlan59,
									'value' => 243037512,
									'goal' => 0,
									'evidence_balance' => 243037512,
									'age' => 4,
									]);
									$idactivitySource288 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity61,
									'source_id' =>$idPlan59,
									'value' => 25521680,
									'goal' => 0,
									'evidence_balance' => 25521680,
									'age' => 4,
									]);
									$idactivitySource289 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity62,
									'source_id' =>$idPlan59,
									'value' => 680525241.960005,
									'goal' => 0,
									'evidence_balance' => 680525241.960005,
									'age' => 4,
									]);
									$idactivitySource290 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity63,
									'source_id' =>$idPlan58,
									'value' => 97951973.67,
									'goal' => 0,
									'evidence_balance' => 97951973.67,
									'age' => 4,
									]);
									$idactivitySource291 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity64,
									'source_id' =>$idPlan58,
									'value' => 178060611,
									'goal' => 0,
									'evidence_balance' => 178060611,
									'age' => 4,
									]);
									$idactivitySource292 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity65,
									'source_id' =>$idPlan58,
									'value' => 216090472.15,
									'goal' => 0,
									'evidence_balance' => 216090472.15,
									'age' => 4,
									]);
									$idactivitySource293 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity66,
									'source_id' =>$idPlan58,
									'value' => 490053823.52,
									'goal' => 0,
									'evidence_balance' => 490053823.52,
									'age' => 4,
									]);
									$idactivitySource294 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity67,
									'source_id' =>$idPlan58,
									'value' => 196086898.67,
									'goal' => 0,
									'evidence_balance' => 196086898.67,
									'age' => 4,
									]);
									$idactivitySource295 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity68,
									'source_id' =>$idPlan58,
									'value' => 40122841,
									'goal' => 0,
									'evidence_balance' => 40122841,
									'age' => 4,
									]);
									$idactivitySource296 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity69,
									'source_id' =>$idPlan58,
									'value' => 77089181.7,
									'goal' => 0,
									'evidence_balance' => 77089181.7,
									'age' => 4,
									]);
									$idactivitySource297 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity70,
									'source_id' =>$idPlan58,
									'value' => 34113819.31,
									'goal' => 0,
									'evidence_balance' => 34113819.31,
									'age' => 4,
									]);
									$idactivitySource298 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity71,
									'source_id' =>$idPlan58,
									'value' => 343912043.69,
									'goal' => 0,
									'evidence_balance' => 343912043.69,
									'age' => 4,
									]);
									$idactivitySource299 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity72,
									'source_id' =>$idPlan58,
									'value' => 330793348.63,
									'goal' => 0,
									'evidence_balance' => 330793348.63,
									'age' => 4,
									]);
									$idactivitySource300 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity73,
									'source_id' =>$idPlan58,
									'value' => 199405816.230005,
									'goal' => 0,
									'evidence_balance' => 199405816.230005,
									'age' => 4,
									]);
									$idactivitySource301 = DB::getPdo()->lastInsertId();
									
									
									
								DB::table('activity_sources')->insert([
									'activity_id' => $idactivity74,
									'source_id' =>$idPlan55,
									'value' => 24262.7856052517,
									'goal' => 0,
									'evidence_balance' => 24262.7856052517,
									'age' => 4,
									]);
									$idactivitySource302 = DB::getPdo()->lastInsertId();
									
									
									
                                   
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity19,
                                      'source_id' =>$idPlan57,
                                      'value' => 314026459.469997,
                                      'goal' => 0,
                                      'evidence_balance' => 314026459.469997,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource303 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity38,
                                      'source_id' =>$idPlan49,
                                      'value' => 867017459.109995,
                                      'goal' => 0,
                                      'evidence_balance' => 867017459.109995,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource304 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity46,
                                      'source_id' =>$idPlan59,
                                      'value' => 1031405692.43999,
                                      'goal' => 0,
                                      'evidence_balance' => 1031405692.43999,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource305 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity62,
                                      'source_id' =>$idPlan58,
                                      'value' => 293658054.699995,
                                      'goal' => 0,
                                      'evidence_balance' => 293658054.699995,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource306 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity73,
                                      'source_id' =>$idPlan54,
                                      'value' => 19247784.5556,
                                      'goal' => 0,
                                      'evidence_balance' => 19247784.5556,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource307 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity74,
                                      'source_id' =>$idPlan56,
                                      'value' => 6000000,
                                      'goal' => 0,
                                      'evidence_balance' => 6000000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource308 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia223,
                                        'activity_source_id' =>$idactivitySource229,
                                        'value' => 216066757.81,
                                        ]);
                                        $idevidenceFinancial229 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia224,
                                        'activity_source_id' =>$idactivitySource230,
                                        'value' => 386363638.22,
                                        ]);
                                        $idevidenceFinancial230 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia225,
                                        'activity_source_id' =>$idactivitySource231,
                                        'value' => 669554538.25,
                                        ]);
                                        $idevidenceFinancial231 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia226,
                                        'activity_source_id' =>$idactivitySource232,
                                        'value' => 16117346684.73,
                                        ]);
                                        $idevidenceFinancial232 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia227,
                                        'activity_source_id' =>$idactivitySource233,
                                        'value' => 323387375.27,
                                        ]);
                                        $idevidenceFinancial233 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia228,
                                        'activity_source_id' =>$idactivitySource234,
                                        'value' => 77537815.6,
                                        ]);
                                        $idevidenceFinancial234 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia229,
                                        'activity_source_id' =>$idactivitySource235,
                                        'value' => 71945527.57,
                                        ]);
                                        $idevidenceFinancial235 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia230,
                                        'activity_source_id' =>$idactivitySource236,
                                        'value' => 315797442.64,
                                        ]);
                                        $idevidenceFinancial236 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia231,
                                        'activity_source_id' =>$idactivitySource237,
                                        'value' => 73993593.88,
                                        ]);
                                        $idevidenceFinancial237 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia232,
                                        'activity_source_id' =>$idactivitySource238,
                                        'value' => 19999999.99,
                                        ]);
                                        $idevidenceFinancial238 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia233,
                                        'activity_source_id' =>$idactivitySource239,
                                        'value' => 147695170.9,
                                        ]);
                                        $idevidenceFinancial239 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia234,
                                        'activity_source_id' =>$idactivitySource240,
                                        'value' => 179117477.09,
                                        ]);
                                        $idevidenceFinancial240 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia235,
                                        'activity_source_id' =>$idactivitySource241,
                                        'value' => 21102368.72,
                                        ]);
                                        $idevidenceFinancial241 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia236,
                                        'activity_source_id' =>$idactivitySource242,
                                        'value' => 94247067.12,
                                        ]);
                                        $idevidenceFinancial242 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia237,
                                        'activity_source_id' =>$idactivitySource243,
                                        'value' => 33723257.09,
                                        ]);
                                        $idevidenceFinancial243 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia238,
                                        'activity_source_id' =>$idactivitySource244,
                                        'value' => 1797561828.37,
                                        ]);
                                        $idevidenceFinancial244 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia239,
                                        'activity_source_id' =>$idactivitySource245,
                                        'value' => 1954823747.45,
                                        ]);
                                        $idevidenceFinancial245 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia240,
                                        'activity_source_id' =>$idactivitySource246,
                                        'value' => 1089826004.07,
                                        ]);
                                        $idevidenceFinancial246 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia241,
                                        'activity_source_id' =>$idactivitySource247,
                                        'value' => 151337665.530003,
                                        ]);
                                        $idevidenceFinancial247 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia242,
                                        'activity_source_id' =>$idactivitySource248,
                                        'value' => 216720370.69,
                                        ]);
                                        $idevidenceFinancial248 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia243,
                                        'activity_source_id' =>$idactivitySource249,
                                        'value' => 1785443650.18,
                                        ]);
                                        $idevidenceFinancial249 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia244,
                                        'activity_source_id' =>$idactivitySource250,
                                        'value' => 134316559.81,
                                        ]);
                                        $idevidenceFinancial250 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia245,
                                        'activity_source_id' =>$idactivitySource251,
                                        'value' => 4486859017.98,
                                        ]);
                                        $idevidenceFinancial251 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia246,
                                        'activity_source_id' =>$idactivitySource252,
                                        'value' => 80169477.35,
                                        ]);
                                        $idevidenceFinancial252 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia247,
                                        'activity_source_id' =>$idactivitySource253,
                                        'value' => 24085077,
                                        ]);
                                        $idevidenceFinancial253 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia248,
                                        'activity_source_id' =>$idactivitySource254,
                                        'value' => 203847652,
                                        ]);
                                        $idevidenceFinancial254 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia249,
                                        'activity_source_id' =>$idactivitySource255,
                                        'value' => 314852339.71,
                                        ]);
                                        $idevidenceFinancial255 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia250,
                                        'activity_source_id' =>$idactivitySource256,
                                        'value' => 196683121.5,
                                        ]);
                                        $idevidenceFinancial256 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia251,
                                        'activity_source_id' =>$idactivitySource257,
                                        'value' => 1244169668.54,
                                        ]);
                                        $idevidenceFinancial257 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia252,
                                        'activity_source_id' =>$idactivitySource258,
                                        'value' => 1212909901.8,
                                        ]);
                                        $idevidenceFinancial258 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia254,
                                        'activity_source_id' =>$idactivitySource260,
                                        'value' => 332903060.37,
                                        ]);
                                        $idevidenceFinancial260 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia255,
                                        'activity_source_id' =>$idactivitySource261,
                                        'value' => 101855800,
                                        ]);
                                        $idevidenceFinancial261 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia256,
                                        'activity_source_id' =>$idactivitySource262,
                                        'value' => 3040287256.38,
                                        ]);
                                        $idevidenceFinancial262 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia257,
                                        'activity_source_id' =>$idactivitySource263,
                                        'value' => 133861844,
                                        ]);
                                        $idevidenceFinancial263 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia258,
                                        'activity_source_id' =>$idactivitySource264,
                                        'value' => 176594346,
                                        ]);
                                        $idevidenceFinancial264 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia259,
                                        'activity_source_id' =>$idactivitySource265,
                                        'value' => 62189794.5,
                                        ]);
                                        $idevidenceFinancial265 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia260,
                                        'activity_source_id' =>$idactivitySource266,
                                        'value' => 513516911.220005,
                                        ]);
                                        $idevidenceFinancial266 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia261,
                                        'activity_source_id' =>$idactivitySource267,
                                        'value' => 347906516.84,
                                        ]);
                                        $idevidenceFinancial267 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia262,
                                        'activity_source_id' =>$idactivitySource268,
                                        'value' => 103622343,
                                        ]);
                                        $idevidenceFinancial268 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia263,
                                        'activity_source_id' =>$idactivitySource269,
                                        'value' => 85207472,
                                        ]);
                                        $idevidenceFinancial269 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia264,
                                        'activity_source_id' =>$idactivitySource270,
                                        'value' => 875811597.59,
                                        ]);
                                        $idevidenceFinancial270 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia266,
                                        'activity_source_id' =>$idactivitySource272,
                                        'value' => 987550308.93,
                                        ]);
                                        $idevidenceFinancial272 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia267,
                                        'activity_source_id' =>$idactivitySource273,
                                        'value' => 48180801.85,
                                        ]);
                                        $idevidenceFinancial273 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia268,
                                        'activity_source_id' =>$idactivitySource274,
                                        'value' => 99921211.8700051,
                                        ]);
                                        $idevidenceFinancial274 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia269,
                                        'activity_source_id' =>$idactivitySource275,
                                        'value' => 223688332.23,
                                        ]);
                                        $idevidenceFinancial275 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia270,
                                        'activity_source_id' =>$idactivitySource276,
                                        'value' => 125035790.04,
                                        ]);
                                        $idevidenceFinancial276 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia271,
                                        'activity_source_id' =>$idactivitySource277,
                                        'value' => 238091238.67,
                                        ]);
                                        $idevidenceFinancial277 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia273,
                                        'activity_source_id' =>$idactivitySource279,
                                        'value' => 134308321.92,
                                        ]);
                                        $idevidenceFinancial279 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia274,
                                        'activity_source_id' =>$idactivitySource280,
                                        'value' => 23400000,
                                        ]);
                                        $idevidenceFinancial280 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia275,
                                        'activity_source_id' =>$idactivitySource281,
                                        'value' => 5020000,
                                        ]);
                                        $idevidenceFinancial281 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia277,
                                        'activity_source_id' =>$idactivitySource283,
                                        'value' => 54748120,
                                        ]);
                                        $idevidenceFinancial283 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia278,
                                        'activity_source_id' =>$idactivitySource284,
                                        'value' => 150085154.38,
                                        ]);
                                        $idevidenceFinancial284 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia279,
                                        'activity_source_id' =>$idactivitySource285,
                                        'value' => 57624117,
                                        ]);
                                        $idevidenceFinancial285 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia280,
                                        'activity_source_id' =>$idactivitySource286,
                                        'value' => 185863294.52,
                                        ]);
                                        $idevidenceFinancial286 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia281,
                                        'activity_source_id' =>$idactivitySource287,
                                        'value' => 28312370,
                                        ]);
                                        $idevidenceFinancial287 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia282,
                                        'activity_source_id' =>$idactivitySource288,
                                        'value' => 239857159.44,
                                        ]);
                                        $idevidenceFinancial288 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia283,
                                        'activity_source_id' =>$idactivitySource289,
                                        'value' => 19096080,
                                        ]);
                                        $idevidenceFinancial289 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia284,
                                        'activity_source_id' =>$idactivitySource290,
                                        'value' => 680525241.960005,
                                        ]);
                                        $idevidenceFinancial290 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia285,
                                        'activity_source_id' =>$idactivitySource291,
                                        'value' => 97951972.89,
                                        ]);
                                        $idevidenceFinancial291 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia286,
                                        'activity_source_id' =>$idactivitySource292,
                                        'value' => 178059968,
                                        ]);
                                        $idevidenceFinancial292 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia287,
                                        'activity_source_id' =>$idactivitySource293,
                                        'value' => 174154242.8,
                                        ]);
                                        $idevidenceFinancial293 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia288,
                                        'activity_source_id' =>$idactivitySource294,
                                        'value' => 437858161.27,
                                        ]);
                                        $idevidenceFinancial294 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia289,
                                        'activity_source_id' =>$idactivitySource295,
                                        'value' => 192334652.6,
                                        ]);
                                        $idevidenceFinancial295 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia290,
                                        'activity_source_id' =>$idactivitySource296,
                                        'value' => 34805333.33,
                                        ]);
                                        $idevidenceFinancial296 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia291,
                                        'activity_source_id' =>$idactivitySource297,
                                        'value' => 77087998.5,
                                        ]);
                                        $idevidenceFinancial297 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia292,
                                        'activity_source_id' =>$idactivitySource298,
                                        'value' => 33695746,
                                        ]);
                                        $idevidenceFinancial298 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia293,
                                        'activity_source_id' =>$idactivitySource299,
                                        'value' => 328256808.79,
                                        ]);
                                        $idevidenceFinancial299 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia294,
                                        'activity_source_id' =>$idactivitySource300,
                                        'value' => 310164078.22,
                                        ]);
                                        $idevidenceFinancial300 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia295,
                                        'activity_source_id' =>$idactivitySource301,
                                        'value' => 199405816.230005,
                                        ]);
                                        $idevidenceFinancial301 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia296,
                                        'activity_source_id' =>$idactivitySource302,
                                        'value' => 24262.7856052517,
                                        ]);
                                        $idevidenceFinancial302 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia241,
                                          'activity_source_id' =>$idactivitySource303,
                                          'value' => 239196971.469997,
                                          ]);
                                          $idevidenceFinancial303 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia260,
                                          'activity_source_id' =>$idactivitySource304,
                                          'value' => 543045886.979995,
                                          ]);
                                          $idevidenceFinancial304 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia268,
                                          'activity_source_id' =>$idactivitySource305,
                                          'value' => 917723939.209995,
                                          ]);
                                          $idevidenceFinancial305 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia284,
                                          'activity_source_id' =>$idactivitySource306,
                                          'value' => 216480879.509995,
                                          ]);
                                          $idevidenceFinancial306 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia295,
                                          'activity_source_id' =>$idactivitySource307,
                                          'value' => 18886048.8099947,
                                          ]);
                                          $idevidenceFinancial307 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia296,
                                          'activity_source_id' =>$idactivitySource308,
                                          'value' => 2987729.18439475,
                                          ]);
                                          $idevidenceFinancial308 = DB::getPdo()->lastInsertId();
                                          
				}
    }      