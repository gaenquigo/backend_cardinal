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
 * Class HistoricPAI_CORPAMAG_Seeder
 */
class HistoricPAI_CORPAMAG_Seeder extends Seeder
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
        'director_name' => 'CARLOS FRANCISCO DIAZ GRANADOS MARTINEZ',
        'group_id' => 15,
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
            'car_program' => 'PROGRAMA 1 FORTALECIMIENTO DE LA EDUCACION AMBIENTAL Y CULTURA CIUDADANA',
            'weighing' => 14,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 2  ESTRATÉGIAS PARA LA CONSERVACION DE LA BIODIVERSIDAD',
            'weighing' => 14,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 3  PLANIFICACIÓN AMBIENTAL DEL TERRITORIO PARA LA ADAPTACION AL CAMBIO CLIMÁTICO',
            'weighing' => 14,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 4  GESTIÓN AMBIENTAL PARA EL DESARROLLO SOSTENIBLE',
            'weighing' => 14,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA 5:  GESTIÓN DEL RIESGO',
            'weighing' => 14,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 6  GESTIÓN AMBIENTAL PARA EL DESARROLLO SOSTENIBLE',
            'weighing' => 15,
            ]);
            $idprogram6 = DB::getPdo()->lastInsertId();
            
          DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 799,
            'car_program' => 'PROGRAMA No. 7  FORTALECIMIENTO INSTITUCIONAL',
            'weighing' => 15,
            ]);
            $idprogram7 = DB::getPdo()->lastInsertId();


            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.1:  Formación Educativo Ambiental',
              'weighing' => 50,
              ]);
              $idproject1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram1,
              'project' => 'Proyecto No. 1.2: Promoción de la Educacion Ambiental',
              'weighing' => 50,
              ]);
              $idproject2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.1:  Declaración, Socialización, Implementación y Manejo de Áreas Protegidas',
              'weighing' => 9,
              ]);
              $idproject3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No.2.2:  Restauración de Ecosistemas',
              'weighing' => 9,
              ]);
              $idproject4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No.2.3: Recuperación, Mantenimiento y Conservación de los Caños del Complejo Deltaico Estuarino Del Rio Magdalena',
              'weighing' => 9,
              ]);
              $idproject5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No.2.4: Recuperación, mantenimiento y conservación de la sección hidráulica y márgenes de los ríos Sevilla, Frío, Aracataca, Fundación y humedales afluentes al complejo CGSM',
              'weighing' => 9,
              ]);
              $idproject6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No.2.5: Recuperación y Protección de Especies  ',
              'weighing' => 9,
              ]);
              $idproject7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.6:  Implementación de Estrategias para Adaptación al Cambio Climático',
              'weighing' => 9,
              ]);
              $idproject8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.7: Implementación de Estrategias para la Sostenibilidad Ambiental de la CGSM',
              'weighing' => 9,
              ]);
              $idproject9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.8: RESTAURACIÓN AMBIENTAL DE LOS CAÑOS EL BURRO Y EL SALADO COMO APORTE A LA RECUPERACIÓN DEL ECOSISTEMA DE LA CGSM, DEPARTAMENTO DEL MAGDALENA',
              'weighing' => 9,
              ]);
              $idproject10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram2,
              'project' => 'Proyecto No. 2.9: CONSERVACIÓN DE LA BIODIVERSIDADD EN EL MARCO DEL PROGRAMA GUARDABOSQUES CORAZÓN DEL MUNDO EN LA CUENCA MEDIA DEL RÍO FUNDACIÓN, DPTO. DEL MAGDALENA',
              'weighing' => 10,
              ]);
              $idproject11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.1: Orientación de los Modelos de Ocupación Territorial y Competitividad Municipal',
              'weighing' => 25,
              ]);
              $idproject12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.2 ADAPTACIÓN Y MITIGACIÓN AL CAMBIO CLIMÁTICO',
              'weighing' => 25,
              ]);
              $idproject13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.3: Formulación de Instrumentos para el Ordenamiento
            Ambiental',
              'weighing' => 25,
              ]);
              $idproject14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram3,
              'project' => 'Proyecto No. 3.4: Gestión de la Zona Costera, para Mitigación de Amenazas Marino-Costeras',
              'weighing' => 25,
              ]);
              $idproject15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.1: ADMINISTRACIÓN DEL RECURSO HÍDRICO PARA SU SOSTENIBILIDAD',
              'weighing' => 50,
              ]);
              $idproject16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram4,
              'project' => 'Proyecto No. 4.2: Gobernanza del Recurso Hídrico',
              'weighing' => 50,
              ]);
              $idproject17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 4.3 CONTROL Y MONITOREO DEL RECURSO HÍDRICO',
              'weighing' => 20,
              ]);
              $idproject18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.1 GENERACIÓN DE CONOCIMIENTO PARA LA PREVENCIÓN DEL RIESGO',
              'weighing' => 20,
              ]);
              $idproject19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.2:  Obras de Recuperación de Humedales y Cuerpos de Agua
            para la Mitigación del Riesgo',
              'weighing' => 20,
              ]);
              $idproject20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.3: RECUPERACION DE LA CAPACIDAD HIDRAULICA DEL RIO FRIO COMO ESTRATEGIA PARA LA MITIGACION DEL RIESGO DE INUNDACION EN EL MUNICIPIO DE ZONA BANANERA, ETAPA 3, ENTRE LAS ABSCISAS K17+300 HASTA K24 + 800',
              'weighing' => 20,
              ]);
              $idproject21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.4:RESTAURACIÓN AMBIENTAL DEL SECTOR OESTE DE LA CIENAGA GRANDE DE SANTA MARTA - CGSM, A TRAVES DE LA RECUPERACIÓN DE LA SECCIÓN HIDRAULICA DE LOS CUERPOS DE AGUA QUE LA ALIMENTAN',
              'weighing' => 20,
              ]);
              $idproject22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram5,
              'project' => 'Proyecto No. 5.5: CONFORMACIÓN DE MURO DE CONTENCIÓN Y RECUPERACIÓN DEL CAÑO SHILLER EN EL SECTOR DE LA CIÉNAGA DON ALONSO CORREGIMIENTO DE MEDIALUNA, MUNICIPIO DE PIVIJAY, DEPARTAMENTO DEL MAGDALENA',
              'weighing' => 20,
              ]);
              $idproject23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.1: FORTALECIMIENTO TÉCNICO Y LOGÍSTICO PARA EL CONTROL, SEGUIMIENTO MONITOREO AL USO, APROVECHAMIENTO Y MANEJO DE LOS RECURSOS NATURALES',
              'weighing' => 33,
              ]);
              $idproject24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.2: ASUNTOS AMBIENTALES Y URBANOS',
              'weighing' => 33,
              ]);
              $idproject25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram6,
              'project' => 'Proyecto No. 6.3: FORTALECIMIENTO DEL LABORATORIO AMBIENTAL',
              'weighing' => 34,
              ]);
              $idproject26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.1: GESTIÓN DE LA INFORMACIÓN ',
              'weighing' => 20,
              ]);
              $idproject27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.2: BUEN GOBIERNO ',
              'weighing' => 20,
              ]);
              $idproject28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.3: GESTIÓN DEL TALENTO HUMANO',
              'weighing' => 20,
              ]);
              $idproject29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.4: EFICIENCIA ADMINISTRATIVA ',
              'weighing' => 20,
              ]);
              $idproject30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('projects')->insert([
              'program_id' => $idprogram7,
              'project' => 'Proyecto No. 7.5: GESTIÓN FINANCIERA',
              'weighing' => 20,
              ]);
              $idproject31 = DB::getPdo()->lastInsertId();


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
                
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
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
					'weighing' => 19,
					]);
					$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective1,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 18,
					'goal_2' => 5,
					'goal_3' => 5,
					'goal_4' => 3,
					'goal_1_balance' => 18,
					'goal_2_balance' => 5,
					'goal_3_balance' => 5,
					'goal_4_balance' => 3,
					'total_goal' => 31,
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
					$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					'weighing' => 49,
					]);
					$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective2,
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
					$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 20000,
					'goal_2' => 20000,
					'goal_3' => 20000,
					'goal_4' => 20000,
					'goal_1_balance' => 20000,
					'goal_2_balance' => 20000,
					'goal_3_balance' => 20000,
					'goal_4_balance' => 20000,
					'total_goal' => 80000,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 19,
					]);
					$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 20,
					]);
					$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 20,
					]);
					$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective3,
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
					$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
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
					$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 25,
					]);
					$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
					'product_id' => null,
					'product_other' => 'Producto 4',
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
					'weighing' => 24,
					]);
					$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective4,
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
					$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 409364.8,
					'goal_2' => 130116,
					'goal_3' => 123387.5,
					'goal_4' => 127747.5,
					'goal_1_balance' => 409364.8,
					'goal_2_balance' => 130116,
					'goal_3_balance' => 123387.5,
					'goal_4_balance' => 127747.5,
					'total_goal' => 790615.8,
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
					'product_other' => 'Producto 2',
					'goal_1' => 168184.22,
					'goal_2' => 178238,
					'goal_3' => 171371.4,
					'goal_4' => 173341.43,
					'goal_1_balance' => 168184.22,
					'goal_2_balance' => 178238,
					'goal_3_balance' => 171371.4,
					'goal_4_balance' => 173341.43,
					'total_goal' => 691135.05,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 20,
					]);
					$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective5,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 155776,
					'goal_2' => 163363,
					'goal_3' => 170868,
					'goal_4' => 170868,
					'goal_1_balance' => 155776,
					'goal_2_balance' => 163363,
					'goal_3_balance' => 170868,
					'goal_4_balance' => 170868,
					'total_goal' => 660875,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 33,
					]);
					$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective6,
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
					$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'weighing' => 14,
					]);
					$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 14,
					]);
					$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 14,
					]);
					$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
					'product_id' => null,
					'product_other' => 'Producto 5',
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
					'weighing' => 14,
					]);
					$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 14,
					]);
					$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					'weighing' => 15,
					]);
					$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective7,
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
					$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective8,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 40,
					'goal_2' => 40,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 40,
					'goal_2_balance' => 40,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 80,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 33,
					]);
					$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 2,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 2,
					'goal_1_balance' => 2,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 2,
					'total_goal' => 10,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective9,
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
					$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective10,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 1,
					]);
					$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective11,
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
					$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'weighing' => 24,
					]);
					$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 0,
					'goal_2' => 10,
					'goal_3' => 10,
					'goal_4' => 10,
					'goal_1_balance' => 0,
					'goal_2_balance' => 10,
					'goal_3_balance' => 10,
					'goal_4_balance' => 10,
					'total_goal' => 30,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective12,
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
					'weighing' => 25,
					]);
					$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective13,
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
					$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 9,
					]);
					$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 2,
					'goal_2' => 2,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 2,
					'goal_2_balance' => 2,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 4,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 10,
					]);
					$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
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
					'weighing' => 10,
					]);
					$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 9',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
					'product_id' => null,
					'product_other' => 'Producto 10',
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
					'weighing' => 10,
					]);
					$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective14,
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
					$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
					'product_id' => null,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective15,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 3,
					'goal_2' => 9,
					'goal_3' => 0,
					'goal_4' => 12,
					'goal_1_balance' => 3,
					'goal_2_balance' => 9,
					'goal_3_balance' => 0,
					'goal_4_balance' => 12,
					'total_goal' => 24,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					'weighing' => 49,
					]);
					$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective16,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 1,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 1,
					'total_goal' => 3,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 50,
					]);
					$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective17,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					'weighing' => 49,
					]);
					$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
					
					
					
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 1,
					]);
					$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 2',
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
					$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 17,
					]);
					$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
					'product_other' => 'Producto 5',
					'goal_1' => 1,
					'goal_2' => 1,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 1,
					'goal_2_balance' => 1,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 2,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
					'product_id' => null,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 17,
					]);
					$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective18,
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
					$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 1',
					'goal_1' => 10,
					'goal_2' => 1,
					'goal_3' => 1,
					'goal_4' => 0,
					'goal_1_balance' => 10,
					'goal_2_balance' => 1,
					'goal_3_balance' => 1,
					'goal_4_balance' => 0,
					'total_goal' => 12,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 24,
					]);
					$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 10,
					'goal_3' => 10,
					'goal_4' => 10,
					'goal_1_balance' => 0,
					'goal_2_balance' => 10,
					'goal_3_balance' => 10,
					'goal_4_balance' => 10,
					'total_goal' => 30,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 6,
					'goal_2' => 12,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 6,
					'goal_2_balance' => 12,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 18,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
					'product_id' => null,
					'product_other' => 'Producto 4',
					'goal_1' => 1,
					'goal_2' => 6,
					'goal_3' => 6,
					'goal_4' => 6,
					'goal_1_balance' => 1,
					'goal_2_balance' => 6,
					'goal_3_balance' => 6,
					'goal_4_balance' => 6,
					'total_goal' => 19,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 25,
					]);
					$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective19,
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
					$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 50,
					]);
					$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
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
					$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective20,
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
					$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective21,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective22,
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
					'weighing' => 99,
					]);
					$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct97 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective23,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 99,
					]);
					$idobjectiveproduct98 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct99 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 14,
					]);
					$idobjectiveproduct100 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 14,
					]);
					$idobjectiveproduct101 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 14,
					]);
					$idobjectiveproduct102 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'weighing' => 14,
					]);
					$idobjectiveproduct103 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					'weighing' => 14,
					]);
					$idobjectiveproduct104 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					$idobjectiveproduct105 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
					'product_id' => null,
					'product_other' => 'Producto 7',
					'goal_1' => 100,
					'goal_2' => 4,
					'goal_3' => 4,
					'goal_4' => 4,
					'goal_1_balance' => 100,
					'goal_2_balance' => 4,
					'goal_3_balance' => 4,
					'goal_4_balance' => 4,
					'total_goal' => 112,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 15,
					]);
					$idobjectiveproduct106 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective24,
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
					$idobjectiveproduct107 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 33,
					]);
					$idobjectiveproduct108 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 10,
					'goal_3' => 10,
					'goal_4' => 10,
					'goal_1_balance' => 0,
					'goal_2_balance' => 10,
					'goal_3_balance' => 10,
					'goal_4_balance' => 10,
					'total_goal' => 30,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct109 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
					'product_id' => null,
					'product_other' => 'Producto 3',
					'goal_1' => 15,
					'goal_2' => 25,
					'goal_3' => 25,
					'goal_4' => 5,
					'goal_1_balance' => 15,
					'goal_2_balance' => 25,
					'goal_3_balance' => 25,
					'goal_4_balance' => 5,
					'total_goal' => 70,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct110 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective25,
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
					$idobjectiveproduct111 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct112 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 3,
					'goal_3' => 3,
					'goal_4' => 3,
					'goal_1_balance' => 0,
					'goal_2_balance' => 3,
					'goal_3_balance' => 3,
					'goal_4_balance' => 3,
					'total_goal' => 9,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct113 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective26,
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
					$idobjectiveproduct114 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct115 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
					'product_id' => null,
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
					'weighing' => 20,
					]);
					$idobjectiveproduct116 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
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
					$idobjectiveproduct117 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
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
					$idobjectiveproduct118 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
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
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 20,
					]);
					$idobjectiveproduct119 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
					'product_id' => null,
					'product_other' => 'Producto 5',
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
					'weighing' => 19,
					]);
					$idobjectiveproduct120 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective27,
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
					$idobjectiveproduct121 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 33,
					]);
					$idobjectiveproduct122 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
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
					$idobjectiveproduct123 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
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
					$idobjectiveproduct124 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective28,
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
					$idobjectiveproduct125 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					$idobjectiveproduct126 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					$idobjectiveproduct127 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 25,
					]);
					$idobjectiveproduct128 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					$idobjectiveproduct129 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective29,
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
					$idobjectiveproduct130 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 1',
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
					'weighing' => 17,
					]);
					$idobjectiveproduct131 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 0,
					'goal_2' => 25,
					'goal_3' => 25,
					'goal_4' => 50,
					'goal_1_balance' => 0,
					'goal_2_balance' => 25,
					'goal_3_balance' => 25,
					'goal_4_balance' => 50,
					'total_goal' => 100,
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
					'weighing' => 17,
					]);
					$idobjectiveproduct133 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
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
					'weighing' => 16,
					]);
					$idobjectiveproduct134 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective30,
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
					'product_other' => 'Producto 6',
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
					'weighing' => 16,
					]);
					$idobjectiveproduct136 = DB::getPdo()->lastInsertId();
					
					
					
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
					$idobjectiveproduct137 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
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
					'weighing' => 33,
					]);
					$idobjectiveproduct138 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
					'product_id' => null,
					'product_other' => 'Producto 2',
					'goal_1' => 30,
					'goal_2' => 0,
					'goal_3' => 0,
					'goal_4' => 0,
					'goal_1_balance' => 30,
					'goal_2_balance' => 0,
					'goal_3_balance' => 0,
					'goal_4_balance' => 0,
					'total_goal' => 30,
					'unit_goal' => 63,
					'indicator_national_id' => 791,
					'indicator_ods_id' => 882,
					'national_policy_id' => 867,
					'weighing' => 33,
					]);
					$idobjectiveproduct139 = DB::getPdo()->lastInsertId();
					
					
					
				DB::table('objective_products')->insert([
					'objective_id' => $idobjective31,
					'product_id' => null,
					'product_other' => 'Producto 3',
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
					$idobjectiveproduct140 = DB::getPdo()->lastInsertId();
					
					
					
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
					'weighing' => 1,
					]);
					$idobjectiveproduct141 = DB::getPdo()->lastInsertId();



                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct1,
                    'name' => 'ACT 1.1.1. Asesoría a seis (6) municipios y la Gobernación del Magdalena en la conformación de los Comités Interinstitucionales de Educación Ambiental CIDEA',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct2,
                    'name' => 'ACT 1.1.2. Apoyo a la implementación de veinte (20) PROCEDA, en el marco de los CIDEA conformados',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct3,
                    'name' => 'ACT 1.1.3. Apoyo a la  implementación de de veinte (20) PRAES, en el marco de los CIDEA conformados',
                    'goal_1' => 5,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 5,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct4,
                    'name' => 'ACT 1.1.4. Asesorar a los entes territoriales para formulación de los Planes municipales de educación ambiental',
                    'goal_1' => 18,
                    'goal_2' => 5,
                    'goal_3' => 5,
                    'goal_4' => 3,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct5,
                    'name' => 'ACT 1.1.5. Vincular doscientos (200) nuevos Promotores Ambientales y fortalecer los existentes',
                    'goal_1' => 50,
                    'goal_2' => 50,
                    'goal_3' => 50,
                    'goal_4' => 50,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective1,
                    'product_id' =>$idobjectiveproduct6,
                    'name' => 'ACT 1.1.6. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 850000000,
                    'weighing' => 15,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct7,
                    'name' => 'ACT. 1.2.1. Desarrollo de cuatro (4) campañas educativas enfocadas a la conservación de los recursos naturales',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct8,
                    'name' => 'ACT 1.2.2. Fomentar siete (7) estrategias para promover los intercambios culturales mediante el diálogo de saberes',
                    'goal_1' => 1,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective2,
                    'product_id' =>$idobjectiveproduct9,
                    'name' => 'ACT 1.2.3. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 30000000,
                    'weighing' => 34,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct10,
                    'name' => 'ACT 2.1.1. Declaración de 20.000 hectáreas de áreas protegidas regionales ',
                    'goal_1' => 20000,
                    'goal_2' => 20000,
                    'goal_3' => 20000,
                    'goal_4' => 20000,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct11,
                    'name' => 'ACT 2.1.2. Formulación de un (1) proyecto en el marco de la implementación del Plan de Manejo del Complejo Cenagoso Zárate, Malibú, Veladero',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct12,
                    'name' => 'ACT 2.1.3. Apoyar la implementación del Plan Operativo Anual del Sistema de Areas Marinas Protegidas-SAMP',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct13,
                    'name' => 'ACT 2.1.4. Apoyar la implementación del Plan Operativo anual del Sistema Regional de Areas Protegidas-SIRAP Caribe',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct14,
                    'name' => 'ACT 2.1.5. Formulación del Plan de Manejo de la Reserva Forestal Protectora Jirocasaca',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective3,
                    'product_id' =>$idobjectiveproduct15,
                    'name' => 'ACT 2.1.6. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 38500000,
                    'weighing' => 15,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct16,
                    'name' => 'ACT 2.2.1. Restauración de 120 hectáreas',
                    'goal_1' => 30,
                    'goal_2' => 30,
                    'goal_3' => 30,
                    'goal_4' => 30,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct17,
                    'name' => 'ACT 2.2.2. Elaboración de una (1) propuesta de áreas prioritarias para la conservacion y restauración, teniendo en cuenta los  planes de manejo formulados y propuestas de conectividad ecosistémica',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct18,
                    'name' => 'ACT 2.2.3. Implementación de una (1) estrategia de pagos por servicios ambientales',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct19,
                    'name' => 'ACT 2.2.4. Formulación de un (1) proyecto Guardabosques Corazón del Mundo',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective4,
                    'product_id' =>$idobjectiveproduct20,
                    'name' => 'ACT 2.2.5. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 3849056179,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct21,
                    'name' => 'ACT 2.3.1. Recuperación, conservación y mantenimiento mediante dragado en los caños principales que alimentan la Cienaga Grande de Santa Marta',
                    'goal_1' => 409364.8,
                    'goal_2' => 130116,
                    'goal_3' => 123387.5,
                    'goal_4' => 127747.5,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct22,
                    'name' => 'ACT 2.3.2. Obras para la recuperación y mantenimiento de caños principales y secundarios del complejo deltaico estuarino Ciénaga Grande de Santa Marta – CDE – CGSM',
                    'goal_1' => 168184.22,
                    'goal_2' => 178238,
                    'goal_3' => 171371.4,
                    'goal_4' => 173341.43,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct23,
                    'name' => 'ACT 2.3.3. Formulación de un proyecto de obras de recuperación hidráulica del caño Clarín Viejo (CGSM) como aporte al proceso de recuperación de la CGSM',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct24,
                    'name' => 'ACT 2.3.4. Monitoreo Ambiental Ciénaga Grande de Santa Marta en el ambito del proyecto',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct25,
                    'name' => 'ACT 2.3.5. Estudio Integral de la Ciénaga Grande de Santa Marta – Fase II',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective5,
                    'product_id' =>$idobjectiveproduct26,
                    'name' => 'ACT 2.3.6. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 18589023194.87,
                    'weighing' => 15,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct27,
                    'name' => 'ACT 2.4.1. Mantenimiento hidraulico de los cuerpos de agua en zona de influencia de la CGSM (ríos y caños)',
                    'goal_1' => 155776,
                    'goal_2' => 163363,
                    'goal_3' => 170868,
                    'goal_4' => 170868,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct28,
                    'name' => 'ACT 2.4.2. Monitoreo Ambiental Ciénaga Grande de Santa Marta en la desembocadura de los afluentes intervenidos',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct29,
                    'name' => 'ACT 2.4.3. Formulación de proyectos de recuperación hidráulica en la CGSM',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective6,
                    'product_id' =>$idobjectiveproduct30,
                    'name' => 'ACT 2.4.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct31,
                    'name' => 'ACT 2.5.1. Implementación de medidas de conservación y manejo  de especies amenazadas (Jaguar, Delfin e Hicotea)',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct32,
                    'name' => 'ACT 2.5.2. Implementación de medidas de conservación y manejo  de especies invasoras (Pez León)',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct33,
                    'name' => 'ACT 2.5.3. Atención y valoración de la fauna decomisada',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct34,
                    'name' => 'ACT 2.5.4. Fortalecimiento del CAVF y Vivero',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct35,
                    'name' => 'ACT 2.5.5. Fortalecimiento de los hogares de paso ',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct36,
                    'name' => 'ACT 2.5.6. Realización del Estudio de monitoreo de las poblaciones de pelicanos y vigilancia epidemiologicas',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 13,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct37,
                    'name' => 'ACT 2.5.7. Implementación de alianza interinstitucional para atención y disposición final de animales marinos',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective7,
                    'product_id' =>$idobjectiveproduct38,
                    'name' => 'ACT 2.5.8. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 442500000,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct39,
                    'name' => 'ACT 2.6.1. Implementación de estufas eficientes para cocción con leña y huertos leñeros',
                    'goal_1' => 40,
                    'goal_2' => 40,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct40,
                    'name' => 'ACT 2.6.2. Implementación de cuatro (4) Proyectos Agroforestales y/o Silvopastoriles en áreas priorizadas',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct41,
                    'name' => 'ACT 2.6.3. Implementación de acciones en el marco de la estrategia Cosecha de agua',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective8,
                    'product_id' =>$idobjectiveproduct42,
                    'name' => 'ACT 2.6.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 65048953,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct43,
                    'name' => 'ACT 2.7.1. Implementación de siete (7) proyectos productivos sostenibles, con enfoque de negocios verdes',
                    'goal_1' => 2,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 2,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective9,
                    'product_id' =>$idobjectiveproduct44,
                    'name' => 'ACT 2.7.3. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 636719016,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct45,
                    'name' => 'ACT 2.8.1. Restauración ambiental de los caños el burro y el salado como aporte a la recuperación del ecosistema de la CGSM',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective10,
                    'product_id' =>$idobjectiveproduct46,
                    'name' => 'ACT 2.8.2. asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 422252710,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct47,
                    'name' => 'ACT 2.9.1. Conservación de la Biodiversidad en el Marco del Programa GuardaBosques Corazón del Munndo en la cuenca media del Río Fundación, Magdalena',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective11,
                    'product_id' =>$idobjectiveproduct48,
                    'name' => 'ACT 2.9.2. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct49,
                    'name' => 'ACT 3.1.1. Definición de las Determinantes ambientales del Departamento',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct50,
                    'name' => 'ACT 3.1.2. Asesorar a los entes territoriales para la incorporación de las Determinantes y Asuntos ambientales en sus Instrumentos de Planificación Territorial ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct51,
                    'name' => 'ACT 3.1.3. Asesorar a los municipios para el ajuste de sus Instrumentos de Planificación Territorial, incluyendo la gestión del riesgo',
                    'goal_1' => 0,
                    'goal_2' => 10,
                    'goal_3' => 10,
                    'goal_4' => 10,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct52,
                    'name' => 'ACT 3.1.4. Participar en el Comité Interinstitucional de la CGSM y Mesa Territorial SNSM',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective12,
                    'product_id' =>$idobjectiveproduct53,
                    'name' => 'ACT 3.1.5. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct54,
                    'name' => 'ACT 3.2.1. Apoyar la formulación e implementación del Plan Departamental de Cambio Climático',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct55,
                    'name' => 'ACT 3.2.2. Apoyar la formulación e implementación del Plan de Acción del Nodo Regional de Cambio Climático',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct56,
                    'name' => 'ACT 3.2.3. Asesoría a los entes territoriales en la formulación de sus Planes de Adaptación y Mitigación al Cambio Climático',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective13,
                    'product_id' =>$idobjectiveproduct57,
                    'name' => 'ACT 3.2.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct58,
                    'name' => 'ACT 3.3.1. Ajuste y socialización del PGAR 2013-2027 Hacia un territorio saludable y sostenible',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct59,
                    'name' => 'ACT 3.3.2. Formulación de tres (3) Planes de Manejo y Ordenación de Cuencas Hidrográficas',
                    'goal_1' => 3,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 3,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct60,
                    'name' => 'ACT 3.3.3. Formulación de un (1) Plan de Ordenación del Recurso Hídrico (PORH)',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct61,
                    'name' => 'ACT 3.3.4. Formulación del Plan de Manejo y Ordenación de Acuíferos ',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct62,
                    'name' => 'ACT 3.3.5. Estudio Técnico para la Delimitación del páramo Sierra Nevada de Santa Marta',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct63,
                    'name' => 'ACT 3.3.6. Formulación del Plan de Ordenación Forestal',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct64,
                    'name' => 'ACT 3.3.7. Formulación de dos (2) Planes de Ordenación y Manejo de las Unidades Ambientales Costeras ',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct65,
                    'name' => 'ACT 3.3.8. Formulación del Plan de Manejo de Manglares',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct66,
                    'name' => 'ACT 3.3.9. Formulación del Plan de Manejo de Humedales',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 8,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct67,
                    'name' => 'ACT 3.3.10. Implementación de un convenio para apoyar el diseño del protocolo de consulta previa con los pueblos indígenas de la SNSM (Sentencia T-849 de 2014-Línea Negra)',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 9,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective14,
                    'product_id' =>$idobjectiveproduct68,
                    'name' => 'ACT 3.3.11. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 1070000000,
                    'weighing' => 9,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct69,
                    'name' => 'ACT 3.4.1. Implementación de medidas de adaptación basadas en ecosistemas para mitigar la erosión costera.',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct70,
                    'name' => 'ACT 3.4.2. Caracterización de corales y pastos marinos en el Departamento del Magdalena ',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct71,
                    'name' => 'ACT 3.4.3. Identificacion e Implementacion de estrategias de restauracion de ecosistemas marino-costeros',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective15,
                    'product_id' =>$idobjectiveproduct72,
                    'name' => 'ACT 3.4.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 50000000,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct73,
                    'name' => 'ACT 4.1.1. Reglamentación doce (12) de corrientes ',
                    'goal_1' => 3,
                    'goal_2' => 9,
                    'goal_3' => 0,
                    'goal_4' => 12,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct74,
                    'name' => 'ACT 4.1.2. Delimitación de las rondas hídricas en el departamento',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective16,
                    'product_id' =>$idobjectiveproduct75,
                    'name' => 'ACT 4.1.3. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 200000000,
                    'weighing' => 34,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct76,
                    'name' => 'ACT 4.2.1. Gestión para la inclusión del Brazo de Mompox en el proyecto de canalización del Río Magdalena',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct77,
                    'name' => 'ACT 4.2.2. Suscribir alianzas público-privadas para implementar la estrategia Custodia del Agua en el Departamento',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective17,
                    'product_id' =>$idobjectiveproduct78,
                    'name' => 'ACT 4.2.3. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 34,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct79,
                    'name' => 'ACT 4.3.1. Elaboración de inventario para la actualización de usuarios sujetos a tasa retributiva',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct80,
                    'name' => 'ACT 4.3.2. Determinación de Objetivos de calidad de aguas sueprficiales en corrientes menores del Departamento del Magdalena ',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct81,
                    'name' => 'ACT 4.3.3. Diseño de objetivos de calidad de aguas marinas',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct82,
                    'name' => 'ACT 4.3.4. Monitoreo de las corrientes para determinación de parámetros físicoquímicos relacionados con calidad del agua',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct83,
                    'name' => 'ACT 4.3.5. Ajuste de metas de cargas contaminantes para establecer el ajuste de factor regional (Resolucion 631 de 2015-MADS)',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct84,
                    'name' => 'ACT 4.3.6. Ajuste de metas de cargas contaminantes de 14 cuencas de objetivos de calidad para establecer el ajuste de factor regional (Resolucion 631 de 2015-MADS)',
                    'goal_1' => 14,
                    'goal_2' => 14,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 15,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective18,
                    'product_id' =>$idobjectiveproduct85,
                    'name' => 'ACT 4.3.7. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 1682862574,
                    'weighing' => 15,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct86,
                    'name' => 'ACT 5.1.1. Realizar estudios para generar conocimiento del riesgo en el Departamento',
                    'goal_1' => 10,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct87,
                    'name' => 'ACT 5.1.2. Brindar información a los entes territoriales para la toma de decisiones en sus planes de gestión del riesgo y adaptación al cambio climático.',
                    'goal_1' => 0,
                    'goal_2' => 10,
                    'goal_3' => 10,
                    'goal_4' => 10,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct88,
                    'name' => 'ACT 5.1.3. Medición de niveles en doce (12) cuerpos cenagosos del Departamento, con miras a la generación de alertas tempranas',
                    'goal_1' => 6,
                    'goal_2' => 12,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct89,
                    'name' => 'ACT 5.1.4. Implementar acciones en torno a la estrategia de corresponsabilidad y lineamientos para la prevención de incendios forestales',
                    'goal_1' => 1,
                    'goal_2' => 6,
                    'goal_3' => 6,
                    'goal_4' => 6,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective19,
                    'product_id' =>$idobjectiveproduct90,
                    'name' => 'ACT 5.1.5. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 116000000,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct91,
                    'name' => 'ACT 5.2.1. Formulación de proyectos de mitigación del riesgo en el Departamento.',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct92,
                    'name' => 'ACT 5.2.2. Recuperación,mitigacion y limpieza de caños y cienagas  para mejorar sus condiciones ambientales.',
                    'goal_1' => 2,
                    'goal_2' => 2,
                    'goal_3' => 2,
                    'goal_4' => 2,
                    'goal' => 0,
                    'weighing' => 33,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective20,
                    'product_id' =>$idobjectiveproduct93,
                    'name' => 'ACT 5.2.3 Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2112658521,
                    'weighing' => 34,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct94,
                    'name' => 'ACT 5.3.1. Construcción de obra para mitigar riesgos',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective21,
                    'product_id' =>$idobjectiveproduct95,
                    'name' => 'ACT 5.3.2. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct96,
                    'name' => 'ACT 5.4.1. Construcción de obra para mitigar riesgos',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective22,
                    'product_id' =>$idobjectiveproduct97,
                    'name' => 'ACT 5.4.2. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct98,
                    'name' => 'ACT 5.5.1. Construcción de obra para mitigar riesgos',
                    'goal_1' => 100,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective23,
                    'product_id' =>$idobjectiveproduct99,
                    'name' => 'ACT 5.5.2. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 211541822,
                    'weighing' => 50,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct100,
                    'name' => 'ACT 6.1.1. Gestión de los procesos sancionatorios',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct101,
                    'name' => 'ACT 6.1.2. Gestión de trámites ambientales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct102,
                    'name' => 'ACT 6.1.3. Seguimiento a autorizaciones ambientales',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct103,
                    'name' => 'ACT 6.1.4. Seguimiento a los PSMV',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 12,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct104,
                    'name' => 'ACT 6.1.5. Seguimiento a los PUEAA',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 13,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct105,
                    'name' => 'ACT 6.1.6. Seguimiento a los PGIRS',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 13,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct106,
                    'name' => 'ACT 6.1.7. Implementación de alianzas interinstitucionales para el ejercicio de la autoridad ambiental',
                    'goal_1' => 100,
                    'goal_2' => 4,
                    'goal_3' => 4,
                    'goal_4' => 4,
                    'goal' => 0,
                    'weighing' => 13,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective24,
                    'product_id' =>$idobjectiveproduct107,
                    'name' => 'ACT 6.1.8. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 2192532977,
                    'weighing' => 13,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct108,
                    'name' => 'ACT 6.2.1. Implementación de acciones priorizadas en el marco del Plan Nacional de residuos peligrosos y PCB',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct109,
                    'name' => 'ACT 6.2.2. Asesoria tecnica a los entes municipales en la Gestion Ambiental',
                    'goal_1' => 0,
                    'goal_2' => 10,
                    'goal_3' => 10,
                    'goal_4' => 10,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct110,
                    'name' => 'ACT 6.2.3. Implementación del programa regional de negocios verdes',
                    'goal_1' => 15,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 5,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective25,
                    'product_id' =>$idobjectiveproduct111,
                    'name' => 'ACT 6.2.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 80000000,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct112,
                    'name' => 'ACT 6.3.1. Operación del Sistema de Vigilancia de la Calidad del Aire',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct113,
                    'name' => 'ACT 6.3.2. mplementación del proyecto de cooperación internacional MADS-KOICA-CORPAMAG',
                    'goal_1' => 0,
                    'goal_2' => 3,
                    'goal_3' => 3,
                    'goal_4' => 3,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct114,
                    'name' => 'ACT 6.3.3. Formulación de un proyecto para la implementación del Laboratorio de Aguas de CORPAMAG',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective26,
                    'product_id' =>$idobjectiveproduct115,
                    'name' => 'ACT 6.3.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 862990517,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct116,
                    'name' => 'ACT 7.1.1. Diseño e implementación de un sistema de información ambiental y estadístico',
                    'goal_1' => 25,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 25,
                    'goal' => 0,
                    'weighing' => 16,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct117,
                    'name' => 'ACT 7.1.2. Reporte de información al  Sistema de información Ambiental de Colombia (SIAC)',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 16,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct118,
                    'name' => 'ACT 7.1.3. Formulación de un proyecto para la implementación de una red hidrometeorológica en la jurisdicción de Corpamag',
                    'goal_1' => 0,
                    'goal_2' => 1,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct119,
                    'name' => 'ACT 7.1.4. Implementación del Banco de Proyectos de la Corporación',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct120,
                    'name' => 'ACT 7.1.5. Estabelcer alianza interinstitucional para el fortalecimiento misional de la Corporación',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective27,
                    'product_id' =>$idobjectiveproduct121,
                    'name' => 'ACT 7.1.6. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 100000000,
                    'weighing' => 17,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct122,
                    'name' => 'ACT 7.2.1. Implementación de la estrategia de Gobierno en Línea ',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct123,
                    'name' => 'ACT 7.2.2. Formulación e implementación del Plan Anticorrupción',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity123 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct124,
                    'name' => 'ACT 7.2.3. Implementacion de estrategias de comunicación corporativa',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective28,
                    'product_id' =>$idobjectiveproduct125,
                    'name' => 'ACT 7.2.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 750424800,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct126,
                    'name' => 'ACT 7.3.1. Formulación y ejecución del plan estratégico de Talento Humano',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct127,
                    'name' => 'ACT 7.3.2. Formulación y ejecución  del Plan anual de vacantes',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct128,
                    'name' => 'ACT 7.3.3. Formulación y ejecución del Plan anual de capacitaciones',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct129,
                    'name' => 'ACT 7.3.4. Formulación y ejecución del Plan de Bienestar Social Laboral',
                    'goal_1' => 100,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective29,
                    'product_id' =>$idobjectiveproduct130,
                    'name' => 'ACT 7.3.5. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 20,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity130 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct131,
                    'name' => 'ACT 7.4.1. Sostenimiento del Sistema de Gestión Integrado bajo la Norma ISO 9001-GP 1000 y MECI',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity131 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct132,
                    'name' => 'ACT 7.4.2. Implementación del programa de Gestión Documental',
                    'goal_1' => 0,
                    'goal_2' => 25,
                    'goal_3' => 25,
                    'goal_4' => 50,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity132 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct133,
                    'name' => 'ACT 7.4.3. Implementación del Sistema de Gestión Ambiental bajo la Norma ISO 14001',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity133 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct134,
                    'name' => 'ACT 7.4.4. Implementación del Sistema de Seguridad y Salud en el Trabajo',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity134 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct135,
                    'name' => 'ACT 7.4.5. Acreditación del Componente de Calidad del Aire del Laboratorio Ambiental a través de la Norma ISO 17025',
                    'goal_1' => 1,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 14,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity135 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct136,
                    'name' => 'ACT 7.4.6. Fortalecimiento de la estructura física, tecnológica y modernización institucional',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 15,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity136 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective30,
                    'product_id' =>$idobjectiveproduct137,
                    'name' => 'ACT 7.4.7. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 251794323,
                    'weighing' => 15,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity137 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct138,
                    'name' => 'ACT 7.5.1. Gestión de Recursos Financieros Proyectados en el Presupuesto',
                    'goal_1' => 0,
                    'goal_2' => 100,
                    'goal_3' => 100,
                    'goal_4' => 100,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity138 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct139,
                    'name' => 'ACT 7.5.2. Asesorar a los entes territoriales en la implementación de la sobretasa al impuesto predial',
                    'goal_1' => 30,
                    'goal_2' => 0,
                    'goal_3' => 0,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity139 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct140,
                    'name' => 'ACT 7.5.3. Actualización y depuración de la base de datos de usuarios sujetos de cobro',
                    'goal_1' => 0,
                    'goal_2' => 0,
                    'goal_3' => 1,
                    'goal_4' => 0,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity140 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activities')->insert([
                    'objective_id' => $idobjective31,
                    'product_id' =>$idobjectiveproduct141,
                    'name' => 'ACT 7.5.4. Asignacion presupuestal',
                    'goal_1' => 1,
                    'goal_2' => 1,
                    'goal_3' => 1,
                    'goal_4' => 1,
                    'goal' => 0,
                    'weighing' => 25,
                    'geometry' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity141 = DB::getPdo()->lastInsertId();
					
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 11,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 18,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 50,
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
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 3,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 20000,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 100,
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
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>1,
						'value' => 57.5,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia16 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 149464,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 200330.65,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia37 = DB::getPdo()->lastInsertId(); 
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
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia48 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 43,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 






					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 13,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>1,
						'value' => 2,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>1,
						'value' => 57,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>1,
						'value' => 66,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>1,
						'value' => 57,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>1,
						'value' => 67,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>1,
						'value' => 4,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>1,
						'value' => 15,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>1,
						'value' => 25,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>1,
						'value' => 77,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>1,
						'value' => 97,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>1,
						'value' => 98,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity128,
						'year' =>1,
						'value' => 99,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity129,
						'year' =>1,
						'value' => 100,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity131,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 





					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity137,
						'year' =>1,
						'value' => 1,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity139,
						'year' =>1,
						'value' => 15,
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 5,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 50,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 20000,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 329320.19,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 204286.98,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 262983.78,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 72,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 17,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 2,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>2,
						'value' => 14,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 17,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 12,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>2,
						'value' => 7,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>2,
						'value' => 574285714285714,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>2,
						'value' => 6,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>2,
						'value' => 73,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>2,
						'value' => 99,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>2,
						'value' => 64,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>2,
						'value' => 16,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>2,
						'value' => 4,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>2,
						'value' => 17,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>2,
						'value' => 3,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>2,
						'value' => 95,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity118,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity128,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity129,
						'year' =>2,
						'value' => 100,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity132,
						'year' =>2,
						'value' => 25,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 




					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity137,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity138,
						'year' =>2,
						'value' => 94,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity141,
						'year' =>2,
						'value' => 1,
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 7,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 8,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 5,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 50,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 20000,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 6260371,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 253434.89,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 186543.96,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 1393400.57,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 4,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 10,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia335 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 2,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 








					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia357 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia358 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 30,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 6,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia369 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>3,
						'value' => 42,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>3,
						'value' => 75,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>3,
						'value' => 96,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>3,
						'value' => 68,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>3,
						'value' => 93,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia385 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>3,
						'value' => 5,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia386 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia387 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia388 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>3,
						'value' => 10,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia389 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia391 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>3,
						'value' => 3,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia395 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia396 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>3,
						'value' => 61,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia399 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia401 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia402 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>3,
						'value' => 92,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia403 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia404 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia405 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia407 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity128,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity129,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia409 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia410 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity131,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity132,
						'year' =>3,
						'value' => 25,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity136,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia416 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity137,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia417 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity138,
						'year' =>3,
						'value' => 100,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity140,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia420 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity141,
						'year' =>3,
						'value' => 1,
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia421 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia424 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 50,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia429 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 20000,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia436 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 125.63,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia437 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia439 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia441 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 242969.77,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia442 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 186041,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia443 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia445 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 221108.24,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia448 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia451 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia452 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia453 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia454 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia455 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia456 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia459 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia461 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia463 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia464 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia465 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia466 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia467 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia468 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia469 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 80,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia471 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 10,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia472 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia473 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia474 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia475 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia476 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia477 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia478 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 0.4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia479 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia480 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia482 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 0.2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia486 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 0.2,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia487 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia488 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia489 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia490 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia493 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 0.3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia494 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia496 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia497 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia499 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia502 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia503 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia506 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 10,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia508 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 6,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia510 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia511 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia512 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia513 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia514 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia516 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia518 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia520 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>4,
						'value' => 9,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia521 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>4,
						'value' => 89,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia522 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>4,
						'value' => 79,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia523 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia524 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity104,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia525 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity105,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia526 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity106,
						'year' =>4,
						'value' => 4,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia527 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity107,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia528 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity108,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia529 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity109,
						'year' =>4,
						'value' => 10,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia530 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity110,
						'year' =>4,
						'value' => 5,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia531 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity111,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia532 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity112,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia533 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity113,
						'year' =>4,
						'value' => 3,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia534 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity114,
						'year' =>4,
						'value' => 0.8,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia535 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity115,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia536 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity116,
						'year' =>4,
						'value' => 25,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia537 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity117,
						'year' =>4,
						'value' => 60,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia538 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity119,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia540 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity120,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia541 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity121,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia542 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity122,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia543 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity123,
						'year' =>4,
						'value' => 66,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia544 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity124,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia545 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity125,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia546 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity126,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia547 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity127,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia548 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity128,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia549 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity129,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia550 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity130,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia551 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity131,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia552 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity132,
						'year' =>4,
						'value' => 50,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia553 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity136,
						'year' =>4,
						'value' => 100,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia557 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity137,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia558 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity138,
						'year' =>4,
						'value' => 73,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia559 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity141,
						'year' =>4,
						'value' => 1,
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia562 = DB::getPdo()->lastInsertId(); 

          DB::table('financing_sources')->insert([
              'father_id' => 11,
              'code' => '1.1.1.1.1.1.1.1',
              'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
              'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
              'type_id' => 22,
              'final_level' => true,
              'group_id' => 15,
              ]);
              $idFuente1 = DB::getPdo()->lastInsertId();
            
					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();

            DB::table('financing_sources')->insert([
              'father_id' => 4,
              'code' => '1.1.1.1.3',
              'name' => 'Otros',
              'description' => 'Otros',
              'type_id' => 22,
              'final_level' => true,
              'group_id' => 15,
              ]);
              $idFuente3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.5.3',
						'name' => 'Tasa Movilización Forestal',
						'description' => 'Tasa Movilización Forestal',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.3',
						'name' => 'Seguimiento',
						'description' => 'Seguimiento',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						 
						
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
             
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 250,
						'code' => '1.2.7.4',
						'name' => 'Otros recursos del balance',
						'description' => 'Otros recursos del balance',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 118,
						'code' => '1.1.2.5.1.1.2',
						'name' => 'Aportes de la Nación para Inversión',
						'description' => 'Aportes de la Nación para Inversión',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 15,
						]);
						$idFuente18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 10299720559.7003,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 10299720559.7003,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 6791659389.01,
						'functioning_percentage' => 11,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 89,
						'functioning' => 747082532.7911,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 6044576856.2189,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 472670243.47,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 472670243.47,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 8115294882,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 8115294882,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 1890127350.29,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1890127350.29,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 544618416.32,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 490156574.688,
						'debt_service' => 0,
						'fund' => 54461841.632,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 64011501.11,
						'functioning_percentage' => 30,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 60,
						'functioning' => 19203450.333,
						'debt_service' => 0,
						'fund' => 6401150.111,
						'investment' => 38406900.666,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 5692068,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 569206.8,
						'investment' => 5122861.2,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 6365400,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 5728860,
						'debt_service' => 0,
						'fund' => 636540,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 176820131.89,
						'functioning_percentage' => 75.4669,
						'debt_service_percentage' => 0,
						'fund_percentage' => 9.271,
						'investment_percentage' => 15.2621,
						'functioning' => 133440672.113294,
						'debt_service' => 1,
						'fund' => 16392994.4275219,
						'investment' => 26986465.3491837,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 2084997.07,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2084997.07,
						'debt_service' => 2,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 154430487,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 15443048.7,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 138987438.3,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 4110204851,
						'functioning_percentage' => 95,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5,
						'investment_percentage' => 0,
						'functioning' => 3904694608.45,
						'debt_service' => 0,
						'fund' => 205510242.55,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
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
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 248700000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 248700000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 3762329355,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 3762329355,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 24613453548,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 24613453548,
						'year' => 1,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 13410843113,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 13410843113,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 9759089309,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9759089309,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 486850350,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 486850350,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 5842656443,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 5842656443,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 183688117,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 183688117,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 267761878,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 240985690.2,
						'debt_service' => 0,
						'fund' => 26776187.8,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 8564942,
						'functioning_percentage' => 30,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 60,
						'functioning' => 2569482.6,
						'debt_service' => 0,
						'fund' => 856494.2,
						'investment' => 5138965.2,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 65931846,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 6593184.6,
						'investment' => 59338661.4,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 5862829,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 5276546.1,
						'debt_service' => 0,
						'fund' => 586282.9,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 180000000,
						'functioning_percentage' => 64.666,
						'debt_service_percentage' => 0,
						'fund_percentage' => 3.875,
						'investment_percentage' => 31.459,
						'functioning' => 116398800,
						'debt_service' => 0,
						'fund' => 6975000,
						'investment' => 56626200,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 2147548,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2147548,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 230494403,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 23049440.3,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 207444962.7,
						'year' => 2,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 10111751998,
						'functioning_percentage' => 86,
						'debt_service_percentage' => 0,
						'fund_percentage' => 2,
						'investment_percentage' => 12,
						'functioning' => 8696106718.28,
						'debt_service' => 0,
						'fund' => 202235039.96,
						'investment' => 1213410239.76,
						'year' => 2,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 439407118,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 439407118,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 142800000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 142800000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 4120933000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4120933000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 39325317163,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 39325317163,
						'year' => 2,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 12333459664.0857,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 12333459664.0857,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 10051861987.9301,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 10051861987.9301,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 639326438.4,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 639326438.4,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 7523307137.29037,
						'functioning_percentage' => 41,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 59,
						'functioning' => 3084555926.28905,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4438751211.00132,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 247226672.88,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 247226672.88,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 404102949.83,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 363692654.847,
						'debt_service' => 0,
						'fund' => 40410294.983,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 25264297.32,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 22737867.588,
						'debt_service' => 0,
						'fund' => 2526429.732,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 67909801.38,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 61118821.242,
						'debt_service' => 0,
						'fund' => 6790980.138,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 1431906,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1288715.4,
						'debt_service' => 0,
						'fund' => 143190.6,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 180000000,
						'functioning_percentage' => 73.012,
						'debt_service_percentage' => 0,
						'fund_percentage' => 24.814,
						'investment_percentage' => 2.17400000000001,
						'functioning' => 131421600,
						'debt_service' => 0,
						'fund' => 44665200,
						'investment' => 3913200.00000001,
						'year' => 3,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 2211974.44,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2211974.44,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 424135091.26,
						'functioning_percentage' => 20,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 80,
						'functioning' => 84827018.252,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 339308073.008,
						'year' => 3,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 5486014494,
						'functioning_percentage' => 96,
						'debt_service_percentage' => 0,
						'fund_percentage' => 4,
						'investment_percentage' => 0,
						'functioning' => 5266573914.24,
						'debt_service' => 0,
						'fund' => 219440579.76,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 372300000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 372300000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 413461453,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 413461453,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 4322244000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4322244000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente18,
						'value' => 1820685758,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1820685758,
						'year' => 3,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 20691440569,
						'functioning_percentage' => 6,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 94,
						'functioning' => 1241486434.14,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 19449954134.86,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 12000168657,
						'functioning_percentage' => 5,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 95,
						'functioning' => 600008432.85,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 11400160224.15,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 660424211,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 660424211,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 4070990517,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4070990517,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 938879697,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 938879697,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 520071554,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 468064398.6,
						'debt_service' => 0,
						'fund' => 52007155.4,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 26098019,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 23488217.1,
						'debt_service' => 0,
						'fund' => 2609801.9,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 70150824,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 63135741.6,
						'debt_service' => 0,
						'fund' => 7015082.4,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 2125790,
						'functioning_percentage' => 90,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 0,
						'functioning' => 1913211,
						'debt_service' => 0,
						'fund' => 212579,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 320000000,
						'functioning_percentage' => 53.2875,
						'debt_service_percentage' => 0,
						'fund_percentage' => 5.851,
						'investment_percentage' => 40.8615,
						'functioning' => 170520000,
						'debt_service' => 0,
						'fund' => 18723200,
						'investment' => 130756800,
						'year' => 4,
						]);
						$idPlan62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 103300,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 103300,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 271520835,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 271520835,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan64 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 7231571666,
						'functioning_percentage' => 97,
						'debt_service_percentage' => 0,
						'fund_percentage' => 3,
						'investment_percentage' => 0,
						'functioning' => 7014624516.02,
						'debt_service' => 0,
						'fund' => 216947149.98,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan65 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 1109640698,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 1109640698,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan66 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 447955946,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 447955946,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan67 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 4493500000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 4493500000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan68 = DB::getPdo()->lastInsertId();
						 
              DB::table('implementations')->insert([
                'p_a_i_s_id'=>$idpai1,
                ]);
                $idImplementation1 = DB::getPdo()->lastInsertId();


					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 14007428131,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 8524002750,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 481431519,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 5694343626,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 130760872,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 348028444,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 59678366,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2826690,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 10666212,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2678000,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 664620,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 236812185,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 4110204851,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 150000000,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 248700000,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3689822645,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 12606223599,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 9906694650,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 737482952,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3112992404,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 370923262,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 414980491,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 35709394,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 66091780,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1653300,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 303809812,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 456437814,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 10111751998,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 412139034,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 142800000,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 3967625214,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4194041914.53,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 12704709691.6,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 11253112400,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 683541152.46,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 3383253984,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1074984261.96,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 552916622.78,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 45748069.09,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 25703361.5,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1993600,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 132650,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 251515548.85,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 5486014494,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 379515699.37,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 413461453,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4304906833.78,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 18924709065.65,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 11580670500,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 700063331.91,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 3768347821,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 497576022.6,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 925849813.67,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 53813258.68,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 37939963.24,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 5050500,
						'financial_plans_id' => $idPlan61,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo61 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 0,
						'financial_plans_id' => $idPlan62,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo62 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 145200,
						'financial_plans_id' => $idPlan63,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo63 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 328984415.05,
						'financial_plans_id' => $idPlan64,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo64 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 7231571665.62,
						'financial_plans_id' => $idPlan65,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo65 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 623108586.96,
						'financial_plans_id' => $idPlan66,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo66 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 447955946,
						'financial_plans_id' => $idPlan67,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo67 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 4364218115,
						'financial_plans_id' => $idPlan68,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo68 = DB::getPdo()->lastInsertId();
      
 
					 DB::table('cost_sources')->insert([
						'father_id' => 2,
						'code' => '2.1.1',
						'name' => 'GASTOS DE PERSONAL',
						'description' => 'GASTOS DE PERSONAL',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 15,
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
						'group_id' => 15,
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
						'group_id' => 15,
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
						'group_id' => 15,
						]);
						$idFuenteGasto4 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('cost_sources')->insert([
						'father_id' => 16,
						'code' => '2.1.3.2.1.1',
						'name' => 'Mesadas pensionales (de pensiones)',
						'description' => 'Mesadas pensionales (de pensiones)',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 15,
						]);
						$idFuenteGasto5 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('cost_sources')->insert([
						'father_id' => 19,
						'code' => '2.1.3.3.1',
						'name' => 'Comisiones y otros gastos',
						'description' => 'Comisiones y otros gastos',
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'group_id' => 15,
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
						'group_id' => 15,
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
						'group_id' => 15,
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
						'group_id' => 15,
						]);
						$idFuenteGasto9 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 4886403692.76,
						'value_comitted' => 4611380199,
						'value_paid' => 4387396333,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto1 = DB::getPdo()->lastInsertId();
						
						 

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 578105817.71,
						'value_comitted' => 290043255,
						'value_paid' => 142203230,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto2 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 2314369007,
						'value_comitted' => 2216748100,
						'value_paid' => 1831716286,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto3 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 244602186.02,
						'value_comitted' => 110918612,
						'value_paid' => 110918612,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto4 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 25048290.38,
						'value_comitted' => 25048290.38,
						'value_paid' => 25048290,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto5 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 283971987,
						'value_comitted' => 118743946,
						'value_paid' => 105349864,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto6 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 14469937.78,
						'value_comitted' => 14469938,
						'value_paid' => 14469938,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto7 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 3447270,
						'value_comitted' => 3447270,
						'value_paid' => 3447270,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto8 = DB::getPdo()->lastInsertId();
						 
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
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto9 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 3678975795,
						'value_comitted' => 3633649700,
						'value_paid' => 3633649700,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto10 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 67078560,
						'value_comitted' => 67073560,
						'value_paid' => 42536779,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 2630000,
						'value_comitted' => 0,
						'value_paid' => 0,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto12 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 1,
						'value_bugeted' => 13645000,
						'value_comitted' => 13645000,
						'value_paid' => 13645000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 5873220883,
						'value_comitted' => 5624697272,
						'value_paid' => 4895191479,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto14 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 606529740,
						'value_comitted' => 502868735,
						'value_paid' => 407802944,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto15 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 3186162897,
						'value_comitted' => 2756965291,
						'value_paid' => 2269401281,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 340589196,
						'value_comitted' => 133116213,
						'value_paid' => 133116213,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto17 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 36744617,
						'value_comitted' => 36744617,
						'value_paid' => 36744617,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto18 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 244021463,
						'value_comitted' => 203958417,
						'value_paid' => 176145133,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto19 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 15749636,
						'value_comitted' => 14755459,
						'value_paid' => 14755459,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto20 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 262800003,
						'value_comitted' => 0,
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
						'group_id' => 15,
						]);
						$idGasto21 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 17482392,
						'value_comitted' => 16789080,
						'value_paid' => 16789080,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 4040933000,
						'value_comitted' => 4018294303,
						'value_paid' => 3952946277,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto23 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 63720000,
						'value_comitted' => 35999994,
						'value_paid' => 25999994,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto24 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 2635000,
						'value_comitted' => 2635000,
						'value_paid' => 2635000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto25 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 2,
						'value_bugeted' => 13645000,
						'value_comitted' => 13645000,
						'value_paid' => 13645000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto26 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 6721668729.99031,
						'value_comitted' => 6585809097,
						'value_paid' => 6175676571,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto27 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 352768938.19,
						'value_comitted' => 305657258,
						'value_paid' => 244327745,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto28 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 3375574475.86,
						'value_comitted' => 3187921180,
						'value_paid' => 2772230189,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto29 = DB::getPdo()->lastInsertId();
						
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 165305003,
						'value_comitted' => 111382514,
						'value_paid' => 111364024,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto30 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 38698727.67,
						'value_comitted' => 38698728,
						'value_paid' => 38698728,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto31 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 313977404.025,
						'value_comitted' => 276453541,
						'value_paid' => 247572615,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto32 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 16973382.7172,
						'value_comitted' => 15406381,
						'value_paid' => 15406381,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 19754340,
						'value_comitted' => 19754340,
						'value_paid' => 19754340,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 4241754000,
						'value_comitted' => 4241744000,
						'value_paid' => 4241744000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto35 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 63720000,
						'value_comitted' => 63720000,
						'value_paid' => 63720000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 2715000,
						'value_comitted' => 2715000,
						'value_paid' => 2715000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto37 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 3,
						'value_bugeted' => 14055000,
						'value_comitted' => 14055000,
						'value_paid' => 14055000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 8593959163,
						'value_comitted' => 8382565510,
						'value_paid' => 7895103248,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto39 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 446181865,
						'value_comitted' => 413774913,
						'value_paid' => 368656174,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 3753659132,
						'value_comitted' => 3636729623,
						'value_paid' => 3265074284,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto3,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto41 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 151634308,
						'value_comitted' => 149879916,
						'value_paid' => 149879916,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto42 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 26660200,
						'value_comitted' => 26660200,
						'value_paid' => 26660200,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto43 = DB::getPdo()->lastInsertId();
						
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 297515339,
						'value_comitted' => 270750785,
						'value_paid' => 209998270,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => FALSE,
						'compensation' => TRUE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto4,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto44 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 18280333,
						'value_comitted' => 15896306,
						'value_paid' => 15896306,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto5,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto45 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 828116.089999974,
						'value_comitted' => 828116,
						'value_paid' => 828116,
						'own' => TRUE,
						'nation' => FALSE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto7,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto46 = DB::getPdo()->lastInsertId();
						 
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
						'cost_sources_id' => $idFuenteGasto6,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 4412600000,
						'value_comitted' => 4408540289,
						'value_paid' => 4408540289,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto1,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto48 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 63700000,
						'value_comitted' => 63700000,
						'value_paid' => 60515000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto2,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 2700000,
						'value_comitted' => 2700000,
						'value_paid' => 2700000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto9,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto50 = DB::getPdo()->lastInsertId();

					 DB::table('financial_costs')->insert([
						'year' => 4,
						'value_bugeted' => 14500000,
						'value_comitted' => 14500000,
						'value_paid' => 14500000,
						'own' => FALSE,
						'nation' => TRUE,
						'royalties' => FALSE,
						'funds' => FALSE,
						'functioning' => TRUE,
						'compensation' => FALSE,
						'debt_service' => FALSE,
						'cost_sources_id' => $idFuenteGasto8,
						'p_a_i_id' => $idpai1,
						'group_id' => 15,
						]);
						$idGasto51 = DB::getPdo()->lastInsertId();
						

            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity6,
              'source_id' =>$idPlan1,
              'value' => 273938855,
              'goal' => 0,
              'evidence_balance' => 273938855,
              'age' => 1,
              ]);
              $idactivitySource1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity9,
              'source_id' =>$idPlan1,
              'value' => 197000000,
              'goal' => 0,
              'evidence_balance' => 197000000,
              'age' => 1,
              ]);
              $idactivitySource2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity15,
              'source_id' =>$idPlan1,
              'value' => 240000000,
              'goal' => 0,
              'evidence_balance' => 240000000,
              'age' => 1,
              ]);
              $idactivitySource3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity26,
              'source_id' =>$idPlan1,
              'value' => 6399549558,
              'goal' => 0,
              'evidence_balance' => 6399549558,
              'age' => 1,
              ]);
              $idactivitySource5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity38,
              'source_id' =>$idPlan1,
              'value' => 193120000,
              'goal' => 0,
              'evidence_balance' => 193120000,
              'age' => 1,
              ]);
              $idactivitySource6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity42,
              'source_id' =>$idPlan1,
              'value' => 153370064,
              'goal' => 0,
              'evidence_balance' => 153370064,
              'age' => 1,
              ]);
              $idactivitySource7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity68,
              'source_id' =>$idPlan1,
              'value' => 760063441,
              'goal' => 0,
              'evidence_balance' => 760063441,
              'age' => 1,
              ]);
              $idactivitySource9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity85,
              'source_id' =>$idPlan1,
              'value' => 734219554.700314,
              'goal' => 0,
              'evidence_balance' => 734219554.700314,
              'age' => 1,
              ]);
              $idactivitySource12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity93,
              'source_id' =>$idPlan2,
              'value' => 308100000,
              'goal' => 0,
              'evidence_balance' => 308100000,
              'age' => 1,
              ]);
              $idactivitySource14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity95,
              'source_id' =>$idPlan2,
              'value' => 4436987375.91921,
              'goal' => 0,
              'evidence_balance' => 4436987375.91921,
              'age' => 1,
              ]);
              $idactivitySource15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity97,
              'source_id' =>$idPlan4,
              'value' => 7144807553.91921,
              'goal' => 0,
              'evidence_balance' => 7144807553.91921,
              'age' => 1,
              ]);
              $idactivitySource16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity107,
              'source_id' =>$idPlan17,
              'value' => 488430040,
              'goal' => 0,
              'evidence_balance' => 488430040,
              'age' => 1,
              ]);
              $idactivitySource17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity111,
              'source_id' =>$idPlan17,
              'value' => 55000000,
              'goal' => 0,
              'evidence_balance' => 55000000,
              'age' => 1,
              ]);
              $idactivitySource18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity115,
              'source_id' =>$idPlan17,
              'value' => 598107841,
              'goal' => 0,
              'evidence_balance' => 598107841,
              'age' => 1,
              ]);
              $idactivitySource19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity125,
              'source_id' =>$idPlan17,
              'value' => 138949995,
              'goal' => 0,
              'evidence_balance' => 138949995,
              'age' => 1,
              ]);
              $idactivitySource21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity137,
              'source_id' =>$idPlan17,
              'value' => 198580320,
              'goal' => 0,
              'evidence_balance' => 198580320,
              'age' => 1,
              ]);
              $idactivitySource23 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity95,
                'source_id' =>$idPlan4,
                'value' => 970487328.080787,
                'goal' => 0,
                'evidence_balance' => 970487328.080787,
                'age' => 1,
                ]);
                $idactivitySource25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity97,
                'source_id' =>$idPlan17,
                'value' => 12061171290.0808,
                'goal' => 0,
                'evidence_balance' => 12061171290.0808,
                'age' => 1,
                ]);
                $idactivitySource26 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia6,
                  'activity_source_id' =>$idactivitySource1,
                  'value' => 257554402,
                  ]);
                  $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia9,
                  'activity_source_id' =>$idactivitySource2,
                  'value' => 91560000,
                  ]);
                  $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia15,
                  'activity_source_id' =>$idactivitySource3,
                  'value' => 50000000,
                  ]);
                  $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia26,
                  'activity_source_id' =>$idactivitySource5,
                  'value' => 3776580576,
                  ]);
                  $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia38,
                  'activity_source_id' =>$idactivitySource6,
                  'value' => 188110000,
                  ]);
                  $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia42,
                  'activity_source_id' =>$idactivitySource7,
                  'value' => 101050000,
                  ]);
                  $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia68,
                  'activity_source_id' =>$idactivitySource9,
                  'value' => 508322000,
                  ]);
                  $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia85,
                  'activity_source_id' =>$idactivitySource12,
                  'value' => 92287634,
                  ]);
                  $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia93,
                  'activity_source_id' =>$idactivitySource14,
                  'value' => 119748634,
                  ]);
                  $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia95,
                  'activity_source_id' =>$idactivitySource15,
                  'value' => 4436987375.91921,
                  ]);
                  $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia97,
                  'activity_source_id' =>$idactivitySource16,
                  'value' => 7144807553.91921,
                  ]);
                  $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia107,
                  'activity_source_id' =>$idactivitySource17,
                  'value' => 371164001,
                  ]);
                  $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia111,
                  'activity_source_id' =>$idactivitySource18,
                  'value' => 40000000,
                  ]);
                  $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia115,
                  'activity_source_id' =>$idactivitySource19,
                  'value' => 468634243,
                  ]);
                  $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia125,
                  'activity_source_id' =>$idactivitySource21,
                  'value' => 128915524,
                  ]);
                  $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia137,
                  'activity_source_id' =>$idactivitySource23,
                  'value' => 164897860,
                  ]);
                  $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia95,
                    'activity_source_id' =>$idactivitySource25,
                    'value' => 970487328.080787,
                    ]);
                    $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia97,
                    'activity_source_id' =>$idactivitySource26,
                    'value' => 12052061003.0808,
                    ]);
                    $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' =>$idPlan18,
                      'value' => 530000000,
                      'goal' => 0,
                      'evidence_balance' => 530000000,
                      'age' => 2,
                      ]);
                      $idactivitySource27 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity9,
                      'source_id' =>$idPlan18,
                      'value' => 240000000,
                      'goal' => 0,
                      'evidence_balance' => 240000000,
                      'age' => 2,
                      ]);
                      $idactivitySource28 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity15,
                      'source_id' =>$idPlan18,
                      'value' => 495000000,
                      'goal' => 0,
                      'evidence_balance' => 495000000,
                      'age' => 2,
                      ]);
                      $idactivitySource29 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity20,
                      'source_id' =>$idPlan18,
                      'value' => 1118456771,
                      'goal' => 0,
                      'evidence_balance' => 1118456771,
                      'age' => 2,
                      ]);
                      $idactivitySource30 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity26,
                      'source_id' =>$idPlan18,
                      'value' => 10562491694,
                      'goal' => 0,
                      'evidence_balance' => 10562491694,
                      'age' => 2,
                      ]);
                      $idactivitySource31 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity30,
                      'source_id' =>$idPlan18,
                      'value' => 464894648,
                      'goal' => 0,
                      'evidence_balance' => 464894648,
                      'age' => 2,
                      ]);
                      $idactivitySource32 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity38,
                      'source_id' =>$idPlan19,
                      'value' => 605000000,
                      'goal' => 0,
                      'evidence_balance' => 605000000,
                      'age' => 2,
                      ]);
                      $idactivitySource34 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity42,
                      'source_id' =>$idPlan19,
                      'value' => 309338661,
                      'goal' => 0,
                      'evidence_balance' => 309338661,
                      'age' => 2,
                      ]);
                      $idactivitySource35 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity44,
                      'source_id' =>$idPlan19,
                      'value' => 629086190,
                      'goal' => 0,
                      'evidence_balance' => 629086190,
                      'age' => 2,
                      ]);
                      $idactivitySource36 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity46,
                      'source_id' =>$idPlan19,
                      'value' => 4901904600,
                      'goal' => 0,
                      'evidence_balance' => 4901904600,
                      'age' => 2,
                      ]);
                      $idactivitySource37 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity53,
                      'source_id' =>$idPlan35,
                      'value' => 400000000,
                      'goal' => 0,
                      'evidence_balance' => 400000000,
                      'age' => 2,
                      ]);
                      $idactivitySource38 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity68,
                      'source_id' =>$idPlan35,
                      'value' => 1134589219,
                      'goal' => 0,
                      'evidence_balance' => 1134589219,
                      'age' => 2,
                      ]);
                      $idactivitySource40 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity72,
                      'source_id' =>$idPlan35,
                      'value' => 270000000,
                      'goal' => 0,
                      'evidence_balance' => 270000000,
                      'age' => 2,
                      ]);
                      $idactivitySource41 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity75,
                      'source_id' =>$idPlan35,
                      'value' => 290985690,
                      'goal' => 0,
                      'evidence_balance' => 290985690,
                      'age' => 2,
                      ]);
                      $idactivitySource42 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity85,
                      'source_id' =>$idPlan35,
                      'value' => 725596973,
                      'goal' => 0,
                      'evidence_balance' => 725596973,
                      'age' => 2,
                      ]);
                      $idactivitySource44 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity90,
                      'source_id' =>$idPlan35,
                      'value' => 370000000,
                      'goal' => 0,
                      'evidence_balance' => 370000000,
                      'age' => 2,
                      ]);
                      $idactivitySource45 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity93,
                      'source_id' =>$idPlan35,
                      'value' => 676950000,
                      'goal' => 0,
                      'evidence_balance' => 676950000,
                      'age' => 2,
                      ]);
                      $idactivitySource46 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity95,
                      'source_id' =>$idPlan35,
                      'value' => 5453134704,
                      'goal' => 0,
                      'evidence_balance' => 5453134704,
                      'age' => 2,
                      ]);
                      $idactivitySource47 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity97,
                      'source_id' =>$idPlan35,
                      'value' => 898122718,
                      'goal' => 0,
                      'evidence_balance' => 898122718,
                      'age' => 2,
                      ]);
                      $idactivitySource48 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity107,
                      'source_id' =>$idPlan22,
                      'value' => 1472022326,
                      'goal' => 0,
                      'evidence_balance' => 1472022326,
                      'age' => 2,
                      ]);
                      $idactivitySource50 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity111,
                      'source_id' =>$idPlan22,
                      'value' => 140000000,
                      'goal' => 0,
                      'evidence_balance' => 140000000,
                      'age' => 2,
                      ]);
                      $idactivitySource51 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity115,
                      'source_id' =>$idPlan22,
                      'value' => 752841889,
                      'goal' => 0,
                      'evidence_balance' => 752841889,
                      'age' => 2,
                      ]);
                      $idactivitySource52 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity121,
                      'source_id' =>$idPlan22,
                      'value' => 254000000,
                      'goal' => 0,
                      'evidence_balance' => 254000000,
                      'age' => 2,
                      ]);
                      $idactivitySource53 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity125,
                      'source_id' =>$idPlan22,
                      'value' => 542911712,
                      'goal' => 0,
                      'evidence_balance' => 542911712,
                      'age' => 2,
                      ]);
                      $idactivitySource54 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity130,
                      'source_id' =>$idPlan22,
                      'value' => 224000000,
                      'goal' => 0,
                      'evidence_balance' => 224000000,
                      'age' => 2,
                      ]);
                      $idactivitySource55 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity137,
                      'source_id' =>$idPlan22,
                      'value' => 790000000,
                      'goal' => 0,
                      'evidence_balance' => 790000000,
                      'age' => 2,
                      ]);
                      $idactivitySource56 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity30,
                        'source_id' =>$idPlan19,
                        'value' => 3313759858,
                        'goal' => 0,
                        'evidence_balance' => 3313759858,
                        'age' => 2,
                        ]);
                        $idactivitySource57 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity46,
                        'source_id' =>$idPlan35,
                        'value' => 29015937859,
                        'goal' => 0,
                        'evidence_balance' => 29015937859,
                        'age' => 2,
                        ]);
                        $idactivitySource58 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity97,
                        'source_id' =>$idPlan22,
                        'value' => 1517949503,
                        'goal' => 0,
                        'evidence_balance' => 1517949503,
                        'age' => 2,
                        ]);
                        $idactivitySource59 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia145,
                          'activity_source_id' =>$idactivitySource27,
                          'value' => 510206950,
                          ]);
                          $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia148,
                          'activity_source_id' =>$idactivitySource28,
                          'value' => 239906664,
                          ]);
                          $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia154,
                          'activity_source_id' =>$idactivitySource29,
                          'value' => 465900199,
                          ]);
                          $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia159,
                          'activity_source_id' =>$idactivitySource30,
                          'value' => 60452626,
                          ]);
                          $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia165,
                          'activity_source_id' =>$idactivitySource31,
                          'value' => 10559725249,
                          ]);
                          $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia169,
                          'activity_source_id' =>$idactivitySource32,
                          'value' => 464894648,
                          ]);
                          $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia177,
                          'activity_source_id' =>$idactivitySource34,
                          'value' => 381440137,
                          ]);
                          $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia181,
                          'activity_source_id' =>$idactivitySource35,
                          'value' => 140000000,
                          ]);
                          $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia183,
                          'activity_source_id' =>$idactivitySource36,
                          'value' => 621500000,
                          ]);
                          $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia185,
                          'activity_source_id' =>$idactivitySource37,
                          'value' => 4901904600,
                          ]);
                          $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia192,
                          'activity_source_id' =>$idactivitySource38,
                          'value' => 400000000,
                          ]);
                          $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia207,
                          'activity_source_id' =>$idactivitySource40,
                          'value' => 1134589219,
                          ]);
                          $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia211,
                          'activity_source_id' =>$idactivitySource41,
                          'value' => 150266688,
                          ]);
                          $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia214,
                          'activity_source_id' =>$idactivitySource42,
                          'value' => 40984200,
                          ]);
                          $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia224,
                          'activity_source_id' =>$idactivitySource44,
                          'value' => 665310214,
                          ]);
                          $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia229,
                          'activity_source_id' =>$idactivitySource45,
                          'value' => 219137643,
                          ]);
                          $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia232,
                          'activity_source_id' =>$idactivitySource46,
                          'value' => 671278180,
                          ]);
                          $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia234,
                          'activity_source_id' =>$idactivitySource47,
                          'value' => 5405151456,
                          ]);
                          $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia236,
                          'activity_source_id' =>$idactivitySource48,
                          'value' => 898122718,
                          ]);
                          $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia246,
                          'activity_source_id' =>$idactivitySource50,
                          'value' => 1008161494,
                          ]);
                          $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia250,
                          'activity_source_id' =>$idactivitySource51,
                          'value' => 137250000,
                          ]);
                          $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia254,
                          'activity_source_id' =>$idactivitySource52,
                          'value' => 587789823,
                          ]);
                          $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia260,
                          'activity_source_id' =>$idactivitySource53,
                          'value' => 36991500,
                          ]);
                          $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia264,
                          'activity_source_id' =>$idactivitySource54,
                          'value' => 407485747,
                          ]);
                          $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia269,
                          'activity_source_id' =>$idactivitySource55,
                          'value' => 168047586,
                          ]);
                          $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia276,
                          'activity_source_id' =>$idactivitySource56,
                          'value' => 557469806,
                          ]);
                          $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia169,
                            'activity_source_id' =>$idactivitySource57,
                            'value' => 3311685928,
                            ]);
                            $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia185,
							'activity_source_id' =>$idactivitySource58,
                            'value' => 29007481994,
                            ]);
                            $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia236,
                            'activity_source_id' =>$idactivitySource59,
                            'value' => 1517948086,
                            ]);
                            $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity6,
                              'source_id' =>$idPlan36,
                              'value' => 553770000,
                              'goal' => 0,
                              'evidence_balance' => 553770000,
                              'age' => 3,
                              ]);
                              $idactivitySource60 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity9,
                              'source_id' =>$idPlan36,
                              'value' => 244660879,
                              'goal' => 0,
                              'evidence_balance' => 244660879,
                              'age' => 3,
                              ]);
                              $idactivitySource61 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity15,
                              'source_id' =>$idPlan36,
                              'value' => 559000000,
                              'goal' => 0,
                              'evidence_balance' => 559000000,
                              'age' => 3,
                              ]);
                              $idactivitySource62 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity20,
                              'source_id' =>$idPlan36,
                              'value' => 2099146229,
                              'goal' => 0,
                              'evidence_balance' => 2099146229,
                              'age' => 3,
                              ]);
                              $idactivitySource63 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity26,
                              'source_id' =>$idPlan36,
                              'value' => 8876882556.0857,
                              'goal' => 0,
                              'evidence_balance' => 8876882556.0857,
                              'age' => 3,
                              ]);
                              $idactivitySource64 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity30,
                              'source_id' =>$idPlan37,
                              'value' => 1453619649.768,
                              'goal' => 0,
                              'evidence_balance' => 1453619649.768,
                              'age' => 3,
                              ]);
                              $idactivitySource65 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity38,
                              'source_id' =>$idPlan37,
                              'value' => 470000000,
                              'goal' => 0,
                              'evidence_balance' => 470000000,
                              'age' => 3,
                              ]);
                              $idactivitySource66 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity42,
                              'source_id' =>$idPlan37,
                              'value' => 121918060,
                              'goal' => 0,
                              'evidence_balance' => 121918060,
                              'age' => 3,
                              ]);
                              $idactivitySource67 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity44,
                              'source_id' =>$idPlan37,
                              'value' => 629086190,
                              'goal' => 0,
                              'evidence_balance' => 629086190,
                              'age' => 3,
                              ]);
                              $idactivitySource68 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity46,
                              'source_id' =>$idPlan37,
                              'value' => 1261901320,
                              'goal' => 0,
                              'evidence_balance' => 1261901320,
                              'age' => 3,
                              ]);
                              $idactivitySource69 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity48,
                              'source_id' =>$idPlan37,
                              'value' => 1269964452.4769,
                              'goal' => 0,
                              'evidence_balance' => 1269964452.4769,
                              'age' => 3,
                              ]);
                              $idactivitySource70 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity68,
                              'source_id' =>$idPlan52,
                              'value' => 385992654.847,
                              'goal' => 0,
                              'evidence_balance' => 385992654.847,
                              'age' => 3,
                              ]);
                              $idactivitySource71 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity72,
                              'source_id' =>$idPlan52,
                              'value' => 105266161,
                              'goal' => 0,
                              'evidence_balance' => 105266161,
                              'age' => 3,
                              ]);
                              $idactivitySource72 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity85,
                              'source_id' =>$idPlan52,
                              'value' => 598705636.6299,
                              'goal' => 0,
                              'evidence_balance' => 598705636.6299,
                              'age' => 3,
                              ]);
                              $idactivitySource74 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity90,
                              'source_id' =>$idPlan39,
                              'value' => 85000000,
                              'goal' => 0,
                              'evidence_balance' => 85000000,
                              'age' => 3,
                              ]);
                              $idactivitySource75 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity93,
                              'source_id' =>$idPlan39,
                              'value' => 1019297458,
                              'goal' => 0,
                              'evidence_balance' => 1019297458,
                              'age' => 3,
                              ]);
                              $idactivitySource76 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity107,
                              'source_id' =>$idPlan39,
                              'value' => 1748387160.144,
                              'goal' => 0,
                              'evidence_balance' => 1748387160.144,
                              'age' => 3,
                              ]);
                              $idactivitySource78 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity111,
                              'source_id' =>$idPlan39,
                              'value' => 80000000,
                              'goal' => 0,
                              'evidence_balance' => 80000000,
                              'age' => 3,
                              ]);
                              $idactivitySource79 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity115,
                              'source_id' =>$idPlan39,
                              'value' => 726186346,
                              'goal' => 0,
                              'evidence_balance' => 726186346,
                              'age' => 3,
                              ]);
                              $idactivitySource80 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity125,
                              'source_id' =>$idPlan39,
                              'value' => 353992800,
                              'goal' => 0,
                              'evidence_balance' => 353992800,
                              'age' => 3,
                              ]);
                              $idactivitySource82 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('activity_sources')->insert([
                              'activity_id' => $idactivity137,
                              'source_id' =>$idPlan39,
                              'value' => 40000000,
                              'goal' => 0,
                              'evidence_balance' => 40000000,
                              'age' => 3,
                              ]);
                              $idactivitySource83 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity26,
                                'source_id' =>$idPlan37,
                                'value' => 4845372315.6852,
                                'goal' => 0,
                                'evidence_balance' => 4845372315.6852,
                                'age' => 3,
                                ]);
                                $idactivitySource84 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity48,
                                'source_id' =>$idPlan52,
                                'value' => 550721305.5231,
                                'goal' => 0,
                                'evidence_balance' => 550721305.5231,
                                'age' => 3,
                                ]);
                                $idactivitySource85 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity85,
                                'source_id' =>$idPlan39,
                                'value' => 85856801.9621,
                                'goal' => 0,
                                'evidence_balance' => 85856801.9621,
                                'age' => 3,
                                ]);
                                $idactivitySource86 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia286,
                                  'activity_source_id' =>$idactivitySource60,
                                  'value' => 530283745,
                                  ]);
                                  $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia289,
                                  'activity_source_id' =>$idactivitySource61,
                                  'value' => 224646400,
                                  ]);
                                  $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia295,
                                  'activity_source_id' =>$idactivitySource62,
                                  'value' => 537676152,
                                  ]);
                                  $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia300,
                                  'activity_source_id' =>$idactivitySource63,
                                  'value' => 95997977,
                                  ]);
                                  $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia306,
                                  'activity_source_id' =>$idactivitySource64,
                                  'value' => 8876882556.0857,
                                  ]);
                                  $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia310,
                                  'activity_source_id' =>$idactivitySource65,
                                  'value' => 1452619650,
                                  ]);
                                  $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia318,
                                  'activity_source_id' =>$idactivitySource66,
                                  'value' => 440421578,
                                  ]);
                                  $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia322,
                                  'activity_source_id' =>$idactivitySource67,
                                  'value' => 119800000,
                                  ]);
                                  $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia324,
                                  'activity_source_id' =>$idactivitySource68,
                                  'value' => 455580000,
                                  ]);
                                  $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia326,
                                  'activity_source_id' =>$idactivitySource69,
                                  'value' => 1256901320,
                                  ]);
                                  $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia328,
                                  'activity_source_id' =>$idactivitySource70,
                                  'value' => 1269964452.4769,
                                  ]);
                                  $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia348,
                                  'activity_source_id' =>$idactivitySource71,
                                  'value' => 50000000,
                                  ]);
                                  $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia352,
                                  'activity_source_id' =>$idactivitySource72,
                                  'value' => 55266161,
                                  ]);
                                  $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia365,
                                  'activity_source_id' =>$idactivitySource74,
                                  'value' => 598705636.6299,
                                  ]);
                                  $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia370,
                                  'activity_source_id' =>$idactivitySource75,
                                  'value' => 74255401,
                                  ]);
                                  $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia373,
                                  'activity_source_id' =>$idactivitySource76,
                                  'value' => 977979124,
                                  ]);
                                  $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia387,
                                  'activity_source_id' =>$idactivitySource78,
                                  'value' => 1616354315,
                                  ]);
                                  $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia391,
                                  'activity_source_id' =>$idactivitySource79,
                                  'value' => 45000000,
                                  ]);
                                  $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia395,
                                  'activity_source_id' =>$idactivitySource80,
                                  'value' => 607513366,
                                  ]);
                                  $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia405,
                                  'activity_source_id' =>$idactivitySource82,
                                  'value' => 310347680,
                                  ]);
                                  $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia417,
                                  'activity_source_id' =>$idactivitySource83,
                                  'value' => 7160000,
                                  ]);
                                  $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia306,
                                    'activity_source_id' =>$idactivitySource84,
                                    'value' => 4834124002.9143,
                                    ]);
                                    $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia328,
                                    'activity_source_id' =>$idactivitySource85,
                                    'value' => 542847217.5231,
                                    ]);
                                    $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia365,
                                    'activity_source_id' =>$idactivitySource86,
                                    'value' => 613869108,
                                    ]);
                                    $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity6,
                                      'source_id' =>$idPlan53,
                                      'value' => 850000000,
                                      'goal' => 0,
                                      'evidence_balance' => 850000000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource87 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity9,
                                      'source_id' =>$idPlan53,
                                      'value' => 30000000,
                                      'goal' => 0,
                                      'evidence_balance' => 30000000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource88 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity15,
                                      'source_id' =>$idPlan53,
                                      'value' => 38500000,
                                      'goal' => 0,
                                      'evidence_balance' => 38500000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource89 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity20,
                                      'source_id' =>$idPlan53,
                                      'value' => 3849056179,
                                      'goal' => 0,
                                      'evidence_balance' => 3849056179,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource90 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity26,
                                      'source_id' =>$idPlan53,
                                      'value' => 14682397955.86,
                                      'goal' => 0,
                                      'evidence_balance' => 14682397955.86,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource91 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity38,
                                      'source_id' =>$idPlan54,
                                      'value' => 442500000,
                                      'goal' => 0,
                                      'evidence_balance' => 442500000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource92 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity42,
                                      'source_id' =>$idPlan54,
                                      'value' => 65048953,
                                      'goal' => 0,
                                      'evidence_balance' => 65048953,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource93 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity44,
                                      'source_id' =>$idPlan54,
                                      'value' => 636719016,
                                      'goal' => 0,
                                      'evidence_balance' => 636719016,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource94 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity46,
                                      'source_id' =>$idPlan54,
                                      'value' => 422252710,
                                      'goal' => 0,
                                      'evidence_balance' => 422252710,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource95 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity68,
                                      'source_id' =>$idPlan54,
                                      'value' => 1070000000,
                                      'goal' => 0,
                                      'evidence_balance' => 1070000000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource96 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity85,
                                      'source_id' =>$idPlan54,
                                      'value' => 1682862574,
                                      'goal' => 0,
                                      'evidence_balance' => 1682862574,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource99 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity90,
                                      'source_id' =>$idPlan54,
                                      'value' => 116000000,
                                      'goal' => 0,
                                      'evidence_balance' => 116000000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource100 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity93,
                                      'source_id' =>$idPlan54,
                                      'value' => 2112658521,
                                      'goal' => 0,
                                      'evidence_balance' => 2112658521,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource101 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity99,
                                      'source_id' =>$idPlan54,
                                      'value' => 211541822,
                                      'goal' => 0,
                                      'evidence_balance' => 211541822,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource102 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity107,
                                      'source_id' =>$idPlan54,
                                      'value' => 483951389.140001,
                                      'goal' => 0,
                                      'evidence_balance' => 483951389.140001,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource103 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity111,
                                      'source_id' =>$idPlan56,
                                      'value' => 80000000,
                                      'goal' => 0,
                                      'evidence_balance' => 80000000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource104 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity115,
                                      'source_id' =>$idPlan56,
                                      'value' => 862990517,
                                      'goal' => 0,
                                      'evidence_balance' => 862990517,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource105 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity121,
                                      'source_id' =>$idPlan56,
                                      'value' => 100000000,
                                      'goal' => 0,
                                      'evidence_balance' => 100000000,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource106 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity125,
                                      'source_id' =>$idPlan56,
                                      'value' => 750424800,
                                      'goal' => 0,
                                      'evidence_balance' => 750424800,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource107 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity137,
                                      'source_id' =>$idPlan56,
                                      'value' => 251794323,
                                      'goal' => 0,
                                      'evidence_balance' => 251794323,
                                      'age' => 4,
                                      ]);
                                      $idactivitySource108 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity26,
                                        'source_id' =>$idPlan54,
                                        'value' => 3906625239.01,
                                        'goal' => 0,
                                        'evidence_balance' => 3906625239.01,
                                        'age' => 4,
                                        ]);
                                        $idactivitySource109 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity107,
                                        'source_id' =>$idPlan56,
                                        'value' => 1708581587.86,
                                        'goal' => 0,
                                        'evidence_balance' => 1708581587.86,
                                        'age' => 4,
                                        ]);
                                        $idactivitySource110 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia427,
                                          'activity_source_id' =>$idactivitySource87,
                                          'value' => 835011846,
                                          ]);
                                          $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia430,
                                          'activity_source_id' =>$idactivitySource88,
                                          'value' => 13992000,
                                          ]);
                                          $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia436,
                                          'activity_source_id' =>$idactivitySource89,
                                          'value' => 32246367,
                                          ]);
                                          $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia441,
                                          'activity_source_id' =>$idactivitySource90,
                                          'value' => 3506969497,
                                          ]);
                                          $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia447,
                                          'activity_source_id' =>$idactivitySource91,
                                          'value' => 14682397955.86,
                                          ]);
                                          $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia459,
                                          'activity_source_id' =>$idactivitySource92,
                                          'value' => 423593500,
                                          ]);
                                          $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia463,
                                          'activity_source_id' =>$idactivitySource93,
                                          'value' => 60000000,
                                          ]);
                                          $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia465,
                                          'activity_source_id' =>$idactivitySource94,
                                          'value' => 635550000,
                                          ]);
                                          $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia467,
                                          'activity_source_id' =>$idactivitySource95,
                                          'value' => 422252710,
                                          ]);
                                          $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia489,
                                          'activity_source_id' =>$idactivitySource96,
                                          'value' => 20587100,
                                          ]);
                                          $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia506,
                                          'activity_source_id' =>$idactivitySource99,
                                          'value' => 1671755075,
                                          ]);
                                          $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia511,
                                          'activity_source_id' =>$idactivitySource100,
                                          'value' => 104999924,
                                          ]);
                                          $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia514,
                                          'activity_source_id' =>$idactivitySource101,
                                          'value' => 2047340704,
                                          ]);
                                          $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia520,
                                          'activity_source_id' =>$idactivitySource102,
                                          'value' => 168017117,
                                          ]);
                                          $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia528,
                                          'activity_source_id' =>$idactivitySource103,
                                          'value' => 483951389.140001,
                                          ]);
                                          $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia532,
                                          'activity_source_id' =>$idactivitySource104,
                                          'value' => 75605304,
                                          ]);
                                          $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia536,
                                          'activity_source_id' =>$idactivitySource105,
                                          'value' => 700856733,
                                          ]);
                                          $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia542,
                                          'activity_source_id' =>$idactivitySource106,
                                          'value' => 100000000,
                                          ]);
                                          $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia546,
                                          'activity_source_id' =>$idactivitySource107,
                                          'value' => 696774463,
                                          ]);
                                          $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia558,
                                          'activity_source_id' =>$idactivitySource108,
                                          'value' => 187518571,
                                          ]);
                                          $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia447,
                                            'activity_source_id' =>$idactivitySource109,
                                            'value' => 3555603223.14,
                                            ]);
                                            $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia528,
                                            'activity_source_id' =>$idactivitySource110,
                                            'value' => 1675633461.86,
                                            ]);
                                            $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                                            
	}

  }