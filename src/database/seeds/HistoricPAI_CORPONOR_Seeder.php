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
 * Class HistoricPAI_CORPONOR_Seeder
 */
class HistoricPAI_CORPONOR_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'Plan de Acción Institucional 2016-2019 “Hacia un Norte Ambientalmente Sostenible… ¡Todos por el Agua!”',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'RAFAEL NAVI GREGORIO ANGARITA LAMK',
        'group_id' => 25,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
        

        DB::table('strategic_lines')->insert([
          'name' => 'ORDENAMIENTO AMBIENTAL TERRITORIAL',
          'weighing' => 16,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => ' CONSERVACION DE ECOSISTEMAS Y ADMINISTRACION DE LA BIODIVERSIDAD Y SERVICIOS ECOSISTEMICOS',
          'weighing' => 16,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'PPROGRAMA PLANEAR: FORTALECIMIENTO DE LA INSTITUCIONALIDAD PARA LA COMPETITIVIDAD REGIONAL CON EL ACOMPAÑAMIENTO DE LA AUTORIDAD AMBIENTAL',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline3 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'PROGRAMA PLANEAR: EDUCACION, CULTURAL AMBIENTAL Y PARTICIPACION CON ENFASIS EN EL MANEJO Y TRANSFORMACION DE CONFLICTOS SOCIOAMBIENTALES',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline4 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'PROGRAMA PLANEAR: FORTALECIMIENTO DE LA INSTITUCIONALIDAD PARA LA COMPETITIVIDAD REGIONAL CON EL ACOMPAÑAMIENTO DE LA AUTORIDAD AMBIENTAL',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline5 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'PROGRAMA PLANEAR: GESTION DEL CONOCIMIENTO Y LA ADMINISTRACION DE LA TECNOLOGIA E INFORMACION PARA LA TOMA DE DECISIONES EN LA PROTECCION DEL AMBIENTE.',
          'weighing' => 17,
          'p_a_i_id' => $idpai1,
          ]);
          $idline6 = DB::getPdo()->lastInsertId();
          
          
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 1 PAI: ORDENAMIENTO AMBIENTAL DEL TERRITORIO, ACCIONES DE ADAPTACION AL CAMBIO CLIMATICO,  GESTION DEL RIESGO DE DESASTRES  Y SOSTENIBILIDAD AMBIENTAL DEL CATATUMBO ',
            'weighing' => 12,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2 PAI: GESTIÒN INTEGRAL Y COLECTIVA DIRIGIDA A LA  CONSERVACIÓN DE LA BIODIVERSIDAD Y DE LOS SERVICIOS ECOSISTEMICOS, EN ESPECIAL LA PROVISION DE AGUA PARA EL DPTO. N. DE S.',
            'weighing' => 12,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 3 PAI: EL NORTE DE SANTANDER LE APUESTA AL USO LEGAL Y SOSTENIBLE DE LOS RECURSOS NATURALES',
            'weighing' => 12,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 4 PAI: PARTICIPACION Y EDUCACION PARA  UNA CULTURA AMBIENTAL EN EL NORTE DE SANTANDER',
            'weighing' => 12,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 5 PAI: CORPONOR PROMUEVE LA POLÍTICA NACIONAL DE PRODUCCIÓN Y CONSUMO SOSTENIBLE Y ADAPTACIÓN A LA VULNERABILIDAD CLIMÁTICA DEL SECTOR PRODUCTIVO',
            'weighing' => 13,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 6 PAI: CIUDADES SOSTENIBLES',
            'weighing' => 13,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 7 PAI: FORTALECIMIENTO INSTITUCIONAL DE LA CAPACIDAD TECNICA, ADMINISTRATIVA Y OPERATIVA',
            'weighing' => 13,
            ]);
            $idprogram7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline6,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 8 PAI: ADMINISTRACION DE LA INFORMACION AMBIENTAL PARA LA APROPIACION Y PARTICIPACIÓN SOCIAL EN LA GESTION AMBIENTAL.',
            'weighing' => 13,
            ]);
            $idprogram8 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto 1.1 Gestión ambiental desde el proceso de ordenamiento territorial  y acciones de adaptación al cambio climático en la gestión del riesgo de desastres ',
              'weighing' => 20,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto 1.2 Formulación e implementación de los POMCAs en el departamento Norte de Santander.',
              'weighing' => 20,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto 1.3 Gestión del conocimiento para la  regulación y uso eficiente del agua en el  departamento Norte de Santander e implementación de proyectos de descontaminación hídrica.',
              'weighing' => 20,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto 1.4 Formulación e implementación del Plan General de Ordenamiento Forestal del departamento Norte de Santander.',
              'weighing' => 20,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto 1.5 Hacia un Catatumbo Sostenible',
              'weighing' => 20,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto 2.1  Gestión para la Conservación Sostenible de las Áreas de Manejo Especial del departamento Norte de Santander',
              'weighing' => 25,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto 2.2 Gestión para el relacionamiento con las comunidades indígenas Uwa´s  en procesos de ordenamiento ambiental territorial y producción sostenible.',
              'weighing' => 25,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto 2.3 Gestión para el relacionamiento con las comunidades indígenas Barí  (Catalaura-Ñatubaiybari)  en procesos de ordenamiento ambiental territorial y producción sostenible.',
              'weighing' => 25,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto 2.4 Apoyo al componente de gestión en biodiversidad del departamento Norte de Santander.',
              'weighing' => 25,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto 3.1  Autorizaciones y obligaciones ambientales ',
              'weighing' => 50,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto 3.2  Gestión para el control del uso de los recursos naturales renovables y del ambiente.',
              'weighing' => 50,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto 4.1 Educación ambiental ',
              'weighing' => 50,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto 4.2  Participación ambiental ciudadana',
              'weighing' => 50,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto 5.1 Promoción para la producción más limpia y adaptación a la vulnerabilidad climática con los sectores productivos del departamento Norte de Santander',
              'weighing' => 50,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto 5.2 Negocios Verdes y apoyo a Proyectos productivos sostenibles ',
              'weighing' => 50,
              ]);
              $idproject15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto 6.1  Sostenibilidad ambiental en el hábitat urbana',
              'weighing' => 33,
              ]);
              $idproject16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto 6.2  Gestión de residuos sólidos',
              'weighing' => 33,
              ]);
              $idproject17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto 6.3  Control de la calidad del recurso aire',
              'weighing' => 34,
              ]);
              $idproject18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 7.1 Corponor articulador para la gestión ambiental colectiva',
              'weighing' => 14,
              ]);
              $idproject19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 7.2 Fortalecimiento del Laboratorio',
              'weighing' => 14,
              ]);
              $idproject20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 7.3 Fortalecimiento de las finanzas corporativas en la Gestión Ambiental Regional.',
              'weighing' => 14,
              ]);
              $idproject21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 7.4  Desarrollo  institucional y administrativo  de la Corporación',
              'weighing' => 14,
              ]);
              $idproject22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 7.5 Operación logística, mantenimiento  y dotación de equipos, bienes muebles e inmuebles de la corporación',
              'weighing' => 14,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 7.6 Administración y mejoramiento de las tecnologías de información y comunicación      ',
              'weighing' => 15,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto 7.7  Estructuración y formulación de proyectos de inversión ',
              'weighing' => 15,
              ]);
              $idproject25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram8,
              'project' => 'Proyecto 8.1 Administración del Sistema de Información Ambiental ',
              'weighing' => 100,
              ]);
              $idproject26 = DB::getPdo()->lastInsertId();
              
              
              

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
					'weighing' => 33,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 30,
					'goal_2' => 70,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 30,
					'goal_2_balance' => 70,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					'weighing' => 16,
					]);
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 30,
					'goal_3' => 40,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 30,
					'goal_3_balance' => 40,
					'goal_4_balance' => 0,
					'total_goal' => 70,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 2,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 2,
					'total_goal' => 5,
					'unit_goal' => 24,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 35,
					'goal_4' => 50,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 35,
					'goal_4_balance' => 50,
					'total_goal' => 85,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
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
					'weighing' => 11,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 30,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 30,
					'total_goal' => 30,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 5,
					'goal_2' => 10,
					'goal_3' => 40,
					'goal_4' => 45,
					'goal_1_balance' => 5,
					'goal_2_balance' => 10,
					'goal_3_balance' => 40,
					'goal_4_balance' => 45,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 5',
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
					'weighing' => 11,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 30,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 30,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 33,
					'unit_goal' => 34,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 5,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 5,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 6,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 1,
					'goal_2' => 10,
					'goal_3' => 2,
					'goal_4' => 6,
					'goal_1_balance' => 1,
					'goal_2_balance' => 10,
					'goal_3_balance' => 2,
					'goal_4_balance' => 6,
					'total_goal' => 19,
					'unit_goal' => 67,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 11,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 9',
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
					'weighing' => 11,
					]);
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 10,
					'goal_2' => 25,
					'goal_3' => 35,
					'goal_4' => 30,
					'goal_1_balance' => 10,
					'goal_2_balance' => 25,
					'goal_3_balance' => 35,
					'goal_4_balance' => 30,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 10,
					'goal_2' => 20,
					'goal_3' => 30,
					'goal_4' => 30,
					'goal_1_balance' => 10,
					'goal_2_balance' => 20,
					'goal_3_balance' => 30,
					'goal_4_balance' => 30,
					'total_goal' => 90,
					'unit_goal' => 64,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
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
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 99,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 33,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 33,
					'total_goal' => 33,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 50,
					'goal_2' => 50,
					'goal_3' => 0,
					'goal_4' => 100,
					'goal_1_balance' => 50,
					'goal_2_balance' => 50,
					'goal_3_balance' => 0,
					'goal_4_balance' => 100,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 50,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 50,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 350,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 29.88,
					'goal_2' => 0,
					'goal_3' => 100,
					'goal_4' => 0,
					'goal_1_balance' => 29.88,
					'goal_2_balance' => 0,
					'goal_3_balance' => 100,
					'goal_4_balance' => 0,
					'total_goal' => 129.88,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 100,
					'goal_2' => 500,
					'goal_3' => 0,
					'goal_4' => 578,
					'goal_1_balance' => 100,
					'goal_2_balance' => 500,
					'goal_3_balance' => 0,
					'goal_4_balance' => 578,
					'total_goal' => 1178,
					'unit_goal' => 39,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 50,
					'goal_2' => 587,
					'goal_3' => 498.2,
					'goal_4' => 60,
					'goal_1_balance' => 50,
					'goal_2_balance' => 587,
					'goal_3_balance' => 498.2,
					'goal_4_balance' => 60,
					'total_goal' => 1195.2,
					'unit_goal' => 39,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 0.25,
					'goal_2' => 0.5,
					'goal_3' => 0.25,
					'goal_4' => 0,
					'goal_1_balance' => 0.25,
					'goal_2_balance' => 0.5,
					'goal_3_balance' => 0.25,
					'goal_4_balance' => 0,
					'total_goal' => 1,
					'unit_goal' => 67,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 25,
					'goal_2' => 43,
					'goal_3' => 45,
					'goal_4' => 55,
					'goal_1_balance' => 25,
					'goal_2_balance' => 43,
					'goal_3_balance' => 45,
					'goal_4_balance' => 55,
					'total_goal' => 168,
					'unit_goal' => 38,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 9',
					'goal_1' => 2,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 2,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 10',
					'goal_1' => 0,
					'goal_2' => 25,
					'goal_3' => 35,
					'goal_4' => 40,
					'goal_1_balance' => 0,
					'goal_2_balance' => 25,
					'goal_3_balance' => 35,
					'goal_4_balance' => 40,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 11',
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
					'weighing' => 9,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'unit_goal' => 34,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'unit_goal' => 67,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'unit_goal' => 34,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 3,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 3,
					'total_goal' => 9,
					'unit_goal' => 67,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					'weighing' => 20,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
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
					'unit_goal' => 34,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 60,
					'goal_3' => 100,
					'goal_4' => 60,
					'goal_1_balance' => 100,
					'goal_2_balance' => 60,
					'goal_3_balance' => 100,
					'goal_4_balance' => 60,
					'total_goal' => 320,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 100,
					'goal_2' => 53.3,
					'goal_3' => 100,
					'goal_4' => 60,
					'goal_1_balance' => 100,
					'goal_2_balance' => 53.3,
					'goal_3_balance' => 100,
					'goal_4_balance' => 60,
					'total_goal' => 313.3,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					'weighing' => 24,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
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
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 3,
					'goal_2' => 3,
					'goal_3' => 40,
					'goal_4' => 3,
					'goal_1_balance' => 3,
					'goal_2_balance' => 3,
					'goal_3_balance' => 40,
					'goal_4_balance' => 3,
					'total_goal' => 49,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 100,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 100,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 101,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 25,
					'goal_2' => 30,
					'goal_3' => 30,
					'goal_4' => 40,
					'goal_1_balance' => 25,
					'goal_2_balance' => 30,
					'goal_3_balance' => 30,
					'goal_4_balance' => 40,
					'total_goal' => 125,
					'unit_goal' => 49,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 29,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 1,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 1,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 25,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 11,
					'goal_2' => 9,
					'goal_3' => 11,
					'goal_4' => 11,
					'goal_1_balance' => 11,
					'goal_2_balance' => 9,
					'goal_3_balance' => 11,
					'goal_4_balance' => 11,
					'total_goal' => 42,
					'unit_goal' => 26,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 5,
					'goal_2' => 4,
					'goal_3' => 6,
					'goal_4' => 7,
					'goal_1_balance' => 5,
					'goal_2_balance' => 4,
					'goal_3_balance' => 6,
					'goal_4_balance' => 7,
					'total_goal' => 22,
					'unit_goal' => 67,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 25,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 23,
					'goal_2' => 37,
					'goal_3' => 16,
					'goal_4' => 24,
					'goal_1_balance' => 23,
					'goal_2_balance' => 37,
					'goal_3_balance' => 16,
					'goal_4_balance' => 24,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 2,
					'goal_4' => 3,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 2,
					'goal_4_balance' => 3,
					'total_goal' => 9,
					'unit_goal' => 67,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					'weighing' => 24,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
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
					'weighing' => 50,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 89.397,
					'goal_3' => 146.312,
					'goal_4' => 128.425,
					'goal_1_balance' => 0,
					'goal_2_balance' => 89.397,
					'goal_3_balance' => 146.312,
					'goal_4_balance' => 128.425,
					'total_goal' => 364.134,
					'unit_goal' => 47,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					'weighing' => 24,
					]);
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					$idobjectiveproduct97 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct98 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct99 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct100 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					'weighing' => 33,
					]);
					$idobjectiveproduct101 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct102 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 20,
					'goal_2' => 25,
					'goal_3' => 13,
					'goal_4' => 21,
					'goal_1_balance' => 20,
					'goal_2_balance' => 25,
					'goal_3_balance' => 13,
					'goal_4_balance' => 21,
					'total_goal' => 79,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct103 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 80,
					'goal_2' => 80,
					'goal_3' => 80,
					'goal_4' => 92,
					'goal_1_balance' => 80,
					'goal_2_balance' => 80,
					'goal_3_balance' => 80,
					'goal_4_balance' => 92,
					'total_goal' => 332,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct104 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 20,
					'goal_2' => 20,
					'goal_3' => 10,
					'goal_4' => 10,
					'goal_1_balance' => 20,
					'goal_2_balance' => 20,
					'goal_3_balance' => 10,
					'goal_4_balance' => 10,
					'total_goal' => 60,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct105 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 40,
					'goal_2' => 40,
					'goal_3' => 40,
					'goal_4' => 40,
					'goal_1_balance' => 40,
					'goal_2_balance' => 40,
					'goal_3_balance' => 40,
					'goal_4_balance' => 40,
					'total_goal' => 160,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct106 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 15,
					'goal_2' => 30,
					'goal_3' => 35,
					'goal_4' => 35,
					'goal_1_balance' => 15,
					'goal_2_balance' => 30,
					'goal_3_balance' => 35,
					'goal_4_balance' => 35,
					'total_goal' => 115,
					'unit_goal' => 49,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct107 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					'unit_goal' => 49,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct108 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 15,
					'goal_4' => 15,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 15,
					'goal_4_balance' => 15,
					'total_goal' => 30,
					'unit_goal' => 49,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct109 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					$idobjectiveproduct110 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct111 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					$idobjectiveproduct112 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 25,
					'goal_2' => 10,
					'goal_3' => 30,
					'goal_4' => 35,
					'goal_1_balance' => 25,
					'goal_2_balance' => 10,
					'goal_3_balance' => 30,
					'goal_4_balance' => 35,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct113 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct114 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 100,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 100,
					'goal_4_balance' => 0,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct115 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					$idobjectiveproduct116 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 50,
					]);
					$idobjectiveproduct117 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
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
					'weighing' => 49,
					]);
					$idobjectiveproduct118 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
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
					$idobjectiveproduct119 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 50,
					'goal_2' => 30,
					'goal_3' => 10,
					'goal_4' => 10,
					'goal_1_balance' => 50,
					'goal_2_balance' => 30,
					'goal_3_balance' => 10,
					'goal_4_balance' => 10,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct120 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct121 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct122 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'unit_goal' => 50,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct123 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					$idobjectiveproduct124 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
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
					$idobjectiveproduct125 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 16,
					'goal_2' => 25,
					'goal_3' => 11,
					'goal_4' => 10,
					'goal_1_balance' => 16,
					'goal_2_balance' => 25,
					'goal_3_balance' => 11,
					'goal_4_balance' => 10,
					'total_goal' => 62,
					'unit_goal' => 34,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct126 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 15,
					'goal_2' => 25,
					'goal_3' => 20,
					'goal_4' => 14,
					'goal_1_balance' => 15,
					'goal_2_balance' => 25,
					'goal_3_balance' => 20,
					'goal_4_balance' => 14,
					'total_goal' => 74,
					'unit_goal' => 67,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct127 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
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
					$idobjectiveproduct128 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 100,
					'goal_3' => 5,
					'goal_4' => 5,
					'goal_1_balance' => 0,
					'goal_2_balance' => 100,
					'goal_3_balance' => 5,
					'goal_4_balance' => 5,
					'total_goal' => 110,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct129 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
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
					$idobjectiveproduct130 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 33,
					]);
					$idobjectiveproduct131 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
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
					$idobjectiveproduct132 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct133 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
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
					$idobjectiveproduct134 = DB::getPdo()->lastInsertId();
					
					
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'Porcentaje de municipios asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT. (Res. 667/2016 -IMG. 24POT)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'Porcentaje de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático en el marco de los instrumentos de planificación territorial. (Res. 667/2016 -IMG  7Clima)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'Ejecución de acciones en conocimiento y reducción del riesgo y manejo de desastres naturales. ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'Porcentaje de avance en la formulación y/o ajuste de los Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM).  (Res. 667/2016 -IMG. 1POMCAS)',
                    'goal_1' => 30,
                    'goal_2' => 70,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'Porcentaje de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución. . (Res. 667/2016 -IMG. 6POMCASejec)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'Porcentaje de cuerpos de agua con reglamentación del uso de las aguas. (Res. 667/2016 -IMG 4UsoAguas)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 0,
                    'goal' => 300,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'Porcentaje de cuerpos de agua con planes de ordenamiento del recurso hídrico (PORH) adoptados.  (Res. 667/2016 -IMG. 2PORH)',
                    'goal_1' => 0,
                    'goal_2' => 30,
                    'goal_3' => 40,
                    'goal_4' => 0,
                    'goal' => 70,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'Acciones ejecutadas para gestión de Proyectos',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 2,
                    'goal' => 5,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'Estudio de aguas subterraneas ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 35,
                    'goal_4' => 50,
                    'goal' => 85,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'Porcentaje de cuerpos de agua con reglamentación del uso de las aguas. (Res. 667/2016 -IMG 4UsoAguas)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 100,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'Porcentaje de cuerpos de agua con planes de ordenamiento del recurso hídrico (PORH) adoptados.  (Res. 667/2016 -IMG. 2PORH)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 30,
                    'goal' => 30,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'Porcentaje de avance en la Formulación Estudio Regional del Agua',
                    'goal_1' => 5,
                    'goal_2' => 10,
                    'goal_3' => 40,
                    'goal_4' => 45,
                    'goal' => 100,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'Proyecto gestionado y/o formulados',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'Porcentaje de Planes de Saneamiento y Manejo de Vertimientos (PSMV) con seguimiento. (Res. 667/2016 -IMG. 3PSMV)',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'Seguimiento al cumplimiento de meta de carga contaminante, en aplicación de la tasa retributiva en las cuencas o tramos de cuencas de la jurisdicción de la Corporación. (DBO, SST)',
                    'goal_1' => 1,
                    'goal_2' => 30,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 33,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'Avance en la Gestión para Estudio de Aguas subterráneas',
                    'goal_1' => 5,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 6,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'Proyectos  de descontaminación hídrica ejecutados',
                    'goal_1' => 1,
                    'goal_2' => 10,
                    'goal_3' => 2,
                    'goal_4' => 6,
                    'goal' => 19,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'Porcentaje de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento. (Res. 667/2016 -IMG  5PUEAA)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'Porcentaje de avance en la formulación del Plan de Ordenación Forestal.  (Res. 667/2016 -IMG. 11Forest)',
                    'goal_1' => 10,
                    'goal_2' => 25,
                    'goal_3' => 35,
                    'goal_4' => 30,
                    'goal' => 100,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'Parcelas de medición establecidas',
                    'goal_1' => 10,
                    'goal_2' => 20,
                    'goal_3' => 30,
                    'goal_4' => 30,
                    'goal' => 90,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'Porcentaje de acciones para Promover la sostenibilidad ambiental en el Catatumbo',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'Porcentaje de páramos delimitados por el MADS, con zonificación y con régimen de usos adoptados por la CAR (Res. 667/2016 -IMG.  10Paramos)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 33,
                    'goal' => 33,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'Porcentaje de ecosistemas estratégicos con planes de manejo u ordenación en formulación',
                    'goal_1' => 50,
                    'goal_2' => 50,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'Porcentaje de áreas protegidas con planes de manejo en ejecución. (Res. 667/2016 -IMG.  12PlanesAP)',
                    'goal_1' => 50,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 350,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'Porcentaje de la superficie de áreas protegidas regionales declaradas, homologadas o recategorizadas, inscritas en el RUNAP . (Res. 667/2016 -IMG. 9RUNAP)',
                    'goal_1' => 29.88,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 0,
                    'goal' => 129.88,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'Hectáreas adquiridas para la conservación de ecosistemas estratégicos para la regulación hídrica.',
                    'goal_1' => 100,
                    'goal_2' => 500,
                    'goal_3' => 0,
                    'goal_4' => 578,
                    'goal' => 1178,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'Áreas protegidas para la conservación de ecosistemas y/o bosques naturales',
                    'goal_1' => 50,
                    'goal_2' => 587,
                    'goal_3' => 498.2,
                    'goal_4' => 60,
                    'goal' => 1195.2,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'Proyectos de identificación y valoración',
                    'goal_1' => 0.25,
                    'goal_2' => 0.5,
                    'goal_3' => 0.25,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'Número de familias recibiendo PSA',
                    'goal_1' => 25,
                    'goal_2' => 43,
                    'goal_3' => 45,
                    'goal_4' => 55,
                    'goal' => 168,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => 'Número de municipios con Sistemas Municipales para la Conservación (SIMAC) implementados',
                    'goal_1' => 2,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'Porcentaje de áreas de ecosistemas en restauración, rehabilitación y reforestación   (Res. 667/2016 -IMG.15Restaura)',
                    'goal_1' => 0,
                    'goal_2' => 25,
                    'goal_3' => 35,
                    'goal_4' => 40,
                    'goal' => 100,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'Número de áreas protegidas regionales declaradas.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 9,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'Documento de Ordenamiento Ambiental Territorial de los resguardos Uwa´s',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'Número de acciones implementadas  en   las comunidades indígenas Uwa´s  para el desarrollo sostenible de su territorio  ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'Proyecto Productivo Implementado',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'Documento de Ordenamiento Ambiental Territorial de los resguardos Barí (Catalaura-Ñatubaiybari)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'Proyecto Productivo Implementado',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 3,
                    'goal' => 9,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => 'Número de acciones implementadas  en   las comunidades indígena Barí (Catalaura-Ñatubaiybari)  para el desarrollo sostenible de su territorio  ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 1,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'Implementación del CAV para el manejo de fauna silvestre.  ',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 20,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'Número de individuos por especie atendidos',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'Porcentaje de especies amenazadas con medidas de conservación y manejo en ejecución. (Res. 667/2016 -IMG. 13Amenaz)',
                    'goal_1' => 50,
                    'goal_2' => 50,
                    'goal_3' => 50,
                    'goal_4' => 50,
                    'goal' => 200,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'Porcentaje de especies invasoras con medidas de prevención, control y manejo en ejecución. (Res. 667/2016 -IMG. 14Invasor)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'Agenda para consolidación de la información',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => 'Porcentaje de autorizaciones ambientales con seguimiento.  (Res. 667/2016 -IMG. 22Autor)',
                    'goal_1' => 100,
                    'goal_2' => 60,
                    'goal_3' => 100,
                    'goal_4' => 60,
                    'goal' => 320,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => 'Tiempo promedio de trámite para la resolución de autorizaciones ambientales otorgadas por la corporación. (Res. 667/2016 -IMG. 21TiempoT) ',
                    'goal_1' => 100,
                    'goal_2' => 53.3,
                    'goal_3' => 100,
                    'goal_4' => 60,
                    'goal' => 313.3,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'Porcentaje de Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento. (Res. 667/2016 -IMG  5PUEAA)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 200,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'Convenio para apoyar la actividad minera legal y erradicación de la minería ilegal ',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'Porcentaje de procesos sancionatorios resueltos. (Res. 667/2016 -IMG 23Sanc)',
                    'goal_1' => 3,
                    'goal_2' => 3,
                    'goal_3' => 40,
                    'goal_4' => 3,
                    'goal' => 49,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'Decomisos practicados de recursos naturales (flora, fauna, madera)',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 101,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'Municipios asesorados  en su función del control y la vigilancia del medio ambiente y de los Recursos Naturales Renovables ',
                    'goal_1' => 25,
                    'goal_2' => 30,
                    'goal_3' => 30,
                    'goal_4' => 40,
                    'goal' => 125,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'Comité Departamental de Control y Vigilancia en operación',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'Operativos realizados con la participación de la Corporación',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => 'Convenio para apoyar la actividad minera legal y erradicación de la minería ilegal ',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'Ejecución de acciones en educación ambiental.  . (Res. 667/2016 -IMG 27Educa)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'Ejecución de acciones en gestión ambiental urbana ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => 'Población urbana y rural que participa en gestión ambiental a través de procesos participativos en educación ambiental',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => 'Acciones de educación ambiental implementados en comunidad ROM',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'Reuniones de trabajo establecidas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => 'Estrategias implementadas',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'Número de campañas masivas para promover la divulgación, comunicación y participación ambiental ciudadana.',
                    'goal_1' => 11,
                    'goal_2' => 9,
                    'goal_3' => 11,
                    'goal_4' => 11,
                    'goal' => 42,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => 'Medición de índice de percepción de las comunidades frente a la gestión de Corponor.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => 'Porcentaje de sectores con acompañamiento para la reconversión hacia sistema sostenible de producción. (Res. 667/2016 -IMG 18Sector)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'Proyectos piloto de producción más limpia de sectores productivos, acompañados por la Corporación.',
                    'goal_1' => 5,
                    'goal_2' => 4,
                    'goal_3' => 6,
                    'goal_4' => 7,
                    'goal' => 22,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => 'Transferencia de tecnología gestionada',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => 'Programa Departamental  de Negocios Verdes formulado',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => 'Implementación del programa regional de negocios verdes por la autoridad ambiental. (Res. 667/2016 -IMG. 20Negoc)',
                    'goal_1' => 23,
                    'goal_2' => 37,
                    'goal_3' => 16,
                    'goal_4' => 24,
                    'goal' => 100,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => 'Número de proyectos productivos con BPA ',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 3,
                    'goal' => 9,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => 'Porcentaje de sectores con acompañamiento para la reconversión hacia sistema sostenible de producción. (Res. 667/2016 -IMG 18Sector)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 0,
                    'goal' => 300,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 3,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => 'Ejecución de acciones en Gestión Ambiental Urbana. (Res. 667/2016 -IMG. 19GAU)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => 'Superficie m2 de área verde establecida y mantenida en espacios públicos',
                    'goal_1' => 0,
                    'goal_2' => 89.397,
                    'goal_3' => 146.312,
                    'goal_4' => 128.425,
                    'goal' => 364.134,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => 'Porcentaje de Planes de Gestión Integral de Residuos Sólidos (PGIRS) con seguimiento a metas de aprovechamiento. (Res. 667/2016 -IMG. 17PGIRS)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => 'Número de registros de generadores de residuos o desechos peligrosos en la jurisdicción.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => 'Ejecución de acciones en gestión ambiental urbana ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => 'Seguimiento a los municipios en disposición final de residuos sólidos técnicamente adecuados y autorizados por la Corporación (rellenos sanitarios, celdas transitorias) con referencia al total de municipios de la jurisdicción. ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => 'Ejecución de acciones en gestión ambiental urbana ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => 'Porcentaje de redes y estaciones de monitoreo en operación. (Res. 667/2016 -IMG. 25Redes)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => 'Registro de la calidad del aire en centro poblados mayores de 100.000 habitantes y corredores industriales, determinado en redes de monitoreo acompañadas por la Corporación.',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => 'Determinación del Indice de calidad del aire',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct96,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct97,
                    'name' => 'Ejecución de acciones para la gestión y articulación SINA',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct98,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct99,
                    'name' => 'Porcentaje de ejecución de acciones relacionadas con el plan de monitoreo de  calidad de agua.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 200,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct100,
                    'name' => 'Porcentaje de ejecución de actividades para el cumplimiento de la norma NTC ISO/IEC 17025 del 2005',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 200,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct101,
                    'name' => 'Determinación del Índice de la Calidad del Agua según coordenadas establecidas en las tres (3) corrientes principales: Pamplonita - Zulia y Algodonal',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct102,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct103,
                    'name' => 'Total de recursos recaudados con referencia al total de recursos facturados por concepto de tasa retributiva.',
                    'goal_1' => 20,
                    'goal_2' => 25,
                    'goal_3' => 13,
                    'goal_4' => 21,
                    'goal' => 79,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct104,
                    'name' => 'Total de recursos recaudado con referencia al total de recursos facturado por concepto de tasa de uso del agua.',
                    'goal_1' => 80,
                    'goal_2' => 80,
                    'goal_3' => 80,
                    'goal_4' => 92,
                    'goal' => 332,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct105,
                    'name' => 'Porcentaje de recaudo por concepto de cobro coactivo de vigencias anteriores con referencia al total de la cartera de vigencias anteriores.',
                    'goal_1' => 20,
                    'goal_2' => 20,
                    'goal_3' => 10,
                    'goal_4' => 10,
                    'goal' => 60,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct106,
                    'name' => 'Municipios con apoyo y seguimiento de la Corporación para la gestión del cobro del impuesto predial y la sobretasa ambiental.',
                    'goal_1' => 40,
                    'goal_2' => 40,
                    'goal_3' => 40,
                    'goal_4' => 40,
                    'goal' => 160,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct107,
                    'name' => 'Auditorías al recaudo de la Sobretasa Ambiental, de los municipios.',
                    'goal_1' => 15,
                    'goal_2' => 30,
                    'goal_3' => 35,
                    'goal_4' => 35,
                    'goal' => 115,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct108,
                    'name' => 'Municipios con apoyo de la Corporación para la Actualización Catastral',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct109,
                    'name' => 'Municipios con apoyo de la Corporación, en mejoramiento del recaudo del Impuesto Predial y la Sobretasa Ambiental',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 15,
                    'goal_4' => 15,
                    'goal' => 30,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct110,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct111,
                    'name' => 'Porcentaje (%) Avance en la ejecución física de las metas del Planear y el  Plan de Acción  Institucional , PAI .',
                    'goal_1' => 90,
                    'goal_2' => 90,
                    'goal_3' => 90,
                    'goal_4' => 90,
                    'goal' => 360,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct112,
                    'name' => 'Porcentaje (%) Avance en la implementación del Plan Anticorrupción y de Atención al Ciudadano.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct113,
                    'name' => 'Porcentaje de avance en el proceso de modernización organizacional',
                    'goal_1' => 25,
                    'goal_2' => 10,
                    'goal_3' => 30,
                    'goal_4' => 35,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct114,
                    'name' => 'Número de seguimientos para el mantenimiento o renovación de las certificaciones de calidad.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct115,
                    'name' => 'Porcentaje de avance en la adopción de políticas contables de conformidad con las NICSPl. -',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct116,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct117,
                    'name' => 'Porcentaje de cumplimiento del programa de adecuación física y dotación a las instalaciones de la corporación',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct118,
                    'name' => 'Porcentaje de cumplimiento del programa de mantenimiento preventivo y correctivo. ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct119,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct120,
                    'name' => 'Porcentaje (%)  de Implementación  de la Estrategia de Gobierno en Línea.',
                    'goal_1' => 50,
                    'goal_2' => 30,
                    'goal_3' => 10,
                    'goal_4' => 10,
                    'goal' => 100,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct121,
                    'name' => 'Porcentaje (%)  de avance del plan  de optimización  de la Infraestructura tecnológica.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct122,
                    'name' => 'Porcentaje (%) de avance del Plan de Administración, soporte y asistencia  en la operación de infraestructura tecnológica.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct123,
                    'name' => 'Número de aplicativos  implementados. ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity123 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct124,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct125,
                    'name' => 'Porcentaje de proyectos viabilizados y registrados',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct126,
                    'name' => 'Estudios Técnicos y Diseños elaborados',
                    'goal_1' => 16,
                    'goal_2' => 25,
                    'goal_3' => 11,
                    'goal_4' => 10,
                    'goal' => 62,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct127,
                    'name' => 'Gestión de proyectos',
                    'goal_1' => 15,
                    'goal_2' => 25,
                    'goal_3' => 20,
                    'goal_4' => 14,
                    'goal' => 74,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct128,
                    'name' => 'Porcentaje (%) de avance del PLANEAR formulado.',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct129,
                    'name' => 'Porcentaje (%) de avance del PLANEAR seguimiento.',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 110,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct130,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity130 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct131,
                    'name' => 'Porcentaje de actualización y reporte de la información en el SIAC. (Res. 667/2016 -IMG.  26SIAC)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity131 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct132,
                    'name' => 'Porcentaje de cumplimiento del plan operativo de la gestión de la información espacial para la planificación territorial y ambiental',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity132 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct133,
                    'name' => 'Número de municipios con Sistemas Municipales para la Conservación (SIMAC) implementados',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity133 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct134,
                    'name' => 'ASIGNACIÓN PRESUPUESTAL ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity134 = DB::getPdo()->lastInsertId();
                    
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 100,
						'description' => '1. Socialización y asesoría a los 40 municipios de la jurisdicción en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de la gestión del riesgo y las determinantes ambientales para el ordenamiento territorial municipal.
					2. Socializar con los municipios la información derivada del Sistema de Información Geográfico SIG, relacionado con el conocimiento del estado del ambiente a nivel regional y local.
					3. Capacitar a los municipios en lo relacionado con el procedimiento de Concertación de los asuntos exclusivamente ambientales de los POT
					4. Concertación de los asuntos exclusivamente ambientales de los Planes de Ordenamiento Territorial y Planes Parciales
					La Corporación tiene en su jurisdicción 40 Planes de Ordenamiento Territorial (POT, PBOT y EOT), de los cuales 14 vencieron sus plazos en el año 2011; y 23 se vencieron el 31 de diciembre de 2015 y 3 tienen vigencia hasta diciembre del 2019.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 100,
						'description' => '41 Entes territoriales efectivamente asesorados
					1. Asesorar a los municipios en la incorporación de las medidas de mitigación de gases de efecto inverandero y de adaptación al cambio climático en el proceso de formulación de los Planes de Desarrollo departamental y municipales y en los Planes de Ordenamiento Territorial.
					2. Fortalecimiento del Sistema de Alertas Tempranas y socialización de resultados con los Entes Territoriales
					3. Apoyar el fortalecimiento de los sistemas de información que permitan generar conocimiento del cambio climático y sus efectos a nivel regional y local
					4. Realizar eventos de capacitación a las comunidades en las medidas de adaptación al cambio climático ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 83,
						'description' => 'Desarrollo de acciones de conocimiento, reducción y manejo de  riesgo de desastres de competencia de la corporación. Se adelantó el Convenio Interadministrativo No.009 del 2016 entre Corponor y el municipio de Santiago, y se ejecutó el respectivo contrato de prestación de servicios para la adquisición de la Ortofoto del área urbana de Santiago y sus alrededores, lo anterior para la evaluación de las amenazas naturales (fenómeno de remoción en masa)  del municipio. ',
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
						'value' => 33.55,
						'description' => 'POMCA ZULIA: 
					Programado 15%
					Ejecutado:
					*Etapa Aprestamiento 11,75%
					*Etapa Diagnostico         9,31%
					Total ejecutado    21,06% 

					POMCA ALGODONAL 
					Programado 15%
					Ejecutado: 
					*Etapa Aprestamiento 11,75%
					*Etapa Diagnostico         0,75%
					Total ejecutado    12,49% 

					21,06% + 12,49% =33,55%',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 100,
						'description' => 'Se ejecutaron acciones dentro de los procesos de ejecución de las cuencas de los ríos Pamplonita y Zulia. De la siguiente manera: 
					Pamplonita: Instalación, configuración y puesta en marcha de estaciones hidrológicas e hidrometeoro lógicas y de calidad del agua para el monitoreo continuo y en tiempo real del rio pamplonita en el departamento Norte de Santander.  
					Zulia: Aislamiento de bosque natural en los municipios de Durania y Salazar de Las Palmas
					Algodonal. Reglamentación de corrientes hídricas.  Quebrada El Tabaco en el Municipio de Abrego ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>1,
						'value' => 75,
						'description' => '1. Parte Media del Río Pamplonita
					2. Chiracoca
					3. El Tabaco
					4. Quebrada La Colonia y Quebrada Tescua (se considera pertinente una   verificación técnica de la información de algunos usuarios, con el fin de proyectar la resolución general de reglamentación)',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 0.45,
						'description' => 'La Corporación junto con otros actores, como lo es la Gobernación de Norte de Santander en el sector público, Asozulia y Aguas Kapital en el sector privado, la proyección de emprender proyectos con visión prospectiva que busquen el desarrollo del departamento mediante su implementación.
					Es así como se logró la firma de un Acuerdo de Voluntades para la financiación de los Estudios de Embalse del Cínera y la agrupación de entidades para lograr a futuro la Alianza Biocuenca, en relación con la planeación del uso y manejo sostenible de sus cuencas, de manera que se consiga mantener o restablecer un adecuado equilibrio entre el aprovechamiento económico de tales recursos y la conservación de la estructura físico-biótica, particularmente de sus recursos hídricos.
					Estas iniciativas impulsadas por la Corporación buscarán su materialización en el año 2017 una vez se definan los aportes de las entidades convocadas, puesto que CORPONOR ya hizo público el monto de sus aportes. 
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 1,
						'description' => 'En la vigencia 2016 se dio inicio a la revisión de la información existente, elaboración del instructivo para la evaluación de indicadores equivalente al 1% en avance,  y continuar con generación del marco conceptual para la vigencia 2017. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 1,
						'description' => 'Este cumplimiento corresponde a la vigencia 2015.  La evaluación de cumplimiento se realiza de manera anual. Nota aclaratoria: se mantiene constante dado a que la evaluación se realiza una vez terminada la vigencia. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 5,
						'description' => 'Durante la vigencia 2016 se ha avanzado en la recopilación de información temática existente y relevante (geológica, hidrológica, hidrometeorológica, geofísica, hidroquímica, pruebas de bombeo, socio económica etc.),   relacionada al área de estudio:   municipios de Cúcuta, Villa del Rosario, Los Patios, Tibú y Puerto Santander, así como en la  consolidación en la base de datos hidrológica e hidrogeológica  del inventario de puntos de agua (pozos, aljibes, manantiales) en el departamento Norte de Santander. Equivalente su ejecución al 5%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 10,
						'description' => 'Según el mapa de cobertura vegetal (Corine Land Cover) del POMCA Río Pamplonita - SIA - Corponor (63.477 Has)
					Según los EOT de los municipios de Bucarasica y Gramalote se completa la meta correspondiente a la actualización de la cartografía (17.523 has)
					Total: 81.000 has.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 10,
						'description' => 'Se definieron 10 parcelas de muestreo 50*20m:
					San Cayetano (2)  Durania (1) Bochalema (2) Sardinata (1) El Zulia (1) Cúcuta (1) Chitagá (2)',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 100,
						'description' => '1. Formular el plan de manejo ambiental de los humedales previamente identificados por Corponor en el Municipio de Tibú, parte baja de la cuenca del río Catatumbo.
					2. Implementar estrategia de educación ambiental orientada a la participación comunitaria en la protección y conservación de humedales y especies de fauna silvestre amenazadas, especialmente el caimán aguja en la parte baja de la cuenca del río Catatumbo.',
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
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 50,
						'description' => 'La meta corresponde a la Elaboración de zonificación para la determinación de regimen de usos del páramo de Santurbán, la cual se encuentra en formulación.  ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia28 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 50,
						'description' => 'La programación para el Cuatrenio fue de 4 áreas protegidas con planes de manejo en ejecución:   Se programaron 2 para la vigencia 2016: equivalente al 50%
					1. Parque Natural Regional Sisavita – Cucutilla (Plan de manejo)
					2. Parque Natural Regional Salazar - (Plan de manejo)
					3. Parque Natural Regional Mutiscua Pamplona
					4. Parque Natural Regional Arboledas (Plan de manejo)
					5. Reserva Forestal Protectora El Bojoso (Gramalote – El Zulia – Santiago
					Durante la vigencia 2016 se declara por la Corporación la RFP El Bojoso, con lo que se tienen un total de 5 áreas protegidas con planes de manejo para la vigencia 2017',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 29.88,
						'description' => 'Parque Natural Regional Mutiscua-Pamplona  - 9389 Ha.
					Parque Natural Regional Mutiscua-Arboledas - 21870 Ha.
					Reserva Forestal Protectora El Bojoso - 1582 Ha.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 683.05,
						'description' => 'Convenio 011 de 2015. Ubicadas en la vereda monteadentro. Predio Las Villas.  25.7 Has. Esta meta no fue reportada el año 2015 por cuanto el registro de la misma se dio en el 2016. 

					Convenio N°026 de 2016 -Adquisición y el mantenimiento de las áreas estratégicas como áreas de conservación de fuentes hídricas abastecedoras de acueductos en la jurisdicción del departamento Norte de Santander.  Predios: 
					1. Mesitas,Vereda Batatal (Salazar)- 98.35 has.
					2. La Sabana - Vereda La Ensillada  (Salazar) - 120 has.
					3. Vega de Osos, Vereda  Helechal Alto (Arboledas). 464.7 has.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>1,
						'value' => 61.33,
						'description' => 'Se realizo la ejecución del 100%  del  contrato de obra. Con la implantación total de 7.18 kilómetros de aislamiento se protegieron 61.33 Has en bosques naturales en las microcuencas aportantes al Río Zulia, en los Municipios de Durania y Salazar, Departamento Norte de Santander, que garantizaran la sostenibilidad a la cobertura vegetal a través del tiempo áreas de recargas hídricas de gran importancia. 

					Implantación de kilómetros de aislamiento de bosque natural en las microcuencas aportantes al río pamplonita, en los municipios de Chinácota, Herrán y Ragonvalia, departamento Norte de Santander',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia32 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 0.25,
						'description' => 'Durante el Cuarto trimestre se logro la formulación del proyecto de valorización de servicios ecosistemicos para Microcuenca La Amarilla en el municipio de Salazar de las Palmas. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 25,
						'description' => 'Por Convenio CENS-CORPONOR se tienen con Pagos de Servicios Ambientales -PSA a 25 familias',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 2,
						'description' => 'Se gestionó la implementación del SIMAC de Cucutilla y se retomó el SIMAC de Salazar de las Palmas. Ambos están adoptados legalmente y en funcionamiento técnico. Pero igual se acompañan hasta finalizar el año.
					Meta cumplida en el segundo trimestre del año 2016',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 1.37,
						'description' => '1. Se realizó las actividades agronómicas de preparación de terreno, el establecimiento de 1 ha de aguacate, y 5500 colinos de Piña Golden. Avance 90%
					2. Mantenimiento a 3,000 Frutales, 4,000 Plantas de Piña,  Avance 45%

					Queda pendiente el seguimiento a los proyectos establecidos.',
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
						'value' => 7,
						'description' => 'A la fecha se han desarrollado actividades de diagnóstico del hogar de paso; mediante realización de visitas, rediseño de planos para la transformación a CAV, diagnóstico y revisión de infraestructura existente y diseño de mejoras requeridas a las normas vigentes. Equivalente a una ejecución de un 7%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 865,
						'description' => 'Se recibieron en el centro 554 ejemplares de fauna productos del decomiso, entregas voluntarias y rescate.
					Se realizó la liberación de 282 ejemplares de fauna silvestre recuperados  que se encontraban aptos para ser reintroducidos en áreas protegidas 
					Total protegidos 865 ejemplares',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 50,
						'description' => '1. Dentro del inventario de la estación hogar de paso se encuentran dos ejemplares de puma (especie vulnerable), producto generado del conflicto de felinos-seres humanos.
					2. La Corporación cuenta dentro de su inventario faunístico 1 ejmeplar de Pauxi pauxi - paujil copete de piedra (especie en peligro)
					3. Venado  (especie en peligro crítico). En el inventario de la Corporación se cuenta con tres individuos ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizó control, seguimiento y monitoreo a las especies invasoras  priorizadas como el caracol de jardín (Helix aspersa) y  el caracol africano gigante (Achantina fulica) en los municipios reportados por la comunidad debido a la presencia de las especies. Estas visitas compredieron los municipios de Pamplona, Ocaña, Cúcuta, Villa del Rosario, Los Patios, El Zulia, Sardinata.

					• Se realizaron jornadas de capacitación y sensibilización sobre la identificación, control y manejo ambiental de las especies de caracol en los municipios de Pamplona, Ocaña, Cúcuta, Villa del Rosario, Los Patios, El Zulia, Sardinata.',
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
						'value' => 64,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					El total de licencias ambientales otorgadas a diciembre 2015 por CORPONOR son 328, para el 2016 se proyectó el seguimiento de 131 lográndose el seguimiento de 145 lo que equivale a un cumplimiento del 100%',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>1,
						'value' => 191.7,
						'description' => 'Licencias ambientales: otorgamiento de 3 licencias con promedio de 145 días',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 100,
						'description' => 'Programas de Uso Eficiente y Ahorro del Agua (PUEAA) aprobados por la Corporación: 
					1. Acuapatios  2. Municipio de Villacaro
					3. Municipio de Salazar  4. Estación de Servicio Bucaramanga   5. Lavadero Autofull  6. Acueducto Astilleros. 6. Acuapatios',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 2.29,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					Numero de procesos aperturados a vigencia 2016:   1.487 procesos, de los cuales en lo corrido del año 2016 se fallaron 34 equivalente al 2.29%',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 36,
						'description' => 'Los municipios asesorados en su función de control y vigilancia en esta vigencia fueron: Ocaña, Abrego, Convención, La Esperanza, Cáchira, El Carmen, San Calixto, Teorema, Playa de Belén, Pamplona, Cacota, Pamplonita, Toledo Mutiscua, Silos, Cucutilla, Chitagá, Tibú, Tarra, Cúcuta, Durania, Villa del Rosario, Salazar, Villa caro, Los patios, Bucarasica, Bochalema, Ragonvalia, Herrán, Puerto Santander, Sardinata, Chinácota, San Cayetano.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia61 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 1,
						'description' => 'Convenio N°5 de 2016, (Corponor - Minister de Minas y Energía)
					Se realizó la caracterización técnica, ambiental y social de las unidades de producción minera existentes en los municipios de Cúcuta, El Zulia, Sardinata y Toledo en un plazo de seis meses.
					El proceso de caracterización se contó con un equipo de 4 grupos que laboraron en el periodo de 02 de agosto al 02 de diciembre 2016 y un segundo equipo de 5 grupos que ingreso en el periodo do de 01 de noviembre al 15 de diciembre de 2016, estos grupos de trabajo conformados para el desarrollo de la caracterización están conformados por ingenieros ambientales, ingenieros de minas, abogados, administradores y psicólogos. 
					Se realizaron 553 operativos donde se logró caracterizar las siguientes Unidades de Producción Minera.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 1,
						'description' => 'Convenio N°71 de 2016. (Corponor y Gobernación de Norte de Santander)
					En la ejecución se conformaron tres grupos permanentes de control de transporte de minerales en la entrada a Urimaco (Municipio de Cúcuta), la Estación de Policía Betania (Municipio de los Patios) y el puente del río Zulia (Municipio del Zulia), se realizaron 60 visitas y seguimiento a licencias ambientales, se capacitaron 29 municipios del departamento logrando dar cumplimiento total al convenio. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
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
						'value' => 100,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					Se han asesorado 40 Municipios en la implementación de estrategias de educación ambiental.  42 PRAE  - 30 PROCEDAS
					Cofinanciación con 14 alcaldías: Lourdes, Salazar, Herrán, San Calixto, La Esperanza, Convención, Abrego, Cácota, Chitagá, Sardinata,  El Carmen, Toledo, Teorama, Cáchira',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 1,
						'description' => 'Realización de las siguientes acciones:
					1. Actividades de comunicación interna (campañas de sensibilización, boletines, etc.)
					2. Actividades de comunicación externa (comunicados de prensa, ruedas de prensa, tour de medios)
					3. Relación con medios (informes especiales, corponor en las comunidades, rendición de cuentas, celebración de fechas ambientales)
					4. Medios propios de comunicación (radio, Televisión y redes sociales)',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 11,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.1. El Agua Soy Yo – Cúcuta
					2. El Agua Soy Yo - Ocaña
					3. Colombia Magia Salvaje
					4. Día de la tierra
					5. Día del Reciclaje
					6. Feria Internacional del medio ambiente FIMA
					7. Embellecimiento Parques de Cúcuta
					8. Capa de Ozono 
					9. Fenómeno Niña
					10. Día del Árbol
					11. Navidades Ecológicas',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 0.7,
						'description' => 'Durante la vigencia se avanzó:
					1. Establecimiento del objetivo de la encuesta
					2. Determinación de la población o universo a estudiar
					3. Identificación de la información a recolectar
					4. Diseño del cuestionario
					5. Cálculo de la muestra
					6. Recolección de la información
					Para la vigencia 2017, se realizará la  contabilización y procesamiento de la información y  Análisis de la información.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>1,
						'value' => 100,
						'description' => 'Asociación Colombiana de Porcicultores
					Acuerdos de Voluntades con la Fundación Bioentorno
					Sector Agropecuario
					Sector Industrial  - Arcilla

					1. Realizar el seguimiento al Cumplimiento de los compromisos definidos en los convenios de producción más limpia y/o agendas ambientales suscritos por la Corporación con sectores productivos: porcícola, avícola, ganadero y hortifrutícula.
					2. Programar y ejecutar  eventos de capacitación en Producción Más  Limpia y Cambio Climático',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 1,
						'description' => '1 Proyecto: Modelo de ganadería sostenible - sistema silvopastoril intensivo. Municipio de Gramalote y Salazar

					2 Proyecto: Estufas reguladoreas de humo:  Se firmó el Convenio Interadministrativo No. No. 2468 – 01-11-2016, suscrito entre la Alcaldía de San José de Cúcuta y CORPONOR, para aunar esfuerzos en la construcción de estufas reguladoras de humo en el municipio de San José de Cúcuta, como apoyo a la gestión para la producción más limpia y adaptación  a la vulnerabilidad climática en los sectores productivos del departamento Norte de Santander, el cual queda pendiente de ejecución para el año 2017.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia78 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 23,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 016.

					20  talleres de socializacion del PRNVI
					13 Empresas con criterios de negocios verdes aplicados y con plan de mejoramiento formulados.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>1,
						'value' => 2,
						'description' => '1. Sistema de costos de producción para el proceso productivo de la mora en la cooperativa COAGRONVALIA del municipio de Ragonvalia

					2. Adquisición de material vegetal de Cítricos (Naranja Valenciana)para el establecimiento de plantaciones, enmarcadas en los proyectos de negocios verdes y proyectos productivos sostenibles como acciones ambientales en el Municipio de Bochalema, Departamento Norte de Santander',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 100,
						'description' => '1. Guia ambiental para la producción ganadera  el predio La Fortuna San Miguel  en la Vereda Villa Nueva, Municipio Gramalote
					2. Reactivacion de una plantuladora de hortaliza para (ASOAGRIMUTIS) en el municipio de Mutiscua',
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
						'activity_id' => $idactivity84,
						'year' =>1,
						'value' => 83,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					1.  Asesorar a los entes territoriales en planificación y ordenamiento ambiental en áreas urbana.
					2. Asesorar en Gestión ambiental del Riesgo en áreas urbanas a los entes territoriales
					3. Proyecto   criterios ambientales para el diseño y construcción de vivienda urbana  
					4. Prevenir y Controlar la Contaminación del Aire en áreas urbanas (fenómeno de acumulación o concentración de contaminantes en el aire generado por diferentes tipos entre ellos contaminantes criterio, ruido y olores ofensivos)
					5. Gestionar y promover el uso eficiente del Recurso Hídrico en áreas urbanas
					6. Gestionar y promover el aprovechamiento de Residuos sólidos en áreas urbanas
					7. Índice de calidad ambiental urbana',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realizó una identificación que ha permitido establecer el nivel de cumplimiento del mandato normativo y conocer el estado de formulación y adopción, así como la implementación en los aspectos de aprovechamiento con el seguimiento a 20 municipios, de los 26 que cuentan con decreto municipal de adopción de PGIRS, y a la disposición final de los residuos sólidos del servicio de aseo de los 40 municipios.
					Municipios con seguimiento: Abrego, Arboledas, Bochalema, Cáchira, Cácota, Durania, El Carmen, El Zulia, Herrán, La Esperanza, La Playa De Belén, Los Patios, Pamplona, Pamplonita, Salazar De Las Palmas, San Calixto, San Cayetano, Teorama, Villa Caro, Villa Del Rosario.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>1,
						'value' => 26,
						'description' => 'Se llevó a cabo una depuración de las bases de datos, las revisión, validación y transmisión de la información reportada por los usuarios de los RESPEL, RUA, PCB y RH1, en coordinación y apoyo del IDEAM, lo cual lleva a tener actualizada la información de registros y al establecimiento de una acción de seguimiento para la validación de la información declarada en el año 2017.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 97.5,
						'description' => 'Nuevo indicador según Acuerdo 11 de 13 sept. 2016.

					La disposición final de residuos sólidos de Norte de Santander se concentra en cuatro (4) rellenos sanitarios de carácter regional en este territorio y uno (1) en el Departamento del Cesar, así mismo se reciben los residuos de dos (2) municipios de este último departamento  y uno de Santander, logrando una disposición final adecuada de 320.244 toneladas en el año. 

					En el año 2016, de los 40 municipios que se encuentran en la jurisdicción de la Corporación, 39 dispusieron adecuadamente sus residuos sólidos provenientes del servicio público de aseo, en rellenos sanitarios ambientalmente autorizados, es decir que el 97,5% de los municipios del Departamento Norte de Santander, manteniendo el máximo índice porcentual de cumplimiento municipal en los últimos años y en el marco del Proyecto de Disposición Final de PGIRS',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>1,
						'value' => 100,
						'description' => 'El Sistema de Vigilancia de la Calidad del Aire que se encuentra instalado en los municipios de Cúcuta y Ocaña',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>1,
						'value' => 100,
						'description' => 'El Sistema de Vigilancia de la Calidad del Aire  que se encuentra instalado en los municipios de Cúcuta y Ocaña',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>1,
						'value' => 81,
						'description' => '1.     Corponor se articula con los Entes Territoriales, mediante Agendas municipales y con demas actores SINA
					2.     Corponor se articula con el Ministerio de Ambiente,  Parques Nacionales, los Institutos de Investigación (IDEAM e IAVH) y  los demás actores del SINA del orden nacional
					3.     Corponor se articula con los sectores productivos para la gestión ambiental: Agendas sectoriales
					4.     CORPONOR se articula con los medios de comunicación.
					5.     Corponor se articula con la institucionalidad pública y las comunidades para el apoyo del pos-conflicto.
					6.     Apoyo a la creación del Fondo del Agua (Alianza Biocuenca)
					7.     Corponor se articula con la Cooperación Técnica Internacional, con GIZ a través de  programas: PROMAC, PRODES, OTROS',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>1,
						'value' => 53.3,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					Se tenían programados 8 puntos de monitoreo de las cuales se ejecutaron 8 acciones de monitoreo:
					1. Monitoreo Quebrada El Rosal-Bocatoma El Rosal
					2. Monitoreo Quebrada Monteadentro-Estacion Limnimetrica Acueducto Pamplona
					3. Radio F.M
					4. Estación Escuela Los Naranjos
					5. Sector El Diamante
					6. Quebrada Iscala, Estación de control Ecopetrol
					7. Quebrada Iscala, Estación Puente Vargas
					8. Quebrada Chiracoca, Estación Hidrometereologica

					A finales de septiembre se inicio el monitoreo, el cual fue suspendido a finales de octubre debido a la epoca de invierno presentada hasta la fecha. Es de anotar que en estas condiciones no se puede realizar el monitoro debido a la no  representatividad  de las muestras y a sus interferencias para realizar los análisis.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>1,
						'value' => 100,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016

					1.  Elaboración o actualización de documentos del laboratorio
					2.  Ejecución de Confirmacion de métodos analíticos 
					3. Ejecución de auditorias Internas y del IDEAM ( 1 auditoria Interna  y 1 auditoria del IDEAM)',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>1,
						'value' => 48.5,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					Para hacer seguimiento a la renta por vertimientos,  se estableció el indicador: Total de recursos recaudados,  con referencia al total de recursos facturados por concepto de tasa retributiva. Así mismo se colocó como meta para la vigencia 2016, el 20% de recaudo  del total facturado en la vigencia, logrando un recaudo acumulado del 48.54%; concluyendo que se cumplió la meta en un 100%.

					Facturado $3.452.259.531 
					Recaudaddo $1.675.710.742.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>1,
						'value' => 89.9,
						'description' => 'La meta propuesta para la vigencia 2016 fue recaudar el 80%,   logrando llegar al 90%,               (Valor Recaudado $1.250.678.086.00/ Valor Facturado $1.391.463.915.00 = 0.90), ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>1,
						'value' => 18.3,
						'description' => 'Se propuso como meta para la vigencia 2016, lograr un recaudo por coactivo del 20%  de la cartera de vigencias anteriores; obteniendo como resultado el 18.35% (Recaudo por Cobro Coactivo Vigencias Anteriores $1.751.935.551.00 /  Valor Cartera Vigencias Anteriores $9.548.511.824 = 0.18). ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>1,
						'value' => 39,
						'description' => 'El apoyo y seguimiento para la gestión del cobro del impuesto predial y la sobretasa ambiental  fue suministrado a 39 de los 40 municipios del Departamento Norte de Santander',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>1,
						'value' => 17,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					Las auditorías realizadas al recaudo y transferencia de la sobretasa ambiental, se aplicaron a las vigencias 2011 al 2015, a los Municipios de San José de Cúcuta, Pamplona, Villa del Rosario, Los Patios, San Cayetano, El Zulia, Chinácota, Durania, Salazar de las Palmas, Sardinata, Tibú, La Esperanza, Cáchira, Bochalema, Abrego y Ocaña. 

					Al Municipio de Ocaña se le auditaron  las vigencias 2014 y 2015; las vigencias 2011,2012 y 2013,  quedaron sin auditar por información pendiente por parte del ente territorial; situación que será resuelta en la vigencia 2017. Con el propósito de dar cumplimiento a la meta trazada, adicionalmente se auditó el Municipio de Puerto Santander, cumpliendo  con 17 municipios auditados, de los 15 propuestos como meta.  ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>1,
						'value' => 88,
						'description' => 'En cumplimento de las metas establecidas del Plan Acción Institucional 2016-2019, de acuerdo a la estructura de 8 programas y 26 proyectos de inversión, como resultado del ejercicio la gestión de la presente administración ““Hacia Un Norte ambientalmente sostenible… ¡Todos por el Agua!”, permitió una ejecución del 88% durante la vigencia 2016',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>1,
						'value' => 95,
						'description' => 'Se avanzó en las acciones establecidas en cada uno de los componentes del Plan .',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>1,
						'value' => 25,
						'description' => 'Ajuste del manual de funciones mediante Resolución No 483 del 19 de septiembre de 2016, conforme a la normatividad vigente y a los procedimientos establecidos en el sistema de gestión',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>1,
						'value' => 1,
						'description' => 'Mantener el sistema de gestión integral HSEQ (gestión de la calidad, gestión ambiental, gestión de la seguridad y salud en el trabajo)

					El Sistema de Gestión Integral HSEQ implementado por la Corporación bajo los lineamientos de las Normas NTC-ISO 9001:2008, NTC-GP 1000:2009 de Gestión de la Calidad, NTC-ISO 14001:2004 de Gestión Ambiental y NTC-OHSAS 18001:2007 Gestión en Seguridad y Salud Ocupacional, articulado al modelo estándar de control interno MECI-2014 ha sido implementado, mantenido y re-certificado durante la vigencia 2016.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>1,
						'value' => 100,
						'description' => 'Dotación de aires acondicionados en la sede principal y Territorial Ocaña
					Dotación de impresoras y equipos de cómputo en la sede principal',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>1,
						'value' => 90,
						'description' => 'Mantenimiento preventivo y correctivo (vehículos, impresoras, motobombas, puerta de vidrío, fumigación)
					Reparación sanitaria Territorial Pamplona
					Pintura de oficinas en la Sede Principal',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>1,
						'value' => 41,
						'description' => 'Verificación de cumplimiento en los Ejes temáticos: TIC servicios, TIC gobierno abierto, TIC gestión y seguridad y privacidad de la información.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>1,
						'value' => 91,
						'description' => 'Se realizan acciones de mejora en la infraestructura tecnológica',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>1,
						'value' => 95,
						'description' => 'Se ha cumplido con la asistencia y soporte permanente de las herramientas existentes con el fin de mantenerlas en adecuado funcionamiento.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>1,
						'value' => 1,
						'description' => 'Nombre aplicativo: consulta CID a través de apps para móvil',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>1,
						'value' => 100,
						'description' => 'Asesoría y apoyo en la identificación de necesidades internas de la entidad
					Recepción, registro  y elaboración de ficha de los proyectos del Plan de Acción Institucional
					Viabilización del proyecto',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>1,
						'value' => 15,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>1,
						'value' => 18,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.

					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity128,
						'year' =>1,
						'value' => 100,
						'description' => 'Acuerdo N°23 del 21 de diciembre de 2016. Consejo Directivo Corponor. Por el cual se aprueba el PLANEAR  2016-2035 para el departamento Norte de Santander.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity131,
						'year' =>1,
						'value' => 59,
						'description' => 'Meta ajustada según Acuerdo 11 de 13 sept. 2016.
					1. SISAIRE -  2. SNIF - 3. SIRH  - 4. SIUR -RUA
					5. RESPEL
					Datos incorporados al SIRH, de Permisos de Concesión de Aguas Superficial.  Sin validación por parte del DEAM.
					Estos registros corresponden a la  información del periodo de balance 2015 y reportada por los usuarios RESPEL y RUA, que se validó y transmitió por la Corporación dentro de las fechas fijadas por norma (julio de 2016) al IDEAM.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity132,
						'year' =>1,
						'value' => 95,
						'description' => '1. Elaboración y apoyo cartográfico a los determinantes ambientales
					2. Apoyo a procesos de Planificación y Ordenamiento Territorial (POT´s y POMCAS) 
					3. Para fortalecer la Gestión del Recurso Hídrico
					4. Sistema de Información Ambiental',
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
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 100,
						'description' => '40 Municipios asesorados o asistidos 
					Se adelantaron talleres regionales y locales en los municipios de acuerdo a la agenda concertada. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 100,
						'description' => '41 entes territoriales (40 municipios y la Gobernación)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 100,
						'description' => 'Se realizó capacitación con el Personal del Cuerpo de Bomberos del Municipio de Cúcuta, Ocaña y Tibú en la prevención, atención y control de incendios forestales, igualmente se capacitó al personal del recién fundado Cuerpo de Bomberos del Municipio de Abrego, ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 55.36,
						'description' => 'En los procesos de actualizacion y ajuste de los POMCAS rio zulia y Algodonal   se logró solo un avance respecto a la meta programada  de (55,36% ) ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 100,
						'description' => '1.Implantación  de kilómetros de aislamiento de bosques natural en las microcuencas aportantes  al río Pamplonita , en los municipios de Chinácota, Herrán Y Ragonvalia Departamento Norte de Santander  

					2. Reactivación de la Alianza Biocuenca, como estrategia para la conservación de las cuencas hidrograficas de los ríos Zulia y Pamplonita.

					3. Observatorio de educación y participacion. Sector La Tagua Parte alta y media. 
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 80,
						'description' => 'QUEBRADA LA  HONDA (80 %)

					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 30,
						'description' => 'SE crea y organiza el grupo interno de trabajo denominado “Grupo de reglamentación y evaluación del recurso hídrico”. 

					Como área de estudio para la priorización del cuerpo de gua objeto del plan de ordenamiento de recurso hídrico, se seleccionó la subzona hidrográfica del río Pamplonita.
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 1,
						'description' => '“Construcción de reservorios para el almacenamiento de agua de escorrentía, en el municipio de Abrego, departamento Norte de Santander”, por valor de treinta y nueve millones novecientos setenta y ocho mil setecientos sesenta y seis ($ 39’978.766), mediante el cual se emplearon 120horas máquina para la construcción de nueve (9) reservorios que benefician al mismo número de familias. 
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 10,
						'description' => 'Acuerdo N°11 del 13/sept de 2016',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 100,
						'description' => '  El informe fue presentado en febrero ante Consejo Directivo.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 30,
						'description' => 'Revision, analisis y consolidacion de la informacion no registrada en el SIA de Corponor (Totalidad de Datos e informacion consiganada en las diversas resoluciones sobre la concesion hecha: profundiad de poso ancho, nivel freatico, resultados prueba de bombeo, Ect) y debidamente asociada a una georeferenciacion; 
					 
					Determinacón teorica a partir de datos secundarios de la posible oferta y demanda de agua subterranea en el Municipio de Villa edl Rosario.  

					Hidrogeomorfologia de las 20 sub cuencas del rio Pamplonita.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 1,
						'description' => 'Construcción de la prolongación del interceptor occidental.  Fase II.  Municipio De Chinácota.  Norte De Santander',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 7,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 28,
						'description' => 'Se realizó corte de cobertura vegetal municipio por municipio de los Planes de Ordenación de Cuencas Hidrográficas de la Cuencas del Río Zulia y Agodonal, resta el acto administrativo de aprobación por parte de la Corporación  ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 20,
						'description' => 'Restablecimiento de veinte (20) parcelas de medición forestal establecidas en los municipios de Arboledas, Cucutilla,  Salazar,Ocaña y TeoramaAbrego y Teorama.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 100,
						'description' => 'Implementación del plan de manejo ambiental y una segunda etapa orientada a la sensibilización de la comunidad  en la temáticas de los humedales caracterizados y las especies que forman parte de estos hábitats

					Se estableció la señalización de 15 humedales para la zona del Catatumbo
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 100,
						'description' => 'En el tercer trimestre de 2017, más exactamente en el mes de julio se finalizó la formulación del plan de manejo de la  Reserva Forestal Protectora el Bojoso y este fue presentado en el Consejo directivo del día 29 de agosto de 2017.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 100,
						'description' => 'Se llega al 100 % con la aprobación del PMA de la Reserva Forestal Protectora el Bojoso en Consejo directivo del día 18 de diciembre ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 20.5,
						'description' => 'Acuerdo N°020 de diciembre 18 de 2017.   Por el cual se ajuste el Plan de Acción Insitucinal 2016-2019
					La meta programada equivale a 27.138 Ha., la cual corresponde a las siguientes áreas:
					1. Parque Natural Regional Mejué - 10.706 Ha.
					2. Distrito de Manejo Integrado Bosque Seco Sur – 16.432 Ha.
					Se solicita la modificación de la meta, teniendo en cuenta que si bien se completó el documento técnico de la declaratoria para concepto del Instituto Alexander Von Humboldt, aún no se culminado la debida socialización y concertación de la propuesta con las comunidades del área. 
					La propuesta del PNR Mejué, tiene dificultades para avanzar en el proceso por la incertidumbre de la composición predial en el municipio de Toledo, ya que en el predio de propiedad de Parques Nacionales Naturales que corresponde a cerca del 50% del área a declarar, se encuentran materialmente ocupados por personas que alegan tener posesión sobre el mismo.
					Y con relación a la declaratoria del área Bosque Seco Sur se ha dificultado el acceso a la comunidad por problemáticas asociadas al uso del agua y que actualmente no están resueltas.  Durante el proceso de declaratoria se logró una importante estrategia de conservación con el sector minero que comprende la declaratoria del área protegida con áreas de uso productivo con acuerdo de conservación.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 504.9,
						'description' => 'Municipio de Arboledas con la adquisición del predio Barranquilla con un total de 136 hectáreas y seis mil metros cuadrados 136 Has y 6.000 Mts2, ubicado dentro del Parque Natural Regional Santurbán Arboledas,  

					Municipio de Salazar de las Palmas se adquirieron los predios San Lorenzo con un área de  38,55 Has y Buenos Aires con un área de 82,5 Has ubicados dentro del parque natural Regional Santurbán Salazar y en su área amortiguadora  

					Dentro de la Reserva Natural Temporal Mejué en jurisdicción del municipio de Toledo se adquirieron los predios Agua Blanca y Monterrey con un área de doscientos cuarenta y siete hectáreas y dos mil quinientos metros cuadrados (247,25 Has)     

					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 723.09,
						'description' => 'Implantación de 65,5 kilómetros de aislamiento se protegieron 723,09 Has en bosques naturales en las microcuencas aportantes al Río Pamplonita en los Municipios de Chinácota, Herrán y Ragonvalia y en las microcuencas aportantes al Río Zulia en los Municipios de Durania, Arboledas, Salazar, Cúcuta y Cucutilla, en la cuenca del Rio Algodonal en las microcuencas Las Guamas y La Tenería del Departamento Norte de Santander
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 0.5,
						'description' => 'Durante la vigencia 2017 y de acuerdo con la metodología de valoración planteada en el 2016 se avanzó en el diseño del formato de encuesta para el desarrollo de la valoración por método de valor residual del agua destinada al riego y de la valoración por método de valoración contingente. Igualmente se dio capacitación a técnicos de campo para aplicación de encuestas al inicio de la vigencia 2018, quienes han estado trabajando en el manejo de la zona de Amortiguación del PNR Santurbán Salazar de las Palmas. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 44,
						'description' => 'A finales de agosto se realizó primer pago a una familia con recursos del Grupo Éxito. Las 43 familias que reciben recursos de CENS recibieron sus pagos hasta el mes de octubre. El mes de Noviembre y Diciembre será cancelado a principios de enereo , debido esto a cuestiones de trámite de informes técnicos y facturación. 
					Asi las cosas, se termina el año con 43 familias beneficiarias de CENS y 1 beneficiaria del Grupo éxito para un total de 44 familias. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 1,
						'description' => 'Apoyo y seguimiento a los Sistemas Municipales para la Conservación en los municipios de Salazar de las Palmas y de Cucutilla. Por otra parte se inició la operación del SIMAC de Arboledas con la contratación y capacitación del técnico encargado',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 25.33,
						'description' => 'Implantación de kilómetros de aislamiento se protegieron 38 Has en áreas de ecosistemas en restauración, rehabilitación y reforestación en las microcuencas aportantes al Río Pamplonita en los Municipios de Chinácota, Herrán y Ragonvalia y en las microcuencas aportantes al Río Zulia en los Municipios de Durania, Arboledas, Salazar, Cúcuta y Cucutilla, en la cuenca del Rio Algodonal en las microcuencas Las Guamas y La Tenería del Departamento Norte de Santander
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 2,
						'description' => '1. Mantenimiento de 15500 plantas de piña y 550 arboles de aguacate y establecimiento de nuevos cultivos de piña y arboles frutales de guanabana 
					2. Piña y Arboles frutales de guanabana ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 8,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 1201,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 50,
						'description' => '1. Dentro del inventario de la estación hogar de paso se encuentran dos ejemplares de puma (especie vulnerable), producto generado del conflicto de felinos-seres humanos.
					2. La Corporación cuenta dentro de su inventario faunístico 1 ejemplar de Caiman Aguja (especie en peligro crítico)
					3. Dentro del inventario de la estación hogar de paso se encuentran un ejemplar de Oso de Anteojo (especie Vulnerable). 
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 100,
						'description' => 'caracol africano
					caracol de jardín',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 1,
						'description' => 'Participación en mesas del Comité Educativo Ambiental promoviendo la importancias de las conservación y manejo de la biodiversidad.   Y presentando la tematica de Biodiversidad para ser incluida el plan de accion municipal: Municipio de Chinácota, Tibú y Durania',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 74.37,
						'description' => 'Número total  vigentes y aprobadas por la Corporación a 31/12/2016: 38
					Numero total con  seguimiento a diciembre:  36',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 106.3,
						'description' => 'Se han otorgado 245 concesiones con un tiempo promedio de 182 días',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 100,
						'description' => ' 3 Programas de Uso Eficiente y Ahorro del Agua (PUEAA) con seguimiento:
					1. Estación de Servicio Bucaramanga
					2. Lavadero Autofull
					3. Municipio de Salazar (acueducto)
					4. Termotasajero S.A. E.S.P.
					5. Municipio de Salazar
					6. Empresa Municipal de Servicios Públicos de Tibú EMTIBÚ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 0.83,
						'description' => 'Se realizó adición en recursos y tiempo al Convenio MinMinas. Fecha de terminación en junio de 2018',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 2.97,
						'description' => 'De los cuales en lo corrido del año 2017 se fallaron 64 equivalente al 2.97%',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 95.35,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 32,
						'description' => 'Capacitaciones y operativos en los municipios:  Arboledas, Cáchira, Cucutilla, Cúcuta, Chinácota, Chitagá. Durania, El Zulia, Los Patios, Puerto Santander, Rangonvalia, Salazar, San Cayetano, Villa Caro, Villa del Rosario, Chitagá, Mutiscua, Pamplona, Cácota,Abrego, Convención, El Carmen, Hacarí, La Esperanza, La Playa, Herrán. Ocaña, San Calixto, Teorama, Tibú.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 1,
						'description' => '1. Capacitacion en Normatividad Ambiental y Competencias  - Polilcia Nacional

					2. Capacitacion y Sensibilizacion de talas de bosque en areas de reserva las camelias y la reforma - Corponor Comunidad

					3. Seguimiento a coquizadoras en el area metropolitana de Cucuta - Corponor

					4. Reunion miembros del Comité de control y Vigilancia Ambiental

					5. Capacitacion normatividad ambiental y competencias

					6. Capacitaciòn en marco normativo forestal, burbujas ambientales de control a la deforestaciòn, protocolos y utilizaciòn de herramientas tecnològicas para el control al tràfico ilegal de madera.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 91.96,
						'description' => '1. 39 mucipios asesorados  en la implementacion de las estrategias de Educación en el marco del Plan quinquenal de Educacion Ambiental departamental a través del CIDEA-CEAM
					2. Cofinanciar 11 municipios de Norte de Santander para la formulación y ejecución de los planes municipales de educación ambiental a través de convenios.
					3. Acompañamiento e implementación de 46 PRAE a través de fornada pedagógicas
					4. Acompañamiento de 48 Proceda: Infantes, jóvenes, líderes comuntarios, comunidad de ginatos ROM y otros.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 1,
						'description' => 'Realizar el diagnóstico comunicacional (interno y externo) con el fin de establecer las debilidades, amenazas, riesgos, fortalezas y establecer las estrategias internas, externas y los planes de trabajo.      
					Establecer la estrategia interna y externa    (ruedas de prensa, tour de medios)
					Establecer la estrategia de acercamiento con los medios y medios propios.                                                                                                                                                                                ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 9,
						'description' => 'Campañas para la vigencia 2017:
					1. Día de la Educación ambiental
					2. Día del agua
					3. Día de la tierra
					4. Semana Santa: Cuidado y preservación de la palma de cera y el loro orejiamarillo
					5. Día mundial del medio ambiente
					6. Día de los humedales
					Por ejecutar 
					7. Navidades ecológicas
					8. Campañas lideradas por el Ministerio
					9. Pos-consumo. Campañas 
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 1,
						'description' => 'Participantes de la Audiencia Pública de Rendicion de Cuentas y Seguimiento al Plan de Acción 2017.
					Audiencia Pública: 25 abril de 2017',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 100,
						'description' => 'Porcícola
					Agricola
					Industrial
					Agropecuario',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 3.4,
						'description' => '1. Proyecto: Construcción de las 241 cocinas ecoeficientes, se esta recibiendo la obra fisica a satisfacción del beneficiario.
					2. Modelo de  Ganadería Sostenible – Sistemas Silvopastoriles intensivos Ssi
					3. Biodigestores. 40%
					4. Casetas de Almacenamiento Temporal de Envases de Plaguicidas',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 1,
						'description' => 'Se realizaron gestiones y reuniones con dos (2) empresas que trabajan en el tema de Energías Alternativas SUTIDECO y SEI ENERGY S.A.S. tecnologías amigables con el Medio Ambiente quienes trabajan en el montaje e instalación de paneles solares para conocer el manejo y las bondades ambientales de estos sistemas y su propuesta del montaje de esta tecnologías con el sector industrial en el Departamento Norte de Santander y en las instalaciones del parque sede de Corponor  como alternativas de Producción Más Limpia PML. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 1,
						'description' => '1. Recopilación de la normatividad de los negocios verdes Inclusivos.
					2. Elaboración del diagnóstico de contextualización para el Departamento Norte de Santander.
					3. Formulación del Programa Regional de Negocios verdes e inclusivos en el Norte de Santander.
					Pendiente por ejecutar: Aprobación del documento formulado Programa Regional de negocios verdes.
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 37,
						'description' => '1. Realización de 16 talleres de socialización del PRNVI
					2. Conformación de  la ventanilla o nodo de negocios verdes.
					3. Ocho empresas con criterios de negocios verdes aplicados y con plan de mejoramiento formulados.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>2,
						'value' => 2,
						'description' => 'Proyecto: Implementación de proyectos productivos sostenibles con frutales (cítricos y mango tommy) con el fin de difundir el crecimiento económico de los productores agrícolas en el municipio de Gramalote 
					Proyecto: Implementación de sistemas apícolas para 10 familias campesinas del municipio de Salazar de las palmas en la zona de amortiguación de paramo de Santurbán de Norte de Santander ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 100,
						'description' => '1: Se realizo un recorrido por todo el predio para identificar los diferentes atractivos potenciales como lo son forestales,agricolas, pecuarios y ambientales. 
					2: visita técnica para la recopilacion de la informacion necesaria para el establecimiento del sendero y ubicacion de la planta procesadora de alimentos. 
					3: terminacion de la georeferenciacion del sendero del predio la estancia. 
					4:se genero un plan de mejora a la finca la estacia donde se puedan integrar los procesos productivos del predio. 
					5:se elaboro un plan de agro- ecoturismo a la finca .
					6:se realizo la planificacion de una planta procesadora para la trasnformacion de materia prima que produce el predio.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>2,
						'value' => 94,
						'description' => '1.  Asesorar a los entes territoriales en planificación y ordenamiento ambiental en áreas urbana.
					2. Asesorar en Gestión ambiental del Riesgo en áreas urbanas a los entes territoriales
					3. Proyecto   criterios ambientales para el diseño y construcción de vivienda urbana  
					4. Prevenir y Controlar la Contaminación del Aire en áreas urbanas (fenómeno de acumulación o concentración de contaminantes en el aire generado por diferentes tipos entre ellos contaminantes criterio, ruido y olores ofensivos)
					5. Gestionar y promover el uso eficiente del Recurso Hídrico en áreas urbanas
					6. Gestionar y promover el aprovechamiento de Residuos sólidos en áreas urbanas',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 83373,
						'description' => 'Recuperación, conservación y mantenimiento de 89,397  m2 de zonas verdes en Cúcuta

					El mantenimiento de espacios públicos en el área metropolitana de San José de Cúcuta la cual incluye labores de rocería, recolección de escombros vegetales y siembra de algunas especies ornamentales y arbóreas, en un área de 57.000 m2 mensuales.  
					 
					La conservación de la zona intervenida en un área de 30,373 m2, realizando labores de riego, poda de árboles, poda y siembra de plantas ornamentales.
					  
					El establecimiento del componente verde en la Escuela Superior de Administración Publica ESAP, en un área comprendida de 240 M2 que incluyeron labores de siembra de material vegetal (ornamentales y grama), podas de setos y árboles.
					 N°20 de diciembre 18 de 2017
					Ajuste de meta',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 100,
						'description' => '31 Municipios con seguimiento a las Metas de aprovechamiento',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 32,
						'description' => '32 anotaciones al Registro de Generadores de Residuos o Desechos Peligrosos RESPEL.
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 97.5,
						'description' => 'Relleno Sanitario  Girsu - Tibú (1 municpio)
					Relleno Sanitario Las Bateas - Aguachica Cesar (2 municipios)
					Relleno Sanitario Regional Guayabal - Cúcuta (20 municipios)
					Relleno Sanitario Regional La Cortada - Pamplona (8 municipios)
					Relleno Sanitario Regional La Madera - Ocaña (8 municipios)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 50,
						'description' => 'No fue posible realizar la medición en Cúcuta, debido a las dificultades encontradas en el proceso contractual para la adquisición de insumos (filtros, motores, escobillas, cartas). Luego de cumplir con los requisitos de ley, fueron entregados en el almacén de la corporación la primera semana de diciembre de 2017.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>2,
						'value' => 38.15,
						'description' => '
					No fue posible realizar la medición en Cúcuta, debido a las dificultades encontradas en el proceso contractual para la adquisición de insumos (filtros, motores, escobillas, cartas). Luego de cumplir con los requisitos de ley, fueron entregados en el almacén de la corporación la primera semana de diciembre de 2017.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>2,
						'value' => 95,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>2,
						'value' => 100,
						'description' => '15 Puntos de Monitoreo del Rio Pamplonita 
					15 Puntos de Monitoreo del Rio Algodonal',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>2,
						'value' => 100,
						'description' => '1.  Elaboración o actualización de documentos del laboratorio
					2.  Ejecución de Confirmación de métodos analíticos ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>2,
						'value' => 39.2,
						'description' => 'Facturado: $4.021.401.926
					Recaudado: $1.575.246.773',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>2,
						'value' => 60.3,
						'description' => 'Facturado $1.888.469.197
					Recaudo   $1.139.481.244.6',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>2,
						'value' => 17.9,
						'description' => 'Recaudo de $2.119.829.222,60',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>2,
						'value' => 39,
						'description' => 'Primer trimestre: De los 40 municipios, a 31 de Marzo de 2017 se realizaron 115 asesorias en el manejo del aplicativo a 30 municipios y  85 seguimientos al recaudo en 39 municipios. Se seguirá con la oportuna asistencia al desarrollo del aplicativo para el óptimo recaudo del impuesto. 
					Segundo trimestre: A 30 de junio se realizaron 114 asesorias y 85 acciones de seguimiento al recaudo en 39 municipios. Se continuará con la oportuna asistencia a los municipios para un buen optimo recaudo.
					Tercer trimestre: Se atendieron 94 solicitudes de asesoria y 13 acciones de seguimiento al recaudo en 34 municipios.
					Cuarto trimestre: A 31 de Diciembre se realizaron 59 asesorias en el manejo del aplicativo y 17 acciones de seguimiento al recaudo de la Sobretasa Ambiental en 33 munucipios.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>2,
						'value' => 29,
						'description' => 'De las 29 auditorias realizadas en los 4 trimestre de 2017; 13 quedaron con Informe Final; 13 quedaron con Informe Final en Firme y 3 en Ejecución.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>2,
						'value' => 94,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>2,
						'value' => 85,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>2,
						'value' => 9,
						'description' => 'Reseña Histórica
					Marco Legal',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>2,
						'value' => 1,
						'description' => 'Se da cumplimiento a las acciones establecidas para el mantenimiento y re-certificación del Sistema de Gestión Integral en las siguientes normas: Calidad NTC-ISO 9001:2008,  NTCGP 1000:2009, Gestión ambiental  NTC-ISO -14001:2004, Seguridad y salud ocupacional NTC-OHSAS 18001:2007. (VER ANEXO1. COMPORTAMIENTO)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>2,
						'value' => 98,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>2,
						'value' => 22,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>2,
						'value' => 88,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>2,
						'value' => 24,
						'description' => 'Se han formulado estudios técnicos y diseños para adaptación, mitigación y estabilización de cuencas, dentro de la temática del riesgo de adaptación al cambio climático; descontaminación hídrica, conservación de bosques, y producción sostenible.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>2,
						'value' => 27,
						'description' => 'Se ha adelantado gestión con proyectos para adaptación, mitigación y estabilización de cuencas, dentro de la temática del riesgo de adaptación al cambio climático; descontaminación hídrica, conservación de bosques, y producción sostenible. Gestión realizada ante la Unidad Nacional de Riesgos de Desastres UNGRD, Ministerio de Ambiente y Desarrollo Sostenible MADS, Agencia de Desarrollo Rural ADR, entre otros.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity129,
						'year' =>2,
						'value' => 93,
						'description' => 'PROYECTO   DE ADICION AL DECRETO  1076 DE 2015  “Por el cual se adicionan 5 secciones al Capítulo 6 del Título 8 de la Parte 2 del Libro 1 del Decreto 1076 de 2015, Decreto Único Reglamentario del Sector Ambiente y Desarrollo Sostenible, en lo relacionado con los Instrumentos de Planificación Ambiental Regional y los Planes de Acción Institucional de las Corporaciones Autónomas Regionales y Desarrollo Sostenible”
					modificacion del anterior decreto 1200 del 2004 relacionado con la formulacion del PGAR/PLANEAR  para constituir el COPAR (consejo de planificación ambiental regional).',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity131,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity132,
						'year' =>2,
						'value' => 90,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity134,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 94,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 90,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 25,
						'description' => 'Implantación de 21.86 kilómetros de aislamiento de bosque natural en las microcuencas aportantes al rio zulia, en los Municipios de Durania, Arboledas y Cucutilla, del Departamento Norte de Santander.

					Convenio interadministrativo de apoyo y cofinanciación entre corponor y el municipio de Gramalote para la adquisición de áreas estratégicas como áreas de conservación de fuentes hídricas abastecedoras de acueductos en la jurisdicción del municipio.

					Implementación, por parte de la corporación autónoma regional, de las acciones relacionadas con la Educación Ambiental en el marco del Plan de Acción.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 0.35,
						'description' => 'Reservorios Municipio de Cácota.   
					Pendiente entrega de los insumos a la Alcaldía de Cacota
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 30,
						'description' => 'En el marco del convenio suscrito entre CORPONOR y La Universidad de Pamplona, se realizó la  Implementación de metodologías para estimar la recarga o infiltración potencial al subsuelo.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 35,
						'description' => '1. Evaluación de la oferta hídrica - sub zona hidrografica rio Pamplonita.
					2. Evaluación de la demanda hídrica - sub zona hidrografica rio Pamplonita.
					3. Evaluación de la calidad del recurso hídrico - sub zona hidrografica rio Pamplonita.
					4. Componente de riesgo en la evaluación - sub zona hidrografica rio Pamplonita.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 100,
						'description' => 'En el primer trimestre se realizaron visitas a 22 municipios en seguimiento a la ejecución de los PSMV, igualmente se realizó seguimiento a la totalidad de los expedientes y requerimientos a cada municipio y/o empresa prestadora de servicios públicos.
					En el segundo trimestre se realizaron visitas a 16 municipios en seguimiento a la ejecución de los PSMV, igualmente se realizó seguimiento a la totalidad de los expedientes y requerimientos a cada municipio y/o empresa prestadora de servicios públicos.
					En el tercer trimestre se realizó una visita a Labateca y seguimiento y evaluación de documentos presentados de ajuste de PSMV y caracterizaciones.
					Se realizó reunión el 02 de agosto de 2018 en la Dirección Territorial Ocaña, con apoyo de Procuraduría Ambiental, con el fin de reiterar requerimientos a los municipios de la provincia de Ocaña.
					Para el cuarto trimestre, se realizaron visitas de seguimiento a los municipios que contaban con PSMV vigente a la fecha de visita, para un total de 22 visitas.
					Se realizó reunión el 28 de noviembre de 2018 en la Dirección Territorial Pamplona, con apoyo de Procuraduría Ambiental, con el fin de reiterar requerimientos a los municipios de la provincia de Pamplona.
					Se realizó  reunión el 29 de noviembre de 2018 en el parque sede de Cúcuta, con apoyo de Procuraduría Ambiental, con el fin de reiterar requerimientos a los municipios sede Cúcuta.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 1,
						'description' => 'Ya se encuentra ejecutado 100% que corresponde al informe que se debe presentar anual.  El informe fue presentado el día 20 de marzo de 2018 ante Consejo Directivo.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 1.8,
						'description' => 'Para la vigencia se tienen programados 9 PUEAA. A la fecha se realizó seguimiento a 12 PUEAA:
					1. Estación de Servicio Bucaramanga
					2. Lavadero Autofull
					3. Estacion de servicios zona Industrial
					4. ASOZULIA
					5. EMCHINAC E.S.P
					6. MONTEBELLO I Y II
					7. Empresa Municipal de Servicios Públicos de Tibú EMTIBÚ
					8. Empresa de servicios públicas del Municipio de Lourdes
					9. Empresa de servicios públicas del Municipio de Bochalema
					10. Empresa de servicios públicas del Municipio de Durania
					11. Empresa de servicios públicas del Municipio de Herrán
					12. Empresa de servicios públicas del Municipio de Villa del Rosario',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 35,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 30,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 100,
						'description' => 'Las acciones se desarrollan con base en 7 agendas y eplan de acción respectivo',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 100,
						'description' => 'Ejecutado en la vigencia 2016 y 2017
					Areas Protegidas:
					1. Parque Natural Regional Santurbán Arboledas
					2. Parque Natural Regional Santurbán Mutiscua pamplona
					3. Reserva Forestal Protectora Regional El Bojoso (Bosque Seco y Bosque Andino)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 100,
						'description' => 'Parque Natural Regional Sisavita, 
					Parque Natural Regional Santurbán-Salazar de las Palmas: Se ha avanzado en los procesos de planificación y usos concertado del suelo en la zona con función amortiguadora 

					Parque Natural Regional Santurbán- Arboledas, 
					Parque Natural Regional Santurbán- Mutiscua Pamplona: Mediante el programa de educación ambiental se ha implementado el PMA, a traves de la estrategia PRAE, incorporando los contenidos del ecosistema paramo en el plan de estudio y desarrollando actividades con los estudiantes, para la proteccion de bosques y fuentes hidrica. 

					Reserva Forestal Protectora Regional El Bojoso: Mediante el programa de educacion ambiental se esta implementando el PMA en las líneas de conservación hidrica, y biodiversidad ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 1281.49,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 87.33,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 48,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 78.67,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 2,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 1630,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia316 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 50,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 134,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 132,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 39.76,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 89.26,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 28,
						'description' => '28 Municipios
					Asesorar a las entidades territoriales para que de acuerdo a sus competencias apliquen la normatividad ambiental, y desde el nivel local se prevenga el deterioro ambiental generado por el tráfico y explotación ilegal de recursos naturales, protegiendo dentro de su jurisdicción el derecho constitucional a un ambiente sano.  ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 1,
						'description' => 'Operativo a los recursos aire, flora, agua, fauna. Talas y quemas de bosque.
					Operativo de control y vigilancia al recurso flora. Movilización de productos maderable y no maderables.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 1,
						'description' => 'Convenio N°05. se suscribió el  11 de septimbre de 2018. Actividades tendientes a la conservación del medio ambiente a través de la erradicación de la minería ilegal y aportar a los entes territoriales en la ejecución de las competencias asignadas en material minero - ambiental, con el fin de controlar y combatir la minería ilegal, fomentando, promoviendo y capacitando la minería legal en el departamento',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 96.43,
						'description' => '1.  Asesorar a los entes territoriales en planificación y ordenamiento ambiental en áreas urbana.
					2. Asesorar en Gestión ambiental del Riesgo en áreas urbanas a los entes territoriales
					3. Proyecto   criterios ambientales para el diseño y construcción de vivienda urbana  
					4. Prevenir y Controlar la Contaminación del Aire en áreas urbanas (fenómeno de acumulación o concentración de contaminantes en el aire generado por diferentes tipos entre ellos contaminantes criterio, ruido y olores ofensivos)
					5. Índice de calidad ambiental urbana',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 11,
						'description' => '1. Día Nacional de la Educación Ambiental 
					2. Día Mudial de los Humedales 
					3. Día de Mundial del Agua 
					4. Día de la Tierra
					5. Sección Hidraulica del Río Pamplonita  
					6. Semana Santa: Cuidado y preservación de la palma de cera y el loro orejiamarillo
					7. Día del reciclaje
					8. Día del medio ambiente
					9.Días ambientales:  
					* Caracol gigante africano
					*Cambio Climático 
					*Campaña Moda para mi Páramo 
					*Día Mundial de la Limpieza 
					*Dia Nacional de la Biodiversidad 
					*Cúcuta Resiliente 
					10. Campañas Ministerio: Fase informativa en proceso de revisión de la delimitación de Santurbán;  FIMA
					11. Navidades ecológicas 
						Campaña Radial y de Redes
					  Río Urbano Pamplonita    
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 1,
						'description' => 'Audiencia Pública de Rendicion de Cuentas y Seguimiento al Plan de Acción 2017 (Abril 2018)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia342 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia343 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 5.9,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia346 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 16.9,
						'description' => 'Realización de 14 talleres de socialización del PRNVI
					9 Empresas con criterios de negocios verdes aplicados y con plan de mejoramiento formulados.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 2,
						'description' => 'PROYECTO PRODUCTIVO COMO MODELO DE  BUENAS PRACTICAS AMBIENTALES (BPA) CON TENDENCIA A CERTIFICACION DE UN NEGOCIO VERDE. MUNICIPIO DE ARBOLEDAS 

					ESTABLECIMIENTO DE ARBOLES FRUTALES EN EL MUNICIPIO DE SALAZAR (
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 100,
						'description' => 'Se identificaron las asociacones:   APACDOS   Asociación de Productores Agroecologicos de Campo Dos; Caño Indio -Productivo 
					Se definio  sembrar de los 8,000 arboles;  6,000 en los nacientes ubicados en las veredas que conforman el Sector Caño Indio y esta conformado pór 4 veredas;  Palmeras  Mirador, Progreso 2 , Chiquinquira y  Caño Indio, los restantes 2,000 arboles se utilizaron para el establecimiento de parcelas agroforestales en cada uno de las 4 veredas.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>3,
						'value' => 96,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 146312,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 100,
						'description' => '31 Municipios con seguimiento a las Metas de aprovechamiento',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia355 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>3,
						'value' => 30,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 92.5,
						'description' => 'Seguimiento en disposición final de RS técnicamente adecuados a 37  de los 40 municipios
					Residuos Dispuestos Adecuadamente 366.502 Tn',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia359 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 100,
						'description' => 'Red 1 Cúcuta, con las siguientes estaciones:
					Comando de Policía Atalaya - Cúcuta 
					Hotel Cínera - Cúcuta
					Estación Colegio Ecolba - Cúcuta 

					Red 2 Ocaña, con las siguientes estaciones:
					Crediservir - Ocaña
					Bellas Artes - Ocaña',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>3,
						'value' => 100,
						'description' => 'Red 1 Cúcuta
					Estación 1. Colegio Eustorgio Colmenares Baptista - Cucuta.
					Indice:  28  (Bueno)

					Estación 2. Comando de Policía Atalaya - Cúcuta.
					Indice 35,5 (Bueno)

					Estación 3 - Hotel Cínera - Cúcuta
					Indice 35,1 (Bueno)

					Red 2 Ocaña
					Estación 1 - Crediservir - Ocaña
					Indice:  40 (Buena)

					Estación 3 -Bellas Artes - Ocaña
					Inidice:  30 (Buena)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>3,
						'value' => 96,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia369 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>3,
						'value' => 28.8,
						'description' => 'Facturación $7.050.424.667
					Recaudo      $2.027.554.734,78',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>3,
						'value' => 61,
						'description' => '
					Facturado $2.351.233.472
					Recaudo   $1.433.807.254',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>3,
						'value' => 11.5,
						'description' => 'Cartera  $13.510.164.952
					Recaudo  $1.549.509.250',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>3,
						'value' => 37,
						'description' => '37 municipios asesorados',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>3,
						'value' => 40,
						'description' => 'Durante el año se logró culminar la Revisión a las vigencias 2011 a 2013 del Municipio de Pamplona y se suscribió Acuerdo de Pago.  Con el Municipio de Ocaña también se logró culminar el proceso de Revisión de las vigencias 2011 a 2014, en tramites firma del Acuerdo de Pago, por el total de los valores faltantes detectados como producto de la Reviisón, Seguimiento y Control a las vigencias desde 2011 a 2017.   Así mismo, se pudo concluir la Revisión al Municipio de Villa del Rosario de las vigencias 2011 a 2016 y realizar la vigencia 2017.  Con un alto grado de dificulltad se realizaron las visitas de Revisión, Seguimiento  y Control, con sede de encuentro la Dirección Territorial de Ocaña, para los Municipios de Teorama, San Calixto y Hacarí. Y con elo Tarra, el Secretario de Hacienda se desplazó a la Sede Administrativa de Corponor en Cúcuta. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>3,
						'value' => 14,
						'description' => 'Se ha logrado asesorar y dar oportuna asistencia juridica a los Municipios, orientando los procesos adminitrativos del cobro persuasivo y coactivo. Se ha prersentado inconvenien con los municipios de la provincia de Ocaña, por orden público pero se logro dar acompañamiento juridico a los municipios seleccionados.                                       
					En cuanto al software aún no se ha podido concluir la mejor opción para apoyar los municipios.
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>3,
						'value' => 96,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>3,
						'value' => 98,
						'description' => 'Cumplimiento del Plan Anticorrupción conforme a lo programado para la vigencia 2018. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>3,
						'value' => 55,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>3,
						'value' => 1,
						'description' => 'Se da cumplimiento a las acciones establecidas para el mantenimiento del Sistema de Gestión Integral en las siguientes normas: Calidad NTC-ISO 9001:2015,  NTCGP 1000:2009, Gestión ambiental  NTC-ISO -14001:2015, Seguridad y salud ocupacional NTC-OHSAS 18001:2007. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>3,
						'value' => 100,
						'description' => 'Se adoptaron las Politicas contable con la resolución 0946 del 29 de diciembre de 2017',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>3,
						'value' => 100,
						'description' => 'Se realizará en la último trimestre:
					Mantenimiento de Jaulas - Hogar de paso - Sede El Zulia
					Señalización Corporativa de las Sedes de Corponor
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia385 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>3,
						'value' => 95,
						'description' => 'Desarrollo del plan de mantenimiento preventivo  y correctivo de bienes muebles e inmuebles',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia386 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia387 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>3,
						'value' => 9,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia388 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia389 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>3,
						'value' => 100,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>3,
						'value' => 1,
						'description' => 'NOMBRE APLICATIVO: CONSULTA MOVIL - CORPONOR
					Se verifica pruebas de conectividad y de acceso a información teniendo en cuenta metodologias aprobadas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia391 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>3,
						'value' => 100,
						'description' => '27 proyectos del Plan de acción 2016-2019 Viabilizados',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>3,
						'value' => 22,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia394 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>3,
						'value' => 21,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia395 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity129,
						'year' =>3,
						'value' => 4,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia398 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity131,
						'year' =>3,
						'value' => 85,
						'description' => 'SIRH  -  100%
					SISAIRE - 25%
					SNIF - 100%
					RESPEL - 100%
					RUA - 100%',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia399 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity132,
						'year' =>3,
						'value' => 96,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity134,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia402 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 95,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 90,
						'description' => '36 entes territoriales:
					1. Asesorar a los municipios en la incorporación de las medidas de mitigación de gases de efecto invernadero y de adaptación al cambio climático en el proceso de formulación de los Planes de Desarrollo departamental y municipales y en los Planes de Ordenamiento Territorial.
					2. Apoyar el fortalecimiento de los sistemas de información que permitan generar conocimiento del cambio climático y sus efectos a nivel regional y local. Se adelantó reunión del Comité Intergremial e Intersectorial de cambio Climático del departamento Norte de Santander para asignar tareas buscando dar inicio a la implementación del PICDNS
					Se hizo entrega del PICCDNS y se asesoró en la forma como se debe incorporar en los Planes de Ordenamiento Territorial en cumplimiento a la Ley 1932 de 2018.  (Cúcuta, Cácota, Tibú, Pamplonita, Santo Domingo de Silos, San Calixto, Mutiscua, Sardinata y Gobernación)
					3. Realizar eventos de capacitación a las comunidades en las medidas de adaptación al cambio climático. (San Calixto, Abrego, Convención, Hacarí ) 
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia404 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 100,
						'description' => 'Adelantar acompañamiento y asistencia técnica para la actualización de los Planes Municipales de Gestión del Riesgo de Desastres de 8  Entes Territoriales (Ocaña, Abrego, Los Patios, Villa del Rosario, Chinácota, Puerto Santander, Cacota y Sardinata.)

					Adelantar seguimiento al componente programático del Plan Municipal de Gestión del Riesgo de Desastres de 15  Entes Territoriales  (Ocaña, Abrego, La Esperanza, Cáchira, Los Patios, Villa del Rosario, Chinácota, Puerto Santander, Ragonvalia, El Zulia, San Cayetano, Santiago, Labateca, Toledo y Sardinata.)

					Atender al 100% las solicitudes de visitas en puntos críticos generadores de riesgo, de acuerdo a los fenómenos que se presenten en cada municipio.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia405 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 100,
						'description' => '1, Implantación de 21.86 kilómetros de aislamiento de bosque natural en las microcuencas aportantes al rio Zulia, en los Municipios de Durania, Arboledas y Cucutilla.
					2, Aunar esfuerzos, técnicos, administrativos y humanos  para el acompañamiento y asesoría  a la corporación el proceso necesario  para desarrollar la gestión integral de agua subterránea  en la subzona hidrográfica  del río Pamplonita.
					2, Articular y complementar esfuerzos de orden técnico, de gestión de recursos y de participación social para llevar a cabo las obras prioritarias de saneamiento básico de este municipio (PTAR)
					3, Construcción de estufas reguladoras de humo, en el municipio de Lourdes. Abrego. 
					4, Construcción de 16 unidades sanitarias junto con el sistema de tratamiento, asentadas en  la zona rural del municipio de Lourdes
					5, Construcción del interceptor margen izquierda quebrada la Macanita,   municipio de Salazar de las Palmas
					6, Construcción de reservorios para el almacenamiento de agua de escorrentía, en el municipio de Abrego, Departamento Norte De Santander.
					7.  Convenio interadministrativo de apoyo y cofinanciación entre Corponor y el municipio de Cúcuta para la adquisición de áreas estratégicas como áreas de conservación de fuentes hídricas abastecedoras de acueductos en la jurisdicción del municipio de Cúcuta 
					8, Suministro de dieciséis (16) colmenas para ocho (8) familias campesinas del municipio de el Zulia y el establecimiento de 40 hoteles para polinizadores en las áreas de cultivo de los municipios de Chitagá, Cácota, Silos, Mutiscua y Pamplonita.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 2,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 50,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia413 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 70,
						'description' => '
					Análisis de resultados: La reglamentación del uso de las aguas, es una  herramienta  para la GIRH y se define como la aplicación de un conjunto de acciones de orden técnico y jurídico, dentro del marco legal vigente, destinadas a obtener una mejor distribución del recurso teniendo en cuenta las condiciones actuales y futuras de su uso y las características biofísicas, sociales y económicas de su zona de influencia. en ese sentido la Corporación dentro del plan de acción 2016-2019. fijo como meta actualizar la reglamentación  del uso del agua en dos corrientes hídricas: Parte media del rio Pamplonita, Quebrada el Volcán y Monteadentro, revisar la reglamentación de la Quebrada La Honda y reglamentar la  Quebrada La Colonia y La Tescua. Por su extensión, numero de usuarios e importancia para la cuenca del rio pamplonita el proceso de actualización en la corriente hídrica  Quebrada El Volcán y Monteadentro no se pudo terminar llegando hasta la elaboración del informe técnico de objeciones al proyecto; quedando pendiente la reforma del proyecto general de la reglamentación que debe incluir  los cambios derivados de las objeciones presentadas al proyecto de distribución de caudales. Una vez consolidado este informe,  se elaborará el acto administrativo por el  cual se actualice la reglamentación de la quebrada el Volcán y Monteadentro.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia414 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 30,
						'description' => 'Análisis de resultados: El Plan de Ordenamiento del Recurso Hídrico (PORH), Es el instrumento de planificación con el cual se consolidan los programas, proyectos y el seguimiento al plan de monitoreo en un horizonte mínimo de 10 años a lo largo de los cuales se busca mejorar la disponibilidad y la calidad del recurso hídrico de una corriente hídrica.  en ese sentido la Corporación, adoptó en su
					Plan de Acción 2016-2019, el ordenamiento del recurso hídrico de la subcuenca de la Quebrada Iscalá, municipio de Chinácota,  esta subcuenca abarca mas del 70% del área  municipal y es el tercer afluente mas significativo de la cuenca del rio Pamplonita, teniendo en cuenta su extensión y la importancia que reviste de las cuatro fases que comprende el ordenamiento se alcanzaron a desarrollar las tres primeras, lo anterior debido a que la fase diagnostico comprende un censo predio a predio de los usuarios del recurso hídrico actividad que tomo mas tiempo de lo estimado debido a la cantidad de predios existentes, culminada esta fase  se logro identificar los usos potenciales y se dio inicio a la construcción del documento final del PORH de la quebrada Iscalá mediante la organización de la información obtenida como resultado del análisis del trabajo de campo realizado. Se identifico la información que falta por construir para complementar el documento.  avanzar en la construcción del documento, quedando pendiente su finalización y adopción mediante acto administrativo.                                                                   ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 37,
						'description' => 'Análisis de resultados: La Gestión Integral de Recurso Hídrico (GIRH), en las regiones, requiere información y conocimiento adecuado sobre el comportamiento y estado del agua (en cantidad y calidad), expresados en la distribución espacial y variación temporal de oferta y disponibilidad, calidad uso y demanda, amenazas y vulnerabilidad de los sistemas hídricos y del recurso, asociados con variabilidad climática y posibles escenarios de cambio climático. Con base en lo anterior, la Corporación, adoptó en su Plan de Acción 2016-2019, la formulación de las Evaluaciones Regionales del agua (ERA),de las cuencas Pamplonita y Zulia. Dentro del cuatrienio se logró completar el ERA de la cuenca del Rio Pamplonita y se avanzo en formulación del ERA de la cuenca del rio Zulia, consolidando la información correspondiente a oferta, demanda y calidad del recurso hídrico de la cuenca del rio Zulia, quedando pendiente el componente de riesgos y la construcción de indicadores.                                                             ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia416 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 98,
						'description' => 'En el año 2019, se trabajó de manera conjunta a través de Asomunicipios para la provincia de Ocaña, en el trámite de solicitudes de inclusión de líneas de proyectos de Acueducto y Alcantarillado en los PSMV para centros poblados y corregimientos, como requisito para la aprobación de dichos proyectos a ejecutar a través del Viceministerio de Agua Potable y Saneamiento Básico.
					Se realizaron reuniones de socialización con Alcaldías y empresas de Servicios Públicos, sobre el estado de cumplimiento en el avance del proceso de actualización de los Planes de Saneamiento y Manejo de Vertimientos PSMV.
					Se realizaron mesas de trabajo con cada Alcaldía Municipal y empresa de Servicio de alcantarillado, con el fin de realizar el seguimiento al cumplimiento de la Resolución No. 631 de 2015 y la respectiva actualización de los Planes de Saneamiento y Manejo de Vertimientos.
					Se dio continuidad a la mesa técnica liderada por CORPONOR y Procuraduría Ambiental y Agraria, con el fin de generar compromisos con los entes territoriales para adelantar acciones encaminadas al saneamiento del río Zulia.  A la fecha se encuentra en ejecución Convenio con la Universidad Francisco de Paula Santander, para la priorización, análisis y entrega de diseños necesarios en los municipios priorizados de la cuenca para la construcción de PTAR y reducción de la carga contaminante generada sobre el río Zulia.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 1,
						'description' => 'Se realizó el ajuste al Factor Regional aplicado en el cobro de la Tasa Retributiva, para los tramos de los cuerpos de agua receptores de los vertimientos de aguas residuales de los municipios del departamento.

					Con base en el Decreto 1076 de 2015 y teniendo en cuenta la información existente, el ajuste al FACTOR REGIONAL fue evaluado por tramos en los cuerpos de agua del Departamento, de acuerdo a la meta de reducción de carga contaminante establecida mediante Acuerdo No. 17 de 2014 modificado por el Acuerdo No. 01 de 2015.  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia419 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 5,
						'description' => '27 PUEAA vigentes con seguimiento,',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia421 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 30,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 30,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 100,
						'description' => '1. Generación GDB Humedales del Catatumbo. Se está realizando esta acción de GEODATABASE el cual se genera con la finalidad de conocer la ubicación geográfica de los humedales inventariados, para  utilizarlos como insumo principal en la planificación de las medidas de recuperación y protección de estos ecosistemas acuáticos. 

					2. Los talleres están orientados al conocimiento de las especies y función ecológica de los cuerpos de aguas y al establecimiento de los conflictos que se presentan entorno al uso del suelo. Estas jornadas buscan reducir la presión sobre estos cuerpos de agua por la acción antrópica de las comunidades

					3. Construcción de un reservorio para el almacenamiento de agua lluvia para riego, en el corregimiento de La Gabarra, municipio de Tibú, departamento de Norte de Santander.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 33,
						'description' => 'Se completó fase de campo en los municipios de Herrán, Chinácota y Toledo y se generó documento que contiene descripción metodológica, resultados del mapa de zonificación y determinación de régimen de usos.

					• Elaboración de Documento de Zonificación Ambiental del Páramo Tamá que contiene descripción de la metodología y resultados del mapa y de determinación de régimen de usos del suelo. Dicho documento se constituye en principal insumo para el componente de ordenamiento del Plan de Manejo Ambiental del Páramo Tamá a consolidarse durante la vigencia 2020. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia429 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 100,
						'description' => 'Luego de finalizada la metodología de formulación del Plan de Manejo Ambiental del DRMI Mejué , que permitió completar los componentes de diagnóstico, ordenamiento y estratégico, estipulados en el Decreto 2372 de 2010, dicho Plan fue revisado y aprobado en reunión del Consejo Directivo de CORPONOR del día 20 de diciembre de 2018, y fue adoptado mediante el Acuerdo No. 042 de 2019. 

					Por lo anterior, la meta del presente indicador  alcanzada en un 100% antes de finalizar la vigencia 2019. 

					El Plan de Manejo del DRMI Mejué será tenido en cuenta en la vigencia 2020 para la definición de la meta de implementación de Planes de Manejo Ambiental de Áreas Protegidas.

					En lo que respecta  a este indicador (16), para la vigencia 2020 se tendrá como meta la formulación del Plan de Manejo Ambiental de Distrito Regional de Manejo Integrado Bosque Seco Tropical Pozo Azul, el cual fue declarado el 20 de diciembre de 2019 mediante Acuerdo No. 043. . ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 100,
						'description' => 'Se encuentran en fase de implementación los Planes de Manejo Ambiental (PMA) de todas las áreas protegidas declarados por Corponor:
					1. Parque Natural Regional Sisavita.  
					2. Parque Natural Regional Santurbán-Salazar de las Palmas 
					3. Parque Natural Regional Santurbán- Arboledas.  
					4. Parque Natural Regional Santurbán- Mutiscua Pamplona
					5. Reserva Forestal Protectora Regional El Bojoso 

					Sin embargo, durante la vigencia 2019, se han adelantado acciones para implementación del Plan de Manejo Ambiental del Parque Natural Regional Sisavita, localizado en el municipio de Cucutilla, en específico se avanzó en la implementación de la línea estratégica de investigación y monitoreo, en el marco de la Alianza Estratégica CORPONOR-WWF',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 1058,
						'description' => 'Superficie de áreas protegidas inscritas en el RUNAP 
					1. Reserva forestal - El Bojoso  -  1.582 has.
					2. PNR Santurbán Arboledas -  21.870 has.
					3. PNR Santurbán Mutiscua - Pamplona - 9.389 has.
					4. Parque Natural Regional Sisavita - 12.131 has.
					5. Parque Natural Regional Santurbán Salazar de las Palmas - 19.088 has.
					6. Área del DRMI Mejué - 10.651,36 Has.  Declarado en 2018 , que se inscribió en el RUNAP en febrero de 2019 ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia432 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 406.7,
						'description' => 'Tras recibir el concepto previo favorable por parte del Instituto Alexander von Humboldt del día 18 de diciembre de 2019, fue completado el borrador de Acuerdo de Consejo Directivo al cual se dio lectura y aprobación durante reunión del Consejo Directivo de CORPONOR, el día 20 de diciembre de 2019. 

					Mediante Acuerdo 043 de 2019 fue declarado el Distrito Regional de Manejo Integrado (DRMI) Bosque Seco Tropical Pozo Azul, con una extensión de 5067,11 hectáreas en territorio de los municipios de Cúcuta y San Cayetano.

					En el contenido del acuerdo se estableció que las áreas de títulos mineros quedarán bajo acuerdos de conservación y por tanto por fuera del DRMI. Los Acuerdos de conservación fueron finalizados por parte del Grupo de Áreas de Manejo Especial de la Subdirección de Recursos Naturales y entregados a la Subdirectora para entrega a la Oficina jurídica desde donde se dará concepto para firma por parte del Director General. 

					Durante la vigencia de 2020 el DRMI Bosque Seco Tropical Pozo Azul, serpa inscrito el RUNAP (Registro único Nacional de Áreas Protegidas) y será formulado su Plan de Manejo Ambiental.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 162,
						'description' => '
					A 31 de Diciembre se logró la adquisición de los predios  Bellavista (Salazar); 116 Ha, Predio la Peña ( Mutiscua), PNR Santurbán Mutiscua Pamplona; 189 Ha,  La Nobleza (Salazar) PNR Santurbán Salazar;; 101,7 Ha
					Los convenios con los municipios de la Playa y Bochalema no fueron factibles de ejecutar ya que los predios presentados presentaron inconsistencias en la documentación y no se alcanzó a realizar las correcciones que permitiera concluir con la adquisición de los predios. Por lo anterior fue necesario liquidar los convenios sin ejecución. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 43,
						'description' => 'Proyecto ejecutado en las vigencias 2016,2017 y 2018',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia436 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 40,
						'description' => 'El total de hectáreas bajo conservación que suman los acuerdos firmados por las 43 familias beneficiarias corresponde a 1058 hectáreas. Las visitas de seguimiento realizadas durante el año a los beneficiarios de CENS permitieron verificar que dicha superficie se mantiene.

					Bajo el esquema de BanCO2 se garantiza la protección de áreas de bosque andino y alto andino de gran importancia ecosistémica y que además coadyuvan la acción de regulación hídrica del ecosistema de páramo. Para garantizar el mantenimiento de dichas áreas que se encuentran bajo acuerdos de conservación y de fortalecer y visibilizar el programa BanCO2 en Norte de Santander
					Familias en los Municipio de Cucutilla, Salazar y Arboledas ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia438 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'description' => 'Meta Cuatrienio de áreas de ecosistemas en restauración, rehabilitación y recuperación (150 ha) 
					Año 2017: 38 has 
					Implantación de kilómetros de aislamiento de bosque natural en las microcuencas aportantes al río Pamplonita, en los Municipios de Chinácota, Herrán y Ragonvalia. Departamento Norte de Santander.  (17 has)
					Implantación de kilómetros de aislamiento de bosque natural en las microcuencas aportantes al río Zulia, en los Municipios de Durania, Arboledas y Cucutilla. Departamento Norte de Santander. (18 has)
					Restauración ecológica por proyecto de compensación. (3 has)
					Año 2018: 118 Has.
					Con la Alianza BioCuenca, se ejecuto el proyecto   MI PARAMO  . Iniciativa de conservación de Bosque en el páramo de Santurbán, localizado en el Municipio de Mutiscua, con la finalidad de incrementar la cobertura de bosque. . (19 has)
					Proyectos de restauración, rehabilitación y reforestación / Gestión para la Conservación Sostenible de las Áreas de Manejo Especial del departamento Norte de Santander.  . (39 has)
					Adquisición  de Predios / Gestión para la Conservación Sostenible de las Áreas de Manejo Especial del departamento Norte de Santander. . (60 has)
					Meta cumplida al 100% 
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia439 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia440 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 1,
						'description' => '1. Socialización de los proyectos productivos a implementar.
					2. Capacitación en temas ambientales
					3. Sensibilización en el cuidado de la fauna y la flora que tienen en las comunidades indígenas.
					4, Taller de practica de siembra de proyectos productivos en mantenimiento de plantaciones de frutales (Arboles frutales y Piña Golden).
					5. Se realizó seguimiento a los cultivos establecidos de piña y frutales 
					6. Se realizó capacitación en temas agronómicos como labores culturales en el cultivo, preparación del terreno, clasificación de la semilla, siembra, y manejo de plagas y enfermedades',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia442 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 1,
						'description' => '1. Mantenimientos a establecido en el año 2018 (Boysoby, Aratocbary  y Batroctrora.) . Implementación de nuevos cultivos en el año 2019 (Beboquira)

					2.  Mantenimiento de las plantaciones de piña y frutales establecidos en el año 2017 y 2018; optimización del proyecto de gallinas ponedoras con el suministro de concentrados y el suministro de herramientas para la comunidad 

					3. Construcción de 39 estufas reguladoras de humo, en el nuevo cabildo del resguardo indígena Catalaura   Karikachaboquira zona rural del municipio de Tibú, departamento Norte de Santander',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia443 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia444 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 3,
						'description' => '1. Socialización de los proyectos productivos a implementar.
					2. Capacitación en temas ambientales.
					3. Sensibilización en el cuidado que le deben de tener a la fauna y flora nativa de la zona.
					4. Capacitación en temas agronómicos.
					5.  Taller de practica de siembra para establecimiento de proyectos de inversión.
																																								  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia446 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 1,
						'description' => 'Para la ejecución del proyecto en el año 2019 se realizó un convenio interadministrativo Convenio 038 de agosto 6 de 2019 y Convenio 051 de 15 de noviembre de 2019, entre CORPONOR y La Asociación de Autoridades Tradicionales y Cabildos Uwa, para aunar esfuerzo en el establecimiento de Proyectos Productivos y definidos así:

					• Implementación de un modelo para alimentación de ganado en el modelo intensivo con el establecimiento de banco de proteína, pastos de corte y mejoramiento de pradera.

					• La construcción de un trapiche panelero horizontal con estructura metálica en el colegio Etnoeducativo IZQUETA, cabildo Segovia.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia448 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 5,
						'description' => 'Para el 2019 se proyecta el 5%, en el periodo se avanzó en la ejecución del suministro de insumos necesarios para el funcionamiento del  CAV, según las necesidades de equipamientos e insumos requeridos.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1703,
						'description' => 'Se atendieron de manera oportuna todas las especies que ingresaron al hogar de paso',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 50,
						'description' => '1. Dentro del inventario de la estación hogar de paso se encuentran dos ejemplares de puma (especie vulnerable), producto generado del conflicto de felinos-seres humanos.   
					2. Nutria
					3. Oso de anteojos

					De las especies amenazadas presentes en la jurisdicción de la entidad con medida de manejo (6), se monitorearon el 50 % (3) realizando principalmente campañas de educación ambiental enfatizando en el cuidado y conservación del hábitat en donde se encuentran, la caza furtiva de estas especies y las demás especies que le sirven de alimento, perdida de hábitat por acción antrópica como expansión agrícola, expansión ganadera, fragmentación de ecosistemas y corredores biológicos.

					En las acciones a seguir es iniciar con la elaboración de planes de manejo y conservación de especies de flora presentes en la jurisdicción de la Corporación.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia451 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 100,
						'description' => 'caracol africano
					caracol de jardín

					Seguimiento y capacitación en el control y manejo del caracol
					Se realizó el control mediante 469 visitas técnicas de las especies invasoras Achatina fulica y Helix aspersa, socializando las medidas de manejo utilizando elementos de protección y control mecánico (recolección manual) al igual que la implementación de los protocolos de sacrificio y disposición final de estas especies invasoras, en los municipios de Arboledas, Bochalema, Chinácota, Cúcuta, Durania, Los Patios, Lourdes, Salazar de las Palmas, san Cayetano, Sardinata, Villa Caro y Villa del Rosario.
					Continuar con el control y seguimiento de estas especies invasoras en la jurisdicción de la Corporación.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia452 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 1,
						'description' => 'Se consolidaron por medio del comité ambiental municipal las agendas de Biodiversidad en los municipios de Tibú, Cácota, Arboledas, Salazar de las Palmas y Toledo en donde se enfatiza la importancia de la biodiversidad en nuestro territorio y los beneficios y servicios ecosistémicos que nos prestan integrando con más rigor y efectividad el cuidado y protección de la flora y fauna silvestre, al igual que minimizar los conflictos que se susciten con estas especies.

					Participación celebración del día internacional de los humedales promoviendo la importancias de las conservación y manejo de la biodiversidad en estos ecosistemas.   Tibú
					Participación en mesas del Comité Educativo Ambiental promoviendo la importancias de las conservación y manejo de la biodiversidad.   Y presentando la temática de Biodiversidad para ser incluida el plan de acción municipal. Arboledas
					Apoyo al componente de gestión en Biodiversidad del departamento a través del comité de educación ambiental (CEAM). Salazar
					Participación en mesas de trabajo con Parques Naturales Nacionales promoviendo la importancias de la conservación y protección de la biodiversidad. Toledo

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia453 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia454 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 60,
						'description' => 'Número total de Registro de libro de operaciones   vigentes y aprobadas por la Corporación a 31/12/2018: 45
					de los cuales a 27 expedientes se hizo seguimiento.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia455 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 128.6,
						'description' => 'Se otorgaron 22 permisos de aprovechamiento forestal con un tiempo promedio de 124 días',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia456 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 1,
						'description' => 'En la ejecución del convenio interadministrativo GGC-400 DE 2019, celebrado entre el Ministerio de Minas y Energía y la corporación autónoma regional de la frontera nororiental – COROPONOR, se realizó el acompañamiento Técnico a 25 títulos mineros, dentro de las cuales se tienes los siguientes tipos de minas que se le realiza el acompañamiento técnico (Minero, Ambiental, Social, Administrativo)

					Este convenio se ejecutó, en los Municipios de Cúcuta, Sardinata, los Patios, Villa del Rosario. Donde se acompañó el proceso de regularización de veinticinco (25) títulos mineros

					Se ejecutó a totalidad de las Fases del convenio en conformidad con el Plan de Trabajo e Inversiones

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia459 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 10,
						'description' => 'Se han resuelto 166 procesos de 1664 activos,  equivalente al 10%',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia460 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 111.23,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia461 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 24,
						'description' => '24 Municipios
					Asesorar a las entidades territoriales para que de acuerdo a sus competencias apliquen la normatividad ambiental, y desde el nivel local se prevenga el deterioro ambiental generado por el tráfico y explotación ilegal de recursos naturales, protegiendo dentro de su jurisdicción el derecho constitucional a un ambiente sano.
					Operativos  de captaciones ilegales, ruido',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia462 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 1,
						'description' => 'Reactivación del comité de control y vigilancia departamental. Policía Nacional, Ejercito Nacional, Alcaldía de Cúcuta, Personería de Cucuta, Agencia Nacional Minera, Secretaria de Medio Ambiente.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia463 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia465 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia466 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 97,
						'description' => '1.  Asesorar a los entes territoriales en planificación y ordenamiento ambiental en áreas urbana.
					2. Asesorar en Gestión ambiental del Riesgo en áreas urbanas a los entes territoriales
					3. Proyecto   criterios ambientales para el diseño y construcción de vivienda urbana  
					4. Prevenir y Controlar la Contaminación del Aire en áreas urbanas (fenómeno de acumulación o concentración de contaminantes en el aire generado por diferentes tipos entre ellos contaminantes criterio, ruido y olores ofensivos)
					5. Gestionar y promover el uso eficiente del Recurso Hídrico en áreas urbanas
					6. Gestionar y promover el aprovechamiento de Residuos sólidos en áreas urbanas
					7. Índice de calidad ambiental urbana',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia467 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia471 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia473 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 12,
						'description' => '1. Día Nacional de la Educación Ambiental
					2. Día Mundial de los Humedales
					3. Día de Mundial del Agua
					4. Campaña #MeUno    Ensúciate para limpiar el agua de nuestro país  
					5, Día Mundial de la Tierra 
					6, Día Mundial del Reciclaje
					7, Día Mundial de la Biodiversidad 
					8, Día Mundial del Ambiente 
					9. Campaña territorio verdes
					10.  Campaña Incendios forestales
					11.  Todo por Un Árbol
					12. Mi deseo verde',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia474 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 2,
						'description' => 'Audiencia Pública de Rendición de Cuentas y Seguimiento al Plan de Acción 2018 (Abril 2019)',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia475 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia476 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>4,
						'value' => 100,
						'description' => '                                                                                                                                                                                      
					Asociación Colombiana de Porcicultores:
					1. Mantener la  presente Agenda Ambiental actualizada y funcionalmente activa, para lo cual podrá sugerir modificaciones a su contenido, cuando las circunstancias así lo requiera
					2. Elaborar las actas de las reuniones del Comité Operativo, las cuales respaldarán los acuerdos para el desarrollo operativo y las directrices emanadas del mismo.
					3. Orientar a los productores, signatarios de la  presente Agenda Ambiental en el evento que así lo requieran, para el cabal cumplimiento de sus compromisos.
					4.  Elaborar y estudiar propuestas, proyectos y otros mecanismos  referidos al desarrollo de acciones susceptibles de cooperación, en áreas de tecnologías limpias, ambientales, investigación, certificación, de prevención, mitigación y control de contaminación, proyectos piloto demostrativos,  y gestión de recursos nacionales e internacionales; que serán ejecutados en el subsector Porcícola; así como el apoyo a la capacitación y especialización de los recurso humano. 
					5. Realizar capacitaciones periódicas en temas de interés ambiental a todo el personal involucrado en el subsector porcícola.

					Acuerdos de Voluntades con la Fundación Bioentorno
					1. Realizar capacitaciones periódicas en temas de interés ambiental a todo el personal involucrado en las Jornadas de Recolección y el sector agrícola.  
					2. Gestionar con la administraciones municipales y el sector productivo la puesta en marcha de los planes de gestión de devolución poscomsumo de envases de plaguicidas
					3. Apoyo a los  Planes de gestión de Devolución de Productos Posconsumo de plaguicidas (PGD), mediante la  Construcción e instalación de casetas de almacenamiento temporal de envases de plaguicidas

					Sector Agropecuario (Agrícola, Ganadero y Pamicultor)
					Capacitación al sector productivo en adaptación a la vulnerabilidad climática y en temas de Huella hídrica (huella azul, huella verde y huella gris) y huella de carbono  dentro de su proceso productivo.

					Sector Industrial (arcilla)
					Reuniones realizadas con el sector industrial de transformadores de arcilla. (25 empresas) Aplicación de Buenas Prácticas de Operación (BPO) y Mejores Tecnologías Disponibles (MTD), en el proceso productivo, como herramienta básica para la obtención de productos de calidad, en la cual se debe involucrar tanto a gerentes de las empresas como al personal de planta, documentando planes y programas, para llevar a cabo las tareas y cumplir con las políticas de las empresas.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia477 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 6,
						'description' => '1. Construcción de tres (3) lechos de secado tipo marquesina para el manejo de la porcinaza sólida para ser distribuidas estratégicamente en el municipio de Santiago - departamento Norte de Santander como medida de mitigación al cambio climático. 
					2. Construcción de Ocho (8) casetas de almacenamiento temporal de envases de Plaguicidas en los Municipios de Labateca, Silos,  Pamplona, Mutiscua,  Ocaña, Abrego y  El Carmen.  
					3. Construcción y montaje de  Biodigestores con el  sector ganadero y porcicultor en el sector rural  del departamento como medida de mitigación del cambio climático. Municipio de Cucutilla. 
					4. Establecimiento de Modelo de Ganadería Sostenible - Sistema Silvopastoril intensivo SSi con el  sector ganadero en el sector rural del departamento como medida de mitigación del Cambio Climático. Municipio de Sardinata. 
					5. Construcción de estufas reguladoras de humo, en la zona rural de los municipios del departamento de Norte de Santander
					6. Suministro de dieciséis (16) colmenas para ocho (8) familias campesinas del municipio de El Zulia y el establecimiento de 40 hoteles para polinizadores en las áreas de cultivos de los municipios De Chitagá, Cacota, Silos, Mutiscua y Pamplonita. (Recursos provenientes del proyecto 1.1 Formulación e implementación de los POMCAs en el departamento Norte de Santander).  
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia478 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia480 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 24,
						'description' => 'Realizar de 15 talleres de socialización del PRNVI
					10 Empresas con criterios de negocios verdes aplicados y con plan de mejoramiento formulados.
					22 empresas que cumplen con criterios de los NV ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia482 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 3,
						'description' => 'Los proyectos para ejecutar en la vigencia  son los siguientes:
					1. Establecimiento de 4 parcelas agroforestales con arreglos de Piña Golden con árboles forestales maderables. Municipio de Tibú
					2. Proyecto productivo de establecimiento de 775 árboles y/o 2,5 hectáreas en frutales de Mango Tommy. Municipio de Tibú
					Se adiciona el siguiente proyecto:
					3. Implementación de buenas prácticas en la construcción de senderos ecológicos en los municipios de Arboledas, Bochalema y San Calixto. 
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia483 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 90,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia486 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 128435,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia487 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia488 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 100,
						'description' => '40 Municipios Departamento Norte de Santander
					39 Presentaron un PGIRS.
					21 Con un PGIRS Válidos.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia489 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>4,
						'value' => 29,
						'description' => 'Total de registros RESPEL realizados.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia490 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 95,
						'description' => 'De los 40 municipios, 38 disponen en rellenos sanitarios de Norte de Santander, 2 en el Departamento del Cesar (Aguachica).

					370.178 Ton de  Residuos Dispuestos Adecuadamente',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia492 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia493 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 100,
						'description' => 'Desde abril del año en curso se tiene un link  denominado CALIDAD DEL AIRE en la pagina web de Corponor, información que tiene fecha de actualización 30 de junio de 2019. De igual manera se puede consultar la misma en el link del IDEAM denominado SISAIRE

					https://corponor.gov.co/web/index.php/calidad-del-aire/',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia495 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 100,
						'description' => 'Los datos suministrados son hasta el mes de diciembre del 2019.  Se realizó monitoreo de las redes instaladas, dando como resultado el siguiente promedio:  
					Red 1 Cúcuta
					- Estación 1. Colegio Eustorgio Colmenares Baptista - Cucuta.
					Índice:  45,2

					- Estación 2. Comando de Policía Atalaya - Cúcuta.
					Índice: 44,2

					- Estación 3 - Hotel Cínera - Cúcuta
					Índice 36,8

					INDICE CALIDAD AIRE:  0 - 50  BUENA',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia497 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia498 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>4,
						'value' => 95,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia499 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia500 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>4,
						'value' => 100,
						'description' => 'Corriente Pamplonita: 22 muestreos
					Corriente Zulia: 52 Muestreos
					Corriente Algodonal: 15 Muestreos
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia503 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia504 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>4,
						'value' => 22.2,
						'description' => 'La facturación reportada es de $10.661.621.957 a diciembre de 2019 y su Recaudo un total es de $2.370.387.628',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia505 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>4,
						'value' => 92.3,
						'description' => 'Facturado $1.781.191.944
					Recaudo   $1.644.110.893',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia506 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>4,
						'value' => 8.6,
						'description' => 'Cartera  $10.462.942.924,11
					Recaudo     $900.741.682,03',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia507 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>4,
						'value' => 40,
						'description' => 'A diciembre de 2019 se realizaron  asesorías en el manejo del aplicativo y acciones de seguimiento al recaudo de la sobretasa ambiental a los 40 municipios. Se seguirá prestando la asesoría oportuna al  aplicativo para su buen funcionamiento.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia508 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>4,
						'value' => 34,
						'description' => 'En el cuarto trimestre se realizaron los seguimientos y revisiones de la Sobretasa Ambiental de 34 Municipios del Departamento Norte de Santander. Se finalizaron y presentaron informes Finales a 33 municipios; 1 municipio (Chinácota) no se finalizó debido a que se le hizo el requerimiento para corregir el formato de recaudo pero el municipio no lo corrigió. La ejecución del cuarto trimestre es del 97.14% .
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia509 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>4,
						'value' => 15,
						'description' => 'Se ha realizado apoyo y capacitación a los Municipios de Bochalema, Pamplonita, Cácota, Cáchira, Ragonvalia, Herrán, Arboledas, Cucutilla, Durania, Gramalote, Lourdes, Mutiscua, San Cayetano, Santiago, Silos en la liquidación y cobro del Impuesto Predial y Sobretasa Ambiental. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia511 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia512 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>4,
						'value' => 97,
						'description' => '0',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia513 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>4,
						'value' => 91,
						'description' => 'Cumplimiento del Plan Anticorrupción vigencia 2019.
					Se reprograman unas acciones para la vigencia 2020.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia514 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>4,
						'value' => 35,
						'description' => '0',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia515 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>4,
						'value' => 1,
						'description' => 'Se realiza visita de re-certificación del sistema de gestión integral HSEQ de CORPONOR, renovando la certificación de la entidad en la normas ISO 9001:2015, ISO 14001:2015 y OHSAS 18001:2007',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia516 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia518 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>4,
						'value' => 100,
						'description' => 'Adecuación física y mantenimiento preventivo a las instalaciones de las sedes de Corponor en los municipios de Cúcuta, Los Patios y Pamplona, Departamento Norte de Santander',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia519 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>4,
						'value' => 100,
						'description' => 'Se ejecutaron las siguientes actividades de mantenimiento:
					 *Mantenimiento de vehículos                                             Mantenimiento limpieza Sedes                       *Mantenimiento computadores                                     *Mantenimiento jaulas hogar de paso el Zulia
					*Mantenimiento de aires acondicionados
					*Mantenimiento de Impresoras
					*Mantenimiento de motobombas
					*Mantenimiento de scanner y video vean
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia520 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia521 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>4,
						'value' => 9,
						'description' => 'Componente Gobierno abierto
					Componente TIC para servicios
					Componente TIC para la gestión de TI
					Desempeño en el componente Seguridad y Privacidad de la información',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia522 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>4,
						'value' => 100,
						'description' => 'Acciones de mejora relacionadas con tecnología
					Elementos de Hardware y Software adquiridos',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia523 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>4,
						'value' => 100,
						'description' => 'Ejecución del Plan de Administración, soporte y asistencia en la operación de la infraestructura tecnológica',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia524 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>4,
						'value' => 1,
						'description' => 'NOMBRE APLICATIVO: Tala y Poda Online - CORPONOR
					Se verifica pruebas de conectividad y de acceso a información teniendo en cuenta metodologías aprobadas.
					Nuevo tramite documentado análisis',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia525 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia526 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>4,
						'value' => 100,
						'description' => 'Se recepciona 27 proyectos del Plan de acción 2016-2019 para la vigencia 2019, de los cuales se viabilizan 27 proyectos.
					Se continuará con le ejecución de actividades para la asesoría, recepción, registro y viabilización de las respectivas modificaciones al los proyectos requeridas y presentados, según los lineamientos establecidos.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia527 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>4,
						'value' => 11,
						'description' => '11 Estudios y diseños técnicos necesarios o de soporte para la estructuración de proyectos
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia528 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>4,
						'value' => 18,
						'description' => '18 proyectos gestionados  (UNGRD – ANH – SGR – DNP – OCAD FONAM – FONDO DE ADAPTACION – MINAMBIENTE)
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia529 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity129,
						'year' =>4,
						'value' => 5,
						'description' => '0',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia531 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia532 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity131,
						'year' =>4,
						'value' => 100,
						'description' => 'SIRH  - 100% 
					SISAIRE - 100%
					SNIF 100%
					RESPEL - 100%
					RUA - 100%',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia533 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity132,
						'year' =>4,
						'value' => 95,
						'description' => '1. Apoyo a procesos de Planificación y Ordenamiento Territorial (POT´s y POMCAS)
					2. Gestión del Recurso Hídrico 
					3. Actualización  Información cartográfica  Autorizaciones Ambientales  - SISPROP
					4. Gestión con actores SINA de Información Geográfica Ambiental
					5. Atención a usuarios internos y externos 
					6. Apoyo al PGOF y Monitoreo de Deforestación 
					7. Capacitación a  usuarios internos y externos en SIG (ArcGIS Explorer)  
					8. Apoyo de Información para consultas en página WEB Corponor
					9. Organización de la Información Cartográfica en el Servidor SIG ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia534 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity134,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia536 = DB::getPdo()->lastInsertId(); 

					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.3',
						'name' => 'Compensación Explotación Recursos Naturales no Renovables ',
						'description' => 'Compensación Explotación Recursos Naturales no Renovables ',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 250,
						'code' => '1.2.7.4',
						'name' => 'Otros recursos del balance',
						'description' => 'Otros recursos del balance',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.4',
						'name' => 'Asignaciones directas',
						'description' => 'Asignaciones directas',
						'type_id' => 25,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.5',
						'name' => 'Fortalecimiento de Secretaria Técnica del OCAD',
						'description' => 'Fortalecimiento de Secretaria Técnica del OCAD',
						'type_id' => 25,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente19 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.6',
						'name' => 'Rendicimientos financieros Asignaciones Directas',
						'description' => 'Rendicimientos financieros Asignaciones Directas',
						'type_id' => 25,
						'final_level' => true,
						'group_id' => 25,
						]);
						$idFuente20 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 18874724141.32,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 70,
						'functioning' => 3774944828.264,
						'debt_service' => 1887472414.132,
						'fund' => 0,
						'investment' => 13212306898.924,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 10271550,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 80,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 2054310,
						'investment' => 8217240,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 996836087,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 15,
						'fund_percentage' => 20,
						'investment_percentage' => 45,
						'functioning' => 199367217.4,
						'debt_service' => 149525413.05,
						'fund' => 199367217.4,
						'investment' => 448576239.15,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 1919107299.5,
						'functioning_percentage' => 65,
						'debt_service_percentage' => 15,
						'fund_percentage' => 20,
						'investment_percentage' => 0,
						'functioning' => 1247419744.675,
						'debt_service' => 287866094.925,
						'fund' => 383821459.9,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 2351379376.67,
						'functioning_percentage' => 60,
						'debt_service_percentage' => 15,
						'fund_percentage' => 15,
						'investment_percentage' => 10,
						'functioning' => 1410827626.002,
						'debt_service' => 352706906.5005,
						'fund' => 352706906.5005,
						'investment' => 235137937.667,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 5809797851,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5809797851,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 1882455393.9,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 15,
						'fund_percentage' => 15,
						'investment_percentage' => 70,
						'functioning' => 0,
						'debt_service' => 282368309.085,
						'fund' => 282368309.085,
						'investment' => 1317718775.73,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 788869428.34,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 10,
						'fund_percentage' => 15,
						'investment_percentage' => 75,
						'functioning' => 0,
						'debt_service' => 78886942.834,
						'fund' => 118330414.251,
						'investment' => 591652071.255,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 85655810,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 85655810,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 21353554.6,
						'functioning_percentage' => 4.493,
						'debt_service_percentage' => 6.255,
						'fund_percentage' => 10.611,
						'investment_percentage' => 78.641,
						'functioning' => 959415.208178,
						'debt_service' => 1335664.84023,
						'fund' => 2265825.678606,
						'investment' => 16792648.872986,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 68111027.07,
						'functioning_percentage' => 50,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 50,
						'functioning' => 34055513.535,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 34055513.535,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 139597635.31,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 13959763.531,
						'fund' => 0,
						'investment' => 125637871.779,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 167981302.09,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 10,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 16798130.209,
						'fund' => 0,
						'investment' => 151183171.881,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 3044451950,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3044451950,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 9157855448,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9157855448,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
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
						$idPlan65 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 275826569,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 275826569,
						'year' => 1,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 24645829939,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 24645829939,
						'year' => 2,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 11204783,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 10084304.7,
						'debt_service' => 0,
						'fund' => 1120478.3,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1504920385.75,
						'functioning_percentage' => 85,
						'debt_service_percentage' => 5,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1279182327.8875,
						'debt_service' => 75246019.2875,
						'fund' => 150492038.575,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 200000,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 10,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 160000,
						'debt_service' => 20000,
						'fund' => 20000,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 1265315478,
						'functioning_percentage' => 70,
						'debt_service_percentage' => 10,
						'fund_percentage' => 20,
						'investment_percentage' => 0,
						'functioning' => 885720834.6,
						'debt_service' => 126531547.8,
						'fund' => 253063095.6,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 2329062261,
						'functioning_percentage' => 75,
						'debt_service_percentage' => 10,
						'fund_percentage' => 15,
						'investment_percentage' => 0,
						'functioning' => 1746796695.75,
						'debt_service' => 232906226.1,
						'fund' => 349359339.15,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 2747906645,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 10,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 2198325316,
						'debt_service' => 274790664.5,
						'fund' => 274790664.5,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 3308696276.79,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 330869627.679,
						'investment' => 2977826649.111,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 1184543219.6,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 118454321.96,
						'investment' => 1066088897.64,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 30000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 3000000,
						'investment' => 27000000,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 200000000,
						'functioning_percentage' => 21.1714,
						'debt_service_percentage' => 6.9049,
						'fund_percentage' => 11.6762,
						'investment_percentage' => 60.2475,
						'functioning' => 42342800,
						'debt_service' => 13809800,
						'fund' => 23352400,
						'investment' => 120495000,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 256037286.51,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 25603728.651,
						'investment' => 230433557.859,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 173734523.14,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 173734523.14,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 6764644176.56,
						'functioning_percentage' => 50,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 50,
						'functioning' => 3382322088.28,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3382322088.28,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 3249058000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3249058000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 5499622856,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5499622856,
						'year' => 2,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
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
						$idPlan66 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 627716,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 627716,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
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
						$idPlan68 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 25713806148,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 25713806148,
						'year' => 3,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 13361345,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 13361345,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 3511863765,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 3160677388.5,
						'debt_service' => 0,
						'fund' => 351186376.5,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 2500000000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 2250000000,
						'debt_service' => 0,
						'fund' => 250000000,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 1568220912,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1411398820.8,
						'debt_service' => 0,
						'fund' => 156822091.2,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 1744718069,
						'functioning_percentage' => 95,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 0,
						'functioning' => 1657482165.55,
						'debt_service' => 0,
						'fund' => 87235903.45,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 3057730616,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 1,
						'investment_percentage' => 9,
						'functioning' => 2751957554.4,
						'debt_service' => 0,
						'fund' => 30577306.16,
						'investment' => 275195755.44,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 1229801884,
						'functioning_percentage' => 5,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 85,
						'functioning' => 61490094.2,
						'debt_service' => 0,
						'fund' => 122980188.4,
						'investment' => 1045331601.4,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 1344756486,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 134475648.6,
						'investment' => 1210280837.4,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 39952244,
						'functioning_percentage' => 38.616,
						'debt_service_percentage' => 0,
						'fund_percentage' => 21.9,
						'investment_percentage' => 39.484,
						'functioning' => 15427958.54304,
						'debt_service' => 0,
						'fund' => 8749541.436,
						'investment' => 15774744.02096,
						'year' => 3,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 439860103,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 43986010.3,
						'investment' => 395874092.7,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 152298270,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 152298270,
						'year' => 3,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 5369107626,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5369107626,
						'year' => 3,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 3413551000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3413551000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 38609064775,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 38609064775,
						'year' => 3,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 0,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan67 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 65477707,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 65477707,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
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
						$idPlan69 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 26329000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 26329000000,
						'year' => 4,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 3431000500,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 3087900450,
						'debt_service' => 0,
						'fund' => 343100050,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 2701077882,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 70,
						'functioning' => 540215576.4,
						'debt_service' => 0,
						'fund' => 270107788.2,
						'investment' => 1890754517.4,
						'year' => 4,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 4141895721.85,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 3727706149.665,
						'debt_service' => 0,
						'fund' => 414189572.185,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 3949032315,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 80,
						'functioning' => 394903231.5,
						'debt_service' => 0,
						'fund' => 394903231.5,
						'investment' => 3159225852,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 2661707644,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 2395536879.6,
						'debt_service' => 0,
						'fund' => 266170764.4,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 47845782,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 47845782,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 207799959,
						'functioning_percentage' => 21.2528,
						'debt_service_percentage' => 0,
						'fund_percentage' => 6.749,
						'investment_percentage' => 71.9982,
						'functioning' => 44163309.686352,
						'debt_service' => 0,
						'fund' => 14024419.23291,
						'investment' => 149612230.080738,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 2731382997,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 8,
						'investment_percentage' => 92,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 218510639.76,
						'investment' => 2512872357.24,
						'year' => 4,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 170614238,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 170614238,
						'year' => 4,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 4092048258.2,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4092048258.2,
						'year' => 4,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 3567053000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3567053000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 5082917693,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5082917693,
						'year' => 4,
						]);
						$idPlan62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 1757884205,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1757884205,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 13033551,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 13033551,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan64 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente20,
						'value' => 0,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan70 = DB::getPdo()->lastInsertId();
						
					  DB::table('implementations')->insert([
						'p_a_i_s_id'=>$idpai1,
						]);
						$idImplementation1 = DB::getPdo()->lastInsertId();
						
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 18342390882,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 10271550,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 996836087,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3195691370,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1645432624.8,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 4809797852,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2731399844,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1277924785,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 85655810,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 21353554.6,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 68111027.07,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 130597635.31,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 167981302.09,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3044451950,
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
						'date' => '2016-12-31',
						'value' => 1064572459.61,
						'financial_plans_id' => $idPlan65,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo65 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 275826569,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 25803994029,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 11204783,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1739442521.6,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1265315478,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2473493824,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2172594370,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3175623906.32,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1227821850.6,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 27040619,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 20290556.64,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 349493704.94,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 270048619.69,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 6967742558.56,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3249058000,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 9196854722,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1331941440.69,
						'financial_plans_id' => $idPlan66,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo66 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 32603290,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 35950662.2,
						'financial_plans_id' => $idPlan68,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo68 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 27834696700,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3361345,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1986345753,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1419924904,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1798566149,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1744718068,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3316569556.78,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1540021311.9,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 32891178,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 44970549.49,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 578435233.96,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 186161712.75,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 5401452805,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3413551000,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4729116959,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1688332067.69,
						'financial_plans_id' => $idPlan67,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo67 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 78511258,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 50298583.09,
						'financial_plans_id' => $idPlan69,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo69 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 24042544409.01,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2962326482.9,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 4109199255,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3582842024.97,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3131688702.6,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2539240329.5,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 70726564,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 156798358.13,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3157165879.93,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 75695929.28,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 4092048258.2,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3567053000,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 43480544066,
						'financial_plans_id' => $idPlan62,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1688332067.69,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 13033551,
						'financial_plans_id' => $idPlan64,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo64 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 72057810.83,
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
							'group_id' => 25,
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
							'group_id' => 25,
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
							'group_id' => 25,
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
							'group_id' => 25,
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
							'group_id' => 25,
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
							'group_id' => 25,
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
							'group_id' => 25,
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
							'group_id' => 25,
							]);
							$idFuenteGasto8 = DB::getPdo()->lastInsertId();
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 2898913332.22,
								'value_comitted' => 2898913332.22,
								'value_paid' => 2730416039.22,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 25,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 560143496.55,
								'value_comitted' => 560143496.55,
								'value_paid' => 425426380.55,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto2,
								'p_a_i_id' => $idpai1,
								'group_id' => 25,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 3027261684.78,
								'value_comitted' => 2886488872.78,
								'value_paid' => 2551998783.78,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto3,
								'p_a_i_id' => $idpai1,
								'group_id' => 25,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 158302708.51,
								'value_comitted' => 158302708.51,
								'value_paid' => 158302708.51,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 25,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 22953097,
								'value_comitted' => 22953097,
								'value_paid' => 22953097,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto5,
								'p_a_i_id' => $idpai1,
								'group_id' => 25,
								]);
								$idGasto5 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 1340914565.89,
								'value_comitted' => 1340914565.89,
								'value_paid' => 1340914565.89,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => FALSE,
								'compensation' => TRUE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto6,
								'p_a_i_id' => $idpai1,
								'group_id' => 25,
								]);
								$idGasto6 = DB::getPdo()->lastInsertId();


							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 3070919621.82,
								'value_comitted' => 3068662396.33,
								'value_paid' => 3068662396.33,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto8,
								'p_a_i_id' => $idpai1,
								'group_id' => 25,
								]);
								$idGasto7 = DB::getPdo()->lastInsertId();
								
								
							
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 3033669950,
									'value_comitted' => 3033669950,
									'value_paid' => 3010999456,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 25,
									]);
									$idGasto8 = DB::getPdo()->lastInsertId();

									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 10782000,
									'value_comitted' => 10782000,
									'value_paid' => 10782000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto5,
									'p_a_i_id' => $idpai1,
									'group_id' => 25,
									]);
									$idGasto9 = DB::getPdo()->lastInsertId();

		
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 4121210196,
										'value_comitted' => 3964618790.94,
										'value_paid' => 3843092705.94,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto10 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 776719115,
										'value_comitted' => 770553463.75,
										'value_paid' => 702285111.75,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto11 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 4449407587,
										'value_comitted' => 4298053575.78,
										'value_paid' => 4137203093.78,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto3,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto12 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 140973000,
										'value_comitted' => 95906620.64,
										'value_paid' => 95906620.64,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto13 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 36871832,
										'value_comitted' => 36708704,
										'value_paid' => 36708704,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto5,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto14 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 1530125800,
										'value_comitted' => 1215216359.09,
										'value_paid' => 1215216359.09,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => FALSE,
										'compensation' => TRUE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto6,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto15 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 160000000,
										'value_comitted' => 158867200.91,
										'value_paid' => 158867200.91,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto7,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto16 = DB::getPdo()->lastInsertId();
										
										

									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 723304114.38,
										'value_comitted' => 720357111,
										'value_paid' => 720357111,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto8,
										'p_a_i_id' => $idpai1,
										'group_id' => 25,
										]);
										$idGasto17 = DB::getPdo()->lastInsertId();
										
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 3238276000,
											'value_comitted' => 3238276000,
											'value_paid' => 3238276000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 25,
											]);
											$idGasto18 = DB::getPdo()->lastInsertId();

											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 10782000,
											'value_comitted' => 10782000,
											'value_paid' => 10782000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto5,
											'p_a_i_id' => $idpai1,
											'group_id' => 25,
											]);
											$idGasto19 = DB::getPdo()->lastInsertId();

											
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 5315798511,
												'value_comitted' => 5279349496.27,
												'value_paid' => 5154883421.27,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 25,
												]);
												$idGasto20 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 62475656,
												'value_comitted' => 59946400,
												'value_paid' => 59946400,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto2,
												'p_a_i_id' => $idpai1,
												'group_id' => 25,
												]);
												$idGasto21 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 5554947675,
												'value_comitted' => 5210118561.33,
												'value_paid' => 5126004123.33,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto3,
												'p_a_i_id' => $idpai1,
												'group_id' => 25,
												]);
												$idGasto22 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 139000000,
												'value_comitted' => 121881108.65,
												'value_paid' => 121881108.65,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto4,
												'p_a_i_id' => $idpai1,
												'group_id' => 25,
												]);
												$idGasto23 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 49464784,
												'value_comitted' => 49308408,
												'value_paid' => 49308408,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto5,
												'p_a_i_id' => $idpai1,
												'group_id' => 25,
												]);
												$idGasto24 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 1186013164,
												'value_comitted' => 1185643945.97,
												'value_paid' => 1185643945.97,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => FALSE,
												'compensation' => TRUE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto6,
												'p_a_i_id' => $idpai1,
												'group_id' => 25,
												]);
												$idGasto25 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 230841391,
												'value_comitted' => 230562027.25,
												'value_paid' => 230562027.25,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto7,
												'p_a_i_id' => $idpai1,
												'group_id' => 25,
												]);
												$idGasto26 = DB::getPdo()->lastInsertId();
	
												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 3402445000,
													'value_comitted' => 3402445000,
													'value_paid' => 3393183300,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 25,
													]);
													$idGasto27 = DB::getPdo()->lastInsertId();
													
													
												
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 11106000,
													'value_comitted' => 11106000,
													'value_paid' => 11106000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto5,
													'p_a_i_id' => $idpai1,
													'group_id' => 25,
													]);
													$idGasto28 = DB::getPdo()->lastInsertId();
													

													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 5925361399,
														'value_comitted' => 5809212262.65,
														'value_paid' => 5580086005.65,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto1,
														'p_a_i_id' => $idpai1,
														'group_id' => 25,
														]);
														$idGasto29 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 73100000,
														'value_comitted' => 73000000,
														'value_paid' => 45407625,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto2,
														'p_a_i_id' => $idpai1,
														'group_id' => 25,
														]);
														$idGasto30 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 5817550591,
														'value_comitted' => 5720634075.1,
														'value_paid' => 5097247361.1,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto3,
														'p_a_i_id' => $idpai1,
														'group_id' => 25,
														]);
														$idGasto31 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 118054136,
														'value_comitted' => 103846903.52,
														'value_paid' => 103846903.52,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto4,
														'p_a_i_id' => $idpai1,
														'group_id' => 25,
														]);
														$idGasto32 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 39102944,
														'value_comitted' => 38906700,
														'value_paid' => 38906700,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto5,
														'p_a_i_id' => $idpai1,
														'group_id' => 25,
														]);
														$idGasto33 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 1921006803,
														'value_comitted' => 1921006317.52,
														'value_paid' => 1921006317.52,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => FALSE,
														'compensation' => TRUE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto6,
														'p_a_i_id' => $idpai1,
														'group_id' => 25,
														]);
														$idGasto34 = DB::getPdo()->lastInsertId();
	
														
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 3555614000,
															'value_comitted' => 3555614000,
															'value_paid' => 3555614000,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto1,
															'p_a_i_id' => $idpai1,
															'group_id' => 25,
															]);
															$idGasto35 = DB::getPdo()->lastInsertId();
	
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 11439000,
															'value_comitted' => 11439000,
															'value_paid' => 11439000,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto5,
															'p_a_i_id' => $idpai1,
															'group_id' => 25,
															]);
															$idGasto36 = DB::getPdo()->lastInsertId();

															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity4,
																'source_id' =>$idPlan1,
																'value' => 13212306898.924,
																'goal' => 0,
																'evidence_balance' => 13212306898.924,
																'age' => 1,
																]);
																$idactivitySource1 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity11,
																'source_id' =>$idPlan15,
																'value' => 756415209.34,
																'goal' => 0,
																'evidence_balance' => 756415209.34,
																'age' => 1,
																]);
																$idactivitySource2 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity21,
																'source_id' =>$idPlan15,
																'value' => 3220067607.9,
																'goal' => 0,
																'evidence_balance' => 3220067607.9,
																'age' => 1,
																]);
																$idactivitySource3 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity24,
																'source_id' =>$idPlan15,
																'value' => 32759867.82,
																'goal' => 0,
																'evidence_balance' => 32759867.82,
																'age' => 1,
																]);
																$idactivitySource4 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity26,
																'source_id' =>$idPlan15,
																'value' => 10293376.79,
																'goal' => 0,
																'evidence_balance' => 10293376.79,
																'age' => 1,
																]);
																$idactivitySource5 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity38,
																'source_id' =>$idPlan15,
																'value' => 2151098678.37,
																'goal' => 0,
																'evidence_balance' => 2151098678.37,
																'age' => 1,
																]);
																$idactivitySource6 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity42,
																'source_id' =>$idPlan15,
																'value' => 99735145.17,
																'goal' => 0,
																'evidence_balance' => 99735145.17,
																'age' => 1,
																]);
																$idactivitySource7 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity46,
																'source_id' =>$idPlan15,
																'value' => 99511627.8,
																'goal' => 0,
																'evidence_balance' => 99511627.8,
																'age' => 1,
																]);
																$idactivitySource8 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity52,
																'source_id' =>$idPlan15,
																'value' => 204805206.53,
																'goal' => 0,
																'evidence_balance' => 204805206.53,
																'age' => 1,
																]);
																$idactivitySource9 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity57,
																'source_id' =>$idPlan15,
																'value' => 256897651.814001,
																'goal' => 0,
																'evidence_balance' => 256897651.814001,
																'age' => 1,
																]);
																$idactivitySource10 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity64,
																'source_id' =>$idPlan6,
																'value' => 709295273.67,
																'goal' => 0,
																'evidence_balance' => 709295273.67,
																'age' => 1,
																]);
																$idactivitySource11 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity69,
																'source_id' =>$idPlan6,
																'value' => 285548337.12,
																'goal' => 0,
																'evidence_balance' => 285548337.12,
																'age' => 1,
																]);
																$idactivitySource12 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity74,
																'source_id' =>$idPlan6,
																'value' => 227920122.21,
																'goal' => 0,
																'evidence_balance' => 227920122.21,
																'age' => 1,
																]);
																$idactivitySource13 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity78,
																'source_id' =>$idPlan6,
																'value' => 17464380,
																'goal' => 0,
																'evidence_balance' => 17464380,
																'age' => 1,
																]);
																$idactivitySource14 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity83,
																'source_id' =>$idPlan6,
																'value' => 72290323.13,
																'goal' => 0,
																'evidence_balance' => 72290323.13,
																'age' => 1,
																]);
																$idactivitySource15 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity86,
																'source_id' =>$idPlan6,
																'value' => 890079220.66,
																'goal' => 0,
																'evidence_balance' => 890079220.66,
																'age' => 1,
																]);
																$idactivitySource16 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity91,
																'source_id' =>$idPlan6,
																'value' => 35115155.11,
																'goal' => 0,
																'evidence_balance' => 35115155.11,
																'age' => 1,
																]);
																$idactivitySource17 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity96,
																'source_id' =>$idPlan6,
																'value' => 82701837.55,
																'goal' => 0,
																'evidence_balance' => 82701837.55,
																'age' => 1,
																]);
																$idactivitySource18 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity98,
																'source_id' =>$idPlan6,
																'value' => 16218160,
																'goal' => 0,
																'evidence_balance' => 16218160,
																'age' => 1,
																]);
																$idactivitySource19 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity102,
																'source_id' =>$idPlan6,
																'value' => 164683257.83,
																'goal' => 0,
																'evidence_balance' => 164683257.83,
																'age' => 1,
																]);
																$idactivitySource20 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity110,
																'source_id' =>$idPlan6,
																'value' => 591038072.38,
																'goal' => 0,
																'evidence_balance' => 591038072.38,
																'age' => 1,
																]);
																$idactivitySource21 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity116,
																'source_id' =>$idPlan6,
																'value' => 64674802.4,
																'goal' => 0,
																'evidence_balance' => 64674802.4,
																'age' => 1,
																]);
																$idactivitySource22 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity119,
																'source_id' =>$idPlan6,
																'value' => 79680000,
																'goal' => 0,
																'evidence_balance' => 79680000,
																'age' => 1,
																]);
																$idactivitySource23 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity124,
																'source_id' =>$idPlan6,
																'value' => 364798403.39,
																'goal' => 0,
																'evidence_balance' => 364798403.39,
																'age' => 1,
																]);
																$idactivitySource24 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity130,
																'source_id' =>$idPlan6,
																'value' => 366645982.78,
																'goal' => 0,
																'evidence_balance' => 366645982.78,
																'age' => 1,
																]);
																$idactivitySource25 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity134,
																'source_id' =>$idPlan6,
																'value' => 60250682.7,
																'goal' => 0,
																'evidence_balance' => 60250682.7,
																'age' => 1,
																]);
																$idactivitySource26 = DB::getPdo()->lastInsertId();
																
																
																
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity4,
																	'source_id' =>$idPlan15,
																	'value' => 2326271076.466,
																	'goal' => 0,
																	'evidence_balance' => 2326271076.466,
																	'age' => 1,
																	]);
																	$idactivitySource27 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity57,
																	'source_id' =>$idPlan6,
																	'value' => 1322203973.726,
																	'goal' => 0,
																	'evidence_balance' => 1322203973.726,
																	'age' => 1,
																	]);
																	$idactivitySource28 = DB::getPdo()->lastInsertId();
																	
																	
																	
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia4,
																		'activity_source_id' =>$idactivitySource1,
																		'value' => 13212306898.924,
																		]);
																		$idevidenceFinancial1 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia11,
																		'activity_source_id' =>$idactivitySource2,
																		'value' => 664942458.34,
																		]);
																		$idevidenceFinancial2 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia21,
																		'activity_source_id' =>$idactivitySource3,
																		'value' => 814764183.37,
																		]);
																		$idevidenceFinancial3 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia24,
																		'activity_source_id' =>$idactivitySource4,
																		'value' => 32759867.82,
																		]);
																		$idevidenceFinancial4 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia26,
																		'activity_source_id' =>$idactivitySource5,
																		'value' => 10293376.79,
																		]);
																		$idevidenceFinancial5 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia38,
																		'activity_source_id' =>$idactivitySource6,
																		'value' => 1618412762.37,
																		]);
																		$idevidenceFinancial6 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia42,
																		'activity_source_id' =>$idactivitySource7,
																		'value' => 51417903.17,
																		]);
																		$idevidenceFinancial7 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia46,
																		'activity_source_id' =>$idactivitySource8,
																		'value' => 57886428.8,
																		]);
																		$idevidenceFinancial8 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia52,
																		'activity_source_id' =>$idactivitySource9,
																		'value' => 181198556.53,
																		]);
																		$idevidenceFinancial9 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia57,
																		'activity_source_id' =>$idactivitySource10,
																		'value' => 256897651.814001,
																		]);
																		$idevidenceFinancial10 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia64,
																		'activity_source_id' =>$idactivitySource11,
																		'value' => 709295273.67,
																		]);
																		$idevidenceFinancial11 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia69,
																		'activity_source_id' =>$idactivitySource12,
																		'value' => 285548337.12,
																		]);
																		$idevidenceFinancial12 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia74,
																		'activity_source_id' =>$idactivitySource13,
																		'value' => 227920122.21,
																		]);
																		$idevidenceFinancial13 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia78,
																		'activity_source_id' =>$idactivitySource14,
																		'value' => 17464380,
																		]);
																		$idevidenceFinancial14 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia83,
																		'activity_source_id' =>$idactivitySource15,
																		'value' => 72290323.13,
																		]);
																		$idevidenceFinancial15 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia86,
																		'activity_source_id' =>$idactivitySource16,
																		'value' => 853357498.66,
																		]);
																		$idevidenceFinancial16 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia91,
																		'activity_source_id' =>$idactivitySource17,
																		'value' => 35115155.11,
																		]);
																		$idevidenceFinancial17 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia96,
																		'activity_source_id' =>$idactivitySource18,
																		'value' => 82701837.55,
																		]);
																		$idevidenceFinancial18 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia98,
																		'activity_source_id' =>$idactivitySource19,
																		'value' => 16218160,
																		]);
																		$idevidenceFinancial19 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia102,
																		'activity_source_id' =>$idactivitySource20,
																		'value' => 164683257.83,
																		]);
																		$idevidenceFinancial20 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia110,
																		'activity_source_id' =>$idactivitySource21,
																		'value' => 591038072.38,
																		]);
																		$idevidenceFinancial21 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia116,
																		'activity_source_id' =>$idactivitySource22,
																		'value' => 64674802.4,
																		]);
																		$idevidenceFinancial22 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia119,
																		'activity_source_id' =>$idactivitySource23,
																		'value' => 0,
																		]);
																		$idevidenceFinancial23 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia124,
																		'activity_source_id' =>$idactivitySource24,
																		'value' => 364798403.39,
																		]);
																		$idevidenceFinancial24 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia130,
																		'activity_source_id' =>$idactivitySource25,
																		'value' => 359717615.78,
																		]);
																		$idevidenceFinancial25 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia134,
																		'activity_source_id' =>$idactivitySource26,
																		'value' => 60250682.7,
																		]);
																		$idevidenceFinancial26 = DB::getPdo()->lastInsertId();
																		
																		
																		
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia4,
																			'activity_source_id' =>$idactivitySource27,
																			'value' => 276869100.466,
																			]);
																			$idevidenceFinancial27 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia57,
																			'activity_source_id' =>$idactivitySource28,
																			'value' => 1206682832.726,
																			]);
																			$idevidenceFinancial28 = DB::getPdo()->lastInsertId();
																			
																			
																			
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity4,
																				'source_id' =>$idPlan17,
																				'value' => 2761458090.31,
																				'goal' => 0,
																				'evidence_balance' => 2761458090.31,
																				'age' => 2,
																				]);
																				$idactivitySource29 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity11,
																				'source_id' =>$idPlan17,
																				'value' => 2761458090.31,
																				'goal' => 0,
																				'evidence_balance' => 2761458090.31,
																				'age' => 2,
																				]);
																				$idactivitySource30 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity21,
																				'source_id' =>$idPlan17,
																				'value' => 7602322764.82,
																				'goal' => 0,
																				'evidence_balance' => 7602322764.82,
																				'age' => 2,
																				]);
																				$idactivitySource31 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity24,
																				'source_id' =>$idPlan17,
																				'value' => 40100000,
																				'goal' => 0,
																				'evidence_balance' => 40100000,
																				'age' => 2,
																				]);
																				$idactivitySource32 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity26,
																				'source_id' =>$idPlan17,
																				'value' => 9860000,
																				'goal' => 0,
																				'evidence_balance' => 9860000,
																				'age' => 2,
																				]);
																				$idactivitySource33 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity38,
																				'source_id' =>$idPlan17,
																				'value' => 2170757940.41,
																				'goal' => 0,
																				'evidence_balance' => 2170757940.41,
																				'age' => 2,
																				]);
																				$idactivitySource34 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity42,
																				'source_id' =>$idPlan17,
																				'value' => 158317242,
																				'goal' => 0,
																				'evidence_balance' => 158317242,
																				'age' => 2,
																				]);
																				$idactivitySource35 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity46,
																				'source_id' =>$idPlan17,
																				'value' => 189425199,
																				'goal' => 0,
																				'evidence_balance' => 189425199,
																				'age' => 2,
																				]);
																				$idactivitySource36 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity52,
																				'source_id' =>$idPlan17,
																				'value' => 324042760.6,
																				'goal' => 0,
																				'evidence_balance' => 324042760.6,
																				'age' => 2,
																				]);
																				$idactivitySource37 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity57,
																				'source_id' =>$idPlan17,
																				'value' => 1303336896,
																				'goal' => 0,
																				'evidence_balance' => 1303336896,
																				'age' => 2,
																				]);
																				$idactivitySource38 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity64,
																				'source_id' =>$idPlan17,
																				'value' => 964997721,
																				'goal' => 0,
																				'evidence_balance' => 964997721,
																				'age' => 2,
																				]);
																				$idactivitySource39 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity69,
																				'source_id' =>$idPlan17,
																				'value' => 427088077,
																				'goal' => 0,
																				'evidence_balance' => 427088077,
																				'age' => 2,
																				]);
																				$idactivitySource40 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity74,
																				'source_id' =>$idPlan17,
																				'value' => 733674555,
																				'goal' => 0,
																				'evidence_balance' => 733674555,
																				'age' => 2,
																				]);
																				$idactivitySource41 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity78,
																				'source_id' =>$idPlan17,
																				'value' => 5198990602.55,
																				'goal' => 0,
																				'evidence_balance' => 5198990602.55,
																				'age' => 2,
																				]);
																				$idactivitySource42 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity83,
																				'source_id' =>$idPlan32,
																				'value' => 891502279,
																				'goal' => 0,
																				'evidence_balance' => 891502279,
																				'age' => 2,
																				]);
																				$idactivitySource44 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity86,
																				'source_id' =>$idPlan32,
																				'value' => 1472315439.89,
																				'goal' => 0,
																				'evidence_balance' => 1472315439.89,
																				'age' => 2,
																				]);
																				$idactivitySource45 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity91,
																				'source_id' =>$idPlan32,
																				'value' => 44969365.32,
																				'goal' => 0,
																				'evidence_balance' => 44969365.32,
																				'age' => 2,
																				]);
																				$idactivitySource46 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity96,
																				'source_id' =>$idPlan32,
																				'value' => 94078426,
																				'goal' => 0,
																				'evidence_balance' => 94078426,
																				'age' => 2,
																				]);
																				$idactivitySource47 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity98,
																				'source_id' =>$idPlan32,
																				'value' => 55025498,
																				'goal' => 0,
																				'evidence_balance' => 55025498,
																				'age' => 2,
																				]);
																				$idactivitySource48 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity102,
																				'source_id' =>$idPlan32,
																				'value' => 175721737,
																				'goal' => 0,
																				'evidence_balance' => 175721737,
																				'age' => 2,
																				]);
																				$idactivitySource49 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity110,
																				'source_id' =>$idPlan32,
																				'value' => 2107841779,
																				'goal' => 0,
																				'evidence_balance' => 2107841779,
																				'age' => 2,
																				]);
																				$idactivitySource50 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity116,
																				'source_id' =>$idPlan32,
																				'value' => 145396215.340002,
																				'goal' => 0,
																				'evidence_balance' => 145396215.340002,
																				'age' => 2,
																				]);
																				$idactivitySource51 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity119,
																				'source_id' =>$idPlan30,
																				'value' => 175547743.57,
																				'goal' => 0,
																				'evidence_balance' => 175547743.57,
																				'age' => 2,
																				]);
																				$idactivitySource52 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity124,
																				'source_id' =>$idPlan30,
																				'value' => 290870500,
																				'goal' => 0,
																				'evidence_balance' => 290870500,
																				'age' => 2,
																				]);
																				$idactivitySource53 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity130,
																				'source_id' =>$idPlan30,
																				'value' => 503361015.47,
																				'goal' => 0,
																				'evidence_balance' => 503361015.47,
																				'age' => 2,
																				]);
																				$idactivitySource54 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity134,
																				'source_id' =>$idPlan30,
																				'value' => 61118876,
																				'goal' => 0,
																				'evidence_balance' => 61118876,
																				'age' => 2,
																				]);
																				$idactivitySource55 = DB::getPdo()->lastInsertId();
																				
																				
																				
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity78,
																					'source_id' =>$idPlan32,
																					'value' => 512772116.449997,
																					'goal' => 0,
																					'evidence_balance' => 512772116.449997,
																					'age' => 2,
																					]);
																					$idactivitySource56 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity116,
																					'source_id' =>$idPlan30,
																					'value' => 163189226.659998,
																					'goal' => 0,
																					'evidence_balance' => 163189226.659998,
																					'age' => 2,
																					]);
																					$idactivitySource57 = DB::getPdo()->lastInsertId();
																					
																					
																					
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia138,
																						'activity_source_id' =>$idactivitySource29,
																						'value' => 2252016414.02,
																						]);
																						$idevidenceFinancial29 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia145,
																						'activity_source_id' =>$idactivitySource30,
																						'value' => 2252016414.02,
																						]);
																						$idevidenceFinancial30 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia155,
																						'activity_source_id' =>$idactivitySource31,
																						'value' => 7593037779.57,
																						]);
																						$idevidenceFinancial31 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia158,
																						'activity_source_id' =>$idactivitySource32,
																						'value' => 40024718.99,
																						]);
																						$idevidenceFinancial32 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia160,
																						'activity_source_id' =>$idactivitySource33,
																						'value' => 9850655.18,
																						]);
																						$idevidenceFinancial33 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia172,
																						'activity_source_id' =>$idactivitySource34,
																						'value' => 1537829198.46,
																						]);
																						$idevidenceFinancial34 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia176,
																						'activity_source_id' =>$idactivitySource35,
																						'value' => 155924806.81,
																						]);
																						$idevidenceFinancial35 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia180,
																						'activity_source_id' =>$idactivitySource36,
																						'value' => 186034021.02,
																						]);
																						$idevidenceFinancial36 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia186,
																						'activity_source_id' =>$idactivitySource37,
																						'value' => 321463046.65,
																						]);
																						$idevidenceFinancial37 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia191,
																						'activity_source_id' =>$idactivitySource38,
																						'value' => 1292433590.26,
																						]);
																						$idevidenceFinancial38 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia198,
																						'activity_source_id' =>$idactivitySource39,
																						'value' => 964166588.49,
																						]);
																						$idevidenceFinancial39 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia203,
																						'activity_source_id' =>$idactivitySource40,
																						'value' => 405374434.83,
																						]);
																						$idevidenceFinancial40 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia208,
																						'activity_source_id' =>$idactivitySource41,
																						'value' => 702866192.44,
																						]);
																						$idevidenceFinancial41 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia212,
																						'activity_source_id' =>$idactivitySource42,
																						'value' => 5198990602.55,
																						]);
																						$idevidenceFinancial42 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia217,
																						'activity_source_id' =>$idactivitySource44,
																						'value' => 95865123.22,
																						]);
																						$idevidenceFinancial44 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia220,
																						'activity_source_id' =>$idactivitySource45,
																						'value' => 769847891.84,
																						]);
																						$idevidenceFinancial45 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia225,
																						'activity_source_id' =>$idactivitySource46,
																						'value' => 44896929.09,
																						]);
																						$idevidenceFinancial46 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia230,
																						'activity_source_id' =>$idactivitySource47,
																						'value' => 76342312.83,
																						]);
																						$idevidenceFinancial47 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia232,
																						'activity_source_id' =>$idactivitySource48,
																						'value' => 53993721.28,
																						]);
																						$idevidenceFinancial48 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia236,
																						'activity_source_id' =>$idactivitySource49,
																						'value' => 175546007.97,
																						]);
																						$idevidenceFinancial49 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia244,
																						'activity_source_id' =>$idactivitySource50,
																						'value' => 2099788928.21,
																						]);
																						$idevidenceFinancial50 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia250,
																						'activity_source_id' =>$idactivitySource51,
																						'value' => 145396215.340002,
																						]);
																						$idevidenceFinancial51 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia253,
																						'activity_source_id' =>$idactivitySource52,
																						'value' => 131069168.31,
																						]);
																						$idevidenceFinancial52 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia258,
																						'activity_source_id' =>$idactivitySource53,
																						'value' => 277570905.26,
																						]);
																						$idevidenceFinancial53 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia264,
																						'activity_source_id' =>$idactivitySource54,
																						'value' => 497684016.54,
																						]);
																						$idevidenceFinancial54 = DB::getPdo()->lastInsertId();
																						
																						
																						
																					DB::table('evidence_financial')->insert([
																						'evidence_id' => $idevidencia268,
																						'activity_source_id' =>$idactivitySource55,
																						'value' => 60639149.99,
																						]);
																						$idevidenceFinancial55 = DB::getPdo()->lastInsertId();
																						
																						
																						
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia212,
																							'activity_source_id' =>$idactivitySource56,
																							'value' => 467935788.449997,
																							]);
																							$idevidenceFinancial56 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia250,
																							'activity_source_id' =>$idactivitySource57,
																							'value' => 155613790.629998,
																							]);
																							$idevidenceFinancial57 = DB::getPdo()->lastInsertId();
																							
																							
																							
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity4,
																								'source_id' =>$idPlan48,
																								'value' => 38315045979,
																								'goal' => 0,
																								'evidence_balance' => 38315045979,
																								'age' => 3,
																								]);
																								$idactivitySource58 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity11,
																								'source_id' =>$idPlan48,
																								'value' => 294018796,
																								'goal' => 0,
																								'evidence_balance' => 294018796,
																								'age' => 3,
																								]);
																								$idactivitySource59 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity21,
																								'source_id' =>$idPlan34,
																								'value' => 3404198794,
																								'goal' => 0,
																								'evidence_balance' => 3404198794,
																								'age' => 3,
																								]);
																								$idactivitySource60 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity24,
																								'source_id' =>$idPlan34,
																								'value' => 45600000,
																								'goal' => 0,
																								'evidence_balance' => 45600000,
																								'age' => 3,
																								]);
																								$idactivitySource61 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity26,
																								'source_id' =>$idPlan34,
																								'value' => 3018186734,
																								'goal' => 0,
																								'evidence_balance' => 3018186734,
																								'age' => 3,
																								]);
																								$idactivitySource62 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity38,
																								'source_id' =>$idPlan34,
																								'value' => 3893045828,
																								'goal' => 0,
																								'evidence_balance' => 3893045828,
																								'age' => 3,
																								]);
																								$idactivitySource63 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity42,
																								'source_id' =>$idPlan34,
																								'value' => 324800000,
																								'goal' => 0,
																								'evidence_balance' => 324800000,
																								'age' => 3,
																								]);
																								$idactivitySource64 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity46,
																								'source_id' =>$idPlan34,
																								'value' => 266380000,
																								'goal' => 0,
																								'evidence_balance' => 266380000,
																								'age' => 3,
																								]);
																								$idactivitySource65 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity52,
																								'source_id' =>$idPlan34,
																								'value' => 464819339,
																								'goal' => 0,
																								'evidence_balance' => 464819339,
																								'age' => 3,
																								]);
																								$idactivitySource66 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity57,
																								'source_id' =>$idPlan34,
																								'value' => 2181532139,
																								'goal' => 0,
																								'evidence_balance' => 2181532139,
																								'age' => 3,
																								]);
																								$idactivitySource67 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity64,
																								'source_id' =>$idPlan34,
																								'value' => 1431230372,
																								'goal' => 0,
																								'evidence_balance' => 1431230372,
																								'age' => 3,
																								]);
																								$idactivitySource68 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity69,
																								'source_id' =>$idPlan34,
																								'value' => 240376960,
																								'goal' => 0,
																								'evidence_balance' => 240376960,
																								'age' => 3,
																								]);
																								$idactivitySource69 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity74,
																								'source_id' =>$idPlan34,
																								'value' => 1028578008,
																								'goal' => 0,
																								'evidence_balance' => 1028578008,
																								'age' => 3,
																								]);
																								$idactivitySource70 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity78,
																								'source_id' =>$idPlan34,
																								'value' => 1308413898,
																								'goal' => 0,
																								'evidence_balance' => 1308413898,
																								'age' => 3,
																								]);
																								$idactivitySource71 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity83,
																								'source_id' =>$idPlan34,
																								'value' => 371472439,
																								'goal' => 0,
																								'evidence_balance' => 371472439,
																								'age' => 3,
																								]);
																								$idactivitySource72 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity86,
																								'source_id' =>$idPlan34,
																								'value' => 897253032,
																								'goal' => 0,
																								'evidence_balance' => 897253032,
																								'age' => 3,
																								]);
																								$idactivitySource73 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity91,
																								'source_id' =>$idPlan34,
																								'value' => 35320000,
																								'goal' => 0,
																								'evidence_balance' => 35320000,
																								'age' => 3,
																								]);
																								$idactivitySource74 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity96,
																								'source_id' =>$idPlan34,
																								'value' => 105598499,
																								'goal' => 0,
																								'evidence_balance' => 105598499,
																								'age' => 3,
																								]);
																								$idactivitySource75 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity98,
																								'source_id' =>$idPlan34,
																								'value' => 38000000,
																								'goal' => 0,
																								'evidence_balance' => 38000000,
																								'age' => 3,
																								]);
																								$idactivitySource76 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity102,
																								'source_id' =>$idPlan34,
																								'value' => 324800000,
																								'goal' => 0,
																								'evidence_balance' => 324800000,
																								'age' => 3,
																								]);
																								$idactivitySource77 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity110,
																								'source_id' =>$idPlan34,
																								'value' => 2773342653,
																								'goal' => 0,
																								'evidence_balance' => 2773342653,
																								'age' => 3,
																								]);
																								$idactivitySource78 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity116,
																								'source_id' =>$idPlan34,
																								'value' => 224000000,
																								'goal' => 0,
																								'evidence_balance' => 224000000,
																								'age' => 3,
																								]);
																								$idactivitySource79 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity119,
																								'source_id' =>$idPlan34,
																								'value' => 517112021,
																								'goal' => 0,
																								'evidence_balance' => 517112021,
																								'age' => 3,
																								]);
																								$idactivitySource80 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity124,
																								'source_id' =>$idPlan46,
																								'value' => 384120000,
																								'goal' => 0,
																								'evidence_balance' => 384120000,
																								'age' => 3,
																								]);
																								$idactivitySource81 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity130,
																								'source_id' =>$idPlan46,
																								'value' => 803623996,
																								'goal' => 0,
																								'evidence_balance' => 803623996,
																								'age' => 3,
																								]);
																								$idactivitySource82 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('activity_sources')->insert([
																								'activity_id' => $idactivity134,
																								'source_id' =>$idPlan46,
																								'value' => 74800000,
																								'goal' => 0,
																								'evidence_balance' => 74800000,
																								'age' => 3,
																								]);
																								$idactivitySource83 = DB::getPdo()->lastInsertId();
																								
																								
																								
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity11,
																									'source_id' =>$idPlan34,
																									'value' => 2819745432,
																									'goal' => 0,
																									'evidence_balance' => 2819745432,
																									'age' => 3,
																									]);
																									$idactivitySource84 = DB::getPdo()->lastInsertId();
																									
																									
																									
																								DB::table('activity_sources')->insert([
																									'activity_id' => $idactivity119,
																									'source_id' =>$idPlan46,
																									'value' => 12887979,
																									'goal' => 0,
																									'evidence_balance' => 12887979,
																									'age' => 3,
																									]);
																									$idactivitySource85 = DB::getPdo()->lastInsertId();
																									
																									
																									
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia272,
																										'activity_source_id' =>$idactivitySource58,
																										'value' => 38447117518.97,
																										]);
																										$idevidenceFinancial58 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia279,
																										'activity_source_id' =>$idactivitySource59,
																										'value' => 294018796,
																										]);
																										$idevidenceFinancial59 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia289,
																										'activity_source_id' =>$idactivitySource60,
																										'value' => 2740736288.55,
																										]);
																										$idevidenceFinancial60 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia292,
																										'activity_source_id' =>$idactivitySource61,
																										'value' => 45514862,
																										]);
																										$idevidenceFinancial61 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia294,
																										'activity_source_id' =>$idactivitySource62,
																										'value' => 3018124722.79,
																										]);
																										$idevidenceFinancial62 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia306,
																										'activity_source_id' =>$idactivitySource63,
																										'value' => 3890449303,
																										]);
																										$idevidenceFinancial63 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia310,
																										'activity_source_id' =>$idactivitySource64,
																										'value' => 248999297.89,
																										]);
																										$idevidenceFinancial64 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia314,
																										'activity_source_id' =>$idactivitySource65,
																										'value' => 244379105.74,
																										]);
																										$idevidenceFinancial65 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia320,
																										'activity_source_id' =>$idactivitySource66,
																										'value' => 450888903.28,
																										]);
																										$idevidenceFinancial66 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia325,
																										'activity_source_id' =>$idactivitySource67,
																										'value' => 2122461117.61,
																										]);
																										$idevidenceFinancial67 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia332,
																										'activity_source_id' =>$idactivitySource68,
																										'value' => 1407191200,
																										]);
																										$idevidenceFinancial68 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia337,
																										'activity_source_id' =>$idactivitySource69,
																										'value' => 226976258.13,
																										]);
																										$idevidenceFinancial69 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia342,
																										'activity_source_id' =>$idactivitySource70,
																										'value' => 980737182.53,
																										]);
																										$idevidenceFinancial70 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia346,
																										'activity_source_id' =>$idactivitySource71,
																										'value' => 1181376545.07,
																										]);
																										$idevidenceFinancial71 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia351,
																										'activity_source_id' =>$idactivitySource72,
																										'value' => 368620133,
																										]);
																										$idevidenceFinancial72 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia354,
																										'activity_source_id' =>$idactivitySource73,
																										'value' => 713735705.76,
																										]);
																										$idevidenceFinancial73 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia359,
																										'activity_source_id' =>$idactivitySource74,
																										'value' => 31704448,
																										]);
																										$idevidenceFinancial74 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia364,
																										'activity_source_id' =>$idactivitySource75,
																										'value' => 74931169.56,
																										]);
																										$idevidenceFinancial75 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia366,
																										'activity_source_id' =>$idactivitySource76,
																										'value' => 19200000,
																										]);
																										$idevidenceFinancial76 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia370,
																										'activity_source_id' =>$idactivitySource77,
																										'value' => 248999297.89,
																										]);
																										$idevidenceFinancial77 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia378,
																										'activity_source_id' =>$idactivitySource78,
																										'value' => 2757676155.51,
																										]);
																										$idevidenceFinancial78 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia384,
																										'activity_source_id' =>$idactivitySource79,
																										'value' => 221366137,
																										]);
																										$idevidenceFinancial79 = DB::getPdo()->lastInsertId();
																										

																									
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia387,
																											'activity_source_id' =>$idactivitySource80,
																											'value' => 329400126,
																											]);
																											$idevidenceFinancial80 = DB::getPdo()->lastInsertId();
																											

																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia392,
																										'activity_source_id' =>$idactivitySource81,
																										'value' => 365119865.66,
																										]);
																										$idevidenceFinancial81 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia398,
																										'activity_source_id' =>$idactivitySource82,
																										'value' => 786165448,
																										]);
																										$idevidenceFinancial82 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('evidence_financial')->insert([
																										'evidence_id' => $idevidencia402,
																										'activity_source_id' =>$idactivitySource83,
																										'value' => 71497050,
																										]);
																										$idevidenceFinancial83 = DB::getPdo()->lastInsertId();
																										
																										
																										
																										DB::table('evidence_financial')->insert([
																											'evidence_id' => $idevidencia279,
																											'activity_source_id' =>$idactivitySource84,
																											'value' => 2120646566.75,
																											]);
																											$idevidenceFinancial84 = DB::getPdo()->lastInsertId();
																											
																											

																											
																											
																											
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity4,
																												'source_id' =>$idPlan50,
																												'value' => 7785241263,
																												'goal' => 0,
																												'evidence_balance' => 7785241263,
																												'age' => 4,
																												]);
																												$idactivitySource86 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity11,
																												'source_id' =>$idPlan50,
																												'value' => 6204529157,
																												'goal' => 0,
																												'evidence_balance' => 6204529157,
																												'age' => 4,
																												]);
																												$idactivitySource87 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity21,
																												'source_id' =>$idPlan50,
																												'value' => 3962266346,
																												'goal' => 0,
																												'evidence_balance' => 3962266346,
																												'age' => 4,
																												]);
																												$idactivitySource88 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity24,
																												'source_id' =>$idPlan50,
																												'value' => 57220000,
																												'goal' => 0,
																												'evidence_balance' => 57220000,
																												'age' => 4,
																												]);
																												$idactivitySource89 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity26,
																												'source_id' =>$idPlan50,
																												'value' => 91551702,
																												'goal' => 0,
																												'evidence_balance' => 91551702,
																												'age' => 4,
																												]);
																												$idactivitySource90 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity38,
																												'source_id' =>$idPlan50,
																												'value' => 1706739816.97,
																												'goal' => 0,
																												'evidence_balance' => 1706739816.97,
																												'age' => 4,
																												]);
																												$idactivitySource91 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity42,
																												'source_id' =>$idPlan50,
																												'value' => 160000000,
																												'goal' => 0,
																												'evidence_balance' => 160000000,
																												'age' => 4,
																												]);
																												$idactivitySource92 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity46,
																												'source_id' =>$idPlan50,
																												'value' => 275784550,
																												'goal' => 0,
																												'evidence_balance' => 275784550,
																												'age' => 4,
																												]);
																												$idactivitySource93 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity52,
																												'source_id' =>$idPlan50,
																												'value' => 506307910,
																												'goal' => 0,
																												'evidence_balance' => 506307910,
																												'age' => 4,
																												]);
																												$idactivitySource94 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity57,
																												'source_id' =>$idPlan50,
																												'value' => 1060850000,
																												'goal' => 0,
																												'evidence_balance' => 1060850000,
																												'age' => 4,
																												]);
																												$idactivitySource95 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity64,
																												'source_id' =>$idPlan50,
																												'value' => 1643475000,
																												'goal' => 0,
																												'evidence_balance' => 1643475000,
																												'age' => 4,
																												]);
																												$idactivitySource96 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity69,
																												'source_id' =>$idPlan50,
																												'value' => 183416000,
																												'goal' => 0,
																												'evidence_balance' => 183416000,
																												'age' => 4,
																												]);
																												$idactivitySource97 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity74,
																												'source_id' =>$idPlan50,
																												'value' => 1562541295,
																												'goal' => 0,
																												'evidence_balance' => 1562541295,
																												'age' => 4,
																												]);
																												$idactivitySource98 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity78,
																												'source_id' =>$idPlan50,
																												'value' => 1129076960.03,
																												'goal' => 0,
																												'evidence_balance' => 1129076960.03,
																												'age' => 4,
																												]);
																												$idactivitySource99 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity86,
																												'source_id' =>$idPlan62,
																												'value' => 1231628701,
																												'goal' => 0,
																												'evidence_balance' => 1231628701,
																												'age' => 4,
																												]);
																												$idactivitySource100 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity91,
																												'source_id' =>$idPlan62,
																												'value' => 19818800,
																												'goal' => 0,
																												'evidence_balance' => 19818800,
																												'age' => 4,
																												]);
																												$idactivitySource101 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity96,
																												'source_id' =>$idPlan62,
																												'value' => 45420000,
																												'goal' => 0,
																												'evidence_balance' => 45420000,
																												'age' => 4,
																												]);
																												$idactivitySource102 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity98,
																												'source_id' =>$idPlan62,
																												'value' => 34960000,
																												'goal' => 0,
																												'evidence_balance' => 34960000,
																												'age' => 4,
																												]);
																												$idactivitySource103 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity102,
																												'source_id' =>$idPlan62,
																												'value' => 91329243,
																												'goal' => 0,
																												'evidence_balance' => 91329243,
																												'age' => 4,
																												]);
																												$idactivitySource104 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity110,
																												'source_id' =>$idPlan62,
																												'value' => 194855601.149999,
																												'goal' => 0,
																												'evidence_balance' => 194855601.149999,
																												'age' => 4,
																												]);
																												$idactivitySource105 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity116,
																												'source_id' =>$idPlan60,
																												'value' => 244248333,
																												'goal' => 0,
																												'evidence_balance' => 244248333,
																												'age' => 4,
																												]);
																												$idactivitySource106 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity119,
																												'source_id' =>$idPlan60,
																												'value' => 354759396,
																												'goal' => 0,
																												'evidence_balance' => 354759396,
																												'age' => 4,
																												]);
																												$idactivitySource107 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity124,
																												'source_id' =>$idPlan60,
																												'value' => 423973899,
																												'goal' => 0,
																												'evidence_balance' => 423973899,
																												'age' => 4,
																												]);
																												$idactivitySource108 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity130,
																												'source_id' =>$idPlan60,
																												'value' => 637447499,
																												'goal' => 0,
																												'evidence_balance' => 637447499,
																												'age' => 4,
																												]);
																												$idactivitySource109 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('activity_sources')->insert([
																												'activity_id' => $idactivity134,
																												'source_id' =>$idPlan60,
																												'value' => 54800000,
																												'goal' => 0,
																												'evidence_balance' => 54800000,
																												'age' => 4,
																												]);
																												$idactivitySource110 = DB::getPdo()->lastInsertId();
																												
																												
																												
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity78,
																													'source_id' =>$idPlan62,
																													'value' => 3464905347.85,
																													'goal' => 0,
																													'evidence_balance' => 5,
																													'age' => 4,
																													]);
																													$idactivitySource111 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('activity_sources')->insert([
																													'activity_id' => $idactivity110,
																													'source_id' =>$idPlan60,
																													'value' => 1153283798.85,
																													'goal' => 0,
																													'evidence_balance' => 7,
																													'age' => 4,
																													]);
																													$idactivitySource112 = DB::getPdo()->lastInsertId();
																													
																													
																													
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia406,
																														'activity_source_id' =>$idactivitySource86,
																														'value' => 7740776064.51,
																														]);
																														$idevidenceFinancial86 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia413,
																														'activity_source_id' =>$idactivitySource87,
																														'value' => 4219427707.37,
																														]);
																														$idevidenceFinancial87 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia423,
																														'activity_source_id' =>$idactivitySource88,
																														'value' => 3930150961.42,
																														]);
																														$idevidenceFinancial88 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia426,
																														'activity_source_id' =>$idactivitySource89,
																														'value' => 57014770,
																														]);
																														$idevidenceFinancial89 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia428,
																														'activity_source_id' =>$idactivitySource90,
																														'value' => 78688047,
																														]);
																														$idevidenceFinancial90 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia440,
																														'activity_source_id' =>$idactivitySource91,
																														'value' => 1359868685,
																														]);
																														$idevidenceFinancial91 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia444,
																														'activity_source_id' =>$idactivitySource92,
																														'value' => 159510000,
																														]);
																														$idevidenceFinancial92 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia448,
																														'activity_source_id' =>$idactivitySource93,
																														'value' => 274745138,
																														]);
																														$idevidenceFinancial93 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia454,
																														'activity_source_id' =>$idactivitySource94,
																														'value' => 486876360.08,
																														]);
																														$idevidenceFinancial94 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia459,
																														'activity_source_id' =>$idactivitySource95,
																														'value' => 998366919,
																														]);
																														$idevidenceFinancial95 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia466,
																														'activity_source_id' =>$idactivitySource96,
																														'value' => 1602249542,
																														]);
																														$idevidenceFinancial96 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia471,
																														'activity_source_id' =>$idactivitySource97,
																														'value' => 182458788,
																														]);
																														$idevidenceFinancial97 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia476,
																														'activity_source_id' =>$idactivitySource98,
																														'value' => 1465249646.61,
																														]);
																														$idevidenceFinancial98 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia480,
																														'activity_source_id' =>$idactivitySource99,
																														'value' => 1129076960.03,
																														]);
																														$idevidenceFinancial99 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia488,
																														'activity_source_id' =>$idactivitySource100,
																														'value' => 1228374656.98,
																														]);
																														$idevidenceFinancial100 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia493,
																														'activity_source_id' =>$idactivitySource101,
																														'value' => 19698800,
																														]);
																														$idevidenceFinancial101 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia498,
																														'activity_source_id' =>$idactivitySource102,
																														'value' => 39513128.44,
																														]);
																														$idevidenceFinancial102 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia500,
																														'activity_source_id' =>$idactivitySource103,
																														'value' => 34746859,
																														]);
																														$idevidenceFinancial103 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia504,
																														'activity_source_id' =>$idactivitySource104,
																														'value' => 79899615.05,
																														]);
																														$idevidenceFinancial104 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia512,
																														'activity_source_id' =>$idactivitySource105,
																														'value' => 194855601.149999,
																														]);
																														$idevidenceFinancial105 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia518,
																														'activity_source_id' =>$idactivitySource106,
																														'value' => 233683778,
																														]);
																														$idevidenceFinancial106 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia521,
																														'activity_source_id' =>$idactivitySource107,
																														'value' => 353679381,
																														]);
																														$idevidenceFinancial107 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia526,
																														'activity_source_id' =>$idactivitySource108,
																														'value' => 409232965.49,
																														]);
																														$idevidenceFinancial108 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia532,
																														'activity_source_id' =>$idactivitySource109,
																														'value' => 589981385,
																														]);
																														$idevidenceFinancial109 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('evidence_financial')->insert([
																														'evidence_id' => $idevidencia536,
																														'activity_source_id' =>$idactivitySource110,
																														'value' => 54513498,
																														]);
																														$idevidenceFinancial110 = DB::getPdo()->lastInsertId();
																														
																														
																														
																														DB::table('evidence_financial')->insert([
																															'evidence_id' => $idevidencia480,
																															'activity_source_id' =>$idactivitySource111,
																															'value' => 3425525439.33,
																															]);
																															$idevidenceFinancial111 = DB::getPdo()->lastInsertId();
																															
																															
																															
																														DB::table('evidence_financial')->insert([
																															'evidence_id' => $idevidencia512,
																															'activity_source_id' =>$idactivitySource112,
																															'value' => 1106001401.85,
																															]);
																															$idevidenceFinancial112 = DB::getPdo()->lastInsertId();
																															
																															
																															
																																																																																																																																																																																																																																																																																																																																																																								
    }
  }
