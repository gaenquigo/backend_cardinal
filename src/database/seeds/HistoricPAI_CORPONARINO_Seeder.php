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
 * Class HistoricPAI_CORPONARINO_Seeder
 */
class HistoricPAI_CORPONARINO_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'Plan de Acción Institucional 2016-2019 “Conservamos por naturaleza”',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'Luis Alexander Mejia Bustos ',
        'group_id' => 24,
        'approved' => 1,
        ]);
        $idpai1 = DB::getPdo()->lastInsertId();
      

        DB::table('strategic_lines')->insert([
          'name' => 'ORDENAMIENTO DEL TERRITORIO Y GESTIÓN DEL RIESGO,  FUNDAMENTADO EN LA COMPRENSIÓN Y PROTECCIÓN DE LAS  CUENCAS HIDROGRÁFICAS',
          'weighing' => 50,
          'p_a_i_id' => $idpai1,
          ]);
          $idline1 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'ARTICULACIÓN  INTERINSTITUCIONAL PARA EL FORTALECIMIENTO DEL EJERCICIO DE LA AUTORIDAD Y LA GESTIÓN AMBIENTAL',
          'weighing' => 15,
          'p_a_i_id' => $idpai1,
          ]);
          $idline2 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'DESARROLLO DE CAPACIDADES INSTITUCIONALES PARA LA MEJORA CONTINUA EN LA GESTIÓN MISIONAL.',
          'weighing' => 10,
          'p_a_i_id' => $idpai1,
          ]);
          $idline3 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'TRANSFERENCIA Y ASISTENCIA TÉCNICA A COMUNIDADES EN TÉCNICAS Y FORMAS APROPIADAS DE USO DE LOS RECURSOS NATURALES RENOVABLES',
          'weighing' => 10,
          'p_a_i_id' => $idpai1,
          ]);
          $idline4 = DB::getPdo()->lastInsertId();
          
          
        DB::table('strategic_lines')->insert([
          'name' => 'GESTIÓN DEL CONOCIMIENTO PARA LA ADMINISTRACIÓN Y LA CONSERVACIÓN DE LOS RECURSOS NATURALES',
          'weighing' => 15,
          'p_a_i_id' => $idpai1,
          ]);
          $idline5 = DB::getPdo()->lastInsertId();
          
          
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => '1. PLANIFICACION AMBIENTAL ARTICULADA E INTEGRAL',
            'weighing' => 10,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => '2. CAMBIO CLIMATICO Y GESTION DEL RIESGO',
            'weighing' => 10,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => '3. GESTION DEL RECURSO HIDRICO',
            'weighing' => 15,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => '4. GESTION INTEGRAL DE LA BIODIVERSIDAD Y SUS SERVICIOS ECOSISTEMICOS',
            'weighing' => 15,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 799,
            'car_program' => '5. GOBERNANZA EN EL USO Y APROVECHAMIENTO DE LOS RECURSOS NATURALES Y EL AMBIENTE',
            'weighing' => 15,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 799,
            'car_program' => '6. DESARROLLO INSTITUCIONAL Y FORTALECIMIENTO A LA GESTION POR PROCESOS',
            'weighing' => 10,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline4,
            'national_program_id' => 799,
            'car_program' => '7. FOMENTO A LA PRODUCCION Y CONSUMO SOSTENIBLE EN LOS SECTORES PRODUCTIVOS',
            'weighing' => 10,
            ]);
            $idprogram7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline5,
            'national_program_id' => 799,
            'car_program' => '8. EDUCACION AMBIENTAL, PARTICIPACION Y FORTALECIMIENTO ORGANIZACIONAL ',
            'weighing' => 15,
            ]);
            $idprogram8 = DB::getPdo()->lastInsertId();
            
            
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => '1.1  Ordenación de cuencas hidrográficas priorizadas ',
              'weighing' => 40,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => '1.2 Ordenamiento del recurso hídrico de fuentes hídricas priorizadas ',
              'weighing' => 30,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => '1.3 Formulación del Plan General de Ordenacion Forestal ',
              'weighing' => 15,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => '1.4 Planificación ambiental e implementación de acciones priorizadas en la Unidad Ambiental Costera Llanura Aluvial del Sur',
              'weighing' => 15,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => '2.1 Gestión ambiental del riesgo ',
              'weighing' => 25,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => '2.2 Asesoría, evaluación y seguimiento de asuntos ambientales en los procesos de planeación y ordenamiento de los entes territoriales. ',
              'weighing' => 25,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => '2.3 Gestión de estrategias de adaptación al cambio climático',
              'weighing' => 25,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => '2.4 Monitoreo y generación de lineamientos para el manejo de la calidad del aire',
              'weighing' => 25,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => '3.1 Implementación de acciones de conservación y restauración en el marco de la ordenación de las cuencas priorizadas',
              'weighing' => 30,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => '3.2 Implementación de acciones de descontaminación en corrientes hídricas superficiales priorizadas ',
              'weighing' => 10,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => '3.3 Administracion y Seguimiento del Programa de Tasas Retributivas por Vertimientos Puntuales',
              'weighing' => 20,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => '3.4 Administración, monitoreo y seguimiento al uso y aprovechamiento del recurso hídrico ',
              'weighing' => 20,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => '3.5 Implementación de acciones de protección, recuperación o monitoreo del recurso hídrico en cuencas, a partir de los POMCAS o de los instrumentos de planificación de la Corporación (Art. 216 Ley 1450/11 TUA)',
              'weighing' => 20,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => '4.1 Conocimiento de la biodiversidad y de los servicios ecosistémicos',
              'weighing' => 35,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => '4.2 Usos de la biodiversidad y sus servicios ecosistémicos',
              'weighing' => 30,
              ]);
              $idproject15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => '4.3 Conservación de la biodiversidad y sus servicios ecosistémicos',
              'weighing' => 35,
              ]);
              $idproject16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => '5.1 Control y seguimiento a la gestión de residuos sólidos',
              'weighing' => 20,
              ]);
              $idproject17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => '5.2 Evaluación y seguimiento de Planes de Contingencia de Estaciones de Servicio',
              'weighing' => 20,
              ]);
              $idproject18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => '5.3 Fortalecimiento de la Autoridad Ambiental Proceso Licencias, Permisos y Autorizaciones Ambientales',
              'weighing' => 40,
              ]);
              $idproject19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => '5.4 Fortalecimiento de la Autoridad Ambiental Proceso Ordenación y Manejo de los Recursos Naturales',
              'weighing' => 20,
              ]);
              $idproject20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.1 Planeación institucional para la Gestión Ambiental ',
              'weighing' => 20,
              ]);
              $idproject21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.2 Fortalecimiento del Sistema de Gestión Institucional articulado con el MECI',
              'weighing' => 20,
              ]);
              $idproject22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.3 Mejoramiento de las rentas y gestión por proyecto',
              'weighing' => 8,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.4 Fortalecimiento del proceso misional Gestión Jurídica',
              'weighing' => 8,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.5 Apoyo a la actualización y/o conservación catastral municipios priorizados  (2) ',
              'weighing' => 2,
              ]);
              $idproject25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.6 Operación y administración de los Sistemas de Información de la Corporación (Ambiental y administrativo)',
              'weighing' => 10,
              ]);
              $idproject26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.7 Seguimiento y evaluación del SGI y MECI',
              'weighing' => 12,
              ]);
              $idproject27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.8 Mantenimiento, operación y mejora del laboratorio de calidad ambiental bajo la norma NTC ISO/IEC 17025',
              'weighing' => 10,
              ]);
              $idproject28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => '6.9 Fortalecimiento de la capacidad institucional para el cumplimiento de la Misión corporativa',
              'weighing' => 10,
              ]);
              $idproject29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => '7.1 Implementación de acciones priorizadas para el fomento de la producción y consumo sostenible',
              'weighing' => 50,
              ]);
              $idproject30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => '7.2 Fomento de tecnologías limpias en la minería del oro ',
              'weighing' => 50,
              ]);
              $idproject31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram8,
              'project' => '8.1 Implementación de acciones de educación ambiental, participación  y fortalecimiento de organizaciones comunitarias, étnicas y ambientalistas',
              'weighing' => 100,
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
					'goal_1' => 22,
					'goal_2' => 26,
					'goal_3' => 25,
					'goal_4' => 3,
					'goal_1_balance' => 22,
					'goal_2_balance' => 26,
					'goal_3_balance' => 25,
					'goal_4_balance' => 3,
					'total_goal' => 76,
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
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 30,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'weighing' => 19,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
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
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'weighing' => 1,
					]);
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 39,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					'weighing' => 30,
					]);
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'weighing' => 29,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
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
					'weighing' => 50,
					]);
					$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 24,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'weighing' => 29,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 300,
					'goal_2' => 350,
					'goal_3' => 400,
					'goal_4' => 450,
					'goal_1_balance' => 300,
					'goal_2_balance' => 350,
					'goal_3_balance' => 400,
					'goal_4_balance' => 450,
					'total_goal' => 1500,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 5,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 20,
					'goal_2' => 30,
					'goal_3' => 100,
					'goal_4' => 50,
					'goal_1_balance' => 20,
					'goal_2_balance' => 30,
					'goal_3_balance' => 100,
					'goal_4_balance' => 50,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 40,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 100,
					'goal_2' => 3000,
					'goal_3' => 100,
					'goal_4' => 3000,
					'goal_1_balance' => 100,
					'goal_2_balance' => 3000,
					'goal_3_balance' => 100,
					'goal_4_balance' => 3000,
					'total_goal' => 6200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 100,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
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
					'weighing' => 24,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 33,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 100,
					'goal_3' => 0,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 100,
					'goal_3_balance' => 0,
					'goal_4_balance' => 100,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 99,
					]);
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 202,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 100,
					'goal_2' => 58,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 58,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 358,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 4,
					'goal_4' => 1,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 4,
					'goal_4_balance' => 1,
					'total_goal' => 5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 6',
					'goal_1' => 4,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 4,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 5,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 3350,
					'goal_2' => 100,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 3350,
					'goal_2_balance' => 100,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 3450,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 50,
					'goal_3' => 50,
					'goal_4' => 100,
					'goal_1_balance' => 0,
					'goal_2_balance' => 50,
					'goal_3_balance' => 50,
					'goal_4_balance' => 100,
					'total_goal' => 200,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 10,
					]);
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
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
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 20,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 20,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 320,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 5',
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
					'weighing' => 29,
					]);
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 6',
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
					'weighing' => 5,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 5,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 8',
					'goal_1' => 28,
					'goal_2' => 20,
					'goal_3' => 20,
					'goal_4' => 20,
					'goal_1_balance' => 28,
					'goal_2_balance' => 20,
					'goal_3_balance' => 20,
					'goal_4_balance' => 20,
					'total_goal' => 88,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 5,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 200,
					'goal_2' => 200,
					'goal_3' => 200,
					'goal_4' => 200,
					'goal_1_balance' => 200,
					'goal_2_balance' => 200,
					'goal_3_balance' => 200,
					'goal_4_balance' => 200,
					'total_goal' => 800,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 120,
					'goal_2' => 120,
					'goal_3' => 120,
					'goal_4' => 120,
					'goal_1_balance' => 120,
					'goal_2_balance' => 120,
					'goal_3_balance' => 120,
					'goal_4_balance' => 120,
					'total_goal' => 480,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 1,
					'goal_4' => 100,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 1,
					'goal_4_balance' => 100,
					'total_goal' => 301,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 100,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 15,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 72,
					'goal_2' => 72,
					'goal_3' => 72,
					'goal_4' => 72,
					'goal_1_balance' => 72,
					'goal_2_balance' => 72,
					'goal_3_balance' => 72,
					'goal_4_balance' => 72,
					'total_goal' => 288,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					'weighing' => 39,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					'weighing' => 15,
					]);
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 76,
					'goal_2' => 76,
					'goal_3' => 76,
					'goal_4' => 76,
					'goal_1_balance' => 76,
					'goal_2_balance' => 76,
					'goal_3_balance' => 76,
					'goal_4_balance' => 76,
					'total_goal' => 304,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2000,
					'goal_2' => 800,
					'goal_3' => 800,
					'goal_4' => 800,
					'goal_1_balance' => 2000,
					'goal_2_balance' => 800,
					'goal_3_balance' => 800,
					'goal_4_balance' => 800,
					'total_goal' => 4400,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 2,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 8,
					'goal_3' => 8,
					'goal_4' => 8,
					'goal_1_balance' => 0,
					'goal_2_balance' => 8,
					'goal_3_balance' => 8,
					'goal_4_balance' => 8,
					'total_goal' => 24,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 59,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 0,
					'goal_3' => 100,
					'goal_4' => 100,
					'goal_1_balance' => 1,
					'goal_2_balance' => 0,
					'goal_3_balance' => 100,
					'goal_4_balance' => 100,
					'total_goal' => 201,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'weighing' => 49,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 30,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 50,
					'goal_4' => 50,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 50,
					'goal_4_balance' => 50,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 99,
					]);
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'weighing' => 49,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 28,
					'goal_2' => 30,
					'goal_3' => 33,
					'goal_4' => 36,
					'goal_1_balance' => 28,
					'goal_2_balance' => 30,
					'goal_3_balance' => 33,
					'goal_4_balance' => 36,
					'total_goal' => 127,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 30,
					]);
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
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
					'weighing' => 50,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 25,
					'goal_2' => 25,
					'goal_3' => 30,
					'goal_4' => 20,
					'goal_1_balance' => 25,
					'goal_2_balance' => 25,
					'goal_3_balance' => 30,
					'goal_4_balance' => 20,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 49,
					]);
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
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
					$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
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
					$idobjectiveproduct98 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
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
					$idobjectiveproduct99 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 1,
					]);
					$idobjectiveproduct100 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 30,
					]);
					$idobjectiveproduct101 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					'weighing' => 30,
					]);
					$idobjectiveproduct102 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					'weighing' => 39,
					]);
					$idobjectiveproduct103 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					$idobjectiveproduct104 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 16,
					]);
					$idobjectiveproduct105 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 1,
					'goal_2' => 30,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 30,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 31,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct106 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 35,
					'goal_2' => 30,
					'goal_3' => 23,
					'goal_4' => 12,
					'goal_1_balance' => 35,
					'goal_2_balance' => 30,
					'goal_3_balance' => 23,
					'goal_4_balance' => 12,
					'total_goal' => 100,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 16,
					]);
					$idobjectiveproduct107 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 0,
					'goal_2' => 0,
					'goal_3' => 10,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 0,
					'goal_3_balance' => 10,
					'goal_4_balance' => 0,
					'total_goal' => 10,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct108 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 0,
					'goal_2' => 50,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 0,
					'goal_2_balance' => 50,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 50,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct109 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 6',
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
					'weighing' => 17,
					]);
					$idobjectiveproduct110 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct111 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
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
					'weighing' => 59,
					]);
					$idobjectiveproduct112 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 12,
					'goal_2' => 12,
					'goal_3' => 12,
					'goal_4' => 12,
					'goal_1_balance' => 12,
					'goal_2_balance' => 12,
					'goal_3_balance' => 12,
					'goal_4_balance' => 12,
					'total_goal' => 48,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 40,
					]);
					$idobjectiveproduct113 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
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
					$idobjectiveproduct114 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
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
					'weighing' => 34,
					]);
					$idobjectiveproduct115 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 100,
					'goal_2' => 100,
					'goal_3' => 100,
					'goal_4' => 3,
					'goal_1_balance' => 100,
					'goal_2_balance' => 100,
					'goal_3_balance' => 100,
					'goal_4_balance' => 3,
					'total_goal' => 303,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct116 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 15,
					]);
					$idobjectiveproduct117 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
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
					'weighing' => 15,
					]);
					$idobjectiveproduct118 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
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
					'weighing' => 15,
					]);
					$idobjectiveproduct119 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective32,
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
					$idobjectiveproduct120 = DB::getPdo()->lastInsertId();
					
                  
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'Formulación de los Planes de Ordenación y Manejo de Cuencas Hidrográficas priorizadas',
                    'goal_1' => 22,
                    'goal_2' => 26,
                    'goal_3' => 25,
                    'goal_4' => 3,
                    'goal' => 76,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'Formulación de Planes de Ordenamiento del Recurso Hídrico con base en los lineamientos técnicos vigentes',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'Ordenación forestal del departamento de Nariño',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'Implementación de acciones priorizadas de planificación orde namiento y manejo de zonas costeras',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'Generación de conocimiento para la reducción del riesgo',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'Estrategia de Corresponsabilidad Social en la lucha contra Incendios Forestales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'Mitigación de áreas afectadas por eventos naturales o antrópicos',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'Asesoría evaluación y seguimiento de los procesos de planificación y ordenamiento territorial que adelanten los municipios en lo que a los asuntos ambientales se refiere',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'Formulación de una estrategia de adaptación a los efectos generados por los fenómenos de Niño y Niña en áreas de mayor susceptibilidad',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'Fortalecimiento de la mesa Departamental de Cambio Climático en articulación con el Nodo Pacífico Sur (6)',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 39,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'Implementación de acciones piloto en el marco de las estrategias nacionales frente al cambio climático (2)',
                    'goal_1' => 100,
                    'goal_2' => 1,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 301,
                    'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'Implementar una estrategia de educación formación y sensibilización a públicos priorizados sobre Cambio Climático',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 29,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'Monitoreo de la calidad de aire',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'Seguimiento a fuentes fijas y móviles generadoras de emisiones contaminantes y a Centros de Diagnóstico Automotor -CDA',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'Evaluación de la contaminación por ruido.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'Implementación de estrategias de restauración ecológica en áreas de interés ambiental.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 29,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'Mantenimiento de áreas restauradas en zonas de interés ambiental.',
                    'goal_1' => 300,
                    'goal_2' => 350,
                    'goal_3' => 400,
                    'goal_4' => 450,
                    'goal' => 1500,
                    'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'Implementación de estrategias de restauración ecológica en áreas de interés ambiental (Transferencias del Sector Eléctrico)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 0,
                    'goal' => 300,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'Implementación incentivos a la conservación como estrategia para la reducción de la deforestación (Transferencias del Sector Eléctrico)',
                    'goal_1' => 20,
                    'goal_2' => 30,
                    'goal_3' => 100,
                    'goal_4' => 50,
                    'goal' => 200,
                    'weighing' => 40,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'Implementación de incentivos a la conservación como estrategia para la reducción de la deforestación',
                    'goal_1' => 100,
                    'goal_2' => 3000,
                    'goal_3' => 100,
                    'goal_4' => 3000,
                    'goal' => 6200,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'Cofinanciación y seguimiento a la ejecución de proyectos de preinversión y/o inversión en descontaminación hídrica priorizados por la Corporación',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'Ejecución  de acciones  en el marco 
                  de los PORH ',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'Monitoreo de la calidad del recurso hídrico ',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'Monitoreo de la calidad del recurso hídrico y de vertimientos y sectores productivos',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 0,
                    'goal' => 200,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => 'Monitoreo de la calidad del recurso hídrico y monitoreo de playas -REDCAM',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 1,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'Seguimiento a usuarios generadores de vertimientos',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'Seguimiento PUEAA concesiones y Tasa de Uso del Agua -TUA',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'Restauración activa en zonas de recarga hídrica',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'Estudios técnicos base para la delimitación de páramos (Artículo 173 Ley 1753 de 2015 PND)',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 202,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'Implementación de acciones para la conservación de especies Valores Objeto de Conservación acorde con sus planes de manejo',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'Estudios técnicos y acciones para la con- servación de los recursos naturales en áreas estratégicas (artículo 174 ley 1753 de 2015)',
                    'goal_1' => 100,
                    'goal_2' => 58,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 358,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => 'Declaratoria de áreas protegidas regionales',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 0,
                    'goal' => 100,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => 'Formulación de planes de manejo de áreas protegidas priorizadas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 4,
                    'goal_4' => 1,
                    'goal' => 5,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'Impulso al establecimiento de áreas protegidas planificadas en el departamento de Nariño (Convenio NCI 175 mayo 2015)',
                    'goal_1' => 4,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 5,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'Ejecución del proyecto Páramos: Biodiversidad y recurso hídrico en los Andes del Norte Contrapartida proyecto IAvH-UE. Corredor de Páramos Chiles Quitasol',
                    'goal_1' => 3350,
                    'goal_2' => 100,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 3450,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'Implementación de acciones de usos sostenibles priorizados en los planes de manejo de ecosistemas estratégicos (Humedales manglares y páramos)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'Identificación de alternativas de turismo sostenible e inicio de su gestión',
                    'goal_1' => 0,
                    'goal_2' => 50,
                    'goal_3' => 50,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => 'Implementación de acciones de conservación priorizadas en los planes de manejo de ecosistemas estratégicos (Humedales páramos y manglares)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => 'Recuperación del conocimiento ancestral y tradicional para la conservación y producción sostenible',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 10,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'Fortalecimiento de los procesos de administración de las reservas forestales protectoras nacionales: Cuenca Alta del río Nembí Río Bobo y Buesaquillo Laguna de La Cocha Cerro Patascoy y La Planada',
                    'goal_1' => 4,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 16,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'Administración y ejecución de los planes de manejo de las áreas protegidas regionales',
                    'goal_1' => 20,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 320,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'Restauración monitoreo y conservación del bosque seco del Patía (5) y (7)',
                    'goal_1' => 100,
                    'goal_2' => 1,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 301,
                    'weighing' => 29,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'Fortalecimiento de instancias de participación institucionales y comunitarias (CTB SIRAP Macizo y SIRAP Pacífico)',
                    'goal_1' => 3,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 3,
                    'goal' => 12,
                    'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'Manejo ambiental de áreas liberadas Zona de Amenaza Volcánica Alta-ZAVA - Galeras',
                    'goal_1' => 9,
                    'goal_2' => 9,
                    'goal_3' => 9,
                    'goal_4' => 9,
                    'goal' => 36,
                    'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'Implementación de acciones priorizadas en zonas con función amortiguadora en PNN',
                    'goal_1' => 28,
                    'goal_2' => 20,
                    'goal_3' => 20,
                    'goal_4' => 20,
                    'goal' => 88,
                    'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'Control y monitoreo de residuos sólidos peligrosos',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => 'Seguimiento a los compromisos establecidos en los PGRIS municipales.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'Capacitación a los generadores de residuos sólidos peligrosos y urbanos en el departamento de Nariño',
                    'goal_1' => 200,
                    'goal_2' => 200,
                    'goal_3' => 200,
                    'goal_4' => 200,
                    'goal' => 800,
                    'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'Control y seguimiento en el adecuado manejo de residuos sólidos urbanos y peligrosos por parte de las Administraciones municipales y Empresas Prestadoras de Servicios Públicos',
                    'goal_1' => 120,
                    'goal_2' => 120,
                    'goal_3' => 120,
                    'goal_4' => 120,
                    'goal' => 480,
                    'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => 'Planes de contingencia presentados por parte de las Estaciones de Servicio revisados evaluados aprobados en el departamento de Nariño.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 1,
                    'goal_4' => 100,
                    'goal' => 301,
                    'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => 'Control monitoreo y seguimiento en minería de materiales de construcción en el departamento de Nariño',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'Control monitoreo y seguimiento en minería de oro en el departamento de Nariño.',
                    'goal_1' => 72,
                    'goal_2' => 72,
                    'goal_3' => 72,
                    'goal_4' => 72,
                    'goal' => 288,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => 'Control y monitoreo a la fauna y flora silvestre',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 39,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'Administración control y seguimiento de recursos naturales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => 'Administración control y manejo de recursos naturales',
                    'goal_1' => 76,
                    'goal_2' => 76,
                    'goal_3' => 76,
                    'goal_4' => 76,
                    'goal' => 304,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => 'Asistencia técnica atención a solicitudes y seguimiento de programas y proyectos (SISA) (2)',
                    'goal_1' => 2000,
                    'goal_2' => 800,
                    'goal_3' => 800,
                    'goal_4' => 800,
                    'goal' => 4400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => 'Plan de Acción Institucional 2016 – 2019 aprobado publicado socializado y en implementación',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => 'Formulación de proyectos para el fortalecer el financiamiento y ejecución del PAI',
                    'goal_1' => 0,
                    'goal_2' => 8,
                    'goal_3' => 8,
                    'goal_4' => 8,
                    'goal' => 24,
                    'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => 'Seguimiento y evaluación del Plan de Acción Institucional de acuerdo con la normatividad vigente',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 59,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => 'Elaboración e imple- mentación de una propuesta técnica y metodológica para retroalimentar la ejecución del PGAR desde la ejecución del PAI de CORPONARIÑO y de los instrumentos de planificación regional y local y de institucionales que correspondan.',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 201,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => 'Mantenimiento y mejora del Sistema de Gestión Institucional articulado con MECI de acuerdo con la normatividad vigente',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => 'Fortalecimiento de la información y comunicación institucional',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => 'Implementación en la Corporación del Decreto 1099 de 2017 (5)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 50,
                    'goal_4' => 50,
                    'goal' => 100,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => 'Mejoramiento de ingresos - cobro coactivo y persuasivo',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => 'Apoyo en la gestión de representación de la entidad en los procesos judiciales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => 'Apoyo en la gestión en los procesos administrativos sancionatorios',
                    'goal_1' => 28,
                    'goal_2' => 30,
                    'goal_3' => 33,
                    'goal_4' => 36,
                    'goal' => 127,
                    'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => 'Fortalecer el proceso de notificación de actos administrativos de la entidad',
                    'goal_1' => 90,
                    'goal_2' => 90,
                    'goal_3' => 90,
                    'goal_4' => 90,
                    'goal' => 360,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => 'Coordinación institucional para el apoyo a la actualización catastral',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => 'Garantizar la conectividad de la red para el correcto funcionamiento del sistema de información de indicadores',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => 'Articulación con la estrategia de Gobierno en Línea según Decreto 2573 de 2014',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 30,
                    'goal_4' => 20,
                    'goal' => 100,
                    'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct96,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct97,
                    'name' => 'Medición y seguimiento al cumplimiento del Sistema de Gestión Institucional articulado con MECI',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct98,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct99,
                    'name' => 'Reportes de resultados confiables bajo el marco de la norma NTC ISO/IEC 17025 y el sistema de calidad implementado',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct100,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct101,
                    'name' => 'Fortalecimiento de la infraestructura física y locativa de las sedes administrativas para mejorar la prestación del servicio',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 300,
                    'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct102,
                    'name' => 'Fortalecimiento del sistema atención al usuario',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2,
                    'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct103,
                    'name' => 'Diseño e implementación del sistema de seguridad y salud en el trabajo',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 200,
                    'weighing' => 39,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct104,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct105,
                    'name' => 'Fortalecimiento interinstitucional para orientar e implementar buenas prácticas con sectores productivos',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct106,
                    'name' => 'Transferencia de modelos de producción más limpia que contribuyan al aprovechamiento sostenible de los recursos naturales',
                    'goal_1' => 1,
                    'goal_2' => 30,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 31,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct107,
                    'name' => 'Formulación y desarrollo del programa regional de negocios verdes con los sectores productivos',
                    'goal_1' => 35,
                    'goal_2' => 30,
                    'goal_3' => 23,
                    'goal_4' => 12,
                    'goal' => 100,
                    'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct108,
                    'name' => 'Estudio para establecer el estado de degradación de suelos en la cuenca del río Pasto',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 10,
                    'goal_4' => 0,
                    'goal' => 10,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct109,
                    'name' => 'Investigación aplicada tendiente a establecer el índice de conservación de suelos',
                    'goal_1' => 0,
                    'goal_2' => 50,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 50,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct110,
                    'name' => 'Acciones orientadas a la recuperación o rehabilitación de suelos degradados priorizados por la Corporación',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 100,
                    'goal' => 100,
                    'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct111,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct112,
                    'name' => 'Caracterización Fuentes Hídricas contaminadas por mercurio y Unidades de Producción Minera - UPM',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 59,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct113,
                    'name' => 'Asistencia técnica minero metalúrgica para la aplicación de producción limpia.',
                    'goal_1' => 12,
                    'goal_2' => 12,
                    'goal_3' => 12,
                    'goal_4' => 12,
                    'goal' => 48,
                    'weighing' => 40,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct114,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct115,
                    'name' => 'Estrategias de fortalecimiento a los Comités Interinstitucionales de Educación Ambiental PRAES PRAU y PROCEDAS siguiendo lineamientos establecidos en la Política Nacional de Educación Ambiental y el Plan Decenal Departamental de Educación Ambiental',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct116,
                    'name' => 'Ejecución de campañas que se definen siguiendo lineamientos establecidos en el proyecto de educación ambiental participación y difusión a la comunidad.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 3,
                    'goal' => 303,
                    'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct117,
                    'name' => 'Ejecución de acciones a partir de estrategias que generen cambio hacia el fortalecimiento de la cultura ambiental ciudadana',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct118,
                    'name' => 'Realización de jornadas de participación y fortalecimiento educativo ambiental de organizaciones étnicas y ambientalistas como intercambio de experiencias para fortalecer el trabajo educativo ambiental participativo',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct119,
                    'name' => 'Promover el Centro Ambiental Chimayoy como un espacio de formación práctica que genere actitudes de cambio para el manejo adecuado aprovechamiento de los recursos naturales y el ambiente.',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 400,
                    'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective32,
                    'product_id' =>$idobjectiveproduct120,
                    'name' => 'Asignacion Presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 4,
                    'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
					
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 22,
						'description' => 'Corresponde al avance  en la actualización y/o formulación de los POMCAS de los rios Mayo, Guiza Alto Mira y Mira.',
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
						'description' => 'Zonificación y codificación de las microcuencas priorizadas para la ordenación de acuerdo al mapa de zonificación hídrografica nacional, además se identifico la ubicación de las quebradas desde el punto más alto y diferentes puntos sobre los cauces principales, se genero mapas de localización.: Rio el Encano y las quebradas Quilinsayaco, Mojondinoy, Santa Teresita, San Isidro, el Carrizo, Motilón, Romerillo, Ramos, Afiladores y Santa Lucía en jurisdicción del corregimiento de El Encano. ',
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
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 87.5,
						'description' => 'Atención del 100% del de  visitas de caracterización ambiental y evaluación de amenazas naturales solicitadas por el Comité Departamental de Gestión del Riesgo de Desastres (CAGRD) y los Municipios ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 100,
						'description' => 'Socialización la estrategia de corresponsabilidad social en la lucha contra los incendios forestales en 16 municipios del departamento de Nariño.',
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
						'value' => 100,
						'description' => '100%  de los  Planes de Desarrollo Municipal y Departamental presentados a la CAR verificados en la armonización con los demás planes de la región en lo que a planificación y gestión ambiental. Seguimiento a  10 municipios: Pasto, Ipiales, Buesaco,  La Unión, San Bernardo, Ricaurte, Mallama, Chachagui, Guchucal y Cumbal,',
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
						'activity_id' => $idactivity16,
						'year' =>1,
						'value' => 1,
						'description' => 'Suscrición de compromisos  por cada institución que conforma la red: revisión de los estatutos del Nodo Pacífico Sur, revisión de la matriz con las líneas estratégicas que maneja el Nodo Pacifico Sur',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 100,
						'description' => 'Incorporación del componente de cambio climático en los planes de manejo de las áreas protegidas e identificación  de las áreas prioritarias para la restauración en ecosistemas de paramo incorporando el criterio de variabilidad climática Niño/Niña.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 100,
						'description' => 'Suscripción de   un contrato de cooperación científica, para la identificación de una estrategia de adaptación a los efectos generados por los fenómenos de Niño y Niña en áreas de mayor susceptibilidad.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 86.9,
						'description' => 'En la vigencia 2016 un total de 65 visitas de inspección ocular a los 28 proyectos  generadores de  emisiones atmosféricas, de los cuales 28 cuentan permiso de emisiones,  8 con licencia ambiental y 7 con planes de Manejo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 1,
						'description' => 'Socializacion del mapa de ruido y plan de descontaminacion en el municipio de Tumaco',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 100,
						'description' => 'Nueve proyectos en las cuatro cuencas priorizadas (Juanambú, Guáitara, Mayo y Guiza Alto Mira) los cuales fueron financiados por  el fondo de compensación ambiental (FCA), Fondo Nacional Ambiental (FONAM) y el sistema general de regalías (SGR).',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 146,
						'description' => 'Mantenimiento a 146 hectáreas con coberturas vegetales en las cuencas de los ríos Guáitara y Juanambú, en los municipios de: La Florida, Pasto, Guaitarilla, San Bernardo, Buesaco, Imues y Nariño.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 100,
						'description' => 'Ejecución de proyectos cofinanciados por el Fondo de Compensación Ambiental, ECOPETROL, FONAM, a través de la implementación de unidades productivas sostenibles UPS, como un incentivo a la conservación de áreas estratégicas dentro de las cuencas priorizadas ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>1,
						'value' => 50,
						'description' => 'Corresponde establecimiento de 51 hectáreas   en los municipios de Belen, La Cruz, Colon, Belen y San Pablo; cuenca del Rio Mayo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 100,
						'description' => 'Coservación de 50 hectáreas través de la implementación de unidades productivas sostenibles UPS, como un incentivo a la conservación de áreas estratégicas dentro de la cuenca del río Mayo',
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
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 100,
						'description' => 'Suscripción de dos adicionales de convenios interadministrativos para construcción de PTAR en los municipios de Pupiales y Nariño y evaluación y seguimiento a diecinueve (19) convenios interadministrativos en cuanto a Estudios y Diseños y Construcción de Plantas de Tratamiento de Aguas Residuales Domésticas',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 


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
						'value' => 77.4,
						'description' => '40 muestreos de fuentes hídricas ubicados dentro del  Departamento de Nariño, entre las cuales son receptoras de vertimientos municipales y de tipo industrial, con el fin de conocer su estado antes y después de las descargas y determinar el grado de afectación de las mismas',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 1,
						'description' => 'Seguimiento y monitoreo de la calidad de las aguas marino -costeras de la zona costera del departamento de Nariño y la operación del nodo de CORPONARIÑO, en el marco del Programa Nacional de Monitoreo de la Red de vigilancia para la conservación y protección de la calidad de aguas marinas y costeras – REDCAM, en convenio con el INVEMAR',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 

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
						'value' => 92.9,
						'description' => '',
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
						'activity_id' => $idactivity40,
						'year' =>1,
						'value' => 57,
						'description' => 'Establecimiento de 28.5 has de  áreas procesos de restauración en las cuencas hidrográficas de los ríos Guáitara, Juanambú y Mayo.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia41 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 25,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 100,
						'description' => 'Implementación de acciones de manejo y conservación de las especies amenazadas priorizadas por CORPONARIÑO: Oso de Anteojos (Tremarctos ornatus) y Tucán Pechigris (Andigena hypogluaca), a través de la investigación  y formulación de estrategias de conservación acordes con el estado actual de las especies,  principalmente enfocadas a disminuir la presión antrópica que existe en sus hábitats.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>1,
						'value' => 4,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 
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
						'value' => 3350,
						'description' => 'Dos áreas declaradas a nivel regional: PNR Páramo de Paja Blanca con 2.062 has  y RFPR Volcán Azufral con 1.288 has, con administración, recorridos, talleres de restauración ecológica, educación ambiental para generar conciencia y fomentar comportamientos responsables frente al manejo sostenible del Ambiente.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 


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
						'value' => 7.7,
						'description' => 'Dos áreas (hectáreas ) restauradas ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>1,
						'value' => 1,
						'description' => 'Identificación de una alternativa basada en el establecimiento de una huerta comunitaria y el mantenimiento de sendero y elaboración de la señalética en la Reserva La Nutria del Resguardo Indígena Awá de El Gran Sábalo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 4,
						'description' => 'Corponariño realizó la administración de 4 Reservas Forestales Protectoras Nacionales (RFPN Ríos Bobo y Buesaquillo, RFPN La Cocha Patascoy, RFPN La Planada, RFPN Cuenca Alta del Río Nembí), mediante acciones de conservación, control, monitoreo, articulación comunitaria e institucional y talleres de educación ambiental',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 20,
						'description' => 'Corponariño cuenta con áreas declaradas y en proceso de declaración con acciones de manejo, enmarcadas en la conservación de la biodiversidad y los recursos naturales. La administración de las áreas a nivel regional se debe realizar de una manera continua de acuerdo a la Ley 99 de 1993, proceso que es garantizado desde la Corporación mediante el cumplimiento de las metas PAI.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 100,
						'description' => 'Ejecución de acciones relacionadas con la identificación de áreas para la implementación de Herramientas de Manejo del Paisaje y el avance en estrategias de conservación que para este caso corresponde a la implementación de las Fases I y II de la ruta para la declaratoria del MADS del área Andino - Pacífica',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 2,
						'description' => 'Las instancias hacen referencia a la articulación a nivel Nacional y con los actores locales en los Sistemas Regionales de Áreas protegidas, que para el caso de Nariño son los SIRAP Pacífico y SIRAP Macizo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 11,
						'description' => 'Establecimiento de 11 has (7 ha sen núcleos y 4 en cercas vivas), con procesos de restauración en predios liberados de ZAVA Galeras',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 28,
						'description' => 'Establecimiento de 28 componentes de sostenibilidad definidos de acuerdo a las necesidades de las comunidades asentadas en las Zonas con Función Amortiguadora',
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
						'value' => 116.1,
						'description' => 'CORPONARIÑO, ha llevado a cabo 403 visitas de control y monitoreo a los generadores de residuos hospitalarios y similares de los municipios; de igual forma a Almacenes de agroquímicos y generadores de RESPEL.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 100,
						'description' => ' Seguimiento al cumplimiento de 62 PGIRS en el Departamento de Nariño
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 426,
						'description' => 'Capacitaciones en las zonas Centro, Norte, Zona Sur y Zona Costa Pacífica del departamento de Nariño ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 120,
						'description' => '120 visitas de control y monitoreo programadas como seguimiento al  manejo de residuos sólidos urbanos que realizan las Administraciones municipales y Empresas Prestadoras de Servicios Públicos',
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
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 78.44,
						'description' => 'Planes de contingencia radicados: 232, Evaluados 182 en vigencia 2016',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
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
						'value' => 138,
						'description' => 'Realización de 138 informes de  visitas a proyectos mineros legales conforme a la programación anual establecida',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>1,
						'value' => 94,
						'description' => 'Tumaco: 24 
					Barbacoas:  41
					Cumbitara: 6
					Roberto Payan: 8
					Maguí Payan: 9
					Santabárbara: 6',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 90,
						'description' => 'CORPONARIÑO ejecuta medidas de prevención, control y manejo  de caracol Africano (Achatina fulica),  considerada invasora y  dañina, reconocida como plaga que afecta la biodiversidad, la salud pública y la productividad agrícola',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 84.3,
						'description' => 'Emisiones Atmosféricas : 28
					Aprov. Forestal : 37
					Concesiones: 1.740
					Vertimiento: 437
					Licencias en minería : 67',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 56.26,
						'description' => 'Lconcesiones: 29,37
					Vertimientos:71
					Aprov. forestal: 91,6
					Emisiones Atmosféricas: 43
					Licencias : 46,33',
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
						'value' => 2251,
						'description' => '2.251 Visitas de asistencia técnica, atención a solicitudes y seguimiento de programas y proyectos, relacionados así: 466 visitas de asistencia técnica, 552 visitas para la atención a solicitudes y 1.233 visitas de seguimiento de programas y proyectos CORPONARIÑO ',
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
						'description' => 'El PAI 2016 -2019 se presentó en audiencia pública el día 29 de abril de 2016 y posteriormente fue  aprobado por el Consejo Directivo  mediante acuerdo No. 010 del 11 de mayo de 2016.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>1,
						'value' => 1,
						'description' => 'Registro, evaluación y seguimiento de 31 proyectos, y 3 subproyectos  vigencia 2016 y seguimiento a 11 proyectos vigencia 2015 - 2016',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 1,
						'description' => 'Consolidación del documento preliminar del Plan el capítulo correspondiente a Seguimiento y Evaluación del PGAR
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 1,
						'description' => 'SGI operativizado y mejorado, basado en acciones que permiten que la Corporación mantenga la certificación y mejore continuamente sus procesos, con respecto al porcentaje de proactividad teniendo en cuenta el cumplimiento en asesoría y acompañamiento a los procesos institucionales',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>1,
						'value' => 1,
						'description' => '12 agendas mensuales, 48 semanales, cubrimiento de 120 eventos internos, 90 eventos institucionales externos, 56 boletines de prensa, 8 comunicados a la opinión pública, 100 publicaciones en página Web, 12 boletines institucionales internos, 70 entrevistas en medios radiales y 77 entrevistas y notas periodísticas en medios televisivos a Directivos y funcionarios, 45 notas en prensa escrita. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>1,
						'value' => 189,
						'description' => 'El valor estimado de recaudo para la vigencia 2016 es de $910.000.000 y de acuerdo a la meta establecida por el indicador se debe recaudar el 85% de la meta, es decir $773.500.000; a corte 31 de diciembre de 2016 la unidad de Cobro Coactivo de la Oficina Jurídica ha recaudado DOS MIL CUATROCIENTOS SETENTA Y CUATRO MILLONES TRESCIENTOS VEINTIÚN MIL CIENTO VEINTIDÓS CON CINCO CENTAVOS ($ 2.474.321.122,5) por concepto de tasa por uso de agua, tasa retributiva y multas ambientales.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>1,
						'value' => 100,
						'description' => 'Se adelantaron 49 procesos vigentes los cuales se distribuyen así: en los Juzgados Administrativos del Circuito de Nariño; en el Tribunal Administrativo de Nariño Escritural; en el Tribunal Administrativo de Nariño Sistema Oral; Juzgados Laborales; Juzgados Civiles; Juzgados Especializados de Restitución de Tierras y Tutelas. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>1,
						'value' => 28,
						'description' => 'Expedientes Aperturados: 289
					Medidar Preventivas:91
					Autos: 937
					Resoluciones: 671
					Indagacion Preliminar: 11
					Abre Inv. e Inicia: 243
					Sancion:317
					Cesacion de Procedimiento: 19
					Archivo:63',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 100,
						'description' => 'Se radicaron 2.363 asuntos para notificar de los cuales se notificaron 2.514 y de conformidad con lo que establece la Ley 1437 del 2011.',
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
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>1,
						'value' => 1,
						'description' => 'El sistema se encuentra actualizado y operando  con el reporte de 37 indicadores ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>1,
						'value' => 25,
						'description' => 'En la vigencia 2016 se trabajó sobre 4 componentes de la estrategia de gobierno en línea según decreto 2573 del 2014 : Tic para el servicio, Tic para gobierno abierto, Tic para la gestión y seguridad se la información.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
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
						'value' => 100,
						'description' => 'Se desarrolló en tres ciclos de auditoria durante la vigencia 2016, auditando los 11 procesos institucionales y a los centros ambientales Sur, Sur occidente y Costa Pacífica, con el objeto de verificar la conformidad del Sistema de Gestión Institucional con los requisitos de la Norma ISO 9001:2008, NTCGP1000:2009 articulado con MECI  evaluando el grado de implementación en sus procesos y verificar la conformidad del cumplimiento de los requisitos de la norma NTC ISO/IEC 17025:2005 para el proceso Gestión Analítica.',
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
						'value' => 100,
						'description' => '74 muestras tomadas en matriz de aire,  determinación de Material Participado menor a 10 µm PM10 y evaluación de la cantidad de material participado ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>1,
						'value' => 35,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>1,
						'value' => 103,
						'description' => 'Operación del Laboratorio del Centro Ambiental Minero que cuenta con infraestructura y equipos en Laboratorio para análisis de Mercurio y equipos de monitoreo en campo que identifican alteraciones fisicoquímicas de los efluentes influenciados por vertimientos mineros',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>1,
						'value' => 12,
						'description' => 'Asistencia técnica en beneficio de minerales a unidades mineras de 12 municipios del departamento de Nariño',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>1,
						'value' => 100,
						'description' => 'Trabajo continuo con 12 Instituciones Educativas a través de jornadas de campo, talleres, eventos, entre otras  a partir de compromisos establecidos desde convenios interadministrativos en marco de los PREES. Avance del 100%',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>1,
						'value' => 100,
						'description' => 'Realización de 3 campañas:  Nariño puro ambiente, Actuando por el cambio y en paz con la Naturaleza. Avance  del 100%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>1,
						'value' => 100,
						'description' => 'Realización de 14 jornadas y/o eventos   a partir de conmemoración fechas ambientales. Avance  100%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>1,
						'value' => 100,
						'description' => 'Se realzaron 8 jornadas de acercamiento y mesas de trabajo con las comunidades étnicas. Avance del 100%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>1,
						'value' => 100,
						'description' => 'Ejecución de acciones de formación a partir de proyectos demostrativos y   formación  ambiental con  instituciones educativas, universidades, entre otras . Avance del 100%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 21.34,
						'description' => 'Protocolización de la Consulta previa con las comunidades de la cuenca del Rio Juanambú el día 5 de diciembre del 2017, para las 19 comunidades indígenas pertenecientes a la cuenca del rio Guitara, actualización del POMCA en la fase de Aprestamiento y Diagnóstico se realizó con financiación del fondo de compensación ambiental FCA se cuenta con los productos finales de dichas fases y la cartografía a escala 1:25.000.Para el caso de los POMCAS de los ríos Mira y Guiza Alto Mira, la Corporación se encuentra en gestión de recursos ante el –FCA',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 100,
						'description' => 'Actualizacion de  siete PORH formulados según la guía de ordenamiento expedida por el MADS en tres fases : Río Guáitara tramo I, Río Chiquito, Río Boquerón, Quebrada Surrones, Quebrada honda, Quebrada Recreo y San Juan y Quebrada la Llave',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 10,
						'description' => 'Convenio especial de cooperación para evaluación de los cambios en la cobertura de vegetación forestal en la UAC LLAS durante los periodos 2015 – 2017, portafolio de nuevas áreas protegidas, utilizando herramientas de procesamiento digital de imágenes de sensores remotos ópticos de baja - media resolución espacial y de información secundaria disponible.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 150,
						'description' => 'El estudio “Zonificación de áreas de inundación en el caserío de el Puerto de la Laguna de la Cocha, contempla la  zonificación de riesgo por inundaciones, determinación de los máximos niveles limnimétricos, delimitación de diferentes áreas de inundación, considerando las elevaciones máximas del lago y pautas para el ordenamiento territorial de la zona, análisis del comportamiento histórico de la variable hidrológica y su variación multianual, ajuste de distribución estadística y se estimó niveles para diferentes recurrencias a partir de la serie de eventos observados, etc',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 100,
						'description' => 'La Estrategia se desarrolló en los  alcanzó 34 municipios del departamento de Nariño,  reuniones con el Consejo Municipal de Gestión de Riesgos de Desastres o en su defecto, con el coordinador de Gestión de Riesgos Municipal ó Planeación Municipal de cada municipio, conformación de la Red de Vigías Rurales (R.V.R) y asesoría para formulación de los planes de contingencia para la temporada de lluvia y la temporada seca. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 115,
						'description' => 'Asesoría técnica a 17 municipios, en la adecuada incorporación de la dimensión ambiental, incluyendo la gestión del riesgo (determinantes ambientales) en los procesos de ordenamiento territorial (POT, PBOT, EOT), Talleres adicionales de asistencia técnica en el componente ambiental del ordenamiento territorial, asesoría y emisión de determinantes ambientales asociadas a los planes parciales (PP) Aranda, Loma de Centenario y Altamira; así como reuniones aclaratorias sobre información ambiental a tener en cuenta para las unidades de planificación rural (UPR) Bordoncillo y Rio Bobo',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 1,
						'description' => 'Conformación de los grupo vigías en las áreas protegidas de DMI Cerro Chimayoy, RFPN Rio Bobo Buesaquillo, DMI Enclave Subxerofítico de Patía, PNR Páramo de Paja Blanca, RFPN La Cocha - Patascoy, formulación de un proyecto con el que se identifica la necesidad de implementar estaciones climatológicas para monitoreo de los parámetros climáticos.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 1,
						'description' => 'Consolidación de una propuesta que se socializó a los equipos técnicos de Gestión de Estrategias de Adaptación al Cambio Climático y Gestión Integral de las Biodiversidad de sus servicios Ecosistémicos; 16 capacitaciones en las áreas protegidas declaradas y en proceso de declaratoria (Páramo de Paja Blanca, RFPR Volcán Azufral, RFPN Río Bobo Buesaquillo, Páramo Las Ovejas – Tauso y DMI Enclave Subxerofitico del Patía)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 100,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 100,
						'description' => 'Monitoreo de la calidad del aire con un total de 93 muestras representativas, debidamente analizadas y validadas con una concentración promedio de PM10 de 24,4 µg/m3. A partir de los resultados obtenidos y el análisis de datos, es posible afirmar que el promedio mensual del referido contaminante no sobrepasó la norma diaria de calidad del aire para ninguno de los meses monitoreados',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 85.1,
						'description' => 'Seguimiento a treinta y uno (31)) proyectos generadores de emisiones atmosféricas que se encuentran legalizados ante la Corporación a través de Permiso de Emisiones Atmosféricas o Licencia Ambiental, lo que corresponde al 100% de los usuarios legalizados ante la Entidad.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 1,
						'description' => 'Entrega del mapa de ruido en las instalaciones de la Corporación de manera satisfactoria, además de la socialización del planteamiento del plan de descontaminación por ruido para el municipio de Pasto, teniendo en cuenta que dichos estudios son base fundamental en la incorporación de las determinantes ambientales que deben ser incluidas en el ordenamiento territorial del municipio',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 93,
						'description' => '513 hectáreas restauradas en zonas degradadas del Departamento de Nariño; a través de la ejecución de diferentes proyectos ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 924,
						'description' => 'Mantenimiento  de 924 has en diferentes municipios del departamento de Nariño; a través de la ejecución de diferentes proyectos financiados con recursos propios',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 80,
						'description' => ' 6.500,44 hectáreas entre la certificación de exoneración de impuesto predial y dos a través de la implementación de incentivos a la conservación, en el departamneto de Nariño; asi como tambien a través de  la estrategia de Banco2 y la administracion de áreas protegidas regionales.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 68,
						'description' => '32 hectáreas distribuidas de la siguiente manera en los municipios de la zona norte que aportan a este indicador de la cuenca Río Mayo: 6 hectáreas en el municipio de la cruz, 6 hectáreas en el municipio de Colon, 6 hectáreas en el municipio de Belén y 14 hectáreas en el municipio de San Pablo',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 80,
						'description' => 'Conservacion de  68 has a través de la suscripción de un contrato de asociación con recursos de transferencia del sector eléctrico, los cuales fueron ejecutados en la cuenca del rio Mayo, en los municipios de la Cruz, San Pablo, Belén y Colon.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 100,
						'description' => 'Convocatoria pública para financiar proyectos dirigidos a efectuar obras de inversión y pre inversión de descontaminación hídrica en el departamento de Nariño y  Cofinanciación  de (15) proyectos con las administraciones municipales, discriminados así: 6 proyectos de inversión y 9 proyecto de preinversión. El  total de los recursos comprometidos por la Corporación ascienden a $5.434.472.826',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 100,
						'description' => 'Monitoreo 22 fuentes hídricas, de las cuales 3 de ellas por encontrarse en proceso de reglamentación tuvieron dos monitoreos al año (Quebrada Miraflores, Q. Mocondino y río Chiquito). Esto permite hacer seguimiento a los objetivos de calidad planteados en los respectivos PORH con el fin de validar los mismos, buscando a corto, mediano y largo plazo, garantizar los usos del recurso en cada río o tramo del mismo',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 97,
						'description' => 'Tramite de 240 solicitudes de permisos de vertimientos para las distintitas actividades como industriales, domésticas y de servicios en un tiempo promedio de 60.06 días, lo cual esta por debajo del tiempo  establecido en el procedimiento.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 92.6,
						'description' => '506 aperturas de Concesiones de Agua, discriminadas a continuación: doscientos trece (213) Corponariño Centro, veintitrés (23) Centro Ambiental Minero, Veintisiete (27) Centro Ambiental Costa Pacífica, Setenta y tres (73) Centro Ambiental Sur Occidente, Setenta y siete (77) Centro Ambiental Sur y Noventa y tres (93) Centro Ambiental Norte',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 100,
						'description' => '106,8 has desagregadas d ela siguiente manera : 21.5 has rezagadas de la vigencia 2016 y 85,3 has correspondientes a  la vigencia 2017. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 1,
						'description' => 'Consolidación de los documentos finales de Estudio Técnico de Caracterización del Contexto Ambiental, Social y Económico del Complejo de Páramos (La Cocha Patascoy), a Escala 1:25.000',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 25,
						'description' => 'Se elaboró la propuesta para la segunda fase de implementación y diagnóstico: “CONSERVACIÓN Y MITIGACIÓN DEL CONFLICTO HOMBRE OSO (Tremarctos ornatus), CON PARTICIPACIÓN COMUNITARIA, EN  LOS CORREDORES BIOLÓGICOS CENTRO ORIENTAL Y OCCIDENTAL DEL DEPARTAMENTO DE NARIÑO”. En concordancia con este mismo plan, se han adelantado acciones de educación ambiental en las áreas con alta vulnerabilidad al conflicto oso – hombre, dando a conocer las estrategias de manejo para su mitigación, por su parte las comunidades que han estado alejadas de sucesos de conflicto (hombre - oso) reconocen su importancia y la de su conservación, están dispuestas además a acoger medidas de prevención frente a situaciones de conflicto.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 58,
						'description' => 'Suscribicion de un Convenio Interinstitucional con Cornare y Masbosques  para continuar con la administración de la plataforma y de esta manera garantizar la continuidad de la estrategia.fortaleciendo la estrategia.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 47,
						'description' => 'Se cuenta con dos áreas declaradas a nivel regional (PNR páramo de Paja Blanca 2062 hectáreas de páramo y RFPR Volcán Azufral con 1288 hectáreas), las dos áreas cuentan con proceso de declaratoria y plan de manejo',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 133,
						'description' => 'Las áreas de deforestación evitada están articuladas al proceso de implementación de Componentes de Sostenibilidad. En este sentido los beneficiarios de estos componentes dejan 0.5 ha para procesos de conservación, para un total 12 ha',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 100,
						'description' => 'Implementacion de 12 ha de restauración ecológica para los ecosistemas de humedales en el departamento de Nariño
					Encano - Laguna de La Cocha
					- Núcleos: 6 Has
					- Cerca viva: 3 Has
					Total Has: 9 Has
					Ipiales - Totoral 
					- Núcleos: 2 Has
					- Cerca viva: 3 Has
					Total Has: 5 Has',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 1,
						'description' => 'Articulación de trabajo con dos resguardos de la zona de pie de monte: Resguardo de Pialapi La Planada para jornadas de capacitación con el objetivo de generar conocimiento acerca de los ecosistemas que se encuentran en la zona de influencia y El Gran Sábalo – UNIPA, donde se beneficiaron 395 personas que conforman 89 familias, y a más de 200 cabildantes del resguardo y se implementó una huerta alimentaria demostrativa de especies tradicionales del pueblo Awá, acercamiento con la comunidad del resguardo Indígena Cuaiquer Viejo La Milagros, con quienes se realizó una alianza  que beneficiara a 25 familias.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 4,
						'description' => 'Administración de las 4 zonas de Reservas Forestales Protectoras Nacionales (La Cocha Patascoy, Rio Bobo Buesaquillo, Cuenca Alta Rio Nembi,  La Planada)  se adelantaron de acuerdo a la normatividad vigente artículo 31 de la Ley 99 de 1993; para lo cual Corponariño cuenta con un equipo de profesionales y técnicos para cada área, encargados de adelantó actividades de control, monitoreo y talleres de educación ambiental los cuales se fortalecieron con la articulación comunitaria e institucional (actores sociales).',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 100,
						'description' => 'Declaratoria de 4 áreas (Páramo de Paja Blanca, Volcán Azufral, Enclave Subxerofitico y Páramo de la Ovejas) de las cuales 2 cuentan con Planes de Manejo, las cuales son el Enclave Subxerofitico y el Páramo de Las Ovejas Tauso. Para casa área se adelantó acciones.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 3,
						'description' => 'Participó en los Comités Regionales de SIRAP Pacifico, desde donde se adelantan estrategias conjuntas para el fortalecimiento de las áreas protegidas regionales teniendo en cuenta las siguientes temáticas: visión pacifico, biofin colombia pnud, reserva de la biosfera yproyecto gef',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 9,
						'description' => 'Instauró 9 ha de Restauración ecológica en un predio liberado del la ZAVA en el municipio de la Florida Nariño, en el cual se realizó entre otras las siguientes actividades:
					Aislamiento de las zonas ha restaurar correspondientes a cinco (5) hectáreas;
					Trazo de los núcleos de dispersión con as siguientes características:',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 10,
						'description' => '16 componentes de sostenibilidad sobre el área de influencia y dentro de áreas protegidas del nivel Regional y Nacional, precisamente para áreas estratégicas para la conservación y uso sostenible de la biodiversidad (Páramo de las Ovejas-Tauso, RFPN Ríos Bobo y Buesaquillo, RFPN La Cocha Patascoy, Zona con Función Amortiguadora de Los Parques Nacionales Naturales Complejo Volcánico Doña Juana Cascabel y Santuario de Flora y Fauna Galeras).



					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 100,
						'description' => 'Realizacion de 155 visitas de identificación de generadores de RESPEL en la Zona Andina del departamento de Nariño, dando cumplimiento a la totalidad programada por el procedimiento Gestión Integral de Residuos Solido',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 100,
						'description' => 'Realizaron 62 visitas de seguimiento a las metas de aprovechamiento de residuos sólidos  establecidas en los PGRS de  Aldana, Belén, Buesaco, Chachagui, Colon Génova y Consaca',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 386,
						'description' => '386  personas capacitadas en Gestión integral de residuos, gestión integral de residuos peligrosos y diligenciamiento plataforma generadores ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 120,
						'description' => '120  visitas de control y monitoreo a los Municipios de Aldana, Belén, Buesaco, Chachagui, Colon Génova y Consaca  con respecto  los sitios de disposición final  de los residuos sólidos.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 83.33,
						'description' => 'Resumen: Evaluación de 125 Planes de Contingencia (114 Planes de Contingencia Aprobados y 11 Planes de Contingencia Negados) sobre un total de 150 radicados en la corporación en la vigencia  2017. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 132,
						'description' => 'Realización de 132 visitas de seguimiento ambiental a proyectos formales e informales dedicados e la extracción de materiales de construcción en la zona andina del departamento de Nariño, se realizaron salidas de campo para atender las solicitudes interpuestas por usuarios y administraciones municipales, por posibles afectaciones a los recursos naturales renovables; en el caso de los proyectos que son ilegales, se realizó las visitas técnicas con policía nacional y funcionarios de alcaldías, en las cuales se informó a los usuarios que deben cumplir con los requisitos normativos',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 72,
						'description' => 'Realización  72 visitas de seguimiento, acompañamiento, interventoría y asistencia técnica, a proyectos de explotación de minería de aluvión, en los municipios de Roberto Payán, Maguí Payán, Barbacoas y Tumaco. Teniendo que solo existen 3 proyectos que cuentan con instrumento ambiental otorgado por CORPONARIÑO, los demás proyectos no cuentan con ningún permiso ambiental para realizar las actividades de explotación, como también no cuentan con solicitud de concesión minera.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 90,
						'description' => 'Apoyo el evento organizado por la Subdirección de Intervenciones para la Sostenibilidad Ambiental denominado Primer Seminario Internacional de Cambio Climático Un Camino Hacia la Adaptación y Mitigación, desarrollado los días 1 y 2 de noviembre de la presente anualidad, en el marco del Plan Territorial de Adaptación Climática PTAC, dirigido a la población en general y sector académico',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 100,
						'description' => 'RUA, revisión y trasmisión desde los años 2009 hasta 2016, la labor se realizó para periodos balance 2009 ya que existen PB que no han sido trasmitidos. SISAIRE registro de información de los meses de Enero a Noviembre, actualizando el formato estándar en la base de datos del IDEAM y monitoreo continuo de la calidad del aire. SNIF reporte de la información de Aprovechamiento Forestal, Movilización Forestal, Decomiso Forestal, Incendios de Cobertura Vegetal y Plantaciones Forestales Protectoras.  SIRH. Se realizó el diligenciamiento de la matriz de identificación de fuentes hídricas con relación a los resultados de las caracterizaciones fisicoquímicas y microbiológicas reportadas en los años 2015 y 2016.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 63,
						'description' => 'Permiso de emisiones atmosféricas: 54
					Permiso de aprovechamiento forestal: 89,12
					Licencias ambientales: 83
					Permiso de vertimientos: 51
					Concesiones de agua: 29
					Promedio 63 dias ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 2219,
						'description' => '2.219: 432 visitas de asistencia técnica, 259  visitas para la atención a solicitudes recibidas en temas relacionados a la exoneración de predios, Restitución de predios y visitas a predio para reforestar , 1.174 visitas de seguimiento de programas y proyectos , 160 casos que contemplan restitución de tierras  y 194 visitas solicitudes de material vegetal atendidos por CORPONARIÑO.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 10,
						'description' => 'Banco de proyectos operando; evaluación y aprobación de proyectos, lectura de indicadores de seguimiento trimestral y semestral, modificaciones físicas y/o financieras, implementación del módulo de contratos',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 1,
						'description' => 'sin meta',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 1,
						'description' => 'Sistema de gestión institucional operatividad en marco de la certificación en las normas de ISO9001,  NTCGP1000:2009 y la acreditación en cumplimiento de la Norma Técnica Colombiana NTC-ISO/IEC 17025
					Culminó con éxito el plan de transición estructurado para lograr la actualización del SGI en la NTC ISO 9001 en la versión 2015.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 1,
						'description' => 'Divulgación de la información sobre el  quehacer misional de la entidad, mediante  estrategias y canales de comunicación, orientados a los grupos de interés a nivel interno y externo.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 105,
						'description' => 'Se reporta en el rubro de recuperación de cartera en Tasa Retributiva $ 784.399.765,12, por Tasa de Uso de Agua $ 149.022.175,52y por Multas Ambientales $ 124.339.202,54, para un total de recaudado $ 1.057.761.143,18. La meta programada de recaudo de cartera para la unidad de cobro coactivo para el año 2017 es de $910.000.000 de los cuales se tiene como porcentaje de recaudo el 85% dando un total de $773.500.000 como meta anual para el año 2017.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 100,
						'description' => 'Se adelantó el trámite de 53 procesos judiciales los cuales iniciaron con el poder y la respectiva sustitución de poder procesal, con acciones instauradas en otras vigencias y en la presente vigencia. 
					Realizacion de  15 actuaciones respectivamente para el año 2017',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 38.73,
						'description' => 'Conforme a la línea base de los expedientes administrativos que cuenten con iniciación de procesos sancionatorios se tiene un total de 550 autos de trámite, 38 sanciones, 19 archivados, 5 en cesación de procedimiento y 6 resoluciones de proceso sancionatorio. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 87.38,
						'description' => 'Teniendo en cuenta el informe emanado del personal contratista que labora en esa actividad,podemos concluir que para el cuarto trimestre del 2017 se recibieron 832 expedientes para notificar y se notificaron 727',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>2,
						'value' => 1,
						'description' => 'El sistema de indicadores se encuentra en funcionamiento con 27 indicadores mínimos de Gestión y Ambientales del resolucio 667 de 2016',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>2,
						'value' => 25,
						'description' => '.- Actualización permanente del portal Web y la Intranet Institucional
					.- Componente Seguridad de la Información
					.- Componente Tic para la gestión
					.- Componente TIC para gobierno abierto - Herramienta SILA Y VITAL',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>2,
						'value' => 100,
						'description' => 'Durante el periodo del 22 de agosto al 13 de septiembre de 2017 se  ejecutó el programa de auditoria interna al Sistema de Gestión Institucional, bajo las normas ISO 9001:2015 y NTC GP1000:2009 articulado con MECI con alcance a los once procesos institucionales en la sede central y a los centros ambientales Norte y Minero Sotomayor, y en la norma NTC ISO/IEC 17025:2005 para el proceso Gestión Analítica.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>2,
						'value' => 100,
						'description' => 'Durante el  2017, el laboratorio emitió 116 reportes de resultados de muestras de matriz aire y 233 reportes de resultados de matriz agua, realizando el cálculo de resultados, revisión de los mismos, alimentación de la base de datos, elaboración preliminar del reporte de resultados, segunda revisión de resultados y elaboración final del reporte de resultados.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>2,
						'value' => 25,
						'description' => 'Adecuaciones a las sedes locativas del centro Ambiental en Charco en el segundo semestre de la vigencia 2017, suscribió un contrato de Obra con el Consorcio BEC para la adecuación de los centros ambientales del Encano y Sotomayor, entre otros.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>2,
						'value' => 100,
						'description' => 'Asesoría a 20 organizaciones en diez municipios, en las líneas productivas de café (9), hortofrutícola (5), ganadería (4), panela (1), porcícola (1), en marco de la guía metodológica se desarrollaron 105 vistas a finca, 74 capacitaciones en temas relacionados con buenas prácticas agropecuarias(BPA), guías ambientales en porcicultura, ganadería, café, hortofrutícola. Se implementó 3 viveros temporales con capacidad de 50.000 en los municipios de Guitarrilla, Pipíales y Sapuyes',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>2,
						'value' => 30,
						'description' => 'Asesoría técnica, ambientalmente a 30 organizaciones, de acuerdo a la clasificación del Programa Regional de Negocios verdes están distribuidas así: Sistemas de producción ecológico, orgánico y biológico (17), No maderables (4), Turismo de naturaleza (6), Aprovechamiento y valorización de residuos (2) y otros bienes y servicios sostenibles (1). ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>2,
						'value' => 30,
						'description' => 'Capacitación en criterios de Negocios Verdes a 30 organizaciones, suscripción de alianzas o acuerdos publico privadas para la ejecución del PRNV, Fortalecidos   cinco (5) pilotos verificados por la autoridad ambiental, Construcción de la estrategia regional de N.V.   teniendo en cuenta la oferta y demanda regional conjuntamente con la unión temporal de negocios verdes, Participación y/o realización de ferias de promoción de los N.V. en el evento de Bioexpo. Con el apoyo del MADS y acciones para mejorar el desempeño ambiental y socio empresarial.  ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>2,
						'value' => 50,
						'description' => 'Documento    Estudio técnico orientado a determinar el estado de degradación de suelos por erosión en la cuenca alta del rio Pasto  , que incluye los análisis del estado de degradación de suelos por erosión, caracterización geológica, geomorfológica, edáfica y biótica, cartas temáticas a escala 1:25.000  (florística) adoptando la guía metodológica propuesta por IDEAM',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>2,
						'value' => 38.8,
						'description' => '56 visitas de campo; 19 a proyectos de explotación y beneficio mineral que cuentan con instrumento ambiental otorgado por CORPONARIÑO, siete 7 a proyectos que se encuentran vinculados al procesos de formalización por minería tradicional, 26 para la caracterización de fuentes hídricas, 3 visitas en atención a denuncias ambientales y 1 visita en atención a  requerimientos de la comunidad en general.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>2,
						'value' => 12,
						'description' => 'Asesoría a 12 Unidades de Producción Minera, ubicadas en la Zona Andina del departamento de Nariño, para ello se realizó visitas de campo y se prestó asistencia técnica en la implementación de tecnologías limpias para el beneficio de oro mediante procesos de recuperación libre de sustancias químicas',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>2,
						'value' => 100,
						'description' => 'Se afianzo el trabajo educativo ambiental con las Instituciones Educativas no solo desde lo técnico, para lo cual se comprometieron recursos financieros, con las Instituciones Educativas: Ntro. Sr. del rio de Cumbal, Gral. Santander de Tumaco, Inmaculada de Robles la Florida, Tec.  Agropecuaria simón Alvares de Samaniego, La Caldera Pasto, Tablón Panamericano Taminango, San fco de Asís Ancuya, San Fco de Asís Linares, Municipal Funes, Tca Agropecuaria San Carlos Colon, Institución Educativa Juanambu y Concentración de Desarrrollo Rural en el municipio de la Unión',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>2,
						'value' => 100,
						'description' => 'Desarrolló la campaña   Ponte en Paz con la Naturaleza    en época de semana santa la cual se  retoma para el periodo de navidad. De igual manera se trabajó en el evento   Nariño Puro Ambiente   y el evento   Actuando por el Cambio   a través de los Comités Interinstitucionales de Educación Ambiental, así como con grupos organizados donde la temática central fue el cambio climático y la  gestión del riesgo.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>2,
						'value' => 100,
						'description' => 'Realizacion 7 jornadas en el marco de fechas según calendario ambiental: No uso de la Palma de cera en  semana santa, el no uso de los recursos naturales en adornos navideños, reciclaje, ahorro agua y energía; Día de la educación ambiental Tumaco, Día de los humedales, Día Mundial del agua, Día Mundial de la Tierra Chimayoy, Día Mundial de los océanos Tumaco, Día Mundial del Medio Ambiente, Día mundial capa de ozono , Día Mundial del Reciclaje, es importante resaltar que además las campañas se trabajaron en las diferentes jornadas donde se incluye comunidad educativa, grupos asociativos, medios de comunicación, entre otros grupos o entidades que solicitan la participación activa de la Corporación desde el Proyecto de Educación Ambiental',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>2,
						'value' => 100,
						'description' => ' 2 eventos denominados: “Jóvenes Construyendo Ambiente”, “Encuentro de comunidades Indígenas” jornadas que se realizaron con representantes de los municipio de Tuquerres, Ospina, Sapuyes, Samaniego, Ricaurte y Providencia',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>2,
						'value' => 100,
						'description' => 'Ejecución de 
					acciones de información y formación desde el Procedimiento  de Educación Ambiental, Participación y Difusión a la Comunidad, con los diferentes visitantes o invitados al Centro Ambiental Chimayoy desde el sector de educación formal, hasta las parte de la comunidad en general que así lo requiera',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 12.4,
						'description' => 'Continuidad con la formulación y/o actualización de los planes de ordenamiento y manejo para las cuencas Juanambú y Guáitara financiados con recursos del Fondo Adaptación. POMCA del rio Guiza- Alto Mira se presentó ante FCA el proyecto “Desarrollo de la fase de diagnóstico en el marco de la actualización del plan de ordenación y manejo de la cuenca hidrográfica río Güiza Alto Mira en el departamento de Nariño”. POMCAs de los ríos Mira y río Mayo; teniendo en cuenta que la Corporación no cuenta con los recursos suficientes para la formulación de los POMCAs se presentaron ante el FCA en la vigencia 2018 para ser ejecutado en la vigencia 2019.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 50,
						'description' => 'Diagnóstico del PORH del Lago Guamués; Caracterización inicial información secundaria en diferentes instrumentos de planificación y trabajo de campo caracterización fisicoquímica del espejo de agua del lago Guamués sus once principales afluentes priorizados y efluente',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 100,
						'description' => 'identificación y clasificación de áreas forestales en el departamento de Nariño de acuerdo con la Guía preliminar para la Ordenación Forestal 2018 y de áreas Protectoras o Productoras según Decreto 1076/2015. Construcción de línea base y Propuesta metodológica para la priorización de subzonas hidrográficas para iniciar la formulación del POF.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 100,
						'description' => 'Evaluación de cambios en la cobertura de vegetación forestal en la Unidad Ambiental Costera Llanura Aluvial del Sur – UAC LLAS durante los periodos 2015 – 2017. Elaboración del portafolio de áreas protegidas en la zona marino costera  evaluación de los cambios de linea de costa para el Pacífico Nariñense e identificación de procesos erosivos en los tramos bajos y en menor proporción en las zonas acantiladas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 150,
						'description' => 'Fortalecimiento en lo referente a la normatividad que es inherente a la Gestión del Riesgo de Desastres a 7 alcaldías municipales y 2 entidades gubernamentales: municipios de Ricaurte, Túquerres, Chachagüí, Iles, Potosí, Córdoba y Ospina; el Cuerpo de bomberos zona sur – Cumbal y Policía Nacional de Colombia - sede Pasto',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 100,
						'description' => 'Diagnóstico general del incendio de cobertura vegetal ocurrido en los sectores de Casapamba y Santa Isabel - Municipio de Pasto visitas técnicas a 3 incendios de cobertura vegetal 2 en el municipio de El Tambo y 1 en el municipio de Iles. Capacitaciones para la sensibilización y fortalecimiento en prevención y recuperación de incendios de cobertura vegetal en los municipios de Chachagüí, Ospina, Iles, Túquerres Córdoba y Potosí',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 3,
						'description' => 'Muro de contención en gaviones en municipio de Buesaco Muro de contención en concreto en el municipio de Chachagui y un muro de contención en gaviones en el municipio de Colon Génova',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 150,
						'description' => 'Talleres de asesoría en lo correspondiente a la integración de la gestión del riesgo en los procesos de ordenamiento territorial; Asesoría en asuntos ambientales y la incorporación de determinantes ambientales directamente con 17 municipios: San Pedro de Cartago, Iles, Guaitarilla, Ricaurte, La Unión, Puerres, Cuaspud Carlosama, Túquerres, Potosí Ancuyá, Tablón de Gómez, Ospina Sapuyes, Córdoba Chachagüí, La Florida y Pasto (Plan Parcial Aranda Ecotescual y UPR). Asesoría en la gestión del riesgo en donde participaron además de los 17 anteriores otros mpios: Ipiales El Contadero Puerres Sapuyes Córdoba y Funes. Revisión y ajuste de los PBOT y EOT de Ipiales e Iles; talleres y reuniones en la formulación del Plan de Ordenamiento Territorial Departamental (POD) y construcción de la primera fase prevista dentro del programa de Gobernanza Territorial Con Sentido Público: con Linares, Sandoná Ancuya y Consacá',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 1,
						'description' => 'Fortalecimiento de la Mesa Departamental de Cambio Climático en cuanto a la definición de un logo que la represente la legalidad a través de una resolución expedida por CORPONARIÑO y la asamblea general realizada con el fin de vincular mas actores que de alguna u otra forma intervienen en el tema de cambio climático.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 100,
						'description' => 'Convenio especial de cooperación científica y tecnológica para la estimación del potencial de captura de carbono análisis de vulnerabilidad climática y eventos de divulgación científica en las áreas protegidas en jurisdicción de CORPONARIÑO con la Fundación para el Desarrollo y Ambiente Natural - FUDENA; .- Formulación de un proyecto dirigido a la captura de CO2 a partir de la reconversión productiva en áreas protegidas en proceso de declaratoria bajo la categoría de manejo Distrito de Manejo Integrado en el Departamento',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 100,
						'description' => 'Implementación de la estrategia de educación formación y sensibilización a públicos priorizados sobre cambio climático la cual establece seis líneas estratégicas: investigación participación conciencia pública acceso a la información y generación y apropiación del conocimiento. Capacitaciones dirigidas a los públicos establecidos en dicha estrategia como lo son: sector educativo grupos vigías de la conservación comité comunitario e institucional y comunidades étnicas en articulación con las áreas protegidas declaradas y en proceso que se coordina desde el Proyecto de Conservación de la Biodiversidad',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 100,
						'description' => '- En el municipio de Pasto: 92 muestreos efectivos para PM10 con una concentración promedio anual equivalente a 1782 µg/m3 e ICA promedio anual de 165 - calificación   Bueno  . - En el día sin carro para el 26 sept/2018 la concentración fue de 13 µg/m3 de PM10 con una reducción del 27% de emisión frente al promedio anual - En el municipio de Ipiales: La concentración más alta fue registrada en los meses de abril junio julio y octubre equivalente a 16 µg/m3 de PM10 entre tanto para el mes de enero fue registrada la menor concentración equivalente a 4 µg/m3. ICA promedio equivalente a 111 clasificación tipo “Bueno”',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 88.7,
						'description' => 'Seguimiento a 53 proyectos generadores de emisiones atmosféricas. El sector minero es el más representativo con un 51%; el porcentaje restante está representado en otras actividades industriales de alto y bajo impacto entre las cuales están la cremación de cuerpos y/o restos humanos tostión de café hornos de fundición y procesamiento de alimentos ésta última contando con hornos o calderas como principales fuentes de emisión de contaminantes atmosféricos. El 79% de estos proyectos se encuentran ubicados en la Zona Centro del Departamento el 11% en la Zona Sur el 5% en la Zona Norte y el restante entre la Zona Sur Occidente y Costa Pacífica.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 1,
						'description' => 'Acompañamiento técnico para la adopción de los planes de descontaminación por ruido para el municipio de Ipiales',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 82,
						'description' => 'Con los proyectos “implementación de acciones de protección recuperación o monitoreo del recurso hídrico en cuencas a partir de los POMCAS o de los instrumentos de planificación de la Corporación (Art. 216 Ley 1450/11 TUA)” “Implementación de acciones de conservación y restauración en el marco de la ordenación de las cuencas priorizadas” Restauración ecológica de ecosistemas estratégicos para la conservación del recurso hídrico en el territorio Guáitara - departamento de Nariño” y Restauración ecológica y conservación de áreas estratégicas en zonas de recarga hídrica en la subregión centro departamento de Nariño se logró ejecutar acciones en los POMCA de las cuencas Guáitara, Juanambú, Patía Guiza y Mayo',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 568.51,
						'description' => 'Mantenimientos 568.51 has de plantaciones vegetales establecidas en vigencias anteriores a través de diferentes proyectos',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 72,
						'description' => 'Proceso contractual para la restauración de 5 hectáreas en el municipio de La Cruz en el mes de Diciembre de 2018; los resultados esperado se proyectan obtener en la próxima vigencia.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 100,
						'description' => 'Identificación de 43 tramos adicionales a los 124 existentes en los Acuerdos 011/15 y 014/17 seguimiento a la totalidad de las fuentes identificadas para el cobro de tasa retributiva y liquidación de los usuarios localizados e las fuentes hídricas o tramos de las mismas que reciben vertimientos identificadas para el cobro de tasa retributiva generándose un total de 543 facturas de venta.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 99.5,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 93,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 100,
						'description' => 'Establecimiento de 100.5 haen actividades de restauración activa en zonas de recarga hídrica en los municipios de La Unión, Sandoná, Consacá, La Florida, Yacuanquer, Tuquerres, El Tablón, San Bernardo, Arboleda y San José de Albán',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 100,
						'description' => 'Se realizó la Zonificación y Régimen de Usos del complejo de páramos La Cocha Patascoy la cual contempla la planificación a partir de un análisis integral ecosistémico y holístico donde se identificaron áreas consideradas como unidades homogéneas en función de la similitud de sus componentes físicos biológicos socio - económicos y culturales estas características permitieron definir la vocación de uso y el manejo requerido para cada zona atendiendo a los objetivos de conservación del páramo;',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 25,
						'description' => 'A través de la implementación de acciones de manejo y conservación de las especies amenazadas priorizadas por CORPONARIÑO Oso de Anteojos (Tremarctos ornatus) y Tucán Pechigris (Andigena hypogluaca) se continua con la apropiación social del conocimiento por los diferentes actores sociales del área. De otra parte se aportó al conocimiento de estas dos especies y se contribuyó a su conservación de acuerdo a sus planes de manejo y/o conservación. Para el caso de A. hypoglauca se evaluó la preferencia de hábitat de la especie en las áreas de influencia de la Reserva Forestal Protectora Nacional (RFPN) La Cocha Patascoy y los Parques Naturales Regionales Páramo de las Ovejas Tauso y Páramo de Paja Blanca; de igual manera se continuó con el fortalecimiento de viveros comunitarios para la propagación y repoblamiento de hábitats con especies vegetales que hacen parte de su oferta dietaria. Para T. ornatus se evaluó la efectividad de la implementación de fincas piloto que sirvan de barrera entre el hábitat del úrsido y los sistemas productivos asociados y de esta manera mitigar el conflicto que se determinó en el diagnostico 2016 en el área en proceso de declaratoria Cerro Negro San Francisco.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 100,
						'description' => 'Se ha logrado mantener y conservar entre los 77 usuarios 133 hectáreas de bosque conservado las cuales en su gran mayoría cuentan con fuentes hídricas de abastecimiento veredal y municipal;',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 100,
						'description' => '15.000 ha fueron declaradas mediante Acuerdo del Consejo Directivo No. 003 del 26 de abril del 2018 bajo la denominación “PNR páramo de las Ovejas Tauso” y 6.240 ha fueron declaradas mediante Acuerdo del Consejo Directivo No.011 del 08 de octubre de 2018 bajo la denominación “PNR Volcán Azufral Chaitan”.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 4,
						'description' => '4 planes de manejo de áreas protegidas declaradas y en proceso (PNR páramo de las Ovejas Tauso PNR Volcán Azufral RFPR ríos Bobo y Buesaquillo y área en proceso de declaratoria DMI Cerro Chimayoy)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 78.5,
						'description' => '.- Se suscribe convenio de Cooperación Científica y Tecnológica para “Efectuar un estudio de estimación del potencial de captura de carbono e implementación de una estrategia de restauración en zonas de manglar en el municipio de Tumaco”. .- Se identificaron a los 28 beneficiarios de la estrategia con quienes se acordó un plan de trabajo mediante el cual se está evaluando la adopción del manejo de tallas mínimas en la cosecha de la piangua. .- Se realizó un proceso de restauración de 13 ha de manglar el cual también se desarrolla de manera participativa. .-Se reporta un avance con 20 Usuarios del manglar participando de una estrategia de sostenibilidad de los 28 previstos en la meta lo cual representa un avance del 71.43%',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 60,
						'description' => 'Gestión para la inclusión de la RFPN La Cocha Patascoy en la agenda del MADS con quien se realizó una visita técnica un mapeo de actores y la identificación de los principales estudios que se han realizado en la zona como resultado de esta experiencia se cuenta con el documento “Desarrollo de una apropiada planificación del sector turístico en la reserva forestal protectora nacional laguna de la Cocha - Cerro de Patascoy a través del diseño de una propuesta de ordenamiento y la instauración de un observatorio de turismo sostenible” dirigido al manejo sostenible del turismo en la reserva',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 75,
						'description' => 'En el marco de la administración de la Reserva Forestal Protectora Nacional Rio Bobo Buesaquillo en alianza con EMPOPASTO se realizó la restauración de 10 ha ubicadas en las veredas Campanero y Bellavista las cuales fueron priorizadas conjuntamente con la comunidad en respuesta a la necesidad de recuperar áreas intervenidas en la cuenca alta del Rio Bobo. De igual manera para el ecosistema de páramo perteneciente al complejo Chiles Cumbal conjuntamente con la comunidad del sector se realizó la priorización de un área con extensión de 11 ha donde se realizó aislamiento para la restauración pasiva, logrando alcanzar en total 21 ha de las 28 previstas para la vigencia.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 1,
						'description' => 'Se implementaron 24 shagras en el Resguardo Indígena Los Comuneros de Túquerres la propuesta de este trabajo contempló los siguientes componentes: 1. Creación de cercas vivas 2. Fortalecimiento de conocimiento tradicional sobre el uso de plantas de sanación física espiritual y alimentarias y 3. Intercambio de saberes.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 4,
						'description' => 'Administración de las 4 Reservas Forestales Protectoras Nacionales que hacen parte de su jurisdicción: 1. Laguna de la Cocha - Cerro Patascoy 2. Ríos Bobo y Buesaquillo 3. Cuenca Alta del Rio Nembí y 4. La Planada.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 100,
						'description' => '3 áreas protegidas de nivel Regional bajo la categoría de Parque Natural Regional (PNR):PNR Páramo de Paja Blanca PNR Ovejas Tauso y PNR Volcán Azufral. El Parque natural Ovejas Tauso fue declarado mediante Acuerdo 003 del Concejo Directivo de CORPONARIÑO el 26 de abril del 2018 cuenta con una extensión de 15.000 ha; en el mes de octubre se culminó la ampliación y recategorización de la Reserva Forestal Protectora Regional área circundante al Volcán Azufral la cual mediante Acuerdo 011 del 8 de octubre de 2018 se designa como un PNR denominado Volcán Azufral Chaitan pasa de tener 1.288 ha a 7.528 para un total de ampliación de 6.240 ha; juntas suman 21.240 ha',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 100,
						'description' => 'Complementación de los documentos técnicos para la declaratoria de un área protegida entre los municipios de Cumbitara y Los Andes este proceso se desarrolló de manera participativa con la comunidad e instituciones con quienes se socializó cada uno de los avances del proyecto hasta la fase de terminación; en total cubre un área de 11.69417 ha. Así mismo avance en acciones de articulación con actores sociales en el marco de la administración del área en proceso de declaratoria bajo la categoría de Distrito de Manejo Integrado denominada Enclave Subxerofitico del Patía que integra la participación de tres municipios Taminango El Peñol y El Tambo. En el marco de adelantar acciones de restauración CORPONARIÑO inició el proceso de germinación de especies priorizadas en bosque seco las cuales se destinaran a áreas degradadas en el municipio de Policarpa en este ejercicio se generó el acondicionamiento del vivero ubicado en el municipio de Los Andes.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 3,
						'description' => 'Desde la instancia de participación SIRAP Pacifico participación en la reunión en el marco del proyecto Herencia Colombia (HECO) donde las Corporaciones y PNN plantearon lo costos proyectados para los procesos que se adelantan a nivel regional en las áreas que están en proceso de declaratoria para ese entonces CORPONARIÑO priorizó el PNR Ovejas Tauso. Para SIRAP MACIZO se participó en la reunión en la cual el representante del DNP socializó el CONPES MACIZO 3915 y se realizó la participación en la elección de la presidencia del comité directivo del SIRAP MACIZO. Por otra parte se discutió la necesidad de socializar el CONPES 3915 por parte del DNP en cada una de las ciudades capitales de los departamentos que conforman el SIRAP MACIZO. A nivel local se realizó un acercamiento con el Ministerio del Ambiente y Desarrollo Sostenible se retomó el ejercicio de articulación del Plan de Acción de Biodiversidad para la implementación de la Política Nacional para la Gestión Integral de la Biodiversidad PNGIBSE 2006-2030. De esta reunión el MADS generó el compromiso de asesorar a CORPONARIÑO en el proceso del seguimiento al Plan de Acción en Biodiversidad.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 9,
						'description' => 'Se implementó 9 ha de restauración con especies nativas en la vertiente oriental de la quebrada Mijitayo; este proceso además de contribuir con la recuperación de las áreas afectadas permitirá la conectividad de los ecosistemas los cuales en su mayoría tiene áreas de bosque altoandino y arbustales; así mismo ayuda a la regulación del recurso hídrico y a la estabilidad de las vertientes este último como aporte a la conservación de los suelos.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 40,
						'description' => 'En el marco de la implementación de acciones de conservación en las zonas con función amortiguadora de los Parques Naturales Nacionales (Galeras y Doña Juana) se implementaron 10 componentes de sostenibilidad en la vereda Tajumbina municipio de La Cruz en cumplimiento de la meta rezagada de la vigencia anterior. De igual forma se implementaron 30 unidades productivas agroecológicas sostenibles. Del total de las familias beneficiadas 20 pertenecen al municipio de El Tablón de Gómez y 10 en el municipio de Pasto ubicadas estratégicamente en la zona con función amortiguadora de los Parques Nacionales antes mencionados.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 185,
						'description' => '165 visitas de identificación de nuevos generadores de residuos peligrosos: Corrosivo Reactivo Explosivos Tóxicos e Inflamables las cuales no existían en la base de datos del procedimiento de gestión integral de residuos sólidos',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 100,
						'description' => '64 visitas de control y seguimiento a los 64 municipios del departamento de Nariño para verificación de la implementación y ejecución del PGIRS',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 556,
						'description' => 'Capacitación de 556 personas en temas referentes a la Gestión adecuada de residuos urbanos y peligrosos del departamento de Nariño',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 120,
						'description' => '120 visitas de control y monitoreo al proceso de disposición final e implementación de PGIRS',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 83.78,
						'description' => 'Evaluación de 62 Planes de Contingencia sobre un total de 73 radicados en la corporación en la vigencia 2018; 11 Planes se encuentran en proceso de evaluación dentro de los tiempos establecidos en la hoja de ruta',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 130,
						'description' => 'Realización de 130 visitas de control y monitoreo a proyectos de minería de materiales de construcción ubicados en la zona andina del departamento de Nariño en los municipios de Pasto, Túquerres, Imues, Guaitarilla, Ospina, Sapuyes, Consacá, Ipiales, Potosí, Carlosama, Puerres, Samaniego y San Bernardo.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 72,
						'description' => 'Realización de 72 visitas de seguimiento, acompañamiento, interventoría y asistencia técnica, a proyectos de explotación de minería del oro en e departamento de Nariño',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 98,
						'description' => 'En el Centro de Paso de Fauna Silvestre se recibieron 372 especímenes provenientes de decomisos entregas voluntarias y hallazgo (abandono) representados en los siguientes taxones: aves (203) reptiles (117) mamíferos (52); los cuales reciben atención clínica para determinar su evaluación física comportamental nutricional y su posible viabilidad de liberación en su hábitat natural.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 138,
						'description' => 'Registro en el SIRH 273 usuarios del recurso hídrico codificación y cargue de 191 fuentes hídricas; registro en el SISAIRE 92 muestras validadas durante el monitoreo de calidad del aire reporte de 218 PB en RESPEL. Con respecto al RUA manufacturero se transmitieron 21 periodos balance 29 revisiones y correcciones informes de control y monitoreo para un total de 50 establecimientos inscritos en la vigencia y visitas de control y seguimiento a los establecimientos del RUAM. Reporte de información en el SNIF en el formato de movilización forestal se reporta 3000/5467 decomisos forestales 24/24 incendios forestales 38/38 plantaciones forestales protectoras con un avance de 19/19.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 38,
						'description' => 'Promedio de 38 días: 45 días en permiso de emisiones atmosféricas; 73 días en Permiso de aprovechamiento forestal; 37 días en Licencias ambientales; 69 días en Permiso de vertimientos y 29 días en concesiones de agua.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 1288,
						'description' => 'Realización de 1.288 visitas: 296 visitas de asistencia técnica, 225 visitas para la atención a solicitudes recibidas, 117 visitas de seguimiento de programas y proyectos, 348 visitas relacionadas con restitución de tierras y 302 visitas para atender solicitudes de material vegetal.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia316 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 8,
						'description' => 'Ocho proyectos de acuerdo a los requerimientos metodológicos vigentes para presentación a diferentes fuentes de financiación tales como: Fondo de Compensación Ambiental FCA Fondo Nacional Ambiental – FONAM Sistema General de Regalías SGR y el Ministerio de Ambiente y Desarrollo Sostenible –MADS.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 1,
						'description' => 'En la operación del sistema gestor durante la vigencia se ha realizado las siguientes actividades: -Acompañamiento técnico para registro evaluación y seguimiento de 34 proyectos presentados a la OPDE en marco del PAI 2016 -2019 y 4 subproyectos financiados por el FCA y el FONDANE. -Acompañamiento el proceso lectura trimestral de indicadores de los proyectos en ejecución acompañamiento para los trámites requeridos en el banco de proyectos: registro y evaluación de proyectos modificaciones físicas y/o financieras a los mismos y solicitud de CDP registro de contratos e informe y cuentas de cobro entre otros y realización 11 capacitaciones en la operatividad del sistema con la asistencia de 880 personas. Así como también realizaron 110 solicitudes y requerimientos de mejoras al sistema en marco del contrato de soporte No. 184 del 2018.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 100,
						'description' => 'Primer ejercicio de seguimiento a la implementación de las líneas estratégicas y del componente programático del PGAR desde el aporte que hacen los actores regionales principalmente las autoridades ambientales (CORPONARIÑO PNN) gobernación y municipios. Se cuenta con un documento donde se detalla el marco conceptual y metodológico se realiza el análisis de los resultados consolidados por líneas estratégicas y a nivel de todo el Plan y se determinan las principales limitantes que se han tenido en todo el proceso.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 1,
						'description' => 'El SGI implementado en marco de la certificación en las normas de ISO9001 NTCGP1000:2009 y la acreditación en cumplimiento de la NTC-ISO/IEC 17025; contribuyó directamente al cumplimiento de los objetivos de calidad la política de calidad y el direccionamiento estratégico fortalecimiento continuo con el fin de mejorar la eficacia eficiencia y efectividad de los 11 procesos mediante la revisión documental el trámite oportuno de las solicitudes de modificación.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>3,
						'value' => 1,
						'description' => 'Divulgación de la información sobre el quehacer misional a través de estrategias y canales de comunicación orientados a los grupos de interés a nivel interno y externo: carteleras tablones boletín interno intranet redes sociales página Web radio televisión prensa escrita agendas mensuales medios de comunicación locales regionales y nacionales Etc.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>3,
						'value' => 50,
						'description' => 'Elaboración de la matriz de responsabilidades de actualización en el marco de las directrices de DAFP realización de mesas de trabajo con los líderes de proceso y equipos de trabajo para la aplicación del autodiagnóstico en la vigencia se realizaron 14 cuestionarios de las 7 dimensiones con las respectivas actas de reunión y planes de mejora.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 106,
						'description' => 'Recuperación de cartera por concepto de TR se recaudó el valor de $726.101.68266 por concepto de TUA $115.862.25163 y por Multas Ambientales l $169.479.34979. Además se tiene en cuenta los acuerdos de pago de las facturas de la vigencia 2017 de las cuales se logró el recaudo por facturas TR $315.444.330 y por concepto de TUA la suma de $15.254. Para un total de recaudo por concepto de TR de $1.041.546.01266 por concepto de TUA la suma de $115.877.50524 y por Multas Ambientales la suma de $169.479.34979. Para un total recaudado de $1.326.902.8680',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>3,
						'value' => 100,
						'description' => '82 procesos judiciales ordinarios de los cuales 58 están activos. Igualmente en el consolidado de procesos judiciales CORPONARIÑO se encuentra como parte demandada en 76 de ellos y como demandante en 6 procesos',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 36.61,
						'description' => 'Se agilizo las etapas procesales en los diferentes procesos sancionatorios a la Subdirección de Conocimiento y Evaluación Ambiental y a los Centros Ambientales en donde reposaban dichos expedientes mediante Autos de Pruebas y recabos en los eventos en que haya sido menester mediante el control y seguimiento llevado por el contratista: Sanciones: 82 Archivados: 73 Cesación de procedimiento 14 Se resuelve proceso sancionatorio ambiental: 24. Total: 193',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 94.32,
						'description' => 'Recepción de 2893 expedientes discriminados de la siguiente manera: a). 1700 expedientes correspondientes a Licencias permisos y concesiones entre otros de los cuales se notificaron 1400. b). 1193 expedientes de Procesos Sancionatorios de los que se debía surtir la notificación de 827 expedientes y de los que efectivamente se notificaron 780. Con la aclaración que no todos los expedientes recibidos en la oficina de notificaciones contienes Actos Administrativos que se deben notificar.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 1,
						'description' => 'Suscripción del convenio N° 594 entre Corponariño y el Instituto Geográfico Agustín Codazzi para actualización catastral de acuerdo al proceso de Conservación dinámica de zona urbana del municipio de Pupiales en el marco del cual se realizaron: Actualización de fichas en lo relacionado con complementación de información y cambio de propietario Actualización de croquis incorporando la construcción y fichas matriz por des englobe.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>3,
						'value' => 1,
						'description' => 'El sistema de indicadores tanto de gestión como ambientales operó durante la vigencia 2018 este sistema cuenta con 27 indicadores mínimos implementados de acuerdo a la resolución No. 667 de 2016 dentro de los cuales 4 indicadores no se reportan porque no tienen meta para el año 2018 y se puede verificar el reporte de estos en el siguiente enlace: http://geo.corponarino.gov.co/pmapper2017/ind.php.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>3,
						'value' => 30.83,
						'description' => 'Avance de implementación de la estrategia de Gobierno Digital la cual comprende la actualización y manejo de distintos componentes: publicación en el portal web (Noticias convocatorias resoluciones notificaciones audiencia pública informe de Gestión  autos de iniciación de trámites actualización de banner por noticias publicada Etc); accesibilidad del portal web y usabilidad se cumplió con directrices establecidas en la guía interactiva de la norma técnica; el componente Tic para servicios se mantiene actualizado y se realiza revisiones nuevas de las herramientas que se implementó en SILA Y VITAL para tramite salvoconductos de transporte de madera el Componente Tic para le gestión actualización de usuarios para chat interno; el componente seguridad de la información que se maneja en la entidad en todas las dependencias se encuentra actualizado lo cual nos permite realizar las copias con un periodo de tiempo correspondiente a cada mes.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia335 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>3,
						'value' => 113,
						'description' => 'Cinco Auditorias a Centros Ambientales: Sur occidente Minero Los Andes-Sotomayor Ipiales Tumaco y La Unión ejecutándose en el periodo comprendido entre el 31 de julio al 31 de agosto de 2018. .-Auditoria de seguimiento por parte de ICONTEC en la sede Central y en los Centros Ambientales Sur y Costa Pacífica (Resultado: 2 no conformidades menores). - Auditoria de renovación y extensión de la acreditación del Laboratorio de Calidad  realizada por el IDEAM (resultado: 12 no conformidades dos oportunidades de mejora y tres fortalezas)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia338 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>3,
						'value' => 100,
						'description' => 'En el 2018 se analizaron 74 muestras en matriz aire bajo el parámetro determinación de material particulado y 199 muestras en matriz agua bajo los parámetros fisicoquímicos y microbiológicos implementados',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>3,
						'value' => 100,
						'description' => 'Cuatro sedes de CORPONARIÑO con mantenimiento preventivo y correctivo: El Encano, Sotomayor Chimayoy y El Charco.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>3,
						'value' => 100,
						'description' => 'Apoyó la ejecución de responsabilidades del COPASST y del Comité de Convivencia Laboral se aprobó la política y objetivos de SST evaluación inicial del SGSST actualización de la matriz de peligros y riesgos inducción y reinducción en el SG-SST contando con la participación de 173 trabajadores Capacitaciones de inducción SG-SST en los centros ambientales de Tumaco Sotomayor Ipiales Túquerres La Unión Chimayoy y Pasto.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia343 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>3,
						'value' => 105,
						'description' => '-39 jornadas de capacitación en el componente agropecuario. -121 visitas a predios en los que se diligenció la ficha de las Buenas Prácticas Agrícolas para verificación de su implementación. -actividades con el Ministerio de Agricultura a través del programa Alianzas Productivas. CORPONARIÑO participó como aliado en el suministro de 5000 plántulas a cada una de las alianzas para un total de 35.000 árboles. -Reforestación de 17.41 Ha de las cuales 4.91 ha se realizó la siembra en bloque y 12.5 ha se realizó la siembra en cercas vivas.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia345 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>3,
						'value' => 24.67,
						'description' => 'Implementación del Programa Regional de Negocios Verdes realizando las siguientes acciones: en cuanto a la formulación del plan de acción se realizó 11 capacitaciones en criterios de negocios verdes a 11 nuevas Iniciativas de Negocios Verdes Para el levantamiento de la línea base se tienen 22 iniciativas nuevas de las cuales se priorizaron 14 para aplicación de los criterios de verificación y ocho inscritas y visitadas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>3,
						'value' => 10,
						'description' => 'Zonificación y delimitación del área a intervenir la metodología de campo a desarrollar y análisis preliminar de la información secundaria para el “Estudio técnico orientado a determinar el estado de degradación de suelos por erosión en la cuenca media del río Pasto”',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>3,
						'value' => 103,
						'description' => 'Fortaleció a través de la adquisición equipos de laboratorio: Balanza de precisión pesas equipos para la concentración de gases de mina bomba de succión y vacío y mantenimiento de la infraestructura del laboratorio el cual operó en la vigencia para análisis de muestras de agua y sedimento de 25 fuentes hídricas análisis de concentración de mercurio y cianuro análisis metalúrgicos.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>3,
						'value' => 14,
						'description' => 'Asistencia técnicamente 14 unidades mineras en los municipios de Los Andes, Cumbitara, Santacruz y Mallama a través de las vistas de asistencia técnica hallazgos y requerimientos para el mejoramiento recomendación en planta con el fin de orientar sobre las mejores alternativas de trabajo seguimientos a los requerimientos relacionadas al mejoramiento de la producción y el desarrollo de sistemas de beneficio y manejo ambiental de las unidades.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>3,
						'value' => 100,
						'description' => 'Fortalecimiento de 15 CIDEAM a través de capacitación y formación 12 PRAES en instituciones educativas considerando los procesos pedagógicos 15 PROCEDA con grupos organizados asociativos y ONG y 3 PRAU con instituciones universitarias que afianzan acciones de formación y planeación en educación ambiental.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia355 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>3,
						'value' => 100,
						'description' => 'Ejecución de 3 campañas de educación ambiental: Ponte en paz con la naturaleza Actuando por el Cambio y Nariño Puro Ambiente',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>3,
						'value' => 100,
						'description' => 'Conmemoración de 8 fechas ambientales: día de la educación ambiental día mundial del agua día de celebración de la tierra día mundial de la biodiversidad día mundial del medio ambiente día de la capa de ozono día biodiversidad día mundial del reciclador',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>3,
						'value' => 100,
						'description' => 'Realización de 3 jornadas de participación y fortalecimiento educativo ambiental de organizaciones étnicas y ambientalistas: en Ipiales con integrantes de comunidades indígenas en Tumaco se llevó a cabo con delegados de RECOMPAS (comunidades negras) y una jornada con integrantes de la Fundación ambientalista/animalista FUNRED.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>3,
						'value' => 100,
						'description' => 'Fortalecimiento y divulgación del Centro Ambiental Chimayoy y la debida atención de población frente a temáticas prácticas de educación ambiental acompañamiento continuo a las delegaciones de las instituciones educativas que visitan y hacen el recorrido ecológico del Centro.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia359 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 3,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 35.5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 10,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 51.75,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia368 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 118.75,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia369 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 105.76,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia376 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 84.91,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 140.5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia385 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 4402,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia388 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia389 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 80,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 90.87,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia396 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 101.98,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia398 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia399 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 46,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia401 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 92.42,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia402 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 25,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia404 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 91.6,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia410 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 60,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia414 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 3,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 50,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia417 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 3,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 30,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia420 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia421 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 224.95,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 267,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 120,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 99,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia429 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 83,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 89,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 112.3,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia432 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 32,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>4,
						'value' => 1251,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia435 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia436 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 4,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia438 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia439 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia440 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia441 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia442 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia443 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 50,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia444 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia445 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>4,
						'value' => 89.27,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia446 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>4,
						'value' => 142,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia448 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 51,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 94,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia451 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia453 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 20,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia455 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia456 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>4,
						'value' => 352.27,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia457 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia459 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia460 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia461 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia462 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia463 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia464 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>4,
						'value' => 172.5,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia465 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia467 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>4,
						'value' => 105,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia470 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia471 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia472 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>4,
						'value' => 12,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia473 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia474 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia475 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>4,
						'value' => 3,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia476 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia477 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia478 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>4,
						'value' => 100,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia479 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia480 = DB::getPdo()->lastInsertId(); 

					DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.3',
						'name' => 'Jardín botánico Chimayoy',
						'description' => 'Jardín botánico Chimayoy',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.4',
						'name' => 'MATERIAL VEGETAL E HIDROBIOLOGICO',
						'description' => 'MATERIAL VEGETAL E HIDROBIOLOGICO',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.4',
						'name' => 'Convenios (SGR, Coop internal, DPS, otros)',
						'description' => 'Convenios (SGR, Coop internal, DPS, otros)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 14,
						'code' => '1.1.1.1.1.1.2.1',
						'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 87,
						'code' => '1.1.2.3.1.2.1',
						'name' => 'Intereses de mora (vigencia actual)',
						'description' => 'Intereses de mora (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.5',
						'name' => 'Otros Ingresos',
						'description' => 'Otros Ingresos',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente19 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 152,
						'code' => '1.2.2.2.1.3.1',
						'name' => 'Rendimientos financieros Tasa retributiva',
						'description' => 'Rendimientos financieros Tasa retributiva',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente21 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 152,
						'code' => '1.2.2.2.1.3.2',
						'name' => 'Rendimientos financierosTasa por el uso del agua',
						'description' => 'Rendimientos financierosTasa por el uso del agua',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente23 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente26 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente27 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 279,
						'code' => '1.2.7.3.3.5',
						'name' => 'Cancelación de reservas Otras tasas',
						'description' => 'Cancelación de reservas Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente28 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente29 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.3',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente32 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.6',
						'name' => 'Otros deudores',
						'description' => 'Otros deudores',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente33 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente35 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.1',
						'name' => 'Aportes de la Nación para Gastos de personal',
						'description' => 'Aportes de la Nación para Gastos de personal',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente36 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.2',
						'name' => 'Aportes de la Nación para Adquisición de bienes y servicios',
						'description' => 'Aportes de la Nación para Adquisición de bienes y servicios',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente38 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.3',
						'name' => 'Aportes de la Nación para Transferencias corrientes',
						'description' => 'Aportes de la Nación para Transferencias corrientes',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente39 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente40 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.3',
						'name' => 'Aportes del SPGR para Inversión',
						'description' => 'Aportes del SPGR para Inversión',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente41 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.4',
						'name' => 'Asignaciones Directas',
						'description' => 'Asignaciones Directas',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente42 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.5',
						'name' => 'Recursos Provenientes de Fondos',
						'description' => 'Recursos Provenientes de Fondos',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente43 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.6',
						'name' => 'Recursos para el funcionamiento del sistema',
						'description' => 'Recursos para el funcionamiento del sistema',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente44 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 131,
						'code' => '1.1.2.5.1.4.7',
						'name' => 'Recursos de Capital',
						'description' => 'Recursos de Capital',
						'type_id' => 24,
						'final_level' => true,
						'group_id' => 24,
						]);
						$idFuente45 = DB::getPdo()->lastInsertId();

					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 1773043594,
						'functioning_percentage' => 5,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 85,
						'functioning' => 88652179.7,
						'debt_service' => 0,
						'fund' => 177304359.4,
						'investment' => 1507087054.9,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 338915031,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 338915031,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 51227659,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 51227659,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 2440698,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2440698,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 223766090,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 22376609,
						'debt_service' => 0,
						'fund' => 44753218,
						'investment' => 156636263,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 2202551976,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 220255197.6,
						'investment' => 1982296778.4,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 6758693958,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 675869395.8,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6082824562.2,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 1922124537,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1922124537,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 249047055,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 224142349.5,
						'debt_service' => 0,
						'fund' => 24904705.5,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 1322038298,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1189834468.2,
						'debt_service' => 0,
						'fund' => 132203829.8,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 305337219,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 274803497.1,
						'debt_service' => 0,
						'fund' => 30533721.9,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente26,
						'value' => 494410351,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 494410351,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente27,
						'value' => 14036670773.64,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 14036670773.64,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
						'value' => 400000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 400000000,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente23,
						'value' => 30000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 30000000,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente32,
						'value' => 123052558,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 123052558,
						'year' => 1,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente33,
						'value' => 62681869,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 6268186.9,
						'investment' => 56413682.1,
						'year' => 1,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 80000000,
						'functioning_percentage' => 5.9013,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0.247,
						'investment_percentage' => 93.8517,
						'functioning' => 4721040,
						'debt_service' => 0,
						'fund' => 197600,
						'investment' => 75081360,
						'year' => 1,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente36,
						'value' => 2055094391,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2055094391,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente38,
						'value' => 379270821,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 379270821,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente39,
						'value' => 70619130,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 70619130,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente40,
						'value' => 1813317494,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1813317494,
						'year' => 1,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente42,
						'value' => 243621204,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 243621204,
						'year' => 1,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente43,
						'value' => 4584000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4584000000,
						'year' => 1,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente44,
						'value' => 257444444,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 257444444,
						'year' => 1,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente45,
						'value' => 455042196,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 455042196,
						'year' => 1,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 7591700000,
						'functioning_percentage' => 50,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 50,
						'functioning' => 3795850000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3795850000,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 1000000000,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 10,
						'functioning' => 800000000,
						'debt_service' => 0,
						'fund' => 100000000,
						'investment' => 100000000,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 650000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 65000000,
						'investment' => 585000000,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 53789042,
						'functioning_percentage' => 80,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 5,
						'functioning' => 43031233.6,
						'debt_service' => 0,
						'fund' => 8068356.3,
						'investment' => 2689452.1,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 300300000,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 70,
						'functioning' => 60060000,
						'debt_service' => 0,
						'fund' => 30030000,
						'investment' => 210210000,
						'year' => 2,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 1410305087,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 141030508.7,
						'investment' => 1269274578.3,
						'year' => 2,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 2358792374,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 235879237.4,
						'investment' => 2122913136.6,
						'year' => 2,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 261450000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 235305000,
						'debt_service' => 0,
						'fund' => 26145000,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 1322038298,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1322038298,
						'year' => 2,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 200000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 20000000,
						'investment' => 180000000,
						'year' => 2,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente26,
						'value' => 581650000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 581650000,
						'year' => 2,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente27,
						'value' => 9976993524.27,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9976993524.27,
						'year' => 2,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente28,
						'value' => 47081533,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 47081533,
						'year' => 2,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente29,
						'value' => 421095320,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 421095320,
						'year' => 2,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente33,
						'value' => 159605284,
						'functioning_percentage' => 0.047,
						'debt_service_percentage' => 0,
						'fund_percentage' => 4.585,
						'investment_percentage' => 95.368,
						'functioning' => 75014.48348,
						'debt_service' => 0,
						'fund' => 7317902.2714,
						'investment' => 152212367.24512,
						'year' => 2,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente35,
						'value' => 2680512272,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2680512272,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente41,
						'value' => 1793779285.8,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1793779285.8,
						'year' => 2,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 9342060139,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9342060139,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
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
						$idPlan45 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 703221075,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 632898967.5,
						'debt_service' => 0,
						'fund' => 70322107.5,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 51010506,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 45909455.4,
						'debt_service' => 0,
						'fund' => 5101050.6,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 321321000,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 32132100,
						'debt_service' => 0,
						'fund' => 64264200,
						'investment' => 224924700,
						'year' => 3,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 1916780000,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1725102000,
						'debt_service' => 0,
						'fund' => 191678000,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 2116791493,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1905112343.7,
						'debt_service' => 0,
						'fund' => 211679149.3,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente21,
						'value' => 66428604,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 59785743.6,
						'debt_service' => 0,
						'fund' => 6642860.4,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 318709761,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 286838784.9,
						'debt_service' => 0,
						'fund' => 31870976.1,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente23,
						'value' => 37254530,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 3725453,
						'investment' => 33529077,
						'year' => 3,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 1223000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1223000000,
						'year' => 3,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 150000000,
						'functioning_percentage' => 5.1586,
						'debt_service_percentage' => 0,
						'fund_percentage' => 12.1627,
						'investment_percentage' => 82.6787,
						'functioning' => 7737900,
						'debt_service' => 0,
						'fund' => 18244050,
						'investment' => 124018050,
						'year' => 3,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente26,
						'value' => 524519942,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 524519942,
						'year' => 3,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente27,
						'value' => 4989472051.31,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4989472051.31,
						'year' => 3,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente29,
						'value' => 832432444,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 832432444,
						'year' => 3,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente35,
						'value' => 2827897166,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2827897166,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente40,
						'value' => 1991326957,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1991326957,
						'year' => 3,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente41,
						'value' => 1715411792.3,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1715411792.3,
						'year' => 3,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 1775785459,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 177578545.9,
						'investment' => 1598206913.1,
						'year' => 4,
						]);
						$idPlan62 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 656253044,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 590627739.6,
						'debt_service' => 0,
						'fund' => 65625304.4,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 102840202.000004,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 10284020.2000004,
						'debt_service' => 0,
						'fund' => 20568040.4000008,
						'investment' => 71988141.4000027,
						'year' => 4,
						]);
						$idPlan64 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 3406424001,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 3065781600.9,
						'debt_service' => 0,
						'fund' => 340642400.1,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan65 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 471184702,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 424066231.8,
						'debt_service' => 0,
						'fund' => 47118470.2,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan66 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 2000000000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2000000000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan67 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 500000000,
						'functioning_percentage' => 25.9847,
						'debt_service_percentage' => 0,
						'fund_percentage' => 19.9706,
						'investment_percentage' => 54.0447,
						'functioning' => 129923500,
						'debt_service' => 0,
						'fund' => 99853000,
						'investment' => 270223500,
						'year' => 4,
						]);
						$idPlan68 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 61212607,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 55091346.3,
						'debt_service' => 0,
						'fund' => 6121260.7,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan69 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 9809163146,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9809163146,
						'year' => 4,
						]);
						$idPlan70 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 369127903,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 369127903,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan71 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente19,
						'value' => 280000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 280000000,
						'year' => 4,
						]);
						$idPlan72 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente26,
						'value' => 385000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 385000000,
						'year' => 4,
						]);
						$idPlan73 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente27,
						'value' => 7098718285.1,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 7098718285.1,
						'year' => 4,
						]);
						$idPlan74 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente35,
						'value' => 2896291087,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2896291087,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan75 = DB::getPdo()->lastInsertId();
						
					DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente40,
						'value' => 2517876198,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2517876198,
						'year' => 4,
						]);
						$idPlan76 = DB::getPdo()->lastInsertId();

                      DB::table('implementations')->insert([
                        'p_a_i_s_id'=>$idpai1,
                        ]);
                        $idImplementation1 = DB::getPdo()->lastInsertId();

					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 72219434,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 71012711,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2000000,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1493380,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 238659776,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1110242895,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 7478130982.5,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2497573347,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 391046361.23,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1171038829,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 225064148.89,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 659402574.74,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 12243561185.39,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 481975926.01,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 49015431,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 193416,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 5770247.17,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 63229397.97,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2048094391,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 378470740,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 56935864,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 548266029,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 243621204,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3981861206,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 257444444,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 455042196,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 8957619467.15,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1405249625.71,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 512628572.92,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 46991708,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 316446875,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1238396364,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2370120641,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 328372371.15,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1228562705,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 591694614.06,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 710155894.44,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 9918429191.27,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 55771906.8,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 446299011.08,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 191255284,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2203868382,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1743955721.8,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 8932100157.26,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1179237910,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 634457193,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 51631124,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 301539111,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 839460557,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2125321946,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 7361935,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 322259213.16,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 6570083,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1194614142,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 113818095.86,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 431540195.45,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4726227512.31,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1060549444.89,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2472191603.25,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 971799212,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1715411792.3,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1775785459,
						'financial_plans_id' => $idPlan62,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo62 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 603250553,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 225352936,
						'financial_plans_id' => $idPlan64,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo64 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3251062372.48,
						'financial_plans_id' => $idPlan65,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo65 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 461257760,
						'financial_plans_id' => $idPlan66,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo66 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 992492575,
						'financial_plans_id' => $idPlan67,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo67 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 181060623.72,
						'financial_plans_id' => $idPlan68,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo68 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 73250000,
						'financial_plans_id' => $idPlan69,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo69 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 9580369310,
						'financial_plans_id' => $idPlan70,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo70 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 369127903,
						'financial_plans_id' => $idPlan71,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo71 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 162421932.46,
						'financial_plans_id' => $idPlan72,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo72 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 433722087.83,
						'financial_plans_id' => $idPlan73,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo73 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 6798881721.83,
						'financial_plans_id' => $idPlan74,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo74 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2480229228,
						'financial_plans_id' => $idPlan75,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo75 = DB::getPdo()->lastInsertId();
						
					DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 750019194,
						'financial_plans_id' => $idPlan76,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo76 = DB::getPdo()->lastInsertId();

					DB::table('cost_sources')->insert([
						'father_id' => 2,
						'code' => '2.1.1',
						'name' => 'GASTOS DE PERSONAL',
						'description' => 'GASTOS DE PERSONAL',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 24,
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
						'group_id' => 24,
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
						'group_id' => 24,
						]);
						$idFuenteGasto3 = DB::getPdo()->lastInsertId();
						
						
					DB::table('cost_sources')->insert([
						'father_id' => 10,
						'code' => '2.1.3.1.1.1.2',
						'name' => 'Fondo de Compensación Ambiental - Recursos propios diferentes a TSE (10%)',
						'description' => 'Fondo de Compensación Ambiental - Recursos propios diferentes a TSE (10%)',
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'group_id' => 24,
						]);
						$idFuenteGasto5 = DB::getPdo()->lastInsertId();
						
						
					DB::table('cost_sources')->insert([
						'father_id' => 16,
						'code' => '2.1.3.2.1.1',
						'name' => 'Mesadas pensionales (de pensiones)',
						'description' => 'Mesadas pensionales (de pensiones)',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 24,
						]);
						$idFuenteGasto9 = DB::getPdo()->lastInsertId();
						
						
					DB::table('cost_sources')->insert([
						'father_id' => 16,
						'code' => '2.1.3.2.1.2',
						'name' => 'Bonos pensionales (de pensiones)',
						'description' => 'Bonos pensionales (de pensiones)',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 24,
						]);
						$idFuenteGasto10 = DB::getPdo()->lastInsertId();
						
						
					DB::table('cost_sources')->insert([
						'father_id' => 19,
						'code' => '2.1.3.3.1',
						'name' => 'Comisiones y otros gastos',
						'description' => 'Comisiones y otros gastos',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 24,
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
						'group_id' => 24,
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
						'group_id' => 24,
						]);
						$idFuenteGasto6 = DB::getPdo()->lastInsertId();
						
						
					DB::table('cost_sources')->insert([
						'father_id' => 2,
						'code' => '2.1.5',
						'name' => 'Red Nacional de Jardines Botánicos de Colombia',
						'description' => 'Red Nacional de Jardines Botánicos de Colombia',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 24,
						]);
						$idFuenteGasto8 = DB::getPdo()->lastInsertId();
						
						
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 1840042340.94,
								'value_comitted' => 1755876073,
								'value_required' => 1625870751,
								'value_paid' => 1625870751,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 24,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();

								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 19534425,
								'value_comitted' => 19534425,
								'value_required' => 19534425,
								'value_paid' => 19534425,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 24,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								

								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 636420888,
								'value_comitted' => 565536364,
								'value_required' => 523024881,
								'value_paid' => 565536364,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto6,
								'p_a_i_id' => $idpai1,
								'group_id' => 24,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();
								

								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 826774,
								'value_comitted' => 3307,
								'value_required' => 3307,
								'value_paid' => 3307,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto8,
								'p_a_i_id' => $idpai1,
								'group_id' => 24,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();
								
	
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 2055094391,
									'value_comitted' => 2048094391,
									'value_required' => 2048094391,
									'value_paid' => 2048094391,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 24,
									]);
									$idGasto5 = DB::getPdo()->lastInsertId();
									

									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 6161000,
									'value_comitted' => 6161000,
									'value_required' => 6161000,
									'value_paid' => 6161000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto4,
									'p_a_i_id' => $idpai1,
									'group_id' => 24,
									]);
									$idGasto6 = DB::getPdo()->lastInsertId();

									
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 2485314571,
										'value_comitted' => 2032801530,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 24,
										]);
										$idGasto7 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 284026213,
										'value_comitted' => 242871368.32,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 24,
										]);
										$idGasto8 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 1834625016,
										'value_comitted' => 1727445688.6,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto3,
										'p_a_i_id' => $idpai1,
										'group_id' => 24,
										]);
										$idGasto9 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 28083374,
										'value_comitted' => 28083374,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 24,
										]);
										$idGasto10 = DB::getPdo()->lastInsertId();

										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 633471203,
										'value_comitted' => 590449132.81,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto6,
										'p_a_i_id' => $idpai1,
										'group_id' => 24,
										]);
										$idGasto11 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 16916626,
										'value_comitted' => 16853080,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto7,
										'p_a_i_id' => $idpai1,
										'group_id' => 24,
										]);
										$idGasto12 = DB::getPdo()->lastInsertId();

										
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 2194677115,
											'value_comitted' => 2194544742,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 24,
											]);
											$idGasto13 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 306617818,
											'value_comitted' => 296913682,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto2,
											'p_a_i_id' => $idpai1,
											'group_id' => 24,
											]);
											$idGasto14 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 55000000,
											'value_comitted' => 43846644,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto3,
											'p_a_i_id' => $idpai1,
											'group_id' => 24,
											]);
											$idGasto15 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 6161000,
											'value_comitted' => 6161000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto4,
											'p_a_i_id' => $idpai1,
											'group_id' => 24,
											]);
											$idGasto16 = DB::getPdo()->lastInsertId();

											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 87200000,
											'value_comitted' => 53719806,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto9,
											'p_a_i_id' => $idpai1,
											'group_id' => 24,
											]);
											$idGasto17 = DB::getPdo()->lastInsertId();

											
											
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2430201504,
												'value_comitted' => 2169920311.99,
												'value_required' => 934771223,
												'value_paid' => 934771223,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 24,
												]);
												$idGasto18 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2917315616,
												'value_comitted' => 1434933368.99,
												'value_required' => 611424727.88,
												'value_paid' => 611424727.88,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto2,
												'p_a_i_id' => $idpai1,
												'group_id' => 24,
												]);
												$idGasto19 = DB::getPdo()->lastInsertId();
												

												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 27500000,
												'value_comitted' => 0,
												'value_required' => 0,
												'value_paid' => 0,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto4,
												'p_a_i_id' => $idpai1,
												'group_id' => 24,
												]);
												$idGasto20 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 703527863,
												'value_comitted' => 583382579,
												'value_required' => 108636291,
												'value_paid' => 108636291,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => FALSE,
												'compensation' => TRUE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto5,
												'p_a_i_id' => $idpai1,
												'group_id' => 24,
												]);
												$idGasto21 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 0,
												'value_comitted' => 0,
												'value_required' => 21163990,
												'value_paid' => 21163990,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto6,
												'p_a_i_id' => $idpai1,
												'group_id' => 24,
												]);
												$idGasto22 = DB::getPdo()->lastInsertId();

												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 500000,
												'value_comitted' => 2000,
												'value_required' => 0,
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
												'group_id' => 24,
												]);
												$idGasto23 = DB::getPdo()->lastInsertId();


												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 2306094816,
													'value_comitted' => 2306094816,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 24,
													]);
													$idGasto24 = DB::getPdo()->lastInsertId();


													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 22500000,
													'value_comitted' => 0,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto4,
													'p_a_i_id' => $idpai1,
													'group_id' => 24,
													]);
													$idGasto25 = DB::getPdo()->lastInsertId();


													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 90776000,
													'value_comitted' => 55916952,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto9,
													'p_a_i_id' => $idpai1,
													'group_id' => 24,
													]);
													$idGasto26 = DB::getPdo()->lastInsertId();
													
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 90776000,
													'value_comitted' => 30334123,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto10,
													'p_a_i_id' => $idpai1,
													'group_id' => 24,
													]);
													$idGasto27 = DB::getPdo()->lastInsertId();
													
													
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 1768440838,
														'value_comitted' => 1173856911,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto1,
														'p_a_i_id' => $idpai1,
														'group_id' => 24,
														]);
														$idGasto28 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 15896000,
														'value_comitted' => 8842000,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto2,
														'p_a_i_id' => $idpai1,
														'group_id' => 24,
														]);
														$idGasto29 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 4224833646.3,
														'value_comitted' => 3928451943.08,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto3,
														'p_a_i_id' => $idpai1,
														'group_id' => 24,
														]);
														$idGasto30 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 79842914,
														'value_comitted' => 64274712,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto4,
														'p_a_i_id' => $idpai1,
														'group_id' => 24,
														]);
														$idGasto31 = DB::getPdo()->lastInsertId();

														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 873204880.5,
														'value_comitted' => 634363692,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto7,
														'p_a_i_id' => $idpai1,
														'group_id' => 24,
														]);
														$idGasto32 = DB::getPdo()->lastInsertId();

														
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 2403887254,
															'value_comitted' => 2403887254,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto1,
															'p_a_i_id' => $idpai1,
															'group_id' => 24,
															]);
															$idGasto33 = DB::getPdo()->lastInsertId();

															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 382132225,
															'value_comitted' => 330925404.92,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto3,
															'p_a_i_id' => $idpai1,
															'group_id' => 24,
															]);
															$idGasto34 = DB::getPdo()->lastInsertId();
															
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 6500000,
															'value_comitted' => 6500000,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto4,
															'p_a_i_id' => $idpai1,
															'group_id' => 24,
															]);
															$idGasto35 = DB::getPdo()->lastInsertId();

															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 103771608,
															'value_comitted' => 67541974,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto7,
															'p_a_i_id' => $idpai1,
															'group_id' => 24,
															]);
															$idGasto36 = DB::getPdo()->lastInsertId();

															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity2,
																'source_id' =>$idPlan13,
																'value' => 1561309818,
																'goal' => 0,
																'evidence_balance' => 1561309818,
																'age' => 1,
																]);
																$idactivitySource1 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity4,
																'source_id' =>$idPlan13,
																'value' => 630902475.05,
																'goal' => 0,
																'evidence_balance' => 630902475.05,
																'age' => 1,
																]);
																$idactivitySource2 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity12,
																'source_id' =>$idPlan13,
																'value' => 191738427,
																'goal' => 0,
																'evidence_balance' => 191738427,
																'age' => 1,
																]);
																$idactivitySource3 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity14,
																'source_id' =>$idPlan13,
																'value' => 200000000,
																'goal' => 0,
																'evidence_balance' => 200000000,
																'age' => 1,
																]);
																$idactivitySource4 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity19,
																'source_id' =>$idPlan13,
																'value' => 200200000,
																'goal' => 0,
																'evidence_balance' => 200200000,
																'age' => 1,
																]);
																$idactivitySource5 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity23,
																'source_id' =>$idPlan13,
																'value' => 179676762,
																'goal' => 0,
																'evidence_balance' => 179676762,
																'age' => 1,
																]);
																$idactivitySource6 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity29,
																'source_id' =>$idPlan13,
																'value' => 10453214651.48,
																'goal' => 0,
																'evidence_balance' => 10453214651.48,
																'age' => 1,
																]);
																$idactivitySource7 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity33,
																'source_id' =>$idPlan13,
																'value' => 619628640.110001,
																'goal' => 0,
																'evidence_balance' => 619628640.110001,
																'age' => 1,
																]);
																$idactivitySource8 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity37,
																'source_id' =>$idPlan24,
																'value' => 498850377.27,
																'goal' => 0,
																'evidence_balance' => 498850377.27,
																'age' => 1,
																]);
																$idactivitySource9 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity39,
																'source_id' =>$idPlan24,
																'value' => 441705240.9,
																'goal' => 0,
																'evidence_balance' => 441705240.9,
																'age' => 1,
																]);
																$idactivitySource10 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity41,
																'source_id' =>$idPlan24,
																'value' => 223237643,
																'goal' => 0,
																'evidence_balance' => 223237643,
																'age' => 1,
																]);
																$idactivitySource11 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity48,
																'source_id' =>$idPlan24,
																'value' => 1125620000,
																'goal' => 0,
																'evidence_balance' => 1125620000,
																'age' => 1,
																]);
																$idactivitySource12 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity52,
																'source_id' =>$idPlan24,
																'value' => 1730407976,
																'goal' => 0,
																'evidence_balance' => 1730407976,
																'age' => 1,
																]);
																$idactivitySource13 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity61,
																'source_id' =>$idPlan24,
																'value' => 186302925.940001,
																'goal' => 0,
																'evidence_balance' => 186302925.940001,
																'age' => 1,
																]);
																$idactivitySource14 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity66,
																'source_id' =>$idPlan7,
																'value' => 129938738,
																'goal' => 0,
																'evidence_balance' => 129938738,
																'age' => 1,
																]);
																$idactivitySource15 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity68,
																'source_id' =>$idPlan7,
																'value' => 140000000,
																'goal' => 0,
																'evidence_balance' => 140000000,
																'age' => 1,
																]);
																$idactivitySource16 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity74,
																'source_id' =>$idPlan7,
																'value' => 3213122539,
																'goal' => 0,
																'evidence_balance' => 3213122539,
																'age' => 1,
																]);
																$idactivitySource17 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity76,
																'source_id' =>$idPlan7,
																'value' => 339037048,
																'goal' => 0,
																'evidence_balance' => 339037048,
																'age' => 1,
																]);
																$idactivitySource18 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity81,
																'source_id' =>$idPlan7,
																'value' => 240000000,
																'goal' => 0,
																'evidence_balance' => 240000000,
																'age' => 1,
																]);
																$idactivitySource19 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity85,
																'source_id' =>$idPlan7,
																'value' => 339432040,
																'goal' => 0,
																'evidence_balance' => 339432040,
																'age' => 1,
																]);
																$idactivitySource20 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity87,
																'source_id' =>$idPlan7,
																'value' => 76881726,
																'goal' => 0,
																'evidence_balance' => 76881726,
																'age' => 1,
																]);
																$idactivitySource21 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity91,
																'source_id' =>$idPlan7,
																'value' => 179896870,
																'goal' => 0,
																'evidence_balance' => 179896870,
																'age' => 1,
																]);
																$idactivitySource22 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity93,
																'source_id' =>$idPlan7,
																'value' => 10000000,
																'goal' => 0,
																'evidence_balance' => 10000000,
																'age' => 1,
																]);
																$idactivitySource23 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity96,
																'source_id' =>$idPlan7,
																'value' => 290000000,
																'goal' => 0,
																'evidence_balance' => 290000000,
																'age' => 1,
																]);
																$idactivitySource24 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity98,
																'source_id' =>$idPlan7,
																'value' => 17102922.1400003,
																'goal' => 0,
																'evidence_balance' => 17102922.1400003,
																'age' => 1,
																]);
																$idactivitySource25 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity111,
																'source_id' =>$idPlan6,
																'value' => 304592384,
																'goal' => 0,
																'evidence_balance' => 304592384,
																'age' => 1,
																]);
																$idactivitySource26 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity114,
																'source_id' =>$idPlan6,
																'value' => 110806059,
																'goal' => 0,
																'evidence_balance' => 110806059,
																'age' => 1,
																]);
																$idactivitySource27 = DB::getPdo()->lastInsertId();
																
																
																
															DB::table('activity_sources')->insert([
																'activity_id' => $idactivity120,
																'source_id' =>$idPlan6,
																'value' => 966000000,
																'goal' => 0,
																'evidence_balance' => 966000000,
																'age' => 1,
																]);
																$idactivitySource28 = DB::getPdo()->lastInsertId();
																
																
																
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity33,
																	'source_id' =>$idPlan24,
																	'value' => 377875836.889999,
																	'goal' => 0,
																	'evidence_balance' => 377875836.889999,
																	'age' => 1,
																	]);
																	$idactivitySource29 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity61,
																	'source_id' =>$idPlan7,
																	'value' => 1107412679.06,
																	'goal' => 0,
																	'evidence_balance' => 1107412679.06,
																	'age' => 1,
																	]);
																	$idactivitySource30 = DB::getPdo()->lastInsertId();
																	
																	
																	
																DB::table('activity_sources')->insert([
																	'activity_id' => $idactivity98,
																	'source_id' =>$idPlan6,
																	'value' => 62897077.8599997,
																	'goal' => 0,
																	'evidence_balance' => 62897077.8599997,
																	'age' => 1,
																	]);
																	$idactivitySource31 = DB::getPdo()->lastInsertId();
																	
																	
																	
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia2,
																		'activity_source_id' =>$idactivitySource1,
																		'value' => 1469413836,
																		]);
																		$idevidenceFinancial1 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia4,
																		'activity_source_id' =>$idactivitySource2,
																		'value' => 621029638,
																		]);
																		$idevidenceFinancial2 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia12,
																		'activity_source_id' =>$idactivitySource3,
																		'value' => 171980801,
																		]);
																		$idevidenceFinancial3 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia14,
																		'activity_source_id' =>$idactivitySource4,
																		'value' => 179442243,
																		]);
																		$idevidenceFinancial4 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia19,
																		'activity_source_id' =>$idactivitySource5,
																		'value' => 191292630,
																		]);
																		$idevidenceFinancial5 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia23,
																		'activity_source_id' =>$idactivitySource6,
																		'value' => 157680658,
																		]);
																		$idevidenceFinancial6 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia29,
																		'activity_source_id' =>$idactivitySource7,
																		'value' => 8994006150,
																		]);
																		$idevidenceFinancial7 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia33,
																		'activity_source_id' =>$idactivitySource8,
																		'value' => 619628640.110001,
																		]);
																		$idevidenceFinancial8 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia37,
																		'activity_source_id' =>$idactivitySource9,
																		'value' => 418068800,
																		]);
																		$idevidenceFinancial9 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia39,
																		'activity_source_id' =>$idactivitySource10,
																		'value' => 298096662,
																		]);
																		$idevidenceFinancial10 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia41,
																		'activity_source_id' =>$idactivitySource11,
																		'value' => 212120993,
																		]);
																		$idevidenceFinancial11 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia48,
																		'activity_source_id' =>$idactivitySource12,
																		'value' => 1030317594,
																		]);
																		$idevidenceFinancial12 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia52,
																		'activity_source_id' =>$idactivitySource13,
																		'value' => 1158917200,
																		]);
																		$idevidenceFinancial13 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia61,
																		'activity_source_id' =>$idactivitySource14,
																		'value' => 186302925.940001,
																		]);
																		$idevidenceFinancial14 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia66,
																		'activity_source_id' =>$idactivitySource15,
																		'value' => 73257095,
																		]);
																		$idevidenceFinancial15 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia68,
																		'activity_source_id' =>$idactivitySource16,
																		'value' => 96138006,
																		]);
																		$idevidenceFinancial16 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia74,
																		'activity_source_id' =>$idactivitySource17,
																		'value' => 2557561834,
																		]);
																		$idevidenceFinancial17 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia76,
																		'activity_source_id' =>$idactivitySource18,
																		'value' => 301504531,
																		]);
																		$idevidenceFinancial18 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia81,
																		'activity_source_id' =>$idactivitySource19,
																		'value' => 208640978,
																		]);
																		$idevidenceFinancial19 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia85,
																		'activity_source_id' =>$idactivitySource20,
																		'value' => 303928275,
																		]);
																		$idevidenceFinancial20 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia87,
																		'activity_source_id' =>$idactivitySource21,
																		'value' => 66874196,
																		]);
																		$idevidenceFinancial21 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia91,
																		'activity_source_id' =>$idactivitySource22,
																		'value' => 176803316,
																		]);
																		$idevidenceFinancial22 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia93,
																		'activity_source_id' =>$idactivitySource23,
																		'value' => 39841,
																		]);
																		$idevidenceFinancial23 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia96,
																		'activity_source_id' =>$idactivitySource24,
																		'value' => 130298396,
																		]);
																		$idevidenceFinancial24 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia98,
																		'activity_source_id' =>$idactivitySource25,
																		'value' => 17102922.1400003,
																		]);
																		$idevidenceFinancial25 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia111,
																		'activity_source_id' =>$idactivitySource26,
																		'value' => 278984859,
																		]);
																		$idevidenceFinancial26 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia114,
																		'activity_source_id' =>$idactivitySource27,
																		'value' => 92787502,
																		]);
																		$idevidenceFinancial27 = DB::getPdo()->lastInsertId();
																		
																		
																		
																	DB::table('evidence_financial')->insert([
																		'evidence_id' => $idevidencia120,
																		'activity_source_id' =>$idactivitySource28,
																		'value' => 870580220,
																		]);
																		$idevidenceFinancial28 = DB::getPdo()->lastInsertId();
																		
																		
																		
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia33,
																			'activity_source_id' =>$idactivitySource29,
																			'value' => 377604587.289999,
																			]);
																			$idevidenceFinancial29 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia61,
																			'activity_source_id' =>$idactivitySource30,
																			'value' => 878982705.059999,
																			]);
																			$idevidenceFinancial30 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('evidence_financial')->insert([
																			'evidence_id' => $idevidencia98,
																			'activity_source_id' =>$idactivitySource31,
																			'value' => 62233553.8599997,
																			]);
																			$idevidenceFinancial31 = DB::getPdo()->lastInsertId();
																			
																			
																			
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity2,
																				'source_id' =>$idPlan38,
																				'value' => 218975779.97,
																				'goal' => 0,
																				'evidence_balance' => 218975779.97,
																				'age' => 2,
																				]);
																				$idactivitySource32 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity4,
																				'source_id' =>$idPlan38,
																				'value' => 916260652.58,
																				'goal' => 0,
																				'evidence_balance' => 916260652.58,
																				'age' => 2,
																				]);
																				$idactivitySource33 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity8,
																				'source_id' =>$idPlan38,
																				'value' => 223798681,
																				'goal' => 0,
																				'evidence_balance' => 223798681,
																				'age' => 2,
																				]);
																				$idactivitySource34 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity12,
																				'source_id' =>$idPlan38,
																				'value' => 158919000.428,
																				'goal' => 0,
																				'evidence_balance' => 158919000.428,
																				'age' => 2,
																				]);
																				$idactivitySource35 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity14,
																				'source_id' =>$idPlan38,
																				'value' => 151753000,
																				'goal' => 0,
																				'evidence_balance' => 151753000,
																				'age' => 2,
																				]);
																				$idactivitySource36 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity19,
																				'source_id' =>$idPlan38,
																				'value' => 179999999.998,
																				'goal' => 0,
																				'evidence_balance' => 179999999.998,
																				'age' => 2,
																				]);
																				$idactivitySource37 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity23,
																				'source_id' =>$idPlan38,
																				'value' => 186648000,
																				'goal' => 0,
																				'evidence_balance' => 186648000,
																				'age' => 2,
																				]);
																				$idactivitySource38 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity29,
																				'source_id' =>$idPlan38,
																				'value' => 2693824652.91,
																				'goal' => 0,
																				'evidence_balance' => 2693824652.91,
																				'age' => 2,
																				]);
																				$idactivitySource39 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity33,
																				'source_id' =>$idPlan38,
																				'value' => 5246813757.384,
																				'goal' => 0,
																				'evidence_balance' => 5246813757.384,
																				'age' => 2,
																				]);
																				$idactivitySource40 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity37,
																				'source_id' =>$idPlan27,
																				'value' => 529850484.54,
																				'goal' => 0,
																				'evidence_balance' => 529850484.54,
																				'age' => 2,
																				]);
																				$idactivitySource41 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity39,
																				'source_id' =>$idPlan27,
																				'value' => 264525269,
																				'goal' => 0,
																				'evidence_balance' => 264525269,
																				'age' => 2,
																				]);
																				$idactivitySource42 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity41,
																				'source_id' =>$idPlan27,
																				'value' => 527891456,
																				'goal' => 0,
																				'evidence_balance' => 527891456,
																				'age' => 2,
																				]);
																				$idactivitySource43 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity48,
																				'source_id' =>$idPlan27,
																				'value' => 439256133,
																				'goal' => 0,
																				'evidence_balance' => 439256133,
																				'age' => 2,
																				]);
																				$idactivitySource44 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity52,
																				'source_id' =>$idPlan27,
																				'value' => 513806923,
																				'goal' => 0,
																				'evidence_balance' => 513806923,
																				'age' => 2,
																				]);
																				$idactivitySource45 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity61,
																				'source_id' =>$idPlan27,
																				'value' => 371518741.574,
																				'goal' => 0,
																				'evidence_balance' => 371518741.574,
																				'age' => 2,
																				]);
																				$idactivitySource46 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity66,
																				'source_id' =>$idPlan33,
																				'value' => 89692000,
																				'goal' => 0,
																				'evidence_balance' => 89692000,
																				'age' => 2,
																				]);
																				$idactivitySource47 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity68,
																				'source_id' =>$idPlan33,
																				'value' => 101000000,
																				'goal' => 0,
																				'evidence_balance' => 101000000,
																				'age' => 2,
																				]);
																				$idactivitySource48 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity74,
																				'source_id' =>$idPlan33,
																				'value' => 1559195258.174,
																				'goal' => 0,
																				'evidence_balance' => 1559195258.174,
																				'age' => 2,
																				]);
																				$idactivitySource49 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity81,
																				'source_id' =>$idPlan35,
																				'value' => 171289973,
																				'goal' => 0,
																				'evidence_balance' => 171289973,
																				'age' => 2,
																				]);
																				$idactivitySource50 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity85,
																				'source_id' =>$idPlan35,
																				'value' => 178366864,
																				'goal' => 0,
																				'evidence_balance' => 178366864,
																				'age' => 2,
																				]);
																				$idactivitySource51 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity87,
																				'source_id' =>$idPlan35,
																				'value' => 92371418,
																				'goal' => 0,
																				'evidence_balance' => 92371418,
																				'age' => 2,
																				]);
																				$idactivitySource52 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity91,
																				'source_id' =>$idPlan35,
																				'value' => 258850378,
																				'goal' => 0,
																				'evidence_balance' => 258850378,
																				'age' => 2,
																				]);
																				$idactivitySource53 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity96,
																				'source_id' =>$idPlan35,
																				'value' => 124129077,
																				'goal' => 0,
																				'evidence_balance' => 124129077,
																				'age' => 2,
																				]);
																				$idactivitySource55 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity98,
																				'source_id' =>$idPlan35,
																				'value' => 96119072.974,
																				'goal' => 0,
																				'evidence_balance' => 96119072.974,
																				'age' => 2,
																				]);
																				$idactivitySource56 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity100,
																				'source_id' =>$idPlan32,
																				'value' => 286307806,
																				'goal' => 0,
																				'evidence_balance' => 286307806,
																				'age' => 2,
																				]);
																				$idactivitySource57 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity104,
																				'source_id' =>$idPlan32,
																				'value' => 297937109,
																				'goal' => 0,
																				'evidence_balance' => 297937109,
																				'age' => 2,
																				]);
																				$idactivitySource58 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity111,
																				'source_id' =>$idPlan32,
																				'value' => 302400000,
																				'goal' => 0,
																				'evidence_balance' => 302400000,
																				'age' => 2,
																				]);
																				$idactivitySource59 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity114,
																				'source_id' =>$idPlan32,
																				'value' => 114089290,
																				'goal' => 0,
																				'evidence_balance' => 114089290,
																				'age' => 2,
																				]);
																				$idactivitySource60 = DB::getPdo()->lastInsertId();
																				
																				
																				
																			DB::table('activity_sources')->insert([
																				'activity_id' => $idactivity120,
																				'source_id' =>$idPlan32,
																				'value' => 260123470.274,
																				'goal' => 0,
																				'evidence_balance' => 260123470.274,
																				'age' => 2,
																				]);
																				$idactivitySource61 = DB::getPdo()->lastInsertId();
																				
																				
																				
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity33,
																					'source_id' =>$idPlan27,
																					'value' => 1149000992.886,
																					'goal' => 0,
																					'evidence_balance' => 1149000992.886,
																					'age' => 2,
																					]);
																					$idactivitySource62 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity61,
																					'source_id' =>$idPlan33,
																					'value' => 373025878.426,
																					'goal' => 0,
																					'evidence_balance' => 373025878.426,
																					'age' => 2,
																					]);
																					$idactivitySource63 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity74,
																					'source_id' =>$idPlan43,
																					'value' => 1793779285.8,
																					'goal' => 0,
																					'evidence_balance' => 1793779285.8,
																					'age' => 2,
																					]);
																					$idactivitySource64 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity98,
																					'source_id' =>$idPlan32,
																					'value' => 8416903.02600002,
																					'goal' => 0,
																					'evidence_balance' => 8416903.02600002,
																					'age' => 2,
																					]);
																					$idactivitySource65 = DB::getPdo()->lastInsertId();
																					
																					
																					
																				DB::table('activity_sources')->insert([
																					'activity_id' => $idactivity120,
																					'source_id' =>$idPlan40,
																					'value' => 317196529.726,
																					'goal' => 0,
																					'evidence_balance' => 317196529.726,
																					'age' => 2,
																					]);
																					$idactivitySource66 = DB::getPdo()->lastInsertId();
																					
																					
																					
																					DB::table('activity_sources')->insert([
																						'activity_id' => $idactivity74,
																						'source_id' =>$idPlan35,
																						'value' => 162112834.026,
																						'goal' => 0,
																						'evidence_balance' => 162112834.026,
																						'age' => 2,
																						]);
																						$idactivitySource67 = DB::getPdo()->lastInsertId();
																						
																						
																						
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia122,
																							'activity_source_id' =>$idactivitySource32,
																							'value' => 182040441,
																							]);
																							$idevidenceFinancial32 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia124,
																							'activity_source_id' =>$idactivitySource33,
																							'value' => 818117713,
																							]);
																							$idevidenceFinancial33 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia128,
																							'activity_source_id' =>$idactivitySource34,
																							'value' => 223798681,
																							]);
																							$idevidenceFinancial34 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia132,
																							'activity_source_id' =>$idactivitySource35,
																							'value' => 148129851.318115,
																							]);
																							$idevidenceFinancial35 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia134,
																							'activity_source_id' =>$idactivitySource36,
																							'value' => 139651749,
																							]);
																							$idevidenceFinancial36 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia139,
																							'activity_source_id' =>$idactivitySource37,
																							'value' => 171861180,
																							]);
																							$idevidenceFinancial37 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia143,
																							'activity_source_id' =>$idactivitySource38,
																							'value' => 161187127,
																							]);
																							$idevidenceFinancial38 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia149,
																							'activity_source_id' =>$idactivitySource39,
																							'value' => 2675761083.91,
																							]);
																							$idevidenceFinancial39 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia153,
																							'activity_source_id' =>$idactivitySource40,
																							'value' => 5246813757.384,
																							]);
																							$idevidenceFinancial40 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia157,
																							'activity_source_id' =>$idactivitySource41,
																							'value' => 428831204,
																							]);
																							$idevidenceFinancial41 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia159,
																							'activity_source_id' =>$idactivitySource42,
																							'value' => 249187158,
																							]);
																							$idevidenceFinancial42 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia161,
																							'activity_source_id' =>$idactivitySource43,
																							'value' => 525361490,
																							]);
																							$idevidenceFinancial43 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia168,
																							'activity_source_id' =>$idactivitySource44,
																							'value' => 344045311,
																							]);
																							$idevidenceFinancial44 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia172,
																							'activity_source_id' =>$idactivitySource45,
																							'value' => 94059761,
																							]);
																							$idevidenceFinancial45 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia181,
																							'activity_source_id' =>$idactivitySource46,
																							'value' => 371518741.574,
																							]);
																							$idevidenceFinancial46 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia186,
																							'activity_source_id' =>$idactivitySource47,
																							'value' => 82700961,
																							]);
																							$idevidenceFinancial47 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia188,
																							'activity_source_id' =>$idactivitySource48,
																							'value' => 84638354,
																							]);
																							$idevidenceFinancial48 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia194,
																							'activity_source_id' =>$idactivitySource49,
																							'value' => 1559195258.174,
																							]);
																							$idevidenceFinancial49 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia201,
																							'activity_source_id' =>$idactivitySource50,
																							'value' => 166540855,
																							]);
																							$idevidenceFinancial50 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia205,
																							'activity_source_id' =>$idactivitySource51,
																							'value' => 169911087,
																							]);
																							$idevidenceFinancial51 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia207,
																							'activity_source_id' =>$idactivitySource52,
																							'value' => 91895027,
																							]);
																							$idevidenceFinancial52 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia211,
																							'activity_source_id' =>$idactivitySource53,
																							'value' => 257818869,
																							]);
																							$idevidenceFinancial53 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia216,
																							'activity_source_id' =>$idactivitySource55,
																							'value' => 112330445,
																							]);
																							$idevidenceFinancial55 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia218,
																							'activity_source_id' =>$idactivitySource56,
																							'value' => 96119072.974,
																							]);
																							$idevidenceFinancial56 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia220,
																							'activity_source_id' =>$idactivitySource57,
																							'value' => 163667301,
																							]);
																							$idevidenceFinancial57 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia224,
																							'activity_source_id' =>$idactivitySource58,
																							'value' => 120742880.9,
																							]);
																							$idevidenceFinancial58 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia231,
																							'activity_source_id' =>$idactivitySource59,
																							'value' => 296667163,
																							]);
																							$idevidenceFinancial59 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia234,
																							'activity_source_id' =>$idactivitySource60,
																							'value' => 108932130,
																							]);
																							$idevidenceFinancial60 = DB::getPdo()->lastInsertId();
																							
																							
																							
																						DB::table('evidence_financial')->insert([
																							'evidence_id' => $idevidencia240,
																							'activity_source_id' =>$idactivitySource61,
																							'value' => 260123470.274,
																							]);
																							$idevidenceFinancial61 = DB::getPdo()->lastInsertId();
																							
																							
																							
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia153,
																								'activity_source_id' =>$idactivitySource62,
																								'value' => 524657432.615999,
																								]);
																								$idevidenceFinancial62 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia181,
																								'activity_source_id' =>$idactivitySource63,
																								'value' => 308641909.426,
																								]);
																								$idevidenceFinancial63 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia194,
																								'activity_source_id' =>$idactivitySource64,
																								'value' => 1793779285.8,
																								]);
																								$idevidenceFinancial64 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia218,
																								'activity_source_id' =>$idactivitySource65,
																								'value' => 5224190.02600002,
																								]);
																								$idevidenceFinancial65 = DB::getPdo()->lastInsertId();
																								
																								
																								
																							DB::table('evidence_financial')->insert([
																								'evidence_id' => $idevidencia240,
																								'activity_source_id' =>$idactivitySource66,
																								'value' => 261003035.726,
																								]);
																								$idevidenceFinancial66 = DB::getPdo()->lastInsertId();
																								
																								
																								
																								DB::table('evidence_financial')->insert([
																									'evidence_id' => $idevidencia194,
																									'activity_source_id' =>$idactivitySource67,
																									'value' => 70221249.1960001,
																									]);
																									$idevidenceFinancial67 = DB::getPdo()->lastInsertId();
																									
																									
																									
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity2,
																										'source_id' =>$idPlan44,
																										'value' => 1674437040,
																										'goal' => 0,
																										'evidence_balance' => 1674437040,
																										'age' => 3,
																										]);
																										$idactivitySource68 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity4,
																										'source_id' =>$idPlan44,
																										'value' => 1067096751,
																										'goal' => 0,
																										'evidence_balance' => 1067096751,
																										'age' => 3,
																										]);
																										$idactivitySource69 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity6,
																										'source_id' =>$idPlan44,
																										'value' => 80000000,
																										'goal' => 0,
																										'evidence_balance' => 80000000,
																										'age' => 3,
																										]);
																										$idactivitySource70 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity8,
																										'source_id' =>$idPlan44,
																										'value' => 100000000,
																										'goal' => 0,
																										'evidence_balance' => 100000000,
																										'age' => 3,
																										]);
																										$idactivitySource71 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity12,
																										'source_id' =>$idPlan44,
																										'value' => 119400000,
																										'goal' => 0,
																										'evidence_balance' => 119400000,
																										'age' => 3,
																										]);
																										$idactivitySource72 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity14,
																										'source_id' =>$idPlan44,
																										'value' => 185000000,
																										'goal' => 0,
																										'evidence_balance' => 185000000,
																										'age' => 3,
																										]);
																										$idactivitySource73 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity19,
																										'source_id' =>$idPlan44,
																										'value' => 1547000000,
																										'goal' => 0,
																										'evidence_balance' => 1547000000,
																										'age' => 3,
																										]);
																										$idactivitySource74 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity23,
																										'source_id' =>$idPlan44,
																										'value' => 190500001,
																										'goal' => 0,
																										'evidence_balance' => 190500001,
																										'age' => 3,
																										]);
																										$idactivitySource75 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity29,
																										'source_id' =>$idPlan44,
																										'value' => 1445945931,
																										'goal' => 0,
																										'evidence_balance' => 1445945931,
																										'age' => 3,
																										]);
																										$idactivitySource76 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity33,
																										'source_id' =>$idPlan44,
																										'value' => 2589502565,
																										'goal' => 0,
																										'evidence_balance' => 2589502565,
																										'age' => 3,
																										]);
																										$idactivitySource77 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity37,
																										'source_id' =>$idPlan44,
																										'value' => 343177851,
																										'goal' => 0,
																										'evidence_balance' => 343177851,
																										'age' => 3,
																										]);
																										$idactivitySource78 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity39,
																										'source_id' =>$idPlan57,
																										'value' => 328187929,
																										'goal' => 0,
																										'evidence_balance' => 328187929,
																										'age' => 3,
																										]);
																										$idactivitySource79 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity41,
																										'source_id' =>$idPlan57,
																										'value' => 555875829,
																										'goal' => 0,
																										'evidence_balance' => 555875829,
																										'age' => 3,
																										]);
																										$idactivitySource80 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity48,
																										'source_id' =>$idPlan57,
																										'value' => 594117028,
																										'goal' => 0,
																										'evidence_balance' => 594117028,
																										'age' => 3,
																										]);
																										$idactivitySource81 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity52,
																										'source_id' =>$idPlan57,
																										'value' => 630866684,
																										'goal' => 0,
																										'evidence_balance' => 630866684,
																										'age' => 3,
																										]);
																										$idactivitySource82 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity61,
																										'source_id' =>$idPlan57,
																										'value' => 959000000,
																										'goal' => 0,
																										'evidence_balance' => 959000000,
																										'age' => 3,
																										]);
																										$idactivitySource83 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity66,
																										'source_id' =>$idPlan57,
																										'value' => 108800000,
																										'goal' => 0,
																										'evidence_balance' => 108800000,
																										'age' => 3,
																										]);
																										$idactivitySource84 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity68,
																										'source_id' =>$idPlan57,
																										'value' => 114000000,
																										'goal' => 0,
																										'evidence_balance' => 114000000,
																										'age' => 3,
																										]);
																										$idactivitySource85 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity74,
																										'source_id' =>$idPlan57,
																										'value' => 1460567971.31,
																										'goal' => 0,
																										'evidence_balance' => 1460567971.31,
																										'age' => 3,
																										]);
																										$idactivitySource86 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity76,
																										'source_id' =>$idPlan54,
																										'value' => 427100000,
																										'goal' => 0,
																										'evidence_balance' => 427100000,
																										'age' => 3,
																										]);
																										$idactivitySource87 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity81,
																										'source_id' =>$idPlan54,
																										'value' => 182621091.31,
																										'goal' => 0,
																										'evidence_balance' => 182621091.31,
																										'age' => 3,
																										]);
																										$idactivitySource88 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity85,
																										'source_id' =>$idPlan61,
																										'value' => 293339709,
																										'goal' => 0,
																										'evidence_balance' => 293339709,
																										'age' => 3,
																										]);
																										$idactivitySource89 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity87,
																										'source_id' =>$idPlan61,
																										'value' => 111043198,
																										'goal' => 0,
																										'evidence_balance' => 111043198,
																										'age' => 3,
																										]);
																										$idactivitySource90 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity91,
																										'source_id' =>$idPlan61,
																										'value' => 306287181,
																										'goal' => 0,
																										'evidence_balance' => 306287181,
																										'age' => 3,
																										]);
																										$idactivitySource91 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity93,
																										'source_id' =>$idPlan61,
																										'value' => 15000001,
																										'goal' => 0,
																										'evidence_balance' => 15000001,
																										'age' => 3,
																										]);
																										$idactivitySource92 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity96,
																										'source_id' =>$idPlan61,
																										'value' => 130000000,
																										'goal' => 0,
																										'evidence_balance' => 130000000,
																										'age' => 3,
																										]);
																										$idactivitySource93 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity98,
																										'source_id' =>$idPlan61,
																										'value' => 131356155,
																										'goal' => 0,
																										'evidence_balance' => 131356155,
																										'age' => 3,
																										]);
																										$idactivitySource94 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity100,
																										'source_id' =>$idPlan61,
																										'value' => 290000000,
																										'goal' => 0,
																										'evidence_balance' => 290000000,
																										'age' => 3,
																										]);
																										$idactivitySource95 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity104,
																										'source_id' =>$idPlan61,
																										'value' => 349000000,
																										'goal' => 0,
																										'evidence_balance' => 349000000,
																										'age' => 3,
																										]);
																										$idactivitySource96 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity111,
																										'source_id' =>$idPlan61,
																										'value' => 26987418.6100004,
																										'goal' => 0,
																										'evidence_balance' => 26987418.6100004,
																										'age' => 3,
																										]);
																										$idactivitySource97 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity114,
																										'source_id' =>$idPlan60,
																										'value' => 186000000,
																										'goal' => 0,
																										'evidence_balance' => 186000000,
																										'age' => 3,
																										]);
																										$idactivitySource98 = DB::getPdo()->lastInsertId();
																										
																										
																										
																									DB::table('activity_sources')->insert([
																										'activity_id' => $idactivity120,
																										'source_id' =>$idPlan60,
																										'value' => 738000000,
																										'goal' => 0,
																										'evidence_balance' => 738000000,
																										'age' => 3,
																										]);
																										$idactivitySource99 = DB::getPdo()->lastInsertId();
																										
																										
																										
																										DB::table('activity_sources')->insert([
																											'activity_id' => $idactivity74,
																											'source_id' =>$idPlan54,
																											'value' => 1381605865.69,
																											'goal' => 0,
																											'evidence_balance' => 1381605865.69,
																											'age' => 3,
																											]);
																											$idactivitySource100 = DB::getPdo()->lastInsertId();
																											
																											
																											
																										DB::table('activity_sources')->insert([
																											'activity_id' => $idactivity81,
																											'source_id' =>$idPlan61,
																											'value' => 62398129.6899996,
																											'goal' => 0,
																											'evidence_balance' => 62398129.6899996,
																											'age' => 3,
																											]);
																											$idactivitySource101 = DB::getPdo()->lastInsertId();
																											
																											
																											
																										DB::table('activity_sources')->insert([
																											'activity_id' => $idactivity111,
																											'source_id' =>$idPlan60,
																											'value' => 323012580.39,
																											'goal' => 0,
																											'evidence_balance' => 323012580.39,
																											'age' => 3,
																											]);
																											$idactivitySource102 = DB::getPdo()->lastInsertId();
																											
																											
																											
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia242,
																												'activity_source_id' =>$idactivitySource68,
																												'value' => 1674076562,
																												]);
																												$idevidenceFinancial68 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia244,
																												'activity_source_id' =>$idactivitySource69,
																												'value' => 864930380,
																												]);
																												$idevidenceFinancial69 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia246,
																												'activity_source_id' =>$idactivitySource70,
																												'value' => 79983920,
																												]);
																												$idevidenceFinancial70 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia248,
																												'activity_source_id' =>$idactivitySource71,
																												'value' => 99988860,
																												]);
																												$idevidenceFinancial71 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia252,
																												'activity_source_id' =>$idactivitySource72,
																												'value' => 111763742,
																												]);
																												$idevidenceFinancial72 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia254,
																												'activity_source_id' =>$idactivitySource73,
																												'value' => 178330420,
																												]);
																												$idevidenceFinancial73 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia259,
																												'activity_source_id' =>$idactivitySource74,
																												'value' => 1542671221,
																												]);
																												$idevidenceFinancial74 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia263,
																												'activity_source_id' =>$idactivitySource75,
																												'value' => 168734939,
																												]);
																												$idevidenceFinancial75 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia269,
																												'activity_source_id' =>$idactivitySource76,
																												'value' => 1296984920,
																												]);
																												$idevidenceFinancial76 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia273,
																												'activity_source_id' =>$idactivitySource77,
																												'value' => 386397758,
																												]);
																												$idevidenceFinancial77 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia277,
																												'activity_source_id' =>$idactivitySource78,
																												'value' => 514871284,
																												]);
																												$idevidenceFinancial78 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia279,
																												'activity_source_id' =>$idactivitySource79,
																												'value' => 319715750,
																												]);
																												$idevidenceFinancial79 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia281,
																												'activity_source_id' =>$idactivitySource80,
																												'value' => 384522499,
																												]);
																												$idevidenceFinancial80 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia288,
																												'activity_source_id' =>$idactivitySource81,
																												'value' => 576159584,
																												]);
																												$idevidenceFinancial81 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia292,
																												'activity_source_id' =>$idactivitySource82,
																												'value' => 169979433,
																												]);
																												$idevidenceFinancial82 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia301,
																												'activity_source_id' =>$idactivitySource83,
																												'value' => 953486646,
																												]);
																												$idevidenceFinancial83 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia306,
																												'activity_source_id' =>$idactivitySource84,
																												'value' => 107714222,
																												]);
																												$idevidenceFinancial84 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia308,
																												'activity_source_id' =>$idactivitySource85,
																												'value' => 110759563,
																												]);
																												$idevidenceFinancial85 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia314,
																												'activity_source_id' =>$idactivitySource86,
																												'value' => 1460567971.31,
																												]);
																												$idevidenceFinancial86 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia316,
																												'activity_source_id' =>$idactivitySource87,
																												'value' => 426138065,
																												]);
																												$idevidenceFinancial87 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia321,
																												'activity_source_id' =>$idactivitySource88,
																												'value' => 182621091.31,
																												]);
																												$idevidenceFinancial88 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia325,
																												'activity_source_id' =>$idactivitySource89,
																												'value' => 291679319,
																												]);
																												$idevidenceFinancial89 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia327,
																												'activity_source_id' =>$idactivitySource90,
																												'value' => 96102476,
																												]);
																												$idevidenceFinancial90 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia331,
																												'activity_source_id' =>$idactivitySource91,
																												'value' => 300045421,
																												]);
																												$idevidenceFinancial91 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia333,
																												'activity_source_id' =>$idactivitySource92,
																												'value' => 14940240,
																												]);
																												$idevidenceFinancial92 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia336,
																												'activity_source_id' =>$idactivitySource93,
																												'value' => 127916414,
																												]);
																												$idevidenceFinancial93 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia338,
																												'activity_source_id' =>$idactivitySource94,
																												'value' => 128154971,
																												]);
																												$idevidenceFinancial94 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia340,
																												'activity_source_id' =>$idactivitySource95,
																												'value' => 282738374,
																												]);
																												$idevidenceFinancial95 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia344,
																												'activity_source_id' =>$idactivitySource96,
																												'value' => 307420418,
																												]);
																												$idevidenceFinancial96 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia351,
																												'activity_source_id' =>$idactivitySource97,
																												'value' => 26987418.6100004,
																												]);
																												$idevidenceFinancial97 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia354,
																												'activity_source_id' =>$idactivitySource98,
																												'value' => 184024400,
																												]);
																												$idevidenceFinancial98 = DB::getPdo()->lastInsertId();
																												
																												
																												
																											DB::table('evidence_financial')->insert([
																												'evidence_id' => $idevidencia360,
																												'activity_source_id' =>$idactivitySource99,
																												'value' => 699547984,
																												]);
																												$idevidenceFinancial99 = DB::getPdo()->lastInsertId();
																												
																												
																												
																							
																												DB::table('evidence_financial')->insert([
																													'evidence_id' => $idevidencia314,
																													'activity_source_id' =>$idactivitySource100,
																													'value' => 1145768204.69,
																													]);
																													$idevidenceFinancial100 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('evidence_financial')->insert([
																													'evidence_id' => $idevidencia321,
																													'activity_source_id' =>$idactivitySource101,
																													'value' => 56265742.6899996,
																													]);
																													$idevidenceFinancial101 = DB::getPdo()->lastInsertId();
																													
																													
																													
																												DB::table('evidence_financial')->insert([
																													'evidence_id' => $idevidencia351,
																													'activity_source_id' =>$idactivitySource102,
																													'value' => 322372289.39,
																													]);
																													$idevidenceFinancial102 = DB::getPdo()->lastInsertId();
																													
																													
																													
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity2,
																														'source_id' =>$idPlan74,
																														'value' => 2983137549,
																														'goal' => 0,
																														'evidence_balance' => 2983137549,
																														'age' => 4,
																														]);
																														$idactivitySource103 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity4,
																														'source_id' =>$idPlan74,
																														'value' => 1109328993.56,
																														'goal' => 0,
																														'evidence_balance' => 1109328993.56,
																														'age' => 4,
																														]);
																														$idactivitySource104 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity6,
																														'source_id' =>$idPlan74,
																														'value' => 200000000,
																														'goal' => 0,
																														'evidence_balance' => 200000000,
																														'age' => 4,
																														]);
																														$idactivitySource105 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity8,
																														'source_id' =>$idPlan74,
																														'value' => 78496138,
																														'goal' => 0,
																														'evidence_balance' => 78496138,
																														'age' => 4,
																														]);
																														$idactivitySource106 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity12,
																														'source_id' =>$idPlan74,
																														'value' => 149900000,
																														'goal' => 0,
																														'evidence_balance' => 149900000,
																														'age' => 4,
																														]);
																														$idactivitySource107 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity14,
																														'source_id' =>$idPlan74,
																														'value' => 180000000,
																														'goal' => 0,
																														'evidence_balance' => 180000000,
																														'age' => 4,
																														]);
																														$idactivitySource108 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity19,
																														'source_id' =>$idPlan74,
																														'value' => 209543814.77,
																														'goal' => 0,
																														'evidence_balance' => 209543814.77,
																														'age' => 4,
																														]);
																														$idactivitySource109 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity23,
																														'source_id' =>$idPlan74,
																														'value' => 194000000,
																														'goal' => 0,
																														'evidence_balance' => 194000000,
																														'age' => 4,
																														]);
																														$idactivitySource110 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity29,
																														'source_id' =>$idPlan74,
																														'value' => 1156473352.01,
																														'goal' => 0,
																														'evidence_balance' => 1156473352.01,
																														'age' => 4,
																														]);
																														$idactivitySource111 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity33,
																														'source_id' =>$idPlan74,
																														'value' => 837838437.76,
																														'goal' => 0,
																														'evidence_balance' => 837838437.76,
																														'age' => 4,
																														]);
																														$idactivitySource112 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity37,
																														'source_id' =>$idPlan70,
																														'value' => 435272618.85,
																														'goal' => 0,
																														'evidence_balance' => 435272618.85,
																														'age' => 4,
																														]);
																														$idactivitySource113 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity39,
																														'source_id' =>$idPlan70,
																														'value' => 369863167,
																														'goal' => 0,
																														'evidence_balance' => 369863167,
																														'age' => 4,
																														]);
																														$idactivitySource114 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity41,
																														'source_id' =>$idPlan70,
																														'value' => 537458098.64,
																														'goal' => 0,
																														'evidence_balance' => 537458098.64,
																														'age' => 4,
																														]);
																														$idactivitySource115 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity48,
																														'source_id' =>$idPlan70,
																														'value' => 1113147028,
																														'goal' => 0,
																														'evidence_balance' => 1113147028,
																														'age' => 4,
																														]);
																														$idactivitySource116 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity52,
																														'source_id' =>$idPlan70,
																														'value' => 600866684,
																														'goal' => 0,
																														'evidence_balance' => 600866684,
																														'age' => 4,
																														]);
																														$idactivitySource117 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity61,
																														'source_id' =>$idPlan70,
																														'value' => 1409422480,
																														'goal' => 0,
																														'evidence_balance' => 1409422480,
																														'age' => 4,
																														]);
																														$idactivitySource118 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity66,
																														'source_id' =>$idPlan70,
																														'value' => 144142500,
																														'goal' => 0,
																														'evidence_balance' => 144142500,
																														'age' => 4,
																														]);
																														$idactivitySource119 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity68,
																														'source_id' =>$idPlan70,
																														'value' => 153942500,
																														'goal' => 0,
																														'evidence_balance' => 153942500,
																														'age' => 4,
																														]);
																														$idactivitySource120 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity74,
																														'source_id' =>$idPlan70,
																														'value' => 1445124768.8,
																														'goal' => 0,
																														'evidence_balance' => 1445124768.8,
																														'age' => 4,
																														]);
																														$idactivitySource121 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity76,
																														'source_id' =>$idPlan76,
																														'value' => 454810166,
																														'goal' => 0,
																														'evidence_balance' => 454810166,
																														'age' => 4,
																														]);
																														$idactivitySource122 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity81,
																														'source_id' =>$idPlan76,
																														'value' => 217240000,
																														'goal' => 0,
																														'evidence_balance' => 217240000,
																														'age' => 4,
																														]);
																														$idactivitySource123 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity85,
																														'source_id' =>$idPlan76,
																														'value' => 353400000,
																														'goal' => 0,
																														'evidence_balance' => 353400000,
																														'age' => 4,
																														]);
																														$idactivitySource124 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity87,
																														'source_id' =>$idPlan76,
																														'value' => 60919400,
																														'goal' => 0,
																														'evidence_balance' => 60919400,
																														'age' => 4,
																														]);
																														$idactivitySource125 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity91,
																														'source_id' =>$idPlan76,
																														'value' => 306809463.8,
																														'goal' => 0,
																														'evidence_balance' => 306809463.8,
																														'age' => 4,
																														]);
																														$idactivitySource126 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity93,
																														'source_id' =>$idPlan62,
																														'value' => 15000000,
																														'goal' => 0,
																														'evidence_balance' => 15000000,
																														'age' => 4,
																														]);
																														$idactivitySource127 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity96,
																														'source_id' =>$idPlan62,
																														'value' => 115000000,
																														'goal' => 0,
																														'evidence_balance' => 115000000,
																														'age' => 4,
																														]);
																														$idactivitySource128 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity98,
																														'source_id' =>$idPlan62,
																														'value' => 165200000,
																														'goal' => 0,
																														'evidence_balance' => 165200000,
																														'age' => 4,
																														]);
																														$idactivitySource129 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity100,
																														'source_id' =>$idPlan62,
																														'value' => 270300000,
																														'goal' => 0,
																														'evidence_balance' => 270300000,
																														'age' => 4,
																														]);
																														$idactivitySource130 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity104,
																														'source_id' =>$idPlan62,
																														'value' => 371000000,
																														'goal' => 0,
																														'evidence_balance' => 371000000,
																														'age' => 4,
																														]);
																														$idactivitySource131 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity111,
																														'source_id' =>$idPlan62,
																														'value' => 387366400,
																														'goal' => 0,
																														'evidence_balance' => 387366400,
																														'age' => 4,
																														]);
																														$idactivitySource132 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity114,
																														'source_id' =>$idPlan62,
																														'value' => 23462233.9000001,
																														'goal' => 0,
																														'evidence_balance' => 23462233.9000001,
																														'age' => 4,
																														]);
																														$idactivitySource133 = DB::getPdo()->lastInsertId();
																														
																														
																														
																													DB::table('activity_sources')->insert([
																														'activity_id' => $idactivity120,
																														'source_id' =>$idPlan72,
																														'value' => 142788539.9,
																														'goal' => 0,
																														'evidence_balance' => 142788539.9,
																														'age' => 4,
																														]);
																														$idactivitySource134 = DB::getPdo()->lastInsertId();
																														
																														
																														
																														DB::table('activity_sources')->insert([
																															'activity_id' => $idactivity33,
																															'source_id' =>$idPlan70,
																															'value' => 3599923300.71,
																															'goal' => 0,
																															'evidence_balance' => 3599923300.71,
																															'age' => 4,
																															]);
																															$idactivitySource135 = DB::getPdo()->lastInsertId();
																															
																															
																															
																														DB::table('activity_sources')->insert([
																															'activity_id' => $idactivity74,
																															'source_id' =>$idPlan76,
																															'value' => 1124697168.2,
																															'goal' => 0,
																															'evidence_balance' => 1124697168.2,
																															'age' => 4,
																															]);
																															$idactivitySource136 = DB::getPdo()->lastInsertId();
																															
																															
																															
																														DB::table('activity_sources')->insert([
																															'activity_id' => $idactivity91,
																															'source_id' =>$idPlan62,
																															'value' => 250878279.2,
																															'goal' => 0,
																															'evidence_balance' => 250878279.2,
																															'age' => 4,
																															]);
																															$idactivitySource137 = DB::getPdo()->lastInsertId();
																															
																														
																															DB::table('activity_sources')->insert([
																																'activity_id' => $idactivity114,
																																'source_id' =>$idPlan72,
																																'value' => 242211460.1,
																																'goal' => 0,
																																'evidence_balance' => 242211460.1,
																																'age' => 4,
																																]);
																																$idactivitySource138 = DB::getPdo()->lastInsertId();

																														DB::table('activity_sources')->insert([
																															'activity_id' => $idactivity120,
																															'source_id' =>$idPlan68,
																															'value' => 270223500,
																															'goal' => 0,
																															'evidence_balance' => 270223500,
																															'age' => 4,
																															]);
																															$idactivitySource139 = DB::getPdo()->lastInsertId();
																															
																															
																															
																															DB::table('activity_sources')->insert([
																																'activity_id' => $idactivity120,
																																'source_id' =>$idPlan72,
																																'value' => 280000000,
																																'goal' => 0,
																																'evidence_balance' => 280000000,
																																'age' => 4,
																																]);
																																$idactivitySource140 = DB::getPdo()->lastInsertId();
																																
																																
																																	DB::table('activity_sources')->insert([
																																'activity_id' => $idactivity120,
																																'source_id' =>$idPlan64,
																																'value' => 71988141.4000027,
																																'goal' => 0,
																																'evidence_balance' => 71988141.4000027,
																																'age' => 4,
																																]);
																																$idactivitySource141 = DB::getPdo()->lastInsertId();
																																
																																
																																
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia362,
																																	'activity_source_id' =>$idactivitySource103,
																																	'value' => 2864880368,
																																	]);
																																	$idevidenceFinancial103 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia364,
																																	'activity_source_id' =>$idactivitySource104,
																																	'value' => 385623201,
																																	]);
																																	$idevidenceFinancial104 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia366,
																																	'activity_source_id' =>$idactivitySource105,
																																	'value' => 199540906,
																																	]);
																																	$idevidenceFinancial105 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia368,
																																	'activity_source_id' =>$idactivitySource106,
																																	'value' => 78486734,
																																	]);
																																	$idevidenceFinancial106 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia372,
																																	'activity_source_id' =>$idactivitySource107,
																																	'value' => 109025359,
																																	]);
																																	$idevidenceFinancial107 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia374,
																																	'activity_source_id' =>$idactivitySource108,
																																	'value' => 170062302,
																																	]);
																																	$idevidenceFinancial108 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia379,
																																	'activity_source_id' =>$idactivitySource109,
																																	'value' => 186506384,
																																	]);
																																	$idevidenceFinancial109 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia383,
																																	'activity_source_id' =>$idactivitySource110,
																																	'value' => 179562109,
																																	]);
																																	$idevidenceFinancial110 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia389,
																																	'activity_source_id' =>$idactivitySource111,
																																	'value' => 1153426065,
																																	]);
																																	$idevidenceFinancial111 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia393,
																																	'activity_source_id' =>$idactivitySource112,
																																	'value' => 837838437.76,
																																	]);
																																	$idevidenceFinancial112 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia397,
																																	'activity_source_id' =>$idactivitySource113,
																																	'value' => 415869167,
																																	]);
																																	$idevidenceFinancial113 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia399,
																																	'activity_source_id' =>$idactivitySource114,
																																	'value' => 355691230,
																																	]);
																																	$idevidenceFinancial114 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia401,
																																	'activity_source_id' =>$idactivitySource115,
																																	'value' => 493336605,
																																	]);
																																	$idevidenceFinancial115 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia408,
																																	'activity_source_id' =>$idactivitySource116,
																																	'value' => 1029590266.89,
																																	]);
																																	$idevidenceFinancial116 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia412,
																																	'activity_source_id' =>$idactivitySource117,
																																	'value' => 102050000,
																																	]);
																																	$idevidenceFinancial117 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia421,
																																	'activity_source_id' =>$idactivitySource118,
																																	'value' => 1302118235,
																																	]);
																																	$idevidenceFinancial118 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia426,
																																	'activity_source_id' =>$idactivitySource119,
																																	'value' => 116575370,
																																	]);
																																	$idevidenceFinancial119 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia428,
																																	'activity_source_id' =>$idactivitySource120,
																																	'value' => 140512077,
																																	]);
																																	$idevidenceFinancial120 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia434,
																																	'activity_source_id' =>$idactivitySource121,
																																	'value' => 1445124768.8,
																																	]);
																																	$idevidenceFinancial121 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia436,
																																	'activity_source_id' =>$idactivitySource122,
																																	'value' => 442240570,
																																	]);
																																	$idevidenceFinancial122 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia441,
																																	'activity_source_id' =>$idactivitySource123,
																																	'value' => 213288144,
																																	]);
																																	$idevidenceFinancial123 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia445,
																																	'activity_source_id' =>$idactivitySource124,
																																	'value' => 344777823.15,
																																	]);
																																	$idevidenceFinancial124 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia447,
																																	'activity_source_id' =>$idactivitySource125,
																																	'value' => 57672129,
																																	]);
																																	$idevidenceFinancial125 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia451,
																																	'activity_source_id' =>$idactivitySource126,
																																	'value' => 306809463.8,
																																	]);
																																	$idevidenceFinancial126 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia453,
																																	'activity_source_id' =>$idactivitySource127,
																																	'value' => 59761,
																																	]);
																																	$idevidenceFinancial127 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia456,
																																	'activity_source_id' =>$idactivitySource128,
																																	'value' => 111883526,
																																	]);
																																	$idevidenceFinancial128 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia458,
																																	'activity_source_id' =>$idactivitySource129,
																																	'value' => 153034060,
																																	]);
																																	$idevidenceFinancial129 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia460,
																																	'activity_source_id' =>$idactivitySource130,
																																	'value' => 251593617,
																																	]);
																																	$idevidenceFinancial130 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia464,
																																	'activity_source_id' =>$idactivitySource131,
																																	'value' => 333347094.87,
																																	]);
																																	$idevidenceFinancial131 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia471,
																																	'activity_source_id' =>$idactivitySource132,
																																	'value' => 363607202,
																																	]);
																																	$idevidenceFinancial132 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia474,
																																	'activity_source_id' =>$idactivitySource133,
																																	'value' => 23462233.9000001,
																																	]);
																																	$idevidenceFinancial133 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																DB::table('evidence_financial')->insert([
																																	'evidence_id' => $idevidencia480,
																																	'activity_source_id' =>$idactivitySource134,
																																	'value' => 142788539.9,
																																	]);
																																	$idevidenceFinancial134 = DB::getPdo()->lastInsertId();
																																	
																																	
																																	
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia393,
																																		'activity_source_id' =>$idactivitySource135,
																																		'value' => 3279478051.47,
																																		]);
																																		$idevidenceFinancial135 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia434,
																																		'activity_source_id' =>$idactivitySource136,
																																		'value' => 849249117.619999,
																																		]);
																																		$idevidenceFinancial136 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia451,
																																		'activity_source_id' =>$idactivitySource137,
																																		'value' => 215447904.2,
																																		]);
																																		$idevidenceFinancial137 = DB::getPdo()->lastInsertId();
																																		
																																	
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia474,
																																			'activity_source_id' =>$idactivitySource138,
																																			'value' => 197125764.1,
																																			]);
																																			$idevidenceFinancial138 = DB::getPdo()->lastInsertId();
																																			
																																																																					
																																		
																																		
																																	DB::table('evidence_financial')->insert([
																																		'evidence_id' => $idevidencia480,
																																		'activity_source_id' =>$idactivitySource139,
																																		'value' => 270223500,
																																		]);
																																		$idevidenceFinancial139 = DB::getPdo()->lastInsertId();
																																		
																																		
																																		
																																		DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia480,
																																			'activity_source_id' =>$idactivitySource140,
																																			'value' => 280000000,
																																			]);
																																			$idevidenceFinancial140 = DB::getPdo()->lastInsertId();
																																			
																																			
																																				DB::table('evidence_financial')->insert([
																																			'evidence_id' => $idevidencia480,
																																			'activity_source_id' =>$idactivitySource141,
																																			'value' => 15041754.0599998,
																																			]);
																																			$idevidenceFinancial141 = DB::getPdo()->lastInsertId();
																																			
																																			
																																			
    }
  }