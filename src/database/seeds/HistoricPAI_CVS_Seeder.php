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
 * Class HistoricPAI_CVS_Seeder
 */
class HistoricPAI_CVS_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'PLAN DE ACCIÓN DE 2016-2019',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'JOSÉ FERNANDO TIRADO HERNANDEZ',
        'group_id' => 34,
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
        'car_program' => 'ORDENAMIENTO AMBIENTAL Y NUEVA VISIÓN DEL DESARROLLO TERRITORIAL',
        'weighing' => 3,
        ]);
        $idprogram1 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('programs')->insert([
        'strategic_line_id' => $idline1,
        'national_program_id' => 799,
        'car_program' => 'LA BIODIVERSIDAD EN FUNCIÓN DE SERVICIOS ECOSISTÉMICOS Y SOSTENIBILIDAD DEL TERRITORIO',
        'weighing' => 46,
        ]);
        $idprogram2 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('programs')->insert([
        'strategic_line_id' => $idline1,
        'national_program_id' => 799,
        'car_program' => 'LO URBANO, PRODUCTIVO Y MARINO ARMONIZADO CON LA OFERTA AMBIENTAL ',
        'weighing' => 16,
        ]);
        $idprogram3 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('programs')->insert([
        'strategic_line_id' => $idline1,
        'national_program_id' => 799,
        'car_program' => 'GESTIÓN INTEGRAL DEL RECURSO SUELO EN EL DEPARTAMENTO DE CÓRDOBA ',
        'weighing' => 1,
        ]);
        $idprogram4 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('programs')->insert([
        'strategic_line_id' => $idline1,
        'national_program_id' => 799,
        'car_program' => 'RECURSO HIDRICO Y MANEJO INTEGRADO',
        'weighing' => 6,
        ]);
        $idprogram5 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('programs')->insert([
        'strategic_line_id' => $idline1,
        'national_program_id' => 799,
        'car_program' => 'CONECTIVIDAD HIDROLOGICA',
        'weighing' => 6,
        ]);
        $idprogram6 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('programs')->insert([
        'strategic_line_id' => $idline1,
        'national_program_id' => 799,
        'car_program' => 'GESTIÓN DE RIESGO, ADAPTACIÓN Y MITIGACIÓN FRENTE AL CAMBIO CLIMÁTICO, PARA LA REDUCCIÓN DE LA VULNERABILIDAD DEL TERRITORIO',
        'weighing' => 7,
        ]);
        $idprogram7 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('programs')->insert([
        'strategic_line_id' => $idline1,
        'national_program_id' => 799,
        'car_program' => 'INSTITUCIONALIDAD FORTALECIDA PARA LA GESTION AMBIENTAL REGIONAL Y EL BUEN GOBIERNO ',
        'weighing' => 15,
        ]);
        $idprogram8 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram1,
        'project' => 'Planeación para la incorporación de la variable ambiental en los procesos de ordenamiento territorial',
        'weighing' => 72,
        ]);
        $idproject1 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram1,
        'project' => 'Definición, caracterización y especialización de las estructura ecológicas rural y urbana en el departamento de Córdoba',
        'weighing' => 28,
        ]);
        $idproject2 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram2,
        'project' => 'Áreas protegidas, ecosistemas estratégicos y áreas marinas protegidas como garantía de funcionalidad ecosistémica en el departamento de Córdoba',
        'weighing' => 9,
        ]);
        $idproject3 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram2,
        'project' => 'Conservación y uso sostenible de la biodiversidad en el Departamento de Córdoba.',
        'weighing' => 3,
        ]);
        $idproject4 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram2,
        'project' => 'Restauración ecosistémica con énfasis en conectividad  para la construcción y recuperación de la estructura ecológica natural de soporte en el Departamento de Córdoba',
        'weighing' => 80,
        ]);
        $idproject5 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram2,
        'project' => 'Conservación del recurso hidrobiológico y pesquero en el Departamento de Córdoba.',
        'weighing' => 8,
        ]);
        $idproject6 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram3,
        'project' => 'Gestión en producción y consumo sostenible en el Departamento de Córdoba.',
        'weighing' => 7,
        ]);
        $idproject7 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram3,
        'project' => 'Gestión ambiental en el sector minero ',
        'weighing' => 10,
        ]);
        $idproject8 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram3,
        'project' => 'Gestión ambiental urbana en el departamento de Córdoba ',
        'weighing' => 59,
        ]);
        $idproject9 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram3,
        'project' => 'Saneamiento ambiental en el departamento de Córdoba ',
        'weighing' => 18,
        ]);
        $idproject10 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram3,
        'project' => 'Gestión Ambiental de zona marino costera',
        'weighing' => 6,
        ]);
        $idproject11 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram4,
        'project' => 'Recuperación y protección del recurso suelo en el ',
        'weighing' => 100,
        ]);
        $idproject12 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram5,
        'project' => 'Planificación y  ordenamiento del recurso hídrico en el departamento de Córdoba ',
        'weighing' => 31,
        ]);
        $idproject13 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram5,
        'project' => 'Manejo Integral del Recurso Hídrico ',
        'weighing' => 69,
        ]);
        $idproject14 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram6,
        'project' => 'Conectividad hidrológica con énfasis en la funcionalidad del ecosistema ',
        'weighing' => 100,
        ]);
        $idproject15 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram7,
        'project' => 'Adaptación al cambio climático en departamento de Córdoba e Implementación de un proyecto piloto de Adaptación en humedales del departamento',
        'weighing' => 54,
        ]);
        $idproject16 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram7,
        'project' => 'Mitigación frente al cambio climático en los sectores ',
        'weighing' => 5,
        ]);
        $idproject17 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram7,
        'project' => 'Gestión del riesgo y cambio climático en el departamento de Córdoba ',
        'weighing' => 41,
        ]);
        $idproject18 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram8,
        'project' => 'Educación y Participación para la construcción de Córdoba Biocultural en el territorio ',
        'weighing' => 45,
        ]);
        $idproject19 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram8,
        'project' => 'Autoridad Ambiental y Licencias Ambientales ',
        'weighing' => 30,
        ]);
        $idproject20 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram8,
        'project' => 'Sistemas para el Mejoramiento de la Eficiencia de la gestión',
        'weighing' => 9,
        ]);
        $idproject21 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram8,
        'project' => 'Fortalecimiento de la Gestión Financiera',
        'weighing' => 6,
        ]);
        $idproject22 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('projects')->insert([
        'program_id' => $idprogram8,
        'project' => 'Construcción y/o adecuación de las sedes y subsedes, dotación y modernización de inmueble de la CVS',
        'weighing' => 8,
        ]);
        $idproject23 = DB::getPdo()->lastInsertId();
        
        
        
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
        
DB::table('objective_products')->insert([
	'objective_id' => $idobjective1,
	'product_id' => null,
	'product_other' => 'Asistencia técnica a sistemas locales de planificación en determinantes ambientales para el ordenamiento territorial',
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
	'weighing' => 20,
	]);
	$idobjectiveproduct1 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective1,
	'product_id' => null,
	'product_other' => 'Identificación y diseño de determinantes ambientales',
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
	$idobjectiveproduct2 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective1,
	'product_id' => null,
	'product_other' => 'Diseñar un protocolo de determinantes Ambientales con autoridades ambientales',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 4,
	'unit_goal' => 82,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 20,
	]);
	$idobjectiveproduct3 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective1,
	'product_id' => null,
	'product_other' => 'Seguimiento al cumplimiento de los asuntos ambientales por parte de los municipios mediante visitas de campo, indicadores de calidad ambiental urbana ICAU y levantamiento de linea base ambiental urbana',
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
	'weighing' => 20,
	]);
	$idobjectiveproduct4 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective1,
	'product_id' => null,
	'product_other' => 'Actualizar el Plan General de Ordenamiento Forestal para el Area de Jurisdiccion de la CVS ',
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
	'weighing' => 19,
	]);
	$idobjectiveproduct5 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective1,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct6 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective2,
	'product_id' => null,
	'product_other' => 'Definir y diseñar con las orientaciones del MADS la Estructura Ecológica Territorial',
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
	'weighing' => 100,
	]);
	$idobjectiveproduct7 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective3,
	'product_id' => null,
	'product_other' => 'Implementación de actividades en areas protegidas ya declaradas',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 4,
	'unit_goal' => 39,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct8 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective3,
	'product_id' => null,
	'product_other' => 'Apoyo a la conformacion de la Mesa SIRAP CARIBE',
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
	$idobjectiveproduct9 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective3,
	'product_id' => null,
	'product_other' => 'Declaratoria de nuevas areas protegidas mediante acuerdos de Consejo directivo',
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
	'weighing' => 25,
	]);
	$idobjectiveproduct10 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective3,
	'product_id' => null,
	'product_other' => 'Delimitación, zonificación y planes de manejo de ecosistemas para aumentar la oferta ambiental y la estabilidad ecológica.',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 4,
	'unit_goal' => 45,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 24,
	]);
	$idobjectiveproduct11 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective3,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct12 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective4,
	'product_id' => null,
	'product_other' => 'Implementar  Planes de Manejo de especies focales  de fauna silvestre, exóticas, marino costeros , terrestre, dulceacuícolas, flora y  recurso hidrobiológico ',
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
	'weighing' => 50,
	]);
	$idobjectiveproduct13 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective4,
	'product_id' => null,
	'product_other' => 'Identificar y priorizar nuevas especies focales  de fauna silvestre, exóticas, marino costeros , terrestre, dulceacuícolas, flora y recurso hidrobiológico en estado crítico de conservación (bioindicadoreas), medidas de recuperación de estas poblaciones y  habitas asociados ',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 2,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 2,
	'goal_4_balance' => 1,
	'total_goal' => 5,
	'unit_goal' => 43,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 49,
	]);
	$idobjectiveproduct14 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective4,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct15 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective5,
	'product_id' => null,
	'product_other' => 'Reforestación protectora como alternativa de conectividad  y recuperacion de la funcionalidad y prestacion de servicios ecosistemicos',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1500,
	'goal_4' => 0,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1500,
	'goal_4_balance' => 0,
	'total_goal' => 1502,
	'unit_goal' => 47,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 33,
	]);
	$idobjectiveproduct16 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective5,
	'product_id' => null,
	'product_other' => 'Mantenimiento como alternativa de conectividad y recupoeración de la Funcionalidad y prestación de servicios ecosistemicos',
	'goal_1' => 0,
	'goal_2' => 0,
	'goal_3' => 0,
	'goal_4' => 5500,
	'goal_1_balance' => 0,
	'goal_2_balance' => 0,
	'goal_3_balance' => 0,
	'goal_4_balance' => 5500,
	'total_goal' => 5500,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 33,
	]);
	$idobjectiveproduct17 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective5,
	'product_id' => null,
	'product_other' => 'Protocolo de restauración ecosistémica a partir de modelos de sucesión ecológica y requerimientos de conectividad con base en la información disponible de la biodiversidad. ',
	'goal_1' => 2821,
	'goal_2' => 4000,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 2821,
	'goal_2_balance' => 4000,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 6823,
	'unit_goal' => 74,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 33,
	]);
	$idobjectiveproduct18 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective5,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct19 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective6,
	'product_id' => null,
	'product_other' => 'Continuar con los programas de cria de peces para el ',
	'goal_1' => 5000000,
	'goal_2' => 5000000,
	'goal_3' => 5000000,
	'goal_4' => 10000000,
	'goal_1_balance' => 5000000,
	'goal_2_balance' => 5000000,
	'goal_3_balance' => 5000000,
	'goal_4_balance' => 10000000,
	'total_goal' => 25000000,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 100,
	]);
	$idobjectiveproduct20 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Fortalecimiento en tecnicas  sostenible para el manejo artesanal ',
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
	'weighing' => 13,
	]);
	$idobjectiveproduct21 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Apoyo a la instalación de la mesa nacional de producción y consumo sostenible para el año 2016',
	'goal_1' => 10,
	'goal_2' => 0,
	'goal_3' => 0,
	'goal_4' => 10,
	'goal_1_balance' => 10,
	'goal_2_balance' => 0,
	'goal_3_balance' => 0,
	'goal_4_balance' => 10,
	'total_goal' => 20,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 13,
	]);
	$idobjectiveproduct22 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Acompañamiento a intercambios de experiencias a los sectores productivos convencionales hacia la reconversión de los sistemas de consumo sostenibles PyCS  en empresas en jurisdicción de la CVS.',
	'goal_1' => 5,
	'goal_2' => 10,
	'goal_3' => 10,
	'goal_4' => 68,
	'goal_1_balance' => 5,
	'goal_2_balance' => 10,
	'goal_3_balance' => 10,
	'goal_4_balance' => 68,
	'total_goal' => 93,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 13,
	]);
	$idobjectiveproduct23 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Acompañamiento a la elaboración de ecoproductos mediante la implementación de proyectos sostenible',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 2,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 2,
	'goal_4_balance' => 1,
	'total_goal' => 5,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 12,
	]);
	$idobjectiveproduct24 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Apoyo al fortalecimiento de negocios verdes en los sectores productivos del Departamento ',
	'goal_1' => 10,
	'goal_2' => 10,
	'goal_3' => 5,
	'goal_4' => 80,
	'goal_1_balance' => 10,
	'goal_2_balance' => 10,
	'goal_3_balance' => 5,
	'goal_4_balance' => 80,
	'total_goal' => 105,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 12,
	]);
	$idobjectiveproduct25 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Línea base para implementar mínimo dos (2) pilotos de Negocios Verdes -NV -bajo los criterios descritos en el Plan Nacional de Negocios Verdes - PNNV- ',
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
	'weighing' => 12,
	]);
	$idobjectiveproduct26 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Formulación del Plan de Acción para la ejecución de Programas Regionales de Negocios Verdes PRNV - en jurisdicción de la CVS',
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
	'weighing' => 12,
	]);
	$idobjectiveproduct27 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Conformación de la Ventanilla / Nodo de Negocios Verdes y alianzas Estratégica',
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
	'weighing' => 12,
	]);
	$idobjectiveproduct28 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective7,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct29 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective8,
	'product_id' => null,
	'product_other' => 'Restaurar y recuperar áreas afectadas por minería en estado de abandono en la cuenca del rio San Jorge en el departamento de Córdoba mediante el diseño técnico de adaptación de las condiciones geomorfológicas del área y su respectiva rehabilitación forestal ',
	'goal_1' => 0,
	'goal_2' => 25,
	'goal_3' => 30,
	'goal_4' => 100,
	'goal_1_balance' => 0,
	'goal_2_balance' => 25,
	'goal_3_balance' => 30,
	'goal_4_balance' => 100,
	'total_goal' => 155,
	'unit_goal' => 44,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 50,
	]);
	$idobjectiveproduct30 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective8,
	'product_id' => null,
	'product_other' => 'Registro, control y seguimiento de las minas con licenciamiento plan de manejo en el departamento de Córdoba ',
	'goal_1' => 0,
	'goal_2' => 100,
	'goal_3' => 100,
	'goal_4' => 100,
	'goal_1_balance' => 0,
	'goal_2_balance' => 100,
	'goal_3_balance' => 100,
	'goal_4_balance' => 100,
	'total_goal' => 300,
	'unit_goal' => 69,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 49,
	]);
	$idobjectiveproduct31 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective8,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct32 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective9,
	'product_id' => null,
	'product_other' => 'Revisar, cuantificar y actualizar los estudios y mapas de ruido de los Municipios del Departamento de Córdoba con una población superior (>) a cien mil (100.000) habitantes de acuerdo con lo establecido en la Resolución 627 de 2006',
	'goal_1' => 0,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 0,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 3,
	'unit_goal' => 57,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 17,
	]);
	$idobjectiveproduct33 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective9,
	'product_id' => null,
	'product_other' => 'Desarrollar planes, programas y proyectos preventivos, correctivos o de seguimiento  al ruido ambiental y a la emisión de ruido, con base  a los planes de descontaminación de ruido de los municipios con una población superior (>) a cien mil (100.000) habitantes en el Departamento de Córdoba. ',
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
	'weighing' => 17,
	]);
	$idobjectiveproduct34 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective9,
	'product_id' => null,
	'product_other' => 'Optimización  del funcionamiento del Sistema de Vigilancia de Calidad de Aire - SVCA del Municipio de Montería, Departamento de Córdoba ',
	'goal_1' => 3,
	'goal_2' => 3,
	'goal_3' => 4,
	'goal_4' => 4,
	'goal_1_balance' => 3,
	'goal_2_balance' => 3,
	'goal_3_balance' => 4,
	'goal_4_balance' => 4,
	'total_goal' => 14,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 17,
	]);
	$idobjectiveproduct35 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective9,
	'product_id' => null,
	'product_other' => 'Control, evaluación y seguimiento a los niveles de calidad del aire o de emisión e inmisión de olores ofensivos en el departamento de Córdoba ',
	'goal_1' => 0,
	'goal_2' => 100,
	'goal_3' => 100,
	'goal_4' => 100,
	'goal_1_balance' => 0,
	'goal_2_balance' => 100,
	'goal_3_balance' => 100,
	'goal_4_balance' => 100,
	'total_goal' => 300,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 16,
	]);
	$idobjectiveproduct36 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective9,
	'product_id' => null,
	'product_other' => 'Capacitación y fortalecimiento en la auditoría al proceso de medición de fuentes fijas, de medición de fuentes móviles, evaluación de olores ofensivos, mediciones de emisión de ruido y ruido ambiental',
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
	'weighing' => 16,
	]);
	$idobjectiveproduct37 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective9,
	'product_id' => null,
	'product_other' => 'Ajuste, implementación y seguimiento del Plan Departamental de Residuos Peligrosos RESPEL ',
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
	$idobjectiveproduct38 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective9,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct39 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective10,
	'product_id' => null,
	'product_other' => 'Apoyo técnico para la actualización de los planes maestros de acueducto y alcantarillado de las cabeceras municipales en el departamento de córdoba ',
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
	'weighing' => 25,
	]);
	$idobjectiveproduct40 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective10,
	'product_id' => null,
	'product_other' => 'Apoyo a la adecuación, Construcción y Optimización, de las obras en el sector saneamiento ambiental en Municipios y Centros Poblados en el departamento de Córdoba ',
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
	'weighing' => 25,
	]);
	$idobjectiveproduct41 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective10,
	'product_id' => null,
	'product_other' => 'Hacer seguimiento a Planes de Saneamiento y Manejo Vertimientos (PSMV) aprobados por CVS ',
	'goal_1' => 6,
	'goal_2' => 8,
	'goal_3' => 8,
	'goal_4' => 8,
	'goal_1_balance' => 6,
	'goal_2_balance' => 8,
	'goal_3_balance' => 8,
	'goal_4_balance' => 8,
	'total_goal' => 30,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct42 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective10,
	'product_id' => null,
	'product_other' => 'Hacer seguimiento anual a  Planes de Gestión Integral de Residuos Sólidos  (PGIRS) de municipios pertenecientes a la Jurisdicción de CVS ',
	'goal_1' => 6,
	'goal_2' => 8,
	'goal_3' => 8,
	'goal_4' => 8,
	'goal_1_balance' => 6,
	'goal_2_balance' => 8,
	'goal_3_balance' => 8,
	'goal_4_balance' => 8,
	'total_goal' => 30,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 24,
	]);
	$idobjectiveproduct43 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective10,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct44 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective11,
	'product_id' => null,
	'product_other' => 'Formular un Plan de Ordenacion y Manejo Integrado de la Unidad Ambiental Costera - POMIUAC de la UAC estuarina del rio Sinú y el Golfo de Morrosquillo',
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
	'weighing' => 33,
	]);
	$idobjectiveproduct45 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective11,
	'product_id' => null,
	'product_other' => 'Realizar monitoreo continuos de calidad ambiental marino costera (Mantener la operación del REDCAM) a ecosistemas marino costeros del departamento de Córdoba',
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
	'weighing' => 33,
	]);
	$idobjectiveproduct46 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective11,
	'product_id' => null,
	'product_other' => 'Realizar monitoreo continuos de la erosión marino costera a la línea de costa del departamento de Córdoba',
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
	'weighing' => 33,
	]);
	$idobjectiveproduct47 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective11,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct48 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective12,
	'product_id' => null,
	'product_other' => 'Rehabilitación de suelos degradados mediante la Implementación de sistemas silvopastoriles  y agroforestales  en el departamento de Córdoba ',
	'goal_1' => 50,
	'goal_2' => 450,
	'goal_3' => 500,
	'goal_4' => 100,
	'goal_1_balance' => 50,
	'goal_2_balance' => 450,
	'goal_3_balance' => 500,
	'goal_4_balance' => 100,
	'total_goal' => 1100,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 17,
	]);
	$idobjectiveproduct49 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective12,
	'product_id' => null,
	'product_other' => 'lniciar procesos de rehabilitación en áreas
degradadas por la intervención antrópica en los municipios de Valencia y Tierralta en el departamento de Córdoba',
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
	'weighing' => 17,
	]);
	$idobjectiveproduct50 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective12,
	'product_id' => null,
	'product_other' => 'lmplementar rehabilitación ecológica de las
áreas ecosistémicas forestales degradadas por la
ganadería extensiva en la cuenca del rio Canalete del departamento de Córdoba',
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
	'weighing' => 17,
	]);
	$idobjectiveproduct51 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective12,
	'product_id' => null,
	'product_other' => 'Rehabilitación ecológica participativa en áreas de aptitud ambiental y forestal en la subcuenca las flores del municipio de Tierralta córdoba',
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
	'weighing' => 16,
	]);
	$idobjectiveproduct52 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective12,
	'product_id' => null,
	'product_other' => 'Rehabilitación ecológica participativa con bioingeniería en rondas hídricas en la ciénaga de Ayapel del departamento de córdoba, caribe',
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
	'weighing' => 16,
	]);
	$idobjectiveproduct53 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective12,
	'product_id' => null,
	'product_other' => 'Rehabilitacion de suelos degradados mediante la implementacion de plantaciones forestales protectoras en el Departamento de Cordoba ',
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
	'weighing' => 16,
	]);
	$idobjectiveproduct54 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective12,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct55 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective13,
	'product_id' => null,
	'product_other' => 'Adelantar los procesos de  adopción de POMCAS en cuencas hidrográficas priorizadas en el departamento de Córdoba ',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 4,
	'unit_goal' => 80,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 20,
	]);
	$idobjectiveproduct56 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective13,
	'product_id' => null,
	'product_other' => 'Adelantar los procesos de formulación de Planes de Manejo de Microcuencas (PMM) en microcuencas hidrográficas priorizadas en el departamento de Córdoba',
	'goal_1' => 0,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 0,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 3,
	'unit_goal' => 85,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 20,
	]);
	$idobjectiveproduct57 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective13,
	'product_id' => null,
	'product_other' => 'Adelantar los procesos para la formulación de Planes de Manejo de Acuíferos priorizados en el departamento de Córdoba. ',
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
	'weighing' => 20,
	]);
	$idobjectiveproduct58 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective13,
	'product_id' => null,
	'product_other' => 'Gestionar la formulación de Planes de Ordenamiento del Recurso Hídrico para corrientes hídricas priorizadas en el departamento de Córdoba',
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
	'weighing' => 20,
	]);
	$idobjectiveproduct59 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective13,
	'product_id' => null,
	'product_other' => 'Ejecutar las acciones establecidas dentro de los POMCAS que se encuentren adoptados a la fecha ',
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
	'weighing' => 19,
	]);
	$idobjectiveproduct60 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective13,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct61 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Gestionar la reglamentación de corriente hídricas principales de cuencas priorizadas en el departamento de Córdoba ',
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
	'weighing' => 13,
	]);
	$idobjectiveproduct62 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Realizar  monitoreo continuos de calidad de agua superficial y subterránea a corrientes hídricas priorizadas en el departamento de Córdoba ',
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
	'weighing' => 13,
	]);
	$idobjectiveproduct63 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Actualizar continuamente el sistema de información para el manejo del Recurso Hídrico ',
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
	'weighing' => 13,
	]);
	$idobjectiveproduct64 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Registro de usuarios de aguas superficiales y subterráneas en el sistema de información ',
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
	$idobjectiveproduct65 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Gobernanza con fundamento en la creación de cultura del agua ',
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
	$idobjectiveproduct66 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Realizar campañas comunitarias y sectoriales para el fortalecimiento de los programas de ahorro y uso eficiente del agua. No PUEAA',
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
	'weighing' => 12,
	]);
	$idobjectiveproduct67 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Realizar campañas comunitarias y sectoriales para el fortalecimiento de los programas de ahorro y uso eficiente del agua. No campañas',
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
	'weighing' => 12,
	]);
	$idobjectiveproduct68 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Construir pozos subterráneos para abastecer comunidades en zonas rurales priorizadas ',
	'goal_1' => 2,
	'goal_2' => 1,
	'goal_3' => 0,
	'goal_4' => 1,
	'goal_1_balance' => 2,
	'goal_2_balance' => 1,
	'goal_3_balance' => 0,
	'goal_4_balance' => 1,
	'total_goal' => 4,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 12,
	]);
	$idobjectiveproduct69 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective14,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct70 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective15,
	'product_id' => null,
	'product_other' => 'Diseñar y construir obras para el mejoramiento de la dinámica hidrológica y conectividad y la disminución del riesgo de inundaciones Implementación de plan piloto de recueración del humedal corralito',
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
	'weighing' => 100,
	]);
	$idobjectiveproduct71 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective16,
	'product_id' => null,
	'product_other' => 'Crear y participar en la mesa de adaptacion al cambio climatico',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 3,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 3,
	'total_goal' => 6,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 20,
	]);
	$idobjectiveproduct72 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective16,
	'product_id' => null,
	'product_other' => 'Monitoreo de los ecosistemas estrategicos para la adaptacion al cambio climatico en el departamento',
	'goal_1' => 5,
	'goal_2' => 5,
	'goal_3' => 5,
	'goal_4' => 1,
	'goal_1_balance' => 5,
	'goal_2_balance' => 5,
	'goal_3_balance' => 5,
	'goal_4_balance' => 1,
	'total_goal' => 16,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 20,
	]);
	$idobjectiveproduct73 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective16,
	'product_id' => null,
	'product_other' => 'Implementación a nivel local de los lineamientos del plan departamental de adaptación al cambio climático.',
	'goal_1' => 3,
	'goal_2' => 7,
	'goal_3' => 10,
	'goal_4' => 11,
	'goal_1_balance' => 3,
	'goal_2_balance' => 7,
	'goal_3_balance' => 10,
	'goal_4_balance' => 11,
	'total_goal' => 31,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 20,
	]);
	$idobjectiveproduct74 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective16,
	'product_id' => null,
	'product_other' => 'Fortalecimiento de las capacidades para la institucionalidad comunitaria como medida de adaptación al cambio climático ',
	'goal_1' => 0,
	'goal_2' => 2,
	'goal_3' => 2,
	'goal_4' => 2,
	'goal_1_balance' => 0,
	'goal_2_balance' => 2,
	'goal_3_balance' => 2,
	'goal_4_balance' => 2,
	'total_goal' => 6,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 20,
	]);
	$idobjectiveproduct75 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective16,
	'product_id' => null,
	'product_other' => 'Desarrollo de un proyecto piloto e implementar acciones replicables de adaptación en la zona de influencia de un humedal del departamento de Córdoba ',
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
	'weighing' => 19,
	]);
	$idobjectiveproduct76 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective16,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct77 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective17,
	'product_id' => null,
	'product_other' => 'Apoyo a la implementación estrategias sectoriales para la mitigación frente al cambio climático ',
	'goal_1' => 0,
	'goal_2' => 1,
	'goal_3' => 2,
	'goal_4' => 2,
	'goal_1_balance' => 0,
	'goal_2_balance' => 1,
	'goal_3_balance' => 2,
	'goal_4_balance' => 2,
	'total_goal' => 5,
	'unit_goal' => 45,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 100,
	]);
	$idobjectiveproduct78 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective18,
	'product_id' => null,
	'product_other' => 'Apoyo a los municipios en la inclusión del cambio climático y la gestión de riesgo en los instrumentos de planificación territorial.',
	'goal_1' => 2,
	'goal_2' => 8,
	'goal_3' => 12,
	'goal_4' => 10,
	'goal_1_balance' => 2,
	'goal_2_balance' => 8,
	'goal_3_balance' => 12,
	'goal_4_balance' => 10,
	'total_goal' => 32,
	'unit_goal' => 57,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct79 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective18,
	'product_id' => null,
	'product_other' => 'Apoyo al conocimiento para la prevencion frente a los impactos de eventos y efectos climaticos',
	'goal_1' => 1,
	'goal_2' => 3,
	'goal_3' => 4,
	'goal_4' => 3,
	'goal_1_balance' => 1,
	'goal_2_balance' => 3,
	'goal_3_balance' => 4,
	'goal_4_balance' => 3,
	'total_goal' => 11,
	'unit_goal' => 45,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct80 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective18,
	'product_id' => null,
	'product_other' => 'Apoyar la gestion para la reduccion de los riesgos climaticos en el departamento',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 4,
	'unit_goal' => 57,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct81 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective18,
	'product_id' => null,
	'product_other' => 'Monitoreo de las amenazas hidroclimaticas dentro de la gestión del riesgo en el Departamento',
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
	'weighing' => 24,
	]);
	$idobjectiveproduct82 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective18,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct83 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Apoyo al fortalecimiento de los Comités Interinstitucionales de Educación Ambiental, tanto departamental (CIDEA) como municipales (CIDEAM) priorizados por CVS ',
	'goal_1' => 3,
	'goal_2' => 4,
	'goal_3' => 4,
	'goal_4' => 4,
	'goal_1_balance' => 3,
	'goal_2_balance' => 4,
	'goal_3_balance' => 4,
	'goal_4_balance' => 4,
	'total_goal' => 15,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 11,
	]);
	$idobjectiveproduct84 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Apoyo a la formulación y aprobación de la Política Departamental de Educación Ambiental para Córdoba ',
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
	'weighing' => 11,
	]);
	$idobjectiveproduct85 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Apoyo a la implementación de la Política Departamental de Educación Ambiental para Córdoba ',
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
	'weighing' => 11,
	]);
	$idobjectiveproduct86 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Apoyo a la actualización y seguimiento a los planes de Educación Ambiental tanto departamental y Municipales priorizados por CVS ',
	'goal_1' => 3,
	'goal_2' => 4,
	'goal_3' => 4,
	'goal_4' => 4,
	'goal_1_balance' => 3,
	'goal_2_balance' => 4,
	'goal_3_balance' => 4,
	'goal_4_balance' => 4,
	'total_goal' => 15,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 11,
	]);
	$idobjectiveproduct87 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Apoyo en la formulación e implementación de PRAE, PROCEDA Y PRAU ',
	'goal_1' => 5,
	'goal_2' => 5,
	'goal_3' => 5,
	'goal_4' => 5,
	'goal_1_balance' => 5,
	'goal_2_balance' => 5,
	'goal_3_balance' => 5,
	'goal_4_balance' => 5,
	'total_goal' => 20,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 11,
	]);
	$idobjectiveproduct88 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Apoyo a la conformación de la RedPRAE y RedPROCEDA del departamento de Córdoba ',
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
	$idobjectiveproduct89 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Divulgación y comunicación para la vigilancia y control del tráfico ilegal de la biodiversidad en el departamento de Córdoba ',
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
	$idobjectiveproduct90 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Acompañamiento y seguimiento a  proyectos de Distritos Regionales de Manejo Integral (DRMI) del departamento de Córdoba',
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
	'weighing' => 11,
	]);
	$idobjectiveproduct91 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Apoyo a otras estrategias de la Política Nacional de Educación Ambiental del SINA ',
	'goal_1' => 0,
	'goal_2' => 2,
	'goal_3' => 3,
	'goal_4' => 3,
	'goal_1_balance' => 0,
	'goal_2_balance' => 2,
	'goal_3_balance' => 3,
	'goal_4_balance' => 3,
	'total_goal' => 8,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 11,
	]);
	$idobjectiveproduct92 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective19,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct93 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective20,
	'product_id' => null,
	'product_other' => 'Realizar control y seguimiento de proyectos con licencias, permisos o concesiones otorgadas, y vigilancias y control ',
	'goal_1' => 0.25,
	'goal_2' => 0.5,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 0.25,
	'goal_2_balance' => 0.5,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 2.75,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct94 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective20,
	'product_id' => null,
	'product_other' => 'Otorgar permisos, autorizaciones, concesiones ambientales  dentro de los tiempos establecidos por Ley ',
	'goal_1' => 100,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 100,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 103,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct95 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective20,
	'product_id' => null,
	'product_other' => 'Atender quejas y contravenciones ambientales dentro de la jurisdicción de la Corporación',
	'goal_1' => 100,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 100,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 103,
	'unit_goal' => 58,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 25,
	]);
	$idobjectiveproduct96 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective20,
	'product_id' => null,
	'product_other' => 'Continuar con la implementación y socialización de la Ventanilla Integral de Trámites Ambientales en Línea ‐ VITAL ',
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
	'weighing' => 24,
	]);
	$idobjectiveproduct97 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective20,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct98 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective21,
	'product_id' => null,
	'product_other' => 'Continuar con la Implementación de la estrategia de gobierno en línea ',
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
	'weighing' => 50,
	]);
	$idobjectiveproduct99 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective21,
	'product_id' => null,
	'product_other' => 'Continuar con la implementación  del sistema de información ambiental de la CVS  ',
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
	'weighing' => 49,
	]);
	$idobjectiveproduct100 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective21,
	'product_id' => null,
	'product_other' => 'Asignación presupuestal al proyecto',
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
	'weighing' => 1,
	]);
	$idobjectiveproduct101 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective22,
	'product_id' => null,
	'product_other' => 'Implementar estrategias para financiación de proyectos ambientales para el departamento de Córdoba
',
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
	'weighing' => 100,
	]);
	$idobjectiveproduct102 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('objective_products')->insert([
	'objective_id' => $idobjective23,
	'product_id' => null,
	'product_other' => 'Gestionar la construcción, adecuación y mejoramiento de las
instalaciones con las que cuenta la Corporación, para el ejercicio de su accionar misional
',
	'goal_1' => 1,
	'goal_2' => 1,
	'goal_3' => 1,
	'goal_4' => 1,
	'goal_1_balance' => 1,
	'goal_2_balance' => 1,
	'goal_3_balance' => 1,
	'goal_4_balance' => 1,
	'total_goal' => 4,
	'unit_goal' => 75,
	'indicator_national_id' => 799,
	'indicator_ods_id' => 890,
	'national_policy_id' => 875,
	'weighing' => 100,
	]);
	$idobjectiveproduct103 = DB::getPdo()->lastInsertId();
	
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct1,
        'name' => 'Asistencia técnica a sistemas locales de planificación en determinantes ambientales para el ordenamiento territorial',
        'goal_1' => 3,
        'goal_2' => 3,
        'goal_3' => 3,
        'goal_4' => 3,
        'goal' => 12,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct2,
        'name' => 'Identificación y diseño de determinantes ambientales',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct3,
        'name' => 'Diseñar un protocolo de determinantes Ambientales con autoridades ambientales',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct4,
        'name' => 'Seguimiento al cumplimiento de los asuntos ambientales por parte de los municipios mediante visitas de campo, indicadores de calidad ambiental urbana ICAU y levantamiento de linea base ambiental urbana',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct5,
        'name' => 'Actualizar el Plan General de Ordenamiento Forestal para el Area de Jurisdiccion de la CVS ',
        'goal_1' => 1,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 1,
        'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective1,
        'product_id' =>$idobjectiveproduct6,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective2,
        'product_id' =>$idobjectiveproduct7,
        'name' => 'Definir y diseñar con las orientaciones del MADS la Estructura Ecológica Territorial',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct8,
        'name' => 'Implementación de actividades en areas protegidas ya declaradas',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct9,
        'name' => 'Apoyo a la conformacion de la Mesa SIRAP CARIBE',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct10,
        'name' => 'Declaratoria de nuevas areas protegidas mediante acuerdos de Consejo directivo',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 2,
        'goal' => 5,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct11,
        'name' => 'Delimitación, zonificación y planes de manejo de ecosistemas para aumentar la oferta ambiental y la estabilidad ecológica.',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective3,
        'product_id' =>$idobjectiveproduct12,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective4,
        'product_id' =>$idobjectiveproduct13,
        'name' => 'Implementar  Planes de Manejo de especies focales  de fauna silvestre, exóticas, marino costeros , terrestre, dulceacuícolas, flora y  recurso hidrobiológico ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective4,
        'product_id' =>$idobjectiveproduct14,
        'name' => 'Identificar y priorizar nuevas especies focales  de fauna silvestre, exóticas, marino costeros , terrestre, dulceacuícolas, flora y recurso hidrobiológico en estado crítico de conservación (bioindicadoreas), medidas de recuperación de estas poblaciones y  habitas asociados ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 2,
        'goal_4' => 1,
        'goal' => 5,
        'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective4,
        'product_id' =>$idobjectiveproduct15,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct16,
        'name' => 'Reforestación protectora como alternativa de conectividad  y recuperacion de la funcionalidad y prestacion de servicios ecosistemicos',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1500,
        'goal_4' => 0,
        'goal' => 1502,
        'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct17,
        'name' => 'Mantenimiento como alternativa de conectividad y recupoeración de la Funcionalidad y prestación de servicios ecosistemicos',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 5500,
        'goal' => 5500,
        'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct18,
        'name' => 'Protocolo de restauración ecosistémica a partir de modelos de sucesión ecológica y requerimientos de conectividad con base en la información disponible de la biodiversidad. ',
        'goal_1' => 2821,
        'goal_2' => 4000,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 6823,
        'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective5,
        'product_id' =>$idobjectiveproduct19,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective6,
        'product_id' =>$idobjectiveproduct20,
        'name' => 'Continuar con los programas de cria de peces para el ',
        'goal_1' => 5000000,
        'goal_2' => 5000000,
        'goal_3' => 5000000,
        'goal_4' => 10000000,
        'goal' => 25000000,
        'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct21,
        'name' => 'Fortalecimiento en tecnicas  sostenible para el manejo artesanal ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct22,
        'name' => 'Apoyo a la instalación de la mesa nacional de producción y consumo sostenible para el año 2016',
        'goal_1' => 10,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 10,
        'goal' => 20,
        'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct23,
        'name' => 'Acompañamiento a intercambios de experiencias a los sectores productivos convencionales hacia la reconversión de los sistemas de consumo sostenibles PyCS  en empresas en jurisdicción de la CVS.',
        'goal_1' => 5,
        'goal_2' => 10,
        'goal_3' => 10,
        'goal_4' => 68,
        'goal' => 93,
        'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct24,
        'name' => 'Acompañamiento a la elaboración de ecoproductos mediante la implementación de proyectos sostenible',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 2,
        'goal_4' => 1,
        'goal' => 5,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct25,
        'name' => 'Apoyo al fortalecimiento de negocios verdes en los sectores productivos del Departamento ',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 5,
        'goal_4' => 80,
        'goal' => 105,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct26,
        'name' => 'Línea base para implementar mínimo dos (2) pilotos de Negocios Verdes -NV -bajo los criterios descritos en el Plan Nacional de Negocios Verdes - PNNV- ',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 1,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct27,
        'name' => 'Formulación del Plan de Acción para la ejecución de Programas Regionales de Negocios Verdes PRNV - en jurisdicción de la CVS',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct28,
        'name' => 'Conformación de la Ventanilla / Nodo de Negocios Verdes y alianzas Estratégica',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective7,
        'product_id' =>$idobjectiveproduct29,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective8,
        'product_id' =>$idobjectiveproduct30,
        'name' => 'Restaurar y recuperar áreas afectadas por minería en estado de abandono en la cuenca del rio San Jorge en el departamento de Córdoba mediante el diseño técnico de adaptación de las condiciones geomorfológicas del área y su respectiva rehabilitación forestal ',
        'goal_1' => 0,
        'goal_2' => 25,
        'goal_3' => 30,
        'goal_4' => 100,
        'goal' => 155,
        'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective8,
        'product_id' =>$idobjectiveproduct31,
        'name' => 'Registro, control y seguimiento de las minas con licenciamiento plan de manejo en el departamento de Córdoba ',
        'goal_1' => 0,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 300,
        'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective8,
        'product_id' =>$idobjectiveproduct32,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct33,
        'name' => 'Revisar, cuantificar y actualizar los estudios y mapas de ruido de los Municipios del Departamento de Córdoba con una población superior (>) a cien mil (100.000) habitantes de acuerdo con lo establecido en la Resolución 627 de 2006',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct34,
        'name' => 'Desarrollar planes, programas y proyectos preventivos, correctivos o de seguimiento  al ruido ambiental y a la emisión de ruido, con base  a los planes de descontaminación de ruido de los municipios con una población superior (>) a cien mil (100.000) habitantes en el Departamento de Córdoba. ',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 2,
        'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct35,
        'name' => 'Optimización  del funcionamiento del Sistema de Vigilancia de Calidad de Aire - SVCA del Municipio de Montería, Departamento de Córdoba ',
        'goal_1' => 3,
        'goal_2' => 3,
        'goal_3' => 4,
        'goal_4' => 4,
        'goal' => 14,
        'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct36,
        'name' => 'Control, evaluación y seguimiento a los niveles de calidad del aire o de emisión e inmisión de olores ofensivos en el departamento de Córdoba ',
        'goal_1' => 0,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal' => 300,
        'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct37,
        'name' => 'Capacitación y fortalecimiento en la auditoría al proceso de medición de fuentes fijas, de medición de fuentes móviles, evaluación de olores ofensivos, mediciones de emisión de ruido y ruido ambiental',
        'goal_1' => 0,
        'goal_2' => 3,
        'goal_3' => 3,
        'goal_4' => 3,
        'goal' => 9,
        'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct38,
        'name' => 'Ajuste, implementación y seguimiento del Plan Departamental de Residuos Peligrosos RESPEL ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective9,
        'product_id' =>$idobjectiveproduct39,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct40,
        'name' => 'Apoyo técnico para la actualización de los planes maestros de acueducto y alcantarillado de las cabeceras municipales en el departamento de córdoba ',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct41,
        'name' => 'Apoyo a la adecuación, Construcción y Optimización, de las obras en el sector saneamiento ambiental en Municipios y Centros Poblados en el departamento de Córdoba ',
        'goal_1' => 1,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 2,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct42,
        'name' => 'Hacer seguimiento a Planes de Saneamiento y Manejo Vertimientos (PSMV) aprobados por CVS ',
        'goal_1' => 6,
        'goal_2' => 8,
        'goal_3' => 8,
        'goal_4' => 8,
        'goal' => 30,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct43,
        'name' => 'Hacer seguimiento anual a  Planes de Gestión Integral de Residuos Sólidos  (PGIRS) de municipios pertenecientes a la Jurisdicción de CVS ',
        'goal_1' => 6,
        'goal_2' => 8,
        'goal_3' => 8,
        'goal_4' => 8,
        'goal' => 30,
        'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective10,
        'product_id' =>$idobjectiveproduct44,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective11,
        'product_id' =>$idobjectiveproduct45,
        'name' => 'Formular un Plan de Ordenacion y Manejo Integrado de la Unidad Ambiental Costera - POMIUAC de la UAC estuarina del rio Sinú y el Golfo de Morrosquillo',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective11,
        'product_id' =>$idobjectiveproduct46,
        'name' => 'Realizar monitoreo continuos de calidad ambiental marino costera (Mantener la operación del REDCAM) a ecosistemas marino costeros del departamento de Córdoba',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective11,
        'product_id' =>$idobjectiveproduct47,
        'name' => 'Realizar monitoreo continuos de la erosión marino costera a la línea de costa del departamento de Córdoba',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective11,
        'product_id' =>$idobjectiveproduct48,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct49,
        'name' => 'Rehabilitación de suelos degradados mediante la Implementación de sistemas silvopastoriles  y agroforestales  en el departamento de Córdoba ',
        'goal_1' => 50,
        'goal_2' => 450,
        'goal_3' => 500,
        'goal_4' => 100,
        'goal' => 1100,
        'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct50,
        'name' => 'lniciar procesos de rehabilitación en áreas
      degradadas por la intervención antrópica en los municipios de Valencia y Tierralta en el departamento de Córdoba',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct51,
        'name' => 'lmplementar rehabilitación ecológica de las
      áreas ecosistémicas forestales degradadas por la
      ganadería extensiva en la cuenca del rio Canalete del departamento de Córdoba',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct52,
        'name' => 'Rehabilitación ecológica participativa en áreas de aptitud ambiental y forestal en la subcuenca las flores del municipio de Tierralta córdoba',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct53,
        'name' => 'Rehabilitación ecológica participativa con bioingeniería en rondas hídricas en la ciénaga de Ayapel del departamento de córdoba, caribe',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct54,
        'name' => 'Rehabilitacion de suelos degradados mediante la implementacion de plantaciones forestales protectoras en el Departamento de Cordoba ',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 0,
        'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective12,
        'product_id' =>$idobjectiveproduct55,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 0,
        'goal_4' => 0,
        'goal' => 2,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct56,
        'name' => 'Adelantar los procesos de  adopción de POMCAS en cuencas hidrográficas priorizadas en el departamento de Córdoba ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct57,
        'name' => 'Adelantar los procesos de formulación de Planes de Manejo de Microcuencas (PMM) en microcuencas hidrográficas priorizadas en el departamento de Córdoba',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct58,
        'name' => 'Adelantar los procesos para la formulación de Planes de Manejo de Acuíferos priorizados en el departamento de Córdoba. ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct59,
        'name' => 'Gestionar la formulación de Planes de Ordenamiento del Recurso Hídrico para corrientes hídricas priorizadas en el departamento de Córdoba',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct60,
        'name' => 'Ejecutar las acciones establecidas dentro de los POMCAS que se encuentren adoptados a la fecha ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective13,
        'product_id' =>$idobjectiveproduct61,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct62,
        'name' => 'Gestionar la reglamentación de corriente hídricas principales de cuencas priorizadas en el departamento de Córdoba ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct63,
        'name' => 'Realizar  monitoreo continuos de calidad de agua superficial y subterránea a corrientes hídricas priorizadas en el departamento de Córdoba ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct64,
        'name' => 'Actualizar continuamente el sistema de información para el manejo del Recurso Hídrico ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 13,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct65,
        'name' => 'Registro de usuarios de aguas superficiales y subterráneas en el sistema de información ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct66,
        'name' => 'Gobernanza con fundamento en la creación de cultura del agua ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct67,
        'name' => 'Realizar campañas comunitarias y sectoriales para el fortalecimiento de los programas de ahorro y uso eficiente del agua. No PUEAA',
        'goal_1' => 3,
        'goal_2' => 3,
        'goal_3' => 3,
        'goal_4' => 3,
        'goal' => 12,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct68,
        'name' => 'Realizar campañas comunitarias y sectoriales para el fortalecimiento de los programas de ahorro y uso eficiente del agua. No campañas',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 0,
        'goal' => 2,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct69,
        'name' => 'Construir pozos subterráneos para abastecer comunidades en zonas rurales priorizadas ',
        'goal_1' => 2,
        'goal_2' => 1,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective14,
        'product_id' =>$idobjectiveproduct70,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective15,
        'product_id' =>$idobjectiveproduct71,
        'name' => 'Diseñar y construir obras para el mejoramiento de la dinámica hidrológica y conectividad y la disminución del riesgo de inundaciones Implementación de plan piloto de recueración del humedal corralito',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct72,
        'name' => 'Crear y participar en la mesa de adaptacion al cambio climatico',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 3,
        'goal' => 6,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct73,
        'name' => 'Monitoreo de los ecosistemas estrategicos para la adaptacion al cambio climatico en el departamento',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 1,
        'goal' => 16,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct74,
        'name' => 'Implementación a nivel local de los lineamientos del plan departamental de adaptación al cambio climático.',
        'goal_1' => 3,
        'goal_2' => 7,
        'goal_3' => 10,
        'goal_4' => 11,
        'goal' => 31,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct75,
        'name' => 'Fortalecimiento de las capacidades para la institucionalidad comunitaria como medida de adaptación al cambio climático ',
        'goal_1' => 0,
        'goal_2' => 2,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 6,
        'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct76,
        'name' => 'Desarrollo de un proyecto piloto e implementar acciones replicables de adaptación en la zona de influencia de un humedal del departamento de Córdoba ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective16,
        'product_id' =>$idobjectiveproduct77,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective17,
        'product_id' =>$idobjectiveproduct78,
        'name' => 'Apoyo a la implementación estrategias sectoriales para la mitigación frente al cambio climático ',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 2,
        'goal_4' => 2,
        'goal' => 5,
        'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct79,
        'name' => 'Apoyo a los municipios en la inclusión del cambio climático y la gestión de riesgo en los instrumentos de planificación territorial.',
        'goal_1' => 2,
        'goal_2' => 8,
        'goal_3' => 12,
        'goal_4' => 10,
        'goal' => 32,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct80,
        'name' => 'Apoyo al conocimiento para la prevencion frente a los impactos de eventos y efectos climaticos',
        'goal_1' => 1,
        'goal_2' => 3,
        'goal_3' => 4,
        'goal_4' => 3,
        'goal' => 11,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct81,
        'name' => 'Apoyar la gestion para la reduccion de los riesgos climaticos en el departamento',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct82,
        'name' => 'Monitoreo de las amenazas hidroclimaticas dentro de la gestión del riesgo en el Departamento',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective18,
        'product_id' =>$idobjectiveproduct83,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct84,
        'name' => 'Apoyo al fortalecimiento de los Comités Interinstitucionales de Educación Ambiental, tanto departamental (CIDEA) como municipales (CIDEAM) priorizados por CVS ',
        'goal_1' => 3,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 4,
        'goal' => 15,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct85,
        'name' => 'Apoyo a la formulación y aprobación de la Política Departamental de Educación Ambiental para Córdoba ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct86,
        'name' => 'Apoyo a la implementación de la Política Departamental de Educación Ambiental para Córdoba ',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct87,
        'name' => 'Apoyo a la actualización y seguimiento a los planes de Educación Ambiental tanto departamental y Municipales priorizados por CVS ',
        'goal_1' => 3,
        'goal_2' => 4,
        'goal_3' => 4,
        'goal_4' => 4,
        'goal' => 15,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct88,
        'name' => 'Apoyo en la formulación e implementación de PRAE, PROCEDA Y PRAU ',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 5,
        'goal_4' => 5,
        'goal' => 20,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct89,
        'name' => 'Apoyo a la conformación de la RedPRAE y RedPROCEDA del departamento de Córdoba ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct90,
        'name' => 'Divulgación y comunicación para la vigilancia y control del tráfico ilegal de la biodiversidad en el departamento de Córdoba ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct91,
        'name' => 'Acompañamiento y seguimiento a  proyectos de Distritos Regionales de Manejo Integral (DRMI) del departamento de Córdoba',
        'goal_1' => 0,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 3,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct92,
        'name' => 'Apoyo a otras estrategias de la Política Nacional de Educación Ambiental del SINA ',
        'goal_1' => 0,
        'goal_2' => 2,
        'goal_3' => 3,
        'goal_4' => 3,
        'goal' => 8,
        'weighing' => 11,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective19,
        'product_id' =>$idobjectiveproduct93,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct94,
        'name' => 'Realizar control y seguimiento de proyectos con licencias, permisos o concesiones otorgadas, y vigilancias y control ',
        'goal_1' => 0.25,
        'goal_2' => 0.5,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 2.75,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct95,
        'name' => 'Otorgar permisos, autorizaciones, concesiones ambientales  dentro de los tiempos establecidos por Ley ',
        'goal_1' => 100,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 103,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct96,
        'name' => 'Atender quejas y contravenciones ambientales dentro de la jurisdicción de la Corporación',
        'goal_1' => 100,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 103,
        'weighing' => 25,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct97,
        'name' => 'Continuar con la implementación y socialización de la Ventanilla Integral de Trámites Ambientales en Línea ‐ VITAL ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective20,
        'product_id' =>$idobjectiveproduct98,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct99,
        'name' => 'Continuar con la Implementación de la estrategia de gobierno en línea ',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct100,
        'name' => 'Continuar con la implementación  del sistema de información ambiental de la CVS  ',
        'goal_1' => 1,
        'goal_2' => 0,
        'goal_3' => 0,
        'goal_4' => 1,
        'goal' => 2,
        'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective21,
        'product_id' =>$idobjectiveproduct101,
        'name' => 'Asignación presupuestal al proyecto',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective22,
        'product_id' =>$idobjectiveproduct102,
        'name' => 'Implementar estrategias para financiación de proyectos ambientales para el departamento de Córdoba',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('activities')->insert([
        'objective_id' => $idobjective23,
        'product_id' =>$idobjectiveproduct103,
        'name' => 'Gestionar la construcción, adecuación y mejoramiento de las instalaciones con las que cuenta la Corporación, para el ejercicio de su accionar misional',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal' => 4,
        'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 3,
						'description' => 'Este año la Corporación realizó la construccion de las Determinantes ambientales para procesos de Ordenamiento Territorial de los Municipios Buenavista, Montelibano y Puerto Libertador',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 1,
						'description' => '
					Este año se realizó  el análisis y evaluación de los corredores viales suburbanos Planeta rica – Pueblo Nuevo y Lorica – San Antero, a efectos de que los Municipios en mención puedan reglamentar adecuadamente los usos del suelo suburbanos, en virtud de la competencia en Ordenamiento Territorial de la Corporación',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 1,
						'description' => 'Este periodo la Corporación construyó Actualización de la guía con determinantes ambientales  para procesos de ordenamiento territorial municipal con fundamento en la estructura ecológica, aplicado a los municipios Montelíbano, Buenavista y Puerto Libertador en el departamento de Córdoba.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia3 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 1,
						'description' => 'Este año la Corporación inició la actualización del  Plan General de Ordenamiento Forestal para el Area de Jurisdiccion de la CVS ',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia5 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia6 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporacion inición la ejecución de proyectos  de Definición, caracterización y Especialización de la Estructura Ecológica Regional Territorial en el departamento de Córdoba y de  Implementación de un proyecto piloto de Adaptación en humedales del departamento de Córdoba.Purisima, mediante  la  continuidad al proceso de implementación de los protocolos de Restauración Ecológica y Agroecosistémica diseñados durante el 2014 y comenzados a implementar en el 2015 en el Municipio de Purísima y continuar con la investigación aplicada y el monitoreo del Modelo Piloto para la Adaptación, Uso, Restauración y Conservación del Humedal de la Ciénaga Grande del Bajo Sinú.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia7 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación ha desarrollado acciones de conservación en el marco de la implementación del Plan de Manejo del DRMI de la Bahía de Cispatá – La Balsa y Tinajones mediante estrategias científicas y tecnológicas de recuperación, manejo y uso sostenible de la oferta de bienes y servicios ambientales que prestan los ecosistemas y recursos naturales para contribuir al desarrollo económico y social de la población. ',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia8 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 1,
						'description' => 'Esteperiodo la Corporación ha desarrollado actividades del plan operativo de la mesa de trabajo del SIRAP Caribe, entre las que se destacan la conformación del Comité Directivo y formulación de propuesta de Manual para el diseño de planes estratégicos en corredores biológicos.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 1,
						'description' => 'Este año la Corporación inició la declaratoria de un área protegida, mediante la realización de  los estudios científicos para la delimitación y reglamentación del humedal ciénaga de Bentanci como un Área Protegida (AP), como parte del Sistema Departamental de Áreas Protegidas de Córdoba, y definir la categoría de manejo apropiada, de acuerdo a los atributos que posee el ecosistema que propicien la conservación y el uso sostenible de los recursos naturales',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 1,
						'description' => 'Este año la Corporación realizó la actualización del Plan de Manejo de los humedales del San Jorge (Arcial, Cintura y el Porro) y del Complejo Cenagoso de la Mojana, para el logro del mantenimiento de las características ecológicas y el uso racional de los bienes y servicios ambientales que presta el ecosistema como soporte del desarrollo local y regional.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 1,
						'description' => ' La Corporación Continua con la implementación del plan de manejo y estrategias científicas de conservación del  manatí antillano (Trichechus manatus), como especie centinela  en los humedales; y, verificación de distribución de la nutria (Lontra longicaudis)  de la Cuenca baja del río Sinú en el departamento de Córdoba.  Tambien implementa  estrategias de conservación concebidas en el Plan de Manejo y Conservación de la Tortuga de Rio (Podocnemis lewyana) e Hicotea (Trachemys callisrostris).',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia13 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 1,
						'description' => 'Este año la Corporación elaboró estudio con felinos, con el cual se buscó Fortalecer científicamente los actores institucionales y sociales relacionados con los conflictos humanos -felinos para el manejo, la prevención y la atención de eventos depredatorios por parte de estos animales en el departamento de Córdoba, como medida para la recuperación de estas especies, además se desarrolló un protocolo de reporte y seguimiento a los eventos de depredación para ser incorporado en el Sistema de Peticiones, Quejas y Reclamos de la página web de la corporación, con la respectiva socialización de la herramienta.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia14 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia15 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación  ha venido ejecutando acciones para la reducción de emisiones por deforestación y degradación tales como: socializaciones de la cartilla REDD con asociaciones de mangleros  que hacen uso sostenible del ecosistema de manglar de los municipios de San Antero y San Bernardo del Viento,  Entrega de herramientas a Asociaciones de mangleros , 
					 Acompañamiento a las comunidades en programas de limpieza y recuperación de caños, en aras de fortalecer el componente forestal en la zona y  Capacitación y fortalecimiento a las comunidades en temáticas ambientales.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia16 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 1729,
						'description' => 'La Corporación ha iniciado el mantenimiento de plantaciones forestales en la cuenca alta de los ríos Sinú y San Jorge en el departamento de Córdoba correspondiente a 2.821 hectáreas. Hasta la fecha se  han intervenido más del 60%.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia18 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia19 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>1,
						'value' => 8232950,
						'description' => 'La Corporación implemento metodologías y técnicas para la reproducción artificial e inducida de peces nativos que permitan asegurar la producción de alevinos de peces nativos (Bocachico y Cachama) para apoyar programas de repoblamiento en cuerpos de agua naturales y la piscicultura comunitaria, con el propósito de mantener la productividad y diversidad biológica de los ecosistemas acuáticos, para garantizar el uso sostenible de los recursos hidrobiológicos en el departamento de Córdoba. Este año la CVS implementó metodologías y técnicas para la reproducción artificial e inducida de peces nativos que permitan asegurar la producción de 7.500.000  de alevinos de peces nativos. La producción total en el tema piscícola para el año 2016 fue de 8.232.950, de los cuales 7.958.950 corresponden a la especie de Bocachico y 274.00 a Cachama. ',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia20 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación inició el fortalecimiento en técnicas sostenibles para el manejo artesanal, mediante la guía de artesanías en cepa de plátano y artesanías de lata de corozo y accesorios propios de la etnia zenu.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 10,
						'description' => 'La Corporación continua con la instalacion de la mesa nacional de produccion y Consumo Sostenible en otras 10 empresas',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 5,
						'description' => 'La Corporación ha realizado acompañamiento a 5 empresas en la reconversión de los sistemas de consumo sostenibles Producción y Consumo Sostenibles',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia23 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>1,
						'value' => 1,
						'description' => 'Se inicio el acompañamiento a la elaboracion de 1 ecoproducto, con la implementacion de proyecto sostenible, con la Panela, producto que en el departamento de Córdoba se presenta de una forma artesanal, especialmente en zonas rurales de los municipios de Sahagún y Ciénaga de Oro. ',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia24 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 10,
						'description' => 'Se inicio el fortalecimiento de 10 empresas en negocios verdes en sectores productivos del departamento, mediante Fortalecimiento metodológico programa LIDERAM , aval de confianza a 7 emrpresas , el  ecodirectorio, la participación en diferentes eventos como la feria de negocios verdes y la feria de la ganadería.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia25 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia29 = DB::getPdo()->lastInsertId(); 





					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 3,
						'description' => 'La corporación ha mantenido este año la operación y actividades de monitoreo de material partículado PM10 en las estaciones localizadas en la Universidad Pontificia Bolivariana -UPB, terminal de transporte y Universidad del Sinú.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia35 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación realizó  actualizacion del plan departamental de residuos sólidos de Córdoba, con el fin de identificar las empresas y/o usuarios generadores de pequeña s, medianas o grandes cantidades de estos, que puedan incidir en impactos al ambiente.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia38 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia39 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>1,
						'value' => 0.9,
						'description' => 'La Corporación continúa trabajando en la expansión y optimización de los colectores de aguas residuales en el casco urbano del municipio de Lorica, con esto se busca conducir las aguas residuales hasta un colector principal, el cual las llevará a una estación depuradora, lo cual traerá como beneficio disminuir el grado de contaminación causado por las aguas residuales, se evita el derrame de estas hacia las calles, los malos olores y se contrarrestarán los efectos nocivos en la salud de los habitantes.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia41 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 30,
						'description' => 'La Corporación en este año ha realizado 23 Visitas a municipios con Planes  de Saneamiento y Manejo Vertimientos (PSMV)  aprobados y de igual forma se realizó acompañamiento a los 30 municipios.|',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia42 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 30,
						'description' => 'La Corporación en este año ha realizado acciones de seguimiento, vigilancia y control a los Planes de Gestión Integral de Residuos Sólidos – PGIRS, en lo referente a puntos críticos de inadecuada disposición de residuos sólidos urbanos municipales y al cumplimiento de los planes de restauración, recuperación, compensación y abandono del sitio donde operaba el antiguo botadero a cielo abierto de residuos sólidos urbanos (basura ) municipales a los  treinta (30) municipios del departamento de Córdoba.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia44 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación en este año realizó la formulación del Plan de Ordenamiento y Manejo Integrado de la Unidad Ambiental Costera- POMIUAC Estuarina del rio Sinú y el Golfo de Morrosquillo.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia45 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación realizo monitoreos de la calidad de las aguas marino-costeras del departamento de Córdoba, mediante la operación del nodo CVS de la “Red de Vigilancia para la Conservación y Protección de las Aguas Marinas y Costeras de Colombia – REDCAM” y ha venido adelantando capacitaciones a técnicos de la Corporación en diferentes temáticas relacionadas con el monitoreo del recurso hídrico, técnicas analíticas, interpretación de resultados, y acreditación de laboratorios de ensayo y manejo de información, entre otros.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia46 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>1,
						'value' => 1,
						'description' => 'En este periodo la Corporación contunuó  con los Monitoreos de perfiles de playas llevados a cabo en 2013 y 2014. Adicionalmente, la evaluación del riesgo ecológico y ambiental en los diferentes ecosistemas marinos y costeros del departamento de Córdoba, los cuales son elementos fundamentales de mitigación de la vulnerabilidad de las comunidades costeras',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia47 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia48 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 50,
						'description' => 'La Corporación en este año ha implementado acciones para la Rehabilitación de suelos degradados mediante la Implementación de sistemas silvopastoriles  y agroforestales , en lo municipios de Ciénaga de Oro, Canalete, Canalete, Montería, Sahagún, San Pelayo y Puerto Escondido, donde 40 hectáreas de pequeños productores que recibieron beneficios de entrega de insumos como pastos, material para aislamiento, y plántulas maderables y/o forrajeras con sistemas silvopastoril  y 60 hectáreas por asesoría con la entrega de material vegetal de árboles forrajeros y maderables.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia49 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia50 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>1,
						'value' => 100,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia51 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporacion inició la Formulación del Plan de Ordenación y Manejo de la Cuenca Hidrográfica del Río Bajo San Jorge, con lo cual busca establecer una zonificación ambiental del territorio que permita la conservación, el uso y el manejo sostenible de los recursos naturales que se encuentran en esta cuenta del Bajo San Jorge',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia56 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 100,
						'description' => 'Se trabajo en la actualizar el Plan de Manejo de los humedales del San Jorge (Arcial, Cintura y el Porro) y del Complejo Cenagoso de la Mojana, para el logro del mantenimiento de las características ecológicas y el uso racional de los bienes y servicios ambientales que presta el ecosistema como soporte del desarrollo local y regional.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia58 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 1,
						'description' => 'Se han ejecutado acciones establecidas en el POMCA del Rio Sinú: en los programas de  manejo y uso sostenible del suelo, la cobertura vegetal y conservación de la biodiversidad.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia61 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 1,
						'description' => 'Se iniciaron las gestiones para la reglamentacion del arroyo carolina',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación Aútonoma Regional de los Valles del Sinú y del San Jorge se encuentra realizó 2 jornadas de monitoreo de agua superficial, subterránea y sedimentos a corrientes hídricas priorizadas en el departamento de Córdoba, con el fin de evaluar la calidad de las mismas',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia63 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 1,
						'description' => 'Durante el primer semestre del 2016  la Corporación mantuvo actializado el subsistema SIRH, para lo cual cargó 147 registros de fuentes hídricas en el sistema con datos de Oferta, Demanda, Calidad, Riesgo y Gestión del Recurso Hídrico.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia64 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 1,
						'description' => 'A través del equipo de profesionales de la Corporación Autónoma Regional de los Valles del Sinú y del San Jorge, se realiza el registro de usuarios del recurso hídrico en el departamento de Córdoba. La base de datos es actualizada constantemente y utilizada como herramienta de gestión del recurso hídrico en el departamento.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación inició la construcción de dos pozos subterráneos para abastecer comunidades rurales priorizadas de las comunidades étnicas.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia66 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>1,
						'value' => 3,
						'description' => 'Con el fin de dar cumplimiento al plan de trabajo diseñado para el desarrollo de las actividades concernientes al fortalecimiento de la gobernanza en la cultura del agua, la Corporación desarrolló actividades de divulgación y socialización de los avances y actualizaciones en lo referente al recurso hídrico. Esto incluye lo concerniente a normatividad actualizada y la implementación de estrategias de ahorro y uso eficiente de agua. Se diseñó e implementó la campaña “AHORRA Y USA EFICIENTEMENTE EL AGUA”, la cual contiene consejos para cuidar el agua, a partir de cambios pequeños pero cotidianos en nuestros hábitos, con la cual se realizó material divulgativo y didáctico, el cual fue distribuido en los talleres y encuentros realizados, además de campañas en distintas parte de la ciudad.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia67 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación a través de los profesionales de recurso hídrico, lideró en este 2016  tres campañas enfocadas a la sensibilización en ahorro y uso eficiente del agua en el departamento. Las cuales fueron desarrollados en instituciones educativas.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia69 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia70 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación realizó la rehabilitación del paleocauce caimanera como canal de excedentes (tramo b) en el municipio de monteria, se intervinieron 2700 ml de caño con actividades de adecuación de la sección hidráulica del canal en tierra (incluye excavación de material común y rectificación de taludes) y conformación de dique a máquina con material del sitio.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación en este año creó la mesa de adaptación al cambio climático, integrado por: Universidad de Córdoba, Cerro Matoso, CORPOICA, CVS, Gobernación de Córdoba – Consejo departamental de Gestión del Riesgo, Aguas de Córdoba, ASPROSIG, URRA S.A. E.S.P, Parque Nacional Natural del Paramillo, Fondo de Adaptación, IDEAM, PNUD, UPB, GANACOR, Ministerio de Ambiente y Desarrollo Sostenible – MADS – Cambio climático y Pastoral Social.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 6,
						'description' => 'Para el monitoreo de los ecosistemas seleccionados se programaron y realizaron seis (6) salidas o campañas de campo en donde se monitoreó el estado actual de los diferentes ecosistemas priorizados mediante la toma de videos y fotografías aéreas de ultra alta definición a partir de sobrevuelos previamente programados con drone de última generación.  En los municipios de San  Bernardo, Cereté, Lorica, Momíl y Purísima.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 4,
						'description' => 'La Corporación realizó socialización de los resultados del plan y sus líneas estratégicas, posteriormente se trazó cronograma de trabajo, a fin de brindar capacitaciones a los municipios de San Pelayo, purísima, Momíl y Puerto escondido',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia74 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación inició el  Fortalecimiento de la gestión participativa y cultural de los municipios de Purísima y Momíl que puedan favorecer la construcción del Modelo en el área Piloto',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia77 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia78 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>1,
						'value' => 8,
						'description' => 'La Corporación ha apoyado a los municipios de Planeta rica, Buenavista, Montelibano, La Apartada, Ciénaga de Oro, San Carlos, Cereté y Puerto Escondido, en la inclusión del cambio climático y la gestión de riesgo en los instrumentos de planificación territorial.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia79 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>1,
						'value' => 3,
						'description' => 'La Corporación ha seleccionado han seleccionados tres (3) municipios para capacitarlos en la Implementación a nivel local de los lineamientos del plan departamental de adaptación al cambio. Se seleccionó un municipio por cada cuenca: Moñitos, Cotorra y Buena Vista.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>1,
						'value' => 1,
						'description' => 'Se realizaron estudios para mejorar el conocimiento del riesgo en la jurisdicción de la CVS, se apoyó el proceso de conocimiento y educación para el manejo de emergencias en los 30 municipios de la jurisdicción, así como se apoyaron los comités regionales y locales de respuesta a emergencias.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación Inició la realizarción estudios para mejorar el conocimiento del riesgo en su jurisdicción. Tambien  ha continuado con el monitoreo de la gestión del riesgo en jurisdicción de la Corporación en diferentes temáticas:  Apoyo técnico a la revisión y ajustes de planes de contingencias y emergencias ante fenómenos de variabilidad climática,  Participación en Consejos Municipales de Gestión del Riesgo, y  Diariamente se realizan reportes del estado hidrometeorológico del departamento de Córdoba y análisis de información sobre niveles y caudales de los principales ríos del departamento, pronósticos y alertas ',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>1,
						'value' => 6,
						'description' => 'La Corporación ha realizado poyo al fortalecimiento de los Comités Interinstitucionales de Educación AmbientaTuchin, Tierralta, Valencia,  San Andres de Sotavento, Lorica y San Antero.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación elaboro documento de Politica Pública: Educación y cultura ambiental para el desarrollo humano sostenible con equidad en Córdoba, que contien lineamientos para una politica publica de educacion departamental en el departamento.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia85 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>1,
						'value' => 3,
						'description' => 'La Corporación  realizó seguimiento al  Plan departamental de educación ambiental de Córdoba, Tierralta y San Carlos, ',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>1,
						'value' => 10,
						'description' => 'La Corporación apoyó en la formulación e implementación de PRAE:  a las instituciones educativas Palmira de Tierralta; Institucion educativa de San José de Uré; e Institución Educativa Caño Viejo, Palotal en Monteria. ',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>1,
						'value' => 3,
						'description' => 'La Corporación realizó apoyo a la conformación de la RedePRAE y RedPROCEDA Con las Sigientes instituciones: Institucion educativa Palmira de Tierralta; Institucion educativa de San José de Uré; e Institución Educativa Caño Viejo, Palotal en Monteria. Se le hizo el proceso de investigacion sistematizacion para articularla en la RedePrae de Córdoba',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación realizó divulgación y comunicación para la vigilancia y control del tráfico ilegal de la biodiversidad en el departamento de Córdoba, mediante el apoyo del CAV, implementación de  retenes pedagógicos, volantes etc.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia90 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación realizo seguimiento y control  de las licencias, permisos y concesiones otorgadas, en el ejercicio de su autoridad ambiental en el territorio que abarca el departamento de Córdoba.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>1,
						'value' => 100,
						'description' => 'La Corporación en este periodo ha venido dando cumplimiento a sus obligaciones en lo referente a los trámites de los diferentes procesos de permisos, autorizaciones y concesiones ambientales  dentro de los tiempos establecidos por Ley',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>1,
						'value' => 100,
						'description' => 'La Corporación ha recibido 45 quejas ambientales, de las cuales el 100%  han sido atendidas.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación continúa con la implementación de la Ventanilla Integral de Trámites Ambientales en Línea, mediante la implementación del Plan de Accióon de vital, en este sentido se realizó jornada de socialización con el personal vinculado al manejo de la plataforma y atencion de usuarios de la ventanilla, con el fin de definir los lineamientos para implementar de manera efectiva la ventanilla, además realizó jornada de socialización con entidades del departamento y funcionarios. Tambien se actualizó el registro minero y Registro unico de infractores ambientales dentro del aplicativo Vital.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación continua con la implementación  del sistema de información ambiental mediante el mantenimiento de los subsistemas RESPEL, RUA, SIRH, SISAIRE Y SNIF, alcanzando la actualizacipon del 100% para el año 2016.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity100,
						'year' =>1,
						'value' => 1,
						'description' => 'En cumplimiento de las directrices del programa Gobierno en Línea – GEL, el Ministerio de Tecnologías de la Información y las Comunicaciones MINTIC la Corporación Autónoma Regional de los Valles del Sinú y del San Jorge – CVS continua trabajando en la implementación de esta estrategia. Ebn este periodo  la Corporación trabajó en el componente TICS para el Gobierno Abierto mediante el análisis de grupos de registros de datos que corresponden al resultado de la gestión de la Corporación que luego serán analizados técnica y jurídicamente para determinar si son datos publicables en el portal de datos abiertos del estado colombiano, de igual manera, centrando la atención en el ciudadano,  y apuntando a la transparencia y el gobierno abierto,tambien se elaboró el plan de participación ciudadana en el cual se establecerán las pautas o parámetros para el uso y apropiación de los diferentes canales o medios de interacción electrónica.
					',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>1,
						'value' => 1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación realizó este año la implementación de una estrategia para el fortalecimiento de la gestión financiera, para lo cual  se iniciaron los servicios especializados de apoyo logístico para trasladar al personal de la Corporación Autónoma Regional de los Valles del Sinú y del San Jorge - CVS a los diferentes municipios del Departamento de Córdoba para realizar visitas de campo para fortalecer el ejercicio de la autoridad ambiental y la gestión financiera.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>1,
						'value' => 1,
						'description' => 'La Corporación en este año realizó la  adecuación y mejoramiento de las
					instalaciones con las que cuenta la Corporación.',
						'date_report' => '2016-12-31',
						'rezago' => false,
						]);
						$idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 6,
						'description' => 'Revision y ajuste de POT ,  La Apartada , Puerto Escondido, Pubelo Nuevo, Planeta Rica y Montelibano',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 1,
						'description' => 'Se realizo Corredores Viales Monteria - KM15 -Tierralta 
					Monteria  - Canalete ',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 1,
						'description' => 'Este periodo la Corporación inició la Construicción de  las determinantes ambientales para procesos de ordenamiento territorial municipal con fundamento en la estructura ecológica, aplicado a los municipios de Montería y San Carlos, en el departamento de Córdoba.

					',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia107 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 1,
						'description' => '

					',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia109 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 1,
						'description' => 'Estudios técnicos y tecnológicos para Iniciar la implementación de acciones de divulgación, educación ambiental y restauración del DCS - Distrito de Conservación de Suelos de los recursos naturales de la ciénaga de Corralito como parte del Sistema Departamental de Áreas Protegidas de Córdoba.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación continua con la  implementación del Plan de Manejo del DRMI de la Bahía de Cispatá – La Balsa y Tinajones mediante la formulación y ejecución de estrategias científicas orientadas a mitigar efectos o riesgos en zonas críticas del DMI de la Bahía de Cispatá - La Balsa y Tinajones, para favorecer la regeneración natural y garantizar la sostenibilidad de la estructura ecológica, la biodiversidad y el desarrollo económico y social de la población.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 1,
						'description' => 'La Car CVS en este semestre dió continuidad a las actividades desarrolladas y ejecutadas de la mesa de trabajo del Sistema Regional de Áreas Protegidas del Caribe Colombiano - SIRAP y trabaja enaras de  impulsar el fortalecimiento del SIDAP del departamento durante la presente vigencia.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 1,
						'description' => 'Proceso de elaboración del Plan de Manejo del humedal Pantano Pareja y propuesta de la declaratoria, para el logro del mantenimiento de las características ecológicas y el uso racional de los bienes y servicios ambientales que presta el ecosistema como soporte del desarrollo local y regional.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 0.4,
						'description' => 'La Corporación realizará el componente de consulta previa con comunidad Zenú del complejo de humedales Arcial –Porro – Cintura para el establecimiento de un área protegida y su plan de manejo.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 1,
						'description' => ' La Corporaciónimplementa estrategias científicas, operativas y tecnológicas establecidas en el Plan de Manejo y Conservación de la Tortuga de Río (Podocnemis lewyana) e Hicotea (Trachemys callirostris) a fin de ejecutar medidas de recuperación de estas poblaciones y sus hábitats).',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación se encuentra  Implementando el Plan de Manejo Manatí antillano (Trichechus manatus) y Chavarrí (Chauna chavaria) , realiza Diagnóstico y monitoreo de especies focales Pisingo (Dendrocygma autumnalis) y Pato Colorado (Anas cyanoptera) , implementa el Plan Chavarri (Chauna chavaria),  y en materia de Especies focales:  Pisingo (Dendrocygma autumnalis) y Pato Colorado (Anas cyanoptera) .',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación veine desarrollando alternativas de reconversión y adaptación tecnológica mediante la implementación de Sistemas Silvopastoriles en predios ganaderos del departamento de Córdoba.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia119 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 5198,
						'description' => 'La Corporación ha iniciado el mantenimiento de plantaciones forestales en la cuenca alta de los ríos Sinú y San Jorge en el departamento de Córdoba en los municipios de: canalete, Puerto escondido, Los Cordobas, Tierralta,.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 5000000,
						'description' => 'La Corporación continua con los programas de reproducción artificial e inducida de peces nativos a través de la implementación de métodos científicos y tecnológicos que permitan asegurar la producción de 8.000.000  de alevinos y postlarvas de peces,  a fin de fortalecer los proyectos piscícolas comunitarios y realzar actividades de repoblamiento en el departamento de Córdoba, para garantizar el uso sostenible de los recursos hidrobiológicos. 

					Total de produccion 6.505.600 correspondiente a 4.500.000 de Postlarvas y 1.418.300 alevinos para repoblamiento, 587.300  fomento.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 1,
						'description' => 'La  Corporación realiza en la actualidad seguimiento de 1 guia de artesanias de Totumo  y seguimiento de la implementación de dos guias: Enea y cepa de platano.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia124 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 10,
						'description' => 'La Car CVS  realiza compañamiento  a  10 empresas  en la reconversión hacia sistemas productivos sostenibles PyCS del departamento de Córdoba: Colanta- Planta Pulverizadora y comercializadora, Cesar Vasquez- Café Córdoba, FrigoSinú, Bioresiduos y Red Carnica, Productos Costazul, Asociación Agroplante, Artesanias Artesanos de Polonia, Asociación Asoplatas, y Ecomiel.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia126 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación realizará  fortalecimiento de ecoproducto : Panela. ',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 10,
						'description' => 'La Corporación inició el seguimiento y fortalecimiento a  diez  (10) empresas en negocios verdes en los sectores productivos: Falbecsa, Activa G10, Orgénicos de la Costa, Cocotech, Artesanias Nueva Visión, Afapul, Asopiscar, Aprofrumo, Integra Sinú y Aceluz.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación iinició la formulación de dos negocios verdes a las asociaciones Deliplat y Ecopanela',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia129 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 19.5,
						'description' => 'Areas priorizadas en ayapel para la restauración',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 90,
						'description' => 'La Corporación ha dado  Tramite a las  Solicitudes de Licencias Ambientales y Planes de Manejo Ambiental para proyectos Mineros en el departamento de Córdoba.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 1,
						'description' => 'Se realizó cotizacion con empresas acreditadas por ideam para realizar monitoreos de ruido ambiental ',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia136 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 3,
						'description' => 'La corporación ha mantenido este año la operación y actividades de monitoreo de material partículado PM10 en las estaciones localizadas en la Universidad Pontificia Bolivariana -UPB, terminal de transporte y Universidad del Sinú.. MANTENIMIENTO',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 100,
						'description' => 'ACTIVIDADES DE SEGUIMIENTO Y CONTROL A PERMISOS, QUEJAS ETC',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 3,
						'description' => 'Fortalecimiento en estas tematicas para el fortalecimiento y control (Diplomado Universidad Nacional)',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación inició la actualizacion del plan departamental de residuos sólidos de Córdoba, con el fin de identificar las empresas y/o usuarios generadores de pequeña s, medianas o grandes cantidades de estos, que puedan incidir en impactos al ambiente.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 0.9,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia143 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 18,
						'description' => 'La Corporación en este año ha realizado Visitas a municipios con Planes  de Saneamiento y Manejo Vertimientos (PSMV)  aprobados y de igual forma se realizó acompañamiento a 18 municipios.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 20,
						'description' => 'La Corporación en este año ha realizado acciones de seguimiento, vigilancia y control a los Planes de Gestión Integral de Residuos Sólidos – PGIRS,mediante la  aprobadoción  y/o seguimiento a la implementados en  antiguos botaderos a cielo abierto abandonos y clausurados de los municipios Montería, Lorica, Moñitos, Montelíbano, San Bernardo del Viento, San Antero, Buenavista, San Pelayo, Puerto Libertador, San Andrés de Sotavento, Sahagún, Momil y  Puerto Escondido; Además se realizó seguimiento a antiguos botaderos, cerrados pero no restaurados ambientalmente y/o puntos críticos o clandestinos de inadecuada disposición de residuos sólidos en los municipios:Ciénaga de Oro
					San Carlos, Tierralta, Valencia, Purísima, Lorica, San Antero, Sahagún, Momil, Puerto Escondido, San Bernardo del Viento, Los Córdobas, Chinú Y Tuchín.
					',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>2,
						'value' => 0.5,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 1,
						'description' => 'Se realizaron 2 monitoreos por parte de Invemar en la zona Costera y estuarina del departamento de Cordoba',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 1,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 450,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia152 = DB::getPdo()->lastInsertId(); 





					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación, a través de su participación en la comisión conjunta realiza seguimiento a la formulación del Plan de Ordenamiento y Manejo de la Cuenca  Hidrográfica del Rio Bajo San Jorge, la cual se realiza actualmente por medio de un convenio entre CORPOMOJANA y Fondo de Adaptación.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación  inició  un proceso de formulación de un Plan de Manejo de Microcuencas (PMM) en una microcuencas hidrográficas priorizadas en el departamento de Córdoba. (2 san Andres de Sotavento) (Microcuenca Priorizada San Jose de Uré y Acuifero el Cerrito)',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación  inició  un proceso de formulación de un Plan de Manejo de Microcuencas (PMM) en una microcuencas hidrográficas priorizadas en el departamento de Córdoba. (2 san Andres de Sotavento) (Microcuenca Priorizada San Jose de Uré y Acuifero el Cerrito)',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 1,
						'description' => ' formulación del Plan de Ordenamiento del Recurso Hídrico para el municipio de Canalete en el departamento de Córdoba.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 1,
						'description' => 'Se han ejecutado acciones establecidas en el POMCA del Rio Sinú: en los programas de  manejo y uso sostenible del suelo, la cobertura vegetal y conservación de la biodiversidad.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 0.95,
						'description' => 'La Corporación gestionará la formulación del Plan de Ordenamiento del Recurso Hídrico para el municipio de Canalete en el departamento de Córdoba.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 1,
						'description' => 'La corpotación se encuentra realizando el monitoreo de agua superficial y subterránea a corrientes hídricas priorizadas en el departamento de Córdoba, con el fin de evaluar la calidad de las mismas.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 1,
						'description' => 'A través del equipo de profesionales de la Corporación, se realiza el registro de usuarios del recurso hídrico en el departamento de Córdoba. ',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 1,
						'description' => 'La base de datos es actualizada constantemente y utilizada como herramienta de gestión del recurso hídrico en el departamento, registrando un total de 178 usuarios del recurso hidrico',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 1,
						'description' => 'la Corporación se encuentra desarrollando actividades que permiten la divulgación y
					socialización de los avances y actualizaciones en lo referente al recurso hídrico. Esto incluye lo concerniente a normatividad actualizada y la implementación de estrategias de ahorro y uso eficiente de agua, mediante el uso de la de las redes sociales de CVS como son Facebook, Twitter, página institucional e Instagram.
					',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 3,
						'description' => 'La Corporación realiza campañas comunitarias y sectoriales para el fortalecimiento de los programas de ahorro y uso eficiente del agua.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 2,
						'description' => 'La Corporación realizó 2campañas de ahorro y uso eficiente del agua: TALLER DE AHORRO Y USO EFICIENTE DEL AGUA y PRIMER SEMINARIO DE HERRAMIENTAS JURÍDICAS Y TÉCNICAS PARA LA PROTECCIÓN ANIMAL EN COLOMBIA Y GESTIÓN AMBIENTAL ',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 2,
						'description' => 'La Corporación se encuentra realizando la construcción de dos pozos subterraneos en el municipio de San Andres de Sotavento',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación inició la conformación de la mesa departamental de cambio climático trimestralmente .',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 5,
						'description' => 'La Corporación inició la gestión para el monitoreo de 5 ecosistemas estrategicos para la adaptacion al cambio climatico en el departamento de cordoba.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 7,
						'description' => 'La Corporación inició la gestión para  capacitar a diferentes municipios  en la Implementación a nivel local de los lineamientos del plan departamental de adaptación al cambio climático.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 2,
						'description' => 'La Corporación participó fortaleciendo su capital humano mediante diplomado de cambio climático y adaptación basadaas en ecosistemas ABE.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 1,
						'description' => 'Desarrollo de un proyecto piloto e implementar acciones repicables de adaptaciòn en  la zona de influencia de un humedal del departamento de Còrdoda - Purísima',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 0.9,
						'description' => 'La Corporación inició la gestión para apoyar a 1 sector economico  del departamento de cordoba asistido por la CAR CVS para la mitigación frente al cambio climático . ',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 8,
						'description' => 'La Corporación ha apoyado a los municipiosen la inclusión del cambio climático y la gestión de riesgo en los instrumentos de planificación territorial. (TUCHIN, Chinú, Cienaga de Oro y Sahagun)',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 3,
						'description' => 'La Corporación ha seleccionado han seleccionados tres (3) municipios para capacitarlos en la Implementación a nivel local de los lineamientos del plan departamental de adaptación al cambio.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación realiza estudios para mejorar el conocimiento del riesgo en la jurisdicción de la CVS, se apoyó el proceso de conocimiento y educación para el manejo de emergencias en  municipios de la jurisdicción, así como se apoyaron los comités regionales y locales de respuesta a emergencias. (Corregimiento POPAYAN - Canalete) Imp SAT',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>2,
						'value' => 1,
						'description' => 'Se han realizado los informes hidrometeorologicos diarios con base en informacion del IDEAM, el grupo SIEC y el grupo SAT el Toro, tierralta',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>2,
						'value' => 4,
						'description' => 'La Corporación ha INICIADO el fortalecimiento de los actores de la RED CIDEA del departamento de Córdoba, a través del acompañamiento técnico a los Comités Técnicos Interinstitucionales de Educación Ambiental, CIDEAM, de los municipios de Montería, Tierralta, San Antero y Montelíbano. ',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>2,
						'value' => 1,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>2,
						'value' => 1,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>2,
						'value' => 4,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>2,
						'value' => 5,
						'description' => 'La Corporación ha venido apoyando 4  Proyectos Educativos Escolares - PRAE y  4 Proyectos Ciudadanos de Educación Ambiental  PROCEDA.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>2,
						'value' => 1,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>2,
						'value' => 1,
						'description' => '-',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>2,
						'value' => 0.8,
						'description' => 'La Corporación realizará  Plan de Manejo del DRMI - del Complejo Humedales de Ayapel, a través de la educación y participación comunitaria, haciendo énfasis en  la protección de los diversos bienes y servicios ambientales que presta esta Área Natural Protegida en  general y con una especie “centinela “ como lo es el manatí (Trichechus manatus).',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>2,
						'value' => 2,
						'description' => 'La Corporación ha venido apoyando 4  Proyectos Educativos Escolares - PRAE y  4 Proyectos Ciudadanos de Educación Ambiental  PROCEDA.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>2,
						'value' => 0.75,
						'description' => 'La Corporación realiza seguimiento y control  de las licencias, permisos y concesiones otorgadas, en el ejercicio de su autoridad ambiental en el territorio que abarca el departamento de Córdoba.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia197 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>2,
						'value' => 0.82,
						'description' => 'La Corporación en este periodo ha venido dando cumplimiento a sus obligaciones en lo referente a los trámites de los diferentes procesos de permisos, autorizaciones y concesiones ambientales  dentro de los tiempos establecidos por Ley',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>2,
						'value' => 0.82,
						'description' => 'La Corporación ha recibido 57 quejas ambientales, de las cuales el 74%  han sido atendidas.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>2,
						'value' => 1,
						'description' => 'La Corporación continúa con la implementación de la Ventanilla Integral de Trámites Ambientales en Línea, mediante la implementación del Plan de Accióon de vital, en este sentido se inició la planificación de la jornada de socialización con entidades del departamento y funcionarios.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>2,
						'value' => 1,
						'description' => 'No presenta meta para la vigencia.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia202 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>2,
						'value' => 1,
						'description' => 'Con esta actividad la Corporación busca reglamentar el uso integral del recurso hidrico e el área de su  jurisdicción co el fin de gestionar la capacidad de recaudo por el uso y captación del recurso hidrico.',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>2,
						'value' => 0.7,
						'description' => 'La Corporación inició la gestión pára el  mejoranmiento y adecuación de la infraestructura de la sede con el fin de cuplir su deber misional',
						'date_report' => '2017-12-31',
						'rezago' => false,
						]);
						$idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 3,
						'description' => 'POT de Nueva Generacion Lorica y Sahagun, (POT )Montelibano  + Cienaga de Oro',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 1,
						'description' => 'Análisis y evaluaciónlos de los coredores viales sub-urbanos la Apartada – Montelibano y Montelibano – Puerto Libertador',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 1,
						'description' => 'Determinantes del Sur de Cordoba - PDET',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 1,
						'description' => 'Se han relizado visitas de campo en todo lo relacionado con Restitucion de tierras, Agencia Nacional de Tierra, Agencia Nacional de Desarrollo Rural  - ADR, Agencia de Renoivacion del Territorio- ART (5 Municipios)',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia210 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 1,
						'description' => 'Implementación Plan de Manejo  del DCCS de los recursos naturales de la Ciénaga de Corralito mediante acciones de educación, restauración y recuperación',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 1,
						'description' => 'Acciones de conservación en el marco de la implementación del Plan de Manejo del DRMI de la Bahía de Cispatá – La Balsa y Tinajones mediante la ejecución y fortalecimiento de acciones científicas de conservación que garanticen la sostenibilidad de la estructura ecológica y de la biodiversidad del DRMI.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 1,
						'description' => 'Se suscribio acuerdo Específico Subregional Nº 032 de 2018, suscrito entre la CVS, y CARSUCRE, cuyo objeto es “La cooperación técnica para desarrollar las actividades del plan operativo de la mesa de trabajo del SIRAP Caribe para el año 2018-2019”',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 1,
						'description' => 'Se declaro bajo la figura de Distriro de Conservación de Suelo la  Ciénaga Los Negros ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 1,
						'description' => 'Elaboración del plan de manejo del cerro Colosiná  y cienaga las Marias el cual incluye programa de monitoreo - Cierra Chiquita con recursos externos',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 1,
						'description' => 'Se implemetaron Planes de Manejo ( Manati, Tortuga de rio, hicotea)
					Estrategias de Conservación (Chiguiro, Barraquete, Felinos)',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 2,
						'description' => 'Se trabajo con las especies Chiguiro y Barraquete',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 1011,
						'description' => ' 45 Ha en Ayapel y 966 Abibe 
					',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia222 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 1,
						'description' => 'REDD++; No se establecio meta financiera sin embargo,  se estan llebvando acabo acciones insttucional es para cumplir esta meta',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 10077300,
						'description' => 'Produccion de 10.077.300 de  Alevinos y Postlarvas para fomento y repoblamiento ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 1,
						'description' => 'Implementación de una (1) guía Artesanias Altos de Polonia (Totumo y Lata de Corozo) en municipio Buenavista y elaboración de una (1) guía Artesanias Ronal (artesanias decorativas en barro cocido) en el municipio de Lorica.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia227 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 24,
						'description' => 'La meta de 10 empresas en intercambio de experiencias en convenio con Omacha, apoyó el intercambio de experiencias  RATIFICANDO que en este año se SOBREPASO a veinticuatro (24) empresas, a través de diferentes estrategias de la politica P&CS: A través del programa Aval de Confianza dieciseis (16) Asociaciones: 1. ASOCIACIÓN DE MUJERES PRODUCTORA DE MIEL DE ABEJA DEL CARIBE- APROMIEL, 2.  ECOMIEL DE COLOMBIA, 3. ASOCIACIÓN DE PRODUCTORES TRANSFORMADORES COMERCIALIZADORES DE AGROPECUARIOS DEL MUNICIPIO DE AYAPEL “AGROGANADEROS, 4. ASOPANECOR, 5. ACONDICIONADORES ARTESANALES JALLER DE COLOMBIA, 6. COLMANGOS SAS, 7. ASOCIACION DE PRODUCTORES DE CAÑA Y PANELA DEL TIGRE ASOPROCAPATI, 8. COCOTECH COLOMBIA SAS, 9. ORGÁNICOS DE LA COSTA CARIBE S.A, 10. ASOCIACIÓN DE COOPERATIVAS Y ORGANIZACIONES DE TIERRALTA Y VALENCIA “ACTIVA G10”, 11. ASOCIACIÓN DE PRODUCTORES DE PLÁTANO DE SAN PELAYO ASOPLATAS, 12. ASOCIACIÓN DE PRODUCTORES DE PAPAYA DEL ALTO SINÚ - APPALSI, 13. HORTYFRÚ, 14. FINCA EL RESCATE-DEL PANAL, 15. APESGAL, 16. MUJERES EMPRENDEDORAS. A través del programa LIDERAM Ocho (8) Empresas 1. SUCESORES DE CESAR VÁSQUEZ – CAFÉ CÓRDOBA., 2. FRIGORIFICO DEL SINÚ -FRIGOSINÚ S.A., 3. FUNDACIÓN CLÍNICA DEL RIO, 4. COLANTA, 5. COMERCIALIZADORA COLANTA- CERETE, 6. ESPECIALISTAS ASOCIADOS S.A - CLINICA DE TRAUMAS Y FRACTURAS, 7. UNIVERSIDAD DEL SINÚ, 8. ONCOMEDICA S.A.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 2,
						'description' => 'Dos (2) Ecoproducto Asociación de Mujeres Productoras y Comercializadoras de Aceite de Coco   Aceluz” municipio San Bernardo del Viento y la empresa de Jabones artesanales naturales “Dixpo Neem” municipio de Montería',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 10,
						'description' => 'La meta de 5 empresas en el seguimiento y fortalecimiento de negocios verdes, en convenio con la fundación omacha se fortaleció la estrategia verificando cinco (5) nuevos  Negocios, empresas 1. AGROINDUSTRIA MS. 2. VIENTUR  3. DELILECHE 4. ECO - ARTE.  5. ROSQUITAS EL PROGRESO.  + 10  Empresas Apoyadas por la Union Europea y MADS',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia231 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia235 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 165,
						'description' => 'Se restauraron 165 Ha en Convenio entre la CVS y La Gobernación de Cordoba.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 100,
						'description' => 'Seguimiento a Unidade de Producción Minera - UPM priorizadas a  traves de convenio dcon MINMINAS ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 1,
						'description' => 'Se elaboro mapa de ruido del Municipio de Lorica ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 1,
						'description' => '2 Campaña de Sensibilizacion de Ruido en el Municipio de Monteria',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 4,
						'description' => 'Cuatro  Estaciones opetrando en el SVCA, para el 2019 se proyecta dar Cumplimiento a la Meta en un  100% para 5 estaciones.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 100,
						'description' => 'Se realizó de manera satisfactoria las actividades de vigilancia, seguimiento y control  de las empresas que cuentan con permiso de emisiones atmosféricas en fuente fija en la jurisdicción de la CAR CVS; la cuales se cuantifican en 18.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 3,
						'description' => 'En el marco del convenio de calidad de aire se invitó a los municipios del departamento de Córdoba, empresas y sector educativo a la CAPACITACIÓN sobre “Medición y Evaluación de estudios de calidad de aire y ruido” donde se trataron los siguientes temas:

					 
					1. Calidad del aire
					1.1. Objetivos de la medición
					1.2. Técnicas de muestreo
					1.3. Ubicación de estaciones
					1.4. Equipamiento utilizado
					1.5. Muestreo e información técnica
					1.6. Análisis de datos.
					2. Emisión de Ruido y Ruido Ambiental
					2.1. Objetivo de la medición
					2.2. Ubicación de puntos de monitoreo
					2.3. Equipos a emplear en la medición
					2.4. Análisis de datos
					',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 1,
						'description' => 'Se continuo con la Implementación y ajuste del Plan y la Actualización de la plataforma RESPEL',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 1,
						'description' => 'Se apoyo al municipio de Paneta Rica en la Actualizacion de su Plan de Manejo Ambiental',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia246 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 30,
						'description' => 'Se realizo seguimiento a los PSMV de los 30 Municipios del departamento de Córdoba',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 30,
						'description' => 'Se realizo  seguimiento a los PGIRS de los 30 Municipios del departamento de Córdoba',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 1,
						'description' => 'Mediante comision conjunta se aprobó el Documento Plan de Ordenamiento y Manejo integrado de la Unidad Ambiental Costera - POMIUAC Estuarina del Rio Sinú y el Golfo de Morrosquillo',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 1,
						'description' => 'Servicios científicos, técnicos y tecnológicos para mantener actualizado el diagnóstico de la calidad de las aguas marino-costeras del departamento de Córdoba, mediante la operación del nodo CVS de la “Red de Vigilancia para la Conservación y Protección de las Aguas Marinas y Costeras de Colombia – REDCAM',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 1,
						'description' => 'Monitoreo de la erosión de los entes territoriales de la UAC costera del departamento de Córdoba. Informe final',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 1232,
						'description' => '2018:100 Ha Ganacor + 165 Ha en Ayapel y 967 Abibe',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia255 = DB::getPdo()->lastInsertId(); 






					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 0.6,
						'description' => 'Ajuste de POMCAS Rio medio y bajo Sinú y Rio Canalete , Rio los Cordobas y otros arrollos',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 1,
						'description' => 'Formulación Plan de Manejo de Microcuenca priorizada es la Quebrada Jui ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 1,
						'description' => 'Formulación Plan de Manejo de Acuiferos priorizado, acuífero Sinú',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia264 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 1,
						'description' => 'Formulación del Plan de Ordenamiento del Recurso Hidrico - PORH los Cordobas',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia265 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 1,
						'description' => 'La Corporacion se encuentra en proceso de ejecucion de 27 convenios que apuntan al la implementacion de los POMCAS',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 1,
						'description' => 'Esta actividad se realiza junto con el Plan de Ordenamiento del Recurso Hidrico - PORH',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 1,
						'description' => 'Se implemento la red de monitoreo de la calidad de Agua distribuida en el Departamento de Cordoba , Se realizaron tres monitoreos.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 1,
						'description' => 'Se adelantantaron as acciones  correspondientes para la actualizacion de la Plataforma ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 1,
						'description' => 'Se realizo el respectivo registro de usuarios en la plataforma SIRH',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia271 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 1,
						'description' => 'Acciones encaminadas a impactar a las comunidades, escuelas y diferentes actores en el tema de Uso y ahorro eficiente del Agua',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia272 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 12,
						'description' => 'El PAI establece una meta de 3 PUEAA pero gracias a las gestiones realizadas por la CARCVS se esta haciendo seguimiento a doce (12) Programas de Ahorro y Uso Eficiente de Agua (pueaa) aprobados por CVS.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia273 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 1,
						'description' => 'Campaña nuevas estrategias en ahorro y uso eficiente del agua, importancia del agua para los ecosistemas estratégicos y el desarrollo de las comunidades - Junto con Vital - Auditorio IRACA',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia274 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 1,
						'description' => 'Se cumple con proyecto SAT, Canales Acta de inicio del 14 de Septiembre . Recursos OCAD',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 1,
						'description' => 'Se Continuo trabajando con la Mesa Departalmental de Cambio Climatico, actores de la mesa ( ASPROCIG, FAO, IDEAM, PNUD, PASTORAL SOCIAL,  PNN, URRA, CERRO MATOSO, CORPOICA, FONDO ADAPTACION,GIZ)',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia278 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 5,
						'description' => 'Serealizo monitoreo en los siguientes Ecosistemas Cienaga Corralito, Cienaga los Quemados, Cienaga Charcoaji, Cienaga de Baño, Cienaga Cintura',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia279 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 10,
						'description' => 'Municipios Apoyados en la Implementacion a nivel local de los lineamientos del PDACC (La Apartada, Buenavista, San Jose de Ure, Pueblo Nuevo, San Antero, Lorica,Cotorra) los Municipios faltantes se apoyaran en el segundo semestre. ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 2,
						'description' => 'Se Diseñó, se suministró e instalo, un sistema de monitoreo de alertas tempranas por inundaciones (por crecientes súbitas) en la cuenca de Caño Grande y Caño Sicará. Dos estaciones Hidrometereologicas y su respectivo seguimiento y monitoreo de los cambios y situación climáticas que pueden generar condiciones de riesgo a la población asentada en este sector del municipio.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 1,
						'description' => 'Modelo Piloto para la Adaptación, Uso, Restauración y Conservación sostenible del humedal de la Ciénaga Grande del Bajo Sinú, mediante la implementación de los protocolos de restauración ecosistemica y agroecosistémica, en el municipio de Purísima adelantados desde el año 2014.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'description' => 'La Corporación apoyo a 1 sector economico  del departamento de cordoba asistido por la CAR CVS para la mitigación frente al cambio climático. Sector Transporte. ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 12,
						'description' => 'Se apoyaron los siguientes Municipios en la Inclusión del Compornente de cambio climatico en sus instrumentos de planidficacion: Momil Pueblo Nuevo, San Bernardo del Viento Canalete, Tierralta Chimá, Buenavista Moñitos, Cotorra San Antero, Montelíbano Planeta Rica
					',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 4,
						'description' => 'la corporación recibió y evaluó los Planes de acción para eventos de sequía e incendios forestales, planes de acción para temporada de lluvias, Estrategias Municipales de Respuesta a Emergencias – EMRE y Planes Municipales de Gestión del Riesgo de Desastres –PMGRD, de los municipios de San Bernardo del Viento, Tierralta, Momil, Montelíbano, Moñitos, y Planeta Rica.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia286 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 1,
						'description' => 'Se apoyo al Municipio de San Jose de Uré con la Implementación de un Sistema de Alertas Tempranas  - SAT',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>3,
						'value' => 1,
						'description' => 'Se realizo monitoreo a problematicas asociadas a la gestión del Riesgo (Inundaciones, seguimiento a obras definitivas e intervencion de cauces, incendios forestales)',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>3,
						'value' => 0.6,
						'description' => 'La Corporacion se encuentra en proceso de Acompañamiento técnico a los Comités Técnicos Interinstitucionales de Educación Ambiental, CIDEAM, de los municipios de Montería, Tierralta, San Antero y Montelíbano. ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>3,
						'value' => 0.15,
						'description' => 'Diez (10) Instituciones con competencias y responsabilidades que conforman el Comité Interinstitucional de Educación Ambiental departamental, CIDEA Córdoba, que son representadas por un Delegado Institucional y que participan en el proceso de actualización, presentación y aprobación de una Política de Educación Ambiental para el departamento de Córdoba, liderado por la CVS.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>3,
						'value' => 0.15,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>3,
						'value' => 0.8,
						'description' => 'Acompañamiento a los PROCEDA, en Cuatro (04) Municipios',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>3,
						'value' => 0.75,
						'description' => 'Sistematización-Investigación de Diez (10) Proyectos Ambientales Escolares, PRAE, como una oportunidad para dimensionar la educación ambiental en la Escuela y como mecanismo para la conformación de la REDEPRAE del departamento de Córdoba. ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>3,
						'value' => 0.15,
						'description' => '
					Instituciones Educativas vinculadas al proyecto de Sistematización de REDEPRAE  Junín
					Nuestra Señora del Rosario, José Antonio Galán, Juan XXIII, INEM,Guateque, La Rivera,San Jorge,Latino,Pijiguayal',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>3,
						'value' => 1,
						'description' => 'Se realizaron operativos de control y vigilancia de los recursos naturales, campañas de sensibilización a través del Programa “Soy Salvafauna”, • Seguimiento y atención de casos relacionados con avistamiento y/o proliferación de especies invasoras en el departamento de Córdoba y Operacion del Centro de Atencion y Valoración de Fauna Silvestre - CAV',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>3,
						'value' => 0.15,
						'description' => 'seguimiento y apoyo a las acciones de educacion ambiental ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>3,
						'value' => 0.45,
						'description' => 'La Corporacion apoya otras estrategias a traves de la implmentación y operación del Aula Verde Interactiva y Viveros Bioclimaticos',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>3,
						'value' => 0.95,
						'description' => 'En lo que respecta a las actuaciones del Área de Licencias y Permisos durante el año 2018, se realizaron un total de 1.956 actuaciones, de las cuales 1.084 corresponden a Conceptos Técnicos y 872 a Informes de Visita. ',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>3,
						'value' => 0.95,
						'description' => 'Se atendió un total de 285 solicitudes distribuidas entre las diferentes temáticas. Cabe resaltar, que la temática con mayor número de solicitudes fue la de aprovechamiento forestal con un valor de 242, seguido de concesiones de agua superficiales y/o subterráneas.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>3,
						'value' => 1,
						'description' => 'La Corporación atiendio las Diferentes quejas o denuncias ambientales que se presentan a travez de VITAL o PQR',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>3,
						'value' => 1,
						'description' => 'La Corporación Continua con la Implementación del Plan de Acción para la Implementación de VITAL',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>3,
						'value' => 1,
						'description' => 'Se adelantan  acciones para la implementacion de GEL, se avanzo al 100 en la inscripcion de tramites en el Sistema Unico de Informacion de Tramites - SUIT del Departamento Administrativo de la Funión Pública - DAFP, ademas la Corporacion ha publicado Datos Abiertos en el Portal dispuesto para tal fin.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia305 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>3,
						'value' => 1,
						'description' => 'Con un presupuesto inicial aprobado de $20.622 millones, adiciones por la suma de $5.898 millones producto de convenios gestionados, tasa uso por agua, tasa de aprovechamiento forestal, multas y sanciones, recursos del balance y aportes de la nación; y reducciones por la suma de $1.450 millones en trasferencias del sector eléctrico (Gecelca) y Convenios, al finalizar la vigencia el presupuesto ascendió a $25.070 millones.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>3,
						'value' => 1,
						'description' => 'Se inicio las Gestiones para la Adecucion y mejoramiento de la Sedes de la Corporación.',
						'date_report' => '2018-12-31',
						'rezago' => false,
						]);
						$idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 3,
						'description' => 'Municipios de San Antero, Purísima y Moñitos

					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 1,
						'description' => 'Con el convenio ANH se trabajo en la identificación de las determinantes ambientales  de las subregiones Sinú medio (Cereté , San pelayo, Cienaga de Oro, Cotorra, San Carlos) y Sabana (San Andres de Sotavento, Chinú, Sahagun) ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 0.85,
						'description' => 'Acotamiento de rondas hidricas priorizadas (Caño San Pues, Caño Severinera, Quebrada las Flores)  en el departamento de Cordoba con requeriiento de los Juzgados y tribunal especializados en Restitucion de Tierras y acotamiento del caño  y  Cierra Chiquita para mejorar los procesos de ordenamoento territotial del Municipio de Monteria.',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 0.85,
						'description' => 'Seguimiento a ICAU Siete  Municiios Tierralta, Planeta Rica, Monteria, Sahagun, Cerete, Lorica y  Montelibano ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia313 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia315 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 1,
						'description' => 'implementación de acciones dentro del Plan de Manejo del Distrito de Conservación de Suelos – DCS de la Ciénaga de Corralito.',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia316 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 0.95,
						'description' => 'Ejecucion Plan de Manejo DMI de Cispata  y los Negros',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia317 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 1,
						'description' => 'Acuerdo Especifico subregional 034 Autoridades Ambientales del Caribe Colombiano 2019',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia318 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 1,
						'description' => 'diagnóstico como iniciativa para la delimitación y zonificación del área como proceso de la declaratoria para el Cerro Laguneta del municipio de Ciénaga de Oro',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia320 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia321 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 0.9,
						'description' => 'la Corporación esta adelantado acciones para la conservación de 7 especies focales  (Boa, Mapaná, Candelilla negra, Candelilla roja, Hicotea, Tortuga de rio, Manati )

					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 0.9,
						'description' => 'la Corporación esta adelantado acciones para la conservación de 7 especies focales  (Boa, Mapaná, Candelilla negra, Candelilla roja, Hicotea, Tortuga de rio, Manati )

					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia324 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 5159,
						'description' => 'La meta que se estable en esta actividad corresponde a 4000 Ha del 2018  aplazada por acuerdo 383 de 2018 con vigencia futura + 1500  meta 2019 según acuerdo 390 de 2019 ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia326 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 0.9,
						'description' => 'Programas implementados REDD+, Blue Carbon, Apple',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia327 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia328 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 10282900,
						'description' => 'De los 10.282.900: para fomento fueron 2.927.300 (Bocachico 1.916.200, Cachama 511.100 y Postlarvas 500.000)
					Para repoblamiento fueron 7.355.600 (Bocachicos 3.855.600 y Postlarva 4.000.000).  ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia329 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 0.96,
						'description' => 'fortalecimiento de la guía de artesanías, producidas con Mangle.
					Fortalecimiento al seguimiento de artesanias producidas con barro ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia330 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 65,
						'description' => 'Se hicieron visitas de acompañamiento, seguimiento y fortalecimiento a las diferentes asociaciones ganadoras del año pasado. Asociación de Mujeres Productoras de Miel de Abeja del Caribe- APROMIEL (Aval De Confianza); Eco De Colombia.(Aval de Confianza); Asociación de Productores Transformadores Comercializadores de Agropecuarios Municipio de Ayapel   Agroganaderos   (Postulante); Asociación de Panerelos de Cordoba - ASOPANECOR (Postulante); Acondicionadores Artesanales Jaller de Colombia (Aval De Confianza); COLMANGOS Sas (Aval De Confianza); Asociacion de Productores de Caña y Panela del Tigre ASOPROCAPATI (Postulante); COCOTECH Colombia Sas (Aval De Confianza); Orgánicos de la Costa Caribe S.A (Aval De Confianza); Asociación de Cooperativas y Organizaciones de Tierralta y Valencia   Activa G10   (Aval De Confianza); Asociación de Productores de Plátano de San Pelayo ASOPLATAS. (Aval De Confianza); Asociación de Productores de Papaya del Alto Sinú – APPALSI (Aval De Confianza); Asociación de Productores de Hortalizas, Frutas y Plantas Arómaticas del Municipio de Cereté HORTYFRÚ (Postulante); Finca el Rescate (Aval De Confianza); APESGAL (Postulante); Mujeres Emprendedoras (Postulante).',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia332 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 0.96,
						'description' => 'El ecoproducto identificado y seleccionado es “Aceite de Sacha Inchi” de la Cooperativa Agroindustrial del Alto Sinú',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia333 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 80,
						'description' => 'A corte de este informe, se han practicado visitas para el acompañamiento, seguimiento y fortalecimiento de 56 NVS ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia334 = DB::getPdo()->lastInsertId(); 



					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia338 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 100,
						'description' => 'Seguimiento por parte de Gestión Ambiental a las Minas con Licencia y/o Planes de manejo y tambien Ilegales ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia340 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia341 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 1,
						'description' => 'Las mediciones se ejecutaron teniendo en cuenta el procedimiento descrito en el Capítulo I del Anexo 3 de la Resolución 0627 del 7 de abril del 2006 del MAVDT, actual MADS, además, se realizó bajo las siguientes condiciones: Medición con las fuentes ruidosas funcionando para obtener el nivel de presión sonora continúo equivalente ponderado A, LAeq; y para determinar el ruido residual LAeq Residual, se tomó como valor el correspondiente al nivel percentil L90. ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia343 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 4,
						'description' => 'El estudio de calidad de aire por Material Particulado (PM10) realizado en el área de influencia de la ciudad de Montería, se desarrolló por medio de cuatro estaciones de monitoreo  (Terminal de transporte de Montería, Universidad Pontificia Bolivariana - UPB, Universidad del Sinú, Hospital La Gloria)
					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia344 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 100,
						'description' => 'Los profesionales han atendido todas las solicitudes represadas y nuevas que llegan a la subdirección de gestión ambiental en esta tematica.',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia345 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 3,
						'description' => 'CAPACITACIÓN PARA EL APOYO EN EL SEGUIMIENTO Y CONTROL DE LA MEDICIÓN DE FUENTES FIJAS, MEDICIÓN DE FUENTES MÓVILES, EVALUACIÓN DE OLORES OFENSIVOS Y RUIDO AMBIENTAL.
					PLATAFORMA DE REGISTRO DE GENERADORES DE RESIDUOS PELIGROSOS-RESPEL A FUNCIONARIOS DE LA CVS Y ENTIDADES TERRITORIALES.',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia346 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 1,
						'description' => 'Registro y reporte de Generadores de Residuos o Desechos Peligrosos  en el subsistema del SIAC RESPEL',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia347 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia348 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 13,
						'description' => 'Se realizo seguimiento a los siguientes Municipios ( Planeta Rica, Publo Nuevo, Buenavista, La Apartada Montelibano, Canalete, Los Cordobas, Puerto Escondido, Sahagún, Chinú, San Andres, San Antero, y Lorica)',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia351 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 8,
						'description' => 'Seguimiento a avances en PGIR S de los municipios, Ayapel, Cereté, La Apartada, Momil, Montería, Planeta Rica, San Antero, San Carlos
					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia352 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia353 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 1,
						'description' => 'Meta Cumplida Formulación POMIUAC',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia354 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 1,
						'description' => 'Se avanzo en la selección del sector de playas para las actividades de educación ambiental relacionados con basura marina, teniendo en cuenta el estado de contaminación física por microplásticos en los ecosistemas de playas y manglar en el departamento de Córdoba. ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia355 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 0.95,
						'description' => 'Se suscribio un convenio con el INVEMAR con el objeto de Avanzar en el conocimiento de la erosión costera y riesgo por factores físicos, climáticos, oceanográficos y antrópicos que inciden sobre la zona costera del departamento de Córdoba.',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia356 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia357 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 100,
						'description' => 'Se suscribio el convenio 021  que tiene como objeto: Desarrollar una alternativa de reconversión y adaptación tecnológica mediante la implementación de Sistemas Silvopastoriles en predios ganaderos del  departamento de Córdoba. 50 Ha Establecimiento + 50 Ha en Acompañamiento',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia358 = DB::getPdo()->lastInsertId(); 






					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 0.7,
						'description' => 'Ajuste de POMCAS Rio medio y bajo Sinú y Rio Canalete , Rio los Cordobas y otros arrollos',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia365 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 0.9,
						'description' => 'Se formulo PORH  Quebrada Nueva ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia368 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 0.9,
						'description' => 'A traces de los convenio suscritos se han impactado actividades establecidas en los POMCAS',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia369 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia370 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 1,
						'description' => 'Arroyo Arena, Carolina ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia371 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 1,
						'description' => 'Las campañas de monitoreo se realizaron satisfactoriamente por el laboratorio LMB ltda',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia372 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 1,
						'description' => 'Se  actualizó el Sistema con las atuaciones realizadas por la Subdoreccion de Gestión Ambiental ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia373 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 1,
						'description' => 'Se  actualizó el Sistema con las atuaciones realizadas por la Subdoreccion de Gestión Ambiental ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia374 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 1,
						'description' => 'Se realizó un diagnóstico para conocer el enfoque de la estrategia y los profesionales se encuentran desarrollando las diferentes estrategias para aprobación del supervisor.',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia375 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 3,
						'description' => 'La Meta establecida en el PAI para la vigencia 2019 en cuanto a PUEAA  es de 3 PUEAA con Seguimiento, gracias a la gestión de la CVS se ha logrado hacer seguimiento a 15 esta actividad presenta un avance del 100% .',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia376 = DB::getPdo()->lastInsertId(); 


					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia379 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 1,
						'description' => 'Se cumplio con proyecto SAT, Canales Acta de inicio del 14 de Septiembre . Recursos OCAD',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia380 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 3,
						'description' => 'Tres eventos de la mesa departamental de Cambio Climatico',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia381 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 1,
						'description' => 'Se realizaron encuestas como insumo para elaborar el protocolo local de estadística, análisis y medidas de manejo de incendios forestales en ecosistemas estratégicos del departamento de Córdoba (San Carlos, San Pelayo, Santa Cruz de Lorica, Sahagún, Ciénaga De Oro,Cereté
					Planeta Rica)',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia382 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 11,
						'description' => 'Para la implementación de los lineamientos locales del Plan Departamental de Adaptación al Cambio Climático 2016-2027, la Corporación Autónoma Regional de los Valles del Sinú y del San Jorge – CVS y la Fundación PRADES, seleccionaron 11 municipios (Canalete, San Carlos
					Sahagún, Chinú, Tuchín, Puerto Libertador, San Andrés de Sotavento,Chimá, Planeta Rica, Tierralta)
					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia383 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>4,
						'value' => 2,
						'description' => 'se realizó instalación y capacitación del sistema de alertas tempranas (SAT), el día 15 de enero del presente año, en la comunidad de Caño Grande y Caño Sicará en el municipio de San Bernardo del Viento departamento de córdoba.  ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia384 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 1,
						'description' => 'Protocolos de Restauración Ecológica y Agroecosistémica en el Municipio de Purísima y los procesos de investigación aplicada y monitoreo del Modelo Piloto para la Adaptación, Uso, Restauración y Conservación del Humedal de la Ciénaga Grande del Bajo Sinú',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia385 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia386 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 2,
						'description' => 'Apoyo al secor ganadero GANACOR  y el sector  Minero Energetico SURTIGAS',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia387 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 10,
						'description' => 'Municipios Apoyados Montería, Cereté,San Pelayo, Puerto Libertador, Sahagún, Santa Cruz de Lorica, Purísima, San Andrés de Sotavento, Ayapel, Chinú

					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia388 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 3,
						'description' => 'Municipios apoyados en el conocimiento para la prevención frente a los impactos de eventos y efectos climáticos, MONTERÍA, PUERTO LIBERTADOR, SAN ANDRÉS DE SOTAVENTO',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia389 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 1,
						'description' => 'Estudio de puntos criticos en el Dpto de Cordoba municipios Tierralta, Valencia, Montería, Cereté, San Pelayo, Cotorra, Santa Cruz de Lorica y San Bernardo del Viento. ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia390 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity82,
						'year' =>4,
						'value' => 1,
						'description' => '280 Informes Hidrometereologicos, Visitas de inspeccion  a problematicas asociadas con la gestión del Riesgo',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia391 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity83,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia392 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity84,
						'year' =>4,
						'value' => 4,
						'description' => 'acompañamiento a cuatro Comités Técnicos Interinstitucionales de Educación Ambiental -CIDEAM-de los municipios de Momil, Cotorra , Cereté y el departamental (Montería).',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia393 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity85,
						'year' =>4,
						'value' => 1,
						'description' => 'Esta se viene adelantando a través de la promoción y masificación del documento de la Política Departamental de Educación Ambiental, mediante medios magnéticos, para su enriquecimiento por parte de diferentes actores o comunidad interesada en la temática de la Política Ambiental departamental.  ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia394 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity86,
						'year' =>4,
						'value' => 1,
						'description' => 'Esta se viene adelantando a través de la promoción y masificación del documento de la Política Departamental de Educación Ambiental, mediante medios magnéticos, para su enriquecimiento por parte de diferentes actores o comunidad interesada en la temática de la Política Ambiental departamental.  ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia395 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity87,
						'year' =>4,
						'value' => 4,
						'description' => 'Se realizaron talleres de capacitación, formación e intercambio y fortalecimiento de saberes para la revisión, ajustes, actualización y seguimiento de cuatro Planes de Educación Ambiental Municipal PEAM,  y uno departamental PEAMD',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia396 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity88,
						'year' =>4,
						'value' => 5,
						'description' => '6 PRAE (LORICA, MONTERIA, SAN ANTERO, SAN  ERNARDO DEL VIENTO, CIENEGA DE ORO)
					',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia397 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity89,
						'year' =>4,
						'value' => 1,
						'description' => 'Se han realizados acciones y actividades de capacitación y formación tendientes a  fortalecer procesos de participación e investigación cualitativa y participativa  desde el acompañamiento a Proyectos Ambientales Escolares -PRAE-, ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia398 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity90,
						'year' =>4,
						'value' => 0.9,
						'description' => 'Campañas Preventivas, Soy Salvafauna,  Entregas Voluntarias, Retenes, Decomisos Etc',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia399 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity91,
						'year' =>4,
						'value' => 1,
						'description' => 'Mediante esta estrategia se promueve el apoyo a la gestión, formulación e implementación de proyectos comunitarios en el marco de los Distritos de Manejo Integrados, de humedales como el del municipio de Lorica donde se viene liderando el proceso con la realización de talleres con participación comunitaria, a  través de un PROCEDA',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia400 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity92,
						'year' =>4,
						'value' => 3,
						'description' => 'La corporación ha instruido a través de diversas actividades como charlas, acompañamientos y apoyos a entidades, Instituciones Educativas y Organizaciones Comunitarias en las cuales han participado unas 470 personas de entidades como la Fundación Sinú, Fundación por un Mundo Mejor  I. E Mariscal Sucre, ICBF, I E Las Margaritas, entre otras , con temas relevantes como Educación ambiental y MIRS,  Conservación de especies, conmemoración del día del Medio Ambiente, Educación en Elaboración de abonos orgánicos , viveros, entre otros.',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia401 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity93,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia402 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity94,
						'year' =>4,
						'value' => 0.95,
						'description' => 'Se han realizado visitas de seguimiento y evaluación a proyectos, licencias, permisos y/o concesione, • Realizar informes y conceptos a solicitudes y evaluación de proyectos licenciados, control y vigilancia a aquellas actividades ilegales ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia403 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity95,
						'year' =>4,
						'value' => 0.95,
						'description' => 'Se han realizado visitas de seguimiento y evaluación a proyectos, licencias, permisos y/o concesione, • Realizar informes y conceptos a solicitudes y evaluación de proyectos licenciados, control y vigilancia a aquellas actividades ilegales ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia404 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity96,
						'year' =>4,
						'value' => 0.95,
						'description' => 'Se han realizado visitas de seguimiento y evaluación a proyectos, licencias, permisos y/o concesione, • Realizar informes y conceptos a solicitudes y evaluación de proyectos licenciados, control y vigilancia a aquellas actividades ilegales ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia405 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity97,
						'year' =>4,
						'value' => 0.95,
						'description' => 'La Corporación Continuocon la Implementación del Plan de Acción para la Implementación de VITAL',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia406 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity98,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia407 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity99,
						'year' =>4,
						'value' => 0.95,
						'description' => 'Se desarrollo la  Plataforma tecnologica para el seguimiento a los planes PGAR- PAI- POAI',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia408 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity101,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia410 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity102,
						'year' =>4,
						'value' => 0.9,
						'description' => 'Se desarrolla la  Plataforma tecnologica para el seguimiento a los planes PGAR- PAI- POAI',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia411 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity103,
						'year' =>4,
						'value' => 1,
						'description' => 'se realizaron actividades de  adecucion y mejoramiento de la sedes de la Corporación. Sede principal,  Subsede Bajo Sinú ',
						'date_report' => '2019-12-31',
						'rezago' => false,
						]);
						$idevidencia412 = DB::getPdo()->lastInsertId();
				
						DB::table('financing_sources')->insert([
							'father_id' => 11,
							'code' => '1.1.1.1.1.1.1.1',
							'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
							'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente1 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 90,
							'code' => '1.1.2.4.2.3',
							'name' => 'Venta de bienes y servicios',
							'description' => 'Venta de bienes y servicios',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente2 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 58,
							'code' => '1.1.2.2.2.1.1',
							'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
							'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente3 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 79,
							'code' => '1.1.2.2.2.8.1',
							'name' => 'Otros servicios (vigencia actual)',
							'description' => 'Otros servicios (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente4 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 27,
							'code' => '1.1.2.1.1.1.1.1',
							'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
							'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente5 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 208,
							'code' => '1.2.5.1.3',
							'name' => 'Otros Convenios',
							'description' => 'Otros Convenios',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente6 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 42,
							'code' => '1.1.2.2.1.1.1.1',
							'name' => 'Tasa retributiva (vigencia actual)',
							'description' => 'Tasa retributiva (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente7 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 45,
							'code' => '1.1.2.2.1.1.2.1',
							'name' => 'Tasa por el uso del agua (vigencia actual)',
							'description' => 'Tasa por el uso del agua (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente8 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 48,
							'code' => '1.1.2.2.1.1.3.1',
							'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
							'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente9 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 84,
							'code' => '1.1.2.3.1.1.1',
							'name' => 'Multas ambientales (vigencia actual)',
							'description' => 'Multas ambientales (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente10 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 79,
							'code' => '1.1.2.2.2.8.1',
							'name' => 'Otros servicios (vigencia actual)',
							'description' => 'Otros servicios (vigencia actual)',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente11 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 145,
							'code' => '1.2.2.6',
							'name' => 'Rendimientos financieros',
							'description' => 'Rendimientos financieros',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente12 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 145,
							'code' => '1.2.2.7',
							'name' => 'Excedentes financieros',
							'description' => 'Excedentes financieros',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente13 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 279,
							'code' => '1.2.7.3.3.5',
							'name' => 'Cancelación de reservas Otras tasas',
							'description' => 'Cancelación de reservas Otras tasas',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente14 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 241,
							'code' => '1.2.6.3.5',
							'name' => 'Recuperación de cartera Otras tasas',
							'description' => 'Recuperación de cartera Otras tasas',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente15 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 250,
							'code' => '1.2.7.4',
							'name' => 'Otros recursos del balance',
							'description' => 'Otros recursos del balance',
							'type_id' => 22,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente16 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 119,
							'code' => '1.1.2.5.1.1.1.4',
							'name' => 'Aportes de la Nación Funcionamiento',
							'description' => 'Aportes de la Nación Funcionamiento',
							'type_id' => 23,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente17 = DB::getPdo()->lastInsertId();
							
						DB::table('financing_sources')->insert([
							'father_id' => 124,
							'code' => '1.1.2.5.1.2.2',
							'name' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
							'description' => 'Aportes inversión Fondo de Compensación Ambiental -FCA',
							'type_id' => 24,
							'final_level' => true,
							'group_id' => 34,
							]);
							$idFuente18 = DB::getPdo()->lastInsertId();


							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente1,
								'value' => 8908366980,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 0,
								'fund_percentage' => 0,
								'investment_percentage' => 100,
								'functioning' => 0,
								'debt_service' => 0,
								'fund' => 0,
								'investment' => 8908366980,
								'year' => 1,
								]);
								$idPlan1 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente2,
								'value' => 389121779,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 90,
								'fund_percentage' => 10,
								'investment_percentage' => 0,
								'functioning' => 0,
								'debt_service' => 350209601.1,
								'fund' => 38912177.9,
								'investment' => 0,
								'year' => 1,
								]);
								$idPlan2 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente3,
								'value' => 1261236667,
								'functioning_percentage' => 88,
								'debt_service_percentage' => 0,
								'fund_percentage' => 0,
								'investment_percentage' => 12,
								'functioning' => 1109888266.96,
								'debt_service' => 0,
								'fund' => 0,
								'investment' => 151348400.04,
								'year' => 1,
								]);
								$idPlan3 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente4,
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
								$idPlan = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente5,
								'value' => 3359660798,
								'functioning_percentage' => 10,
								'debt_service_percentage' => 0,
								'fund_percentage' => 20,
								'investment_percentage' => 70,
								'functioning' => 335966079.8,
								'debt_service' => 0,
								'fund' => 671932159.6,
								'investment' => 2351762558.6,
								'year' => 1,
								]);
								$idPlan4 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente6,
								'value' => 11682877289,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 0,
								'fund_percentage' => 0,
								'investment_percentage' => 100,
								'functioning' => 0,
								'debt_service' => 0,
								'fund' => 0,
								'investment' => 11682877289,
								'year' => 1,
								]);
								$idPlan5 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente7,
								'value' => 233268730,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 0,
								'fund_percentage' => 10,
								'investment_percentage' => 90,
								'functioning' => 0,
								'debt_service' => 0,
								'fund' => 23326873,
								'investment' => 209941857,
								'year' => 1,
								]);
								$idPlan6 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente8,
								'value' => 42852340,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 0,
								'fund_percentage' => 10,
								'investment_percentage' => 90,
								'functioning' => 0,
								'debt_service' => 0,
								'fund' => 4285234,
								'investment' => 38567106,
								'year' => 1,
								]);
								$idPlan7 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente9,
								'value' => 230273416,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 0,
								'fund_percentage' => 10,
								'investment_percentage' => 90,
								'functioning' => 0,
								'debt_service' => 0,
								'fund' => 23027341.6,
								'investment' => 207246074.4,
								'year' => 1,
								]);
								$idPlan8 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente10,
								'value' => 444156939,
								'functioning_percentage' => 5.9119,
								'debt_service_percentage' => 12.7845,
								'fund_percentage' => 10,
								'investment_percentage' => 71.3036,
								'functioning' => 26258114.076741,
								'debt_service' => 56783243.866455,
								'fund' => 44415693.9,
								'investment' => 316699887.156804,
								'year' => 1,
								]);
								$idPlan9 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente11,
								'value' => 11092134,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 0,
								'fund_percentage' => 10,
								'investment_percentage' => 90,
								'functioning' => 0,
								'debt_service' => 0,
								'fund' => 1109213.4,
								'investment' => 9982920.6,
								'year' => 1,
								]);
								$idPlan10 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente12,
								'value' => 183355000,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 100,
								'fund_percentage' => 0,
								'investment_percentage' => 0,
								'functioning' => 0,
								'debt_service' => 183355000,
								'fund' => 0,
								'investment' => 0,
								'year' => 1,
								]);
								$idPlan11 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente13,
								'value' => 1133930157,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 90,
								'fund_percentage' => 10,
								'investment_percentage' => 0,
								'functioning' => 0,
								'debt_service' => 1020537141.3,
								'fund' => 113393015.7,
								'investment' => 0,
								'year' => 1,
								]);
								$idPlan12 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente14,
								'value' => 1260701915,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 98.45552,
								'fund_percentage' => 1.54448,
								'investment_percentage' => 0,
								'functioning' => 0,
								'debt_service' => 1241230626.06321,
								'fund' => 19471288.936792,
								'investment' => 0,
								'year' => 1,
								]);
								$idPlan13 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente15,
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
								$idPlan = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente16,
								'value' => 75956750,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 100,
								'fund_percentage' => 0,
								'investment_percentage' => 0,
								'functioning' => 0,
								'debt_service' => 75956750,
								'fund' => 0,
								'investment' => 0,
								'year' => 1,
								]);
								$idPlan14 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente17,
								'value' => 2660856328,
								'functioning_percentage' => 100,
								'debt_service_percentage' => 0,
								'fund_percentage' => 0,
								'investment_percentage' => 0,
								'functioning' => 2660856328,
								'debt_service' => 0,
								'fund' => 0,
								'investment' => 0,
								'year' => 1,
								]);
								$idPlan15 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_plans')->insert([
								'p_a_i_id' => $idpai1,
								'source_id' => $idFuente18,
								'value' => 38246644180,
								'functioning_percentage' => 0,
								'debt_service_percentage' => 0,
								'fund_percentage' => 0,
								'investment_percentage' => 100,
								'functioning' => 0,
								'debt_service' => 0,
								'fund' => 0,
								'investment' => 38246644180,
								'year' => 1,
								]);
								$idPlan16 = DB::getPdo()->lastInsertId();
								
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente1,
									'value' => 9959848659,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 0,
									'fund_percentage' => 0,
									'investment_percentage' => 100,
									'functioning' => 0,
									'debt_service' => 0,
									'fund' => 0,
									'investment' => 9959848659,
									'year' => 2,
									]);
									$idPlan17 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente2,
									'value' => 382172500,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 90,
									'fund_percentage' => 10,
									'investment_percentage' => 0,
									'functioning' => 0,
									'debt_service' => 343955250,
									'fund' => 38217250,
									'investment' => 0,
									'year' => 2,
									]);
									$idPlan18 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente3,
									'value' => 1322067335,
									'functioning_percentage' => 50,
									'debt_service_percentage' => 0,
									'fund_percentage' => 10,
									'investment_percentage' => 40,
									'functioning' => 661033667.5,
									'debt_service' => 0,
									'fund' => 132206733.5,
									'investment' => 528826934,
									'year' => 2,
									]);
									$idPlan19 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente4,
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
									$idPlan = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente5,
									'value' => 1942310983,
									'functioning_percentage' => 10,
									'debt_service_percentage' => 0,
									'fund_percentage' => 20,
									'investment_percentage' => 70,
									'functioning' => 194231098.3,
									'debt_service' => 0,
									'fund' => 388462196.6,
									'investment' => 1359617688.1,
									'year' => 2,
									]);
									$idPlan20 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente6,
									'value' => 1754472045,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 0,
									'fund_percentage' => 0,
									'investment_percentage' => 100,
									'functioning' => 0,
									'debt_service' => 0,
									'fund' => 0,
									'investment' => 1754472045,
									'year' => 2,
									]);
									$idPlan21 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente7,
									'value' => 430486860,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 0,
									'fund_percentage' => 10,
									'investment_percentage' => 90,
									'functioning' => 0,
									'debt_service' => 0,
									'fund' => 43048686,
									'investment' => 387438174,
									'year' => 2,
									]);
									$idPlan22 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente8,
									'value' => 69909994,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 0,
									'fund_percentage' => 10,
									'investment_percentage' => 90,
									'functioning' => 0,
									'debt_service' => 0,
									'fund' => 6990999.4,
									'investment' => 62918994.6,
									'year' => 2,
									]);
									$idPlan23 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente9,
									'value' => 182733730,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 0,
									'fund_percentage' => 10,
									'investment_percentage' => 90,
									'functioning' => 0,
									'debt_service' => 0,
									'fund' => 18273373,
									'investment' => 164460357,
									'year' => 2,
									]);
									$idPlan24 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente10,
									'value' => 670231134,
									'functioning_percentage' => 29.7669,
									'debt_service_percentage' => 13.8006,
									'fund_percentage' => 16.9239,
									'investment_percentage' => 39.5086,
									'functioning' => 199507031.426646,
									'debt_service' => 92495917.878804,
									'fund' => 113429246.887026,
									'investment' => 264798937.807524,
									'year' => 2,
									]);
									$idPlan25 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente11,
									'value' => 25000000,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 90,
									'fund_percentage' => 10,
									'investment_percentage' => 0,
									'functioning' => 0,
									'debt_service' => 22500000,
									'fund' => 2500000,
									'investment' => 0,
									'year' => 2,
									]);
									$idPlan26 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente12,
									'value' => 110200000,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 90,
									'fund_percentage' => 10,
									'investment_percentage' => 0,
									'functioning' => 0,
									'debt_service' => 99180000,
									'fund' => 11020000,
									'investment' => 0,
									'year' => 2,
									]);
									$idPlan27 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente13,
									'value' => 956337858,
									'functioning_percentage' => 30,
									'debt_service_percentage' => 0,
									'fund_percentage' => 10,
									'investment_percentage' => 60,
									'functioning' => 286901357.4,
									'debt_service' => 0,
									'fund' => 95633785.8,
									'investment' => 573802714.8,
									'year' => 2,
									]);
									$idPlan28 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente14,
									'value' => 443778576,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 90,
									'fund_percentage' => 10,
									'investment_percentage' => 0,
									'functioning' => 0,
									'debt_service' => 399400718.4,
									'fund' => 44377857.6,
									'investment' => 0,
									'year' => 2,
									]);
									$idPlan29 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente15,
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
									$idPlan = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente16,
									'value' => 93413527,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 90,
									'fund_percentage' => 10,
									'investment_percentage' => 0,
									'functioning' => 0,
									'debt_service' => 84072174.3,
									'fund' => 9341352.7,
									'investment' => 0,
									'year' => 2,
									]);
									$idPlan30 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente17,
									'value' => 3466697779,
									'functioning_percentage' => 100,
									'debt_service_percentage' => 0,
									'fund_percentage' => 0,
									'investment_percentage' => 0,
									'functioning' => 3466697779,
									'debt_service' => 0,
									'fund' => 0,
									'investment' => 0,
									'year' => 2,
									]);
									$idPlan31 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_plans')->insert([
									'p_a_i_id' => $idpai1,
									'source_id' => $idFuente18,
									'value' => 11467155706,
									'functioning_percentage' => 0,
									'debt_service_percentage' => 0,
									'fund_percentage' => 0,
									'investment_percentage' => 100,
									'functioning' => 0,
									'debt_service' => 0,
									'fund' => 0,
									'investment' => 11467155706,
									'year' => 2,
									]);
									$idPlan32 = DB::getPdo()->lastInsertId();
									
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente1,
										'value' => 10541249680,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 0,
										'investment_percentage' => 100,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 0,
										'investment' => 10541249680,
										'year' => 3,
										]);
										$idPlan33 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente2,
										'value' => 400498000,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 10,
										'investment_percentage' => 90,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 40049800,
										'investment' => 360448200,
										'year' => 3,
										]);
										$idPlan34 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente3,
										'value' => 1250000000,
										'functioning_percentage' => 50,
										'debt_service_percentage' => 0,
										'fund_percentage' => 10,
										'investment_percentage' => 40,
										'functioning' => 625000000,
										'debt_service' => 0,
										'fund' => 125000000,
										'investment' => 500000000,
										'year' => 3,
										]);
										$idPlan35 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente4,
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
										$idPlan = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente5,
										'value' => 2793812698,
										'functioning_percentage' => 10,
										'debt_service_percentage' => 0,
										'fund_percentage' => 20,
										'investment_percentage' => 70,
										'functioning' => 279381269.8,
										'debt_service' => 0,
										'fund' => 558762539.6,
										'investment' => 1955668888.6,
										'year' => 3,
										]);
										$idPlan36 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente6,
										'value' => 277407032,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 0,
										'investment_percentage' => 100,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 0,
										'investment' => 277407032,
										'year' => 3,
										]);
										$idPlan37 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente7,
										'value' => 393044212,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 10,
										'investment_percentage' => 90,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 39304421.2,
										'investment' => 353739790.8,
										'year' => 3,
										]);
										$idPlan38 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente8,
										'value' => 162960951,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 10,
										'investment_percentage' => 90,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 16296095.1,
										'investment' => 146664855.9,
										'year' => 3,
										]);
										$idPlan39 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente9,
										'value' => 160000000,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 10,
										'investment_percentage' => 90,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 16000000,
										'investment' => 144000000,
										'year' => 3,
										]);
										$idPlan40 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente10,
										'value' => 2195429353,
										'functioning_percentage' => 29.98889,
										'debt_service_percentage' => 0,
										'fund_percentage' => 11.02759,
										'investment_percentage' => 58.98352,
										'functioning' => 658384893.698882,
										'debt_service' => 0,
										'fund' => 242102947.788493,
										'investment' => 1294941511.51263,
										'year' => 3,
										]);
										$idPlan41 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente11,
										'value' => 27468000,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 84.361,
										'fund_percentage' => 10,
										'investment_percentage' => 5.639,
										'functioning' => 0,
										'debt_service' => 23172279.48,
										'fund' => 2746800,
										'investment' => 1548920.52,
										'year' => 3,
										]);
										$idPlan42 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente12,
										'value' => 76272000,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 10,
										'investment_percentage' => 90,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 7627200,
										'investment' => 68644800,
										'year' => 3,
										]);
										$idPlan43 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente13,
										'value' => 1504289896,
										'functioning_percentage' => 30,
										'debt_service_percentage' => 0,
										'fund_percentage' => 10,
										'investment_percentage' => 60,
										'functioning' => 451286968.8,
										'debt_service' => 0,
										'fund' => 150428989.6,
										'investment' => 902573937.6,
										'year' => 3,
										]);
										$idPlan44 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente14,
										'value' => 1420613225,
										'functioning_percentage' => 0,
										'debt_service_percentage' => 0,
										'fund_percentage' => 0,
										'investment_percentage' => 100,
										'functioning' => 0,
										'debt_service' => 0,
										'fund' => 0,
										'investment' => 1420613225,
										'year' => 3,
										]);
										$idPlan45 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente15,
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
										$idPlan = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente16,
										'value' => 971584834,
										'functioning_percentage' => 34,
										'debt_service_percentage' => 0,
										'fund_percentage' => 0,
										'investment_percentage' => 66,
										'functioning' => 330338843.56,
										'debt_service' => 0,
										'fund' => 0,
										'investment' => 641245990.44,
										'year' => 3,
										]);
										$idPlan46 = DB::getPdo()->lastInsertId();
										
									DB::table('financial_plans')->insert([
										'p_a_i_id' => $idpai1,
										'source_id' => $idFuente17,
										'value' => 2894889000,
										'functioning_percentage' => 100,
										'debt_service_percentage' => 0,
										'fund_percentage' => 0,
										'investment_percentage' => 0,
										'functioning' => 2894889000,
										'debt_service' => 0,
										'fund' => 0,
										'investment' => 0,
										'year' => 3,
										]);
										$idPlan47 = DB::getPdo()->lastInsertId();
										
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
										$idPlan = DB::getPdo()->lastInsertId();
										
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente1,
											'value' => 12093813354,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 0,
											'investment_percentage' => 100,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 0,
											'investment' => 12093813354,
											'year' => 4,
											]);
											$idPlan48 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente3,
											'value' => 1463981250,
											'functioning_percentage' => 50,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 40,
											'functioning' => 731990625,
											'debt_service' => 0,
											'fund' => 146398125,
											'investment' => 585592500,
											'year' => 4,
											]);
											$idPlan49 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente4,
											'value' => 408000000,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 90,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 40800000,
											'investment' => 367200000,
											'year' => 4,
											]);
											$idPlan50 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente5,
											'value' => 5195071126,
											'functioning_percentage' => 10,
											'debt_service_percentage' => 0,
											'fund_percentage' => 20,
											'investment_percentage' => 70,
											'functioning' => 519507112.6,
											'debt_service' => 0,
											'fund' => 1039014225.2,
											'investment' => 3636549788.2,
											'year' => 4,
											]);
											$idPlan51 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente7,
											'value' => 462146366,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 90,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 46214636.6,
											'investment' => 415931729.4,
											'year' => 4,
											]);
											$idPlan52 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente8,
											'value' => 117349779,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 90,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 11734977.9,
											'investment' => 105614801.1,
											'year' => 4,
											]);
											$idPlan53 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente9,
											'value' => 254513520,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 90,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 25451352,
											'investment' => 229062168,
											'year' => 4,
											]);
											$idPlan54 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente10,
											'value' => 1303690234,
											'functioning_percentage' => 29.98889,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 60.01111,
											'functioning' => 390962230.215003,
											'debt_service' => 0,
											'fund' => 130369023.4,
											'investment' => 782358980.384997,
											'year' => 4,
											]);
											$idPlan55 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente11,
											'value' => 47392511,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 65.8205,
											'fund_percentage' => 10,
											'investment_percentage' => 24.1795,
											'functioning' => 0,
											'debt_service' => 31193987.702755,
											'fund' => 4739251.1,
											'investment' => 11459272.197245,
											'year' => 4,
											]);
											$idPlan56 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente12,
											'value' => 91621200,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 90,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 9162120,
											'investment' => 82459080,
											'year' => 4,
											]);
											$idPlan57 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente13,
											'value' => 2373239592,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 6.0811,
											'investment_percentage' => 93.9189,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 144319072.829112,
											'investment' => 2228920519.17089,
											'year' => 4,
											]);
											$idPlan58 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente14,
											'value' => 1005998690,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 0,
											'fund_percentage' => 10,
											'investment_percentage' => 90,
											'functioning' => 0,
											'debt_service' => 0,
											'fund' => 100599869,
											'investment' => 905398821,
											'year' => 4,
											]);
											$idPlan59 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente15,
											'value' => 27850061,
											'functioning_percentage' => 0,
											'debt_service_percentage' => 100,
											'fund_percentage' => 0,
											'investment_percentage' => 0,
											'functioning' => 0,
											'debt_service' => 27850061,
											'fund' => 0,
											'investment' => 0,
											'year' => 4,
											]);
											$idPlan60 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente16,
											'value' => 4077914558,
											'functioning_percentage' => 5.04255,
											'debt_service_percentage' => 22,
											'fund_percentage' => 10,
											'investment_percentage' => 62.95745,
											'functioning' => 205630880.544429,
											'debt_service' => 897141202.76,
											'fund' => 407791455.8,
											'investment' => 2567351018.89557,
											'year' => 4,
											]);
											$idPlan61 = DB::getPdo()->lastInsertId();
											
										DB::table('financial_plans')->insert([
											'p_a_i_id' => $idpai1,
											'source_id' => $idFuente17,
											'value' => 3161045129,
											'functioning_percentage' => 100,
											'debt_service_percentage' => 0,
											'fund_percentage' => 0,
											'investment_percentage' => 0,
											'functioning' => 3161045129,
											'debt_service' => 0,
											'fund' => 0,
											'investment' => 0,
											'year' => 4,
											]);
											$idPlan62 = DB::getPdo()->lastInsertId();
											
						DB::table('implementations')->insert([
                        'p_a_i_s_id'=>$idpai1,
                        ]);
                        $idImplementation1 = DB::getPdo()->lastInsertId();

											
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 9129187054,
												'financial_plans_id' => $idPlan1,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo1 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 404758191,
												'financial_plans_id' => $idPlan2,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo2 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 1750783776,
												'financial_plans_id' => $idPlan3,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo3 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 0,
												'financial_plans_id' => $idPlan,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 3070856135,
												'financial_plans_id' => $idPlan4,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo4 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 4221135582,
												'financial_plans_id' => $idPlan5,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo5 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 385226228,
												'financial_plans_id' => $idPlan6,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo6 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 75498862,
												'financial_plans_id' => $idPlan7,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo7 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 300716355,
												'financial_plans_id' => $idPlan8,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo8 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 451943628,
												'financial_plans_id' => $idPlan9,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo9 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 12807811,
												'financial_plans_id' => $idPlan10,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo10 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 125815643,
												'financial_plans_id' => $idPlan11,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo11 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 1133930157,
												'financial_plans_id' => $idPlan12,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo12 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 1260701915,
												'financial_plans_id' => $idPlan13,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo13 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 0,
												'financial_plans_id' => $idPlan,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 75956750,
												'financial_plans_id' => $idPlan14,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo14 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 2553712982,
												'financial_plans_id' => $idPlan15,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo15 = DB::getPdo()->lastInsertId();
												
											DB::table('fundraisings')->insert([
												'date' => '2016-12-31',
												'value' => 163899679,
												'financial_plans_id' => $idPlan16,
												'implementation_id' => $idImplementation1,
												]);
												$idRecaudo16 = DB::getPdo()->lastInsertId();
												
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 10698268577,
													'financial_plans_id' => $idPlan17,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo17 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 412053243,
													'financial_plans_id' => $idPlan18,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo18 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 1822412838,
													'financial_plans_id' => $idPlan19,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo19 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 0,
													'financial_plans_id' => $idPlan,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 2946523569,
													'financial_plans_id' => $idPlan20,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo20 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 187834451,
													'financial_plans_id' => $idPlan21,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo21 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 358681740,
													'financial_plans_id' => $idPlan22,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo22 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 66210176,
													'financial_plans_id' => $idPlan23,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo23 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 272794656,
													'financial_plans_id' => $idPlan24,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo24 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 744271307,
													'financial_plans_id' => $idPlan25,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo25 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 62065708,
													'financial_plans_id' => $idPlan26,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo26 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 98492132,
													'financial_plans_id' => $idPlan27,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo27 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 956337858,
													'financial_plans_id' => $idPlan28,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo28 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 443778576,
													'financial_plans_id' => $idPlan29,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo29 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 0,
													'financial_plans_id' => $idPlan,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 93413527,
													'financial_plans_id' => $idPlan30,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo30 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 3230311119,
													'financial_plans_id' => $idPlan31,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo31 = DB::getPdo()->lastInsertId();
													
												DB::table('fundraisings')->insert([
													'date' => '2017-12-31',
													'value' => 4560960094,
													'financial_plans_id' => $idPlan32,
													'implementation_id' => $idImplementation1,
													]);
													$idRecaudo32 = DB::getPdo()->lastInsertId();
													
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 11291161145,
														'financial_plans_id' => $idPlan33,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo33 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 387854927,
														'financial_plans_id' => $idPlan34,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo34 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 1793135878,
														'financial_plans_id' => $idPlan35,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo35 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 0,
														'financial_plans_id' => $idPlan,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 3242353336,
														'financial_plans_id' => $idPlan36,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo36 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 221907032,
														'financial_plans_id' => $idPlan37,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo37 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 486128793,
														'financial_plans_id' => $idPlan38,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo38 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 185160872,
														'financial_plans_id' => $idPlan39,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo39 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 198585294,
														'financial_plans_id' => $idPlan40,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo40 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 2404308600,
														'financial_plans_id' => $idPlan41,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo41 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 13458902,
														'financial_plans_id' => $idPlan42,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo42 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 91470061,
														'financial_plans_id' => $idPlan43,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo43 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 1504289896,
														'financial_plans_id' => $idPlan44,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo44 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 1213999877,
														'financial_plans_id' => $idPlan45,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo45 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 0,
														'financial_plans_id' => $idPlan,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 971584834,
														'financial_plans_id' => $idPlan46,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo46 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 2826633910,
														'financial_plans_id' => $idPlan47,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo47 = DB::getPdo()->lastInsertId();
														
													DB::table('fundraisings')->insert([
														'date' => '2018-12-31',
														'value' => 0,
														'financial_plans_id' => $idPlan,
														'implementation_id' => $idImplementation1,
														]);
														$idRecaudo = DB::getPdo()->lastInsertId();
														
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 13926777277,
															'financial_plans_id' => $idPlan48,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo48 = DB::getPdo()->lastInsertId();

														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 1657416216,
															'financial_plans_id' => $idPlan49,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo49 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 400000000,
															'financial_plans_id' => $idPlan50,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo50 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 7568049022,
															'financial_plans_id' => $idPlan51,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo51 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 687796539,
															'financial_plans_id' => $idPlan52,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo52 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 95572462,
															'financial_plans_id' => $idPlan53,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo53 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 322832807,
															'financial_plans_id' => $idPlan54,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo54 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 1598007998,
															'financial_plans_id' => $idPlan55,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo55 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 56258356,
															'financial_plans_id' => $idPlan56,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo56 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 128733293,
															'financial_plans_id' => $idPlan57,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo57 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 2373239592,
															'financial_plans_id' => $idPlan58,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo58 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 433153542,
															'financial_plans_id' => $idPlan59,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo59 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 27850061,
															'financial_plans_id' => $idPlan60,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo60 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 4077914558,
															'financial_plans_id' => $idPlan61,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo61 = DB::getPdo()->lastInsertId();
															
														DB::table('fundraisings')->insert([
															'date' => '2019-12-31',
															'value' => 3118837574,
															'financial_plans_id' => $idPlan62,
															'implementation_id' => $idImplementation1,
															]);
															$idRecaudo62 = DB::getPdo()->lastInsertId();
															
															DB::table('cost_sources')->insert([
																'father_id' => 2,
																'code' => '2.1.1',
																'name' => 'GASTOS DE PERSONAL',
																'description' => 'GASTOS DE PERSONAL',
																'functioning' => TRUE,
																'compensation' => FALSE,
																'debt_service' => FALSE,
																'group_id' => 34,
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
																'group_id' => 34,
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
																'group_id' => 34,
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
																'group_id' => 34,
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
																'group_id' => 34,
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
																'group_id' => 34,
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
																'group_id' => 34,
																]);
																$idFuenteGasto7 = DB::getPdo()->lastInsertId();
																
																
															DB::table('cost_sources')->insert([
																'father_id' => 19,
																'code' => '2.1.3.3.2',
																'name' => 'Conciliaciones',
																'description' => 'Conciliaciones',
																'functioning' => TRUE,
																'compensation' => FALSE,
																'debt_service' => FALSE,
																'group_id' => 34,
																]);
																$idFuenteGasto11 = DB::getPdo()->lastInsertId();
																
																
															DB::table('cost_sources')->insert([
																'father_id' => 29,
																'code' => '2.1.4.3.1',
																'name' => 'Cuota de fiscalización y auditaje',
																'description' => 'Cuota de fiscalización y auditaje',
																'functioning' => TRUE,
																'compensation' => FALSE,
																'debt_service' => FALSE,
																'group_id' => 34,
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
																'group_id' => 34,
																]);
																$idFuenteGasto4 = DB::getPdo()->lastInsertId();
																
																
																DB::table('cost_sources')->insert([
																'father_id' => 16,
																'code' => '2.1.3.2.1.3',
																'name' => 'Cuotas Partes de Pensión ',
																'description' => 'Cuotas Partes de Pensión ',
																'functioning' => TRUE,
																'compensation' => FALSE,
																'debt_service' => FALSE,
																'group_id' => 34,
																]);
																$idFuenteGasto8 = DB::getPdo()->lastInsertId();
																
															DB::table('cost_sources')->insert([
																'father_id' => 36,
																'code' => '2.2.1.1',
																'name' => 'Servicios de la deuda pública externa',
																'description' => 'Servicios de la deuda pública externa',
																'functioning' => FALSE,
																'compensation' => FALSE,
																'debt_service' => TRUE,
																'group_id' => 34,
																]);
																$idFuenteGasto12 = DB::getPdo()->lastInsertId();
																
																
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 364198386,
																	'value_comitted' => 364051042,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => TRUE,
																	'compensation' => FALSE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto1,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto1 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 7586339,
																	'value_comitted' => 7586339,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => TRUE,
																	'compensation' => FALSE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto2,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto2 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 767316481,
																	'value_comitted' => 746831887,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => TRUE,
																	'compensation' => FALSE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto3,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto3 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 66858456,
																	'value_comitted' => 62801970,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => TRUE,
																	'compensation' => FALSE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto4,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto4 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 27386806,
																	'value_comitted' => 27386806,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => TRUE,
																	'compensation' => FALSE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto5,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto5 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 939872984,
																	'value_comitted' => 916152222,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => FALSE,
																	'compensation' => TRUE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto6,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto6 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 26826030,
																	'value_comitted' => 26791630,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => TRUE,
																	'compensation' => FALSE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto9,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto7 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 48040379,
																	'value_comitted' => 38346000,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => TRUE,
																	'compensation' => FALSE,
																	'debt_service' => FALSE,
																	'cost_sources_id' => $idFuenteGasto11,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto8 = DB::getPdo()->lastInsertId();
																	
																	
																DB::table('financial_costs')->insert([
																	'year' => 1,
																	'value_bugeted' => 2928072314,
																	'value_comitted' => 2906120031,
																	'own' => TRUE,
																	'nation' => FALSE,
																	'royalties' => FALSE,
																	'funds' => FALSE,
																	'functioning' => FALSE,
																	'compensation' => FALSE,
																	'debt_service' => TRUE,
																	'cost_sources_id' => $idFuenteGasto12,
																	'p_a_i_id' => $idpai1,
																	'group_id' => 34,
																	]);
																	$idGasto9 = DB::getPdo()->lastInsertId();
																	
																	
																	DB::table('financial_costs')->insert([
																		'year' => 1,
																		'value_bugeted' => 1827350059,
																		'value_comitted' => 1825399395,
																		'own' => FALSE,
																		'nation' => TRUE,
																		'royalties' => FALSE,
																		'funds' => FALSE,
																		'functioning' => TRUE,
																		'compensation' => FALSE,
																		'debt_service' => FALSE,
																		'cost_sources_id' => $idFuenteGasto1,
																		'p_a_i_id' => $idpai1,
																		'group_id' => 34,
																		]);
																		$idGasto10 = DB::getPdo()->lastInsertId();
																		
																		
																	DB::table('financial_costs')->insert([
																		'year' => 1,
																		'value_bugeted' => 117945934,
																		'value_comitted' => 117945934,
																		'own' => FALSE,
																		'nation' => TRUE,
																		'royalties' => FALSE,
																		'funds' => FALSE,
																		'functioning' => TRUE,
																		'compensation' => FALSE,
																		'debt_service' => FALSE,
																		'cost_sources_id' => $idFuenteGasto2,
																		'p_a_i_id' => $idpai1,
																		'group_id' => 34,
																		]);
																		$idGasto11 = DB::getPdo()->lastInsertId();
																		
																		
																	DB::table('financial_costs')->insert([
																		'year' => 1,
																		'value_bugeted' => 550199705,
																		'value_comitted' => 548998705,
																		'own' => FALSE,
																		'nation' => TRUE,
																		'royalties' => FALSE,
																		'funds' => FALSE,
																		'functioning' => TRUE,
																		'compensation' => FALSE,
																		'debt_service' => FALSE,
																		'cost_sources_id' => $idFuenteGasto3,
																		'p_a_i_id' => $idpai1,
																		'group_id' => 34,
																		]);
																		$idGasto12 = DB::getPdo()->lastInsertId();
																		
																		
																	DB::table('financial_costs')->insert([
																		'year' => 1,
																		'value_bugeted' => 198758959,
																		'value_comitted' => 198758959,
																		'own' => FALSE,
																		'nation' => TRUE,
																		'royalties' => FALSE,
																		'funds' => FALSE,
																		'functioning' => TRUE,
																		'compensation' => FALSE,
																		'debt_service' => FALSE,
																		'cost_sources_id' => $idFuenteGasto4,
																		'p_a_i_id' => $idpai1,
																		'group_id' => 34,
																		]);
																		$idGasto13 = DB::getPdo()->lastInsertId();
																		
																		
																	DB::table('financial_costs')->insert([
																		'year' => 1,
																		'value_bugeted' => 6970590,
																		'value_comitted' => 6970590,
																		'own' => FALSE,
																		'nation' => TRUE,
																		'royalties' => FALSE,
																		'funds' => FALSE,
																		'functioning' => TRUE,
																		'compensation' => FALSE,
																		'debt_service' => FALSE,
																		'cost_sources_id' => $idFuenteGasto5,
																		'p_a_i_id' => $idpai1,
																		'group_id' => 34,
																		]);
																		$idGasto14 = DB::getPdo()->lastInsertId();
																		
																	DB::table('financial_costs')->insert([
																		'year' => 1,
																		'value_bugeted' => 123530760,
																		'value_comitted' => 123530760,
																		'own' => FALSE,
																		'nation' => TRUE,
																		'royalties' => FALSE,
																		'funds' => FALSE,
																		'functioning' => TRUE,
																		'compensation' => FALSE,
																		'debt_service' => FALSE,
																		'cost_sources_id' => $idFuenteGasto11,
																		'p_a_i_id' => $idpai1,
																		'group_id' => 34,
																		]);
																		$idGasto15 = DB::getPdo()->lastInsertId();
																		
																		
																		
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 342796449,
																			'value_comitted' => 342793449,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto1,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto16 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 31975337,
																			'value_comitted' => 31975337,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto2,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto17 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 757599423,
																			'value_comitted' => 739574091,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto3,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto18 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 49781000,
																			'value_comitted' => 34640587,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto4,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto19 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 14681801,
																			'value_comitted' => 14681801,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto5,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto20 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 903501599,
																			'value_comitted' => 881234747,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => FALSE,
																			'compensation' => TRUE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto6,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto21 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 3984358,
																			'value_comitted' => 3984358,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto8,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto22 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 37504668,
																			'value_comitted' => 37504668,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto9,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto23 = DB::getPdo()->lastInsertId();
																			
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 70810696,
																			'value_comitted' => 67681974,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => TRUE,
																			'compensation' => FALSE,
																			'debt_service' => FALSE,
																			'cost_sources_id' => $idFuenteGasto11,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto24 = DB::getPdo()->lastInsertId();
																			
																			
																		DB::table('financial_costs')->insert([
																			'year' => 2,
																			'value_bugeted' => 1041604106,
																			'value_comitted' => 1009589870,
																			'own' => TRUE,
																			'nation' => FALSE,
																			'royalties' => FALSE,
																			'funds' => FALSE,
																			'functioning' => FALSE,
																			'compensation' => FALSE,
																			'debt_service' => TRUE,
																			'cost_sources_id' => $idFuenteGasto12,
																			'p_a_i_id' => $idpai1,
																			'group_id' => 34,
																			]);
																			$idGasto25 = DB::getPdo()->lastInsertId();
																			
																			
																			DB::table('financial_costs')->insert([
																				'year' => 2,
																				'value_bugeted' => 1948613854,
																				'value_comitted' => 1946005491,
																				'own' => FALSE,
																				'nation' => TRUE,
																				'royalties' => FALSE,
																				'funds' => FALSE,
																				'functioning' => TRUE,
																				'compensation' => FALSE,
																				'debt_service' => FALSE,
																				'cost_sources_id' => $idFuenteGasto1,
																				'p_a_i_id' => $idpai1,
																				'group_id' => 34,
																				]);
																				$idGasto26 = DB::getPdo()->lastInsertId();
																				
																				
																			DB::table('financial_costs')->insert([
																				'year' => 2,
																				'value_bugeted' => 99294803,
																				'value_comitted' => 99294803,
																				'own' => FALSE,
																				'nation' => TRUE,
																				'royalties' => FALSE,
																				'funds' => FALSE,
																				'functioning' => TRUE,
																				'compensation' => FALSE,
																				'debt_service' => FALSE,
																				'cost_sources_id' => $idFuenteGasto2,
																				'p_a_i_id' => $idpai1,
																				'group_id' => 34,
																				]);
																				$idGasto27 = DB::getPdo()->lastInsertId();
																				
																				
																			DB::table('financial_costs')->insert([
																				'year' => 2,
																				'value_bugeted' => 603992917,
																				'value_comitted' => 600917687,
																				'own' => FALSE,
																				'nation' => TRUE,
																				'royalties' => FALSE,
																				'funds' => FALSE,
																				'functioning' => TRUE,
																				'compensation' => FALSE,
																				'debt_service' => FALSE,
																				'cost_sources_id' => $idFuenteGasto3,
																				'p_a_i_id' => $idpai1,
																				'group_id' => 34,
																				]);
																				$idGasto28 = DB::getPdo()->lastInsertId();
																				
																				
																			DB::table('financial_costs')->insert([
																				'year' => 2,
																				'value_bugeted' => 621030520,
																				'value_comitted' => 468260267,
																				'own' => FALSE,
																				'nation' => TRUE,
																				'royalties' => FALSE,
																				'funds' => FALSE,
																				'functioning' => TRUE,
																				'compensation' => FALSE,
																				'debt_service' => FALSE,
																				'cost_sources_id' => $idFuenteGasto4,
																				'p_a_i_id' => $idpai1,
																				'group_id' => 34,
																				]);
																				$idGasto29 = DB::getPdo()->lastInsertId();
																				
																				
																			DB::table('financial_costs')->insert([
																				'year' => 2,
																				'value_bugeted' => 6971000,
																				'value_comitted' => 6971000,
																				'own' => FALSE,
																				'nation' => TRUE,
																				'royalties' => FALSE,
																				'funds' => FALSE,
																				'functioning' => TRUE,
																				'compensation' => FALSE,
																				'debt_service' => FALSE,
																				'cost_sources_id' => $idFuenteGasto5,
																				'p_a_i_id' => $idpai1,
																				'group_id' => 34,
																				]);
																				$idGasto30 = DB::getPdo()->lastInsertId();
																				
																																								
																			DB::table('financial_costs')->insert([
																				'year' => 2,
																				'value_bugeted' => 186794685,
																				'value_comitted' => 186794685,
																				'own' => FALSE,
																				'nation' => TRUE,
																				'royalties' => FALSE,
																				'funds' => FALSE,
																				'functioning' => TRUE,
																				'compensation' => FALSE,
																				'debt_service' => FALSE,
																				'cost_sources_id' => $idFuenteGasto11,
																				'p_a_i_id' => $idpai1,
																				'group_id' => 34,
																				]);
																				$idGasto31 = DB::getPdo()->lastInsertId();
																				
																				
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 473043077,
																					'value_comitted' => 444546815,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto1,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto32 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 55830611,
																					'value_comitted' => 53823068,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto2,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto33 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 891401370,
																					'value_comitted' => 858544558,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto3,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto34 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 98158251,
																					'value_comitted' => 68999474,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto4,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto35 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 19764625,
																					'value_comitted' => 19764625,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto5,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto36 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 1198318696,
																					'value_comitted' => 1110788510,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => FALSE,
																					'compensation' => TRUE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto6,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto37 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 33509689,
																					'value_comitted' => 33509689,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto7,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto38 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 4147318,
																					'value_comitted' => 4147318,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto8,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto39 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 68604775,
																					'value_comitted' => 68604775,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto9,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto40 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 118781000,
																					'value_comitted' => 118781000,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto10,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto41 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 581151260,
																					'value_comitted' => 580490751,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => TRUE,
																					'compensation' => FALSE,
																					'debt_service' => FALSE,
																					'cost_sources_id' => $idFuenteGasto11,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto42 = DB::getPdo()->lastInsertId();
																					
																					
																				DB::table('financial_costs')->insert([
																					'year' => 3,
																					'value_bugeted' => 23172168,
																					'value_comitted' => 0,
																					'own' => TRUE,
																					'nation' => FALSE,
																					'royalties' => FALSE,
																					'funds' => FALSE,
																					'functioning' => FALSE,
																					'compensation' => FALSE,
																					'debt_service' => TRUE,
																					'cost_sources_id' => $idFuenteGasto12,
																					'p_a_i_id' => $idpai1,
																					'group_id' => 34,
																					]);
																					$idGasto43 = DB::getPdo()->lastInsertId();
																					
																					
																					DB::table('financial_costs')->insert([
																						'year' => 3,
																						'value_bugeted' => 2047604000,
																						'value_comitted' => 2042193301,
																						'own' => FALSE,
																						'nation' => TRUE,
																						'royalties' => FALSE,
																						'funds' => FALSE,
																						'functioning' => TRUE,
																						'compensation' => FALSE,
																						'debt_service' => FALSE,
																						'cost_sources_id' => $idFuenteGasto1,
																						'p_a_i_id' => $idpai1,
																						'group_id' => 34,
																						]);
																						$idGasto44 = DB::getPdo()->lastInsertId();
																						
																						
																					DB::table('financial_costs')->insert([
																						'year' => 3,
																						'value_bugeted' => 65353217,
																						'value_comitted' => 64635100,
																						'own' => FALSE,
																						'nation' => TRUE,
																						'royalties' => FALSE,
																						'funds' => FALSE,
																						'functioning' => TRUE,
																						'compensation' => FALSE,
																						'debt_service' => FALSE,
																						'cost_sources_id' => $idFuenteGasto2,
																						'p_a_i_id' => $idpai1,
																						'group_id' => 34,
																						]);
																						$idGasto45 = DB::getPdo()->lastInsertId();
																						
																						
																					DB::table('financial_costs')->insert([
																						'year' => 3,
																						'value_bugeted' => 561788783,
																						'value_comitted' => 557945225,
																						'own' => FALSE,
																						'nation' => TRUE,
																						'royalties' => FALSE,
																						'funds' => FALSE,
																						'functioning' => TRUE,
																						'compensation' => FALSE,
																						'debt_service' => FALSE,
																						'cost_sources_id' => $idFuenteGasto3,
																						'p_a_i_id' => $idpai1,
																						'group_id' => 34,
																						]);
																						$idGasto46 = DB::getPdo()->lastInsertId();
																						
																						
																					DB::table('financial_costs')->insert([
																						'year' => 3,
																						'value_bugeted' => 212962000,
																						'value_comitted' => 212692000,
																						'own' => FALSE,
																						'nation' => TRUE,
																						'royalties' => FALSE,
																						'funds' => FALSE,
																						'functioning' => TRUE,
																						'compensation' => FALSE,
																						'debt_service' => FALSE,
																						'cost_sources_id' => $idFuenteGasto4,
																						'p_a_i_id' => $idpai1,
																						'group_id' => 34,
																						]);
																						$idGasto47 = DB::getPdo()->lastInsertId();
																						
																						
																					DB::table('financial_costs')->insert([
																						'year' => 3,
																						'value_bugeted' => 7181000,
																						'value_comitted' => 7181000,
																						'own' => FALSE,
																						'nation' => TRUE,
																						'royalties' => FALSE,
																						'funds' => FALSE,
																						'functioning' => TRUE,
																						'compensation' => FALSE,
																						'debt_service' => FALSE,
																						'cost_sources_id' => $idFuenteGasto5,
																						'p_a_i_id' => $idpai1,
																						'group_id' => 34,
																						]);
																						$idGasto48 = DB::getPdo()->lastInsertId();
																						
																					
																						
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 262958119,
																							'value_comitted' => 218699925,
																							'value_paid' => 218699925,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto1,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto49 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 46479106,
																							'value_comitted' => 44679531,
																							'value_paid' => 36646681,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto2,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto50 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 1259614338,
																							'value_comitted' => 1196744733,
																							'value_paid' => 1092030680,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto3,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto51 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 127417232,
																							'value_comitted' => 114937142,
																							'value_paid' => 114937142,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto4,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto52 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 13400378,
																							'value_comitted' => 7069200,
																							'value_paid' => 7069200,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto5,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto53 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 2106594222,
																							'value_comitted' => 2014563948,
																							'value_paid' => 1496349675,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => FALSE,
																							'compensation' => TRUE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto6,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto54 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 64645425,
																							'value_comitted' => 64645424,
																							'value_paid' => 64645424,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto7,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto55 = DB::getPdo()->lastInsertId();
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 46627110,
																							'value_comitted' => 46593210,
																							'value_paid' => 46593210,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto9,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto56 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 13673000,
																							'value_comitted' => 13673000,
																							'value_paid' => 13673000,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto10,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto57 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 13276079,
																							'value_comitted' => 11379000,
																							'value_paid' => 11379000,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => TRUE,
																							'compensation' => FALSE,
																							'debt_service' => FALSE,
																							'cost_sources_id' => $idFuenteGasto11,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto58 = DB::getPdo()->lastInsertId();
																							
																							
																						DB::table('financial_costs')->insert([
																							'year' => 4,
																							'value_bugeted' => 956185255,
																							'value_comitted' => 951950054,
																							'value_paid' => 951950054,
																							'own' => TRUE,
																							'nation' => FALSE,
																							'royalties' => FALSE,
																							'funds' => FALSE,
																							'functioning' => FALSE,
																							'compensation' => FALSE,
																							'debt_service' => TRUE,
																							'cost_sources_id' => $idFuenteGasto12,
																							'p_a_i_id' => $idpai1,
																							'group_id' => 34,
																							]);
																							$idGasto59 = DB::getPdo()->lastInsertId();
																							
																							
																							DB::table('financial_costs')->insert([
																								'year' => 4,
																								'value_bugeted' => 2150002180,
																								'value_comitted' => 2143528707,
																								'value_paid' => 2143528707,
																								'own' => FALSE,
																								'nation' => TRUE,
																								'royalties' => FALSE,
																								'funds' => FALSE,
																								'functioning' => TRUE,
																								'compensation' => FALSE,
																								'debt_service' => FALSE,
																								'cost_sources_id' => $idFuenteGasto1,
																								'p_a_i_id' => $idpai1,
																								'group_id' => 34,
																								]);
																								$idGasto60 = DB::getPdo()->lastInsertId();
																								
																								
																							DB::table('financial_costs')->insert([
																								'year' => 4,
																								'value_bugeted' => 63757591,
																								'value_comitted' => 57322948,
																								'value_paid' => 54064253,
																								'own' => FALSE,
																								'nation' => TRUE,
																								'royalties' => FALSE,
																								'funds' => FALSE,
																								'functioning' => TRUE,
																								'compensation' => FALSE,
																								'debt_service' => FALSE,
																								'cost_sources_id' => $idFuenteGasto2,
																								'p_a_i_id' => $idpai1,
																								'group_id' => 34,
																								]);
																								$idGasto61 = DB::getPdo()->lastInsertId();
																								
																								
																							DB::table('financial_costs')->insert([
																								'year' => 4,
																								'value_bugeted' => 563384409,
																								'value_comitted' => 563013077,
																								'value_paid' => 541720647,
																								'own' => FALSE,
																								'nation' => TRUE,
																								'royalties' => FALSE,
																								'funds' => FALSE,
																								'functioning' => TRUE,
																								'compensation' => FALSE,
																								'debt_service' => FALSE,
																								'cost_sources_id' => $idFuenteGasto3,
																								'p_a_i_id' => $idpai1,
																								'group_id' => 34,
																								]);
																								$idGasto62 = DB::getPdo()->lastInsertId();
																								
																								
																							DB::table('financial_costs')->insert([
																								'year' => 4,
																								'value_bugeted' => 304132124,
																								'value_comitted' => 304132124,
																								'value_paid' => 304132124,
																								'own' => FALSE,
																								'nation' => TRUE,
																								'royalties' => FALSE,
																								'funds' => FALSE,
																								'functioning' => TRUE,
																								'compensation' => FALSE,
																								'debt_service' => FALSE,
																								'cost_sources_id' => $idFuenteGasto4,
																								'p_a_i_id' => $idpai1,
																								'group_id' => 34,
																								]);
																								$idGasto63 = DB::getPdo()->lastInsertId();
																								
																								
																							DB::table('financial_costs')->insert([
																								'year' => 4,
																								'value_bugeted' => 18396000,
																								'value_comitted' => 18396000,
																								'value_paid' => 18396000,
																								'own' => FALSE,
																								'nation' => TRUE,
																								'royalties' => FALSE,
																								'funds' => FALSE,
																								'functioning' => TRUE,
																								'compensation' => FALSE,
																								'debt_service' => FALSE,
																								'cost_sources_id' => $idFuenteGasto5,
																								'p_a_i_id' => $idpai1,
																								'group_id' => 34,
																								]);
																								$idGasto64 = DB::getPdo()->lastInsertId();
																								
																								
																							DB::table('financial_costs')->insert([
																								'year' => 4,
																								'value_bugeted' => 61372825,
																								'value_comitted' => 56995843,
																								'value_paid' => 56995843,
																								'own' => FALSE,
																								'nation' => TRUE,
																								'royalties' => FALSE,
																								'funds' => FALSE,
																								'functioning' => TRUE,
																								'compensation' => FALSE,
																								'debt_service' => FALSE,
																								'cost_sources_id' => $idFuenteGasto11,
																								'p_a_i_id' => $idpai1,
																								'group_id' => 34,
																								]);
																								$idGasto65 = DB::getPdo()->lastInsertId();

	

            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity6,
              'source_id' =>$idPlan16,
              'value' => 1714805680,
              'goal' => 0,
              'evidence_balance' => 1714805680,
              'age' => 1,
              ]);
              $idactivitySource1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity7,
              'source_id' =>$idPlan16,
              'value' => 80000000,
              'goal' => 0,
              'evidence_balance' => 80000000,
              'age' => 1,
              ]);
              $idactivitySource2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity12,
              'source_id' =>$idPlan16,
              'value' => 510000000,
              'goal' => 0,
              'evidence_balance' => 510000000,
              'age' => 1,
              ]);
              $idactivitySource3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity15,
              'source_id' =>$idPlan16,
              'value' => 180000000,
              'goal' => 0,
              'evidence_balance' => 180000000,
              'age' => 1,
              ]);
              $idactivitySource4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity19,
              'source_id' =>$idPlan16,
              'value' => 4063374342,
              'goal' => 0,
              'evidence_balance' => 4063374342,
              'age' => 1,
              ]);
              $idactivitySource5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity20,
              'source_id' =>$idPlan16,
              'value' => 400000000,
              'goal' => 0,
              'evidence_balance' => 400000000,
              'age' => 1,
              ]);
              $idactivitySource6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity29,
              'source_id' =>$idPlan16,
              'value' => 130000000,
              'goal' => 0,
              'evidence_balance' => 130000000,
              'age' => 1,
              ]);
              $idactivitySource7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity39,
              'source_id' =>$idPlan16,
              'value' => 522362000,
              'goal' => 0,
              'evidence_balance' => 522362000,
              'age' => 1,
              ]);
              $idactivitySource8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity44,
              'source_id' =>$idPlan16,
              'value' => 10275871203,
              'goal' => 0,
              'evidence_balance' => 10275871203,
              'age' => 1,
              ]);
              $idactivitySource9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity48,
              'source_id' =>$idPlan16,
              'value' => 120000000,
              'goal' => 0,
              'evidence_balance' => 120000000,
              'age' => 1,
              ]);
              $idactivitySource10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity55,
              'source_id' =>$idPlan16,
              'value' => 20250230955,
              'goal' => 0,
              'evidence_balance' => 20250230955,
              'age' => 1,
              ]);
              $idactivitySource11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity61,
              'source_id' =>$idPlan1,
              'value' => 60000000,
              'goal' => 0,
              'evidence_balance' => 60000000,
              'age' => 1,
              ]);
              $idactivitySource12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity70,
              'source_id' =>$idPlan1,
              'value' => 1147205251,
              'goal' => 0,
              'evidence_balance' => 1147205251,
              'age' => 1,
              ]);
              $idactivitySource13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity71,
              'source_id' =>$idPlan1,
              'value' => 1750000000,
              'goal' => 0,
              'evidence_balance' => 1750000000,
              'age' => 1,
              ]);
              $idactivitySource14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity77,
              'source_id' =>$idPlan1,
              'value' => 4245211225,
              'goal' => 0,
              'evidence_balance' => 4245211225,
              'age' => 1,
              ]);
              $idactivitySource15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity78,
              'source_id' =>$idPlan1,
              'value' => 50000000,
              'goal' => 0,
              'evidence_balance' => 50000000,
              'age' => 1,
              ]);
              $idactivitySource16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity83,
              'source_id' =>$idPlan1,
              'value' => 124999998,
              'goal' => 0,
              'evidence_balance' => 124999998,
              'age' => 1,
              ]);
              $idactivitySource17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity93,
              'source_id' =>$idPlan1,
              'value' => 908940099,
              'goal' => 0,
              'evidence_balance' => 908940099,
              'age' => 1,
              ]);
              $idactivitySource18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity98,
              'source_id' =>$idPlan1,
              'value' => 608076277,
              'goal' => 0,
              'evidence_balance' => 608076277,
              'age' => 1,
              ]);
              $idactivitySource19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity101,
              'source_id' =>$idPlan4,
              'value' => 210000000,
              'goal' => 0,
              'evidence_balance' => 210000000,
              'age' => 1,
              ]);
              $idactivitySource20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity102,
              'source_id' =>$idPlan4,
              'value' => 34891816,
              'goal' => 0,
              'evidence_balance' => 34891816,
              'age' => 1,
              ]);
              $idactivitySource21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity103,
              'source_id' =>$idPlan4,
              'value' => 150000000,
              'goal' => 0,
              'evidence_balance' => 150000000,
              'age' => 1,
              ]);
              $idactivitySource22 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity55,
                'source_id' =>$idPlan5,
                'value' => 11682877289,
                'goal' => 0,
                'evidence_balance' => 11682877289,
                'age' => 1,
                ]);
                $idactivitySource23 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity98,
                'source_id' =>$idPlan4,
                'value' => 275815024,
                'goal' => 0,
                'evidence_balance' => 275815024,
                'age' => 1,
                ]);
                $idactivitySource24 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity55,
                  'source_id' =>$idPlan1,
                  'value' => 13934130,
                  'goal' => 0,
                  'evidence_balance' => 13934130,
                  'age' => 1,
                  ]);
                  $idactivitySource25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia6,
                    'activity_source_id' =>$idactivitySource1,
                    'value' => 1714805680,
                    ]);
                    $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia7,
                    'activity_source_id' =>$idactivitySource2,
                    'value' => 80000000,
                    ]);
                    $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia12,
                    'activity_source_id' =>$idactivitySource3,
                    'value' => 510000000,
                    ]);
                    $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia15,
                    'activity_source_id' =>$idactivitySource4,
                    'value' => 180000000,
                    ]);
                    $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia19,
                    'activity_source_id' =>$idactivitySource5,
                    'value' => 4063138466,
                    ]);
                    $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia20,
                    'activity_source_id' =>$idactivitySource6,
                    'value' => 400000000,
                    ]);
                    $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia29,
                    'activity_source_id' =>$idactivitySource7,
                    'value' => 130000000,
                    ]);
                    $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia39,
                    'activity_source_id' =>$idactivitySource8,
                    'value' => 522362000,
                    ]);
                    $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia44,
                    'activity_source_id' =>$idactivitySource9,
                    'value' => 10275454024,
                    ]);
                    $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia48,
                    'activity_source_id' =>$idactivitySource10,
                    'value' => 120000000,
                    ]);
                    $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia55,
                    'activity_source_id' =>$idactivitySource11,
                    'value' => 20250230955,
                    ]);
                    $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia61,
                    'activity_source_id' =>$idactivitySource12,
                    'value' => 60000000,
                    ]);
                    $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia70,
                    'activity_source_id' =>$idactivitySource13,
                    'value' => 1147205251,
                    ]);
                    $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia71,
                    'activity_source_id' =>$idactivitySource14,
                    'value' => 1750000000,
                    ]);
                    $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia77,
                    'activity_source_id' =>$idactivitySource15,
                    'value' => 4244864251,
                    ]);
                    $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia78,
                    'activity_source_id' =>$idactivitySource16,
                    'value' => 50000000,
                    ]);
                    $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia83,
                    'activity_source_id' =>$idactivitySource17,
                    'value' => 124999998,
                    ]);
                    $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia93,
                    'activity_source_id' =>$idactivitySource18,
                    'value' => 908940000,
                    ]);
                    $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia98,
                    'activity_source_id' =>$idactivitySource19,
                    'value' => 608076277,
                    ]);
                    $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia101,
                    'activity_source_id' =>$idactivitySource20,
                    'value' => 210000000,
                    ]);
                    $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia102,
                    'activity_source_id' =>$idactivitySource21,
                    'value' => 34891816,
                    ]);
                    $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('evidence_financial')->insert([
                    'evidence_id' => $idevidencia103,
                    'activity_source_id' =>$idactivitySource22,
                    'value' => 150000000,
                    ]);
                    $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia55,
                      'activity_source_id' =>$idactivitySource23,
                      'value' => 11682877289,
                      ]);
                      $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia98,
                      'activity_source_id' =>$idactivitySource24,
                      'value' => 272828644,
                      ]);
                      $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia55,
                        'activity_source_id' =>$idactivitySource25,
                        'value' => 13857801,
                        ]);
                        $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity6,
                          'source_id' =>$idPlan32,
                          'value' => 193449576,
                          'goal' => 0,
                          'evidence_balance' => 193449576,
                          'age' => 2,
                          ]);
                          $idactivitySource26 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity7,
                          'source_id' =>$idPlan32,
                          'value' => 76400000,
                          'goal' => 0,
                          'evidence_balance' => 76400000,
                          'age' => 2,
                          ]);
                          $idactivitySource27 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity12,
                          'source_id' =>$idPlan32,
                          'value' => 457380000,
                          'goal' => 0,
                          'evidence_balance' => 457380000,
                          'age' => 2,
                          ]);
                          $idactivitySource28 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity15,
                          'source_id' =>$idPlan32,
                          'value' => 100800000,
                          'goal' => 0,
                          'evidence_balance' => 100800000,
                          'age' => 2,
                          ]);
                          $idactivitySource29 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity19,
                          'source_id' =>$idPlan32,
                          'value' => 10639126130,
                          'goal' => 0,
                          'evidence_balance' => 10639126130,
                          'age' => 2,
                          ]);
                          $idactivitySource30 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity20,
                          'source_id' =>$idPlan17,
                          'value' => 558510000,
                          'goal' => 0,
                          'evidence_balance' => 558510000,
                          'age' => 2,
                          ]);
                          $idactivitySource31 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity29,
                          'source_id' =>$idPlan17,
                          'value' => 1619266200,
                          'goal' => 0,
                          'evidence_balance' => 1619266200,
                          'age' => 2,
                          ]);
                          $idactivitySource32 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity32,
                          'source_id' =>$idPlan17,
                          'value' => 564355915,
                          'goal' => 0,
                          'evidence_balance' => 564355915,
                          'age' => 2,
                          ]);
                          $idactivitySource33 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity39,
                          'source_id' =>$idPlan17,
                          'value' => 544030000,
                          'goal' => 0,
                          'evidence_balance' => 544030000,
                          'age' => 2,
                          ]);
                          $idactivitySource34 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity44,
                          'source_id' =>$idPlan17,
                          'value' => 2355269976,
                          'goal' => 0,
                          'evidence_balance' => 2355269976,
                          'age' => 2,
                          ]);
                          $idactivitySource35 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity48,
                          'source_id' =>$idPlan17,
                          'value' => 104000000,
                          'goal' => 0,
                          'evidence_balance' => 104000000,
                          'age' => 2,
                          ]);
                          $idactivitySource36 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity55,
                          'source_id' =>$idPlan17,
                          'value' => 630037169,
                          'goal' => 0,
                          'evidence_balance' => 630037169,
                          'age' => 2,
                          ]);
                          $idactivitySource37 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity61,
                          'source_id' =>$idPlan17,
                          'value' => 467431336,
                          'goal' => 0,
                          'evidence_balance' => 467431336,
                          'age' => 2,
                          ]);
                          $idactivitySource38 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity70,
                          'source_id' =>$idPlan17,
                          'value' => 840541887,
                          'goal' => 0,
                          'evidence_balance' => 840541887,
                          'age' => 2,
                          ]);
                          $idactivitySource39 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity77,
                          'source_id' =>$idPlan17,
                          'value' => 283518633,
                          'goal' => 0,
                          'evidence_balance' => 283518633,
                          'age' => 2,
                          ]);
                          $idactivitySource41 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity78,
                          'source_id' =>$idPlan21,
                          'value' => 80000000,
                          'goal' => 0,
                          'evidence_balance' => 80000000,
                          'age' => 2,
                          ]);
                          $idactivitySource42 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity83,
                          'source_id' =>$idPlan21,
                          'value' => 352721080,
                          'goal' => 0,
                          'evidence_balance' => 352721080,
                          'age' => 2,
                          ]);
                          $idactivitySource43 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity93,
                          'source_id' =>$idPlan21,
                          'value' => 1008205000,
                          'goal' => 0,
                          'evidence_balance' => 1008205000,
                          'age' => 2,
                          ]);
                          $idactivitySource44 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity98,
                          'source_id' =>$idPlan21,
                          'value' => 272064598,
                          'goal' => 0,
                          'evidence_balance' => 272064598,
                          'age' => 2,
                          ]);
                          $idactivitySource45 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity101,
                          'source_id' =>$idPlan20,
                          'value' => 158760000,
                          'goal' => 0,
                          'evidence_balance' => 158760000,
                          'age' => 2,
                          ]);
                          $idactivitySource46 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity102,
                          'source_id' =>$idPlan20,
                          'value' => 70938739,
                          'goal' => 0,
                          'evidence_balance' => 70938739,
                          'age' => 2,
                          ]);
                          $idactivitySource47 = DB::getPdo()->lastInsertId();
                          
                          
                          
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity103,
                          'source_id' =>$idPlan20,
                          'value' => 162000000,
                          'goal' => 0,
                          'evidence_balance' => 162000000,
                          'age' => 2,
                          ]);
                          $idactivitySource48 = DB::getPdo()->lastInsertId();
                          
                          
                          
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity19,
                            'source_id' =>$idPlan17,
                            'value' => 1883066245,
                            'goal' => 0,
                            'evidence_balance' => 1883066245,
                            'age' => 2,
                            ]);
                            $idactivitySource49 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity77,
                            'source_id' =>$idPlan21,
                            'value' => 41481367,
                            'goal' => 0,
                            'evidence_balance' => 41481367,
                            'age' => 2,
                            ]);
                            $idactivitySource50 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('activity_sources')->insert([
                            'activity_id' => $idactivity98,
                            'source_id' =>$idPlan20,
                            'value' => 35507117,
                            'goal' => 0,
                            'evidence_balance' => 35507117,
                            'age' => 2,
                            ]);
                            $idactivitySource51 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia109,
                              'activity_source_id' =>$idactivitySource26,
                              'value' => 193449576,
                              ]);
                              $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia110,
                              'activity_source_id' =>$idactivitySource27,
                              'value' => 76400000,
                              ]);
                              $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia115,
                              'activity_source_id' =>$idactivitySource28,
                              'value' => 457380000,
                              ]);
                              $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia118,
                              'activity_source_id' =>$idactivitySource29,
                              'value' => 100800000,
                              ]);
                              $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia122,
                              'activity_source_id' =>$idactivitySource30,
                              'value' => 10639126130,
                              ]);
                              $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia123,
                              'activity_source_id' =>$idactivitySource31,
                              'value' => 558510000,
                              ]);
                              $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia132,
                              'activity_source_id' =>$idactivitySource32,
                              'value' => 1619266200,
                              ]);
                              $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia135,
                              'activity_source_id' =>$idactivitySource33,
                              'value' => 504399781,
                              ]);
                              $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia142,
                              'activity_source_id' =>$idactivitySource34,
                              'value' => 544030000,
                              ]);
                              $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia147,
                              'activity_source_id' =>$idactivitySource35,
                              'value' => 2340969976,
                              ]);
                              $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia151,
                              'activity_source_id' =>$idactivitySource36,
                              'value' => 104000000,
                              ]);
                              $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia158,
                              'activity_source_id' =>$idactivitySource37,
                              'value' => 408037169,
                              ]);
                              $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia164,
                              'activity_source_id' =>$idactivitySource38,
                              'value' => 412247794,
                              ]);
                              $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia173,
                              'activity_source_id' =>$idactivitySource39,
                              'value' => 840541887,
                              ]);
                              $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia180,
                              'activity_source_id' =>$idactivitySource41,
                              'value' => 283518633,
                              ]);
                              $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia181,
                              'activity_source_id' =>$idactivitySource42,
                              'value' => 80000000,
                              ]);
                              $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia186,
                              'activity_source_id' =>$idactivitySource43,
                              'value' => 352721080,
                              ]);
                              $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia196,
                              'activity_source_id' =>$idactivitySource44,
                              'value' => 1008205000,
                              ]);
                              $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia201,
                              'activity_source_id' =>$idactivitySource45,
                              'value' => 272064598,
                              ]);
                              $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia204,
                              'activity_source_id' =>$idactivitySource46,
                              'value' => 158760000,
                              ]);
                              $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia205,
                              'activity_source_id' =>$idactivitySource47,
                              'value' => 70938739,
                              ]);
                              $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                              
                              
                              
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia206,
                              'activity_source_id' =>$idactivitySource48,
                              'value' => 162000000,
                              ]);
                              $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                              
                              
                              
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia122,
                                'activity_source_id' =>$idactivitySource49,
                                'value' => 1644727138,
                                ]);
                                $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia180,
                                'activity_source_id' =>$idactivitySource50,
                                'value' => 41481367,
                                ]);
                                $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('evidence_financial')->insert([
                                'evidence_id' => $idevidencia201,
                                'activity_source_id' =>$idactivitySource51,
                                'value' => 35507117,
                                ]);
                                $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity6,
                                  'source_id' =>$idPlan33,
                                  'value' => 247316000,
                                  'goal' => 0,
                                  'evidence_balance' => 247316000,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource52 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity7,
                                  'source_id' =>$idPlan33,
                                  'value' => 110480967,
                                  'goal' => 0,
                                  'evidence_balance' => 110480967,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource53 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity12,
                                  'source_id' =>$idPlan33,
                                  'value' => 744858617,
                                  'goal' => 0,
                                  'evidence_balance' => 744858617,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource54 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity15,
                                  'source_id' =>$idPlan33,
                                  'value' => 186436632,
                                  'goal' => 0,
                                  'evidence_balance' => 186436632,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource55 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity19,
                                  'source_id' =>$idPlan33,
                                  'value' => 4866607685,
                                  'goal' => 0,
                                  'evidence_balance' => 4866607685,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource56 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity20,
                                  'source_id' =>$idPlan33,
                                  'value' => 621485959,
                                  'goal' => 0,
                                  'evidence_balance' => 621485959,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource57 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity29,
                                  'source_id' =>$idPlan33,
                                  'value' => 177485628,
                                  'goal' => 0,
                                  'evidence_balance' => 177485628,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource58 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity32,
                                  'source_id' =>$idPlan33,
                                  'value' => 402867484,
                                  'goal' => 0,
                                  'evidence_balance' => 402867484,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource59 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity39,
                                  'source_id' =>$idPlan33,
                                  'value' => 878566589,
                                  'goal' => 0,
                                  'evidence_balance' => 878566589,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource60 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity44,
                                  'source_id' =>$idPlan33,
                                  'value' => 534446723,
                                  'goal' => 0,
                                  'evidence_balance' => 534446723,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource61 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity48,
                                  'source_id' =>$idPlan33,
                                  'value' => 138101208,
                                  'goal' => 0,
                                  'evidence_balance' => 138101208,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource62 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity49,
                                  'source_id' =>$idPlan33,
                                  'value' => 188823768,
                                  'goal' => 0,
                                  'evidence_balance' => 188823768,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource63 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity61,
                                  'source_id' =>$idPlan33,
                                  'value' => 398984132,
                                  'goal' => 0,
                                  'evidence_balance' => 398984132,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource64 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity70,
                                  'source_id' =>$idPlan33,
                                  'value' => 1044788288,
                                  'goal' => 0,
                                  'evidence_balance' => 1044788288,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource65 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity77,
                                  'source_id' =>$idPlan36,
                                  'value' => 610919330,
                                  'goal' => 0,
                                  'evidence_balance' => 610919330,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource66 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity78,
                                  'source_id' =>$idPlan36,
                                  'value' => 4092713,
                                  'goal' => 0,
                                  'evidence_balance' => 4092713,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource67 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity83,
                                  'source_id' =>$idPlan36,
                                  'value' => 466047717,
                                  'goal' => 0,
                                  'evidence_balance' => 466047717,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource68 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity93,
                                  'source_id' =>$idPlan36,
                                  'value' => 727242393.6,
                                  'goal' => 0,
                                  'evidence_balance' => 727242393.6,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource69 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity98,
                                  'source_id' =>$idPlan45,
                                  'value' => 967692569,
                                  'goal' => 0,
                                  'evidence_balance' => 967692569,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource70 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity101,
                                  'source_id' =>$idPlan45,
                                  'value' => 15977021.5999999,
                                  'goal' => 0,
                                  'evidence_balance' => 15977021.5999999,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource71 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity102,
                                  'source_id' =>$idPlan41,
                                  'value' => 35373979,
                                  'goal' => 0,
                                  'evidence_balance' => 35373979,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource72 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity103,
                                  'source_id' =>$idPlan41,
                                  'value' => 207112230,
                                  'goal' => 0,
                                  'evidence_balance' => 207112230,
                                  'age' => 3,
                                  ]);
                                  $idactivitySource73 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity70,
                                    'source_id' =>$idPlan36,
                                    'value' => 147366735,
                                    'goal' => 0,
                                    'evidence_balance' => 147366735,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource74 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity93,
                                    'source_id' =>$idPlan45,
                                    'value' => 436943634.4,
                                    'goal' => 0,
                                    'evidence_balance' => 436943634.4,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource75 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity101,
                                    'source_id' =>$idPlan41,
                                    'value' => 187031755.4,
                                    'goal' => 0,
                                    'evidence_balance' => 187031755.4,
                                    'age' => 3,
                                    ]);
                                    $idactivitySource76 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia212,
                                      'activity_source_id' =>$idactivitySource52,
                                      'value' => 247316000,
                                      ]);
                                      $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia213,
                                      'activity_source_id' =>$idactivitySource53,
                                      'value' => 110480967,
                                      ]);
                                      $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia218,
                                      'activity_source_id' =>$idactivitySource54,
                                      'value' => 744858617,
                                      ]);
                                      $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia221,
                                      'activity_source_id' =>$idactivitySource55,
                                      'value' => 186436632,
                                      ]);
                                      $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia225,
                                      'activity_source_id' =>$idactivitySource56,
                                      'value' => 119548873,
                                      ]);
                                      $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia226,
                                      'activity_source_id' =>$idactivitySource57,
                                      'value' => 621485958,
                                      ]);
                                      $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia235,
                                      'activity_source_id' =>$idactivitySource58,
                                      'value' => 177485628,
                                      ]);
                                      $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia238,
                                      'activity_source_id' =>$idactivitySource59,
                                      'value' => 335186058,
                                      ]);
                                      $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia245,
                                      'activity_source_id' =>$idactivitySource60,
                                      'value' => 878566589,
                                      ]);
                                      $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia250,
                                      'activity_source_id' =>$idactivitySource61,
                                      'value' => 526730129,
                                      ]);
                                      $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia254,
                                      'activity_source_id' =>$idactivitySource62,
                                      'value' => 138101208,
                                      ]);
                                      $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia255,
                                      'activity_source_id' =>$idactivitySource63,
                                      'value' => 100000000,
                                      ]);
                                      $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia267,
                                      'activity_source_id' =>$idactivitySource64,
                                      'value' => 306141718,
                                      ]);
                                      $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia276,
                                      'activity_source_id' =>$idactivitySource65,
                                      'value' => 1044788288,
                                      ]);
                                      $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia283,
                                      'activity_source_id' =>$idactivitySource66,
                                      'value' => 610919330,
                                      ]);
                                      $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia284,
                                      'activity_source_id' =>$idactivitySource67,
                                      'value' => 4092713,
                                      ]);
                                      $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia289,
                                      'activity_source_id' =>$idactivitySource68,
                                      'value' => 466047717,
                                      ]);
                                      $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia299,
                                      'activity_source_id' =>$idactivitySource69,
                                      'value' => 727242393.6,
                                      ]);
                                      $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia304,
                                      'activity_source_id' =>$idactivitySource70,
                                      'value' => 967692568,
                                      ]);
                                      $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia307,
                                      'activity_source_id' =>$idactivitySource71,
                                      'value' => 15977021.5999999,
                                      ]);
                                      $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia308,
                                      'activity_source_id' =>$idactivitySource72,
                                      'value' => 12912500,
                                      ]);
                                      $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                    DB::table('evidence_financial')->insert([
                                      'evidence_id' => $idevidencia309,
                                      'activity_source_id' =>$idactivitySource73,
                                      'value' => 206427990,
                                      ]);
                                      $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                      
                                      
                                      
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia276,
                                        'activity_source_id' =>$idactivitySource74,
                                        'value' => 146620320,
                                        ]);
                                        $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia299,
                                        'activity_source_id' =>$idactivitySource75,
                                        'value' => 436842425.4,
                                        ]);
                                        $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                      DB::table('evidence_financial')->insert([
                                        'evidence_id' => $idevidencia307,
                                        'activity_source_id' =>$idactivitySource76,
                                        'value' => 203008701,
                                        ]);
                                        $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                        
                                        
                                        
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity6,
                                          'source_id' =>$idPlan48,
                                          'value' => 398872148,
                                          'goal' => 0,
                                          'evidence_balance' => 398872148,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource77 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity7,
                                          'source_id' =>$idPlan48,
                                          'value' => 132948728,
                                          'goal' => 0,
                                          'evidence_balance' => 132948728,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource78 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity12,
                                          'source_id' =>$idPlan48,
                                          'value' => 751054080,
                                          'goal' => 0,
                                          'evidence_balance' => 751054080,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource79 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity15,
                                          'source_id' =>$idPlan48,
                                          'value' => 324350979,
                                          'goal' => 0,
                                          'evidence_balance' => 324350979,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource80 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity19,
                                          'source_id' =>$idPlan48,
                                          'value' => 8137106656,
                                          'goal' => 0,
                                          'evidence_balance' => 8137106656,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource81 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity20,
                                          'source_id' =>$idPlan48,
                                          'value' => 521485958,
                                          'goal' => 0,
                                          'evidence_balance' => 521485958,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource82 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity29,
                                          'source_id' =>$idPlan48,
                                          'value' => 187485628,
                                          'goal' => 0,
                                          'evidence_balance' => 187485628,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource83 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity32,
                                          'source_id' =>$idPlan48,
                                          'value' => 66474364,
                                          'goal' => 0,
                                          'evidence_balance' => 66474364,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource84 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity39,
                                          'source_id' =>$idPlan48,
                                          'value' => 1574034813,
                                          'goal' => 0,
                                          'evidence_balance' => 1574034813,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource85 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity44,
                                          'source_id' =>$idPlan51,
                                          'value' => 370587191,
                                          'goal' => 0,
                                          'evidence_balance' => 370587191,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource86 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity48,
                                          'source_id' =>$idPlan51,
                                          'value' => 166185911,
                                          'goal' => 0,
                                          'evidence_balance' => 166185911,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource87 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity49,
                                          'source_id' =>$idPlan51,
                                          'value' => 139478795,
                                          'goal' => 0,
                                          'evidence_balance' => 139478795,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource88 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity61,
                                          'source_id' =>$idPlan51,
                                          'value' => 938161903,
                                          'goal' => 0,
                                          'evidence_balance' => 938161903,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource89 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity70,
                                          'source_id' =>$idPlan51,
                                          'value' => 941884672.2,
                                          'goal' => 0,
                                          'evidence_balance' => 941884672.2,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource90 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity77,
                                          'source_id' =>$idPlan61,
                                          'value' => 645215365,
                                          'goal' => 0,
                                          'evidence_balance' => 645215365,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource91 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity78,
                                          'source_id' =>$idPlan61,
                                          'value' => 123100674,
                                          'goal' => 0,
                                          'evidence_balance' => 123100674,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource92 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity83,
                                          'source_id' =>$idPlan61,
                                          'value' => 508879284,
                                          'goal' => 0,
                                          'evidence_balance' => 508879284,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource93 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity93,
                                          'source_id' =>$idPlan61,
                                          'value' => 627048748.095571,
                                          'goal' => 0,
                                          'evidence_balance' => 627048748.095571,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource94 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity98,
                                          'source_id' =>$idPlan58,
                                          'value' => 610185451,
                                          'goal' => 0,
                                          'evidence_balance' => 610185451,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource95 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity101,
                                          'source_id' =>$idPlan58,
                                          'value' => 282878519,
                                          'goal' => 0,
                                          'evidence_balance' => 282878519,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource96 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity102,
                                          'source_id' =>$idPlan58,
                                          'value' => 296532055,
                                          'goal' => 0,
                                          'evidence_balance' => 296532055,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource97 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity103,
                                          'source_id' =>$idPlan58,
                                          'value' => 230151813,
                                          'goal' => 0,
                                          'evidence_balance' => 230151813,
                                          'age' => 4,
                                          ]);
                                          $idactivitySource98 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          

                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity39,
                                            'source_id' =>$idPlan51,
                                            'value' => 1080251316,
                                            'goal' => 0,
                                            'evidence_balance' => 1080251316,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource99 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity70,
                                            'source_id' =>$idPlan61,
                                            'value' => 663106947.8,
                                            'goal' => 0,
                                            'evidence_balance' => 663106947.8,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource100 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('activity_sources')->insert([
                                            'activity_id' => $idactivity93,
                                            'source_id' =>$idPlan58,
                                            'value' => 564129932.904429,
                                            'goal' => 0,
                                            'evidence_balance' => 564129932.904429,
                                            'age' => 4,
                                            ]);
                                            $idactivitySource101 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia315,
                                              'activity_source_id' =>$idactivitySource77,
                                              'value' => 398113527,
                                              ]);
                                              $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia316,
                                              'activity_source_id' =>$idactivitySource78,
                                              'value' => 132948728,
                                              ]);
                                              $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia321,
                                              'activity_source_id' =>$idactivitySource79,
                                              'value' => 751054080,
                                              ]);
                                              $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia324,
                                              'activity_source_id' =>$idactivitySource80,
                                              'value' => 324350979,
                                              ]);
                                              $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia328,
                                              'activity_source_id' =>$idactivitySource81,
                                              'value' => 8137106656,
                                              ]);
                                              $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia329,
                                              'activity_source_id' =>$idactivitySource82,
                                              'value' => 521485958,
                                              ]);
                                              $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia338,
                                              'activity_source_id' =>$idactivitySource83,
                                              'value' => 187485628,
                                              ]);
                                              $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia341,
                                              'activity_source_id' =>$idactivitySource84,
                                              'value' => 66474364,
                                              ]);
                                              $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia348,
                                              'activity_source_id' =>$idactivitySource85,
                                              'value' => 1574034813,
                                              ]);
                                              $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia353,
                                              'activity_source_id' =>$idactivitySource86,
                                              'value' => 364587191,
                                              ]);
                                              $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia357,
                                              'activity_source_id' =>$idactivitySource87,
                                              'value' => 166185911,
                                              ]);
                                              $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia358,
                                              'activity_source_id' =>$idactivitySource88,
                                              'value' => 139478795,
                                              ]);
                                              $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia370,
                                              'activity_source_id' =>$idactivitySource89,
                                              'value' => 652626786,
                                              ]);
                                              $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia379,
                                              'activity_source_id' =>$idactivitySource90,
                                              'value' => 941884672.2,
                                              ]);
                                              $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia386,
                                              'activity_source_id' =>$idactivitySource91,
                                              'value' => 645215365,
                                              ]);
                                              $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia387,
                                              'activity_source_id' =>$idactivitySource92,
                                              'value' => 123100674,
                                              ]);
                                              $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia392,
                                              'activity_source_id' =>$idactivitySource93,
                                              'value' => 508879284,
                                              ]);
                                              $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia402,
                                              'activity_source_id' =>$idactivitySource94,
                                              'value' => 627048748.095571,
                                              ]);
                                              $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia407,
                                              'activity_source_id' =>$idactivitySource95,
                                              'value' => 610185451,
                                              ]);
                                              $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia410,
                                              'activity_source_id' =>$idactivitySource96,
                                              'value' => 282878519,
                                              ]);
                                              $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia411,
                                              'activity_source_id' =>$idactivitySource97,
                                              'value' => 296532055,
                                              ]);
                                              $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia412,
                                              'activity_source_id' =>$idactivitySource98,
                                              'value' => 229889914,
                                              ]);
                                              $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              

                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia348,
                                                'activity_source_id' =>$idactivitySource99,
                                                'value' => 768225900,
                                                ]);
                                                $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia379,
                                                'activity_source_id' =>$idactivitySource100,
                                                'value' => 71146550.8000002,
                                                ]);
                                                $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia402,
                                                'activity_source_id' =>$idactivitySource101,
                                                'value' => 564129932.904429,
                                                ]);
                                                $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                                                
	
        } 
  }
	
	
	

