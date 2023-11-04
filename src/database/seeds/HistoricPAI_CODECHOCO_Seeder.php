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
 * Class HistoricPAI_CODECHOCO_Seeder
 */
class HistoricPAI_CODECHOCO_Seeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $pai=PAI::create([
      'name' => 'Plan de Acción 2016-2019 Gestión Ambiental con Enfoque Humano',
      'start_date' => '2016-01-01',
      'end_date' => '2019-12-31',
      'director_name' => 'TEOFILO CUESTA BORJA',
      'group_id' => 10,
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
          'car_program' => 'PROGRAMA 1. ORDENAMIENTO Y  PLANIFICACIÓN  AMBIENTAL DE LOS ECOSISTEMAS Y DEL TERRITORIO  PARA CONSTRUCCION DE LA PAZ',
          'weighing' => 25,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 2. USO SOSTENIBLE DE  LA  BIODIVERSIDAD PARA EL DESARROLLO DEL CHOCO EN UN ESCENARIO DE POSCONFLICTO                                                                             ',
          'weighing' => 25,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 3. CONTROL VIGILANCIA, MONITOREO Y  PREVENCIÓN DE LA DEGRADACIÓN AMBIENTAL         ',
          'weighing' => 25,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 4. DESARROLLO   INSTITUCIONAL  Y DE LA PARTICIPACIÓN  COMUNITARIA PARA LA GESTIÓN AMBIENTAL EN UN ESCENARIO DE POSCONFLICTO   ',
          'weighing' => 25,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '1.1. Ordenación ambiental del territorio  para el Uso Sostenible de los recursos naturales del Departamento del Chocó en el escenario del posconflicto.',
            'weighing' => 25,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '1.2. Planificación territorial para el desarrollo sostenible del departamento del Chocó con miras al posconflicto',
            'weighing' => 25,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '1.3. Implementación del sistema de información Ambiental  del Departamento del Chocó para el posconflicto',
            'weighing' => 25,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => '1.4. Implementación de acciones Para la mitigación y adaptación al cambio climático en el departamento del Chocó',
            'weighing' => 25,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.1. Biocomercio y producción sostenible en el Departamento del Chocó y/o Implementación del biocomercio y producción sostenible en el departamento del Choco',
            'weighing' => 11,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.2. Caracterización y Monitoreo para la conservación productiva  de los Humedales del departamento del Chocó',
            'weighing' => 11,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.3. Implementación de los Planes de Ordenación y Manejo de la Unidades Ambientales Costeras del Departamento del Chocó',
            'weighing' => 11,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.4. Manejo de la Fauna Silvestre y Recursos Hidrobiológicos  en el Departamento del Chocó',
            'weighing' => 11,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.5.Diseño e Implementación de Protocolos de Producción de Especies Icticas Nativas en la Cuenca del Atrato Chocó.',
            'weighing' => 11,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.6 Recuperación funcional  de Áreas Degradadas Por Actividades Antrópicas en el Departamento del Chocó',
            'weighing' => 11,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.7.  Fortalecimiento del Sistema Departamental de Áreas Protegidas del Departamento del Chocó  SIDAP',
            'weighing' => 11,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.8.Implementación de Estrategias de Pago por Servicios Eco sistémicos en Territorios de Comunidades Negras,  Indígenas y Campesinas  del Departamento del Chocó',
            'weighing' => 11,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => '2.9 Fomento de la Acuicultura, estrategia de conservación de especies icticas en el departamento del Chocó',
            'weighing' => 12,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.1. Manejo del Recurso Hídrico en el  Departamento del Chocó',
            'weighing' => 12,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.2 Estudio de la Calidad del Recurso Hídrico Asociado a los Ecosistemas    Estratégicos (Marino Costeros y continental) del Departamento del Chocó',
            'weighing' => 13,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.3. Fortalecimiento de la Gobernanza Forestal en el Departamento del Chocó',
            'weighing' => 12,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.4. Gestión Ambiental Urbana  En el  Departamento del Chocó',
            'weighing' => 13,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.5. Gestión Ambiental Minera en el Departamento del Chocó',
            'weighing' => 12,
            ]);
            $idproject18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.6. Aplicación de Técnicas y Practicas de Producción Mas Limpia en la Minería Auro Platinífera Del Departamento del Chocó. ',
            'weighing' => 13,
            ]);
            $idproject19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.7 Gestión Integral del Riesgo en El Departamento del Chocó',
            'weighing' => 12,
            ]);
            $idproject20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => '3.8. Control Seguimiento y Monitoreo de los Recursos Naturales en e Departamento del Chocó.',
            'weighing' => 13,
            ]);
            $idproject21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '4.1. Fortalecimiento Institucional de CODECHOCO',
            'weighing' => 25,
            ]);
            $idproject22 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '4.2 . Diseño e implementación de una política de cultura ambiental para el departamento del Chocó en el escenario del posconflicto.',
            'weighing' => 25,
            ]);
            $idproject23 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '4.3. Fortalecimiento de La gobernanza en los territorios étnicos en el escenario del posconflicto ',
            'weighing' => 25,
            ]);
            $idproject24 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => '4.4 Fortalecimiento Interinstitucional',
            'weighing' => 25,
            ]);
            $idproject25 = DB::getPdo()->lastInsertId();
            
            
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
              
              
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 60,
                'goal_2' => 20,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 60,
                'goal_2_balance' => 20,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 80,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 57,
                'goal_2' => 15,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 57,
                'goal_2_balance' => 15,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 72,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 35,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 35,
                'goal_4_balance' => 0,
                'total_goal' => 135,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 50,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 50,
                'goal_4_balance' => 0,
                'total_goal' => 52,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 5,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 0,
                'goal_1_balance' => 5,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 0,
                'total_goal' => 55,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 0,
                'total_goal' => 50,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 25,
                'goal_2' => 35,
                'goal_3' => 35,
                'goal_4' => 20,
                'goal_1_balance' => 25,
                'goal_2_balance' => 35,
                'goal_3_balance' => 35,
                'goal_4_balance' => 20,
                'total_goal' => 115,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 0,
                'goal_2' => 50,
                'goal_3' => 40,
                'goal_4' => 20,
                'goal_1_balance' => 0,
                'goal_2_balance' => 50,
                'goal_3_balance' => 40,
                'goal_4_balance' => 20,
                'total_goal' => 110,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 50,
                'goal_2' => 0,
                'goal_3' => 50,
                'goal_4' => 0,
                'goal_1_balance' => 50,
                'goal_2_balance' => 0,
                'goal_3_balance' => 50,
                'goal_4_balance' => 0,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 33,
                'goal_2' => 18,
                'goal_3' => 18,
                'goal_4' => 0,
                'goal_1_balance' => 33,
                'goal_2_balance' => 18,
                'goal_3_balance' => 18,
                'goal_4_balance' => 0,
                'total_goal' => 69,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 12',
                'goal_1' => 0,
                'goal_2' => 18,
                'goal_3' => 18,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 18,
                'goal_3_balance' => 18,
                'goal_4_balance' => 0,
                'total_goal' => 36,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => null,
                'product_other' => 'Producto 13',
                'goal_1' => 0,
                'goal_2' => 30,
                'goal_3' => 30,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 30,
                'goal_3_balance' => 30,
                'goal_4_balance' => 0,
                'total_goal' => 60,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 100,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 100,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 101,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 23,
                'goal_2' => 50,
                'goal_3' => 23,
                'goal_4' => 23,
                'goal_1_balance' => 23,
                'goal_2_balance' => 50,
                'goal_3_balance' => 23,
                'goal_4_balance' => 23,
                'total_goal' => 119,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 23,
                'goal_2' => 25,
                'goal_3' => 23,
                'goal_4' => 23,
                'goal_1_balance' => 23,
                'goal_2_balance' => 25,
                'goal_3_balance' => 23,
                'goal_4_balance' => 23,
                'total_goal' => 94,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 23,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 20,
                'goal_1_balance' => 23,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 20,
                'total_goal' => 83,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 100,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 100,
                'total_goal' => 175,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 1,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 1,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 60,
                'goal_2' => 50,
                'goal_3' => 50,
                'goal_4' => 0,
                'goal_1_balance' => 60,
                'goal_2_balance' => 50,
                'goal_3_balance' => 50,
                'goal_4_balance' => 0,
                'total_goal' => 160,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 75,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 1,
                'goal_1_balance' => 75,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 1,
                'total_goal' => 276,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 25,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 25,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
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
                'weighing' => 7,
                ]);
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 5,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 5,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 5,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 7,
                ]);
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 2,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 2,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 20,
                'goal_3' => 40,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 20,
                'goal_3_balance' => 40,
                'goal_4_balance' => 0,
                'total_goal' => 60,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 0,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 1,
                'goal_1_balance' => 0,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 1,
                'total_goal' => 201,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 25,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 25,
                'goal_4_balance' => 0,
                'total_goal' => 25,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
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
                'weighing' => 7,
                ]);
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 13',
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
                'weighing' => 8,
                ]);
                $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => null,
                'product_other' => 'Producto 14',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 2,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 2,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 8,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 100,
                'goal_2' => 50,
                'goal_3' => 0,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 50,
                'goal_3_balance' => 0,
                'goal_4_balance' => 100,
                'total_goal' => 250,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 34,
                ]);
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 12,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 0,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 0,
                'total_goal' => 75,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 25,
                'goal_1_balance' => 0,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 25,
                'total_goal' => 75,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
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
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
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
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 53,
                'goal_2' => 47,
                'goal_3' => 47,
                'goal_4' => 15,
                'goal_1_balance' => 53,
                'goal_2_balance' => 47,
                'goal_3_balance' => 47,
                'goal_4_balance' => 15,
                'total_goal' => 162,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 10,
                'total_goal' => 10,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 15,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 15,
                'total_goal' => 15,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 20,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 20000,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 20000,
                'goal_1_balance' => 20000,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 20000,
                'total_goal' => 40000,
                'unit_goal' => 47,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 36,
                'goal_2' => 32,
                'goal_3' => 100,
                'goal_4' => 0,
                'goal_1_balance' => 36,
                'goal_2_balance' => 32,
                'goal_3_balance' => 100,
                'goal_4_balance' => 0,
                'total_goal' => 168,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 5,
                'goal_4' => 0,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 5,
                'goal_4_balance' => 0,
                'total_goal' => 15,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 5,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 5,
                'goal_4_balance' => 0,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 0,
                'goal_2' => 14,
                'goal_3' => 14,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 14,
                'goal_3_balance' => 14,
                'goal_4_balance' => 0,
                'total_goal' => 28,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => null,
                'product_other' => 'Producto 9',
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
                'weighing' => 12,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 40,
                'goal_2' => 20,
                'goal_3' => 60,
                'goal_4' => 60,
                'goal_1_balance' => 40,
                'goal_2_balance' => 20,
                'goal_3_balance' => 60,
                'goal_4_balance' => 60,
                'total_goal' => 180,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 10,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 10,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 10,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 4,
                'goal_2' => 3,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 4,
                'goal_2_balance' => 3,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 15,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 1,
                'goal_2' => 100,
                'goal_3' => 0,
                'goal_4' => 100,
                'goal_1_balance' => 1,
                'goal_2_balance' => 100,
                'goal_3_balance' => 0,
                'goal_4_balance' => 100,
                'total_goal' => 201,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 50,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 50,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 70,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 33,
                'goal_3' => 33,
                'goal_4' => 34,
                'goal_1_balance' => 0,
                'goal_2_balance' => 33,
                'goal_3_balance' => 33,
                'goal_4_balance' => 34,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 100,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 100,
                'total_goal' => 175,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 520000000,
                'goal_2' => 525500000,
                'goal_3' => 530452000,
                'goal_4' => 1882664523,
                'goal_1_balance' => 520000000,
                'goal_2_balance' => 525500000,
                'goal_3_balance' => 530452000,
                'goal_4_balance' => 1882664523,
                'total_goal' => 3458616523,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 11,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 75,
                'goal_4' => 100,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 75,
                'goal_4_balance' => 100,
                'total_goal' => 225,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct83 = DB::getPdo()->lastInsertId();
                
                
                
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 12,
                'goal_2' => 12,
                'goal_3' => 12,
                'goal_4' => 12,
                'goal_1_balance' => 12,
                'goal_2_balance' => 12,
                'goal_3_balance' => 12,
                'goal_4_balance' => 12,
                'total_goal' => 48,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct86 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 8,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 8,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 25,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 25,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 12,
                ]);
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 5',
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
                'weighing' => 13,
                ]);
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
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
                'weighing' => 13,
                ]);
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => null,
                'product_other' => 'Producto 8',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 2,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 13,
                ]);
                $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 33,
                ]);
                $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 34,
                ]);
                $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 2,
                'goal_2' => 2,
                'goal_3' => 2,
                'goal_4' => 1,
                'goal_1_balance' => 2,
                'goal_2_balance' => 2,
                'goal_3_balance' => 2,
                'goal_4_balance' => 1,
                'total_goal' => 7,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 15,
                'goal_2' => 15,
                'goal_3' => 30,
                'goal_4' => 0,
                'goal_1_balance' => 15,
                'goal_2_balance' => 15,
                'goal_3_balance' => 30,
                'goal_4_balance' => 0,
                'total_goal' => 60,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct97 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct98 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 25,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 25,
                'total_goal' => 100,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct99 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 5,
                'goal_2' => 15,
                'goal_3' => 40,
                'goal_4' => 0,
                'goal_1_balance' => 5,
                'goal_2_balance' => 15,
                'goal_3_balance' => 40,
                'goal_4_balance' => 0,
                'total_goal' => 60,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct100 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 6',
                'goal_1' => 0,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 0,
                'total_goal' => 20,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct101 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => null,
                'product_other' => 'Producto 7',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct102 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct103 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 2,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 2,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 50,
                ]);
                $idobjectiveproduct104 = DB::getPdo()->lastInsertId();
                
                
                
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct105 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 16,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct106 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 3',
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
                'weighing' => 25,
                ]);
                $idobjectiveproduct107 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 2,
                'goal_2' => 0,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 2,
                'goal_2_balance' => 0,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 22,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 25,
                ]);
                $idobjectiveproduct108 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct109 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct110 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct111 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct112 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct113 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct114 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => null,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct115 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct116 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 2',
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
                $idobjectiveproduct117 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 15,
                'goal_4' => 15,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 15,
                'goal_4_balance' => 15,
                'total_goal' => 40,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct118 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct119 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 6,
                ]);
                $idobjectiveproduct120 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 6',
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
                'weighing' => 6,
                ]);
                $idobjectiveproduct121 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct122 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 8',
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
                'weighing' => 7,
                ]);
                $idobjectiveproduct123 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 9',
                'goal_1' => 100,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 100,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 400,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct124 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 10',
                'goal_1' => 4,
                'goal_2' => 4,
                'goal_3' => 4,
                'goal_4' => 4,
                'goal_1_balance' => 4,
                'goal_2_balance' => 4,
                'goal_3_balance' => 4,
                'goal_4_balance' => 4,
                'total_goal' => 16,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct125 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 11',
                'goal_1' => 50,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 100,
                'goal_1_balance' => 50,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 100,
                'total_goal' => 150,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct126 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 12',
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
                'weighing' => 7,
                ]);
                $idobjectiveproduct127 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
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
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct128 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 14',
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
                'weighing' => 7,
                ]);
                $idobjectiveproduct129 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 15',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 75,
                'goal_4' => 100,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 75,
                'goal_4_balance' => 100,
                'total_goal' => 225,
                'unit_goal' => 71,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 7,
                ]);
                $idobjectiveproduct130 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => null,
                'product_other' => 'Producto 16',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 1,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 1,
                'goal_4_balance' => 0,
                'total_goal' => 1,
                'unit_goal' => 84,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 1,
                ]);
                $idobjectiveproduct131 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct132 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
                'product_other' => 'Producto 2',
                'goal_1' => 3,
                'goal_2' => 3,
                'goal_3' => 1,
                'goal_4' => 1,
                'goal_1_balance' => 3,
                'goal_2_balance' => 3,
                'goal_3_balance' => 1,
                'goal_4_balance' => 1,
                'total_goal' => 8,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 16,
                ]);
                $idobjectiveproduct133 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 1,
                'goal_3' => 1,
                'goal_4' => 300,
                'goal_1_balance' => 1,
                'goal_2_balance' => 1,
                'goal_3_balance' => 1,
                'goal_4_balance' => 300,
                'total_goal' => 303,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct134 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
                'product_other' => 'Producto 4',
                'goal_1' => 3,
                'goal_2' => 1,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 3,
                'goal_2_balance' => 1,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 10,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct135 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
                'product_other' => 'Producto 5',
                'goal_1' => 5,
                'goal_2' => 1,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 5,
                'goal_2_balance' => 1,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 26,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct136 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 17,
                ]);
                $idobjectiveproduct137 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 10,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 10,
                'goal_4_balance' => 0,
                'total_goal' => 11,
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct138 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct139 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct140 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 14,
                ]);
                $idobjectiveproduct141 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
                'product_other' => 'Producto 5',
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
                'weighing' => 14,
                ]);
                $idobjectiveproduct142 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
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
                'unit_goal' => 58,
                'indicator_national_id' => 799,
                'indicator_ods_id' => 890,
                'national_policy_id' => 875,
                'weighing' => 15,
                ]);
                $idobjectiveproduct143 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => null,
                'product_other' => 'Producto 7',
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
                'weighing' => 15,
                ]);
                $idobjectiveproduct144 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
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
                'weighing' => 100,
                ]);
                $idobjectiveproduct145 = DB::getPdo()->lastInsertId();
                
                
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => 'Formular el Plan de Ordenación Forestal (POF) del departamento  del  Chocó ',
                  'goal_1' => 60,
                  'goal_2' => 20,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 80,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => 'Implementar y adoptar  Planes de Ordenación Forestal formulados por la entidad',
                  'goal_1' => 57,
                  'goal_2' => 15,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 72,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => 'Formular  e implementar el Plan de manejo ambiental de la reserva forestal protectora del rio Leon',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 35,
                  'goal_4' => 0,
                  'goal' => 135,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => 'Implementar pilotos para el manejo forestal sostenible a partir de la ordenación forestal',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => 'Formular e Implementar el Plan de Ordenamiento y Manejo de las Unidades ambientales costeras',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 50,
                  'goal_4' => 0,
                  'goal' => 52,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct6,
                  'name' => 'Formular dos Planes de Ordenación  y Manejo de las Cuencas(POMCAS) priorizadas por la corporación',
                  'goal_1' => 5,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 0,
                  'goal' => 55,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct7,
                  'name' => 'Implementar dos planes de ordenación y manejo de las cuencas priorizadas por la corporación',
                  'goal_1' => 0,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 0,
                  'goal' => 50,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => 'Formular e implementar Planes  de Ordenamiento del Recurso Hídrico de  cuerpos de agua priorizados por la corporación 1',
                  'goal_1' => 25,
                  'goal_2' => 35,
                  'goal_3' => 35,
                  'goal_4' => 20,
                  'goal' => 115,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => 'Formular e implementar Planes  de Ordenamiento del Recurso Hídrico de  cuerpos de agua priorizados por la corporación 2',
                  'goal_1' => 0,
                  'goal_2' => 50,
                  'goal_3' => 40,
                  'goal_4' => 20,
                  'goal' => 110,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => 'Formular el Plan de Manejo de los páramos de Citará y el Duende',
                  'goal_1' => 50,
                  'goal_2' => 0,
                  'goal_3' => 50,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => 'Formular tres (3) planes de manejo de microcuencas en coordinación con entidades territoriales',
                  'goal_1' => 33,
                  'goal_2' => 18,
                  'goal_3' => 18,
                  'goal_4' => 0,
                  'goal' => 69,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => 'Realizar acciones de implementación de un (1) plan de manejo de microcuenca en coordinación con entidades territoriales',
                  'goal_1' => 0,
                  'goal_2' => 18,
                  'goal_3' => 18,
                  'goal_4' => 0,
                  'goal' => 36,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => 'Formular el plan de manejo del acuífero de Quibdó',
                  'goal_1' => 0,
                  'goal_2' => 30,
                  'goal_3' => 30,
                  'goal_4' => 0,
                  'goal' => 60,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => 'Formular el Plan Regional de Biodiversidad ',
                  'goal_1' => 1,
                  'goal_2' => 100,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 101,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => 'Prestar asistencia técnica para la revisión y ajustes de los  POTM, EOTM y Planes de Desarrollo de las entidades territoriales',
                  'goal_1' => 23,
                  'goal_2' => 50,
                  'goal_3' => 23,
                  'goal_4' => 23,
                  'goal' => 119,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'Implementar las determinantes ambientales para el ordenamiento territorial en el departamento',
                  'goal_1' => 23,
                  'goal_2' => 25,
                  'goal_3' => 23,
                  'goal_4' => 23,
                  'goal' => 94,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => 'Realizar seguimiento al componente ambiental de los POTM',
                  'goal_1' => 23,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 20,
                  'goal' => 83,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => 'Implementar el sistema de información ambiental para el departamento del Chocó ',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 100,
                  'goal' => 175,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => 'Construir un sistema de indicadores de los recursos naturales y la biodiversidad  para la jurisdicción de la Corporación',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => 'Implantar cuatro (4)  procesos pilotos de adaptabilidad en zonas costeras del departamento del Chocó.',
                  'goal_1' => 60,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 0,
                  'goal' => 160,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => 'Realizar estudios de vulnerabilidad al cambio climático de manglares y  páramos',
                  'goal_1' => 75,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 1,
                  'goal' => 276,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => 'Prestar asistencia técnica a los entes territoriales para la ejecución de acciones de mitigación y adaptación al cambio climático.',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => 'Fomentar cultura ambiental en conocimiento y gestión del riesgo; como medida de adaptabilidad al cambio climático',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => 'Conformar y dinamizar el nodo regional  de cambio climático,  pacifico norte',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => 'Aplicados criterios del biocomercio a la cadena de valor de los PFNM y al ecoturismo que se desarrollan en tres (3) áreas de importancia estratégica para la conservación',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => 'Fortalecida la capacidad de cinco (5) mypimes y organizaciones de base comunitaria para acceder a mercados y  mecanismos de financiamiento públicos y privados en el marco del biocomercio en los municipios de  Nuqui, Acandi y Litoral del San Juan',
                  'goal_1' => 5,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 5,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => 'Fortalecer la gestión técnica y financiera de CODECHOCO en el desarrollo de estrategias de  Negocios Verdes',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => 'Firmadas dos alianzas que  articulen eslabones de la cadena de valor de los  PNFM y el ecoturismo en los municipios de  Nuqui, Acandi, Unguía y Litoral del San Juan',
                  'goal_1' => 2,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Empresas apoyadas a través de mecanismo / instrumento',
                  'goal_1' => 0,
                  'goal_2' => 20,
                  'goal_3' => 40,
                  'goal_4' => 0,
                  'goal' => 60,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => 'Fortalecimiento de la capacidad técncia de la Ventanilla de Emprendimientos Verdes de la Corporación',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => 'Autoridades Ambientales articuladas con entidades y actores del ecosistema regional de CCTI',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => 'Documento de lineamientos tecnicos para el fortalecimiento del programa regional de negocios verdes',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => 'Documento de estudios tecnicos para el fortalecimiento de la ventanilla de negocios verdes',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => 'Servicio de asistencia tecnica para la consolidación de los negocios verdes',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 1,
                  'goal' => 201,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => 'Implementación el Plan de Acción Regional para negocios verdes y biocomercio',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 25,
                  'goal_4' => 0,
                  'goal' => 25,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'Fortalecer la capacidad  mipymes y organizaciones de base comunitaria para acceder a mercados y  mecanismos de financiamiento públicos y privados en el marco del biocomercio ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'Fortalecer la gestión técnica y financiera de CODECHOCO en el desarrollo de estrategias de  Negocios Verdes',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 2,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => 'Gestionar  alianzas que  articulen eslabones de la cadena de valor de los  PFNM y el ecoturismo ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 2,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'Diseñar e implementar un sistema de monitoreo de los humedales del Medio y Bajo Atrato  ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 100,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => 'Construir una línea base del estado de los humedales del Medio y Bajo Atrato',
                  'goal_1' => 100,
                  'goal_2' => 50,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 250,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => 'Delimitar y caracterizar el estado de tres complejos de humedales de la cuenca baja del Río Atrato ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => 'Evaluar en coordinación con entidades del SINA , el estado de los ecosistemas de corales y pastos marinos en la jurisdicción de la corporación.',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => 'Monitorear el estado de los ecosistemas de  corales, manglares y pastos marinos en la jurisdicción de la Corporación.',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 12,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => 'Definir  e implementar un sistema de control y vigilancia de las áreas marino costeras de la jurisdicción de la corporación.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 300,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => 'Dinamizar los Comités de manejo integrado de zonas costeras ',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 12,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => 'Recuperar áreas criticas de manglares en la costa pacifica',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 0,
                  'goal' => 75,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => 'Implementar acciones estratégicas para reducir la presión del uso de los manglares como combustible, en la costa Pacifica Chocoana',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct48,
                  'name' => 'Reestructuración de centros de atención, valoración, rehabilitación y liberación  de fauna silvestre decomisada',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct49,
                  'name' => 'Diez (10) especies amenazadas con medidas de conservacion y manejo en ejecucion',
                  'goal_1' => 0,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 75,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct50,
                  'name' => 'Realizar  Comunicación y prevención de tres (3) riesgos biológicos y ambientales, asociados a especies de fauna silvestre (Influenza aviar, Rabia, especies invasoras)',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct51,
                  'name' => 'Realizar  campañas de educación ambiental para protección  de fauna silvestre amenazada y recursos hidrobiológicos ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => 'Elaborar un libro actualizado sobre los stock pesqueros en la cuenca del Río Atrato. ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => 'Elaborar  protocolos, manuales técnico y artículos científicos  sobre  reproducción y larvicultura de las especies estudiadas ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Fortalecer  la producción  de material Vegetal en viveros de la corporación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => 'Interventoria a la reforestación con cultivos de caucho bajo sistemas agroforestales',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => 'Restaurar 1000 hectareas degradadas por actividad antrópica en comunidades negras e indígenas del departamento del Chocó',
                  'goal_1' => 53,
                  'goal_2' => 47,
                  'goal_3' => 47,
                  'goal_4' => 15,
                  'goal' => 162,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => 'Recuperar y mantener 10 hectáreas de áreas degradadas por actividad minera',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 10,
                  'goal' => 10,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Establecer areas  con plantaciones forestales',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 15,
                  'goal' => 15,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => 'Implementar acciones   de los planes de manejo de  las áreas protegidas declaradas por la corporación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => 'Proceso de declaratoria  de 20.000 hectáreas , como áreas protegidas  con omisiones o baja representatividad acorde con el portafolio de prioridades de conservación',
                  'goal_1' => 20000,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 20000,
                  'goal' => 40000,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => 'Declarar nuevas áreas protegidas en la jurisdicción de la corporación, de carácter regional',
                  'goal_1' => 36,
                  'goal_2' => 32,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 168,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => 'Operación anual de un (1)l SIDAP Chocó articulado al SIRAP pacifico y caribe',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => 'Distrito regional de manejo integrado cuenca alta del río Atrato, con plan de manejo formulado',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => 'Cinco acciones para cada uno de los planes de manejo de los distritos regionales de manejo integrado declarados por Codechoco en implementación',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 0,
                  'goal' => 15,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => 'Fortalecer el SIDAP  como estrategia de articulación para la conservación de los recursos naturales renovables',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 5,
                  'goal_4' => 0,
                  'goal' => 7,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => 'Planificar el uso de las  áreas protegidas declaradas por la corporación.',
                  'goal_1' => 0,
                  'goal_2' => 14,
                  'goal_3' => 14,
                  'goal_4' => 0,
                  'goal' => 28,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => 'Diseñar e implementar el modelo operativo de administración de las áreas protegidas',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Implementación de la estrategia BanCO2  en el departamento del Chocó',
                  'goal_1' => 40,
                  'goal_2' => 20,
                  'goal_3' => 60,
                  'goal_4' => 60,
                  'goal' => 180,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => 'Apoyo a proyectos REDD+ implementados por grupos comunitarios',
                  'goal_1' => 0,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 300,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => 'Caracterizar  escenarios potenciales con comunidades indígenas y negros  para implementar pago por servicios ecositémicos',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => 'Diseño e implementación de esquemas de  pago por servicios ambientales en el departamento del Chocó',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'Inducción, reproducción, repoblamiento y producción de alevinos de especies icticas nativas del departamento del Chocó',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'Producción de alevinos de tilapia para fomento de la acuicultura y conservación de especies',
                  'goal_1' => 10,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 10,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => 'Fortalecer y mantener la acreditación   del laboratorio de aguas de la Corporación  ',
                  'goal_1' => 4,
                  'goal_2' => 3,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 15,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => 'Diseñar  la red  regional de monitoreo de aguas continentales  ',
                  'goal_1' => 1,
                  'goal_2' => 100,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 201,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => 'Diseñar e  implementar la red  regional de monitoreo de aguas continentales y marinas  ',
                  'goal_1' => 0,
                  'goal_2' => 50,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 70,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct77,
                  'name' => 'Establecer  acuerdos sectoriales para la producción más limpia y manejo integral del recurso hídrico',
                  'goal_1' => 0,
                  'goal_2' => 33,
                  'goal_3' => 33,
                  'goal_4' => 34,
                  'goal' => 100,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct78,
                  'name' => 'Implementar el sistema de información del recurso hídrico - SIRH articulado al SIAC',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 100,
                  'goal' => 175,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct79,
                  'name' => 'Capacitar grupos sociales en la cultura de manejo  integral del agua',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 12,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct80,
                  'name' => 'Mejorar   y consolidar el conocimiento de la oferta hídrica superficial, marino costera  y subterránea en la jurisdicción de la Corporación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct81,
                  'name' => 'Invertir el recurso captado por tasa retributiva en proyectos de descontaminación de fuentes hídricas. ',
                  'goal_1' => 520000000,
                  'goal_2' => 525500000,
                  'goal_3' => 530452000,
                  'goal_4' => 1882664523,
                  'goal' => 3458616523,
                  'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct82,
                  'name' => 'Consolidar la legalización de usuarios del RH en el marco del Programa Nacional de Legalización y Registro de Usuarios del Recurso Hídrico.',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 75,
                  'goal_4' => 100,
                  'goal' => 225,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct83,
                  'name' => 'Elaborar un documento de diagnóstico del estado del recurso hídrico en el departamento del Chocó.',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct84,
                  'name' => 'Implementar la red de monitoreo del recurso hídrico',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct85,
                  'name' => 'Organizar y sistematizar la estadística forestal para su reporte al sistema nacional de  información forestal(SNIF)',
                  'goal_1' => 12,
                  'goal_2' => 12,
                  'goal_3' => 12,
                  'goal_4' => 12,
                  'goal' => 48,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct86,
                  'name' => 'Coordinación interinstitucional para afianzar el pacto por la madera legal.',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct87,
                  'name' => 'Diseño e  implementación de un programa de extensión forestal en comunidades negras e indígenas',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 8,
                  'goal' => 8,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct88,
                  'name' => 'Implementación  la Estrategia Nacional de Prevención, Control y Vigilancia Forestal',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct89,
                  'name' => 'Adelantar  investigación con  apoyo de los Institutos del SINA,  sobre estado de tres especies forestales  amenazadas, como soporte para autorizar o vedar su uso.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct90,
                  'name' => 'Establecimiento de  rodales semilleros para tres especies forestales en territorios de comunidades indígenas',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct91,
                  'name' => 'Coordinar acciones para el seguimiento y monitoreo de los bosques  de la jurisdicción de la corporación 1',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct92,
                  'name' => 'Coordinar acciones para el seguimiento y monitoreo de los bosques  de la jurisdicción de la corporación 2',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct93,
                  'name' => 'Realizar estudio de la calidad del aire en Quibdó',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct94,
                  'name' => 'Caracterizar el ruido ambiente en la ciudad de Quibdó',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct95,
                  'name' => 'Formular el Plan departamental de gestión de residuos peligrosos',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 34,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct96,
                  'name' => 'Evaluar afectaciones ambientales por la actividad minera 1',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 1,
                  'goal' => 7,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct97,
                  'name' => 'Evaluar afectaciones ambientales por la actividad minera 2',
                  'goal_1' => 15,
                  'goal_2' => 15,
                  'goal_3' => 30,
                  'goal_4' => 0,
                  'goal' => 60,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct98,
                  'name' => 'Implementar mecanismos de seguimiento y control a la explotaciones  mineras en la jurisdicción de la Corporación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct99,
                  'name' => 'Gestionar Acuerdo de producción mas limpia en el sector minero',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct100,
                  'name' => 'Adelantar de registro de los usuarios de mercurio  en la jurisdicción de la corporación, en el marco de la resolución 565 de 2016 del  MADS',
                  'goal_1' => 5,
                  'goal_2' => 15,
                  'goal_3' => 40,
                  'goal_4' => 0,
                  'goal' => 60,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct101,
                  'name' => 'Replicar los resultados de la  investigación  Zero (0) mercurio en unidades minera del departamento del Chocó.  ',
                  'goal_1' => 0,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 0,
                  'goal' => 20,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct102,
                  'name' => 'Implementación de la reducción del uso de mercurio y mejoramiento de la productividad y la sostenibilidad en el distrito minero de Istmina ',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 8,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct103,
                  'name' => 'Diseñar el proceso para incrementar la productividad en la obtención de oro en unidades mineras  con Zero (0) utilización de  mercurio',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective19,
                  'product_id' =>$idobjectiveproduct104,
                  'name' => 'Realizar Muestreos y seguimiento a la actividad minera',
                  'goal_1' => 2,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct105,
                  'name' => 'Prevenir y monitorear la ocurrencia de incendios forestales ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct106,
                  'name' => 'Apoyar los entes territoriales en la ejecución de acciones estructuradas para la gestión integral del riesgo',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct107,
                  'name' => 'Diagnosticar   y/o evaluar afectaciones ambientales  por desastres naturales',
                  'goal_1' => 10,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 25,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct108,
                  'name' => 'Formulación Documento Fortalecimiento de Capacidades en Gestión del Riesgo en el Marco del Cambio Climático en Dos (2) Comunidades Indígenas del departamento del Chocó',
                  'goal_1' => 2,
                  'goal_2' => 0,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 22,
                  'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct109,
                  'name' => 'Control  y seguimiento al aprovechamiento y movilización de flora y fauna silvestre',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct110,
                  'name' => 'Control y segumiento a Planes de Saneamiento y Manejo de Vertimiento (PSMV)',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct111,
                  'name' => 'Control y segumiento a Programas de Uso Eficiente y Ahorro del Agua (PUEAA)',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct112,
                  'name' => 'Control seguimiento y monitoreo de la contaminación atmosférica (ruido, gases)',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct113,
                  'name' => 'Control y seguimiento al manejo,  disposición y aprovechamiento de residuos sólidos ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct114,
                  'name' => 'Control,  seguimiento y evaluación de licencias ambientales, guías ambientales permisos y autorizaciones, planes, concesiones, otros ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct115,
                  'name' => 'Resolver las quejas y reclamos de manera oportuna',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct116,
                  'name' => 'Implementar el MECI y el SGC',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct117,
                  'name' => 'Implementar el plan anualizado de capacitación',
                  'goal_1' => 10,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 40,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct118,
                  'name' => 'Implementar  mecanismos para la sostenibilidad financiera de la corporación',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 15,
                  'goal_4' => 15,
                  'goal' => 40,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct119,
                  'name' => 'Fortalecer la presencia institucional, Gestión Documental y Contractual  y el sistema de información',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct120,
                  'name' => 'Mejoramiento locativo y  tecnológico de  sedes de la Corporación.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct121,
                  'name' => 'Municipios asistidos para el ordenamiento territorial',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct122,
                  'name' => 'Diseñar e implementar el  plan de Comunicaciones',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct123,
                  'name' => 'Formulacion del Plan de Acción Institucional de la corporación',
                  'goal_1' => 100,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity123 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct124,
                  'name' => 'Gestión y fortalecimiento  a los proyectos estrategicos en la corporación',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct125,
                  'name' => 'Acuerdos con organizaciones  gestionados e implementados',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct126,
                  'name' => 'Fortalecimiento a la Infraestructura de TIC y el Recurso Humano de Codechocó',
                  'goal_1' => 50,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 150,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct127,
                  'name' => 'Un predio adquirido con estudios y diseños para la sede principal de la corporación',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct128,
                  'name' => 'Fortalecimiento Sistema de Información',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct129,
                  'name' => 'Ajustar el Plan de Gestión Ambiental Regional (PGAR)',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct130,
                  'name' => 'Fortalecer  la estrategia de gobierno en línea en la corporación',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 75,
                  'goal_4' => 100,
                  'goal' => 225,
                  'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity130 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct131,
                  'name' => 'Asignación presupuestal proyecto',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity131 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct132,
                  'name' => 'Articular los actores institucionales, comunitarios, sociales y del sector  privados para la formulación de la política de educación ambiental',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity132 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct133,
                  'name' => 'Fortalecer la infraestructura física y tecnológica para la capacitación, divulgación y formación ambiental',
                  'goal_1' => 3,
                  'goal_2' => 3,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 8,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity133 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct134,
                  'name' => 'Fortalecer la estrategia de jóvenes de ambiente articulada a redes de trabajo',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 300,
                  'goal' => 303,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity134 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct135,
                  'name' => 'Implementar  estrategias de  educación ambiental en el marco de  la política regional de educación ambiental',
                  'goal_1' => 3,
                  'goal_2' => 1,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 10,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity135 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct136,
                  'name' => 'Grupos de la comunidad fortalecidos y  capacitados para la gestión ambiental ',
                  'goal_1' => 5,
                  'goal_2' => 1,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 26,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity136 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct137,
                  'name' => 'Consolidar alianzas estratégicas con la empresa privada para la sostenibilidad  y la participación ciudadana en los procesos de la educación ambiental',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity137 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct138,
                  'name' => 'Fortalecer la estrategia de vigías ambientales comunitarios  en el escenario de posconflicto',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 10,
                  'goal_4' => 0,
                  'goal' => 11,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity138 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct139,
                  'name' => 'Fortalecer el control social y la  justicia indígena para la gestión ambiental. ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 2,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity139 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct140,
                  'name' => 'Promover la autonomía alimentaria  en territorios étnicos',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 2,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity140 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct141,
                  'name' => 'Diseñar protocolos  para la  investigación sobre recursos biológicos  en territorios étnicos del Chocó ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity141 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct142,
                  'name' => 'Apoyar la estructuración e implementación de los planes de etnodesarrollo y de vida  ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 4,
                  'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity142 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct143,
                  'name' => 'Fortalecimiento del gobierno étnico para la administración territorial',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity143 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct144,
                  'name' => 'Fortalecer las organizaciones étnicas en proceso de valoración de conocimientos y practicas ancestrales en el uso de recursos naturales y la biodiversidad',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity144 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct145,
                  'name' => 'Gestión de convenios interadministrativos con entidades SINA y grupos negros e indígenas para mejorar el desempeño y desarrollo ambiental local y regional',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity145 = DB::getPdo()->lastInsertId();


                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity1,
                    'year' =>1,
                    'value' => 60,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia1 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity2,
                    'year' =>1,
                    'value' => 57,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia2 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity5,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia3 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity6,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia4 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity8,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia5 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity11,
                    'year' =>1,
                    'value' => 33,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia6 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity14,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia7 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>1,
                    'value' => 23,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia8 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity16,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia9 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity17,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia10 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity18,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia11 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity19,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia12 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity20,
                    'year' =>1,
                    'value' => 60,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia13 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity21,
                    'year' =>1,
                    'value' => 75,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia14 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity22,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia15 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity24,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia16 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity25,
                    'year' =>1,
                    'value' => 0.7,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia17 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity26,
                    'year' =>1,
                    'value' => 3,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia18 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity27,
                    'year' =>1,
                    'value' => 0.7,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia19 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity28,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia20 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity40,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia21 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity41,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia22 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity43,
                    'year' =>1,
                    'value' => 3,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia23 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity44,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia24 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity45,
                    'year' =>1,
                    'value' => 3,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia25 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity46,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia26 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity47,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia27 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity48,
                    'year' =>1,
                    'value' => 0.5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia28 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity50,
                    'year' =>1,
                    'value' => 50,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia29 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity51,
                    'year' =>1,
                    'value' => 0.5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia30 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity54,
                    'year' =>1,
                    'value' => 0.5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia31 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity55,
                    'year' =>1,
                    'value' => 0.75,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia32 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity56,
                    'year' =>1,
                    'value' => 53,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia33 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity59,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia34 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity60,
                    'year' =>1,
                    'value' => 20000,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia35 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity61,
                    'year' =>1,
                    'value' => 36,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia36 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity62,
                    'year' =>1,
                    'value' => 0.1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia37 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity63,
                    'year' =>1,
                    'value' => 0.1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia38 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity64,
                    'year' =>1,
                    'value' => 0.5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia39 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity65,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia40 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity67,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia41 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity68,
                    'year' =>1,
                    'value' => 40,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia42 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity70,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia43 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity71,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia44 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity72,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia45 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity73,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia46 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity74,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia47 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity75,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia48 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity78,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia49 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>1,
                    'value' => 3,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia50 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia51 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>1,
                    'value' => 392716284,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia52 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity82,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia53 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity83,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia54 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity85,
                    'year' =>1,
                    'value' => 6,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia55 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity86,
                    'year' =>1,
                    'value' => 0.2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia56 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity88,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia57 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity91,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia58 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity92,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia59 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity95,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia60 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity96,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia61 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity97,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia62 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia63 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity100,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia64 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity102,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia65 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity104,
                    'year' =>1,
                    'value' => 0.4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia66 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia67 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia68 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity107,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia69 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity108,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia70 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity109,
                    'year' =>1,
                    'value' => 70,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia71 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia72 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity111,
                    'year' =>1,
                    'value' => 70,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia73 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia74 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>1,
                    'value' => 73,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia75 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>1,
                    'value' => 34,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia76 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>1,
                    'value' => 85,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia77 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity116,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia78 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>1,
                    'value' => 10,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia79 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>1,
                    'value' => 5,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia80 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia81 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity121,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia82 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>1,
                    'value' => 50,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia83 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity123,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia84 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity124,
                    'year' =>1,
                    'value' => 100,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia85 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity125,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia86 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity126,
                    'year' =>1,
                    'value' => 25,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia87 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity132,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia88 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity133,
                    'year' =>1,
                    'value' => 2,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia89 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity134,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia90 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>1,
                    'value' => 3,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia91 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>1,
                    'value' => 4,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia92 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity143,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia93 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity144,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia94 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity145,
                    'year' =>1,
                    'value' => 1,
                    'date_report' => '2016-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia95 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity1,
                    'year' =>2,
                    'value' => '20',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia96 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity2,
                    'year' =>2,
                    'value' => '15',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia97 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity3,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia98 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity5,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia99 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity14,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia100 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>2,
                    'value' => '15',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia101 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity16,
                    'year' =>2,
                    'value' => '7',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia102 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity17,
                    'year' =>2,
                    'value' => '6',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia103 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity18,
                    'year' =>2,
                    'value' => '20',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia104 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity20,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia105 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity21,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia106 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity22,
                    'year' =>2,
                    'value' => '20',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia107 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity23,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia108 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity24,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia109 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity29,
                    'year' =>2,
                    'value' => '8',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia110 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity30,
                    'year' =>2,
                    'value' => '0.1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia111 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity31,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia112 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity44,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia113 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity45,
                    'year' =>2,
                    'value' => '3',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia114 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity46,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia115 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity47,
                    'year' =>2,
                    'value' => '2',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia116 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity48,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia117 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity49,
                    'year' =>2,
                    'value' => '15',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia118 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity50,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia119 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity51,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia120 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity54,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia121 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity55,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia122 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity59,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia123 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity61,
                    'year' =>2,
                    'value' => '32',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia124 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity64,
                    'year' =>2,
                    'value' => '5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia125 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity65,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia126 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity66,
                    'year' =>2,
                    'value' => '14',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia127 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity68,
                    'year' =>2,
                    'value' => '10',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia128 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity71,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia129 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity74,
                    'year' =>2,
                    'value' => '3',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia130 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity75,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia131 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity76,
                    'year' =>2,
                    'value' => '50',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia132 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity78,
                    'year' =>2,
                    'value' => '25',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia133 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>2,
                    'value' => '3',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia134 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia135 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>2,
                    'value' => '304529739',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia136 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity85,
                    'year' =>2,
                    'value' => '12',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia137 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity86,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia138 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity88,
                    'year' =>2,
                    'value' => '20',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia139 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity91,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia140 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity92,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia141 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity96,
                    'year' =>2,
                    'value' => '2',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia142 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity97,
                    'year' =>2,
                    'value' => '15',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia143 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia144 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity100,
                    'year' =>2,
                    'value' => '15',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia145 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>2,
                    'value' => '0.5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia146 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>2,
                    'value' => '2',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia147 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity107,
                    'year' =>2,
                    'value' => '5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia148 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity109,
                    'year' =>2,
                    'value' => '81',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia149 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>2,
                    'value' => '34',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia150 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity111,
                    'year' =>2,
                    'value' => '65',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia151 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>2,
                    'value' => '2',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia152 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>2,
                    'value' => '50',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia153 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>2,
                    'value' => '55',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia154 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>2,
                    'value' => '88',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia155 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity116,
                    'year' =>2,
                    'value' => '15',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia156 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>2,
                    'value' => '8',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia157 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>2,
                    'value' => '2',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia158 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>2,
                    'value' => '2',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia159 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia160 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity124,
                    'year' =>2,
                    'value' => '100',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia161 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity125,
                    'year' =>2,
                    'value' => '4',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia162 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity127,
                    'year' =>2,
                    'value' => '0.5',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia163 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity130,
                    'year' =>2,
                    'value' => '3',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia164 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity132,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia165 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity133,
                    'year' =>2,
                    'value' => '3',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia166 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity134,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia167 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>2,
                    'value' => '0.1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia168 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>2,
                    'value' => '1',
                    'date_report' => '2017-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia169 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity3,
                    'year' =>3,
                    'value' => '35',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia170 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity5,
                    'year' =>3,
                    'value' => '50',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia171 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity14,
                    'year' =>3,
                    'value' => '0',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia237 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>3,
                    'value' => '20',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia172 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity16,
                    'year' =>3,
                    'value' => '20',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia173 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity17,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia174 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity18,
                    'year' =>3,
                    'value' => '20.75',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia175 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity29,
                    'year' =>3,
                    'value' => '40',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia176 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity30,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia177 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity31,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia178 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity32,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia179 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity33,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia180 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity34,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia181 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity35,
                    'year' =>3,
                    'value' => '25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia182 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity36,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia183 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity37,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia184 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity38,
                    'year' =>3,
                    'value' => '2',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia185 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity40,
                    'year' =>3,
                    'value' => '10',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia186 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity43,
                    'year' =>3,
                    'value' => '3',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia187 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity44,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia188 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity45,
                    'year' =>3,
                    'value' => '3',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia189 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity46,
                    'year' =>3,
                    'value' => '25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia190 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity47,
                    'year' =>3,
                    'value' => '2',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia191 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity49,
                    'year' =>3,
                    'value' => '25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia192 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity50,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia193 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity51,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia194 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity54,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia195 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity56,
                    'year' =>3,
                    'value' => '47',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia196 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity65,
                    'year' =>3,
                    'value' => '2',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia197 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity67,
                    'year' =>3,
                    'value' => '0.8',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia198 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity74,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia199 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity76,
                    'year' =>3,
                    'value' => '10',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia200 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity77,
                    'year' =>3,
                    'value' => '33',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia201 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity78,
                    'year' =>3,
                    'value' => '25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia202 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>3,
                    'value' => '3',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia203 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia204 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>3,
                    'value' => '241357906',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia205 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity82,
                    'year' =>3,
                    'value' => '25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia206 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity85,
                    'year' =>3,
                    'value' => '12',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia207 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity86,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia208 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity88,
                    'year' =>3,
                    'value' => '10',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia209 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity96,
                    'year' =>3,
                    'value' => '2',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia210 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity97,
                    'year' =>3,
                    'value' => '15',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia211 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia212 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity99,
                    'year' =>3,
                    'value' => '25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia213 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>3,
                    'value' => '0.75',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia214 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia215 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity107,
                    'year' =>3,
                    'value' => '5',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia216 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity109,
                    'year' =>3,
                    'value' => '94',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia217 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia218 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia219 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>3,
                    'value' => '60',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia220 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>3,
                    'value' => '85',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia221 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>3,
                    'value' => '75',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia222 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity116,
                    'year' =>3,
                    'value' => '17',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia223 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>3,
                    'value' => '10',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia224 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>3,
                    'value' => '13',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia225 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>3,
                    'value' => '2',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia226 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity121,
                    'year' =>3,
                    'value' => '0.1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia227 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>3,
                    'value' => '85',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia228 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity124,
                    'year' =>3,
                    'value' => '100',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia229 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity125,
                    'year' =>3,
                    'value' => '4',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia230 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity130,
                    'year' =>3,
                    'value' => '50',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia231 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity132,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia232 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity133,
                    'year' =>3,
                    'value' => '0.5',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia233 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity134,
                    'year' =>3,
                    'value' => '0.25',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia234 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>3,
                    'value' => '1',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia235 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>3,
                    'value' => '3',
                    'date_report' => '2018-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia236 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity8,
                    'year' =>4,
                    'value' => '12',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia238 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity9,
                    'year' =>4,
                    'value' => '13',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia239 = DB::getPdo()->lastInsertId();

                    DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity15,
                    'year' =>4,
                    'value' => '7',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia240 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity16,
                    'year' =>4,
                    'value' => '7',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia241 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity17,
                    'year' =>4,
                    'value' => '2.5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia242 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity18,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia243 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity19,
                    'year' =>4,
                    'value' => '0.5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia244 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity21,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia245 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity22,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia246 = DB::getPdo()->lastInsertId();                    
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity32,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia247 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity33,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia248 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity34,
                    'year' =>4,
                    'value' => '0.5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia249 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity39,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia250 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity40,
                    'year' =>4,
                    'value' => '50',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia251 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity42,
                    'year' =>4,
                    'value' => '0',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia252 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity43,
                    'year' =>4,
                    'value' => '2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia253 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity45,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia254 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity47,
                    'year' =>4,
                    'value' => '2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia255 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity48,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia256 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity49,
                    'year' =>4,
                    'value' => '15',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia257 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity50,
                    'year' =>4,
                    'value' => '100',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia258 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity51,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia259 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity54,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia260 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity56,
                    'year' =>4,
                    'value' => '6',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia261 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity57,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia262 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity58,
                    'year' =>4,
                    'value' => '15',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia263 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity59,
                    'year' =>4,
                    'value' => '0.85',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia264 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity60,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia265 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity62,
                    'year' =>4,
                    'value' => '0.9',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia266 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity68,
                    'year' =>4,
                    'value' => '40',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia267 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity70,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia268 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity71,
                    'year' =>4,
                    'value' => '0.5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia269 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity75,
                    'year' =>4,
                    'value' => '50',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia270 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity77,
                    'year' =>4,
                    'value' => '20',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia271 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity78,
                    'year' =>4,
                    'value' => '70',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia272 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity79,
                    'year' =>4,
                    'value' => '3',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia273 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity80,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia274 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity81,
                    'year' =>4,
                    'value' => '306000000',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia275 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity82,
                    'year' =>4,
                    'value' => '33',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia276 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity85,
                    'year' =>4,
                    'value' => '7',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia277 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity86,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia278 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity87,
                    'year' =>4,
                    'value' => '4',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia279 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity88,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia280 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity90,
                    'year' =>4,
                    'value' => '0',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia281 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity96,
                    'year' =>4,
                    'value' => '0.8',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia282 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity98,
                    'year' =>4,
                    'value' => '0.8',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia283 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity99,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia284 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity105,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia285 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity106,
                    'year' =>4,
                    'value' => '3',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia286 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity107,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia287 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity109,
                    'year' =>4,
                    'value' => '20',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia288 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity110,
                    'year' =>4,
                    'value' => '4',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia289 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity112,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia290 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity113,
                    'year' =>4,
                    'value' => '30',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia291 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity114,
                    'year' =>4,
                    'value' => '30',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia292 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity115,
                    'year' =>4,
                    'value' => '52',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia293 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity116,
                    'year' =>4,
                    'value' => '20',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia294 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity117,
                    'year' =>4,
                    'value' => '5',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia295 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity118,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia296 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity119,
                    'year' =>4,
                    'value' => '2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia297 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity120,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia298 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity121,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia299 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity122,
                    'year' =>4,
                    'value' => '75',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia300 = DB::getPdo()->lastInsertId();

                    DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity130,
                    'year' =>4,
                    'value' => '50',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia301 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity132,
                    'year' =>4,
                    'value' => '0.8',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia302 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity133,
                    'year' =>4,
                    'value' => '0.6',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia303 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity135,
                    'year' =>4,
                    'value' => '2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia304 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity136,
                    'year' =>4,
                    'value' => '10',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia305 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity137,
                    'year' =>4,
                    'value' => '0.2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia306 = DB::getPdo()->lastInsertId();
                  
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity139,
                    'year' =>4,
                    'value' => '2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia307 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity140,
                    'year' =>4,
                    'value' => '0.2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia308 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity141,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia309 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity142,
                    'year' =>4,
                    'value' => '2',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia310 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity143,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia311 = DB::getPdo()->lastInsertId();
                  DB::table('evidence_advance')->insert([
                    'activity_id' => $idactivity144,
                    'year' =>4,
                    'value' => '1',
                    'date_report' => '2019-12-31',
                    'rezago' => false,
                    ]);
                    $idevidencia312 = DB::getPdo()->lastInsertId();

                    DB::table('evidence_advance')->insert([
                      'activity_id' => $idactivity93,
                      'year' =>1,
                      'value' => '1',
                      'date_report' => '2016-12-31',
                      'rezago' => false,
                      ]);
                      $idevidencia320 = DB::getPdo()->lastInsertId();

                      DB::table('evidence_advance')->insert([
                        'activity_id' => $idactivity94,
                        'year' =>1,
                        'value' => '1',
                        'date_report' => '2016-12-31',
                        'rezago' => false,
                        ]);
                        $idevidencia321 = DB::getPdo()->lastInsertId();

                        DB::table('evidence_advance')->insert([
                          'activity_id' => $idactivity103,
                          'year' =>1,
                          'value' => '1',
                          'date_report' => '2016-12-31',
                          'rezago' => false,
                          ]);
                          $idevidencia322 = DB::getPdo()->lastInsertId();

                          DB::table('evidence_advance')->insert([
                            'activity_id' => $idactivity127,
                            'year' =>1,
                            'value' => '1',
                            'date_report' => '2016-12-31',
                            'rezago' => false,
                            ]);
                            $idevidencia323 = DB::getPdo()->lastInsertId();

                          DB::table('evidence_advance')->insert([
                              'activity_id' => $idactivity32,
                              'year' =>2,
                              'value' => '1',
                              'date_report' => '2017-12-31',
                              'rezago' => false,
                              ]);
                              $idevidencia324 = DB::getPdo()->lastInsertId();

                              DB::table('evidence_advance')->insert([
                                'activity_id' => $idactivity33,
                                'year' =>2,
                                'value' => '1',
                                'date_report' => '2017-12-31',
                                'rezago' => false,
                                ]);
                                $idevidencia325 = DB::getPdo()->lastInsertId();
                                
                          DB::table('evidence_advance')->insert([
                            'activity_id' => $idactivity34,
                            'year' =>2,
                            'value' => '1',
                            'date_report' => '2017-12-31',
                            'rezago' => false,
                            ]);
                            $idevidencia326 = DB::getPdo()->lastInsertId();
                            
                            DB::table('evidence_advance')->insert([
                              'activity_id' => $idactivity56,
                              'year' =>2,
                              'value' => '1',
                              'date_report' => '2017-12-31',
                              'rezago' => false,
                              ]);
                              $idevidencia327 = DB::getPdo()->lastInsertId();

                              DB::table('evidence_advance')->insert([
                                'activity_id' => $idactivity77,
                                'year' =>2,
                                'value' => '1',
                                'date_report' => '2017-12-31',
                                'rezago' => false,
                                ]);
                                $idevidencia328 = DB::getPdo()->lastInsertId();

                                DB::table('evidence_advance')->insert([
                                  'activity_id' => $idactivity82,
                                  'year' =>2,
                                  'value' => '1',
                                  'date_report' => '2017-12-31',
                                  'rezago' => false,
                                  ]);
                                  $idevidencia329 = DB::getPdo()->lastInsertId();
  
                                  DB::table('evidence_advance')->insert([
                                    'activity_id' => $idactivity128,
                                    'year' =>2,
                                    'value' => '1',
                                    'date_report' => '2017-12-31',
                                    'rezago' => false,
                                    ]);
                                    $idevidencia330 = DB::getPdo()->lastInsertId();

                                    DB::table('evidence_advance')->insert([
                                      'activity_id' => $idactivity42,
                                      'year' =>3,
                                      'value' => '1',
                                      'date_report' => '2018-12-31',
                                      'rezago' => false,
                                      ]);
                                      $idevidencia331 = DB::getPdo()->lastInsertId();

                             DB::table('evidence_advance')->insert([
                                'activity_id' => $idactivity60,
                                'year' =>3,
                                'value' => '1',
                                'date_report' => '2018-12-31',
                                'rezago' => false,
                                ]);
                                $idevidencia332 = DB::getPdo()->lastInsertId();
                                        

                                DB::table('evidence_advance')->insert([
                                  'activity_id' => $idactivity68,
                                  'year' =>3,
                                  'value' => '1',
                                  'date_report' => '2018-12-31',
                                  'rezago' => false,
                                  ]);
                                  $idevidencia333 = DB::getPdo()->lastInsertId();
                                                                                             
                                  DB::table('evidence_advance')->insert([
                                    'activity_id' => $idactivity91,
                                    'year' =>3,
                                    'value' => '1',
                                    'date_report' => '2018-12-31',
                                    'rezago' => false,
                                    ]);
                                    $idevidencia334 = DB::getPdo()->lastInsertId();
                                            
  
                                    DB::table('evidence_advance')->insert([
                                      'activity_id' => $idactivity131,
                                      'year' =>3,
                                      'value' => '1',
                                      'date_report' => '2018-12-31',
                                      'rezago' => false,
                                      ]);
                                      $idevidencia335 = DB::getPdo()->lastInsertId();

                                      DB::table('evidence_advance')->insert([
                                        'activity_id' => $idactivity91,
                                        'year' =>4,
                                        'value' => '1',
                                        'date_report' => '2019-12-31',
                                        'rezago' => false,
                                        ]);
                                        $idevidencia336 = DB::getPdo()->lastInsertId();

                                        DB::table('evidence_advance')->insert([
                                          'activity_id' => $idactivity5,
                                          'year' =>4,
                                          'value' => '1',
                                          'date_report' => '2019-12-31',
                                          'rezago' => false,
                                          ]);
                                          $idevidencia337 = DB::getPdo()->lastInsertId();

                                    DB::table('evidence_advance')->insert([
                                      'activity_id' => $idactivity69,
                                      'year' =>3,
                                      'value' => '1',
                                      'date_report' => '2018-12-31',
                                      'rezago' => false,
                                      ]);
                                      $idevidencia338 = DB::getPdo()->lastInsertId();

                                      DB::table('evidence_advance')->insert([
                                        'activity_id' => $idactivity108,
                                        'year' =>4,
                                        'value' => '1',
                                        'date_report' => '2019-12-31',
                                        'rezago' => false,
                                        ]);
                                        $idevidencia339 = DB::getPdo()->lastInsertId();     
                                        
                                       DB::table('evidence_advance')->insert([
                                        'activity_id' => $idactivity134,
                                        'year' =>4,
                                        'value' => '1',
                                        'date_report' => '2019-12-31',
                                        'rezago' => false,
                                        ]);
                                        $idevidencia340 = DB::getPdo()->lastInsertId();   


          DB::table('financing_sources')->insert([
          'father_id' => 14,
          'code' => '1.1.1.1.1.1.2.1',
          'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();
          
          
         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 90,
          'code' => '1.1.2.4.2.3',
          'name' => 'Venta de bienes y servicios',
          'description' => 'Venta de bienes y servicios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente5 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 208,
          'code' => '1.2.5.1.3',
          'name' => 'Otros Convenios',
          'description' => 'Otros Convenios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();

        DB::table('financing_sources')->insert([
          'father_id' => 1,
          'code' => '1.3',
          'name' => 'Otros Aportes de Otras Entidades',
          'description' => 'Otros Aportes de Otras Entidades',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente7 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente8 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente9 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 48,
          'code' => '1.1.2.2.1.1.3.1',
          'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente10 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.7',
          'name' => 'Excedentes financieros',
          'description' => 'Excedentes financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 279,
          'code' => '1.2.7.3.3.5',
          'name' => 'Cancelación de reservas Otras tasas',
          'description' => 'Cancelación de reservas Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 241,
          'code' => '1.2.6.3.5',
          'name' => 'Recuperación de cartera Otras tasas',
          'description' => 'Recuperación de cartera Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 250,
          'code' => '1.2.7.4',
          'name' => 'Otros recursos del balance',
          'description' => 'Otros recursos del balance',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente16 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente17 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 118,
          'code' => '1.1.2.5.1.1.2',
          'name' => 'Aportes de la Nación para Inversión',
          'description' => 'Aportes de la Nación para Inversión',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 10,
          ]);
          $idFuente18 = DB::getPdo()->lastInsertId();
          
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 535322637,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 535322637,
          'year' => 1,
          ]);
          $idPlan1 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 819585317,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 819585317,
          'year' => 1,
          ]);
          $idPlan2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 29460766,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 29460766,
          'year' => 1,
          ]);
          $idPlan3 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1779727348,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1779727348,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan4 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 362324467,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 362324467,
          'year' => 1,
          ]);
          $idPlan5 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 307012523,
          'functioning_percentage' => 20,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 80,
          'functioning' => 61402504.6,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 245610018.4,
          'year' => 1,
          ]);
          $idPlan6 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 75915977,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 75915977,
          'year' => 1,
          ]);
          $idPlan7 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 3782775114,
          'functioning_percentage' => 60,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 40,
          'functioning' => 2269665068.4,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1513110045.6,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 217334,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 217334,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan9 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 20062933,
          'functioning_percentage' => 99.93,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0.07,
          'functioning' => 20048888.9469,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 14044.0531,
          'year' => 1,
          ]);
          $idPlan10 = DB::getPdo()->lastInsertId();

        DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
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
          $idPlan11 = DB::getPdo()->lastInsertId();
          
        DB::table('financial_plans')->insert([
        'p_a_i_id' => $idpai1,
        'source_id' => $idFuente14,
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
        $idPlan12 = DB::getPdo()->lastInsertId();

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 903349710,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 903349710,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan13 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 312870700,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 312870700,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan14 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2488859226,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2488859226,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan15 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 10821180277,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 10821180277,
          'year' => 1,
          ]);
          $idPlan16 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 400629429,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 400629429,
          'year' => 2,
          ]);
          $idPlan17 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 1466875342,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1466875342,
          'year' => 2,
          ]);
          $idPlan18 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 37284258,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 37284258,
          'year' => 2,
          ]);
          $idPlan19 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 841309135,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 841309135,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan20 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 156326,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 156326,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan21 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 1216315001,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1216315001,
          'year' => 2,
          ]);
          $idPlan22 = DB::getPdo()->lastInsertId();
          
        DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
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
          $idPlan23 = DB::getPdo()->lastInsertId();
            
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 159069442,
          'functioning_percentage' => 52.865,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 47.135,
          'functioning' => 84092060.5133,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 74977381.4867,
          'year' => 2,
          ]);
          $idPlan24 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 25470435,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 25470435,
          'year' => 2,
          ]);
          $idPlan25 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 4291365159,
          'functioning_percentage' => 72,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 28,
          'functioning' => 3089782914.48,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1201582244.52,
          'year' => 2,
          ]);
          $idPlan26 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 5738786,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 5738786,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan27 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 118371343,
          'functioning_percentage' => 99.93,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0.07,
          'functioning' => 118288483.0599,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 82859.9401,
          'year' => 2,
          ]);
          $idPlan28 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
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
          $idPlan29 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 1233457345,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1233457345,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan31 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 206902467.7,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 206902467.7,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan32 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2399358571,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2399358571,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan33 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 8210000008,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 8210000008,
          'year' => 2,
          ]);
          $idPlan34 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 372398834,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 372398834,
          'year' => 3,
          ]);
          $idPlan35 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 2295151314.75,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2295151314.75,
          'year' => 3,
          ]);
          $idPlan36 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 57335492,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 57335492,
          'year' => 3,
          ]);
          $idPlan37 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1299416758,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1299416758,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan38 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
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
          $idPlan39 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 49849682,
          'functioning_percentage' => 30.912,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 69.088,
          'functioning' => 15409533.69984,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 34440148.30016,
          'year' => 3,
          ]);
          $idPlan40 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 37260775,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 37260775,
          'year' => 3,
          ]);
          $idPlan41 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 4473299940,
          'functioning_percentage' => 75,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 25,
          'functioning' => 3354974955,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1118324985,
          'year' => 3,
          ]);
          $idPlan42 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 431014852,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 431014852,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan43 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 126297778,
          'functioning_percentage' => 99.93,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0.07,
          'functioning' => 126209369.5554,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 88408.4446,
          'year' => 3,
          ]);
          $idPlan44 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 2757244195,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2757244195,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan45 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2665295703,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2665295703,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan46 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 8258984173,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 8258984173,
          'year' => 3,
          ]);
          $idPlan47 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 854666217,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 854666217,
          'year' => 4,
          ]);
          $idPlan48 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 5012074573,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 5012074573,
          'year' => 4,
          ]);
          $idPlan49 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 34486651,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 34486651,
          'year' => 4,
          ]);
          $idPlan50 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 1079496048,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1079496048,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan51 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 300000000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 300000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan52 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 213383698,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 213383698,
          'year' => 4,
          ]);
          $idPlan53 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 22888171,
          'functioning_percentage' => 40.24,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 59.76,
          'functioning' => 9210200.0104,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 13677970.9896,
          'year' => 4,
          ]);
          $idPlan54 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 15648474,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 15648474,
          'year' => 4,
          ]);
          $idPlan55 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 4688744756,
          'functioning_percentage' => 87,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 13,
          'functioning' => 4079207937.72,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 609536818.28,
          'year' => 4,
          ]);
          $idPlan56 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 985939885,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 985939885,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan57 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 195045125,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 195045125,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan58 = DB::getPdo()->lastInsertId();
           


         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 2655934502,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2655934502,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan59 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2732856342,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2732856342,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan60 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 4451966464,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 4451966464,
          'year' => 4,
          ]);
          $idPlan61 = DB::getPdo()->lastInsertId();
          
        DB::table('implementations')->insert([
          'p_a_i_s_id'=>$idpai1,
          ]);
          $idImplementation1 = DB::getPdo()->lastInsertId();

           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 10971612,
          'financial_plans_id' => $idPlan1,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo1 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1187180676,
          'financial_plans_id' => $idPlan2,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo2 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 34581728,
          'financial_plans_id' => $idPlan3,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo3 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 679680884,
          'financial_plans_id' => $idPlan4,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo4 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 426812700,
          'financial_plans_id' => $idPlan5,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo5 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan6,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo6 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 8773151,
          'financial_plans_id' => $idPlan7,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo7 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 4216102941,
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
          'value' => 21321618.21,
          'financial_plans_id' => $idPlan10,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo10 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 550216,
          'financial_plans_id' => $idPlan11,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo11 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan12,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo12 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 826544156,
          'financial_plans_id' => $idPlan13,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo13 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 312870700,
          'financial_plans_id' => $idPlan14,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo14 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1936034266,
          'financial_plans_id' => $idPlan15,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo15 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 816994161,
          'financial_plans_id' => $idPlan16,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo16 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 196843622,
          'financial_plans_id' => $idPlan17,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo17 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1164292847,
          'financial_plans_id' => $idPlan18,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo18 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 16797359,
          'financial_plans_id' => $idPlan19,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo19 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 805327637,
          'financial_plans_id' => $idPlan20,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo20 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan21,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo21 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 638168867,
          'financial_plans_id' => $idPlan22,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo22 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan23,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo23 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 23005264,
          'financial_plans_id' => $idPlan24,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo24 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 9470513,
          'financial_plans_id' => $idPlan25,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo25 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 4914642688.24,
          'financial_plans_id' => $idPlan26,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo26 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 158538457,
          'financial_plans_id' => $idPlan27,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo27 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 49117139.23,
          'financial_plans_id' => $idPlan28,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo28 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan29,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo29 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 647944000.32,
          'financial_plans_id' => $idPlan31,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo31 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan32,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo32 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2256354723,
          'financial_plans_id' => $idPlan33,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo33 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 201511284,
          'financial_plans_id' => $idPlan34,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo34 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 539298273,
          'financial_plans_id' => $idPlan35,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo35 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1508064641,
          'financial_plans_id' => $idPlan36,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo36 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 9699569,
          'financial_plans_id' => $idPlan37,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo37 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 881796715,
          'financial_plans_id' => $idPlan38,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo38 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 551714374,
          'financial_plans_id' => $idPlan39,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo39 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 32078474,
          'financial_plans_id' => $idPlan40,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo40 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 10876638,
          'financial_plans_id' => $idPlan41,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo41 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 4709543901,
          'financial_plans_id' => $idPlan42,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo42 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan43,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo43 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 10353476,
          'financial_plans_id' => $idPlan44,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo44 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 610625149,
          'financial_plans_id' => $idPlan45,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo45 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2559744903,
          'financial_plans_id' => $idPlan46,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo46 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 5950983878,
          'financial_plans_id' => $idPlan47,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo47 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 219087159,
          'financial_plans_id' => $idPlan48,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo48 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2642004560,
          'financial_plans_id' => $idPlan49,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo49 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 5452992,
          'financial_plans_id' => $idPlan50,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo50 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 588838011,
          'financial_plans_id' => $idPlan51,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo51 = DB::getPdo()->lastInsertId();
           
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 306042562,
          'financial_plans_id' => $idPlan53,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo53 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 34218856,
          'financial_plans_id' => $idPlan54,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo54 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1483475,
          'financial_plans_id' => $idPlan55,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo55 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 4816630819,
          'financial_plans_id' => $idPlan56,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo56 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan57,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo57 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 155923084,
          'financial_plans_id' => $idPlan58,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo58 = DB::getPdo()->lastInsertId();
           


         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 3201671891,
          'financial_plans_id' => $idPlan59,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo59 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2061090951,
          'financial_plans_id' => $idPlan60,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo60 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 6017857437,
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
            'group_id' => 10,
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
            'group_id' => 10,
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
            'group_id' => 10,
            ]);
            $idFuenteGasto3 = DB::getPdo()->lastInsertId();
            
            
          DB::table('cost_sources')->insert([
            'father_id' => 16,
            'code' => '2.1.3.2.1.1',
            'name' => 'Mesadas pensionales (de pensiones)',
            'description' => 'Mesadas pensionales (de pensiones)',
            'functioning' => TRUE,
            'compensation' => FALSE,
            'debt_service' => FALSE,
            'group_id' => 10,
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
            'group_id' => 10,
            ]);
            $idFuenteGasto8 = DB::getPdo()->lastInsertId();
            
            
          DB::table('cost_sources')->insert([
            'father_id' => 19,
            'code' => '2.1.3.3.1',
            'name' => 'Comisiones y otros gastos',
            'description' => 'Comisiones y otros gastos',
            'functioning' => TRUE,
            'compensation' => FALSE,
            'debt_service' => FALSE,
            'group_id' => 10,
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
            'group_id' => 10,
            ]);
            $idFuenteGasto9 = DB::getPdo()->lastInsertId();
            
            
          DB::table('cost_sources')->insert([
            'father_id' => 29,
            'code' => '2.1.4.3.1',
            'name' => 'Cuota de fiscalización y auditaje',
            'description' => 'Cuota de fiscalización y auditaje',
            'functioning' => TRUE,
            'compensation' => FALSE,
            'debt_service' => FALSE,
            'group_id' => 10,
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
            'group_id' => 10,
            ]);
            $idFuenteGasto4 = DB::getPdo()->lastInsertId();
            
            
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 3190689868.36,
              'value_comitted' => 3130791625.28,
              'value_paid' => 2859016496.28,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 10,
              ]);
              $idGasto1 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 66374556,
              'value_comitted' => 51806503,
              'value_paid' => 32641795,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 10,
              ]);
              $idGasto2 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 1449678773,
              'value_comitted' => 1318875532.2,
              'value_paid' => 935529426.2,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 10,
              ]);
              $idGasto3 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 2,
              'value_comitted' => 0,
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
              'group_id' => 10,
              ]);
              $idGasto4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 547289079,
              'value_comitted' => 547064353.5,
              'value_paid' => 41448408.5,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 10,
              ]);
              $idGasto5 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 13272458.64,
              'value_comitted' => 10340820.64,
              'value_paid' => 8506250.64,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto7,
              'p_a_i_id' => $idpai1,
              'group_id' => 10,
              ]);
              $idGasto6 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 67089571,
              'value_comitted' => 67089571,
              'value_paid' => 9559134,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto9,
              'p_a_i_id' => $idpai1,
              'group_id' => 10,
              ]);
              $idGasto7 = DB::getPdo()->lastInsertId();
              
              
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 2077567021,
                'value_comitted' => 2042336639.72,
                'value_paid' => 1688456915,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto1,
                'p_a_i_id' => $idpai1,
                'group_id' => 10,
                ]);
                $idGasto8 = DB::getPdo()->lastInsertId();
                
                
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 24500000,
                'value_comitted' => 24489572,
                'value_paid' => 9173860,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto2,
                'p_a_i_id' => $idpai1,
                'group_id' => 10,
                ]);
                $idGasto9 = DB::getPdo()->lastInsertId();
                
                
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 53891439,
                'value_comitted' => 53891439,
                'value_paid' => 37294295,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto3,
                'p_a_i_id' => $idpai1,
                'group_id' => 10,
                ]);
                $idGasto10 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 20014000,
                'value_comitted' => 19791047,
                'value_paid' => 19791047,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto5,
                'p_a_i_id' => $idpai1,
                'group_id' => 10,
                ]);
                $idGasto11 = DB::getPdo()->lastInsertId();
                
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 312886766,
                'value_comitted' => 224822657,
                'value_paid' => 170744127,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto9,
                'p_a_i_id' => $idpai1,
                'group_id' => 10,
                ]);
                $idGasto12 = DB::getPdo()->lastInsertId();
                
                
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 3378145129,
                  'value_comitted' => 3362203450,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto1,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 10,
                  ]);
                  $idGasto13 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 88342700,
                  'value_comitted' => 88342700,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto2,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 10,
                  ]);
                  $idGasto14 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 1348380947.33,
                  'value_comitted' => 1348170535.65,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto3,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 10,
                  ]);
                  $idGasto15 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 18996997,
                  'value_comitted' => 18496995,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto4,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 10,
                  ]);
                  $idGasto16 = DB::getPdo()->lastInsertId();

                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 643466699.67,
                  'value_comitted' => 643466699.67,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto6,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 10,
                  ]);
                  $idGasto17 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 25561705,
                  'value_comitted' => 25561705,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto7,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 10,
                  ]);
                  $idGasto18 = DB::getPdo()->lastInsertId();
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 60043742,
                  'value_comitted' => 60043742,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto9,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 10,
                  ]);
                  $idGasto19 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 2217992571,
                    'value_comitted' => 2214520171,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto1,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 10,
                    ]);
                    $idGasto20 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 20000000,
                    'value_comitted' => 19997900,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto2,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 10,
                    ]);
                    $idGasto21 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 61000000,
                    'value_comitted' => 60050000,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto3,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 10,
                    ]);
                    $idGasto22 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 20014000,
                    'value_comitted' => 18569149,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto5,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 10,
                    ]);
                    $idGasto23 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 80352000,
                    'value_comitted' => 79835885,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto9,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 10,
                    ]);
                    $idGasto24 = DB::getPdo()->lastInsertId();
                    
                    
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 4285316113,
                      'value_comitted' => 3563397601,
                      'value_paid' => 2855341726,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto1,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 10,
                      ]);
                      $idGasto25 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 2395285302,
                      'value_comitted' => 1884333999,
                      'value_paid' => 1344499650,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto2,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 10,
                      ]);
                      $idGasto26 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 23613866,
                      'value_comitted' => 650000,
                      'value_paid' => 650000,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto4,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 10,
                      ]);
                      $idGasto27 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 13300000,
                      'value_comitted' => 13052455,
                      'value_paid' => 13052455,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto5,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 10,
                      ]);
                      $idGasto28 = DB::getPdo()->lastInsertId();
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 50000000,
                      'value_comitted' => 27349261,
                      'value_paid' => 9594446,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto7,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 10,
                      ]);
                      $idGasto29 = DB::getPdo()->lastInsertId();
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 222000000,
                      'value_comitted' => 195382535,
                      'value_paid' => 181760743,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto9,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 10,
                      ]);
                      $idGasto30 = DB::getPdo()->lastInsertId();
                      
                      
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 2330376766,
                        'value_comitted' => 2324946066,
                        'value_paid' => 2250690455,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto1,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 10,
                        ]);
                        $idGasto31 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 84312900,
                        'value_comitted' => 82956540,
                        'value_paid' => 58448411,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto2,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 10,
                        ]);
                        $idGasto32 = DB::getPdo()->lastInsertId();
                        
                        
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 20615000,
                        'value_comitted' => 20615000,
                        'value_paid' => 20615000,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto5,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 10,
                        ]);
                        $idGasto33 = DB::getPdo()->lastInsertId();
                        
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 229991037,
                        'value_comitted' => 229991037,
                        'value_paid' => 229991037,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto9,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 10,
                        ]);
                        $idGasto34 = DB::getPdo()->lastInsertId();
                        
                        
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 5685918593,
                          'value_comitted' => 2792066016,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto1,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 10,
                          ]);
                          $idGasto35 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 232000000,
                          'value_comitted' => 225588100,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto2,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 10,
                          ]);
                          $idGasto36 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 2309044556,
                          'value_comitted' => 2310241810,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto3,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 10,
                          ]);
                          $idGasto37 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 29426041,
                          'value_comitted' => 0,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto4,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 10,
                          ]);
                          $idGasto38 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 15000000,
                          'value_comitted' => 9062402,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto7,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 10,
                          ]);
                          $idGasto39 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 13000000,
                          'value_comitted' => 1669042,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto8,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 10,
                          ]);
                          $idGasto40 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 166000000,
                          'value_comitted' => 161118901,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto9,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 10,
                          ]);
                          $idGasto41 = DB::getPdo()->lastInsertId();
                          
                          
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 2383678878,
                            'value_comitted' => 2293220064,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto1,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 10,
                            ]);
                            $idGasto42 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 86842287,
                            'value_comitted' => 54221974,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto2,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 10,
                            ]);
                            $idGasto43 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 21233450,
                            'value_comitted' => 0,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto5,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 10,
                            ]);
                            $idGasto44 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 241101727,
                            'value_comitted' => 229554837,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto9,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 10,
                            ]);
                            $idGasto45 = DB::getPdo()->lastInsertId();                                

                                   DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity1,
                      'source_id' =>$idPlan16,
                      'value' => 130000000,
                      'goal' => 0,
                      'evidence_balance' => 130000000,
                      'age' => 1,
                      ]);
                      $idactivitySource1 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity5,
                      'source_id' =>$idPlan16,
                      'value' => 120000000,
                      'goal' => 0,
                      'evidence_balance' => 120000000,
                      'age' => 1,
                      ]);
                      $idactivitySource2 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity6,
                      'source_id' =>$idPlan16,
                      'value' => 239000000,
                      'goal' => 0,
                      'evidence_balance' => 239000000,
                      'age' => 1,
                      ]);
                      $idactivitySource3 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity8,
                      'source_id' =>$idPlan16,
                      'value' => 1127820592,
                      'goal' => 0,
                      'evidence_balance' => 1127820592,
                      'age' => 1,
                      ]);
                      $idactivitySource4 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity15,
                      'source_id' =>$idPlan16,
                      'value' => 127500000,
                      'goal' => 0,
                      'evidence_balance' => 127500000,
                      'age' => 1,
                      ]);
                      $idactivitySource5 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity16,
                      'source_id' =>$idPlan16,
                      'value' => 12500000,
                      'goal' => 0,
                      'evidence_balance' => 12500000,
                      'age' => 1,
                      ]);
                      $idactivitySource6 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity20,
                      'source_id' =>$idPlan16,
                      'value' => 203000000,
                      'goal' => 0,
                      'evidence_balance' => 203000000,
                      'age' => 1,
                      ]);
                      $idactivitySource7 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity21,
                      'source_id' =>$idPlan16,
                      'value' => 135000000,
                      'goal' => 0,
                      'evidence_balance' => 135000000,
                      'age' => 1,
                      ]);
                      $idactivitySource8 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity25,
                      'source_id' =>$idPlan16,
                      'value' => 126920000,
                      'goal' => 0,
                      'evidence_balance' => 126920000,
                      'age' => 1,
                      ]);
                      $idactivitySource9 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity26,
                      'source_id' =>$idPlan16,
                      'value' => 111760000,
                      'goal' => 0,
                      'evidence_balance' => 111760000,
                      'age' => 1,
                      ]);
                      $idactivitySource10 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity27,
                      'source_id' =>$idPlan16,
                      'value' => 49300000,
                      'goal' => 0,
                      'evidence_balance' => 49300000,
                      'age' => 1,
                      ]);
                      $idactivitySource11 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity28,
                      'source_id' =>$idPlan16,
                      'value' => 100300000,
                      'goal' => 0,
                      'evidence_balance' => 100300000,
                      'age' => 1,
                      ]);
                      $idactivitySource12 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity40,
                      'source_id' =>$idPlan16,
                      'value' => 967735877,
                      'goal' => 0,
                      'evidence_balance' => 967735877,
                      'age' => 1,
                      ]);
                      $idactivitySource13 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity41,
                      'source_id' =>$idPlan16,
                      'value' => 400000000,
                      'goal' => 0,
                      'evidence_balance' => 400000000,
                      'age' => 1,
                      ]);
                      $idactivitySource14 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity44,
                      'source_id' =>$idPlan16,
                      'value' => 261000000,
                      'goal' => 0,
                      'evidence_balance' => 261000000,
                      'age' => 1,
                      ]);
                      $idactivitySource15 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity45,
                      'source_id' =>$idPlan16,
                      'value' => 24000000,
                      'goal' => 0,
                      'evidence_balance' => 24000000,
                      'age' => 1,
                      ]);
                      $idactivitySource16 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity46,
                      'source_id' =>$idPlan16,
                      'value' => 124100000,
                      'goal' => 0,
                      'evidence_balance' => 124100000,
                      'age' => 1,
                      ]);
                      $idactivitySource17 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity47,
                      'source_id' =>$idPlan16,
                      'value' => 118000000,
                      'goal' => 0,
                      'evidence_balance' => 118000000,
                      'age' => 1,
                      ]);
                      $idactivitySource18 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity48,
                      'source_id' =>$idPlan16,
                      'value' => 100000000,
                      'goal' => 0,
                      'evidence_balance' => 100000000,
                      'age' => 1,
                      ]);
                      $idactivitySource19 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity50,
                      'source_id' =>$idPlan16,
                      'value' => 50000000,
                      'goal' => 0,
                      'evidence_balance' => 50000000,
                      'age' => 1,
                      ]);
                      $idactivitySource20 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity51,
                      'source_id' =>$idPlan16,
                      'value' => 50000000,
                      'goal' => 0,
                      'evidence_balance' => 50000000,
                      'age' => 1,
                      ]);
                      $idactivitySource21 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity55,
                      'source_id' =>$idPlan16,
                      'value' => 178692818,
                      'goal' => 0,
                      'evidence_balance' => 178692818,
                      'age' => 1,
                      ]);
                      $idactivitySource22 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity56,
                      'source_id' =>$idPlan16,
                      'value' => 3637441407,
                      'goal' => 0,
                      'evidence_balance' => 3637441407,
                      'age' => 1,
                      ]);
                      $idactivitySource23 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity59,
                      'source_id' =>$idPlan16,
                      'value' => 397000000,
                      'goal' => 0,
                      'evidence_balance' => 397000000,
                      'age' => 1,
                      ]);
                      $idactivitySource24 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity60,
                      'source_id' =>$idPlan16,
                      'value' => 91700000,
                      'goal' => 0,
                      'evidence_balance' => 91700000,
                      'age' => 1,
                      ]);
                      $idactivitySource25 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity61,
                      'source_id' =>$idPlan16,
                      'value' => 245000000,
                      'goal' => 0,
                      'evidence_balance' => 245000000,
                      'age' => 1,
                      ]);
                      $idactivitySource26 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity62,
                      'source_id' =>$idPlan16,
                      'value' => 82000000,
                      'goal' => 0,
                      'evidence_balance' => 82000000,
                      'age' => 1,
                      ]);
                      $idactivitySource27 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity63,
                      'source_id' =>$idPlan16,
                      'value' => 92500000,
                      'goal' => 0,
                      'evidence_balance' => 92500000,
                      'age' => 1,
                      ]);
                      $idactivitySource28 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity64,
                      'source_id' =>$idPlan16,
                      'value' => 163800000,
                      'goal' => 0,
                      'evidence_balance' => 163800000,
                      'age' => 1,
                      ]);
                      $idactivitySource29 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity72,
                      'source_id' =>$idPlan16,
                      'value' => 140000000,
                      'goal' => 0,
                      'evidence_balance' => 140000000,
                      'age' => 1,
                      ]);
                      $idactivitySource30 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity73,
                      'source_id' =>$idPlan16,
                      'value' => 160000000,
                      'goal' => 0,
                      'evidence_balance' => 160000000,
                      'age' => 1,
                      ]);
                      $idactivitySource31 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity74,
                      'source_id' =>$idPlan16,
                      'value' => 256000000,
                      'goal' => 0,
                      'evidence_balance' => 256000000,
                      'age' => 1,
                      ]);
                      $idactivitySource32 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity75,
                      'source_id' =>$idPlan16,
                      'value' => 401000000,
                      'goal' => 0,
                      'evidence_balance' => 401000000,
                      'age' => 1,
                      ]);
                      $idactivitySource33 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity83,
                      'source_id' =>$idPlan16,
                      'value' => 40000000,
                      'goal' => 0,
                      'evidence_balance' => 40000000,
                      'age' => 1,
                      ]);
                      $idactivitySource34 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity88,
                      'source_id' =>$idPlan16,
                      'value' => 300000000,
                      'goal' => 0,
                      'evidence_balance' => 300000000,
                      'age' => 1,
                      ]);
                      $idactivitySource35 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity91,
                      'source_id' =>$idPlan16,
                      'value' => 58109583,
                      'goal' => 0,
                      'evidence_balance' => 58109583,
                      'age' => 1,
                      ]);
                      $idactivitySource36 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity93,
                      'source_id' =>$idPlan8,
                      'value' => 393000000,
                      'goal' => 0,
                      'evidence_balance' => 393000000,
                      'age' => 1,
                      ]);
                      $idactivitySource37 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity94,
                      'source_id' =>$idPlan8,
                      'value' => 219000000,
                      'goal' => 0,
                      'evidence_balance' => 219000000,
                      'age' => 1,
                      ]);
                      $idactivitySource38 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity95,
                      'source_id' =>$idPlan8,
                      'value' => 88000000,
                      'goal' => 0,
                      'evidence_balance' => 88000000,
                      'age' => 1,
                      ]);
                      $idactivitySource39 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity102,
                      'source_id' =>$idPlan8,
                      'value' => 312870700,
                      'goal' => 0,
                      'evidence_balance' => 312870700,
                      'age' => 1,
                      ]);
                      $idactivitySource40 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity103,
                      'source_id' =>$idPlan8,
                      'value' => 35000000,
                      'goal' => 0,
                      'evidence_balance' => 35000000,
                      'age' => 1,
                      ]);
                      $idactivitySource41 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity104,
                      'source_id' =>$idPlan8,
                      'value' => 25000000,
                      'goal' => 0,
                      'evidence_balance' => 25000000,
                      'age' => 1,
                      ]);
                      $idactivitySource42 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity106,
                      'source_id' =>$idPlan8,
                      'value' => 64000000,
                      'goal' => 0,
                      'evidence_balance' => 64000000,
                      'age' => 1,
                      ]);
                      $idactivitySource43 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity107,
                      'source_id' =>$idPlan8,
                      'value' => 46000000,
                      'goal' => 0,
                      'evidence_balance' => 46000000,
                      'age' => 1,
                      ]);
                      $idactivitySource44 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity108,
                      'source_id' =>$idPlan8,
                      'value' => 30000000,
                      'goal' => 0,
                      'evidence_balance' => 30000000,
                      'age' => 1,
                      ]);
                      $idactivitySource45 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity116,
                      'source_id' =>$idPlan8,
                      'value' => 170000000,
                      'goal' => 0,
                      'evidence_balance' => 170000000,
                      'age' => 1,
                      ]);
                      $idactivitySource46 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity123,
                      'source_id' =>$idPlan8,
                      'value' => 37448928.5999999,
                      'goal' => 0,
                      'evidence_balance' => 37448928.5999999,
                      'age' => 1,
                      ]);
                      $idactivitySource47 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity124,
                      'source_id' =>$idPlan2,
                      'value' => 85000000,
                      'goal' => 0,
                      'evidence_balance' => 85000000,
                      'age' => 1,
                      ]);
                      $idactivitySource48 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity125,
                      'source_id' =>$idPlan2,
                      'value' => 180000000,
                      'goal' => 0,
                      'evidence_balance' => 180000000,
                      'age' => 1,
                      ]);
                      $idactivitySource49 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity126,
                      'source_id' =>$idPlan2,
                      'value' => 450560000,
                      'goal' => 0,
                      'evidence_balance' => 450560000,
                      'age' => 1,
                      ]);
                      $idactivitySource50 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity127,
                      'source_id' =>$idPlan2,
                      'value' => 91474245.5999999,
                      'goal' => 0,
                      'evidence_balance' => 91474245.5999999,
                      'age' => 1,
                      ]);
                      $idactivitySource51 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity133,
                      'source_id' =>$idPlan1,
                      'value' => 100000000,
                      'goal' => 0,
                      'evidence_balance' => 100000000,
                      'age' => 1,
                      ]);
                      $idactivitySource52 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity136,
                      'source_id' =>$idPlan1,
                      'value' => 301796882.6,
                      'goal' => 0,
                      'evidence_balance' => 301796882.6,
                      'age' => 1,
                      ]);
                      $idactivitySource53 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('activity_sources')->insert([
                      'activity_id' => $idactivity145,
                      'source_id' =>$idPlan7,
                      'value' => 65524943.9999999,
                      'goal' => 0,
                      'evidence_balance' => 65524943.9999999,
                      'age' => 1,
                      ]);
                      $idactivitySource54 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity91,
                        'source_id' =>$idPlan8,
                        'value' => 92790417,
                        'goal' => 0,
                        'evidence_balance' => 92790417,
                        'age' => 1,
                        ]);
                        $idactivitySource55 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity127,
                        'source_id' =>$idPlan1,
                        'value' => 133525754.4,
                        'goal' => 0,
                        'evidence_balance' => 133525754.4,
                        'age' => 1,
                        ]);
                        $idactivitySource57 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity136,
                        'source_id' =>$idPlan5,
                        'value' => 362324467,
                        'goal' => 0,
                        'evidence_balance' => 362324467,
                        'age' => 1,
                        ]);
                        $idactivitySource58 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity145,
                        'source_id' =>$idPlan3,
                        'value' => 29460766,
                        'goal' => 0,
                        'evidence_balance' => 29460766,
                        'age' => 1,
                        ]);
                        $idactivitySource59 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity136,
                          'source_id' =>$idPlan6,
                          'value' => 245610018.4,
                          'goal' => 0,
                          'evidence_balance' => 245610018.4,
                          'age' => 1,
                          ]);
                          $idactivitySource60 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity145,
                          'source_id' =>$idPlan10,
                          'value' => 14044.0531,
                          'goal' => 0,
                          'evidence_balance' => 14044.0531,
                          'age' => 1,
                          ]);
                          $idactivitySource61 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity136,
                            'source_id' =>$idPlan7,
                            'value' => 10391033.0000001,
                            'goal' => 0,
                            'evidence_balance' => 10391033.0000001,
                            'age' => 1,
                            ]);
                            $idactivitySource62 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia1,
                              'activity_source_id' =>$idactivitySource1,
                              'value' => 94974060,
                              ]);
                              $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia3,
                              'activity_source_id' =>$idactivitySource2,
                              'value' => 120000000,
                              ]);
                              $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia4,
                              'activity_source_id' =>$idactivitySource3,
                              'value' => 239000000,
                              ]);
                              $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia5,
                              'activity_source_id' =>$idactivitySource4,
                              'value' => 1127820592,
                              ]);
                              $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia8,
                              'activity_source_id' =>$idactivitySource5,
                              'value' => 125000000,
                              ]);
                              $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia9,
                              'activity_source_id' =>$idactivitySource6,
                              'value' => 7156154,
                              ]);
                              $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia13,
                              'activity_source_id' =>$idactivitySource7,
                              'value' => 203000000,
                              ]);
                              $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia14,
                              'activity_source_id' =>$idactivitySource8,
                              'value' => 131251492,
                              ]);
                              $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia17,
                              'activity_source_id' =>$idactivitySource9,
                              'value' => 126871034,
                              ]);
                              $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia18,
                              'activity_source_id' =>$idactivitySource10,
                              'value' => 110880000,
                              ]);
                              $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia19,
                              'activity_source_id' =>$idactivitySource11,
                              'value' => 49300000,
                              ]);
                              $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia20,
                              'activity_source_id' =>$idactivitySource12,
                              'value' => 99580000,
                              ]);
                              $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia21,
                              'activity_source_id' =>$idactivitySource13,
                              'value' => 967735877,
                              ]);
                              $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia22,
                              'activity_source_id' =>$idactivitySource14,
                              'value' => 400000000,
                              ]);
                              $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia24,
                              'activity_source_id' =>$idactivitySource15,
                              'value' => 259826888,
                              ]);
                              $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia25,
                              'activity_source_id' =>$idactivitySource16,
                              'value' => 24000000,
                              ]);
                              $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia26,
                              'activity_source_id' =>$idactivitySource17,
                              'value' => 124100000,
                              ]);
                              $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia27,
                              'activity_source_id' =>$idactivitySource18,
                              'value' => 118000000,
                              ]);
                              $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia28,
                              'activity_source_id' =>$idactivitySource19,
                              'value' => 93742444,
                              ]);
                              $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia29,
                              'activity_source_id' =>$idactivitySource20,
                              'value' => 50000000,
                              ]);
                              $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia30,
                              'activity_source_id' =>$idactivitySource21,
                              'value' => 50000000,
                              ]);
                              $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia32,
                              'activity_source_id' =>$idactivitySource22,
                              'value' => 129329094,
                              ]);
                              $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia33,
                              'activity_source_id' =>$idactivitySource23,
                              'value' => 3637441407,
                              ]);
                              $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia34,
                              'activity_source_id' =>$idactivitySource24,
                              'value' => 397000000,
                              ]);
                              $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia35,
                              'activity_source_id' =>$idactivitySource25,
                              'value' => 91700000,
                              ]);
                              $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia36,
                              'activity_source_id' =>$idactivitySource26,
                              'value' => 245000000,
                              ]);
                              $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia37,
                              'activity_source_id' =>$idactivitySource27,
                              'value' => 82000000,
                              ]);
                              $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia38,
                              'activity_source_id' =>$idactivitySource28,
                              'value' => 92500000,
                              ]);
                              $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia39,
                              'activity_source_id' =>$idactivitySource29,
                              'value' => 143550000,
                              ]);
                              $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia45,
                              'activity_source_id' =>$idactivitySource30,
                              'value' => 140000000,
                              ]);
                              $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia46,
                              'activity_source_id' =>$idactivitySource31,
                              'value' => 160000000,
                              ]);
                              $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia47,
                              'activity_source_id' =>$idactivitySource32,
                              'value' => 250500000,
                              ]);
                              $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia48,
                              'activity_source_id' =>$idactivitySource33,
                              'value' => 401000000,
                              ]);
                              $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia54,
                              'activity_source_id' =>$idactivitySource34,
                              'value' => 30400000,
                              ]);
                              $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia57,
                              'activity_source_id' =>$idactivitySource35,
                              'value' => 285982942,
                              ]);
                              $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia58,
                              'activity_source_id' =>$idactivitySource36,
                              'value' => 58109583,
                              ]);
                              $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia320,
                              'activity_source_id' =>$idactivitySource37,
                              'value' => 393000000,
                              ]);
                              $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia321,
                              'activity_source_id' =>$idactivitySource38,
                              'value' => 218180000,
                              ]);
                              $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia60,
                              'activity_source_id' =>$idactivitySource39,
                              'value' => 88000000,
                              ]);
                              $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia65,
                              'activity_source_id' =>$idactivitySource40,
                              'value' => 304594652,
                              ]);
                              $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia322,
                              'activity_source_id' =>$idactivitySource41,
                              'value' => 11399118,
                              ]);
                              $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia66,
                              'activity_source_id' =>$idactivitySource42,
                              'value' => 24500000,
                              ]);
                              $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia68,
                              'activity_source_id' =>$idactivitySource43,
                              'value' => 41553898,
                              ]);
                              $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia69,
                              'activity_source_id' =>$idactivitySource44,
                              'value' => 41832936,
                              ]);
                              $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia70,
                              'activity_source_id' =>$idactivitySource45,
                              'value' => 30000000,
                              ]);
                              $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia78,
                              'activity_source_id' =>$idactivitySource46,
                              'value' => 139669348,
                              ]);
                              $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia84,
                              'activity_source_id' =>$idactivitySource47,
                              'value' => 10000000,
                              ]);
                              $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia85,
                              'activity_source_id' =>$idactivitySource48,
                              'value' => 84500000,
                              ]);
                              $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia86,
                              'activity_source_id' =>$idactivitySource49,
                              'value' => 159981660,
                              ]);
                              $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia87,
                              'activity_source_id' =>$idactivitySource50,
                              'value' => 397756356,
                              ]);
                              $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia323,
                              'activity_source_id' =>$idactivitySource51,
                              'value' => 91474245.5999999,
                              ]);
                              $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia89,
                              'activity_source_id' =>$idactivitySource52,
                              'value' => 94460111,
                              ]);
                              $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia92,
                              'activity_source_id' =>$idactivitySource53,
                              'value' => 301796882.6,
                              ]);
                              $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia95,
                              'activity_source_id' =>$idactivitySource54,
                              'value' => 65524943.9999999,
                              ]);
                              $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia58,
                                'activity_source_id' =>$idactivitySource55,
                                'value' => 92790417,
                                ]);
                                $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia323,
                                'activity_source_id' =>$idactivitySource57,
                                'value' => 133525754.4,
                                ]);
                                $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia92,
                                'activity_source_id' =>$idactivitySource58,
                                'value' => 362324467,
                                ]);
                                $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia95,
                                'activity_source_id' =>$idactivitySource59,
                                'value' => 29460766,
                                ]);
                                $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia92,
                                  'activity_source_id' =>$idactivitySource60,
                                  'value' => 245610018.4,
                                  ]);
                                  $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('evidence_financial')->insert([
                                  'evidence_id' => $idevidencia95,
                                  'activity_source_id' =>$idactivitySource61,
                                  'value' => 14290.0000001192,
                                  ]);
                                  $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('evidence_financial')->insert([
                                    'evidence_id' => $idevidencia92,
                                    'activity_source_id' =>$idactivitySource62,
                                    'value' => 10391033.0000001,
                                    ]);
                                    $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity5,
                                      'source_id' =>$idPlan34,
                                      'value' => 170000000,
                                      'goal' => 0,
                                      'evidence_balance' => 170000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource63 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity14,
                                      'source_id' =>$idPlan34,
                                      'value' => 198164650,
                                      'goal' => 0,
                                      'evidence_balance' => 198164650,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource64 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity15,
                                      'source_id' =>$idPlan34,
                                      'value' => 60000000,
                                      'goal' => 0,
                                      'evidence_balance' => 60000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource65 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity20,
                                      'source_id' =>$idPlan34,
                                      'value' => 227000000,
                                      'goal' => 0,
                                      'evidence_balance' => 227000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource66 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity21,
                                      'source_id' =>$idPlan34,
                                      'value' => 30000000,
                                      'goal' => 0,
                                      'evidence_balance' => 30000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource67 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity23,
                                      'source_id' =>$idPlan34,
                                      'value' => 25000000,
                                      'goal' => 0,
                                      'evidence_balance' => 25000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource68 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity29,
                                      'source_id' =>$idPlan34,
                                      'value' => 298410000,
                                      'goal' => 0,
                                      'evidence_balance' => 298410000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource69 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity30,
                                      'source_id' =>$idPlan34,
                                      'value' => 75500000,
                                      'goal' => 0,
                                      'evidence_balance' => 75500000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource70 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity31,
                                      'source_id' =>$idPlan34,
                                      'value' => 26090000,
                                      'goal' => 0,
                                      'evidence_balance' => 26090000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource71 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity32,
                                      'source_id' =>$idPlan34,
                                      'value' => 74190500,
                                      'goal' => 0,
                                      'evidence_balance' => 74190500,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource72 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity33,
                                      'source_id' =>$idPlan34,
                                      'value' => 84568500,
                                      'goal' => 0,
                                      'evidence_balance' => 84568500,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource73 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity34,
                                      'source_id' =>$idPlan34,
                                      'value' => 1074021000,
                                      'goal' => 0,
                                      'evidence_balance' => 1074021000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource74 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity44,
                                      'source_id' =>$idPlan34,
                                      'value' => 92000000,
                                      'goal' => 0,
                                      'evidence_balance' => 92000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource75 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity45,
                                      'source_id' =>$idPlan34,
                                      'value' => 24000000,
                                      'goal' => 0,
                                      'evidence_balance' => 24000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource76 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity46,
                                      'source_id' =>$idPlan34,
                                      'value' => 128000000,
                                      'goal' => 0,
                                      'evidence_balance' => 128000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource77 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity47,
                                      'source_id' =>$idPlan34,
                                      'value' => 241000000,
                                      'goal' => 0,
                                      'evidence_balance' => 241000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource78 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity49,
                                      'source_id' =>$idPlan34,
                                      'value' => 200000000,
                                      'goal' => 0,
                                      'evidence_balance' => 200000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource79 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity54,
                                      'source_id' =>$idPlan34,
                                      'value' => 219451277,
                                      'goal' => 0,
                                      'evidence_balance' => 219451277,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource80 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity55,
                                      'source_id' =>$idPlan34,
                                      'value' => 49363724,
                                      'goal' => 0,
                                      'evidence_balance' => 49363724,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource81 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity56,
                                      'source_id' =>$idPlan34,
                                      'value' => 1710961734,
                                      'goal' => 0,
                                      'evidence_balance' => 1710961734,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource82 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity59,
                                      'source_id' =>$idPlan34,
                                      'value' => 972500000,
                                      'goal' => 0,
                                      'evidence_balance' => 972500000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource83 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity61,
                                      'source_id' =>$idPlan34,
                                      'value' => 320500000,
                                      'goal' => 0,
                                      'evidence_balance' => 320500000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource84 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity66,
                                      'source_id' =>$idPlan34,
                                      'value' => 114500000,
                                      'goal' => 0,
                                      'evidence_balance' => 114500000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource85 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity74,
                                      'source_id' =>$idPlan34,
                                      'value' => 317500000,
                                      'goal' => 0,
                                      'evidence_balance' => 317500000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource86 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity75,
                                      'source_id' =>$idPlan34,
                                      'value' => 85000000,
                                      'goal' => 0,
                                      'evidence_balance' => 85000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource87 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity77,
                                      'source_id' =>$idPlan34,
                                      'value' => 54000000,
                                      'goal' => 0,
                                      'evidence_balance' => 54000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource88 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity78,
                                      'source_id' =>$idPlan34,
                                      'value' => 30000000,
                                      'goal' => 0,
                                      'evidence_balance' => 30000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource89 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity79,
                                      'source_id' =>$idPlan34,
                                      'value' => 18000000,
                                      'goal' => 0,
                                      'evidence_balance' => 18000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource90 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity80,
                                      'source_id' =>$idPlan34,
                                      'value' => 73000000,
                                      'goal' => 0,
                                      'evidence_balance' => 73000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource91 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity82,
                                      'source_id' =>$idPlan34,
                                      'value' => 5000000,
                                      'goal' => 0,
                                      'evidence_balance' => 5000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource92 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity88,
                                      'source_id' =>$idPlan34,
                                      'value' => 600000000,
                                      'goal' => 0,
                                      'evidence_balance' => 600000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource93 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity91,
                                      'source_id' =>$idPlan34,
                                      'value' => 156300000,
                                      'goal' => 0,
                                      'evidence_balance' => 156300000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource94 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity98,
                                      'source_id' =>$idPlan34,
                                      'value' => 185800000,
                                      'goal' => 0,
                                      'evidence_balance' => 185800000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource95 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity100,
                                      'source_id' =>$idPlan34,
                                      'value' => 270178623,
                                      'goal' => 0,
                                      'evidence_balance' => 270178623,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource96 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity105,
                                      'source_id' =>$idPlan18,
                                      'value' => 36000000,
                                      'goal' => 0,
                                      'evidence_balance' => 36000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource97 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity106,
                                      'source_id' =>$idPlan18,
                                      'value' => 34000000,
                                      'goal' => 0,
                                      'evidence_balance' => 34000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource98 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity107,
                                      'source_id' =>$idPlan18,
                                      'value' => 75000000,
                                      'goal' => 0,
                                      'evidence_balance' => 75000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource99 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity116,
                                      'source_id' =>$idPlan18,
                                      'value' => 83000000,
                                      'goal' => 0,
                                      'evidence_balance' => 83000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource100 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity118,
                                      'source_id' =>$idPlan18,
                                      'value' => 36000000,
                                      'goal' => 0,
                                      'evidence_balance' => 36000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource101 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity119,
                                      'source_id' =>$idPlan18,
                                      'value' => 136900000,
                                      'goal' => 0,
                                      'evidence_balance' => 136900000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource102 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity122,
                                      'source_id' =>$idPlan18,
                                      'value' => 43633675,
                                      'goal' => 0,
                                      'evidence_balance' => 43633675,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource103 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity124,
                                      'source_id' =>$idPlan18,
                                      'value' => 55000000,
                                      'goal' => 0,
                                      'evidence_balance' => 55000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource104 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity127,
                                      'source_id' =>$idPlan18,
                                      'value' => 770000000,
                                      'goal' => 0,
                                      'evidence_balance' => 770000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource105 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity128,
                                      'source_id' =>$idPlan18,
                                      'value' => 20000000,
                                      'goal' => 0,
                                      'evidence_balance' => 20000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource106 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity132,
                                      'source_id' =>$idPlan18,
                                      'value' => 42000000,
                                      'goal' => 0,
                                      'evidence_balance' => 42000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource107 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity133,
                                      'source_id' =>$idPlan18,
                                      'value' => 19700000,
                                      'goal' => 0,
                                      'evidence_balance' => 19700000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource108 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity134,
                                      'source_id' =>$idPlan18,
                                      'value' => 93800000,
                                      'goal' => 0,
                                      'evidence_balance' => 93800000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource109 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity135,
                                      'source_id' =>$idPlan18,
                                      'value' => 12820290,
                                      'goal' => 0,
                                      'evidence_balance' => 12820290,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource110 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity136,
                                      'source_id' =>$idPlan17,
                                      'value' => 30888690.52,
                                      'goal' => 0,
                                      'evidence_balance' => 30888690.52,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource111 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity100,
                                        'source_id' =>$idPlan18,
                                        'value' => 9021377,
                                        'goal' => 0,
                                        'evidence_balance' => 9021377,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource112 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity135,
                                        'source_id' =>$idPlan22,
                                        'value' => 1216315001,
                                        'goal' => 0,
                                        'evidence_balance' => 1216315001,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource113 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('activity_sources')->insert([
                                        'activity_id' => $idactivity136,
                                        'source_id' =>$idPlan19,
                                        'value' => 37284258,
                                        'goal' => 0,
                                        'evidence_balance' => 37284258,
                                        'age' => 2,
                                        ]);
                                        $idactivitySource114 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity135,
                                          'source_id' =>$idPlan26,
                                          'value' => 1201582244.52,
                                          'goal' => 0,
                                          'evidence_balance' => 1201582244.52,
                                          'age' => 2,
                                          ]);
                                          $idactivitySource115 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity136,
                                          'source_id' =>$idPlan24,
                                          'value' => 74977381.4867,
                                          'goal' => 0,
                                          'evidence_balance' => 74977381.4867,
                                          'age' => 2,
                                          ]);
                                          $idactivitySource116 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity135,
                                            'source_id' =>$idPlan17,
                                            'value' => 369740738.48,
                                            'goal' => 0,
                                            'evidence_balance' => 369740738.48,
                                            'age' => 2,
                                            ]);
                                            $idactivitySource117 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity136,
                                            'source_id' =>$idPlan25,
                                            'value' => 21349669.9933,
                                            'goal' => 0,
                                            'evidence_balance' => 21349669.9933,
                                            'age' => 2,
                                            ]);
                                            $idactivitySource118 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia99,
                                              'activity_source_id' =>$idactivitySource63,
                                              'value' => 170000000,
                                              ]);
                                              $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia100,
                                              'activity_source_id' =>$idactivitySource64,
                                              'value' => 198164650,
                                              ]);
                                              $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia101,
                                              'activity_source_id' =>$idactivitySource65,
                                              'value' => 55466325,
                                              ]);
                                              $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia105,
                                              'activity_source_id' =>$idactivitySource66,
                                              'value' => 227000000,
                                              ]);
                                              $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia106,
                                              'activity_source_id' =>$idactivitySource67,
                                              'value' => 30000000,
                                              ]);
                                              $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia108,
                                              'activity_source_id' =>$idactivitySource68,
                                              'value' => 24822511,
                                              ]);
                                              $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia110,
                                              'activity_source_id' =>$idactivitySource69,
                                              'value' => 176409533,
                                              ]);
                                              $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia111,
                                              'activity_source_id' =>$idactivitySource70,
                                              'value' => 74340000,
                                              ]);
                                              $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia112,
                                              'activity_source_id' =>$idactivitySource71,
                                              'value' => 25895985,
                                              ]);
                                              $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia324,
                                              'activity_source_id' =>$idactivitySource72,
                                              'value' => 74190500,
                                              ]);
                                              $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia325,
                                              'activity_source_id' =>$idactivitySource73,
                                              'value' => 84568500,
                                              ]);
                                              $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia326,
                                              'activity_source_id' =>$idactivitySource74,
                                              'value' => 1074021000,
                                              ]);
                                              $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia113,
                                              'activity_source_id' =>$idactivitySource75,
                                              'value' => 92000000,
                                              ]);
                                              $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia114,
                                              'activity_source_id' =>$idactivitySource76,
                                              'value' => 24000000,
                                              ]);
                                              $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia115,
                                              'activity_source_id' =>$idactivitySource77,
                                              'value' => 128000000,
                                              ]);
                                              $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia116,
                                              'activity_source_id' =>$idactivitySource78,
                                              'value' => 241000000,
                                              ]);
                                              $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia118,
                                              'activity_source_id' =>$idactivitySource79,
                                              'value' => 200000000,
                                              ]);
                                              $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia121,
                                              'activity_source_id' =>$idactivitySource80,
                                              'value' => 219451277,
                                              ]);
                                              $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia122,
                                              'activity_source_id' =>$idactivitySource81,
                                              'value' => 49363724,
                                              ]);
                                              $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia327,
                                              'activity_source_id' =>$idactivitySource82,
                                              'value' => 1710961734,
                                              ]);
                                              $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia123,
                                              'activity_source_id' =>$idactivitySource83,
                                              'value' => 972500000,
                                              ]);
                                              $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia124,
                                              'activity_source_id' =>$idactivitySource84,
                                              'value' => 320500000,
                                              ]);
                                              $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia127,
                                              'activity_source_id' =>$idactivitySource85,
                                              'value' => 114500000,
                                              ]);
                                              $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia130,
                                              'activity_source_id' =>$idactivitySource86,
                                              'value' => 297100000,
                                              ]);
                                              $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia131,
                                              'activity_source_id' =>$idactivitySource87,
                                              'value' => 85000000,
                                              ]);
                                              $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia328,
                                              'activity_source_id' =>$idactivitySource88,
                                              'value' => 54000000,
                                              ]);
                                              $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia133,
                                              'activity_source_id' =>$idactivitySource89,
                                              'value' => 30000000,
                                              ]);
                                              $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia134,
                                              'activity_source_id' =>$idactivitySource90,
                                              'value' => 18000000,
                                              ]);
                                              $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia135,
                                              'activity_source_id' =>$idactivitySource91,
                                              'value' => 72999970,
                                              ]);
                                              $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia329,
                                              'activity_source_id' =>$idactivitySource92,
                                              'value' => 5000000,
                                              ]);
                                              $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia139,
                                              'activity_source_id' =>$idactivitySource93,
                                              'value' => 600000000,
                                              ]);
                                              $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia140,
                                              'activity_source_id' =>$idactivitySource94,
                                              'value' => 156300000,
                                              ]);
                                              $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia144,
                                              'activity_source_id' =>$idactivitySource95,
                                              'value' => 185650000,
                                              ]);
                                              $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia145,
                                              'activity_source_id' =>$idactivitySource96,
                                              'value' => 270178623,
                                              ]);
                                              $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia146,
                                              'activity_source_id' =>$idactivitySource97,
                                              'value' => 36000000,
                                              ]);
                                              $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia147,
                                              'activity_source_id' =>$idactivitySource98,
                                              'value' => 33702076,
                                              ]);
                                              $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia148,
                                              'activity_source_id' =>$idactivitySource99,
                                              'value' => 73612775,
                                              ]);
                                              $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia156,
                                              'activity_source_id' =>$idactivitySource100,
                                              'value' => 82170121,
                                              ]);
                                              $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia158,
                                              'activity_source_id' =>$idactivitySource101,
                                              'value' => 36000000,
                                              ]);
                                              $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia159,
                                              'activity_source_id' =>$idactivitySource102,
                                              'value' => 125724893,
                                              ]);
                                              $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia160,
                                              'activity_source_id' =>$idactivitySource103,
                                              'value' => 43630000,
                                              ]);
                                              $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia161,
                                              'activity_source_id' =>$idactivitySource104,
                                              'value' => 55000000,
                                              ]);
                                              $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia163,
                                              'activity_source_id' =>$idactivitySource105,
                                              'value' => 770000000,
                                              ]);
                                              $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia330,
                                              'activity_source_id' =>$idactivitySource106,
                                              'value' => 20000000,
                                              ]);
                                              $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia165,
                                              'activity_source_id' =>$idactivitySource107,
                                              'value' => 42000000,
                                              ]);
                                              $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia166,
                                              'activity_source_id' =>$idactivitySource108,
                                              'value' => 19700000,
                                              ]);
                                              $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia167,
                                              'activity_source_id' =>$idactivitySource109,
                                              'value' => 93800000,
                                              ]);
                                              $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia168,
                                              'activity_source_id' =>$idactivitySource110,
                                              'value' => 12820290,
                                              ]);
                                              $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia169,
                                              'activity_source_id' =>$idactivitySource111,
                                              'value' => 30888690.52,
                                              ]);
                                              $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia145,
                                                'activity_source_id' =>$idactivitySource112,
                                                'value' => 9021377,
                                                ]);
                                                $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia168,
                                                'activity_source_id' =>$idactivitySource113,
                                                'value' => 1216315001,
                                                ]);
                                                $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia169,
                                                'activity_source_id' =>$idactivitySource114,
                                                'value' => 37284258,
                                                ]);
                                                $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia168,
                                                  'activity_source_id' =>$idactivitySource115,
                                                  'value' => 1201582244.52,
                                                  ]);
                                                  $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia169,
                                                  'activity_source_id' =>$idactivitySource116,
                                                  'value' => 74977381.4867,
                                                  ]);
                                                  $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                  
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia168,
                                                    'activity_source_id' =>$idactivitySource117,
                                                    'value' => 369740738.48,
                                                    ]);
                                                    $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('evidence_financial')->insert([
                                                    'evidence_id' => $idevidencia169,
                                                    'activity_source_id' =>$idactivitySource118,
                                                    'value' => 21349669.9933,
                                                    ]);
                                                    $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity14,
                                                      'source_id' =>$idPlan47,
                                                      'value' => 100000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 100000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource119 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity18,
                                                      'source_id' =>$idPlan47,
                                                      'value' => 100000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 100000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource120 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity35,
                                                      'source_id' =>$idPlan47,
                                                      'value' => 1391898410,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1391898410,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource121 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity42,
                                                      'source_id' =>$idPlan47,
                                                      'value' => 832000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 832000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource122 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity49,
                                                      'source_id' =>$idPlan47,
                                                      'value' => 96864172,
                                                      'goal' => 0,
                                                      'evidence_balance' => 96864172,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource123 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity56,
                                                      'source_id' =>$idPlan47,
                                                      'value' => 5367085763,
                                                      'goal' => 0,
                                                      'evidence_balance' => 5367085763,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource124 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity60,
                                                      'source_id' =>$idPlan47,
                                                      'value' => 371135828,
                                                      'goal' => 0,
                                                      'evidence_balance' => 371135828,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource125 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      

                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity68,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 100000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 100000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource126 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity74,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 70000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 70000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource127 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity77,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 33200000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 33200000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource128 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity78,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 33000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 33000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource129 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity79,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 41000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 41000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource130 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity81,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 257490153,
                                                      'goal' => 0,
                                                      'evidence_balance' => 257490153,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource131 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity82,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 35000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 35000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource132 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity88,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 600000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 600000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource133 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity91,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 358000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 358000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource134 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity96,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 177100000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 177100000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource135 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity98,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 182900000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 182900000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource136 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity105,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 36000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 36000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource137 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity106,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 34000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 34000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource138 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity107,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 75000000,
                                                      'goal' => 0,
                                                      'evidence_balance' => 75000000,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource139 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity117,
                                                      'source_id' =>$idPlan36,
                                                      'value' => 233596989.75,
                                                      'goal' => 0,
                                                      'evidence_balance' => 233596989.75,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource140 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity131,
                                                      'source_id' =>$idPlan37,
                                                      'value' => 26022210.75,
                                                      'goal' => 0,
                                                      'evidence_balance' => 26022210.75,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource141 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity60,
                                                        'source_id' =>$idPlan36,
                                                        'value' => 28864172,
                                                        'goal' => 0,
                                                        'evidence_balance' => 28864172,
                                                        'age' => 3,
                                                        ]);
                                                        $idactivitySource142 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity117,
                                                        'source_id' =>$idPlan42,
                                                        'value' => 1118324985,
                                                        'goal' => 0,
                                                        'evidence_balance' => 1118324985,
                                                        'age' => 3,
                                                        ]);
                                                        $idactivitySource143 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity131,
                                                        'source_id' =>$idPlan40,
                                                        'value' => 34440148.30016,
                                                        'goal' => 0,
                                                        'evidence_balance' => 34440148.30016,
                                                        'age' => 3,
                                                        ]);
                                                        $idactivitySource144 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity117,
                                                          'source_id' =>$idPlan35,
                                                          'value' => 372398834,
                                                          'goal' => 0,
                                                          'evidence_balance' => 372398834,
                                                          'age' => 3,
                                                          ]);
                                                          $idactivitySource145 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity131,
                                                          'source_id' =>$idPlan37,
                                                          'value' => 37260775,
                                                          'goal' => 0,
                                                          'evidence_balance' => 37260775,
                                                          'age' => 3,
                                                          ]);
                                                          $idactivitySource146 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                          DB::table('activity_sources')->insert([
                                                            'activity_id' => $idactivity117,
                                                            'source_id' =>$idPlan37,
                                                            'value' => 31313281.25,
                                                            'goal' => 0,
                                                            'evidence_balance' => 31313281.25,
                                                            'age' => 3,
                                                            ]);
                                                            $idactivitySource147 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia237,
                                                              'activity_source_id' =>$idactivitySource119,
                                                              'value' => 37600000,
                                                              ]);
                                                              $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia175,
                                                              'activity_source_id' =>$idactivitySource120,
                                                              'value' => 80392816,
                                                              ]);
                                                              $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia182,
                                                              'activity_source_id' =>$idactivitySource121,
                                                              'value' => 1387060112,
                                                              ]);
                                                              $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia331,
                                                              'activity_source_id' =>$idactivitySource122,
                                                              'value' => 832000000,
                                                              ]);
                                                              $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia192,
                                                              'activity_source_id' =>$idactivitySource123,
                                                              'value' => 96864172,
                                                              ]);
                                                              $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia196,
                                                              'activity_source_id' =>$idactivitySource124,
                                                              'value' => 5367085762,
                                                              ]);
                                                              $idevidenceFinancial124 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia332,
                                                              'activity_source_id' =>$idactivitySource125,
                                                              'value' => 371135828,
                                                              ]);
                                                              $idevidenceFinancial125 = DB::getPdo()->lastInsertId();
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia333,
                                                              'activity_source_id' =>$idactivitySource126,
                                                              'value' => 100000000,
                                                              ]);
                                                              $idevidenceFinancial126 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia199,
                                                              'activity_source_id' =>$idactivitySource127,
                                                              'value' => 70000000,
                                                              ]);
                                                              $idevidenceFinancial127 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia201,
                                                              'activity_source_id' =>$idactivitySource128,
                                                              'value' => 32878515,
                                                              ]);
                                                              $idevidenceFinancial128 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia202,
                                                              'activity_source_id' =>$idactivitySource129,
                                                              'value' => 32997568,
                                                              ]);
                                                              $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia203,
                                                              'activity_source_id' =>$idactivitySource130,
                                                              'value' => 41000000,
                                                              ]);
                                                              $idevidenceFinancial130 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia205,
                                                              'activity_source_id' =>$idactivitySource131,
                                                              'value' => 241357906,
                                                              ]);
                                                              $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia206,
                                                              'activity_source_id' =>$idactivitySource132,
                                                              'value' => 35000000,
                                                              ]);
                                                              $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia209,
                                                              'activity_source_id' =>$idactivitySource133,
                                                              'value' => 484000000,
                                                              ]);
                                                              $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia334,
                                                              'activity_source_id' =>$idactivitySource134,
                                                              'value' => 358000000,
                                                              ]);
                                                              $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia210,
                                                              'activity_source_id' =>$idactivitySource135,
                                                              'value' => 176527875,
                                                              ]);
                                                              $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia212,
                                                              'activity_source_id' =>$idactivitySource136,
                                                              'value' => 182900000,
                                                              ]);
                                                              $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia214,
                                                              'activity_source_id' =>$idactivitySource137,
                                                              'value' => 36000000,
                                                              ]);
                                                              $idevidenceFinancial137 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia215,
                                                              'activity_source_id' =>$idactivitySource138,
                                                              'value' => 33702076,
                                                              ]);
                                                              $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia216,
                                                              'activity_source_id' =>$idactivitySource139,
                                                              'value' => 73612775,
                                                              ]);
                                                              $idevidenceFinancial139 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia224,
                                                              'activity_source_id' =>$idactivitySource140,
                                                              'value' => 233596989.75,
                                                              ]);
                                                              $idevidenceFinancial140 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia335,
                                                              'activity_source_id' =>$idactivitySource141,
                                                              'value' => 26022210.75,
                                                              ]);
                                                              $idevidenceFinancial141 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia332,
                                                                'activity_source_id' =>$idactivitySource142,
                                                                'value' => 28864172,
                                                                ]);
                                                                $idevidenceFinancial142 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                

                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia224,
                                                                'activity_source_id' =>$idactivitySource143,
                                                                'value' => 1118324985,
                                                                ]);
                                                                $idevidenceFinancial143 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia335,
                                                                'activity_source_id' =>$idactivitySource144,
                                                                'value' => 34440148.30016,
                                                                ]);
                                                                $idevidenceFinancial144 = DB::getPdo()->lastInsertId();
                                                                
                                                                
                                                                
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia224,
                                                                  'activity_source_id' =>$idactivitySource145,
                                                                  'value' => 372398834,
                                                                  ]);
                                                                  $idevidenceFinancial145 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia335,
                                                                  'activity_source_id' =>$idactivitySource146,
                                                                  'value' => 1690447263.94984,
                                                                  ]);
                                                                  $idevidenceFinancial146 = DB::getPdo()->lastInsertId();
                                                                  
                                                                  
                                                                  
                                                                  DB::table('evidence_financial')->insert([
                                                                    'evidence_id' => $idevidencia224,
                                                                    'activity_source_id' =>$idactivitySource147,
                                                                    'value' => 26588814.25,
                                                                    ]);
                                                                    $idevidenceFinancial147 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                    
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity5,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 100000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 100000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource149 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity15,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 40000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 40000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource151 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity16,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 30000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 30000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource152 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity17,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 30000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 30000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource153 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity18,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 70000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 70000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource154 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity19,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 30000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 30000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource155 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity21,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 50000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 50000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource156 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity22,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 20000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 20000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource157 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity32,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 141392437,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 141392437,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource158 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity33,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 354415350,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 354415350,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource159 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity34,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 1203222601,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 1203222601,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource160 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity39,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 50000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 50000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource161 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity40,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 150000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 150000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource162 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity42,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 75000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 75000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource163 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity45,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 25000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 25000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource164 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity47,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 250000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 250000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource165 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity48,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 188000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 188000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource166 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity49,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 101000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 101000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource167 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity50,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 58000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 58000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource168 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity51,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 53000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 53000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource169 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity54,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 185000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 185000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource170 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity56,
                                                                      'source_id' =>$idPlan49,
                                                                      'value' => 1308044185,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 1308044185,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource171 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity57,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 102272730,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 102272730,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource172 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity58,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 575000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 575000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource173 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity59,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 156818000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 156818000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource174 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity60,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 180000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 180000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource175 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity62,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 11000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 11000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource176 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity68,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 45000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 45000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource177 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity69,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 10000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 10000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource178 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity70,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 35000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 35000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource179 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity71,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 10000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 10000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource180 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity75,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 156920000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 156920000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource181 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity77,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 36000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 36000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource182 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity78,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 36000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 36000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource183 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity79,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 85000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 85000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource184 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity80,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 56463698,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 56463698,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource185 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity81,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 306000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 306000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource186 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity82,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 37000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 37000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource187 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity85,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 60000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 60000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource188 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity86,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 250000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 250000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource189 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity87,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 90000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 90000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource190 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity88,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 150000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 150000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource191 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity91,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 934420000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 934420000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource192 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity96,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 145500000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 145500000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource193 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity98,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 247639790,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 247639790,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource194 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity99,
                                                                    'source_id' =>$idPlan48,
                                                                      'value' => 50000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 50000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource195 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity105,
                                                                      'source_id' =>$idPlan48,
                                                                      'value' => 15000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 15000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource196 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity106,
                                                                      'source_id' =>$idPlan48,
                                                                      'value' => 40000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 40000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource197 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity107,
                                                                      'source_id' =>$idPlan48,
                                                                      'value' => 25000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 25000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource198 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity108,
                                                                      'source_id' =>$idPlan48,
                                                                      'value' => 20000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 20000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource199 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity116,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 119500000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 119500000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource200 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity117,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 50000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 50000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource201 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity118,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 135800000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 135800000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource202 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity119,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 20000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 20000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource203 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity120,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 110000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 110000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource204 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity122,
                                                                      'source_id' =>$idPlan61,
                                                                      'value' => 192506007,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 192506007,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource205 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity130,
                                                                      'source_id' =>$idPlan56,
                                                                      'value' => 58000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 58000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource206 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity132,
                                                                      'source_id' =>$idPlan56,
                                                                      'value' => 53000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 53000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource207 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity133,
                                                                      'source_id' =>$idPlan56,
                                                                      'value' => 30000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 30000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource208 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity134,
                                                                      'source_id' =>$idPlan56,
                                                                      'value' => 35000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 35000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource209 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity135,
                                                                      'source_id' =>$idPlan56,
                                                                      'value' => 234539645,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 234539645,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource210 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity136,
                                                                      'source_id' =>$idPlan56,
                                                                      'value' => 84803180.28,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 84803180.28,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource211 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity137,
                                                                      'source_id' =>$idPlan48,
                                                                      'value' => 52000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 52000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource212 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity139,
                                                                      'source_id' =>$idPlan53,
                                                                      'value' => 20000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 20000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource213 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity140,
                                                                      'source_id' =>$idPlan53,
                                                                      'value' => 50000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 50000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource214 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity141,
                                                                      'source_id' =>$idPlan53,
                                                                      'value' => 40000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 40000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource215 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity142,
                                                                      'source_id' =>$idPlan53,
                                                                      'value' => 26186878.28,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 26186878.28,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource216 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity143,
                                                                      'source_id' =>$idPlan50,
                                                                      'value' => 30000000,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 30000000,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource217 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity144,
                                                                      'source_id' =>$idPlan50,
                                                                      'value' => 673529.279999971,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 673529.279999971,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource218 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity56,
                                                                        'source_id' =>$idPlan61,
                                                                        'value' => 735932246,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 735932246,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource219 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity98,
                                                                        'source_id' =>$idPlan48,
                                                                        'value' => 76860210,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 76860210,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource220 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity122,
                                                                        'source_id' =>$idPlan56,
                                                                        'value' => 114193993,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 114193993,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource221 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity136,
                                                                        'source_id' =>$idPlan53,
                                                                        'value' => 25196819.72,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 25196819.72,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource222 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity142,
                                                                        'source_id' =>$idPlan50,
                                                                        'value' => 3813121.72000003,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 3813121.72000003,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource223 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('activity_sources')->insert([
                                                                        'activity_id' => $idactivity144,
                                                                        'source_id' =>$idPlan54,
                                                                        'value' => 13677970.9896,
                                                                        'goal' => 0,
                                                                        'evidence_balance' => 13677970.9896,
                                                                        'age' => 4,
                                                                        ]);
                                                                        $idactivitySource224 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                        DB::table('activity_sources')->insert([
                                                                          'activity_id' => $idactivity144,
                                                                          'source_id' =>$idPlan55,
                                                                          'value' => 15648474,
                                                                          'goal' => 0,
                                                                          'evidence_balance' => 15648474,
                                                                          'age' => 4,
                                                                          ]);
                                                                          $idactivitySource225 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia337,
                                                                            'activity_source_id' =>$idactivitySource149,
                                                                            'value' => 100000000,
                                                                            ]);
                                                                            $idevidenceFinancial149 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia240,
                                                                            'activity_source_id' =>$idactivitySource151,
                                                                            'value' => 40000000,
                                                                            ]);
                                                                            $idevidenceFinancial151 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia241,
                                                                            'activity_source_id' =>$idactivitySource152,
                                                                            'value' => 30000000,
                                                                            ]);
                                                                            $idevidenceFinancial152 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia242,
                                                                            'activity_source_id' =>$idactivitySource153,
                                                                            'value' => 29079824,
                                                                            ]);
                                                                            $idevidenceFinancial153 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia243,
                                                                            'activity_source_id' =>$idactivitySource154,
                                                                            'value' => 70000000,
                                                                            ]);
                                                                            $idevidenceFinancial154 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia244,
                                                                            'activity_source_id' =>$idactivitySource155,
                                                                            'value' => 15000000,
                                                                            ]);
                                                                            $idevidenceFinancial155 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia245,
                                                                            'activity_source_id' =>$idactivitySource156,
                                                                            'value' => 50000000,
                                                                            ]);
                                                                            $idevidenceFinancial156 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia246,
                                                                            'activity_source_id' =>$idactivitySource157,
                                                                            'value' => 20000000,
                                                                            ]);
                                                                            $idevidenceFinancial157 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia247,
                                                                            'activity_source_id' =>$idactivitySource158,
                                                                            'value' => 141392437,
                                                                            ]);
                                                                            $idevidenceFinancial158 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia248,
                                                                            'activity_source_id' =>$idactivitySource159,
                                                                            'value' => 354415350,
                                                                            ]);
                                                                            $idevidenceFinancial159 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia249,
                                                                            'activity_source_id' =>$idactivitySource160,
                                                                            'value' => 1203222601,
                                                                            ]);
                                                                            $idevidenceFinancial160 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia250,
                                                                            'activity_source_id' =>$idactivitySource161,
                                                                            'value' => 50000000,
                                                                            ]);
                                                                            $idevidenceFinancial161 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia251,
                                                                            'activity_source_id' =>$idactivitySource162,
                                                                            'value' => 150000000,
                                                                            ]);
                                                                            $idevidenceFinancial162 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia252,
                                                                            'activity_source_id' =>$idactivitySource163,
                                                                            'value' => 75000000,
                                                                            ]);
                                                                            $idevidenceFinancial163 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia254,
                                                                            'activity_source_id' =>$idactivitySource164,
                                                                            'value' => 25000000,
                                                                            ]);
                                                                            $idevidenceFinancial164 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia255,
                                                                            'activity_source_id' =>$idactivitySource165,
                                                                            'value' => 250000000,
                                                                            ]);
                                                                            $idevidenceFinancial165 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia256,
                                                                            'activity_source_id' =>$idactivitySource166,
                                                                            'value' => 186351183,
                                                                            ]);
                                                                            $idevidenceFinancial166 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia257,
                                                                            'activity_source_id' =>$idactivitySource167,
                                                                            'value' => 101000000,
                                                                            ]);
                                                                            $idevidenceFinancial167 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia258,
                                                                            'activity_source_id' =>$idactivitySource168,
                                                                            'value' => 58000000,
                                                                            ]);
                                                                            $idevidenceFinancial168 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia259,
                                                                            'activity_source_id' =>$idactivitySource169,
                                                                            'value' => 53000000,
                                                                            ]);
                                                                            $idevidenceFinancial169 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia260,
                                                                            'activity_source_id' =>$idactivitySource170,
                                                                            'value' => 185000000,
                                                                            ]);
                                                                            $idevidenceFinancial170 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia261,
                                                                            'activity_source_id' =>$idactivitySource171,
                                                                            'value' => 1308044185,
                                                                            ]);
                                                                            $idevidenceFinancial171 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia262,
                                                                            'activity_source_id' =>$idactivitySource172,
                                                                            'value' => 102272730,
                                                                            ]);
                                                                            $idevidenceFinancial172 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia263,
                                                                            'activity_source_id' =>$idactivitySource173,
                                                                            'value' => 575000000,
                                                                            ]);
                                                                            $idevidenceFinancial173 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia264,
                                                                            'activity_source_id' =>$idactivitySource174,
                                                                            'value' => 149818000,
                                                                            ]);
                                                                            $idevidenceFinancial174 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia265,
                                                                            'activity_source_id' =>$idactivitySource175,
                                                                            'value' => 180000000,
                                                                            ]);
                                                                            $idevidenceFinancial175 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia266,
                                                                            'activity_source_id' =>$idactivitySource176,
                                                                            'value' => 4026183,
                                                                            ]);
                                                                            $idevidenceFinancial176 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia267,
                                                                            'activity_source_id' =>$idactivitySource177,
                                                                            'value' => 30000000,
                                                                            ]);
                                                                            $idevidenceFinancial177 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia338,
                                                                            'activity_source_id' =>$idactivitySource178,
                                                                            'value' => 10000000,
                                                                            ]);
                                                                            $idevidenceFinancial178 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia268,
                                                                            'activity_source_id' =>$idactivitySource179,
                                                                            'value' => 30980000,
                                                                            ]);
                                                                            $idevidenceFinancial179 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia269,
                                                                            'activity_source_id' =>$idactivitySource180,
                                                                            'value' => 10000000,
                                                                            ]);
                                                                            $idevidenceFinancial180 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia270,
                                                                            'activity_source_id' =>$idactivitySource181,
                                                                            'value' => 141613787,
                                                                            ]);
                                                                            $idevidenceFinancial181 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia271,
                                                                            'activity_source_id' =>$idactivitySource182,
                                                                            'value' => 36000000,
                                                                            ]);
                                                                            $idevidenceFinancial182 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia272,
                                                                            'activity_source_id' =>$idactivitySource183,
                                                                            'value' => 36000000,
                                                                            ]);
                                                                            $idevidenceFinancial183 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia273,
                                                                            'activity_source_id' =>$idactivitySource184,
                                                                            'value' => 85000000,
                                                                            ]);
                                                                            $idevidenceFinancial184 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia274,
                                                                            'activity_source_id' =>$idactivitySource185,
                                                                            'value' => 42493698,
                                                                            ]);
                                                                            $idevidenceFinancial185 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia275,
                                                                            'activity_source_id' =>$idactivitySource186,
                                                                            'value' => 223323626,
                                                                            ]);
                                                                            $idevidenceFinancial186 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia276,
                                                                            'activity_source_id' =>$idactivitySource187,
                                                                            'value' => 37000000,
                                                                            ]);
                                                                            $idevidenceFinancial187 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia277,
                                                                            'activity_source_id' =>$idactivitySource188,
                                                                            'value' => 59959476,
                                                                            ]);
                                                                            $idevidenceFinancial188 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia278,
                                                                            'activity_source_id' =>$idactivitySource189,
                                                                            'value' => 250000000,
                                                                            ]);
                                                                            $idevidenceFinancial189 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia279,
                                                                            'activity_source_id' =>$idactivitySource190,
                                                                            'value' => 90000000,
                                                                            ]);
                                                                            $idevidenceFinancial190 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia280,
                                                                            'activity_source_id' =>$idactivitySource191,
                                                                            'value' => 150000000,
                                                                            ]);
                                                                            $idevidenceFinancial191 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia336,
                                                                            'activity_source_id' =>$idactivitySource192,
                                                                            'value' => 934420000,
                                                                            ]);
                                                                            $idevidenceFinancial192 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia282,
                                                                            'activity_source_id' =>$idactivitySource193,
                                                                            'value' => 145500000,
                                                                            ]);
                                                                            $idevidenceFinancial193 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia283,
                                                                            'activity_source_id' =>$idactivitySource194,
                                                                            'value' => 247639790,
                                                                            ]);
                                                                            $idevidenceFinancial194 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia284,
                                                                            'activity_source_id' =>$idactivitySource195,
                                                                            'value' => 50000000,
                                                                            ]);
                                                                            $idevidenceFinancial195 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia285,
                                                                            'activity_source_id' =>$idactivitySource196,
                                                                            'value' => 15000000,
                                                                            ]);
                                                                            $idevidenceFinancial196 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia286,
                                                                            'activity_source_id' =>$idactivitySource197,
                                                                            'value' => 37547525,
                                                                            ]);
                                                                            $idevidenceFinancial197 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia287,
                                                                            'activity_source_id' =>$idactivitySource198,
                                                                            'value' => 22874605,
                                                                            ]);
                                                                            $idevidenceFinancial198 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia339,
                                                                            'activity_source_id' =>$idactivitySource199,
                                                                            'value' => 20000000,
                                                                            ]);
                                                                            $idevidenceFinancial199 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia294,
                                                                            'activity_source_id' =>$idactivitySource200,
                                                                            'value' => 115500000,
                                                                            ]);
                                                                            $idevidenceFinancial200 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia295,
                                                                            'activity_source_id' =>$idactivitySource201,
                                                                            'value' => 50000000,
                                                                            ]);
                                                                            $idevidenceFinancial201 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia296,
                                                                            'activity_source_id' =>$idactivitySource202,
                                                                            'value' => 130800000,
                                                                            ]);
                                                                            $idevidenceFinancial202 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia297,
                                                                            'activity_source_id' =>$idactivitySource203,
                                                                            'value' => 20000000,
                                                                            ]);
                                                                            $idevidenceFinancial203 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia298,
                                                                            'activity_source_id' =>$idactivitySource204,
                                                                            'value' => 50000000,
                                                                            ]);
                                                                            $idevidenceFinancial204 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia300,
                                                                            'activity_source_id' =>$idactivitySource205,
                                                                            'value' => 192506007,
                                                                            ]);
                                                                            $idevidenceFinancial205 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia301,
                                                                            'activity_source_id' =>$idactivitySource206,
                                                                            'value' => 52550000,
                                                                            ]);
                                                                            $idevidenceFinancial206 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia302,
                                                                            'activity_source_id' =>$idactivitySource207,
                                                                            'value' => 53000000,
                                                                            ]);
                                                                            $idevidenceFinancial207 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia303,
                                                                            'activity_source_id' =>$idactivitySource208,
                                                                            'value' => 30000000,
                                                                            ]);
                                                                            $idevidenceFinancial208 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia340,
                                                                            'activity_source_id' =>$idactivitySource209,
                                                                            'value' => 35000000,
                                                                            ]);
                                                                            $idevidenceFinancial209 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia304,
                                                                            'activity_source_id' =>$idactivitySource210,
                                                                            'value' => 234539645,
                                                                            ]);
                                                                            $idevidenceFinancial210 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia305,
                                                                            'activity_source_id' =>$idactivitySource211,
                                                                            'value' => 84803180.28,
                                                                            ]);
                                                                            $idevidenceFinancial211 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia306,
                                                                            'activity_source_id' =>$idactivitySource212,
                                                                            'value' => 52000000,
                                                                            ]);
                                                                            $idevidenceFinancial212 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia307,
                                                                            'activity_source_id' =>$idactivitySource213,
                                                                            'value' => 20000000,
                                                                            ]);
                                                                            $idevidenceFinancial213 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia308,
                                                                            'activity_source_id' =>$idactivitySource214,
                                                                            'value' => 50000000,
                                                                            ]);
                                                                            $idevidenceFinancial214 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia309,
                                                                            'activity_source_id' =>$idactivitySource215,
                                                                            'value' => 40000000,
                                                                            ]);
                                                                            $idevidenceFinancial215 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia310,
                                                                            'activity_source_id' =>$idactivitySource216,
                                                                            'value' => 26186878.28,
                                                                            ]);
                                                                            $idevidenceFinancial216 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia311,
                                                                            'activity_source_id' =>$idactivitySource217,
                                                                            'value' => 30000000,
                                                                            ]);
                                                                            $idevidenceFinancial217 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                          DB::table('evidence_financial')->insert([
                                                                            'evidence_id' => $idevidencia312,
                                                                            'activity_source_id' =>$idactivitySource218,
                                                                            'value' => 673529.279999971,
                                                                            ]);
                                                                            $idevidenceFinancial218 = DB::getPdo()->lastInsertId();
                                                                            
                                                                            
                                                                            
                                                                            DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia300,
                                                                              'activity_source_id' =>$idactivitySource221,
                                                                              'value' => 114193993,
                                                                              ]);
                                                                              $idevidenceFinancial221 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia305,
                                                                              'activity_source_id' =>$idactivitySource222,
                                                                              'value' => 25196819.72,
                                                                              ]);
                                                                              $idevidenceFinancial222 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia310,
                                                                              'activity_source_id' =>$idactivitySource223,
                                                                              'value' => 3813121.72000003,
                                                                              ]);
                                                                              $idevidenceFinancial223 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                            DB::table('evidence_financial')->insert([
                                                                              'evidence_id' => $idevidencia312,
                                                                              'activity_source_id' =>$idactivitySource224,
                                                                              'value' => 13677970.9896,
                                                                              ]);
                                                                              $idevidenceFinancial224 = DB::getPdo()->lastInsertId();
                                                                              
                                                                              
                                                                              
                                                                              DB::table('evidence_financial')->insert([
                                                                                'evidence_id' => $idevidencia312,
                                                                                'activity_source_id' =>$idactivitySource225,
                                                                                'value' => 15648499.7304,
                                                                                ]);
                                                                                $idevidenceFinancial225 = DB::getPdo()->lastInsertId();
                                                                                
                                                                                
                                                                                
                                                                                                                                                                                                                                                                                                                                                                                          
  }
}  