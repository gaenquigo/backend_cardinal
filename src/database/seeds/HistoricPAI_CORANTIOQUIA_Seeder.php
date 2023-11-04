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
 * Class HistoricPAI_CORANTIOQUIA_Seeder
 */
class HistoricPAI_CORANTIOQUIA_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $pai=PAI::create([
        'name' => 'Por el Patrimonio Ambiental de nuestro territorio. Plan de Acción 2016-2019',
        'start_date' => '2016-01-01',
        'end_date' => '2019-12-31',
        'director_name' => 'Alejandro González Valencia',
        'group_id' => 12,
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
	'car_program' => 'Programa I. Gestión para la planificación y el ordenamiento ambiental de los territorios',
	'weighing' => 4,
	]);
	$idprogram1 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa II. Dinamización  de la información  y el conocimiento para la protección del patrimonio ambiental en los territorios.',
	'weighing' => 5,
	]);
	$idprogram2 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa III. Administración integral del patrimonio ambiental ',
	'weighing' => 24,
	]);
	$idprogram3 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa IV. Construcción de una cultura ambiental responsable y ética para la paz en el territorio',
	'weighing' => 8,
	]);
	$idprogram4 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa V. Gestión integral de la biodiversidad y sus servicios ecosistémicos',
	'weighing' => 9,
	]);
	$idprogram5 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa VI. Gestión Integral del recurso hídrico',
	'weighing' => 17,
	]);
	$idprogram6 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa VII. Gestión Ambiental, Sectorial y Urbana para el crecimiento verde',
	'weighing' => 19,
	]);
	$idprogram7 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa VIII.  Cambio Climático y Gestión Integral del Riesgo',
	'weighing' => 2,
	]);
	$idprogram8 = DB::getPdo()->lastInsertId();
	
	
	
DB::table('programs')->insert([
	'strategic_line_id' => $idline1,
	'national_program_id' => 799,
	'car_program' => 'Programa IX. Desarrollo administrativo y fortalecimiento institucional ',
	'weighing' => 12,
	]);
	$idprogram9 = DB::getPdo()->lastInsertId();
	
	
	
  DB::table('projects')->insert([
    'program_id' => $idprogram1,
    'project' => 'Proyecto 1. Articulación y armonización de la planificación ambiental del territorio',
    'weighing' => 100,
    ]);
    $idproject1 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram2,
    'project' => 'Proyecto 2. Consolidación del sistema de  información y el conocimiento Corporativo, articulado al SIAC',
    'weighing' => 76,
    ]);
    $idproject2 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram2,
    'project' => 'Proyecto 3.Promoción de espacios para la apropiación de la información y el conocimiento ambiental regional.',
    'weighing' => 24,
    ]);
    $idproject3 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram3,
    'project' => 'Proyecto 4. Regulación del uso de los Recursos Naturales Renovables-RNR',
    'weighing' => 94,
    ]);
    $idproject4 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram3,
    'project' => 'Proyecto 5. Fortalecimiento a la gobernanza de los Recursos Naturales Renovables-RNR con enfoque territorial',
    'weighing' => 3,
    ]);
    $idproject5 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram3,
    'project' => 'Proyecto 6. Diseño e implementación de la estrategia de Territorialización',
    'weighing' => 3,
    ]);
    $idproject6 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram4,
    'project' => 'Proyecto 7. Fortalecimiento de los procesos de participación ambiental',
    'weighing' => 34,
    ]);
    $idproject7 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram4,
    'project' => 'Proyecto 8. Fortalecimiento de la gestión ambiental en las comunidades étnicas y rurales ',
    'weighing' => 21,
    ]);
    $idproject8 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram4,
    'project' => 'Proyecto 9. Fortalecimiento de los procesos de educación ambiental  en el nivel formal y en la gestión interinstitucional',
    'weighing' => 13,
    ]);
    $idproject9 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram4,
    'project' => 'Proyecto 10. Fortalecimiento  de la comunicación para la participación y la gestión ambiental en el territorio',
    'weighing' => 32,
    ]);
    $idproject10 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram5,
    'project' => 'Proyecto 11. Manejo Integral de Áreas Protegidas para la conservación de la  Biodiversidad',
    'weighing' => 34,
    ]);
    $idproject11 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram5,
    'project' => 'Proyecto 12. Manejo integral de ecosistemas estratégicos para la conservación de la biodiversidad y sus servicios ecosistémicos',
    'weighing' => 46,
    ]);
    $idproject12 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram5,
    'project' => 'Proyecto 13. Fortalecimiento  de las acciones de recuperación, protección y conservación de las especies de flora y fauna silvestres priorizadas',
    'weighing' => 20,
    ]);
    $idproject13 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram6,
    'project' => 'Proyecto 14. Planificación y ejecución de acciones asociadas al manejo integral del Recurso Hídrico  (POMCA, PMA, PMM o PORH)',
    'weighing' => 36,
    ]);
    $idproject14 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram6,
    'project' => 'Proyecto 15. Conservación de los  ecosistemas claves para la regulación de la oferta hídrica',
    'weighing' => 19,
    ]);
    $idproject15 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram6,
    'project' => 'Proyecto 16. Conocimiento  y  gobernabilidad del Recurso Hídrico',
    'weighing' => 45,
    ]);
    $idproject16 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram7,
    'project' => 'Proyecto 17. Producción y Consumo Sostenible',
    'weighing' => 10,
    ]);
    $idproject17 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram7,
    'project' => 'Proyecto 18. Mejoramiento del saneamiento hídrico urbano y rural',
    'weighing' => 74,
    ]);
    $idproject18 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram7,
    'project' => 'Proyecto 19.  Gestión Integral de Residuos Sólidos (reciclables, no reciclables y peligrosos)',
    'weighing' => 8,
    ]);
    $idproject19 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram7,
    'project' => 'Proyecto 20. Gestión de Calidad del Aire',
    'weighing' => 8,
    ]);
    $idproject20 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram8,
    'project' => 'Proyecto 21. Cambio Climático, en el marco de los compromisos internacionales y la Política Nacional de Cambio Climático ',
    'weighing' => 39,
    ]);
    $idproject21 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram8,
    'project' => 'Proyecto 22. Conocimiento integral del riesgo asociado a fenómenos naturales y antrópicos',
    'weighing' => 22,
    ]);
    $idproject22 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram8,
    'project' => 'Proyecto 23. Reducción integral del Riesgo asociado a  dinámicas territoriales y culturales',
    'weighing' => 39,
    ]);
    $idproject23 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram9,
    'project' => 'Proyecto 24. Gestión del Talento Humano para el servicio al ciudadano',
    'weighing' => 30,
    ]);
    $idproject24 = DB::getPdo()->lastInsertId();
    
    
    
  DB::table('projects')->insert([
    'program_id' => $idprogram9,
    'project' => 'Proyecto 25. Gestión logística de bienes y servicios ',
    'weighing' => 70,
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
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.5,
        'goal_2' => 0.5,
        'goal_3' => 0.25,
        'goal_4' => 0.5,
        'goal_1_balance' => 0.5,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0.25,
        'goal_4_balance' => 0.5,
        'total_goal' => 1.75,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 32,
        ]);
        $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.1,
        'goal_2' => 0.1,
        'goal_3' => 0.4,
        'goal_4' => 0.1,
        'goal_1_balance' => 0.1,
        'goal_2_balance' => 0.1,
        'goal_3_balance' => 0.4,
        'goal_4_balance' => 0.1,
        'total_goal' => 0.7,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 32,
        ]);
        $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective1,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.1,
        'goal_2' => 0.1,
        'goal_3' => 0.4,
        'goal_4' => 0.1,
        'goal_1_balance' => 0.1,
        'goal_2_balance' => 0.1,
        'goal_3_balance' => 0.4,
        'goal_4_balance' => 0.1,
        'total_goal' => 0.7,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 36,
        ]);
        $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.1,
        'goal_2' => 0.1,
        'goal_3' => 0.4,
        'goal_4' => 0.1,
        'goal_1_balance' => 0.1,
        'goal_2_balance' => 0.1,
        'goal_3_balance' => 0.4,
        'goal_4_balance' => 0.1,
        'total_goal' => 0.7,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 4,
        ]);
        $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.2,
        'goal_2' => 0.2,
        'goal_3' => 0.5,
        'goal_4' => 0.2,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.2,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0.2,
        'total_goal' => 1.1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.7,
        'goal_2' => 0.7,
        'goal_3' => 0.9,
        'goal_4' => 0.7,
        'goal_1_balance' => 0.7,
        'goal_2_balance' => 0.7,
        'goal_3_balance' => 0.9,
        'goal_4_balance' => 0.7,
        'total_goal' => 3,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 5,
        ]);
        $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective2,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.1,
        'goal_2' => 0.1,
        'goal_3' => 0.3,
        'goal_4' => 0.1,
        'goal_1_balance' => 0.1,
        'goal_2_balance' => 0.1,
        'goal_3_balance' => 0.3,
        'goal_4_balance' => 0.1,
        'total_goal' => 0.6,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 85,
        ]);
        $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.25,
        'goal_2' => 0.25,
        'goal_3' => 0.25,
        'goal_4' => 0.25,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.25,
        'goal_3_balance' => 0.25,
        'goal_4_balance' => 0.25,
        'total_goal' => 1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 53,
        ]);
        $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective3,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.1,
        'goal_2' => 0.1,
        'goal_3' => 0.35,
        'goal_4' => 0.1,
        'goal_1_balance' => 0.1,
        'goal_2_balance' => 0.1,
        'goal_3_balance' => 0.35,
        'goal_4_balance' => 0.1,
        'total_goal' => 0.65,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 47,
        ]);
        $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 130,
        'goal_2' => 130,
        'goal_3' => 100,
        'goal_4' => 130,
        'goal_1_balance' => 130,
        'goal_2_balance' => 130,
        'goal_3_balance' => 100,
        'goal_4_balance' => 130,
        'total_goal' => 490,
        'unit_goal' => 40,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 20,
        ]);
        $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.5,
        'goal_2' => 0.5,
        'goal_3' => 0.6,
        'goal_4' => 0.5,
        'goal_1_balance' => 0.5,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0.6,
        'goal_4_balance' => 0.5,
        'total_goal' => 2.1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 20,
        ]);
        $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.2,
        'goal_2' => 0.2,
        'goal_3' => 0.3,
        'goal_4' => 0.2,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.2,
        'goal_3_balance' => 0.3,
        'goal_4_balance' => 0.2,
        'total_goal' => 0.9,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 20,
        ]);
        $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 0,
        'goal_2' => 0,
        'goal_3' => 0.3333,
        'goal_4' => 0,
        'goal_1_balance' => 0,
        'goal_2_balance' => 0,
        'goal_3_balance' => 0.3333,
        'goal_4_balance' => 0,
        'total_goal' => 0.3333,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 20,
        ]);
        $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => null,
        'product_other' => 'PRODUCTO 5',
        'goal_1' => 0.6,
        'goal_2' => 0.6,
        'goal_3' => 0.8,
        'goal_4' => 0.6,
        'goal_1_balance' => 0.6,
        'goal_2_balance' => 0.6,
        'goal_3_balance' => 0.8,
        'goal_4_balance' => 0.6,
        'total_goal' => 2.6,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 19,
        ]);
        $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective4,
        'product_id' => null,
        'product_other' => 'PRODUCTO 6',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective5,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 3,
        'goal_2' => 3,
        'goal_3' => 5,
        'goal_4' => 3,
        'goal_1_balance' => 3,
        'goal_2_balance' => 3,
        'goal_3_balance' => 5,
        'goal_4_balance' => 3,
        'total_goal' => 14,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 100,
        ]);
        $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 30,
        'goal_2' => 30,
        'goal_3' => 30,
        'goal_4' => 30,
        'goal_1_balance' => 30,
        'goal_2_balance' => 30,
        'goal_3_balance' => 30,
        'goal_4_balance' => 30,
        'total_goal' => 120,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 49,
        ]);
        $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 7,
        'goal_2' => 7,
        'goal_3' => 7,
        'goal_4' => 7,
        'goal_1_balance' => 7,
        'goal_2_balance' => 7,
        'goal_3_balance' => 7,
        'goal_4_balance' => 7,
        'total_goal' => 28,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 49,
        ]);
        $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective6,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 2,
        ]);
        $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 154,
        'goal_2' => 154,
        'goal_3' => 154,
        'goal_4' => 154,
        'goal_1_balance' => 154,
        'goal_2_balance' => 154,
        'goal_3_balance' => 154,
        'goal_4_balance' => 154,
        'total_goal' => 616,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 33,
        ]);
        $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 122,
        'goal_2' => 122,
        'goal_3' => 122,
        'goal_4' => 122,
        'goal_1_balance' => 122,
        'goal_2_balance' => 122,
        'goal_3_balance' => 122,
        'goal_4_balance' => 122,
        'total_goal' => 488,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 33,
        ]);
        $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 10,
        'goal_2' => 10,
        'goal_3' => 50,
        'goal_4' => 10,
        'goal_1_balance' => 10,
        'goal_2_balance' => 10,
        'goal_3_balance' => 50,
        'goal_4_balance' => 10,
        'total_goal' => 80,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 33,
        ]);
        $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective7,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
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
        'weighing' => 30,
        ]);
        $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 20,
        'goal_2' => 20,
        'goal_3' => 20,
        'goal_4' => 20,
        'goal_1_balance' => 20,
        'goal_2_balance' => 20,
        'goal_3_balance' => 20,
        'goal_4_balance' => 20,
        'total_goal' => 80,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 30,
        ]);
        $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective8,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 520,
        'goal_2' => 520,
        'goal_3' => 520,
        'goal_4' => 520,
        'goal_1_balance' => 520,
        'goal_2_balance' => 520,
        'goal_3_balance' => 520,
        'goal_4_balance' => 520,
        'total_goal' => 2080,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 40,
        ]);
        $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 65,
        'goal_2' => 65,
        'goal_3' => 80,
        'goal_4' => 65,
        'goal_1_balance' => 65,
        'goal_2_balance' => 65,
        'goal_3_balance' => 80,
        'goal_4_balance' => 65,
        'total_goal' => 275,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 86,
        ]);
        $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective9,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 80,
        'goal_2' => 80,
        'goal_3' => 100,
        'goal_4' => 80,
        'goal_1_balance' => 80,
        'goal_2_balance' => 80,
        'goal_3_balance' => 100,
        'goal_4_balance' => 80,
        'total_goal' => 340,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 14,
        ]);
        $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.19,
        'goal_2' => 0.19,
        'goal_3' => 0.27,
        'goal_4' => 0.19,
        'goal_1_balance' => 0.19,
        'goal_2_balance' => 0.19,
        'goal_3_balance' => 0.27,
        'goal_4_balance' => 0.19,
        'total_goal' => 0.84,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 49,
        ]);
        $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 50000,
        'goal_2' => 50000,
        'goal_3' => 70000,
        'goal_4' => 50000,
        'goal_1_balance' => 50000,
        'goal_2_balance' => 50000,
        'goal_3_balance' => 70000,
        'goal_4_balance' => 50000,
        'total_goal' => 220000,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 49,
        ]);
        $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective10,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 2,
        ]);
        $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
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
        'weighing' => 72,
        ]);
        $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective11,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.24,
        'goal_2' => 0.24,
        'goal_3' => 0.13,
        'goal_4' => 0.24,
        'goal_1_balance' => 0.24,
        'goal_2_balance' => 0.24,
        'goal_3_balance' => 0.13,
        'goal_4_balance' => 0.24,
        'total_goal' => 0.85,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 28,
        ]);
        $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.14,
        'goal_2' => 0.14,
        'goal_3' => 0.29,
        'goal_4' => 0.14,
        'goal_1_balance' => 0.14,
        'goal_2_balance' => 0.14,
        'goal_3_balance' => 0.29,
        'goal_4_balance' => 0.14,
        'total_goal' => 0.71,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 30,
        ]);
        $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.75,
        'goal_2' => 0.75,
        'goal_3' => 0.75,
        'goal_4' => 0.75,
        'goal_1_balance' => 0.75,
        'goal_2_balance' => 0.75,
        'goal_3_balance' => 0.75,
        'goal_4_balance' => 0.75,
        'total_goal' => 3,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 29,
        ]);
        $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.3,
        'goal_2' => 0.3,
        'goal_3' => 0.8,
        'goal_4' => 0.3,
        'goal_1_balance' => 0.3,
        'goal_2_balance' => 0.3,
        'goal_3_balance' => 0.8,
        'goal_4_balance' => 0.3,
        'total_goal' => 1.7,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 24,
        ]);
        $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 0.25,
        'goal_2' => 0.25,
        'goal_3' => 0.25,
        'goal_4' => 0.25,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.25,
        'goal_3_balance' => 0.25,
        'goal_4_balance' => 0.25,
        'total_goal' => 1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 8,
        ]);
        $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => null,
        'product_other' => 'PRODUCTO 5',
        'goal_1' => 0.1,
        'goal_2' => 0.1,
        'goal_3' => 0.3,
        'goal_4' => 0.1,
        'goal_1_balance' => 0.1,
        'goal_2_balance' => 0.1,
        'goal_3_balance' => 0.3,
        'goal_4_balance' => 0.1,
        'total_goal' => 0.6,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 7,
        ]);
        $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective12,
        'product_id' => null,
        'product_other' => 'PRODUCTO 6',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.4,
        'goal_2' => 0.4,
        'goal_3' => 0.75,
        'goal_4' => 0.4,
        'goal_1_balance' => 0.4,
        'goal_2_balance' => 0.4,
        'goal_3_balance' => 0.75,
        'goal_4_balance' => 0.4,
        'total_goal' => 1.95,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 53,
        ]);
        $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.25,
        'goal_2' => 0.25,
        'goal_3' => 0.75,
        'goal_4' => 0.25,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.25,
        'goal_3_balance' => 0.75,
        'goal_4_balance' => 0.25,
        'total_goal' => 1.5,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 23,
        ]);
        $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.25,
        'goal_2' => 0.25,
        'goal_3' => 0.5,
        'goal_4' => 0.25,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.25,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0.25,
        'total_goal' => 1.25,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 23,
        ]);
        $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective13,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.2,
        'goal_2' => 0.2,
        'goal_3' => 0.3,
        'goal_4' => 0.2,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.2,
        'goal_3_balance' => 0.3,
        'goal_4_balance' => 0.2,
        'total_goal' => 0.9,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 28,
        ]);
        $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.2,
        'goal_2' => 0.2,
        'goal_3' => 0.5,
        'goal_4' => 0.2,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.2,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0.2,
        'total_goal' => 1.1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 28,
        ]);
        $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 0.2,
        'goal_2' => 0.2,
        'goal_3' => 0.5,
        'goal_4' => 0.2,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.2,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0.2,
        'total_goal' => 1.1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 21,
        ]);
        $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => null,
        'product_other' => 'PRODUCTO 5',
        'goal_1' => 0.2,
        'goal_2' => 0.2,
        'goal_3' => 0.5,
        'goal_4' => 0.2,
        'goal_1_balance' => 0.2,
        'goal_2_balance' => 0.2,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0.2,
        'total_goal' => 1.1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 21,
        ]);
        $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective14,
        'product_id' => null,
        'product_other' => 'PRODUCTO 6',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 700,
        'goal_2' => 700,
        'goal_3' => 2100,
        'goal_4' => 700,
        'goal_1_balance' => 700,
        'goal_2_balance' => 700,
        'goal_3_balance' => 2100,
        'goal_4_balance' => 700,
        'total_goal' => 4200,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 94,
        ]);
        $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective15,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 3,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 3,
        'goal_4_balance' => 1,
        'total_goal' => 6,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 6,
        ]);
        $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective16,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 31,
        'goal_2' => 31,
        'goal_3' => 34,
        'goal_4' => 31,
        'goal_1_balance' => 31,
        'goal_2_balance' => 31,
        'goal_3_balance' => 34,
        'goal_4_balance' => 31,
        'total_goal' => 127,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective16,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 80,
        'goal_2' => 80,
        'goal_3' => 80,
        'goal_4' => 80,
        'goal_1_balance' => 80,
        'goal_2_balance' => 80,
        'goal_3_balance' => 80,
        'goal_4_balance' => 80,
        'total_goal' => 320,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective16,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.85,
        'goal_2' => 0.85,
        'goal_3' => 0.9,
        'goal_4' => 0.85,
        'goal_1_balance' => 0.85,
        'goal_2_balance' => 0.85,
        'goal_3_balance' => 0.9,
        'goal_4_balance' => 0.85,
        'total_goal' => 3.45,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective16,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective16,
        'product_id' => null,
        'product_other' => 'PRODUCTO 5',
        'goal_1' => 20,
        'goal_2' => 20,
        'goal_3' => 20,
        'goal_4' => 20,
        'goal_1_balance' => 20,
        'goal_2_balance' => 20,
        'goal_3_balance' => 20,
        'goal_4_balance' => 20,
        'total_goal' => 80,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 47,
        ]);
        $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective17,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.25,
        'goal_2' => 0.25,
        'goal_3' => 0.25,
        'goal_4' => 0.25,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.25,
        'goal_3_balance' => 0.25,
        'goal_4_balance' => 0.25,
        'total_goal' => 1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 16,
        ]);
        $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective17,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.5,
        'goal_2' => 0.5,
        'goal_3' => 0.5,
        'goal_4' => 0.5,
        'goal_1_balance' => 0.5,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0.5,
        'total_goal' => 2,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 84,
        ]);
        $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective18,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 50,
        'goal_2' => 50,
        'goal_3' => 54,
        'goal_4' => 50,
        'goal_1_balance' => 50,
        'goal_2_balance' => 50,
        'goal_3_balance' => 54,
        'goal_4_balance' => 50,
        'total_goal' => 204,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 12,
        ]);
        $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective18,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 40,
        'goal_2' => 40,
        'goal_3' => 30,
        'goal_4' => 40,
        'goal_1_balance' => 40,
        'goal_2_balance' => 40,
        'goal_3_balance' => 30,
        'goal_4_balance' => 40,
        'total_goal' => 150,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 88,
        ]);
        $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective19,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
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
        'weighing' => 100,
        ]);
        $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective20,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 12,
        'goal_2' => 12,
        'goal_3' => 24,
        'goal_4' => 12,
        'goal_1_balance' => 12,
        'goal_2_balance' => 12,
        'goal_3_balance' => 24,
        'goal_4_balance' => 12,
        'total_goal' => 60,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 33,
        ]);
        $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective20,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 100,
        'goal_2' => 100,
        'goal_3' => 100,
        'goal_4' => 100,
        'goal_1_balance' => 100,
        'goal_2_balance' => 100,
        'goal_3_balance' => 100,
        'goal_4_balance' => 100,
        'total_goal' => 400,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 33,
        ]);
        $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective20,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.25,
        'goal_2' => 0.25,
        'goal_3' => 0.75,
        'goal_4' => 0.25,
        'goal_1_balance' => 0.25,
        'goal_2_balance' => 0.25,
        'goal_3_balance' => 0.75,
        'goal_4_balance' => 0.25,
        'total_goal' => 1.5,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 33,
        ]);
        $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective20,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective21,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.3,
        'goal_2' => 0.3,
        'goal_3' => 0.7,
        'goal_4' => 0.3,
        'goal_1_balance' => 0.3,
        'goal_2_balance' => 0.3,
        'goal_3_balance' => 0.7,
        'goal_4_balance' => 0.3,
        'total_goal' => 1.6,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 42,
        ]);
        $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective21,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.5,
        'goal_2' => 0.5,
        'goal_3' => 0.5,
        'goal_4' => 0.5,
        'goal_1_balance' => 0.5,
        'goal_2_balance' => 0.5,
        'goal_3_balance' => 0.5,
        'goal_4_balance' => 0.5,
        'total_goal' => 2,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 42,
        ]);
        $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective21,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective21,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 0.3,
        'goal_2' => 0.3,
        'goal_3' => 0.7,
        'goal_4' => 0.3,
        'goal_1_balance' => 0.3,
        'goal_2_balance' => 0.3,
        'goal_3_balance' => 0.7,
        'goal_4_balance' => 0.3,
        'total_goal' => 1.6,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 15,
        ]);
        $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective22,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 5,
        'goal_2' => 5,
        'goal_3' => 10,
        'goal_4' => 5,
        'goal_1_balance' => 5,
        'goal_2_balance' => 5,
        'goal_3_balance' => 10,
        'goal_4_balance' => 5,
        'total_goal' => 25,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 58,
        ]);
        $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective22,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 20,
        'goal_2' => 20,
        'goal_3' => 20,
        'goal_4' => 20,
        'goal_1_balance' => 20,
        'goal_2_balance' => 20,
        'goal_3_balance' => 20,
        'goal_4_balance' => 20,
        'total_goal' => 80,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 42,
        ]);
        $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective23,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 20,
        'goal_2' => 20,
        'goal_3' => 20,
        'goal_4' => 20,
        'goal_1_balance' => 20,
        'goal_2_balance' => 20,
        'goal_3_balance' => 20,
        'goal_4_balance' => 20,
        'total_goal' => 80,
        'unit_goal' => 58,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 100,
        ]);
        $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective24,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
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
        'weighing' => 41,
        ]);
        $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective24,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.9,
        'goal_2' => 0.9,
        'goal_3' => 0.9,
        'goal_4' => 0.9,
        'goal_1_balance' => 0.9,
        'goal_2_balance' => 0.9,
        'goal_3_balance' => 0.9,
        'goal_4_balance' => 0.9,
        'total_goal' => 3.6,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 27,
        ]);
        $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective24,
        'product_id' => null,
        'product_other' => 'PRODUCTO 3',
        'goal_1' => 0.4,
        'goal_2' => 0.4,
        'goal_3' => 0.2,
        'goal_4' => 0.4,
        'goal_1_balance' => 0.4,
        'goal_2_balance' => 0.4,
        'goal_3_balance' => 0.2,
        'goal_4_balance' => 0.4,
        'total_goal' => 1.4,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 27,
        ]);
        $idobjectiveproduct77 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective24,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 1,
        'goal_2' => 1,
        'goal_3' => 1,
        'goal_4' => 1,
        'goal_1_balance' => 1,
        'goal_2_balance' => 1,
        'goal_3_balance' => 1,
        'goal_4_balance' => 1,
        'total_goal' => 4,
        'unit_goal' => 84,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 1,
        ]);
        $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective24,
        'product_id' => null,
        'product_other' => 'PRODUCTO 4',
        'goal_1' => 0.3,
        'goal_2' => 0.3,
        'goal_3' => 0.2,
        'goal_4' => 0.3,
        'goal_1_balance' => 0.3,
        'goal_2_balance' => 0.3,
        'goal_3_balance' => 0.2,
        'goal_4_balance' => 0.3,
        'total_goal' => 1.1,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 4,
        ]);
        $idobjectiveproduct79 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective25,
        'product_id' => null,
        'product_other' => 'PRODUCTO 1',
        'goal_1' => 0.8,
        'goal_2' => 0.8,
        'goal_3' => 0.9,
        'goal_4' => 0.8,
        'goal_1_balance' => 0.8,
        'goal_2_balance' => 0.8,
        'goal_3_balance' => 0.9,
        'goal_4_balance' => 0.8,
        'total_goal' => 3.3,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 88,
        ]);
        $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
        
        
        
      DB::table('objective_products')->insert([
        'objective_id' => $idobjective25,
        'product_id' => null,
        'product_other' => 'PRODUCTO 2',
        'goal_1' => 0.8,
        'goal_2' => 0.8,
        'goal_3' => 0.9,
        'goal_4' => 0.8,
        'goal_1_balance' => 0.8,
        'goal_2_balance' => 0.8,
        'goal_3_balance' => 0.9,
        'goal_4_balance' => 0.8,
        'total_goal' => 3.3,
        'unit_goal' => 71,
        'indicator_national_id' => 799,
        'indicator_ods_id' => 890,
        'national_policy_id' => 875,
        'weighing' => 12,
        ]);
        $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
        

        
        
        DB::table('activities')->insert([
          'objective_id' => $idobjective1,
          'product_id' =>$idobjectiveproduct1,
          'name' => '1.1. Formular con la participación de la comunidad, el Plan de Gestión Ambiental Regional y el Plan de Acción Institucional',
          'goal_1' => 0.5,
          'goal_2' => 0.5,
          'goal_3' => 0.25,
          'goal_4' => 0.5,
          'goal' => 1.75,
          'weighing' => 32,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective1,
          'product_id' =>$idobjectiveproduct2,
          'name' => '1.2. Apoyar a los entes territoriales en la inclusión del componente ambiental y la Incorporación de las determinantes  ambientales en los instrumentos de planificación territorial',
          'goal_1' => 0.1,
          'goal_2' => 0.1,
          'goal_3' => 0.4,
          'goal_4' => 0.1,
          'goal' => 0.7,
          'weighing' => 32,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective1,
          'product_id' =>$idobjectiveproduct3,
          'name' => '1.3. Realizar seguimiento y evaluación a la gestión en el territorio',
          'goal_1' => 0.1,
          'goal_2' => 0.1,
          'goal_3' => 0.4,
          'goal_4' => 0.1,
          'goal' => 0.7,
          'weighing' => 36,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective2,
          'product_id' =>$idobjectiveproduct4,
          'name' => '2.1. Articular e incorporar la información y el conocimiento en los sistemas de información, en los procesos Corporativos y con el SIAC. % de procesos misionales  ajustados acorde a la GIC',
          'goal_1' => 0.1,
          'goal_2' => 0.1,
          'goal_3' => 0.4,
          'goal_4' => 0.1,
          'goal' => 0.7,
          'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective2,
          'product_id' =>$idobjectiveproduct5,
          'name' => '2.1. Articular e incorporar la información y el conocimiento en los sistemas de información, en los procesos Corporativos y con el SIAC. % de componentes del sistema de información corporativo actualizados, con información incorporada.',
          'goal_1' => 0.2,
          'goal_2' => 0.2,
          'goal_3' => 0.5,
          'goal_4' => 0.2,
          'goal' => 1.1,
          'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective2,
          'product_id' =>$idobjectiveproduct6,
          'name' => '2.1. Articular e incorporar la información y el conocimiento en los sistemas de información, en los procesos Corporativos y con el SIAC. % de actualización y reporte de la información en el SIAC (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.7,
          'goal_2' => 0.7,
          'goal_3' => 0.9,
          'goal_4' => 0.7,
          'goal' => 3,
          'weighing' => 5,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity6 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective2,
          'product_id' =>$idobjectiveproduct7,
          'name' => 'Asignación presupuestal 2.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective2,
          'product_id' =>$idobjectiveproduct8,
          'name' => '2.2. Ajustar la plataforma teleinformática a los requerimientos de la gestión de la información y el conocimiento',
          'goal_1' => 0.1,
          'goal_2' => 0.1,
          'goal_3' => 0.3,
          'goal_4' => 0.1,
          'goal' => 0.6,
          'weighing' => 85,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective3,
          'product_id' =>$idobjectiveproduct9,
          'name' => '3.1. Diseñar y fortalecer estrategias para la  promoción de información y conocimiento con enfoque poblacional,  territorial y sectorial. ',
          'goal_1' => 0.25,
          'goal_2' => 0.25,
          'goal_3' => 0.25,
          'goal_4' => 0.25,
          'goal' => 1,
          'weighing' => 53,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective3,
          'product_id' =>$idobjectiveproduct10,
          'name' => '3.2. Fortalecer  los centros de información ambiental para la dinamización de la información y el conocimiento ambiental de los territorios ',
          'goal_1' => 0.1,
          'goal_2' => 0.1,
          'goal_3' => 0.35,
          'goal_4' => 0.1,
          'goal' => 0.65,
          'weighing' => 47,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective4,
          'product_id' =>$idobjectiveproduct11,
          'name' => '4.1.  Administrar la oferta y regular la demanda de RNR para la sostenibilidad ambiental del territorio. Tiempo promedio de trámite para la resolución de autorizaciones ambientales otorgadas por la corporación (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 130,
          'goal_2' => 130,
          'goal_3' => 100,
          'goal_4' => 130,
          'goal' => 490,
          'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective4,
          'product_id' =>$idobjectiveproduct12,
          'name' => '4.1.  Administrar la oferta y regular la demanda de RNR para la sostenibilidad ambiental del territorio.% de autorizaciones ambientales con seguimiento (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.5,
          'goal_2' => 0.5,
          'goal_3' => 0.6,
          'goal_4' => 0.5,
          'goal' => 2.1,
          'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective4,
          'product_id' =>$idobjectiveproduct13,
          'name' => '4.1.  Administrar la oferta y regular la demanda de RNR para la sostenibilidad ambiental del territorio. % de procesos sancionatorios resueltos (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.2,
          'goal_2' => 0.2,
          'goal_3' => 0.3,
          'goal_4' => 0.2,
          'goal' => 0.9,
          'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective4,
          'product_id' =>$idobjectiveproduct14,
          'name' => '4.1.  Administrar la oferta y regular la demanda de RNR para la sostenibilidad ambiental del territorio. % de cuerpos de agua con reglamentación del uso de las aguas (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0,
          'goal_2' => 0,
          'goal_3' => 0.3333,
          'goal_4' => 0,
          'goal' => 0.3333,
          'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective4,
          'product_id' =>$idobjectiveproduct15,
          'name' => '4.1.  Administrar la oferta y regular la demanda de RNR para la sostenibilidad ambiental del territorio. % de instrumentos de manejo y control con seguimiento (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.6,
          'goal_2' => 0.6,
          'goal_3' => 0.8,
          'goal_4' => 0.6,
          'goal' => 2.6,
          'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective4,
          'product_id' =>$idobjectiveproduct16,
          'name' => 'Asignación presupuestal 4.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective5,
          'product_id' =>$idobjectiveproduct17,
          'name' => '5.1.  Desarrollar acciones de formación y legalización con los actores estratégicos, acueductos veredales, sectores y comunidades étnicas',
          'goal_1' => 3,
          'goal_2' => 3,
          'goal_3' => 5,
          'goal_4' => 3,
          'goal' => 14,
          'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective6,
          'product_id' =>$idobjectiveproduct18,
          'name' => '6.1. Acercar al territorio y sus comunidades los diferentes servicios corporativos. No. de presencias institucionales realizadas',
          'goal_1' => 30,
          'goal_2' => 30,
          'goal_3' => 30,
          'goal_4' => 30,
          'goal' => 120,
          'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective6,
          'product_id' =>$idobjectiveproduct19,
          'name' => '6.1. Acercar al territorio y sus comunidades los diferentes servicios corporativos. No. de puntos de atención al ciudadano nuevos o fortalecidos',
          'goal_1' => 7,
          'goal_2' => 7,
          'goal_3' => 7,
          'goal_4' => 7,
          'goal' => 28,
          'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective6,
          'product_id' =>$idobjectiveproduct20,
          'name' => 'Asignación presupuestal 6.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective7,
          'product_id' =>$idobjectiveproduct21,
          'name' => '7.1. Desarrollar, articular y acompañar procesos educativo ambientales, para la gestión ambiental del territorio desde una perspectiva de paz. No. de procesos ciudadanos o comunitarios articulados en Red ',
          'goal_1' => 154,
          'goal_2' => 154,
          'goal_3' => 154,
          'goal_4' => 154,
          'goal' => 616,
          'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective7,
          'product_id' =>$idobjectiveproduct22,
          'name' => '7.1. Desarrollar, articular y acompañar procesos educativo ambientales, para la gestión ambiental del territorio desde una perspectiva de paz. No. de procesos de acompañamiento a  mesas ambientales',
          'goal_1' => 122,
          'goal_2' => 122,
          'goal_3' => 122,
          'goal_4' => 122,
          'goal' => 488,
          'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective7,
          'product_id' =>$idobjectiveproduct23,
          'name' => '7.1. Desarrollar, articular y acompañar procesos educativo ambientales, para la gestión ambiental del territorio desde una perspectiva de paz. No. de procesos de educación ciudadana o comunitaria ambiental desarrollados ',
          'goal_1' => 10,
          'goal_2' => 10,
          'goal_3' => 50,
          'goal_4' => 10,
          'goal' => 80,
          'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective7,
          'product_id' =>$idobjectiveproduct24,
          'name' => 'Asignación presupuestal 7.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective8,
          'product_id' =>$idobjectiveproduct25,
          'name' => '8.1. Acompañar el desarrollo de acciones ambientales asociadas a los planes de vida con población indígena',
          'goal_1' => 10,
          'goal_2' => 10,
          'goal_3' => 10,
          'goal_4' => 10,
          'goal' => 40,
          'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective8,
          'product_id' =>$idobjectiveproduct26,
          'name' => '8.2. Acompañar el desarrollo de acciones ambientales a los planes de etnodesarrollo con población afrodescendiente',
          'goal_1' => 20,
          'goal_2' => 20,
          'goal_3' => 20,
          'goal_4' => 20,
          'goal' => 80,
          'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective8,
          'product_id' =>$idobjectiveproduct27,
          'name' => '8.3.  Propiciar el desarrollo de buenas prácticas ambientales para contribuir al mejoramiento del hábitat con población rural como aporte a la construcción de la paz',
          'goal_1' => 520,
          'goal_2' => 520,
          'goal_3' => 520,
          'goal_4' => 520,
          'goal' => 2080,
          'weighing' => 40,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective9,
          'product_id' =>$idobjectiveproduct28,
          'name' => '9.1. Fortalecer  los comités interinstitucionales  de educación ambiental  CIDEAM  Municipales  y Departamental',
          'goal_1' => 65,
          'goal_2' => 65,
          'goal_3' => 80,
          'goal_4' => 65,
          'goal' => 275,
          'weighing' => 86,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective9,
          'product_id' =>$idobjectiveproduct29,
          'name' => '9.2. Fortalecer los procesos educativos  ambientales en instituciones educativas (PRAE/PRAU) para la protección del patrimonio ambiental ',
          'goal_1' => 80,
          'goal_2' => 80,
          'goal_3' => 100,
          'goal_4' => 80,
          'goal' => 340,
          'weighing' => 14,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective10,
          'product_id' =>$idobjectiveproduct30,
          'name' => '10.1 . Formular e implementar el plan estratégico de comunicaciones, propendiendo por la divulgación de información que posibilite la participación y la gestión. % de formulación e implementación del Plan de comunicaciones ambiental en el territorio',
          'goal_1' => 0.19,
          'goal_2' => 0.19,
          'goal_3' => 0.27,
          'goal_4' => 0.19,
          'goal' => 0.84,
          'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective10,
          'product_id' =>$idobjectiveproduct31,
          'name' => '10.1 . Formular e implementar el plan estratégico de comunicaciones, propendiendo por la divulgación de información que posibilite la participación y la gestión. No. de habitantes informados',
          'goal_1' => 50000,
          'goal_2' => 50000,
          'goal_3' => 70000,
          'goal_4' => 50000,
          'goal' => 220000,
          'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective10,
          'product_id' =>$idobjectiveproduct32,
          'name' => 'Asignación presupuestal 10.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 2,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective11,
          'product_id' =>$idobjectiveproduct33,
          'name' => '11.1. Ejecutar  los planes de manejo de las áreas protegidas ',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 72,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective11,
          'product_id' =>$idobjectiveproduct34,
          'name' => '11.2. Declarar nuevas áreas protegidas en ecosistemas estratégicos priorizados en la jurisdicción',
          'goal_1' => 0.24,
          'goal_2' => 0.24,
          'goal_3' => 0.13,
          'goal_4' => 0.24,
          'goal' => 0.85,
          'weighing' => 28,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective12,
          'product_id' =>$idobjectiveproduct35,
          'name' => '12.1. Delimitar y/o ejecutar acciones de manejo en ecosistemas estratégicos.% de páramos delimitados por el MADS, con zonificación y con régimen de usos, adoptados por la CAR. (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.14,
          'goal_2' => 0.14,
          'goal_3' => 0.29,
          'goal_4' => 0.14,
          'goal' => 0.71,
          'weighing' => 30,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective12,
          'product_id' =>$idobjectiveproduct36,
          'name' => '12.1. Delimitar y/o ejecutar acciones de manejo en ecosistemas estratégicos. % de acciones de delimitación, conservación y manejo en ecosistemas estratégicos ejecutadas',
          'goal_1' => 0.75,
          'goal_2' => 0.75,
          'goal_3' => 0.75,
          'goal_4' => 0.75,
          'goal' => 3,
          'weighing' => 29,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective12,
          'product_id' =>$idobjectiveproduct37,
          'name' => 'Asignación presupuestal 12.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective12,
          'product_id' =>$idobjectiveproduct38,
          'name' => '12.2 Ordenar  los bosques naturales para propiciar  un uso sostenible ',
          'goal_1' => 0.3,
          'goal_2' => 0.3,
          'goal_3' => 0.8,
          'goal_4' => 0.3,
          'goal' => 1.7,
          'weighing' => 24,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective12,
          'product_id' =>$idobjectiveproduct39,
          'name' => '12.3. Desarrollar acciones de reforestación, restauración, rehabilitación y recuperación ecológica de áreas disturbadas. % de áreas de ecosistemas en restauración, rehabilitación y reforestación  (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.25,
          'goal_2' => 0.25,
          'goal_3' => 0.25,
          'goal_4' => 0.25,
          'goal' => 1,
          'weighing' => 8,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective12,
          'product_id' =>$idobjectiveproduct40,
          'name' => '12.3. Desarrollar acciones de reforestación, restauración, rehabilitación y recuperación ecológica de áreas disturbadas. % de suelos degradados en recuperación o rehabilitación (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.1,
          'goal_2' => 0.1,
          'goal_3' => 0.3,
          'goal_4' => 0.1,
          'goal' => 0.6,
          'weighing' => 7,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective12,
          'product_id' =>$idobjectiveproduct41,
          'name' => 'Asignación presupuestal 12.3',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective13,
          'product_id' =>$idobjectiveproduct42,
          'name' => '13.1. Desarrollar acciones para la recuperación, protección y conservación de especies de fauna y flora silvestre amenazadas. % de especies amenazadas con medidas de conservación y manejo en ejecución (Resol. No. 0667 de 2016 - MADS) ',
          'goal_1' => 0.4,
          'goal_2' => 0.4,
          'goal_3' => 0.75,
          'goal_4' => 0.4,
          'goal' => 1.95,
          'weighing' => 53,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective13,
          'product_id' =>$idobjectiveproduct43,
          'name' => '13.2. Desarrollar acciones para la recuperación, protección, conservación y/o control de  especies  de  fauna y flora silvestre priorizadas. % de especies priorizadas con medidas de conservación y manejo en ejecución',
          'goal_1' => 0.25,
          'goal_2' => 0.25,
          'goal_3' => 0.75,
          'goal_4' => 0.25,
          'goal' => 1.5,
          'weighing' => 23,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective13,
          'product_id' =>$idobjectiveproduct44,
          'name' => '13.2. Desarrollar acciones para la recuperación, protección, conservación y/o control de  especies  de  fauna y flora silvestre priorizadas. % de especies invasoras con medidas de prevención, control y  manejo en ejecución (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.25,
          'goal_2' => 0.25,
          'goal_3' => 0.5,
          'goal_4' => 0.25,
          'goal' => 1.25,
          'weighing' => 23,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective13,
          'product_id' =>$idobjectiveproduct45,
          'name' => 'Asignación presupuestal 13.2',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective14,
          'product_id' =>$idobjectiveproduct46,
          'name' => '14.1. Formular y/o ajustar los planes hidrológicos (POMCA, PMA, PMM o PORH). % de avance en la formulación y/o ajuste de los planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas ',
          'goal_1' => 0.2,
          'goal_2' => 0.2,
          'goal_3' => 0.3,
          'goal_4' => 0.2,
          'goal' => 0.9,
          'weighing' => 28,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective14,
          'product_id' =>$idobjectiveproduct47,
          'name' => '14.1. Formular y/o ajustar los planes hidrológicos (POMCA, PMA, PMM o PORH). % de cuerpos de agua con plan de ordenamiento del recurso hídrico (PORH) adoptados (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.2,
          'goal_2' => 0.2,
          'goal_3' => 0.5,
          'goal_4' => 0.2,
          'goal' => 1.1,
          'weighing' => 28,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective14,
          'product_id' =>$idobjectiveproduct48,
          'name' => 'Asignación presupuestal 14.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity48 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective14,
          'product_id' =>$idobjectiveproduct49,
          'name' => '14.2.  Ejecutar los planes hidrológicos (POMCA, PMA, PMM, PORH). % de Planes de Ordenación y Manejo de Cuencas (POMCAS), Planes de Manejo de Acuíferos (PMA) y Planes de Manejo de Microcuencas (PMM) en ejecución (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.2,
          'goal_2' => 0.2,
          'goal_3' => 0.5,
          'goal_4' => 0.2,
          'goal' => 1.1,
          'weighing' => 21,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity49 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective14,
          'product_id' =>$idobjectiveproduct50,
          'name' => '14.2.  Ejecutar los planes hidrológicos (POMCA, PMA, PMM, PORH). % de Planes de ordenamiento del recurso hídrico (PORH) en ejecución',
          'goal_1' => 0.2,
          'goal_2' => 0.2,
          'goal_3' => 0.5,
          'goal_4' => 0.2,
          'goal' => 1.1,
          'weighing' => 21,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity50 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective14,
          'product_id' =>$idobjectiveproduct51,
          'name' => 'Asignación presupuestal 14.2',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective15,
          'product_id' =>$idobjectiveproduct52,
          'name' => '15.1. Proteger, conservar y restaurar los ecosistemas claves para la regulación hídrica',
          'goal_1' => 700,
          'goal_2' => 700,
          'goal_3' => 2100,
          'goal_4' => 700,
          'goal' => 4200,
          'weighing' => 94,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective15,
          'product_id' =>$idobjectiveproduct53,
          'name' => '15.2. Valorar o promover los bienes y servicios ambientales - PSA para conservar ecosistemas claves de la regulación de la oferta hídrica',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 3,
          'goal_4' => 1,
          'goal' => 6,
          'weighing' => 6,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective16,
          'product_id' =>$idobjectiveproduct54,
          'name' => '16.1. Realizar monitoreo del recurso hídrico, para caracterizar la oferta, demanda y calidad. No. de cuencas caracterizadas con oferta, demanda y calidad del Recurso Hídrico',
          'goal_1' => 31,
          'goal_2' => 31,
          'goal_3' => 34,
          'goal_4' => 31,
          'goal' => 127,
          'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective16,
          'product_id' =>$idobjectiveproduct55,
          'name' => '16.1. Realizar monitoreo del recurso hídrico, para caracterizar la oferta, demanda y calidad. No. de municipios operando en la red',
          'goal_1' => 80,
          'goal_2' => 80,
          'goal_3' => 80,
          'goal_4' => 80,
          'goal' => 320,
          'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective16,
          'product_id' =>$idobjectiveproduct56,
          'name' => '16.1. Realizar monitoreo del recurso hídrico, para caracterizar la oferta, demanda y calidad. % de redes y estaciones de monitoreo hídrico en operación (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.85,
          'goal_2' => 0.85,
          'goal_3' => 0.9,
          'goal_4' => 0.85,
          'goal' => 3.45,
          'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective16,
          'product_id' =>$idobjectiveproduct57,
          'name' => 'Asignación presupuestal 16.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective16,
          'product_id' =>$idobjectiveproduct58,
          'name' => '16.2. Fortalecer el laboratorio ambiental, a través de la acreditación de diferentes matrices y parámetros de análisis',
          'goal_1' => 20,
          'goal_2' => 20,
          'goal_3' => 20,
          'goal_4' => 20,
          'goal' => 80,
          'weighing' => 47,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective17,
          'product_id' =>$idobjectiveproduct59,
          'name' => '17.1. Formular e implementar el Plan Regional de Negocios Verdes',
          'goal_1' => 0.25,
          'goal_2' => 0.25,
          'goal_3' => 0.25,
          'goal_4' => 0.25,
          'goal' => 1,
          'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective17,
          'product_id' =>$idobjectiveproduct60,
          'name' => '17.2. Promover prácticas de producción y consumo sostenible en sectores productivos',
          'goal_1' => 0.5,
          'goal_2' => 0.5,
          'goal_3' => 0.5,
          'goal_4' => 0.5,
          'goal' => 2,
          'weighing' => 84,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective18,
          'product_id' =>$idobjectiveproduct61,
          'name' => '18.1. Fortalecer el seguimiento a las cargas contaminantes de los sistemas de descontaminación y los instrumentos económicos implementados',
          'goal_1' => 50,
          'goal_2' => 50,
          'goal_3' => 54,
          'goal_4' => 50,
          'goal' => 204,
          'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective18,
          'product_id' =>$idobjectiveproduct62,
          'name' => '18.2. Apoyar la infraestructura de descontaminación hídrica en comunidades urbanas, rurales y étnicas',
          'goal_1' => 40,
          'goal_2' => 40,
          'goal_3' => 30,
          'goal_4' => 40,
          'goal' => 150,
          'weighing' => 88,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective19,
          'product_id' =>$idobjectiveproduct63,
          'name' => '19.1 Promover y hacer seguimiento la gestión integral de residuos sólidos.',
          'goal_1' => 10,
          'goal_2' => 10,
          'goal_3' => 10,
          'goal_4' => 10,
          'goal' => 40,
          'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective20,
          'product_id' =>$idobjectiveproduct64,
          'name' => '20.1. Hacer seguimiento a la calidad del aire, a las fuentes de contaminación atmosférica e implementar acciones para su mejoramiento. No. de campañas de monitoreo de la calidad del aire realizadas',
          'goal_1' => 12,
          'goal_2' => 12,
          'goal_3' => 24,
          'goal_4' => 12,
          'goal' => 60,
          'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective20,
          'product_id' =>$idobjectiveproduct65,
          'name' => '20.1. Hacer seguimiento a la calidad del aire, a las fuentes de contaminación atmosférica e implementar acciones para su mejoramiento. No. de fuentes de emisión monitoreadas',
          'goal_1' => 100,
          'goal_2' => 100,
          'goal_3' => 100,
          'goal_4' => 100,
          'goal' => 400,
          'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective20,
          'product_id' =>$idobjectiveproduct66,
          'name' => '20.1. Hacer seguimiento a la calidad del aire, a las fuentes de contaminación atmosférica e implementar acciones para su mejoramiento. Porcentaje de redes y estaciones de monitoreo de la calidad del aire en operación (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.25,
          'goal_2' => 0.25,
          'goal_3' => 0.75,
          'goal_4' => 0.25,
          'goal' => 1.5,
          'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective20,
          'product_id' =>$idobjectiveproduct67,
          'name' => 'Asignación presupuestal 20.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective21,
          'product_id' =>$idobjectiveproduct68,
          'name' => '21.1. Formular y hacer seguimiento al Plan Regional de Cambio Climático. % de avance en la formulación y seguimiento al Plan Regional de cambio Climático',
          'goal_1' => 0.3,
          'goal_2' => 0.3,
          'goal_3' => 0.7,
          'goal_4' => 0.3,
          'goal' => 1.6,
          'weighing' => 42,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective21,
          'product_id' =>$idobjectiveproduct69,
          'name' => '21.1. Formular y hacer seguimiento al Plan Regional de Cambio Climático. % de entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático, en el marco de los instrumentos de planificación territorial (Resol. No. 0667 de 2016 - MADS)',
          'goal_1' => 0.5,
          'goal_2' => 0.5,
          'goal_3' => 0.5,
          'goal_4' => 0.5,
          'goal' => 2,
          'weighing' => 42,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective21,
          'product_id' =>$idobjectiveproduct70,
          'name' => 'Asignación presupuestal 21.1',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective21,
          'product_id' =>$idobjectiveproduct71,
          'name' => ' 21.2. Implementar medidas de mitigación y/o adaptación al cambio climático',
          'goal_1' => 0.3,
          'goal_2' => 0.3,
          'goal_3' => 0.7,
          'goal_4' => 0.3,
          'goal' => 1.6,
          'weighing' => 15,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective22,
          'product_id' =>$idobjectiveproduct72,
          'name' => '22.1. Apoyar a los municipios en la elaboración e implementación de estudios de amenaza, vulnerabilidad y/o riesgo',
          'goal_1' => 5,
          'goal_2' => 5,
          'goal_3' => 10,
          'goal_4' => 5,
          'goal' => 25,
          'weighing' => 58,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective22,
          'product_id' =>$idobjectiveproduct73,
          'name' => '22.2. Apoyar a los municipios con  el fortalecimiento a los Consejos Municipales de Gestión del Riesgo de Desastres  (CMGRD), y/o la actualización de los Planes Municipales de Gestión del Riesgo de Desastres (PMGRD).',
          'goal_1' => 20,
          'goal_2' => 20,
          'goal_3' => 20,
          'goal_4' => 20,
          'goal' => 80,
          'weighing' => 42,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective23,
          'product_id' =>$idobjectiveproduct74,
          'name' => '23.1. Desarrollar acciones que reduzcan el riesgo,   incluyendo Sistemas de Alerta Temprana, entre otros',
          'goal_1' => 20,
          'goal_2' => 20,
          'goal_3' => 20,
          'goal_4' => 20,
          'goal' => 80,
          'weighing' => 100,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective24,
          'product_id' =>$idobjectiveproduct75,
          'name' => '24.1. Fortalecer los procesos de formación para la cualificación de los servidores públicos',
          'goal_1' => 0.8,
          'goal_2' => 0.8,
          'goal_3' => 0.8,
          'goal_4' => 0.8,
          'goal' => 3.2,
          'weighing' => 41,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective24,
          'product_id' =>$idobjectiveproduct76,
          'name' => '24.2. Fortalecer los procesos de bienestar social y seguridad en el trabajo, para la mejora de la calidad de vida de los servidores públicos. % del plan de bienestar social ejecutado',
          'goal_1' => 0.9,
          'goal_2' => 0.9,
          'goal_3' => 0.9,
          'goal_4' => 0.9,
          'goal' => 3.6,
          'weighing' => 27,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective24,
          'product_id' =>$idobjectiveproduct77,
          'name' => '24.2. Fortalecer los procesos de bienestar social y seguridad en el trabajo, para la mejora de la calidad de vida de los servidores públicos. % de la fase de aplicación del sistema de gestión de seguridad y salud en el trabajo, implementada y mantenida',
          'goal_1' => 0.4,
          'goal_2' => 0.4,
          'goal_3' => 0.2,
          'goal_4' => 0.4,
          'goal' => 1.4,
          'weighing' => 27,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective24,
          'product_id' =>$idobjectiveproduct78,
          'name' => 'Asignación presupuestal 24.2',
          'goal_1' => 1,
          'goal_2' => 1,
          'goal_3' => 1,
          'goal_4' => 1,
          'goal' => 4,
          'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective24,
          'product_id' =>$idobjectiveproduct79,
          'name' => '24.3. Realizar los procesos de evaluación de los servidores públicos',
          'goal_1' => 0.3,
          'goal_2' => 0.3,
          'goal_3' => 0.2,
          'goal_4' => 0.3,
          'goal' => 1.1,
          'weighing' => 4,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective25,
          'product_id' =>$idobjectiveproduct80,
          'name' => '25.1. Adquirir y/o ejecutar bienes, servicios y obra pública de calidad, en el marco del principio de racionalidad y transparencia',
          'goal_1' => 0.8,
          'goal_2' => 0.8,
          'goal_3' => 0.9,
          'goal_4' => 0.8,
          'goal' => 3.3,
          'weighing' => 88,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('activities')->insert([
          'objective_id' => $idobjective25,
          'product_id' =>$idobjectiveproduct81,
          'name' => '25.2. Administrar bienes, servicios y obra pública, en el marco del principio de racionalidad y transparencia',
          'goal_1' => 0.8,
          'goal_2' => 0.8,
          'goal_3' => 0.9,
          'goal_4' => 0.8,
          'goal' => 3.3,
          'weighing' => 12,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
		  
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>1,
						'value' => 0.5,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>1,
						'value' => 27.5,
						'description' => 'Superar la meta del indicador con 14 municipios más a los 8 planteados,  obedece a: El fortalecimiento del equipo de trabajo, una mayor demanda de los entes territoriales para ser asesorados en los procesos de planificación y ordenamiento territorial y entrega de información temática de gestión del riesgo por parte de la Corporación, a varios municipios en la mayor parte de la jurisdicción.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>1,
						'value' => 0.1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>1,
						'value' => 0.1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia4 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>1,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia5 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>1,
						'value' => 0.75,
						'description' => '13243 registros reportados a la plataforma SISAIRE
					306 registro validados de SIR-RUA
					2092 registros de SNIF, correspondientes a salvoconductos y decomisos  reportados
					769 registros de RESPEL validados y transmitidos (Plataforma IDEAM)
					2033 registros de SIRH 
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia6 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>1,
						'value' => 0.1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>1,
						'value' => 0.25,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia9 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>1,
						'value' => 33.2,
						'description' => 'La meta se superó dado que para la vigencia 2016 se contó con el apoyo de 9 practicantes para realizar las actividades de dinamización de los Centros de Información Ambiental en el Territorio, sobrepasando las metas de cada una de las estrategias (mapas de conocimiento, lecturas ambientales, rincón ambiental, miércoles del conocimiento, formación a usuarios, redes sociales y foros ambientales) .',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia10 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>1,
						'value' => 106,
						'description' => 'Para el año 2016 se propuso la reducción del tiempo de cinco de los trámites ambientales que otorga la corporación. Se decidieron 1154, alcanzando un tiempo promedio de 106 días y con ello el  cumplimiento de la meta propuesta para la vigencia.
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia11 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>1,
						'value' => 0.73,
						'description' => 'La meta se cumple y se supera dado que en todos los trámites se realizaron mayor cantidad de seguimientos superando la meta  programada  del 50%, así: 
					Licencias ambientales 327 de 524 proyectadas
					Concesiones de agua: 894 de 910 proyectadas
					Permiso de Vertimientos: 456 de 864 proyectados
					Aprovechamiento Forestal: 224 de 381 proyectados
					Permiso de Emisiones: 66 de 71 proyectados
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>1,
						'value' => 0.21,
						'description' => 'La meta fue superada en  1% dado que se resolvieron 254 sancionatorios de 1193 pendientes de resolver.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>1,
						'value' => 0.01,
						'description' => 'La actividad no cuenta con meta para la vigencia 2016, la Corporación ha adelantado la priorización de las cuencas a intervenir con procesos de reglamentación: TAMESIS -  Quebrada. EL LAUREL, TAMESIS -  Quebrada LA PEINADA, VENECIA -  Quebrada LA TIGRA, SAN JERÓNIMO -  Quebrada GRANDE, AMAGÁ - Quebrada LA PAJA, AMAGÁ - Quebrada LA MANI',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>1,
						'value' => 86.5,
						'description' => 'Aunque el PGIRS no se les hizo seguimiento dado que según la normatividad en 2016 estos se encuentra en formulación, se lograron 66 seguimientos de los 69 PSMV formulados y 17 seguimientos a PUEAA de los 22 formulados, superando así la meta planteada para la vigencia en un 26,5%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia15 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>1,
						'value' => 3,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>1,
						'value' => 30,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>1,
						'value' => 7,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia19 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>1,
						'value' => 354,
						'description' => 'La meta para la vigencia se superó, dado que en el caso de liderazgo juvenil, se realizaron replicas con los promotores juveniles para acompañar grupos que no estaban en el proceso y que solicitaban acompañamiento, además, se realizaron iniciativas adicionales a las que se sacan a concurso público  en temas específicos y con el apoyo de otras dependencias. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>1,
						'value' => 147,
						'description' => 'La  meta se supera por que se atendieron  solicitudes de los diferentes actores para creación de nuevas mesas, las mesas veredales solicitaron acompañamiento y se crearon nuevas mesas en algunas de las zonas de áreas protegidas.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia22 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>1,
						'value' => 51,
						'description' => 'La meta se superó dado que los municipios en sus planes de desarrollo priorizaron trabajar con la corporación, haciendo aportes en los convenios para desarrollar acciones de educación ambiental, lo que implico el acompañamiento de 41 PROCEDA, adicionales a los proyectados. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia23 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>1,
						'value' => 23,
						'description' => 'La meta se superó dado que la Corporación implementó la estrategia de promotores en campo logrando acompañar a más comunidades y se logró acompañar 18 iniciativas de indígenas. Se ejecutó el componente de saneamiento básico que beneficio a  6 comunidades.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>1,
						'value' => 60,
						'description' => 'La meta se superó dado que la Corporación cuenta con 14 promotores los cuales realizan trabajo en campo logrando acompañar mayor número de comunidades en diferentes asuntos, adicionalmente, se realizaron 23 iniciativas en comunidades afrodescendientes. Se ejecutó el componente de saneamiento básico que beneficio a 7 comunidades.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia26 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>1,
						'value' => 1200,
						'description' => 'Se logró cumplir con la meta y se sobre pasa dado que se desarrollaron actividades que generaron más acompañamientos a mayor cantidad de familias como los encuentros municipales de agricultura sostenible, encuentros de promotores, eventos de intercambio de semillas y experiencias, adicionalmente, se realizó el proceso de acompañamiento a las familias rurales del Parque Arví.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>1,
						'value' => 66,
						'description' => 'La meta se logra cumplir y sobrepasar dado que se involucró el municipio de Envigado con procesos de acompañamiento y asesoría.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia28 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>1,
						'value' => 80,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia29 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>1,
						'value' => 0.19,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia30 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>1,
						'value' => 207853,
						'description' => 'La meta se superó dado que se desarrollaron estrategias masivas de comunicación como los microprogramas, las redes sociales y participación en ferias y eventos, lo que hace que se logre llegar a mayor cantidad de habitantes con información. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia31 = DB::getPdo()->lastInsertId(); 

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
						'value' => 9.63,
						'description' => 'La meta no se alcanza dado que la declaratoria de nuevas áreas protegidas es una actividad que demanda de la concertación previa y la firma de acuerdos con los propietarios de predios al interior de cada área, debido a que la recategorización del Páramo de Santa Inés se propone bajo la figura de Parque Natural Regional, su declaratoria implica la restricción fuerte al uso del suelo, esto ha dificultado la firma de estos acuerdos con los propietarios.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia34 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>1,
						'value' => 0.73,
						'description' => 'Las tres (3) unidades de páramos delimitadas por el MADS en la jurisdicción de Corantioquia, están ubicadas al interior de ärea protegidas Regionales declaradas y administradas por la Corporación, de las cuáles dos (2) cuentan con Plan de manejo aprobado y en ejecución que cuentan con zonificación y régimen de uso acorde con la normatividad vigente sobre áreas protegidas.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia35 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>1,
						'value' => 0.75,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia36 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>1,
						'value' => 0.31,
						'description' => 'Considerando las diferentes fases para la formulación del Plan General de Ordenación Forestal, de acuerdo con la Guía para el Desarrollo de la Ordenación Forestal Integral y Sostenible en Colombia del MADS, la fase de aprestamiento corresponde a un avance del 55% de la formulación de dicho plan. Por tanto, con base en la superficie que cuenta con el avance de esta fase (838.137,17 ha) y en el área total objeto de ordenación (1.478.770,67 ha), se determina que el avance ponderado de la formulación del Plan General de Ordenación Forestal es del 31,17%.    ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>1,
						'value' => 50.8,
						'description' => 'Se superó la meta dado que se tuvo buena respuesta a las convocatorias a las iniciativas educativo ambientales donde las comunidades dieron mayor prioridad a la restauración. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>1,
						'value' => 0.1,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>1,
						'value' => 0.73,
						'description' => 'La meta se superó porque se contó con un conveniante que fue el Jardín Botánico Joaquín Antonio Uribe que aporto para la conservación de un número mayor de especies de flora, igualmente para fauna se gestionaron y se obtuvieron recursos de conveniantes internacionales como TNC y entidades de orden local como la Sociedad de Mejoras Públicas de Medellín a través del Zoológico Santa Fe. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia42 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>1,
						'value' => 0.25,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia43 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>1,
						'value' => 0.5,
						'description' => 'Se tenía como meta, trabajar dos (2) especies. La meta se supera por la necesidad de atender las diferentes contingencias presentadas por las especies invasoras;  se desarrollaron medidas de prevención, control y manejo de tres especies invasoras de fauna: Caracol gigante africano, Rana Toro y Garza Bueyera, en los municipios donde se ha registrado su presencia. También se realizaron medidas de manejo y control de la planta invasora, conocida como ojo de poeta (Thumbergia alata) en el corregimiento de Santa Elen',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia44 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>1,
						'value' => 32.5,
						'description' => 'Se superó la meta dado que se logró avanzar en un 66% de un POMCA del 50% que se tenía como meta (este avance es teniendo en centa las diferentes fases para la formulación del POMCA y las ponderaciones asignadas a cada una de ellas); así mismo se logró avanzar en la formulación de un plan de manejo de acuiferos, cumpliendo  con lo proyectado para la vigencia 2016.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia46 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>1,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia47 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>1,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia49 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>1,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia50 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>1,
						'value' => 2398,
						'description' => 'La meta se supera dado que se realizaron gestiones con la Gobernación de Antioquia para desarrollar actividades de restauración pasiva en 13 predios. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia52 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>1,
						'value' => 2,
						'description' => '
					La meta se superó dado que se seleccionaron dos ecosistemas estratégicos por su importancia estratégica para el recurso hídrico. 
					',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>1,
						'value' => 31,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>1,
						'value' => 80,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>1,
						'value' => 0.94,
						'description' => 'La meta se supera dado que se logró optimizar la red, con un mantenimiento más efectivo',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>1,
						'value' => 20,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>1,
						'value' => 0.25,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>1,
						'value' => 0.5,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia60 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>1,
						'value' => 50,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia61 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>1,
						'value' => 50,
						'description' => 'La meta se sobrepasa dado que se firmaron un total de 50 convenios para la descontaminación hídrica, realizando 10 más de los proyectados para la vigencia, gracias a  las solicitudes de los municipios y disponibilidad de recursos del Fondo de inversión para la descontaminación hídrica. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>1,
						'value' => 14,
						'description' => 'La meta se sobrepasa dado que se tuvo una mayor demanda de los municipios para los proyectos de gestión integral de residuos sólidos. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia63 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>1,
						'value' => 12,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia64 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>1,
						'value' => 192,
						'description' => 'La meta se sobre pasa dado que se realizaron convenios a través de los cuales entran dos unidades móviles a hacer monitoreos en las zonas limítrofes con el área metropolitana.  ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia65 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>1,
						'value' => 0.66,
						'description' => 'La meta se sobre pasa debido a que se logró poner en operación la estación de Caucasia que en al inicio de la vigencia 2016 presento inconvenientes técnicos. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia66 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>1,
						'value' => 0.3,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>1,
						'value' => 0.66,
						'description' => 'La meta se supera puesto que desde la planificación se tenía establecido asesorar un 50% de los municipios de la Jurisdicción equivalente a 40 municipios y se asesoraron en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático a 13 municipios más, adicionalmente, se desarrollaron foros de capacitación, presencias institucionales y asesoría directa a los entes territoriales de acuerdo a la planificación, las necesidades del territorio y las solicitudes de los entes territoriales.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>1,
						'value' => 0.3,
						'description' => '',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>1,
						'value' => 11,
						'description' => 'La meta se superó dado que se atendieron 6 municipios más de los que se tenía establecidos en la meta inicial con estudios de amenazas, vulnerabilidad y/o riesgos. Esto obedece a que logro ampliar la cobertura de municipios  con estudios a través del convenio con EAFIT y mediante la implementación de estos para la asesoría de actualización  de los planes de Ordenamiento Territorial. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>1,
						'value' => 52,
						'description' => 'La meta se superó dado que se atendieron 32 municipios más de los que se tenía establecidos en la meta inicial con acciones para el fortalecimiento de los CMGRD y/o PMGRD, esto obedece al desarrollo de foros de capacitación, presencias institucionales y asesoría directa a los CMGRD para el fortalecimiento del PMGRD, por acciones propias de los funcionarios corporativos y del convenio firmado con la Universidad Nacional atendiendo las solicitudes del territorio.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia73 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>1,
						'value' => 48,
						'description' => 'La meta se superó dado que se atendieron 28 municipios más de los que se tenía establecidos en la meta inicial con acciones de reducción del riesgo, esto obedece al desarrollo de talleres con líderes comunitarios, ferias ambientales, jornadas escolares, apoyo en el proceso de Hogares Ecológicos, PIRAGUA y al Aula Móvil liderados por la corporación; además a la capacitación a comunicadores de 12 municipios en Gestión de Riesgos y Cambio Climático con el apoyo de la Cámara de Comercio de Medellín. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>1,
						'value' => 0.84,
						'description' => 'La meta sobre pasa el 80% dado que de las 18 actividades de capacitación tienen un porcentaje de ejecución que promedia en el 84%.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia75 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>1,
						'value' => 1,
						'description' => 'El avance del indicador sobrepasa la meta dado que el plan de bienestar social se ejecutó en su totalidad. ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia76 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>1,
						'value' => 0.39,
						'description' => 'La meta no se logra cumplir en el 40% como se tenía establecido para la vigencia, puesto que falto personal por capacitar en técnicas de supervivencia y porque no se lograron llevar a cabo investigaciones al 100 % de los  accidentes de trabajo del año 2016 ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 

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
						'value' => 94.44,
						'description' => 'La meta se sobre pasa puesto que como una acción de planificación se propuso un mínimo del 80% para dar cumplimiento, pero se logró contratar efectivamente el 94.4% de los procesos en materia de compras incluidos en el plan de adquisiciones.  ',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>1,
						'value' => 1,
						'description' => 'La meta se sobre pasa puesto que como una acción de planificación se propuso un mínimo del 80% para dar cumplimiento, pero se logró contratar efectivamente el 100% de los procesos en materia de servicios incluidos en el plan de adquisiciones.',
						'date_report' => '2016-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia81 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>2,
						'value' => 0.5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia82 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>2,
						'value' => 27.5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia83 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>2,
						'value' => 0.1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>2,
						'value' => 0.1,
						'description' => 'Se realizó el análisis de la información y conocimiento de 6 procedimientos y sólo a 2 de ellos Se realizó la modelación',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>2,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia86 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>2,
						'value' => 0.75,
						'description' => 'No se alcanzó a validar la totalidad de los registros de RUA y RESPEL',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>2,
						'value' => 0.1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia89 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>2,
						'value' => 0.25,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia90 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>2,
						'value' => 33.2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>2,
						'value' => 106,
						'description' => 'Se racionalizaron trámites de vertimientos y concesiones de agua.
					Se fortalece la labor de la autoridad ambiental, a través de convenio suscrito con ECODES, se apoyó la evaluación de los diferentes trámites ambientales en el territorio.
					Se optimizaron los controles de los trámites solicitados por los usuarios.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>2,
						'value' => 0.73,
						'description' => 'Se fortalece la labor de la autoridad ambiental, a través de convenios suscritos con ECODES y FUNDACION EPM para apoyar el seguimiento a las autorizaciones ambientales.
					Se estandarizó el procedimiento de control y seguimiento a partir de la expedición del manual interno de control y seguimiento. 
					 ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia93 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>2,
						'value' => 0.21,
						'description' => 'Se implementaron diferentes estrategias de notificación, permitiendo incrementar de manera porcentual la desiciones.
					Se creó la mesa interna de sacionarorios, para formular directrices y apoyar criterios corporativos.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>2,
						'value' => 0.01,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia95 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>2,
						'value' => 86.5,
						'description' => 'Se fortalece la labor de la autoridad ambiental, a través de un convenio suscrito con el Centro Nacional de Producción más Limpia, apoyando el seguimiento al 100% de los Planes de Saneamiento y Manejo de Vertimiento.
					Se realizó una jornada especial de trabajo que permitió hacer revisión a los PGIRS de los 80 municipios de la Jurisdicción.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia96 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia97 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>2,
						'value' => 3,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia98 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>2,
						'value' => 30,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia99 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>2,
						'value' => 7,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia100 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>2,
						'value' => 354,
						'description' => 'La meta para la vigencia se superó, dado que en el caso de liderazgo juvenil, se realizaron replicas con los promotores juveniles para acompañar grupos que no estaban en el proceso y que solicitaban acompañamiento, además, se realizaron acompañamiento a iniciativas de organizaciones o colectivos ambientales adicionales  con el apoyo de otras dependencias. Adicionalmente nos aportó a la meta la apuesta de los municipios por acompañar estos procesos ambientales a través de convenios interadministrativos',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia102 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>2,
						'value' => 147,
						'description' => 'Se acopañaron un mayor número de mesas por haber involucrado mesas veredales',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>2,
						'value' => 51,
						'description' => 'Nos aportó adicional a la meta la apuesta de los municipios por acompañar estos procesos ambientales a través de convenios interadministrativos',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>2,
						'value' => 23,
						'description' => 'Hubo una mayor demanda de las comunidades para atender las necesidades de fortalecimiento a los Planes de Vida, las cuáles fueron canalizadas a través de la OIA. Igualmente la Gestión realizada conjuntamente con el Programa VII para desarrollar acciones de Saneamiento Hídrico permitió un mayor número de acompañamientos a comunidades indígenas ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia106 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>2,
						'value' => 60,
						'description' => 'Hubo una mayor demanda de las comunidades para atender las necesidades de fortalecimiento a los Planes de Etnodesarrollo, las cuáles fueron canalizadas a través de convenio entre CORAMA-Fundación EPM y Corantioquia. Igualmente la Gestión realizada conjuntamente con el Programa VII para desarrollar acciones de Saneamiento Hídrico permitió un mayor número de acompañamientos a comunidades Afrodescendientes',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia107 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>2,
						'value' => 1200,
						'description' => 'La gestión desarrollada en años anteriores con Hogares Ecológicos arroja un números considerable de estas familias que se continuan fortaleciendo a partir de líderes campesinos y multiplicadores apropiados del proceso',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>2,
						'value' => 66,
						'description' => 'Los municipios solicitaron en el 2017 el acompañamiento de los CIDEAM para dar el cubrimiento del 100% de los municipios de nuestra Jurisdicción',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>2,
						'value' => 80,
						'description' => 'La capacidad operativa de la Subdirección de Cultura permitió acompañar las solicitudes adicionales del las instituciones educativas que solicitaron apoyo en su PRAE',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>2,
						'value' => 0.19,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia111 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>2,
						'value' => 207853,
						'description' => 'La meta se superó debido al aumento de rating en los microprogramas y programas especiales que ejecutamos con nuestro aliado Teleantioquia. Según lo reporta El Canal vía informe de Ibope, entidad encargada del estudio sobre los hábitos de consumo de televisión de los Colombianos, durante varios meses en el año estuvimos entre los 5 programas más vistos en el parrilla de Teleantioquia, dándonos altos volúmenes de seguidores y televidentes que se informan a través de estos productos audiovisuales',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>2,
						'value' => 9.63,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>2,
						'value' => 0.73,
						'description' => 'Las tres (3) unidades de páramos delimitadas por el MADS en la jurisdicción de Corantioquia, están ubicadas al interior de ärea protegidas Regionales declaradas y administradas por la Corporación, de las cuáles dos (2) cuentan con Plan de manejo aprobado y en ejecución que cuentan con zonificación y régimen de uso acorde con la normatividad vigente sobre áreas protegidas.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>2,
						'value' => 0.75,
						'description' => 'La meta era realizar 75% de 20 acciones en ecosistemas estratégicos, debido a los recursos gestionados con EPM se pudieron dsarrollar 21 acciones asociadas a Humedales, SILAP y acciones de restauración  ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>2,
						'value' => 0.31,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>2,
						'value' => 50.8,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia120 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>2,
						'value' => 0.1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>2,
						'value' => 0.73,
						'description' => 'Se incrementó el alcance de la meta debido a recursos adicionales con el AMVA ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>2,
						'value' => 0.25,
						'description' => 'Se incrementó el alcance de la meta debido a recursos adicionales con el AMVA ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>2,
						'value' => 0.5,
						'description' => 'Se incrementó el alcance de la meta debido a recursos adicionales con el AMVA ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 

					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>2,
						'value' => 32.5,
						'description' => 'Se lograron avances en las respectivas etapas de la formulación de los POMCA Aburra, Amaga y Aurra: 
					*Aburrá, aprestamiento, Diagnostico, Prospectiva y Zonificación  culminados y aprobados. Formulación en etapa de ajustes.
					*Amaga, aprestamiento aprobado y diagnostico avanzado, pendiente de ajustes.
					*Aurra, aprestamiento aprobado y diagnostico avanzado

					* Se adoptaron POMCAS en Comisión Conjunta  los POMCA de los Rio Negro, Nare, Cocorná y Samaná Norte.

					Adicionalmente se culminó el proceso de formulación de los PMA del Sistema Acuífero del Occidente Antioqueño y Magdalena Medio, (Pendiente Consulta previa).
					',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>2,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>2,
						'value' => 0.2,
						'description' => 'Se realizó ejecución de acciones en los POMCA Aurra, Amaga y Grande

					Fortalecimiento a los Consejos de cuenca, conservación, monitoreo del recurso hídrico, armonización de instrumentos de planificación, iniciativas ambientales, y trabajo con sectores productivos.

					También se ejecutaron acciones asociadas a los PMA del Sistema Acuífero del Occidente y Bajo Cauca Antioqueño.

					Se ejecutaron acciones en 11  cuerpos de agua con  PORH formulados de la Jurisdicción de Corantioquia.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>2,
						'value' => 0.2,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>2,
						'value' => 2398,
						'description' => 'Convenio con 10 municipios para la restauración activa y pasiva de fuentes abastecedoras; en convenio con EPM se beneficiarons 8 municipios de la cuenca de los río Grande- Chico, Guadalupe y Porce. ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>2,
						'value' => 2,
						'description' => 'Corresponde a los Esquemas de PSA firmado con la Gobernación de Antioquia y el AMVA.
					- Corredor de las Alegrías
					- Cuenca Ríos Grande- Chico, Guadalupe y Porce
					- Municipio de Jardín
					- Convenio con Gobernación Antioquia (27 municipios)
					- Convenio con el AMVA (5 municipios)',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia134 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>2,
						'value' => 31,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>2,
						'value' => 80,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>2,
						'value' => 0.94,
						'description' => 'Se adelantaron inversiónes para mejorar la conectividad de los sistemas de redes pluviométricas en el Programa Piragua, qu epermitió hacer mejoramientos en línea y via remota.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>2,
						'value' => 20,
						'description' => 'Se realizó validación y auditoría de acreditación de nuevos parámetros ante el IDEAM con la adquisición de nuevos equipos.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>2,
						'value' => 0.25,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>2,
						'value' => 0.5,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>2,
						'value' => 50,
						'description' => 'Se adelantarón en 41 municipios munitoreos de sanemaiento (57 PTAR).',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>2,
						'value' => 50,
						'description' => 'Se adelantarón acciones en 34 municipios en materia de Saneamiento hidrico urbano y rural, que incluye comunidades aflors e indígenas.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia143 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>2,
						'value' => 14,
						'description' => 'Se adelantó convenio con el AMVA para fortalecer la gestión de residuos sólidos, orgánicos y RESPEL.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia144 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>2,
						'value' => 12,
						'description' => 'Se adelantaron mayor número de campañas de monitoreo de calidad del aire en convenio con la UPB.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>2,
						'value' => 192,
						'description' => 'Se adelantaron mayor número de monitoreo de fuentes de emisiones móviles en convenio con la UPB y el AMVA.',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia146 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>2,
						'value' => 0.66,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia147 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>2,
						'value' => 0.3,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia149 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>2,
						'value' => 0.66,
						'description' => 'Se mejoró la meta del indicador debido a que en la ejecuón del convenio con el T de A para la construcción del Plan Regional de Cambio Climático se logró acompañar a 78 municipos   en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático y gestión del riesgo',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>2,
						'value' => 0.3,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>2,
						'value' => 11,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>2,
						'value' => 52,
						'description' => 'Se mejoró la meta del indicador debido a que en la ejecuón del convenio con el T de A para la construcción del Plan Regional de Cambio Climático se logró acompañar a 78 municipos   en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático y gestión del riesgo',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>2,
						'value' => 48,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>2,
						'value' => 0.84,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>2,
						'value' => 0.39,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>2,
						'value' => 1,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>2,
						'value' => 0.3,
						'description' => 'No se logra el avance físico, dado que se considero oportuno implementar el sistema una vez se surta el Proceso de Concurso Público para proveer los cargos de carrera administrativa',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>2,
						'value' => 94.44,
						'description' => '',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>2,
						'value' => 1,
						'description' => 'Se mejoró la programación y la gestión para poder avanzar en la totalidad de las intervenciones programadas ',
						'date_report' => '2017-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>3,
						'value' => 17.5,
						'description' => 'El 100% del indicador para el cuatrienio equivale a la formulación del Plan de Acción 2016-2019 y PGAR que entraría en vigencia en 2020 (50% de peso para cada uno). El 25% de meta para la presente vigencia equivale al proceso participativo de formulación y consolidación del proyecto inicial PGAR.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>3,
						'value' => 0.4,
						'description' => '32 municipios  asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales para la revisión y ajuste de los POT de 32 programados. Este indicador corresponde al indicador 1.2 del Plan de Acción 2016-2019.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>3,
						'value' => 0.4,
						'description' => 'La meta del 40% para la vigencia corresponde a la consolidación de los informes de gestión 2017, 2018-I, II Y III, Realización de audiencia pública de rendición de cuentas de 2017 e informe de seguimiento al PGAR.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>3,
						'value' => 0.38,
						'description' => 'El 100% del indicador para el cuatrienio equivale a el análisis de información y modelamiento en herramientas informáticas de 20 procedimientos asociados a los procesos misionales corporativos   Administración  integral de los recursos naturales renovables   y   Gestión de la Cultura  . La meta de 40% para la vigencia es realizar este análisis y modelamiento en 8 de estos procedimientos.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>3,
						'value' => 0.59,
						'description' => 'Se proyecta para la vigencia del Plan de Acción 2016-2019 avanzar como mínimo en un 70% de las siguientes acciones (cada una de ellas ponderada):  analisis de los sistemas de informacion que permita el ciclo completo de la gestión documental de la corporación, fortalecer la  Bodega de Datos Corporativa que de respuesta a los diferentes reportes que requiere la corporacion, analizar el Portal Geográfico para la articulación e integración de la información al Sistema de Información Ambiental para Colombia-SIAC  y analizar la GIC en la Intranet Corporativa. Para la presente vigencia se propone un avance del 50% de éstas acciones, teniendo en cuenta su ponderación.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>3,
						'value' => 120.9,
						'description' => 'Para 2018 reportaron:
					• RUA: 81 registros transmitidos de 173 usuarios inscritos y activos en la plataforma.
					• RESPEL: 276 registros transmitidos de 596 registros totales a ser validados. 
					• SIRH: 4.766 registros entre los que se encuentran fuente, usuarios, concesiones, vertimientos y PUEAA de 2.703 registros esperados a reportar en el año. 
					• SISAIRE: 15.676 registros reportados, de 14.000 registros esperados a reportar en el año
					• SNIF: 844 registros para productos maderables y no maderables, de 432 registros esperados a reportar en el año.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>3,
						'value' => 0.3,
						'description' => 'El 100% del indicador para el cuatrienio equivale a la actualización del Plan Estrategico de la Tecnologías de información y las comunicaciones - PETICO, la formulación del plan de seguridad informática (ambos se ejecutaron entre 2016 y 2017) y con el soporte y actualización de los diferentes componentes de la plataforma teleinfomática, que para la vigencia 2018 se trabaja sobre  15 de estos componentes (Soporte, Mantenimiento y actualización de licencias ArcGIS – ESRI; Mantenimiento y soporte técnico del sistema integrado KOHA; Soporte y mantenimiento y módulo de gestión regional del Portal Geográfico; Soporte y mantenimiento a programas y equipos publishow; Servicios de intercomunicación de datos e internet; Software assurance de los productos MICROSOFT;  
					Soporte, mantenimiento al centro de cómputo; Soporte, mantenimiento y desarrollo en las aplicaciones SIRENA; actualización, mantenimiento y soporte de las aplicaciones SAFIX Y PGAR.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>3,
						'value' => 0.25,
						'description' => 'El 100% del indicador para el cuatrienio equivale al levantamiento de información; análisis de Información, construcción y diligenciamiento de matriz y gestor de información; definición e implementación de estrategia de socialización, para promover la gestión de la información y el conocimeinto de comunidades afro, indigenas, campesinos y grupos de jóvenes.  La meta del 25% para la vigencia se ejecutó con acciones para el tema de campesinos.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>3,
						'value' => 33.4,
						'description' => 'El 100% del indicador para el cuatrienio equivale a la implementación de 10 estrategias para la dinamización de los Centros de Información Ambiental Corporativo.  La meta del 35% equivale a las siguientes estrategias y metas: 6 talleres de mapa de conocimiento,  43 talleres de formación de usuarios en el uso de herramientas para la búsqueda y recuperación de información,  26 Miércoles del Conocimiento,  diseñó y desarrollo la estrategia “Información Ambiental a tu Alcance”,  envío por correo 5 alertas de “Información Ambiental a tu Alcance”.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>3,
						'value' => 63,
						'description' => 'La meta 2018 se supera, estaba establecida en 100 días de tiempo promedio. Equivale al Indicador  4.1.1 del Plan de Acción 2016-2019',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>3,
						'value' => 78.5,
						'description' => 'Seguimiento a tramites de licencias, concesiones, permisos de vertimiento, aprovechamiento forestal y emisiones atmosfericas, con respecto a meta de la vigencia. Se estimó como meta 281 autorizaciones ambientales, cumpliendose el 100%',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>3,
						'value' => 30.1,
						'description' => 'La meta para el cuatrieno es resolver el 40% de los procesos sancionatorios que inician. Para la vigencia 2018 se han resuelto 626 de 2079 con acto administativo de iniciación.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia175 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>3,
						'value' => 33.33,
						'description' => 'La meta son dos (2) cuerpos de agua  reglamentados y se reglamentaron dos (2): Q. Grande (San Jerónimo) con resolución No. 60HX-RES1812-7560 del 28/12/2018 y Q. La Mirandita (Sopetrán) con resolución No. 160HX-RES1812-7583 del 28/12/2018',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>3,
						'value' => 92.7,
						'description' => 'La meta del cuatrienio es realizar seguimiento y control al 100% de los PSMV, PGIRS y PUEAA aprobados. Para la vigencia 2018 se tiene un avance de 66 PSMV, 70 PUEAA Y 80 PGIRS con seguimiento.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia178 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>3,
						'value' => 5,
						'description' => 'Se adelantaron las actividades relacionadas con los procesos de formación a los actores definidos para la vigencia: Acueductos Veredales e instituciones educativas, sector cafetero, fortalecimiento de la gobernanza forestal, sector minero y Municipios y/o Concejos.

					Se realizaron 278 actividades de formación con los 5 actores estratégicos y se abrieron 151 expedientes producto del proceso de legalización. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>3,
						'value' => 30,
						'description' => 'En estas presencias se relizaron 257 actividades realizadas, 198 usuarios atendidos y 7.555 personas impactadas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia180 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>3,
						'value' => 8,
						'description' => 'Realización del Aprestamiento e inauguración sede local San Andrés de Cuerquia. 
					Ejecución de Contratos de dotación y mejoramiento de oficinas y sedes locales.
					Ejecución de actividades de asesoría y acompañamiento al proceso de digitalización y facturación en todas las OT',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia182 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>3,
						'value' => 164,
						'description' => 'Los 164 procesos incluyen:  71 grupos de jóvenes fortalecidos, 40 grupo de guardianes de la naturaleza participantes y 53 iniciativas apoyadas ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>3,
						'value' => 122,
						'description' => '122 Mesas Ambientales en 80 municipios de la jurisdicción distribuidas así:
					74 mesas Centrales; 25 mesas Corregimientales y temáticas; 23 mesas Veredales en Angostura, Valdivia, Valdivia y Guadalupe',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>3,
						'value' => 139,
						'description' => '8 PROCEDA uno por Oficina Territorial - 4 consejos de cuenca acompañados en las cuencas de los Ríos: ABURRÁ, RIO AMAGÁ, RIO AURRA, RIO GRANDE Y CHICO - 4 Proceda asociados a los planes de manejo ambiental de acuíferos - 27 Proceda proyectados en pago por servicios ambientales –PSA- 1 proceso en GIRS con Comunidades rurales - 9 procesos educativos en GIRS Municipales - 1 proceso educativo de GIRS en 12 municipios (10 del AMVA, Angelópolis y Amagá) - 1 proceso en los 11 Municipios de la Provincia Cartama - 80 procesos educativos asociados al proyecto PIRAGUA - 1 proceso en Armenia relacionado con población juvenil, rural y urbana - 3 Proceda para la protección de áreas protegidas vinculados a la labor de  Guardabosques - ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>3,
						'value' => 28,
						'description' => 'Se acompañaron estas 28 comunidades indígenas con apoyo en  acciones de Plan de Vida, fortalecimiento organizativo, apropiación tecnológica y saneamiento hídrico',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia187 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>3,
						'value' => 93,
						'description' => 'Estas comunidades fueron acompañados a través de promotores ambientales de territorios afro, visitas de acompañamiento para el fortalecimiento organizativo de los consejos, consultas previas, acciones Ambientales, talleres de Apropiación tecnológica y plantas potabilizadoras de agua ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia188 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>3,
						'value' => 767,
						'description' => '587 se vincularon a procesos de fortalecimiento porque venían de años anteriores y 180, corresponden a hogares nuevos en el proceso',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>3,
						'value' => 82,
						'description' => '80 municipios de la jurisdicción.
					El municipio de Barbosa participó en 2 procesos y se fortaleció la gestión del CIDEA departamental',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>3,
						'value' => 125,
						'description' => 'Se fortalecieron 117 PRAE de instituciones educativas en toda la jurisdicción mediante el apoyo a iniciativas. Adicionalmente en el  municipio de Barbosa se fortalecieron 8 PRAE.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>3,
						'value' => 0.27,
						'description' => 'El reporte del indicador en la vigencia 2018 correponde al avance con acciones asociadas a las estrategias: movilizadora, organizacional, corporativa y de relacionamiento e informativa del Plan de Comunicaciones. Así mismo se ajustó el plan de comunicaciones con la adhesión del  nuevo manual de eventos corporativo y se actualizó también el manual de imagen institucional',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>3,
						'value' => 776400,
						'description' => 'La meta se superó dado que se desarrollaron estrategias masivas de comunicación como los microprogramas de televisión, las redes sociales y participación en ferias y eventos, lo que hace que se logre llegar a mayor cantidad de habitantes con información',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>3,
						'value' => 1,
						'description' => 'De las 9 áreas protegías con planes de manejo, se ejecutan acciones en 9 áreas protegidas (DMI Cañón del Rio Alicante, DMI Cuchilla Cerro Plateado Alto San José, DMI Cuchilla Jardín – Támesis, DMI Divisoria Valle de Aburra Rio Cauca, DMI Nubes-Trocha-Capota, DMI Rios Barroso San Juan, DMI Sistema de Paramos y Bosques Alto-andinos del Noroccidente Medio Antioqueño, RFPR Cerro Bravo y RFPR Farallones de Citará',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>3,
						'value' => 42.7,
						'description' => 'Con la Declaratoria del DRMI Alto de Ventanas y DRMI Ciénaga Chiqueros, se superó la meta física de la vigencia. Dado que la meta en hectáreas para la presente anualidad era la declaratoria de mínimo 9.230 ha (13%) y se lograron declarar 30.303 ha. 
					Se tiene un avance superior al 100% de esta meta ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>3,
						'value' => 0.8,
						'description' => 'En el mes de frebrero de 2018, el MADS  delimitó el páramo Citará a tráves de la Resolución No 0178 de 2018. Cuando se apruebe el plan de manejo Corredor de las Alegrias (paramo del Sol Las Alegrias) se avanzará con el acto administrativo de la Corporación que adopta la zonificación y régimen de usos de páramo, logrando así el cumplimiento del 100%  de complejos de páramos con zonificación y régimen de usos.
					La meta para la corporación en la vigencia 2018 es del 29%, lográndose un avance superior al 100% de esta meta',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>3,
						'value' => 1,
						'description' => 'Se lograron 23 acciones en ecosistemas estratégicos en igual número de municipios (Carolina del Príncipe, Angostura,  Guadalupe, Santa Rosas de Osos,  Gómez Plata,  Yolombó, Amalfi, Yarumal, Ituango,  Nechí, Sabaneta, Tarazá, Yondó, Puerto Nare, Puerto Berrío, Caucasia, Anorí, Carolina del Príncipe, Angostura, Santa Rosa de Osos, Yarumal, Guadalupe y Zaragoza); con restauración activa y pasiva, control y vigilancia, educación ambiental, fortalecimiento institucional de SILAPs y mantenimientos de caños y ciénagas.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>3,
						'value' => 0.6,
						'description' => 'Actualmente el 100% del área sujeta a ordenación forestal, se encuentra en etapa de formulación.
					La meta para la corporación en la vigencia 2018 es del 80%',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>3,
						'value' => 52.3,
						'description' => 'Total de 1.926 ha; de las cuáles 1.750 son de restauración ecológica y 176 en rehabilitación',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia201 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>3,
						'value' => 37.8,
						'description' => 'La meta para la corporación en la vigencia 2018 es del 30%, lográndose un avance superior al 100% de esta meta',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia202 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>3,
						'value' => 0.83,
						'description' => 'La meta del Plan de acción 2018 es superada, estaba proyectada en un 75%. Se desarrollaron acciones en 15 especies de flora y 18 de fauna amenazadas.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>3,
						'value' => 1,
						'description' => 'Se ejecutan medidas de conservación en  124 especies de flora priorizadas en los tres viveros corporativos y rehabilitación de 5 especies de fauna, para un total de 129 especies',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>3,
						'value' => 0.63,
						'description' => 'La meta del Plan de acción 2018 es superada, estaba proyectada en un 50%. Se desarrollaron acciones en Caracol gigante africano, Rana toro e Hipopótamo. En flora  con ojo de poeta (Thumbergia alata) y el retamo espinoso (Ulex europaeus',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>3,
						'value' => 33.6,
						'description' => 'POMCA río Aburrá – NSS (2701-01). Aprobado en el marco de la Comisión Conjunta mediante Resoluciones 040-RES1811-6712 de Corantioquia del 30 de noviembre de 2018 y 00-003241 del AMVA y 112-5007-2018 de CORNARE. 
					POMCA río Cauca - río Amagá quebrada Sinifaná (2620-01). Aprobado mediante Resolución 040-RES1811-6715 del 30 de noviembre de 2018. 
					POMCA directos río Cauca (md) - río Aurra - NSS (2620-02). Aprobado mediante Resolución 040-RES1811-6716 del 30 de noviembre de 2018.

					En los POMCA Río San Juan y Bajo Nechí la Corporación avanzó en los procesos formales previos, declaratoria y se tiene la fase de aprestamiento aprobada.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>3,
						'value' => 1,
						'description' => 'La meta son 4 planes y se adoptaron doce (12) Planes de ordenamiento del recurso hídrico: Resolución de adopción del PORH de la Quebrada Magallo N° 040-RES1806-3328, resolución de adopción del PORH del Río Poblanco N° 040-RES1806-3327, Resolución de adopción del PORH del Río Grande N° 040-RES1806-3325,Resolución de adopción del PORH del Río San Juan N° 040-RES1806-3326, Resolución de adopción del PORH de la Quebrada San Mateo 040-RES1806-3329, Resolución de adopción del PORH de la Quebrada La Sinifaná 040-RES1806-3330, Resolución de adopción del PORH del Río Amagá N° 040-RES1812-7442, Resolución de adopción del PORH del Río Mulatos 040-RES1812-7444, Resolución de adopción del PORH del Río Ité N° 040-RES1812-7446, Resolución de adopción del PORH del Río San Andres N° 040-RES1812-7447, Resolución de adopción del PORH del Río Anorí N° 040-RES1812-7448, Resolución de adopción del PORH del Río Tarazá N° 040-RES1812-7449.
					- Resolución de adopción del PORH del Río Amagá  N° 040-RES1812-7442
					- Resolución de adopción del PORH del Río Mulatos 040-RES1812-7444
					- Resolución de adopción del PORH del Río Ité N° 040-RES1812-7446
					- Resolución de adopción del PORH del Río San Andres N° 040-RES1812-7447
					- Resolución de adopción del PORH del Río Anorí N° 040-RES1812-7448
					- Resolución de adopción del PORH del Río Tarazá N° 040-RES1812-7449',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>3,
						'value' => 1,
						'description' => 'Para el calculo del indicador en materia de POMCAS solo se tienen en cuenta para el calculo del indicador los instrumentos liderados por la Corporación: POMCA Rio Grande - Rio Chico, Rio Aburrá, Rio Amaga -Qda. Sinifaná, Rio Aurra. Los PMA en ejecución son los planes de manejo ambiental en los acuíferos del Occidente antioqueño, del Bajo Cauca antioqueño, del Magdalena Medio, que ya fueron formulados pero que aun no han sido aprobados.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>3,
						'value' => 50.73,
						'description' => 'Actualmente se ejecutan acciones en 14 PORH formulados (PORH Rio Aurra, Rio Amagá, Quebrada La Sinifaná, Rio Poblanco, Rio Piedras, Rio Mulatos, Rio San Juan, Quebrada San Mateo, Quebrada Magallo, Quebrada La Sopetrana, Rio Grande, Rio Guadalupe, Rio Ité, Quebrada La Cianurada), con ponderaciónes en el tipo de acción (temas de oferta, demanda, calidad, riesgo, fortalecimiento o gobernabilidad). Las acciones de la vigencia se traducen en defición de los objetivo de calidad, gestión de oferta y demanda, promoción de la legalidad, fortalecimiento de la gobernabilidad.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>3,
						'value' => 4857.1,
						'description' => 'De acuerdo a la tipología del indicador, se acumulan las hectáreas de las vigencias anteriores. Para la vigencia 2018, la Subdirección de gestión Ambiental, hizo la restauración activa de 149 hectáreas de tipo protector y con restauración pasiva se conservó 1541.2 hectáreas para un total restaurado de 1690.2 hectáreas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>3,
						'value' => 5,
						'description' => 'De acuerdo a la tipología del indicador, se reportan 5 esquemas de PSA que vienen caracterizados y/e implementados desde las vigencias 2016 a lo corrido de 2018.

					Para esta vigencia se suscribieron doce convenios para la implementación del esquema de PSA. El primero de ellos con la Gobernación de Antioquia y Mas Bosques con cada uno de los municipios de Anzá, Armenia Mantequilla, Caicedo, Campamento, Entrerríos, Hispania, Montebello, San Andrés de Cuerquia, Santa Bárbara, Toledo, Yalí. En el segundo convenio se incluyen a la Organización Indígena de Antioquia OIA la cual participa con 11 resguardos (Cristianía – Karmata Rua, Hermeregildo Chakiama, Marcelino Tascón, Jaidezavi, Pablo Múnera – Vegas de Segovia, El Tigre – Carupia, Los Almendros – Shaoibado, Tagual La Po)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>3,
						'value' => 34,
						'description' => 'Información de oferta hídrica en las 31 cuencas hidrográficas de nivel subsiguientes reportada en datos de precipitación a través de la página piragua, con pluviómetros automáticos y manuales localizados en los 80 municipios, además información de calidad y cantidad del recurso hídrico.

					Monitoreo de calidad de agua en 406 puntos que cubren los 34 NSS de toda la jurisdicción de Corantioquia, con los siguientes resultados: Una ronda de monitoreo a 250 fuentes abastecedoras de acueductos municipales y veredales, una ronda en 26 fuentes hídricas con limnimetro monitoreadas, 120 puntos de monitoreo en pozos de aguas subterráneas, 10 puntos en un sistema lentico “Ciénaga Corrales”',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>3,
						'value' => 80,
						'description' => 'A la fecha se tiene presencia en 80 municipios de la jurisdicción operando en la red de Piragua, resaltando las siguientes actividades: 
					• 80 municipios con estaciones automáticas operando.
					• 80 municipios con el Programa Integral Red Agua - PIRAGUA en funcionamiento.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>3,
						'value' => 93.8,
						'description' => 'De las 129 estaciones automáticas (98 pluviómetros y 31 limnígrafos) está operando el 93,8% .La red manual cuenta con 669 piragüeros reportando lluvia en los 80 municipios.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>3,
						'value' => 76,
						'description' => 'Parámetros nuevos validados año 2018:

					Metales Totales (24): Aluminio; Antimonio; Arsénico; Bario; Berilio; Boro; Calcio; Cadmio; Cromo; Cobalto; Cobre; Estroncio; Hierro; Litio; Manganeso; Molibdeno; Níquel; Plata; Plomo; Selenio; Titanio; Vanadio; Zinc; Talio

					Pesticidas Organofosforados (17): Dichlorvos, Meviphos, Demeton O, Naled, Diazinon, Disulfoton, Demeton S, Fenchlorphos (Ronel), Merphos, Chlorpyriphos, Methyl Parathion, Prothiofos, Stirofos (Tetrachlorvinphos), Sulprofos, Fensulfothion, Azinphos Methyl, Coumanphos

					Pesticidas Organoclorados (20): α-BCH; γ-BCH; β-BCH; δ-BCH; Heptaclor; Aldrin; Heptaclor Epoxido; Trans Clordano; CIS Clordano; Endosulfan I; 4,4-DDE; Dieldrin; Endrin; 4,4-DDD; Endosulfan II; 4,4-DDT; Endrin Aldehido; Metoxiclor; Endosulfan Sulfato; Endrin Cetona

					BTEX (6): Benceno; Etilbenceno; Tolueno; m+p-xileno; o-xileno; Xileno total.

					PAH´s (8): Naftaleno; Acenaftileno; Acenafteno; Fluoreno; Fenantreno; Antraceno; Fluoranteno; Pireno

					Compuestos orgánicos halogenados (AOX) (1)',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>3,
						'value' => 0.81,
						'description' => 'Se considera un cumplimiento del 100% para el cuatrienio con la culminación de las siguientes acciones (todas ponderadas): acompañamiento en la consolidación de nuevos negocios verdes, apoyo a la iniciativas de negocios verdes, verificación de criterios y categoría de iniciativas que solicitan validación,  agenda de socialización y difusión de negocios verde y construcción plan de negocios verdes para la jurisdicción de Corantioquia. en lo corrido de la vigencia 2018 se avanza en cada uno de ellos con: realización de segundo foro de agricultura sostenible, seguimiento a empresa (frescos el Roble), avance en la definición para la implementación de la ventanilla de negocios verdes y definición de criterios orientadores para el cumplimiento de principios y llegar a un negocio avanzado.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>3,
						'value' => 0.5,
						'description' => 'La meta del Plan de acción 2018 se cumple estaba proyectada en un 50%. Se realiza la asistencia y asesoramiento a los sectores de la Construcción, Manufacturero, agroindustrial y público',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia222 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>3,
						'value' => 58,
						'description' => 'Para garantizar el funcionamiento de los sistemas de descontaminación en la jurisdicción de Corantioquia, se han realizado los monitoreo a las pantas principales  de los corregimientos de Andes, Amalfi, Angostura, Anzá, Amagá, Angelópolis, Betania, Betulia, Campamento, Caracolí, Caramanta, Ciudad Bolívar, Concordia, Donmatías, El Bagre, Entrerríos, Fredonia, Girardota, Gómez Plata, Guadalupe, Hispania, Jardín, Jericó, Maceo, Montebello, Olaya, Pueblorrico, Puerto Berrio, Puerto Nare, San Jose de la Montaña, Santa Bárbara, San Pedro de los Milagros, Santa Rosa de Osos, Santa Fe  de Antioquia, Támesis, Tarso, Titiribí, Valparaíso, Venecia, Yalí.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>3,
						'value' => 47,
						'description' => 'Se presentaron al Fondo de Inversión Regional para la Descontaminación Hídrica de la Corporación y aprobados por el mismo, los proyectos: Aunar esfuerzos para Desarrollar infraestructura hídrica rural (construcción de sistemas sépticos individuales) con la respectiva interventoría y la Construcción de colectores y PTAR. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>3,
						'value' => 36,
						'description' => 'Guadalupe, Gómez Plata, Anorí, Yolombó, Envigado, Itagüí, La Estrella, Caldas, Sabaneta, Amagá, Angelópolis, Girardota, Bello, Barbosa, Copacabana, Medellín, Caramanta, Valparaíso, La Pintada, Montebello, Santa Bárbara, Fredonia, Venecia, Jericó, Támesis, Tarso, Pueblorrico, Yarumal, Remedios, Zaragoza, Heliconia, Yalí, Donmatías, Angostura, Cisneros y Puerto Nare.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>3,
						'value' => 28,
						'description' => 'Durante el primer semestre se realizaron las siguientes campañas:
					• Tres (3) campañas de monitoreo durante tres (3) meses cada una, en los municipios de Puerto Berrío, Santa Rosa de Osos y La Pintada. Además, se iniciaron campañas de tres (3) meses en Amagá, Fredonia, Santa Bárbara y Yarumal.
					• Tres (3) campañas de máximo un (1) mes en Jericó, San Jerónimo y Sopetrán.
					• Dos (2) campañas de contingencia durante dos (2) meses en Caldas y Copacabana.
					Y en el segundo semestre se realizaron las siguientes campañas:
					• Se completaron las campañas de tres (3) meses en Amagá, Fredonia, Santa Bárbara y Yarumal.
					• Una (1) campaña de tres (3) meses en San Cristóbal y se inició una (1) campaña de tres (3) meses en El Bagre.
					• Se hicieron campañas de un (1) mes en Titiribí, Tarso, Donmatías, Vegachí y Segovia.
					• Se iniciaron campañas de un (1) mes en Liborina, Olaya y Entrerríos.
					',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>3,
						'value' => 19410,
						'description' => 'Durante el primer semestre de 2018, se realizaron 360 operativos en los cuales se monitorearon 4659 vehículos.
					Durante el segundo semestre, se realizaron 1548 operativos y se monitorearon 14751 vehículos.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>3,
						'value' => 1,
						'description' => 'El 100% de este indicador se mide tieniendo en cuenta que todas las estaciones de monitoreo (fijas) con que cuenta la corporación estén arrojando datos con una representativodad igual o superior al 75%. Se cumplió con la operación del 100% de las estaciones fijas que hacen parte de la red de monitoreo corporativa, compuesta por las estaciones ubicadas en el corregimiento de Altavista y los municipios de Envigado y Caucasia.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>3,
						'value' => 0.7,
						'description' => 'Este indicador se plantea con la formulación del Plan entre las vigencias 2016 y 2017 y seguimiento a la implementación en 2018 y 2019.

					Este indicador es acumulativo, por lo tanto, se tiene en cuenta la gestión realizada durante los años 2016 y 2017 con 50% de avance acumulado',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia230 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>3,
						'value' => 0.65,
						'description' => 'ELa ejecución del indicador del Plan de Accion (indicador 21.1) es de 52 entes territoriales asesorados en la incorporación, planificación y ejecución de acciones relacionadas con cambio climático, en el marco de los instrumentos de planificación territorial, de 40 entes territoriales programados para la vigencia 2018.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia231 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>3,
						'value' => 0.7,
						'description' => 'El 100% de este indicador son 20 medidas de mitigación y/o adaptación al cambio climático ejecutadas',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia233 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>3,
						'value' => 10,
						'description' => 'Se elaboró el estudio básico de amenazas Naturales del municipio de Betania.

					Se realizaron estudios de amenaza puntuales ante deslizamientos en los municipios de Copacabana, Caldas, Ebéjico, Sabaneta, Salgar, Titiribí y Venecia.

					Se Implementaron estudios Básicos de amenaza mediante la concertación de los EOT de los municipios de Jardín y San Pedro de los Milagros',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia234 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>3,
						'value' => 37,
						'description' => 'En el marco de la implementación del Plan de Educación Ambiental Municipal – PEAM. Se han apoyado un total de 37 municipios:, Betania, Betulia, Briceño, Cáceres, Caracolí, Carolina del Príncipe, Caucasia, Concordia, Copacabana, Ebéjico, El Bagre, Entrerríos, Guadalupe, Heliconia, La Pintada, Montebello, Nechí, Pueblorríco, Puerto Nare, Sabanalarga, Santa Bárbara, Santa Fe de Antioquia, Santa Rosa de Osos, Segovia, Sopetrán, Támesis, Tarazá, Tarso, Titiribí, Toledo, Valdivia, Valparaíso, Vegachí, Venecia, Yalí, Yarumal y Zaragoza.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia235 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>3,
						'value' => 23,
						'description' => 'Por medio de la entrega de herramientas para atención de Incendios forestales,  Participación en curso COPCIF, Implementación de sistemas de Alertas Tempranas  y el fortalecimiento de la capacidad de respuesta de las comunidades ante fenómenos amenazantes, se desarrollaron acciones en 23 municipios',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>3,
						'value' => 85.9,
						'description' => 'Para la vigencia 2018 se realizaron 19 actividades o eventos de capacitación.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>3,
						'value' => 97.8,
						'description' => 'Para la vigencia 2018, el plan de bienestar se compone de 17 actividades a ejecutar, distribuidas en 4 grupos (cada uno ponderado): alimentación, actividades recreativas, deportivas y culturales, actividades familiares e institucionales y actividades para la organización laboral. en lo corrido de la vigencia se avanzó con acciones en 5 de estas actividades.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>3,
						'value' => 17.2,
						'description' => 'Para la vigencia 2018, la fase de aplicación del sistema de gestión de seguridad y salud en el trabajo contempla 16 actividades a desarrollar, de las cuales se avanza con la ejecución de 13 de ellas.',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>3,
						'value' => 1,
						'description' => '',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>3,
						'value' => 26.7,
						'description' => 'Este indicador contempla 3 actividades para el cuatrienio: Revisión normatividad y bibliografía, Definición y desarrollo de contenidos y Formulación del protocolo de evaluación de desempeño a servidores públicos en provisionalidad. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>3,
						'value' => 92.3,
						'description' => 'El 100% de este inidcador se mide con la contratación de todos los objetos contractuales definidos en plan de adquisiciones en materia de compras, de responsabilidad de recursos físicos y técnológicos de laSubdirección Administrativa. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>3,
						'value' => 87.5,
						'description' => 'El 100% de este inidcador se mide con la contratación de todos los objetos contractuales definidos en plan de adquisiciones en materia de instalaciones y mantenimientos, de responsabilidad de recursos físicos y técnológicos de la subdirección Administrativa. ',
						'date_report' => '2018-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity1,
						'year' =>4,
						'value' => 0.5,
						'description' => 'El 100% del indicador para el cuatrienio equivale a la formulación del Plan de Acción 2016-2019 (Aprobado por Acuedro del Consejo directivo No. 472 de 2016) y PGAR que entraría en vigencia en 2020 (50% de peso para cada uno). El 5% de meta para la presente vigencia equivale al proceso participativo de formulación y consolidación del proyecto inicial PGAR. En sesión ordinaria del mes de diciembre, el Consejo Directivo mediante Acuerdo No. 180-ACU1912-575 del 10 de diciembre de 2019 aprobó el Plan de Gestión Ambiental – PGAR 2020-2031',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity2,
						'year' =>4,
						'value' => 27.5,
						'description' => 'El 100% de la meta son los 80 muncipios de la juridcción asesorados o asistidos en la inclusión del componente ambiental en los procesos de planificación y ordenamiento territorial, con énfasis en la incorporación de las determinantes ambientales. 
					Durante el año 2019, se han apoyado con un mínimo tres (3) acciones o más, un total de 55 municipios, De estos municipios, en 23 de ellos se avanzó en el proceso de concertación de los asuntos ambientales de sus POT. De estos 23 municipios al cierre de la vigencia se logró la concertación con con 14 municipios (Amalfi, Caldas, Cisneros, Entrerrios, Envigado, Guadalupe, Jericó, Puerto Berrío, Remedios, Sabaneta, San Jerónimo, Santafé de Antioquia, Yolombó y Yondó) y se avanzó en el proceso de concertación con 9 municipios (Amagá, Don Matías, Ebéjico, Fredonia, Girardota, Hispania, La Pintada, Nechí, y Tarazá).
					En síntesis; se logró la meta de acompañamiento a los 80 municipios de la jurisdicción durante el cuatrienio 2016 - 2019',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity3,
						'year' =>4,
						'value' => 0.1,
						'description' => 'La meta del 20% para la vigencia corresponde a la consolidación de los informes de gestión 2018, 2019-I, II y III, informe proyectado de la vigencia 2019 y realización de dos audiencias pública de rendición de cuentas (Abril y Diciembre). ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity4,
						'year' =>4,
						'value' => 0.1,
						'description' => 'El 100% del indicador para el cuatrienio equivale a el análisis de información y modelamiento en herramientas informáticas de 20 procedimientos asociados a los procesos misionales corporativos   Administración  integral de los recursos naturales renovables   y   Gestión de la Cultura  . La meta de 20% para la vigencia es realizar este análisis y modelamiento en 4 de estos procedimientos y se ha realizado:  

					Racionalización Permiso o Autorización Forestal de Árbol Aislado.  

					Liquidación tasa retributiva por vertimientos puntuales al agua.  

					 Liquidación de la tasa por utilización de aguas.  

					Reporte de información al subsistema SIRH, correspondiente a fuentes, usuarios, concesiones, vertimientos y puntos de monitoreo.  

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia247 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity5,
						'year' =>4,
						'value' => 0.2,
						'description' => 'Se proyecta para la vigencia del Plan de Acción 2016-2019 avanzar como mínimo en un 70% con las siguientes acciones (cada una de ellas ponderada): 

					Se implementó el sitio MEGATESO donde se están gestionando los reportes trimestrales del informe de gestión, con el objetivo de facilitar el proceso de ingreso, el control y versionamiento de la información, obteniendo los avances en la gestión de forma actualizada, adicionalmente, se dispuso un lugar para gestionar la información del Sistema de Gestión Integral.  

					 Se realizó un desarrollo para la consolidación del mapa de actores de la Corporación y se realizó su integración con el grupo PGAR en la plataforma TEAMS. Se realizaron jornadas de capacitación para el manejo de las herramientas TEAMS y MEGATESO. 

					 Se realizó la estructuración de los de los sitios en SharePoint que se articularán con los equipos de TEAMS para cada Subdirección y Oficina.  

					Se está realizando actualización, mantenimiento y soporte del Portal Geográfico, obteniendo los siguientes avances:  

					Enlace entre las capas, origen de datos y publicación de los servicios para POMCAS, áreas protegidas, hidrología, humedales y cuenca surte acueductos, priorización de biodiversidad, amenazas, PORH y POF, además se actualizó información en Arcgis Online. 

					Implementación Google Analytics y capacitación al equipo de trabajo en el uso de la herramienta. 

					Integración de archivo shape de forma temporal para el cruce con las capas del Portal Geográfico. 

					Actualización de base de datos geográficos e incorporación al Porta. 

					Integración del OBA (Observatorio de Bosques de Antioquia) con el Portal Geográfico. 

					 Se procedió con la implementación del programa integral de Protección de datos personales, lo cual se realizó cumpliendo con las siguientes actividades: 

					Inventario de datos personales. 

					Registro de bases de datos personales ante la SIC.  

					 Modelo de gobierno, roles y responsabilidades.  

					Política de protección de datos personales adoptada mediante Resolución. 

					Capacitaciones del Programa. 

					Protocolo de atención a incidentes  

					Identificación de riesgos, causas y controles. 

					Plan de auditoria  

					Plan de Comunicaciones 

					Incorporación en los formatos del SGI del aviso de privacidad y autorización de datos para la protección de datos personales. 

					Incorporación en las minutas de los convenios y contratos la cláusula referente a la obligación del tercero sobre la protección de los datos personales.  

					Incorporación del formato de autorización y actualización de datos personales en el SGI.  

					Adicionalmente, se realizó el inventario de datos abiertos en la platilla y plataforma del MinTic y se lograron cargar 9 conjuntos de datos',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity6,
						'year' =>4,
						'value' => 0.75,
						'description' => 'Se reportó en la vigencia 2019, los siguientes registros:  

					SIRH: 950 
					SISAIRE: 13.870 
					RESPEL: 263  
					SNIF: 507 
					RUA: 88 ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity7,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity8,
						'year' =>4,
						'value' => 0.1,
						'description' => 'El 100% del indicador para el cuatrienio equivale a la actualización del Plan Estrategico de la Tecnologías de información y las comunicaciones - PETICO, la formulación del plan de seguridad informática (ambos se ejecutaron entre 2016 y 2017) y el soporte y actualización de los diferentes componentes de la plataforma teleinfomática, que para la vigencia 2019 se trabaja sobre  15 de estos componentes (Soporte, Mantenimiento y actualización de licencias ArcGIS – ESRI; Mantenimiento y soporte técnico del sistema integrado KOHA; Soporte y mantenimiento y módulo de gestión regional del Portal Geográfico; Soporte y mantenimiento a programas y equipos publishow; Servicios de intercomunicación de datos e internet; Software assurance de los productos MICROSOFT; Soporte, mantenimiento al centro de cómputo; Soporte, mantenimiento y desarrollo en las aplicaciones SIRENA; actualización, mantenimiento y soporte de las aplicaciones SAFIX Y PGAR, Implementación MINTIC, Integración con SIAC, Fortalecer el modelo operativo de tecnología de la Corporación (fortalecimiento mesa de ayuda)., Mantenimiento de software de turnos y plugin-publiturno,,Actualización de productos ORACLE, Adquisición y renovación de licencias Adobe., Adquisición de Equipos de Cómputo',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia251 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity9,
						'year' =>4,
						'value' => 0.25,
						'description' => 'El 100% del indicador para el cuatrienio equivale al levantamiento de información; análisis de Información, construcción y diligenciamiento de matriz y gestor de información; definición e implementación de estrategia de socialización, para promover la gestión de la información y el conocimeinto de comunidades afro, indigenas, campesinos y grupos de jóvenes.  Este último se desarrolló en la vigencia 2019. La meta del 25% también contempla la publicación de estos Gestores de información en la herramienta SharePoint,',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia252 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity10,
						'year' =>4,
						'value' => 33.2,
						'description' => 'El 100% del indicador para el cuatrienio equivale a la implementación de 10 estrategias para la dinamización de los Centros de Información Ambiental Corporativo. La meta del 35% para la vigencia 2019 equivale a: 

					Se han realizado 13 talleres de mapa de conocimiento, 14 talleres de formación de usuarios en el uso de herramientas para la búsqueda y recuperación de información, 32 Talleres de Lectura Ambiental, en el marco de las presencias institucionales, se elaboraron y enviaron 20 entregas de “Información ambiental a Tu Alcance”, a los 49 usuarios inscriptos; se realizaron 33 Miércoles del Conocimiento, se enviaron 20 publicaciones Corporativas – Rincón Ambiental para 18 bibliotecas. Se realizó Foro ambiental, “Abejas Nativas y Biodiversidad: un asunto de vida”.  Se realizó un trueque literario para los funcionarios de Corantioquia en marco de la semana del libro y la cultura.  
					Se realizaron 8 tertulias literarias en los cuales se realizan conversaciones en torno a la lectura de un libro elegido por los participantes, con el fin de incentivar la lectura.  
					Se realizaron 5 publicaciones por redes sociales promocionando y motivando a los usuarios a hacer uso de los servicios del Centro de Información Ambiental.

					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity11,
						'year' =>4,
						'value' => 106,
						'description' => 'La base son 1.586 trámites resueltos: 15 Licencia Ambiental,  612 Concesión de aguas,  606 permisos de vertimientos,  350 permisos de aprovechamiento forestal y  3 permisos de emisiones atmosféricas.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia254 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity12,
						'year' =>4,
						'value' => 0.73,
						'description' => 'Para el año 2019, se creó una línea base que asciende a un total de 3.011 trámites para realizar el seguimiento ambiental y se programa como meta actuar sobre el 65% de trámites de la línea base (1957 trámites).

					Se ha realizado seguimiento a 2.115 autorizaciones ambientales ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity13,
						'year' =>4,
						'value' => 0.21,
						'description' => 'La meta para el cuatrieno es resolver el 40% de los procesos sancionatorios que inician. 
					Durante el año 2019, se resolvieron procesos sancionatorios mediante actuaciones de cesación o de determinación de responsabilidades en un total de 221 trámites (72 cesados y 149 decididos). ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity14,
						'year' =>4,
						'value' => 0.01,
						'description' => 'Para el año 2019, la Corporación adelantó el proceso de reglamentación de las quebradas La Dolores y La Doctora, afluente del río Aburrá, a través de la ejecución de los contratos 110-CNT1905-67 suscrito con Consorcio Implementación y convenio 040-COV1906-105 con el municipio de Sabaneta respectivamente. 
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity15,
						'year' =>4,
						'value' => 86.5,
						'description' => 'La meta del cuatrienio es realizar seguimiento y control al 100% de los PSMV, PGIRS y PUEAA aprobados. Para el  2019 se han realizado control y seguimiento a  98 PUEAA, 70 PSMV y 80 PGIR. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 
						$idevidencia258 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity16,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia259 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity17,
						'year' =>4,
						'value' => 3,
						'description' => 'Se adelantaron las actividades relacionadas con los procesos de formación a los actores definidos para la vigencia: Acueductos Veredales e instituciones educativas, sector cafetero, fortalecimiento de la gobernanza forestal, sector minero y Municipios y/o Concejos. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity18,
						'year' =>4,
						'value' => 30,
						'description' => ' 38 presencias institucionales:  CORANTIOQUIA CON TIGO  : 16 sectoriales y 22 municipales.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity19,
						'year' =>4,
						'value' => 7,
						'description' => 'La estrategia tiene como pilar fundamental, el fortalecimiento del talento humano, para lo cual se iejecutó en un plan de trabajo específicamente en los 7 Puntos de Atención al Ciudadano - PAC.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity20,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity21,
						'year' =>4,
						'value' => 354,
						'description' => 'Estos procesos ciudadanos en Red, esta representados en: 
					67 organizaciones fortalecidas para la gestión ambiental del territorio mediante el apoyo a 104 iniciativas educativo ambientales en 48 municipios  
					110 grupos de guardianes de la naturaleza participando en procesos educativo-ambientales para la gestión ambiental del territorio y 2.252 niños formados. 
					50 grupos juveniles articulados en red y participando en procesos educativo-ambientales y 825 lideres juveniles formados  
					3 sectores productivos (cafetero, ganadero y minero) participando en procesos educativo-ambientales y 90 personas formadas  
					Formación de 100 personas habitantes del Municipio de Remedios para el mejoramiento de la calidad ambiental urbana. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity22,
						'year' =>4,
						'value' => 147,
						'description' => 'En la viegncia 2019 se han acompañado 130 mesas mbientales (veredal, corregimental, municipal) en los 80 municipios ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity23,
						'year' =>4,
						'value' => 51,
						'description' => '80 municipios atendidos con la estrategia de educación ambiental itinerante en la jurisdicción de Corantioquia para el fortalecimiento de la gestión ambiental 

					165 procesos ciudadanos de educación ambiental desarrollados y 5.220 personas formadas para el fortalecimiento de la gestión ambiental del territorio  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity24,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity25,
						'year' =>4,
						'value' => 23,
						'description' => '29 comunidades indígenas acompañadas y fortalecidas para la gestión ambiental de sus territorios, desarrollando acciones en el marco de sus planes de vida para la protección y uso sostenible del patrimonio ambiental ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity26,
						'year' =>4,
						'value' => 60,
						'description' => 'Se acompañaron los Consejos Comunitarios de los Municipios de Tarazá, Cáceres, Caucasia, El Bagre, Nechí, Zaragoza, Remedios, Segovia, Puerto Nare, Puerto Berrio, Yondo, Sopetrán, Belmira, Santa Rosa de osos, Girardota e Itaguí. Con las comunidades afrodescendientes se adelantó un proceso de orden administrativo entre Corantioquia, Maná y la gerencia afro. 

					99 consejos comunitarios acompañados y fortalecidos para la gestión ambiental de sus territorios desarrollando acciones en el marco de sus planes de etnodesarrollo para la protección y uso sostenible del patrimonio ambiental ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia269 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity27,
						'year' =>4,
						'value' => 1200,
						'description' => 'En el Municipio de Yolombó:  para el acompañamiento de 235 familias; Con capacidad instalada –funcionarios de la Subdirección, se acompañan 650 familias; 950 familias en contrato interadministrativo con el Politécnico Jaime Isaza Cadavid; 80 familias en convenio con el municipio de Medellín,

					Se desarrolla formación en manejo agroquímicos, parcelas alimentarias y productivas, uso del patrimonio hídrico y manejo responsable del agua.

					7860 personas participando del programa Hogares Ecológicos para para contribuir al mejoramiento del hábitat',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia270 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity28,
						'year' =>4,
						'value' => 66,
						'description' => '80 CIDEAM y CIDEA fortalecidos mediante el desarrollo de 96 procesos de formación y acompañamiento.  
					 8 redes territoriales fortalecidas y 3 acuerdos de voluntades suscritos  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity29,
						'year' =>4,
						'value' => 80,
						'description' => '126 PRAE fortalecidos y 128 Instituciones Educativas y/o Centros Educativos Rurales participando del proceso de formación y acompañamiento ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia272 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity30,
						'year' =>4,
						'value' => 0.19,
						'description' => 'El plan de comunicaciones formulado fue adoptado y se ejecuta satisfactoriamente, con las revisiones periódicas pertinentes, con lo cual se da respuesta oportuna a las nuevas necesidades de comunicación que se identifican en la entidad.  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity31,
						'year' =>4,
						'value' => 207853,
						'description' => 'La meta se ha superado porque se ejecutan satisfactoriamente las cuatro estrategias del plan de comunicación, articulando adecuadamente la generación de contenidos y la divulgación institucional a los grupos de interés definidos en cada caso.  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity32,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity33,
						'year' =>4,
						'value' => 1,
						'description' => 'La meta son 9 áreas protegías con planes de manejo en ejecución. e vienen ejecutando planes de manejo en 10 áreas protegidas a través de convenios con municipios: 

					DMI Sistema de Paramos y Bosques Alto-andinos del Noroccidente Medio Antioqueño convenios con los municipios de  San José de la Montaña, Sabanalarga, Belmira,  Entrerríos,  Olaya, Sopetrán y    Liborina  

					DMI Divisoria Valle de Aburra Rio Cauca con los municipios de Angelópolis y Amagá. 
					DMI Cuchilla Jardín – Támesis con los municipios de Andes, Caramanta, Jardín y Támesis.   
					DMI Cuchilla Cerro Plateado Alto San José con los municipios de Concordia, Betulia y Salgar 
					PNR Corredor de las Alegrías con los municipios de Anzá, Caicedo y Santa Fe de Antioquia 
					DMI Cañón del Rio Alicante con los municipios de Maceo y Yolombó. 
					RFPR Cerro Bravo con los municipios de Fredonia y Venecia. 
					RFPR Farallones de Citará con los municipios de Betania y Ciudad Bolívar. 
					DMI Rios Barroso San Juan con los municipios de Pueblorrico y Salgar. 
					DMI Nubes-Trocha-Capota con los municipios de Jericó, Pueblorrico y Tarso.      
					Se ejecutaron Treinta y dos (32) convenios con igual número de municipios y uno con el PNUD, para un total de 33. De los cuales, 30 convenios ejecutaron los planes de manejo de diez (10) áreas protegidas; dos (2) con municipios que se están elaborando su plan de manejo; con el PNUD se adelantó la actualización y ajuste de 5 planes de manejo, la elaboración de un plan de manejo y la declaratoria de un área protegida. 

					 
					 ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia276 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity34,
						'year' =>4,
						'value' => 9.63,
						'description' => 'La meta para el cuatrienio ya se superó. La meta de este indicador se cumplió y logró ampliarla en el 2019, pasando de un área meta de 71.000 hectáreas a 107.787 hectáreas con la declaratoria de  8 áreas protegidas con ello se obtuvo un resultado por encima del 100% de cumplimiento de la vigencia y del plan de acción.  El último área declarada fue Distrito Regional de Manejo Integrado Ciénagas Corrales y El Ocho, mediante el acuerdo del Consejo Directivo de Corantioquia No 1801-ACU1912-576 del 10 de diciembre de 2019 (12.865 has). 

					Con el PNUD se firmó un convenio para desarrollar las actividades necesarias en el apoyo social y técnico en la ruta de declaratoria de áreas protegidas en el Bajo Cauca Nechí y Cerro Quitasol.


					Bajo Cauca Nechí: Se ejecutó el convenio 040-COV1906-211 suscrito con el PNUD, el cual ha elaborado los documentos técnicos jurídicos, que se van a revisar para el 2020 y adelantar los tramites respectivos para dar cierre adelantando la etapa de declaratoria. Esta área también se encuentra en el marco de la Resolución N°1675 de 2019 del MADS como reserva temporal. 

					  Cerro Quita Sol: Con la firma del convenio 040-COV1906-137 con el AMVA, se logró tener las condiciones financieras para que mediante convenio 040-COV1906-211 suscrito con el PNUD para correr la ruta crítica de declaratoria de un área protegida, se tiene los documentos técnicos jurídicos para su declaratoria en el 2020. 

					Se continúa con el desarrollo de la ruta de declaratoria de un área protegida en el bosque seco tropical, con el polígono de la Resolución del Ministerio de Ambiente y Desarrollo Sostenible, N°1987 de 2018, con un área de 74.596,93 has.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity35,
						'year' =>4,
						'value' => 0.73,
						'description' => 'En la jurisdicción se identificaron cuatro unidades de páramos, cuya administración y manejo corresponde a Corantioquia, dos en la Cordillera Central: Belmira – Santa Inés y Serranía de Las Baldías, y dos en la Cordillera Occidental: Farallones del Citará y El Sol Las Alegrías, que incluye tres polígonos en la jurisdicción (Cerro Plateado, Alto de San José y Las Alegrías). A la fecha el MADS ha adoptado la delimitación para las cuatro unidades, mediante las siguientes Resoluciones: 

					Resolución N°496 de marzo 2016 delimita los páramos del Sol - Las Alegrías que incluye tres polígonos Alto San José, Cerro Plateado y Las Alegrías.  

					Resolución N°497 de marzo de 2016 delimita el páramo Belmira – Santa Inés  

					Resolución 2140 de diciembre de 2016 delimita el páramo Serranía Las Baldías  

					Resolución 178 de febrero de 2018 delimita el páramo Citará 

					Con la adopción del plan de manejo del Parque Regional Natural Corredor Las Alegrías mediante el Acuerdo No 559 del 24 de enero de 2019, se cumplió este indicador. 
					 ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity36,
						'year' =>4,
						'value' => 0.75,
						'description' => 'Cada año se proyecta un mínimo de 20 convenios con municipios. En el 2019  Se suscribieron 26 convenios con 21  municipios y 5 con instituciones para el desarroloo de acciones en:

					Humedales:, tanto en el Bajo Cauca como en el Magdalena Medio  (Puerto, Berrio, Puerto Nare, Yondó y Zaragoza).
					SILAP: Municipios Carolina del Principe, Guadalupe, Gómez Plata, Támesis, Angostura, Campamento, Amalfi, Santa Rosa de Osos, Copacabana, San Pedro de los Milagros, Envigado, Sabaneta .
					Ecosistemas priorizados:  Municipios de Yarumal, Ituango, Barbosa, Envigado, Campamento. 
					Adicionalmente, se suscribieron los convenios 040-COV1902-8 con Empresas Públicas de Medellín, 040-COV1906-183 con el Colegio Mayor, 040-COV1906-216 con el Jardín Botánico de Medellín, 040-COV1901-1  con la SOCIEDAD TELEVISION DE ANTIOQUIA LTDA y  040-COV1903-12  con la UNIVERSIDAD DE ANTIOQUIA para desarrollar acciones de manejo en ecosistemas estratégicos de la Corporación.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity37,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity38,
						'year' =>4,
						'value' => 0.31,
						'description' => 'El avance presentado en el indicador corresponde al logro de la meta al final de 2016 al 2019, debido a que el indicador es acumulativo, En lo corrido de la vigencia 2019 se recibió el informe final preliminar del POF y Se suscribió el convenio 040-COV1906-107 con la Asociación de Comunidades Indígenas de Antioquia OIA para Aunar esfuerzos para realizar los encuentros de concertación del Plan de Ordenación Forestal de la jurisdicción de Corantioquia, con lo cual se tendrá la versión final del POF, para la aprobación por parte del Consejo Directivo de la Corporación en el 2020.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity39,
						'year' =>4,
						'value' => 50.8,
						'description' => ' La meta para el cuatrienio son 400 Ha.

					Se llevó a cabo en el primer semestre   Sembratón   en los 80 municipios de la jurisdicción de Corantioquia. La densidad de siembra se consideró de un área efectiva de desarrollo  de biomasa por  cada árbol para 14.5 metros cuadrados equivalente a 688 árboles por hectárea para un área total de 154 hectáreas. Con ello se asiste la restauración y permite la regeneración natural en los ecosistemas intervenidos.   

					Igualmente se realizó suscripción del convenio 040-COV1906-153 con el municipio de Remedios para la restauración de 22 ha disturbadas en predios públicos del municipio. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity40,
						'year' =>4,
						'value' => 0.1,
						'description' => 'La meta para el cuatrienio son 150 Ha.

					En el tercer trimestre del 2019, se realizó la segunda   Sembratón   en los 80 municipios de la jurisdicción de Corantioquia. La densidad de siembra se consideró de un área efectiva de desarrollo  de biomasa por  cada árbol para 14.5 metros cuadrados equivalente a 688 árboles por hectárea para un área total de 92 hectáreas. Con ello se asiste la restauración y permite la regeneración natural en los ecosistemas intervenidos.   

					 

					Igualmente se realizó suscripción del convenio 040-COV1906-89 con el municipio de Angostura para la restauración de 51 ha disturbadas en predios públicos del municipio, área ya recibida. Asimismo, se viene ejecutando el convenio 040-COV1906-130 con el municipio de  Santa Rosa de Osos para una intervención de 73 hectáreas. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity41,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity42,
						'year' =>4,
						'value' => 0.73,
						'description' => 'La meta es 30 Especies: 15 fauna y 15 flora
					Lo anterior se efectúa a través de las siguientes actividades:
					1) Recuperación, rehabilitación y liberación de especies de fauna
					2) Protección in-situ de especies objeto de conservación en áreas protegidas declaradas de orden regional y en los SILAP de la Jurisdicción
					3) Propagación y siembra de especies de flora amenazada
					4) Educación y sensibilización de la comunidad.

					En el 2019 se ha trabajado:

					FLORA: Caoba (Swietenia macrophylla) en peligro crítico CR; Cedro negro (Juglans neotropica) en peligro crítico CR; Chaquiro Real (Podocarpus oleifolius) Vulnerable VU; Palma de cera (Ceroxylon quindiuense) en peligro EN; palma de cera cafetera (Ceroxylon alpinum) en peligro EN; Almanegra, Gallinazo Morado (Magnolia yarumalensis) en peligro EN; Almanegra de ventanas (Magnolia polyhypsophylla) en peligro crítico CR, Comino (Aniba perutilis) CR, Molinillo (Magnolia hernandezii) EN, Roble (Quercus humboldtii) VU, Choiba (Dipteryx oleifera) VU, Pino Montana (Prumnopitys montana) VU, Roble Negro (Colombalanus excelsa) VU, Palma de Ramo (Ceroxylon parvifrons) en VU, Palma de Cera (Ceroxylon ceriferum) EN, Hojarasco del Espinal (Magnolia espinalii) CR, Palma sancona (Syagrus sancona) VU, Ciamo (Licania cabrerae ) CR, Mapurito montañero (Coupia platycalix) EN.  

					FAUNA: oso andino (Tremarctos ornatus, VU); manatí (Trichechus manatus ,EN), jaguar, tigre mariposa (Panthera onca, VU); tapir (Tapirus terrestris ,CR); Nutria (Lontra longicaudis ,VU); tortuga de rio (Podocnemis lewyana, CR); tortuga Morrocoy (Chelonoidis carbonaria, VU); tití gris (Saguinus leucopus, VU); tití cabeciblanco (Saguinus oedipus ,CR); mono araña (Ateles hybridus, CR); caimán aguja, cocodrilo del magdalena (Crocodilus acutus, EN); paujil de cara azul (Crax Alberti ,CR); guacamaya militar (Ara militaris, VU); tortuga Icotea (Trachemys callirostris, VU); oncilla o tigrillo lanudo (Leopardus tigrinus, VU), tortuga caja (Kinosternon scorpioides, VU), mico de noche (Aotus lemurinus VU), cacique candela (Hypopyrrhus pyrohypogaster VU). 

					Así mismo se han realizado acciones de recuperación, protección y conservación de otras cinco especies que, aunque no se encuentran categorizadas en amenaza son de gran importancia para los ecosistemas estas son:  mono aullador rojo (Alouata seniculus), perezoso de dos uñas (Choloepus hoffmani), perezoso de tres uñas (Bradypus variegatus), lora frente amarilla (Amazona ochrocephala) y el puma (Puma concolor)
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity43,
						'year' =>4,
						'value' => 0.25,
						'description' => 'La meta es trabajar con 120 especies.

					En el 2019 Se ejecuta el convenio con el AMVA No. 040-COV1905-55 en donde se desarrollan acciones de control al tráfico ilegal de flora y fauna silvestre en áreas asociadas al Valle de Aburrá; manejo de animales recuperados especies invasoras y conflictos animales -humanos.  , para la vigencia 2019.  
					Igualmente, Se viene ejecutando  con la Corporación Parque Arví el  contrato 120-CNT1904-60, el cual permite desarrollar acciones en la flora silvestre  en la jurisdicción con  la propagación de las especies vegetales nativas priorizadas en la red de viveros corporativos y el mantenimiento de colecciones vivas”, ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity44,
						'year' =>4,
						'value' => 0.5,
						'description' => 'Se desarrollaron medidas de prevención, control y manejo  para Ojo de poeta, Retamo espinoso Caracol gigante africano, Hipopotamo Rana Toro, en donde se aplicaron los protocolos de disposición final, pero también se realizaron capacitaciones a la comunidad, reuniones con las mesas municipales  y divulgación en medios sobre manejo, control y disposición final de estas especies invasoras',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity45,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity46,
						'year' =>4,
						'value' => 32.5,
						'description' => 'La meta para el cuatrienio ya se cumplió  son 4 POMCAS y se tienen ya:  

					  POMCA río Aburrá – NSS (2701-01). Aprobado en el marco de la Comisión Conjunta mediante Resoluciones 040-RES1811-6712 de Corantioquia del 30 de noviembre de 2018 y 00-003241 del AMVA y 112-5007-2018 de CORNARE. 
					POMCA río Cauca - río Amagá quebrada Sinifaná (2620-01). Aprobado mediante Resolución 040-RES1811-6715 del 30 de noviembre de 2018. 
					POMCA directos río Cauca (md) - río Aurra - NSS (2620-02). Aprobado mediante Resolución 040-RES1811-6716 del 30 de noviembre de 2018.

					Se avanza en la Ordenación de las cuencas de los Ríos:

					Pomca San Juan: Se conformó el Consejo de cuenca en el mes de febrero de 2019. En el mes de noviembre de 2019, se dieron por surtidas las etapas de establecimiento de medidas y establecimiento de acuerdos, con las comunidades indígenas Hermeregildo Chakiama y Karmata Rua, los días 11 y 12 del mes de diciembre de 2019. Actualmente, el Plan está en Fase de Formulación.

					Pomca Nechí: Se conformó el Consejo de cuenca en el mes de marzo de 2019. La Dirección de Consulta Previa del Ministerio del Interior emitió la Resolución No. 81 de 2019, donde se certifican 8 comunidades que deben ser objeto de Consulta. El Plan está actualmente en elaboración de la Fase de Formulación. 

					Bajo San Jorge: Plan aprobado en el mes de diciembre de 2019 mediante Acta de la Comisión Conjunta número 2 y radicada en Corantioquia con el número 040-RES1912-8217 del 30 de diciembre de 2019. 

					En cuanto a PMA: Se aprobó el Plan de Manejo del Acuífero del Río Aburra, en el marco de la Comisión Conjunta conformada por el AMVA, Cornare y Corantioquia mediante resolución 040-RES1912-7680.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity47,
						'year' =>4,
						'value' => 0.2,
						'description' => 'Meta del cuatrienio 11 cuerpos de agua con PORH adoptados.

					A la fecha se tiene un cumplimiento del 100 % del indicador establecido para la vigencia del Plan de Acción debido a la adopción de 18 PORH:  Cuenca Hidrográfica del Río Aurra, Río Guadalupe, Río Grande, Río Piedras, Río San Juan, Río Poblanco, Quebrada La Sopetrana, Quebrada La Cianurada, Quebrada Magallo, Quebrada San Mateo, Quebrada La Sinifaná, Rio Mulatos, Río Ité,  Río Amaga, Río San Andrés, Río Anorí, Río Tarazá.

					En el marco de la Comisión Conjunta entre AMVA, Cornare y Corantioquia en el ajuste definitivo y adopción del PORH del Río Aburrá (Resolucion 040-RES1910-6158).',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia290 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity48,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity49,
						'year' =>4,
						'value' => 0.2,
						'description' => '12 Instrumentos de planificación hidrológica (9 POMCA y 3 PMA) en ejecución .

					 Se avanzó en procesos de fortalecimiento a la Gobernanza del recurso hídrico con los siguientes procesos:  

					-Consejos de Cuenca Acompañamiento y Fortalecimiento a los Consejos en la jurisdicción de Corantioquia y los de Comisión Conjunta (Aburra, Amaga, Aurrá, Nare, Negro, Samaná Norte, Cocorná, Arma y Grande y Chico) a través de iniciativas, procesos de formación, acompañamiento en asuntos administrativos.  

					-Implementación de los Planes de Ordenación de cuencas con énfasis en la Gestión del Riesgo. Con el fin de capacitar y formar en asuntos de gobernanza e incorporación de determinantes ambientales en los instrumentos de planificación territorial en las cuencas Aburra, Amagá Aurra y Grande-Chico e implementación de Acuerdos protocolizados en el marco de las Consultas Previas realizadas en el marco de la formulación y/o actualización de los POMCA de los ríos Aurra y Aburrá.  

					-Implementación de los Planes de Manejo de Acuíferos: En el marco del contrato 110-CNT1906-81 el cual tiene como objeto “la implementación de acciones en los acuíferos de la jurisdicción de Corantioquia”,',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity50,
						'year' =>4,
						'value' => 0.2,
						'description' => 'La meta del cuatrienio son 11 PORH en ejecución

					Se ejecutan acciones en 17 PORH formulados (PORH Rio Aurra, Rio Amagá, Quebrada La Sinifaná, Rio Poblanco, Rio Piedras, Rio Mulatos, Rio San Juan, Quebrada San Mateo, Quebrada Magallo, Quebrada La Sopetrana, Rio Grande, Rio Guadalupe, Rio Ité, Quebrada La Cianurada, Río San Andrés, Río Anorí)), con ponderaciónes en el tipo de acción (temas de oferta, demanda, calidad, riesgo, fortalecimiento o gobernabilidad). Las acciones de la vigencia se traducen en defición de los objetivo de calidad, gestión de oferta y demanda, promoción de la legalidad, fortalecimiento de la gobernabilidad.

					También se trabaja con las comunidades en procesos de socialización, apropiación y con enfoque diferencial, asociado a los procesos de consulta previa con comunidades étnicas. En este sentido, se materializo con el acompañamiento del Ministerio del Interior, la Consulta Previa del Río Taraza con las comunidades indígenas Jaidezabi y Jaidukama.
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity51,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity52,
						'year' =>4,
						'value' => 2398,
						'description' => 'A la fecha se tiene un cumplimiento del 100 % del indicador establecido para la vigencia del Plan de Acción. La meta del cuatrienio son 2.800 Ha y se llevan 6.752, 6 Ha.

					En la vigencia 2019:

					Sse logró la conservación de 1.278,9 hectáreas en ecosistemas claves para la regulación de la oferta hídrica.

					Se culminaron las actividades propias del contrato 110-CNT1905-65

					Dentro del total de área que se conserva, se debe incluir la compra de los predios Piedecuesta, La Llorona y Chupadero, localizados en el municipio de Caicedo en jurisdicción del Parque Natural regional Corredor Las Alegrías, del municipio de Caicedo.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity53,
						'year' =>4,
						'value' => 2,
						'description' => 'A la fecha se tiene un cumplimiento del 100 % del indicador establecido para la vigencia del Plan de Acción (Se llervan 7 esquemas).

					. 

					Durante la vigencia 2019 se implementó el esquema de Pago por Servicios Ambientales en materia de conservación en el Parque Natural Regional Corredor Las Alegrías (PNRCA), DMI Cuchilla Jardín – Támesis y en las cuencas de Río Grande Río Chico, Guadalupe y Porce”. En total se beneficiaron 101 usuarios/familias por la conservación de los recursos naturales, y se aportó a la conservación de 1435 hectáreas de ecosistemas en áreas protegidas. 
					',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity54,
						'year' =>4,
						'value' => 31,
						'description' => 'Se cuenta con la Información de oferta hídrica en las 34 cuencas hidrográficas de nivel subsiguientes reportada en datos de precipitación a través de la página piragua, con pluviómetros automáticos y manuales localizados en los 80 municipios, además información de calidad y cantidad del recurso hídrico, Se ha realizado una de las dos campañas de monitoreo de cantidad y calidad fisicoquímica, microbiológica e hidrobiológica a 300 fuentes abastecedoras de acueductos municipales, corregimentales y/o veredales, que abarcan toda la jurisdicción. . ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity55,
						'year' =>4,
						'value' => 80,
						'description' => 'A la fecha se tiene presencia en 80 municipios de la jurisdicción operando en la red de Piragua con logors como:

					3084 Piragüeros voluntarios asociados al programa, organizados en 180 grupos, presentes en los 80 municipios de la jurisdicción, durante el año se ejecutaron 440 talleres..

					Mediante las estaciones automáticas de medición de precipitación y niveles de agua; con el funcionamiento de las estaciones automáticas de medición de precipitación (98) en cada uno de los municipios, estaciones de medición de niveles de agua (31), y funcionamiento de la red manual con un reporte de 593 equipos de medición de lluvia “lluviómetros”.

					90 iniciativas Piragüeras apoyadas

					170 actores vinculados a Piragua Empresarial

					8 comunidades indígenas hacen parte del programa Piragua, con enfoque diferencial. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity56,
						'year' =>4,
						'value' => 0.94,
						'description' => 'Se tiene un cumplimiento del 100 % del indicador establecido para la vigencia del Plan de Acción. 

					La red automática cuenta con 139 equipos automáticos, los cuales 43 son equipos limnigráficos y 96 son equipos pluviográficos en el 2019 se instalaron 6 equipos limingráficos asociados a gestión del riesgo en los municipios de Donmatías y Jardín y 5 equipos limnigráficos a través del convenio 040-COV1906-134 el cual tiene como objeto “Aunar esfuerzos para el monitoreo de los cuerpos de agua del Bajo Cauca antiqueño”, instalados en Tarazá, Cáceres, Caucasia y Nechí.  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity57,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity58,
						'year' =>4,
						'value' => 20,
						'description' => 'A la fecha se validaron 28 parámetrosen:
					Sodio Total por AA 
					Potasio Total por AA 
					Magnesio Total por AA 
					Hierro Total por AA 
					Estaño Total por AA 
					Silicio Total por AA 
					Surfactantes anionicos por flujo continuo. 
					Cryptosporidium 
					Formaldehido 
					Sodio Total, por ICP 
					Potasio Total, por ICP 
					Magnesio Total, por ICP 
					Fosforo Total, por flujo continuo 
					Giardia 
					Magnesio disuelto, por AA 
					Mercurio total, por DMA 
					Fosforo Reactivo Total (leído como Ortofosfato), por flujo continuo 
					Potasio disuelto, por AA 
					Sodio disuelto, por AA 
					DBO (5 días), prueba óptica 
					Compuestos Orgánicos semivolátiles (Compuestos Fenólicos): 2,4-Diclorofenol 
					Compuestos Orgánicos semivolátiles (Compuestos Fenólicos): 2,4,6-Triclorofenol 
					Compuestos Orgánicos semivolátiles (Compuestos Fenólicos): 2,4,5-Triclorofenol 
					Compuestos Orgánicos semivolátiles (Compuestos Fenólicos): Dinitro-o-cresol 
					Compuestos Orgánicos semivolátiles (Compuestos Fenólicos): Pentaclorofenol 
					Cianuro Total, por flujo continuo 
					Cianuro Libre, por flujo continuo 
					Índice de fenol, por flujo continuo ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity59,
						'year' =>4,
						'value' => 0.25,
						'description' => 'En el mes de junio se realizó el acompañamiento por parte de la Oficina de Negocios Verdes del MADS al equipo de Negocios Verdes y otros funcionarios de la corporación en lo relacionado con la implementación del PRNV, y cumplimientos de meta a nivel país. 

					Se desarrollaron actividades concertadas entre el Municipio de Envigado y La Corporación para acompañar al menos a 15 emprendimientos del sector agropecuario al cumplimiento de criterios y principios dentro de la categoría de Bienes y Servicios provenientes de Recursos Naturales. Adicionalmente se trabaja en la identificación de los negocios verdes potenciales desarrollados en la jurisdicción de CORANTIOQUIA, actividad que se adelanta en el marco del Contrato 110-CNT1906-88. Se logra comprometer la participación de dos Negocios verdes del nivel Ideal a Bioexpo Colombia.  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity60,
						'year' =>4,
						'value' => 0.5,
						'description' => 'La meta son 6 sectores acompañados.

					Agendas voluntarias suscritas con los sectores Constructor, industrial y manufacturero (Proaburrá, Prosur) y sector porcícola (Porkolombia), es que cuentan con vigencias superiores a tres años, posibilitando dar un alto dinamismo a la gestión ambiental sectorial. 

					 Por otro lado se suscribe Convenio con la Universidad de Antioquia (040-COV1904-35), donde se evalúa la dispersión del mercurio en suelos de tres (3) cuencas de la jurisdicción de Corantioquia y también se mira el estado de arte en otras matrices, donde se realiza el análisis de 405 muestras de suelos. Se suscribe con la Institución Universitaria Colegio Mayor de Antioquia el convenio 040-1906-83“, donde se busca fortalecer el sector del turismo de naturaleza como estrategia de conservación en la jurisdicción de Corantioquia”, haciendo énfasis en el DRMI Chuchilla Támesis Jardín. 

					Con el sector agroindustrial del Café se acompaña en la adopción y transferencia de mejores técnicas disponibles y buenas Prácticas Ambientales en el Sector Cafetero”.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity61,
						'year' =>4,
						'value' => 50,
						'description' => 'Se realizaron 64 monitoreos acreditados a las Plantas de Tratamiento de Aguas Residuales Domésticas - PTARD, que contempló la ejecución de 128 Monitoreos acreditados de Aguas Superficiales (Distribuidos así: 64 aguas arriba y 64 aguas abajo del vertimiento) y 128 Monitoreos acreditados Agua Residuales Doméstica - ARD (Distribuidos así: 64 entrada y 64 salida PTARD). 
					Entrerríos (1), San Pedro de Los Milagros (2), Donmatias (2), El Bagre (1), Santa Fe de Antioquia (2), Olaya (1), Yalí (2), Puerto Berrío (1), Maceo             (1), Girardota    (1), Puerto Nare (1), Amalfi (2), Caracolí (1), Santa Rosa de Osos (5), Guadalupe         (1), Gómez Plata (2), Angostura (1), Campamento (1), San José de La Montaña (1), Montebello (3), Montebello (3), Santa Bárbara (3), Valparaíso (1), Concordia (3), Jardín (1), Hispania (1), Pueblorrico (1), Andes (1), Betania (1), Betulia (1), Caramanta (1), Ciudad Bolívar (1), Fredonia (1), Támesis               (1), Tarso (1), Puente Tierra Pueblorrico (1), San Ignacio Caramanta (1),  Jericó (3), Titiribí (1), Amaga              (1), Venecia (1), Angelópolis (1), Balmoral y Viva las Palmas Envigado (2) ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity62,
						'year' =>4,
						'value' => 50,
						'description' => 'Se adelantaron acciones en los municipios para suministro e instalación de tranques sépticos, construcción de colectores y plantas de tratamiento de aguas residuales domésticas. 
					Los 54 municipios con acciones en saneamiento hídrico y que permiten dar avance al cumplimiento del indicador son: Concordia, Copacabana, Jericó, San Jerónimo, Vegachí, Venecia, Yolombó, Nechí (Comunidades Afro), Caucasia (Comunidades Afro), Amalfi, Angelópolis, Angostura, Anorí, Anzá, Barbosa, Belmira, Betania, Briceño, Buritica, Cáceres, Caicedo, Caldas, Caracolí, Caramanta, Cisneros, Ciudad Bolívar, Donmatías, Entrerrios, Fredonia, Girardota, Goméz Plata, Guadalupe, Ituango, Jardín, La Estrella, Maceo, Montebello, Olaya, Puerto Nare, Remedios, Salgar, San Andrés de Cuerquia, San Pedro de los Milagros, Santa Bárbara, Santa Rosa de Osos, Sopetrán, Támesis, Tarso, Titiribí, Toledo, ValparaÍso, Yalí, Zaragoza y Liborina ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity63,
						'year' =>4,
						'value' => 14,
						'description' => 'Municipios apoyados: Amagá, Andes, Angelópolis, Angostura, Barbosa, Bello, Betania, Betulia, Caldas, Caracolí, Caramanta, Carolina del Príncipe, Caucasia, Ciudad Bolívar, Copacabana, El Bagre, Entrerríos, Envigado, Girardota, Hispania, Itagüí, Jardín, Jericó, La Estrella, La Pintada, Medellín, Montebello, Nechí, Olaya, Pueblorrico, Remedios, Sabaneta, Salgar, San Jerónimo, Santa Bárbara, Santa Fe de Antioquia, Santa Rosa de Osos, Segovia, Sopetrán, Támesis, Tarazá, Tarso, Toledo, Valparaíso, Venecia. 
					61.025 personas sensibilizadas y capacitadas en consumo sostenible, buenos hábitos de consumo, reducción y manejo adecuado de residuos en los 45 municipios impactados durante el 2019. 
					440 recicladores apoyados con acciones afirmativas encaminadas al fortalecimiento técnico, organizacional y formalización para la prestación del servicio de aseo en la componente de aprovechamiento, según el Decreto 596 de 2016, en los 45 municipios impactados durante el 2019. 
					Formación en habilidades y competencias laborales a 184 recicladores de oficio en la norma técnica 220201081 (Recuperar los Residuos Potencialmente Reciclables de según procedimientos establecidos y normatividad vigente), en los 10 municipios del Valle de Aburrá, y el triángulo turístico (Santa Fe de Antioquia, San Jerónimo y Sopetrán).  
					133 recicladores de oficio certificados en la norma de competencias laborales 220201081 del SENA, pertenecientes a los 10 municipios del Valle de Aburrá, y el triángulo turístico (Santa Fe de Antioquia, San Jerónimo y Sopetrán). 
					19 organizaciones de recicladores acompañadas 
					42.507 visitas puerta a puerta para sensibilización en consumo, separación en la fuente y seguimiento a la GIRS en total, en los 45 municipios acompañados. 
					2915 visitas a sectores productivos. 
					240 encuentros con sector educativo, institucional, productivo y de servicios sobre consumo sostenible, buenos hábitos de consumo, reducción y manejo adecuado de residuos. 
					942 rutas selectivas para la recolección y aprovechamiento de residuos reciclables y orgánicos. 
					1.477 toneladas de residuos aprovechadas (523 toneladas de residuos reciclables y 
					954 toneladas de residuos orgánicos) 
					23 eventos de alto impacto tipo foro y ferias ambientales  
					44 jornadas de sensibilización y recolección de residuos posconsumo (RAEE, luminarias, llantas, medicamentos vencidos, baterías-plomo ácido y envases de plaguicidas) 
					23 toneladas de residuos pos consumo recolectados para la gestión, tratamiento, aprovechamiento y disposición final adecuados con gestores autorizados. 
					1 diplomado en “Servicio público domiciliario de aseo, con énfasis en aprovechamiento y/o tratamiento de residuos”, dirigido a representantes de las Alcaldías municipales, empresas de aseo y organizaciones de recicladores de los 10 municipios del Valle de Aburrá y el triángulo turístico (Santa Fe de Antioquia, San Jerónimo y Sopetrán), además de funcionarios de las Autoridades Ambientales ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity64,
						'year' =>4,
						'value' => 12,
						'description' => 'Durante el 2019, se realizaron campañas en los siguientes municipios:
					Entrerrios, San Pedro de los Milagros,  Liborina, Corregimiento de Altavista (Medellín), Envigado, Caucasia, Itagüí, Girardota 
					Fredonia, Ciudad Bolívar, Segovia, Zaragoza, Amagá, Támesis, Gómez Plata, Sopetrán, Buriticá, Puerto Berrío, Sabaneta, Bello. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity65,
						'year' =>4,
						'value' => 192,
						'description' => 'Se realizaron 476 operativos de medición de fuentes móviles en 55 municipios: 
					Amagá -7-, Amalfi -3-, Andes -2-, Angelópolis -1-, Anzá -2-, Armenia -1-, Barbosa -20-, Bello -80-, Betania -2-, Buriticá -1-, Caicedo -1-, Caldas -32-, Campamento -2-, Carolina del Príncipe -1-Caucasia -5-, Cisneros -1-, Ciudad Bolívar -10-, Concordia -3-, Copacabana -34-, Donmatías -2-, Ebéjico -1-, El Bagre -1-, Entrerríos -1-, Envigado -1-, Fredonia -1-, Girardota -12-, Gómez Plata -4-, Heliconia -5-Hispania -1-, Itagüí -24-, Jardín -2-, Jericó -2-, La Estrella -33-, La Pintada -3-, Montebello -1-, Olaya -1-, Pueblorrico -1-, Puerto Berrío -6-, Remedios -1-, Sabaneta -83-, San Jerónimo -1-, San Pedro de los Milagros -4-, Santa Bárbara -3-, Santa Rosas de Osos -7-, Santa Fe de Antioquia -5-, Segovia -1-, Sopetrán -5-, Támesis -3-, Tarso -1-, Titiribí -7-, Vegachí -1-Venecia -2-, Yarumal -6- Zaragoza – 1-, Medellín -35 
					  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity66,
						'year' =>4,
						'value' => 0.66,
						'description' => 'Durante el 2019 estuvieron en operación las tres estaciones fijas que hacen parte de este indicador: Envigado, Altavista (Medellín), Caucasia. 
					Este indicador solo reporta avance cuando la representatividad temporal de las estaciones es igual o superior al 75%.',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity67,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity68,
						'year' =>4,
						'value' => 0.3,
						'description' => 'Este indicador es acumulativo, por lo tanto, se tiene en cuenta la gestión realizada durante los años 2016, 2017 y 2018, con la que se ha ejecutado la meta establecida para el indicador en el cuatrienio. (formulación) . 
					Se firmó el contrato N° 120-CNT1906-89 para la “Implementación y seguimiento a medidas de mitigación y adaptación al cambio climático y de gestión integral del riesgo en la jurisdicción de Corantioquia”.
					Se ha trabajado en lo corrido de este año sobre el 20% de las medidas de adaptación establecidas en el PRCC, alcanzando con ello un 30% de avance en el seguimiento al mismo desde el momento de su formulación. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity69,
						'year' =>4,
						'value' => 0.66,
						'description' => 'La meta para el cuatrienio son los 80 municipios de la Jurisdicción.
					Se ha acompañado al CMGRD del municipio de Bello y a la Comisión Departamental de Incendios Forestales en el análisis de los incendios de cobertura vegetal que se han presentado en los municipios de Bello y Medellín. 
					Se ha apoyado a los municipios de Amalfi, Angostura, Anzá, Caicedo, Campamento, Hispania, Maceo, Olaya, Puerto Nare, Remedios, Sabanalarga, San Andrés de Cuerquia, Támesis, y Tarso, en la incorporación del cambio climático en sus instrumentos de planificación. 
					Adicionalmente se realizaron talleres sobre gestión del riesgo y cambio climático, dirigido a comunidad en general, mesa ambiental y administración municipal de los municipios de: Buriticá, Caramanta, Gómez Plata, Heliconia, Jericó, Montebello, Pueblorrico, San José de la Montaña, Titiribí y Vegach',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity70,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia313 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity71,
						'year' =>4,
						'value' => 0.3,
						'description' => 'Se firmaron 46 convenios para guardabosques y SILAPS, se firmó convenio con EPM para Implementar conjuntamente estrategias que promuevan el cuidado de ecosistemas estratégicos  en especial en lo relacionado con el manejo y protección de los ecosistemas cenagosos del Bajo Cauca antioqueño, se firmaron cuatro convenios para limpieza de caños y espejos de agua de humedales con los municipios de Puerto Berrío, Puerto Nare, Yondó y Zaragoza, se firmaron convenios con Yarumal e Ituango para desarrollar acciones de restauración y recuperación ecológica y se firmó un convenio con Remedios para la reforestación de áreas disturbadas.  
					Como parte de la estrategia de adaptación al cambio climático basada en ecosistemas, se firmó convenio de cooperación entre CORANTIOQUIA y el PNUD para el desarrollo de las actividades necesarias en el apoyo social y técnico en la ruta de declaratoria de áreas protegidas en el Bajo Cauca Nechí y Cerro Quitasol, la Formulación del Plan de Manejo del DRMI Alto Ventanas y Revisión y ajuste de los planes de manejo de áreas protegidas en la jurisdicción de Corporación. 
					Se realizaron cinco foros sectoriales de cambio climático en el año 2019.
					Se realizaron los 10 talleres de cambio climático programados en la medida de adaptación denominada, formación a formadores.   
					Los cuerpos de bomberos de 13 municipios recibieron el Curso avanzado de operaciones y prevención de incendios forestales – COPCIF, actividad que se llevó a cabo en el mes de septiembre de 2019.  
					Desde la subdirección ambiental se llevó a cabo un curso para atención de Incendios forestales avanzado para otros 13 municipios..  
					Se fortalecieron los SAT de los municipios de Amaga, Andes, Copacabana, Girardota, Jardín y Sopetrán. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia314 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity72,
						'year' =>4,
						'value' => 11,
						'description' => 'Se elaboraron los Estudios básicos de Amenaza por avenida torrencial, movimientos en masa e inundación de los municipios de Caramanta y Jericó. Además, se realizaron los estudios de detalle por movimiento en masa, para determinar la categorización del riesgo y establecer las medidas de mitigación en la zona afectada de las veredas Ancón II y Zarzal Curazao, en el marco del Decreto de Calamidad Pública No.175 del 25 de abril de 2019 de la alcaldía municipal de Copacabana.  
					Mediante la concertación de los POT, PBOT y EOT de los municipios de Amalfi, Cisneros, Entrerríos, Envigado, Jericó, Remedios, Sabaneta, San Jerónimo y Santa fe de Antioquia, se implementaron nueve estudios. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity73,
						'year' =>4,
						'value' => 52,
						'description' => '
					Se ha acompañado a los CMGRD de los municipios de Copacabana, Sabaneta y Bello para determinar medidas frente a movimiento en masa, análisis de puntos críticos e incendios de cobertura vegetal, respectivamente, durante lo corrido del año 2019. Adicionalmente se ha acompañado al CDGRD en el análisis de los incendios de cobertura vegetal que se han presentado en la ciudad de Medellín durante el segundo trimestre del año 2019.  

					Se ha apoyado a los CMGRD de los municipios de Amagá, Amalfi, Angelópolis, Angostura, Anzá, Armenia, Barbosa, Belmira, Caicedo, Caldas, Campamento, Donmatías, Ebéjico, Girardota, Hispania, La Estrella, Maceo, Olaya, Puerto Nare, Remedios, Sabanalarga, San Andrés de Cuerquia, San Jerónimo, San Pedro, Sopetrán, Támesis, Tarso y Titiribí en la actualización de sus PMGRD
					 ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia316 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity74,
						'year' =>4,
						'value' => 48,
						'description' => 'Se ejecutaron cuatro convenios para desarrollar e implementar acciones para la reducción del riesgo, en los municipios de Cisneros, Ciudad Bolívar, Fredonia y La Pintada Los cuerpos de bomberos de los municipios de Angostura, Buriticá, Briceño, Ebéjico, El Bagre, Heliconia, Hispania, Olaya, Pueblorrico, Sabanalarga, Tarso, Valdivia y Caucasia, se les dictó el Curso avanzado de operaciones y prevención de incendios forestales – COPCIF, actividad que se llevó a cabo en el mes de septiembre de 2019.  
					Se implementaron SAT comunitarios en los municipios de: Amaga, Angelopolis, Armenia, Betania, Caldas, Carolina del Príncipe, Cisneros, Ebejico, Heliconia, La Pintada, Liborina, San Andrés de Cuerquia.  San Jerónimo, San Pedro de los Milagros, Santa Barbara, Titiribí, Venecia, ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia317 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity75,
						'year' =>4,
						'value' => 0.84,
						'description' => 'En el primer semstre se realizaron doce (12) eventos de capacitación, inducción y reinducción para la mejora de la competencia en puesto de trabajo. En el tercer trimestre Se aprobaron tres (3) solicitudes de apoyo a la educación formal; 4 actividades de entrenamiento en puesto de trabajo a través del apoyo a 6  procesos de capacitación que impactaron a 6 servidores públicos; 3 Actividades de inducción y reinducción en las que participaron un total de 58 servidores públicos; 5 actividades de capacitación que impactaron 134 servidores públicos. 
					Para el IV trimestre se ejecutaron: eguridad en espacios confinados 

					Gestión de la Calidad del aire 

					Gestión y prevención de riesgos 

					Toma de muestras fisicoquímica, hidrobiológica y microbiológica en aguas 
					Apoyo Educación Formal a Sandra Rosas Walteros Universidad Externado aprobado en el Comité Virtual de Educación Formal con radicado 150-ACT 1910-4906 

					Capacitacion XIII JORNADA DE DERECHO ADMINISTRATIVO para la servidora Joseny Marcela Mosquera Perea 

					XXI Jornadas internacionales en derecho del medio ambiente, con la participación de 16 funcionarios. 

					Novedades en el Regimen salarial y prestacional de los empleados publicos 

					Actividades de inducción y reinducción 

					Cursos de entrenamiento seguro en alturas en los niveles de coordinador, avanzado y reentrenamiento. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity76,
						'year' =>4,
						'value' => 1,
						'description' => 'Para la vigencia actual se llevaron a cabo actividades como la celebración del día del Niño y la familia donde por primera vez se llevó a cabo este evento de manera descentralizada en la entidad con la finalidad de garantizar cobertura en cuanto a participación de mayor cantidad de beneficiarios, es decir servidores públicos y su grupo familiar.  
					Adicionalmente, se llevaron a cabo acciones como la celebración del cumpleaños número 24 de la Corporación.
					Las demás actividades que hacen parte del plan institucional de Bienestar continúan, es decir; servicio de alimentación, actividades deportivas recreativas, culturales y artísticas, La entrega de un mayor número de servicios de alimentación que se proyecto en 12 y se entrega en una cantidad de 16 servicios por persona mensual. 
					De manera especial se apoya la participación de los servidores públicos y sus hijos en la actividad de sensibilización ambiental donde se realizan eventos de integración familiar y procesos de formación en educación ambiental.  

					Adicionalmente se han realizado procesos formativos para manejar situaciones de estrés, riesgo psicosocial. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia319 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity77,
						'year' =>4,
						'value' => 0.39,
						'description' => 'Se avanzó en el desarrollo de exámenes médicos ocupacionales, se brindó formación a la brigada de emergencias de la Sede Central, oficina territorial Cartama, Zenufaná y Panzenú; se hicieron dos (2) simulacros, uno en el mes de marzo sobre atención de derrame de sustancias químicas y el segundo en el mes de octubre de evacuación por sismo, se realizó la semana de la salud que contempló actividades de promoción de salud como tamizaje de seno, tamizaje de riesgo cardiovascular, sensibilizaciones de prevención de riesgo público, autocuidado, prevención de consumo de sustancias psicoactivas, entre otros. Se entregaron elementos de seguridad y protección personal para los motociclistas y botiquines al personal que realiza visitas técnicas de campo, con el fin de poder atender de una manera segura las solicitudes realizadas por los diferentes municipios.  

					  Se hizo rendición de cuentas sobre las gestiones realizadas en el Sistema de Gestión de Seguridad y Salud en el Trabajo, donde se brindó información al personal correspondiente a la accidentalidad, actividades de intervención de riesgos, entre otros. Se dio continuidad con la formación del Plan de Intervención de Riesgo Público “Cita con tu Seguridad y Prevención de la Extorsión y Secuestro”, la cual va dirigida a todos los Servidores Públicos, con el fin de brindar tips que permitan reducir el riesgo público que se tiene en el desarrollo de las diferentes actividades. Además, se realizaron las Investigaciones producto de los accidentes de trabajo ocurridos durante la vigencia y Caracterización de ausentismo laboral por causa de incapacidades médicas.  

					Igualmente, se realizó formación de higiene postural e importancia de pausas activas, actualización de Planes de Emergencia y Matrices de Peligros y Riesgos; adicionalmente como parte de los requisitos establecidos para los contratistas, conveniantes y proveedores se llevó a cabo la revisión del componente de Seguridad y Salud en el Trabajo en cuanto a los Lineamientos del Sistema de Gestión Integral. las Investigaciones producto de los accidentes de trabajo ocurridos durante el primer semestre y Caracterización de ausentismo laboral por causa de incapacidades médicas.
					 
					Como parte de los requisitos establecidos para los contratistas, conveniantes y proveedores se continúa revisando los documentos aportados por los diferentes supervisores. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity78,
						'year' =>4,
						'value' => 1,
						'description' => '',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity79,
						'year' =>4,
						'value' => 0.3,
						'description' => 'Mediante Resolución N°040-RES1901-203 de 22 enero de 2019, se adoptó el Sistema Tipo de Evaluación de Desempeño Laboral –EDL- de los Servidores Públicos de Carrera Administrativa y en Período de Prueba para la vigencia y se orientó el proceso de evaluación de desempeño laboral. 
					Con la entrada en vigencia del aplicativo SEDEL, dispuesto por la Comisión Nacional del Servicios Civil CNSC, se han concertado los compromisos laborales y comportamentales de todos los funcionarios de carrera administrativa, así como la evaluación semestral de período anual ordinario y la evaluación del período de prueba de los funcionarios que ingresaron a partir del 01 de febrero de 2019. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity80,
						'year' =>4,
						'value' => 94.44,
						'description' => 'Durante lo corrido de la vigencia 2019, se Contrató la adquisición de bienes y servicios relacionados con elementos necesarios para la normal operación de la entidad. Para la obtención de estos bienes y/o servicios y darle cumplimiento al indicador se programaron 29 objetos contractuales de los cuales al cierre de la vigencia se mejoró la ejecución y se han contratado 33  ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
					 DB::table('evidence_advance')->insert([
						'activity_id' => $idactivity81,
						'year' =>4,
						'value' => 1,
						'description' => 'Durante lo corrido de la vigencia 2019, en materia de administración de bienes y servicios a la fecha se formularon 7 objetos contractuales:
					Mantenimiento preventivo y correctivo de vehículos con suministro de insumos y repuestos y accesorios en general.  
					· Mantenimiento preventivo y correctivo a los aires acondicionados corporativos, con el suministro de insumos, repuestos, accesorios en general.  
					 Recarga de extintores para las Sedes de la Corporación
					 Mantenimiento preventivo y correctivo a equipos de oficina de la entidad 
					 Prestar el servicio de mantenimiento preventivo y correctivo con suministro de insumos y repuestos para el sistema eléctrico Corporativo.  
					. Mantenimiento preventivo, correctivo y adecuaciones a los inmuebles de la Corporación Autónoma Regional del Centro de Antioquia – Corantioquia.  
					. Mantenimiento preventivo y correctivo de embarcación fluvial, motor fuera de borda y tráiler. ',
						'date_report' => '2019-12-31',
						'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 

					 DB::table('financing_sources')->insert([
						'father_id' => 11,
						'code' => '1.1.1.1.1.1.1.1',
						'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 90,
						'code' => '1.1.2.4.2.3',
						'name' => 'Venta de bienes y servicios',
						'description' => 'Venta de bienes y servicios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 58,
						'code' => '1.1.2.2.2.1.1',
						'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 27,
						'code' => '1.1.2.1.1.1.1.1',
						'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 208,
						'code' => '1.2.5.1.3',
						'name' => 'Otros Convenios',
						'description' => 'Otros Convenios',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 42,
						'code' => '1.1.2.2.1.1.1.1',
						'name' => 'Tasa retributiva (vigencia actual)',
						'description' => 'Tasa retributiva (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 45,
						'code' => '1.1.2.2.1.1.2.1',
						'name' => 'Tasa por el uso del agua (vigencia actual)',
						'description' => 'Tasa por el uso del agua (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 48,
						'code' => '1.1.2.2.1.1.3.1',
						'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 84,
						'code' => '1.1.2.3.1.1.1',
						'name' => 'Multas ambientales (vigencia actual)',
						'description' => 'Multas ambientales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 79,
						'code' => '1.1.2.2.2.8.1',
						'name' => 'Otros servicios (vigencia actual)',
						'description' => 'Otros servicios (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.6',
						'name' => 'Rendimientos financieros',
						'description' => 'Rendimientos financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente12 = DB::getPdo()->lastInsertId();
					 DB::table('financing_sources')->insert([
						'father_id' => 145,
						'code' => '1.2.2.7',
						'name' => 'Excedentes financieros',
						'description' => 'Excedentes financieros',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente13 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 279,
						'code' => '1.2.7.3.3.5',
						'name' => 'Cancelación de reservas Otras tasas',
						'description' => 'Cancelación de reservas Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 241,
						'code' => '1.2.6.3.5',
						'name' => 'Recuperación de cartera Otras tasas',
						'description' => 'Recuperación de cartera Otras tasas',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financing_sources')->insert([
						'father_id' => 119,
						'code' => '1.1.2.5.1.1.1.4',
						'name' => 'Aportes de la Nación Funcionamiento',
						'description' => 'Aportes de la Nación Funcionamiento',
						'type_id' => 23,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente17 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 14,
						'code' => '1.1.1.1.1.1.2.1',
						'name' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'description' => 'Participación del porcentaje ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente1 = DB::getPdo()->lastInsertId();
						
					DB::table('financing_sources')->insert([
						'father_id' => 1,
						'code' => '1.3',
						'name' => 'RENTAS PARAFISCALES',
						'description' => 'RENTAS PARAFISCALES',
						'type_id' => 22,
						'final_level' => true,
						'group_id' => 12,
						]);
						$idFuente16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 26509610122,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 26509610122,
						'year' => 1,
						]);
						$idPlan1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 691831343,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 69183134.3,
						'investment' => 622648208.7,
						'year' => 1,
						]);
						$idPlan2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 844122659,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 84412265.9,
						'investment' => 759710393.1,
						'year' => 1,
						]);
						$idPlan3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 24611725241,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 2461172524.1,
						'debt_service' => 0,
						'fund' => 4922345048.2,
						'investment' => 17228207668.7,
						'year' => 1,
						]);
						$idPlan4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 3998127899,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3998127899,
						'year' => 1,
						]);
						$idPlan5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 3088342632,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 14,
						'investment_percentage' => 86,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 432367968.48,
						'investment' => 2655974663.52,
						'year' => 1,
						]);
						$idPlan6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 3077113973,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 11,
						'investment_percentage' => 89,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 338482537.03,
						'investment' => 2738631435.97,
						'year' => 1,
						]);
						$idPlan7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 6521577,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 652157.7,
						'investment' => 5869419.3,
						'year' => 1,
						]);
						$idPlan8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 159470103,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 23920515.45,
						'investment' => 135549587.55,
						'year' => 1,
						]);
						$idPlan9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 123520250,
						'functioning_percentage' => 20.599,
						'debt_service_percentage' => 0,
						'fund_percentage' => 14.015,
						'investment_percentage' => 65.386,
						'functioning' => 25443936.2975,
						'debt_service' => 0,
						'fund' => 17311363.0375,
						'investment' => 80764950.665,
						'year' => 1,
						]);
						$idPlan10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 2023379544,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2023379544,
						'year' => 1,
						]);
						$idPlan11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 20454597893,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 20454597893,
						'year' => 1,
						]);
						$idPlan12 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 10631237932,
						'functioning_percentage' => 17,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 83,
						'functioning' => 1807310448.44,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 8823927483.56,
						'year' => 1,
						]);
						$idPlan13 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 2092999867,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2092999867,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 1,
						]);
						$idPlan14 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 22502630306,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 22502630306,
						'year' => 2,
						]);
						$idPlan15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 970350008,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 97035000.8,
						'investment' => 873315007.2,
						'year' => 2,
						]);
						$idPlan16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 1256100075,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 125610007.5,
						'investment' => 1130490067.5,
						'year' => 2,
						]);
						$idPlan17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 25842311503,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 20,
						'investment_percentage' => 70,
						'functioning' => 2584231150.3,
						'debt_service' => 0,
						'fund' => 5168462300.6,
						'investment' => 18089618052.1,
						'year' => 2,
						]);
						$idPlan18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 7729457465,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 7729457465,
						'year' => 2,
						]);
						$idPlan19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 3242759763,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 486413964.45,
						'investment' => 2756345798.55,
						'year' => 2,
						]);
						$idPlan20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 3382835795,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 13,
						'investment_percentage' => 87,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 439768653.35,
						'investment' => 2943067141.65,
						'year' => 2,
						]);
						$idPlan21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 70000000,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 7000000,
						'investment' => 63000000,
						'year' => 2,
						]);
						$idPlan22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 550946229,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 82641934.35,
						'investment' => 468304294.65,
						'year' => 2,
						]);
						$idPlan23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 135729334,
						'functioning_percentage' => 25.725,
						'debt_service_percentage' => 0,
						'fund_percentage' => 14.163,
						'investment_percentage' => 60.112,
						'functioning' => 34916371.1715,
						'debt_service' => 0,
						'fund' => 19223345.57442,
						'investment' => 81589617.25408,
						'year' => 2,
						]);
						$idPlan24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 2124548520,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 2124548520,
						'year' => 2,
						]);
						$idPlan25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 9987932392,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9987932392,
						'year' => 2,
						]);
						$idPlan26 = DB::getPdo()->lastInsertId();
						 
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
						'year' => 2,
						]);
						$idPlan59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 13622214392,
						'functioning_percentage' => 14,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 86,
						'functioning' => 1907110014.88,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 11715104377.12,
						'year' => 2,
						]);
						$idPlan27 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 2233407000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2233407000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 2,
						]);
						$idPlan28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 24042331539,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 24042331539,
						'year' => 3,
						]);
						$idPlan29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1329379511,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 132937951.1,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1196441559.9,
						'year' => 3,
						]);
						$idPlan30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 1799574737,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 179957473.7,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1619617263.3,
						'year' => 3,
						]);
						$idPlan31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente5,
						'value' => 26198992937,
						'functioning_percentage' => 30,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 70,
						'functioning' => 7859697881.1,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 18339295055.9,
						'year' => 3,
						]);
						$idPlan32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 9518906800,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9518906800,
						'year' => 3,
						]);
						$idPlan33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 3979901631,
						'functioning_percentage' => 15,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 85,
						'functioning' => 596985244.65,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 3382916386.35,
						'year' => 3,
						]);
						$idPlan34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 5097455411,
						'functioning_percentage' => 13,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 87,
						'functioning' => 662669203.43,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 4434786207.57,
						'year' => 3,
						]);
						$idPlan35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 63943744,
						'functioning_percentage' => 10,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 90,
						'functioning' => 6394374.4,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 57549369.6,
						'year' => 3,
						]);
						$idPlan36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 775779808,
						'functioning_percentage' => 15,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 85,
						'functioning' => 116366971.2,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 659412836.8,
						'year' => 3,
						]);
						$idPlan37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 164016182,
						'functioning_percentage' => 77.733,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 22.267,
						'functioning' => 127494698.75406,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 36521483.24594,
						'year' => 3,
						]);
						$idPlan38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 1275457008,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 1275457008,
						'year' => 3,
						]);
						$idPlan39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 16397004932,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 16397004932,
						'year' => 3,
						]);
						$idPlan40 = DB::getPdo()->lastInsertId();
						 
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
						'year' => 3,
						]);
						$idPlan60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 13760068972,
						'functioning_percentage' => 21,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 79,
						'functioning' => 2889614484.12,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 10870454487.88,
						'year' => 3,
						]);
						$idPlan41 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 2345894000,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2345894000,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 3,
						]);
						$idPlan42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente1,
						'value' => 2524444812,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 252444481.2,
						'investment' => 2272000330.8,
						'year' => 4,
						]);
						$idPlan43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente2,
						'value' => 22720003304,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 2272000330.4,
						'investment' => 20448002973.6,
						'year' => 4,
						]);
						$idPlan44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente3,
						'value' => 1375848486,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 10,
						'investment_percentage' => 90,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 137584848.6,
						'investment' => 1238263637.4,
						'year' => 4,
						]);
						$idPlan45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente4,
						'value' => 1418964680,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 11,
						'investment_percentage' => 89,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 156086114.8,
						'investment' => 1262878565.2,
						'year' => 4,
						]);
						$idPlan46 = DB::getPdo()->lastInsertId();
						 

					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente6,
						'value' => 9536871220,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 9536871220,
						'year' => 4,
						]);
						$idPlan47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente7,
						'value' => 6449880830,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 967482124.5,
						'investment' => 5482398705.5,
						'year' => 4,
						]);
						$idPlan48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente8,
						'value' => 4294623187,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 644193478.05,
						'investment' => 3650429708.95,
						'year' => 4,
						]);
						$idPlan49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente9,
						'value' => 66583966,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 9987594.9,
						'investment' => 56596371.1,
						'year' => 4,
						]);
						$idPlan50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente10,
						'value' => 1105484455,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 165822668.25,
						'investment' => 939661786.75,
						'year' => 4,
						]);
						$idPlan51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente11,
						'value' => 138785152,
						'functioning_percentage' => 63.83,
						'debt_service_percentage' => 0,
						'fund_percentage' => 13.115,
						'investment_percentage' => 23.055,
						'functioning' => 88586562.5216,
						'debt_service' => 0,
						'fund' => 18201672.6848,
						'investment' => 31996916.7936,
						'year' => 4,
						]);
						$idPlan52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente12,
						'value' => 867283906,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 867283906,
						'year' => 4,
						]);
						$idPlan53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente13,
						'value' => 15778496787,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 2366774518.05,
						'investment' => 13411722268.95,
						'year' => 4,
						]);
						$idPlan54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente14,
						'value' => 82515054,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 15,
						'investment_percentage' => 85,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 12377258.1,
						'investment' => 70137795.9,
						'year' => 4,
						]);
						$idPlan55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente15,
						'value' => 13325605526,
						'functioning_percentage' => 55,
						'debt_service_percentage' => 0,
						'fund_percentage' => 13,
						'investment_percentage' => 32,
						'functioning' => 7329083039.3,
						'debt_service' => 0,
						'fund' => 1732328718.38,
						'investment' => 4264193768.32,
						'year' => 4,
						]);
						$idPlan56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente16,
						'value' => 41567721021,
						'functioning_percentage' => 0,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 100,
						'functioning' => 0,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 41567721021,
						'year' => 4,
						]);
						$idPlan57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('financial_plans')->insert([
						'p_a_i_id' => $idpai1,
						'source_id' => $idFuente17,
						'value' => 2451470502,
						'functioning_percentage' => 100,
						'debt_service_percentage' => 0,
						'fund_percentage' => 0,
						'investment_percentage' => 0,
						'functioning' => 2451470502,
						'debt_service' => 0,
						'fund' => 0,
						'investment' => 0,
						'year' => 4,
						]);
						$idPlan58 = DB::getPdo()->lastInsertId();

					DB::table('implementations')->insert([
						'p_a_i_s_id'=>$idpai1,
						]);
						$idImplementation1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 25434239537,
						'financial_plans_id' => $idPlan1,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo1 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 976101097,
						'financial_plans_id' => $idPlan2,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo2 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 1073274232,
						'financial_plans_id' => $idPlan3,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo3 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 19880934315,
						'financial_plans_id' => $idPlan4,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo4 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 4480546889,
						'financial_plans_id' => $idPlan5,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo5 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2934271410,
						'financial_plans_id' => $idPlan6,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo6 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3352753008,
						'financial_plans_id' => $idPlan7,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo7 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 36230983,
						'financial_plans_id' => $idPlan8,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo8 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 787223410,
						'financial_plans_id' => $idPlan9,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo9 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 306727941,
						'financial_plans_id' => $idPlan10,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo10 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 3128504284,
						'financial_plans_id' => $idPlan11,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo11 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 20454597893,
						'financial_plans_id' => $idPlan12,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo12 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 11103312152,
						'financial_plans_id' => $idPlan13,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo13 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2016-12-31',
						'value' => 2092999867,
						'financial_plans_id' => $idPlan14,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo14 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 22284762653,
						'financial_plans_id' => $idPlan15,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo15 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1113109378,
						'financial_plans_id' => $idPlan16,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo16 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1399805611,
						'financial_plans_id' => $idPlan17,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo17 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 24062241931,
						'financial_plans_id' => $idPlan18,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo18 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 7570208275,
						'financial_plans_id' => $idPlan19,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo19 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4814386630,
						'financial_plans_id' => $idPlan20,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo20 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4565663774,
						'financial_plans_id' => $idPlan21,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo21 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 47498811,
						'financial_plans_id' => $idPlan22,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo22 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 1052530416,
						'financial_plans_id' => $idPlan23,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo23 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 335941823,
						'financial_plans_id' => $idPlan24,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo24 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2106418303,
						'financial_plans_id' => $idPlan25,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo25 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 9987932392,
						'financial_plans_id' => $idPlan26,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo26 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 4272755769,
						'financial_plans_id' => $idPlan59,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo59 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 19232931828,
						'financial_plans_id' => $idPlan27,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo27 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2017-12-31',
						'value' => 2189492030,
						'financial_plans_id' => $idPlan28,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo28 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 22943334511.9,
						'financial_plans_id' => $idPlan29,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo29 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 931981631,
						'financial_plans_id' => $idPlan30,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo30 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1330994284.24,
						'financial_plans_id' => $idPlan31,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo31 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 29194946404,
						'financial_plans_id' => $idPlan32,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo32 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 9600860716,
						'financial_plans_id' => $idPlan33,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo33 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 7368943526.73,
						'financial_plans_id' => $idPlan34,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo34 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 4616896299.78,
						'financial_plans_id' => $idPlan35,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo35 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 67428760.49,
						'financial_plans_id' => $idPlan36,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo36 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 645565781,
						'financial_plans_id' => $idPlan37,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo37 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 132024486.88,
						'financial_plans_id' => $idPlan38,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo38 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1796686914.1,
						'financial_plans_id' => $idPlan39,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo39 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 16397004932,
						'financial_plans_id' => $idPlan40,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo40 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 1811340901,
						'financial_plans_id' => $idPlan60,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo60 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 22480217666.591,
						'financial_plans_id' => $idPlan41,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo41 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2018-12-31',
						'value' => 2345894000,
						'financial_plans_id' => $idPlan42,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo42 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2699671589,
						'financial_plans_id' => $idPlan43,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo43 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 23714498578.83,
						'financial_plans_id' => $idPlan44,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo44 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1011164468,
						'financial_plans_id' => $idPlan45,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo45 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1524393965,
						'financial_plans_id' => $idPlan46,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo46 = DB::getPdo()->lastInsertId();
						 

					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 5058151207,
						'financial_plans_id' => $idPlan47,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo47 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 5016765236.69,
						'financial_plans_id' => $idPlan48,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo48 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 6022214413.22,
						'financial_plans_id' => $idPlan49,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo49 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 14274828.6,
						'financial_plans_id' => $idPlan50,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo50 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2118151268,
						'financial_plans_id' => $idPlan51,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo51 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 122735979,
						'financial_plans_id' => $idPlan52,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo52 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 1530876656,
						'financial_plans_id' => $idPlan53,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo53 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 15778496787,
						'financial_plans_id' => $idPlan54,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo54 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 82515054,
						'financial_plans_id' => $idPlan55,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo55 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 17614720002,
						'financial_plans_id' => $idPlan56,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo56 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 41449087735,
						'financial_plans_id' => $idPlan57,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo57 = DB::getPdo()->lastInsertId();
						 
					 DB::table('fundraisings')->insert([
						'date' => '2019-12-31',
						'value' => 2451470502,
						'financial_plans_id' => $idPlan58,
						'implementation_id' => $idImplementation1,
						]);
						$idRecaudo58 = DB::getPdo()->lastInsertId();
						 
						DB::table('cost_sources')->insert([
							'father_id' => 2,
							'code' => '2.1.1',
							'name' => 'GASTOS DE PERSONAL',
							'description' => 'GASTOS DE PERSONAL',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 12,
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
							'group_id' => 12,
							]);
							$idFuenteGasto2 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 10,
							'code' => '2.1.3.1.1.1.1',
							'name' => 'Fondo de Compensación Ambiental - TSE (20%)',
							'description' => 'Fondo de Compensación Ambiental - TSE (20%)',
							'functioning' => FALSE,
							'compensation' => TRUE,
							'debt_service' => FALSE,
							'group_id' => 12,
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
							'group_id' => 12,
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
							'group_id' => 12,
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
							'group_id' => 12,
							]);
							$idFuenteGasto4 = DB::getPdo()->lastInsertId();
							
							
						DB::table('cost_sources')->insert([
							'father_id' => 31,
							'code' => '2.1.4.4.1',
							'name' => 'Multas',
							'description' => 'Multas',
							'functioning' => TRUE,
							'compensation' => FALSE,
							'debt_service' => FALSE,
							'group_id' => 12,
							]);
							$idFuenteGasto3 = DB::getPdo()->lastInsertId();
							
							
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 1540362677,
								'value_comitted' => 1332822002,
								'value_paid' => 1313356389,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto1,
								'p_a_i_id' => $idpai1,
								'group_id' => 12,
								]);
								$idGasto1 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 2020885709,
								'value_comitted' => 1736176384,
								'value_paid' => 1538363372,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto2,
								'p_a_i_id' => $idpai1,
								'group_id' => 12,
								]);
								$idGasto2 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 182175000,
								'value_comitted' => 182175000,
								'value_paid' => 182175000,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto3,
								'p_a_i_id' => $idpai1,
								'group_id' => 12,
								]);
								$idGasto3 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 109037971,
								'value_comitted' => 109037971,
								'value_paid' => 109037971,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => TRUE,
								'compensation' => FALSE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto4,
								'p_a_i_id' => $idpai1,
								'group_id' => 12,
								]);
								$idGasto4 = DB::getPdo()->lastInsertId();
								
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 5888674868,
								'value_comitted' => 4906924940,
								'value_paid' => 4493617301,
								'own' => TRUE,
								'nation' => FALSE,
								'royalties' => FALSE,
								'funds' => FALSE,
								'functioning' => FALSE,
								'compensation' => TRUE,
								'debt_service' => FALSE,
								'cost_sources_id' => $idFuenteGasto5,
								'p_a_i_id' => $idpai1,
								'group_id' => 12,
								]);
								$idGasto5 = DB::getPdo()->lastInsertId();
								
							DB::table('financial_costs')->insert([
								'year' => 1,
								'value_bugeted' => 172043000,
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
								'group_id' => 12,
								]);
								$idGasto6 = DB::getPdo()->lastInsertId();
								
								
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 2078257867,
									'value_comitted' => 2078257867,
									'value_paid' => 2078257867,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto1,
									'p_a_i_id' => $idpai1,
									'group_id' => 12,
									]);
									$idGasto7 = DB::getPdo()->lastInsertId();
									
								DB::table('financial_costs')->insert([
									'year' => 1,
									'value_bugeted' => 14742000,
									'value_comitted' => 14742000,
									'value_paid' => 14742000,
									'own' => FALSE,
									'nation' => TRUE,
									'royalties' => FALSE,
									'funds' => FALSE,
									'functioning' => TRUE,
									'compensation' => FALSE,
									'debt_service' => FALSE,
									'cost_sources_id' => $idFuenteGasto4,
									'p_a_i_id' => $idpai1,
									'group_id' => 12,
									]);
									$idGasto8 = DB::getPdo()->lastInsertId();
									
									
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 2151997791,
										'value_comitted' => 1803526718,
										'value_paid' => 1782698508,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto1,
										'p_a_i_id' => $idpai1,
										'group_id' => 12,
										]);
										$idGasto9 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 1808253085,
										'value_comitted' => 1561684390,
										'value_paid' => 1480903386,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto2,
										'p_a_i_id' => $idpai1,
										'group_id' => 12,
										]);
										$idGasto10 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 182175000,
										'value_comitted' => 162087542,
										'value_paid' => 162087542,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto3,
										'p_a_i_id' => $idpai1,
										'group_id' => 12,
										]);
										$idGasto11 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 114668000,
										'value_comitted' => 108459309,
										'value_paid' => 108459309,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto4,
										'p_a_i_id' => $idpai1,
										'group_id' => 12,
										]);
										$idGasto12 = DB::getPdo()->lastInsertId();
										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 6426154884,
										'value_comitted' => 5972474049,
										'value_paid' => 5444237840,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => FALSE,
										'compensation' => TRUE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto5,
										'p_a_i_id' => $idpai1,
										'group_id' => 12,
										]);
										$idGasto13 = DB::getPdo()->lastInsertId();										
										
									DB::table('financial_costs')->insert([
										'year' => 2,
										'value_bugeted' => 146164417,
										'value_comitted' => 100053211,
										'value_paid' => 100053211,
										'own' => TRUE,
										'nation' => FALSE,
										'royalties' => FALSE,
										'funds' => FALSE,
										'functioning' => TRUE,
										'compensation' => FALSE,
										'debt_service' => FALSE,
										'cost_sources_id' => $idFuenteGasto7,
										'p_a_i_id' => $idpai1,
										'group_id' => 12,
										]);
										$idGasto14 = DB::getPdo()->lastInsertId();
										
										
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 2218075000,
											'value_comitted' => 2211193186,
											'value_paid' => 2211193186,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto1,
											'p_a_i_id' => $idpai1,
											'group_id' => 12,
											]);
											$idGasto15 = DB::getPdo()->lastInsertId();
											
											
										DB::table('financial_costs')->insert([
											'year' => 2,
											'value_bugeted' => 15332000,
											'value_comitted' => 15332000,
											'value_paid' => 15332000,
											'own' => FALSE,
											'nation' => TRUE,
											'royalties' => FALSE,
											'funds' => FALSE,
											'functioning' => TRUE,
											'compensation' => FALSE,
											'debt_service' => FALSE,
											'cost_sources_id' => $idFuenteGasto4,
											'p_a_i_id' => $idpai1,
											'group_id' => 12,
											]);
											$idGasto16 = DB::getPdo()->lastInsertId();

											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 2286945463,
												'value_comitted' => 1606670226,
												'value_paid' => 1517779903,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto1,
												'p_a_i_id' => $idpai1,
												'group_id' => 12,
												]);
												$idGasto17 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 1935360348,
												'value_comitted' => 1639135460.91,
												'value_paid' => 1549726038.91,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto2,
												'p_a_i_id' => $idpai1,
												'group_id' => 12,
												]);
												$idGasto18 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 120708000,
												'value_comitted' => 120708000,
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
												'group_id' => 12,
												]);
												$idGasto20 = DB::getPdo()->lastInsertId();
												
												
											DB::table('financial_costs')->insert([
												'year' => 3,
												'value_bugeted' => 153472638,
												'value_comitted' => 53664856,
												'value_paid' => 393641,
												'own' => TRUE,
												'nation' => FALSE,
												'royalties' => FALSE,
												'funds' => FALSE,
												'functioning' => TRUE,
												'compensation' => FALSE,
												'debt_service' => FALSE,
												'cost_sources_id' => $idFuenteGasto7,
												'p_a_i_id' => $idpai1,
												'group_id' => 12,
												]);
												$idGasto21 = DB::getPdo()->lastInsertId();
												
												
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 2330102000,
													'value_comitted' => 2330102000,
													'value_paid' => 2330102000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto1,
													'p_a_i_id' => $idpai1,
													'group_id' => 12,
													]);
													$idGasto22 = DB::getPdo()->lastInsertId();
													
												DB::table('financial_costs')->insert([
													'year' => 3,
													'value_bugeted' => 15792000,
													'value_comitted' => 15792000,
													'value_paid' => 15792000,
													'own' => FALSE,
													'nation' => TRUE,
													'royalties' => FALSE,
													'funds' => FALSE,
													'functioning' => TRUE,
													'compensation' => FALSE,
													'debt_service' => FALSE,
													'cost_sources_id' => $idFuenteGasto4,
													'p_a_i_id' => $idpai1,
													'group_id' => 12,
													]);
													$idGasto23 = DB::getPdo()->lastInsertId();
													
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 2433528269,
														'value_comitted' => 1964250414,
														'value_paid' => 1940869939,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto1,
														'p_a_i_id' => $idpai1,
														'group_id' => 12,
														]);
														$idGasto24 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 2012774762,
														'value_comitted' => 1715166810,
														'value_paid' => 1607406310.12,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto2,
														'p_a_i_id' => $idpai1,
														'group_id' => 12,
														]);
														$idGasto25 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 322400000,
														'value_comitted' => 226740081,
														'value_paid' => 226740081,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto3,
														'p_a_i_id' => $idpai1,
														'group_id' => 12,
														]);
														$idGasto26 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 173686864,
														'value_comitted' => 163388164,
														'value_paid' => 163388164,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto4,
														'p_a_i_id' => $idpai1,
														'group_id' => 12,
														]);
														$idGasto27 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 8735283523,
														'value_comitted' => 8539150699,
														'value_paid' => 8004754679,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => FALSE,
														'compensation' => TRUE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto5,
														'p_a_i_id' => $idpai1,
														'group_id' => 12,
														]);
														$idGasto28 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 2027297771,
														'value_comitted' => 0,
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
														'group_id' => 12,
														]);
														$idGasto29 = DB::getPdo()->lastInsertId();
														
														
													DB::table('financial_costs')->insert([
														'year' => 4,
														'value_bugeted' => 239069331,
														'value_comitted' => 21697776,
														'value_paid' => 21697776,
														'own' => TRUE,
														'nation' => FALSE,
														'royalties' => FALSE,
														'funds' => FALSE,
														'functioning' => TRUE,
														'compensation' => FALSE,
														'debt_service' => FALSE,
														'cost_sources_id' => $idFuenteGasto7,
														'p_a_i_id' => $idpai1,
														'group_id' => 12,
														]);
														$idGasto30 = DB::getPdo()->lastInsertId();
														
														
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 2435157366,
															'value_comitted' => 2435157366,
															'value_paid' => 2435157366,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto1,
															'p_a_i_id' => $idpai1,
															'group_id' => 12,
															]);
															$idGasto31 = DB::getPdo()->lastInsertId();
															
														DB::table('financial_costs')->insert([
															'year' => 4,
															'value_bugeted' => 16313136,
															'value_comitted' => 16313136,
															'value_paid' => 16313136,
															'own' => FALSE,
															'nation' => TRUE,
															'royalties' => FALSE,
															'funds' => FALSE,
															'functioning' => TRUE,
															'compensation' => FALSE,
															'debt_service' => FALSE,
															'cost_sources_id' => $idFuenteGasto4,
															'p_a_i_id' => $idpai1,
															'group_id' => 12,
															]);
															$idGasto32 = DB::getPdo()->lastInsertId();
											
         DB::table('activity_sources')->insert([
            'activity_id' => $idactivity1,
            'source_id' =>$idPlan1,
            'value' => 932357168,
            'goal' => 0,
            'evidence_balance' => 932357168,
            'age' => 1,
            ]);
            $idactivitySource1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity2,
            'source_id' =>$idPlan1,
            'value' => 931891753,
            'goal' => 0,
            'evidence_balance' => 931891753,
            'age' => 1,
            ]);
            $idactivitySource2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity3,
            'source_id' =>$idPlan1,
            'value' => 1081439732,
            'goal' => 0,
            'evidence_balance' => 1081439732,
            'age' => 1,
            ]);
            $idactivitySource3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity8,
            'source_id' =>$idPlan1,
            'value' => 2345903728,
            'goal' => 0,
            'evidence_balance' => 2345903728,
            'age' => 1,
            ]);
            $idactivitySource5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity9,
            'source_id' =>$idPlan1,
            'value' => 263553635,
            'goal' => 0,
            'evidence_balance' => 263553635,
            'age' => 1,
            ]);
            $idactivitySource6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity10,
            'source_id' =>$idPlan1,
            'value' => 235854070,
            'goal' => 0,
            'evidence_balance' => 235854070,
            'age' => 1,
            ]);
            $idactivitySource7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity17,
            'source_id' =>$idPlan1,
            'value' => 920488578,
            'goal' => 0,
            'evidence_balance' => 920488578,
            'age' => 1,
            ]);
            $idactivitySource9 = DB::getPdo()->lastInsertId();
			
			DB::table('activity_sources')->insert([
				'activity_id' => $idactivity20,
				'source_id' =>$idPlan1,
				'value' => 1000000000,
				'goal' => 0,
				'evidence_balance' => 1000000000,
				'age' => 1,
				]);
				$idactivitySource10 = DB::getPdo()->lastInsertId();
			
			DB::table('activity_sources')->insert([
				'activity_id' => $idactivity24,
				'source_id' =>$idPlan1,
				'value' => 2477540344,
				'goal' => 0,
				'evidence_balance' => 2477540344,
				'age' => 1,
				]);
				$idactivitySource11 = DB::getPdo()->lastInsertId();
				
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity25,
            'source_id' =>$idPlan1,
            'value' => 276422878,
            'goal' => 0,
            'evidence_balance' => 276422878,
            'age' => 1,
            ]);
            $idactivitySource12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity26,
            'source_id' =>$idPlan12,
            'value' => 453752279,
            'goal' => 0,
            'evidence_balance' => 453752279,
            'age' => 1,
            ]);
            $idactivitySource13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity27,
            'source_id' =>$idPlan12,
            'value' => 618211343,
            'goal' => 0,
            'evidence_balance' => 618211343,
            'age' => 1,
            ]);
            $idactivitySource14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity28,
            'source_id' =>$idPlan12,
            'value' => 605641309,
            'goal' => 0,
            'evidence_balance' => 605641309,
            'age' => 1,
            ]);
            $idactivitySource15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity29,
            'source_id' =>$idPlan12,
            'value' => 100000000,
            'goal' => 0,
            'evidence_balance' => 100000000,
            'age' => 1,
            ]);
            $idactivitySource16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity33,
            'source_id' =>$idPlan12,
            'value' => 1636208788,
            'goal' => 0,
            'evidence_balance' => 1636208788,
            'age' => 1,
            ]);
            $idactivitySource18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity34,
            'source_id' =>$idPlan12,
            'value' => 626910080,
            'goal' => 0,
            'evidence_balance' => 626910080,
            'age' => 1,
            ]);
            $idactivitySource19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity38,
            'source_id' =>$idPlan12,
            'value' => 879342950,
            'goal' => 0,
            'evidence_balance' => 879342950,
            'age' => 1,
            ]);
            $idactivitySource21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity42,
            'source_id' =>$idPlan12,
            'value' => 754290764,
            'goal' => 0,
            'evidence_balance' => 754290764,
            'age' => 1,
            ]);
            $idactivitySource23 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity52,
            'source_id' =>$idPlan12,
            'value' => 2638317302,
            'goal' => 0,
            'evidence_balance' => 2638317302,
            'age' => 1,
            ]);
            $idactivitySource27 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity53,
            'source_id' =>$idPlan12,
            'value' => 150000000,
            'goal' => 0,
            'evidence_balance' => 150000000,
            'age' => 1,
            ]);
            $idactivitySource28 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity58,
            'source_id' =>$idPlan4,
            'value' => 2642994831,
            'goal' => 0,
            'evidence_balance' => 2642994831,
            'age' => 1,
            ]);
            $idactivitySource30 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity59,
            'source_id' =>$idPlan4,
            'value' => 157130310,
            'goal' => 0,
            'evidence_balance' => 157130310,
            'age' => 1,
            ]);
            $idactivitySource31 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity60,
            'source_id' =>$idPlan4,
            'value' => 886336133,
            'goal' => 0,
            'evidence_balance' => 886336133,
            'age' => 1,
            ]);
            $idactivitySource32 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity61,
            'source_id' =>$idPlan4,
            'value' => 2192450241,
            'goal' => 0,
            'evidence_balance' => 2192450241,
            'age' => 1,
            ]);
            $idactivitySource33 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity62,
            'source_id' =>$idPlan4,
            'value' => 8945994029.7,
            'goal' => 0,
            'evidence_balance' => 8945994029.7,
            'age' => 1,
            ]);
            $idactivitySource34 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity63,
            'source_id' =>$idPlan13,
            'value' => 972889872.26,
            'goal' => 0,
            'evidence_balance' => 972889872.26,
            'age' => 1,
            ]);
            $idactivitySource35 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity71,
            'source_id' =>$idPlan5,
            'value' => 413280000,
            'goal' => 0,
            'evidence_balance' => 413280000,
            'age' => 1,
            ]);
            $idactivitySource38 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity72,
            'source_id' =>$idPlan5,
            'value' => 298306059,
            'goal' => 0,
            'evidence_balance' => 298306059,
            'age' => 1,
            ]);
            $idactivitySource39 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity73,
            'source_id' =>$idPlan5,
            'value' => 140000000,
            'goal' => 0,
            'evidence_balance' => 140000000,
            'age' => 1,
            ]);
            $idactivitySource40 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity74,
            'source_id' =>$idPlan5,
            'value' => 1050897334,
            'goal' => 0,
            'evidence_balance' => 1050897334,
            'age' => 1,
            ]);
            $idactivitySource41 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity75,
            'source_id' =>$idPlan5,
            'value' => 108614846.26,
            'goal' => 0,
            'evidence_balance' => 108614846.26,
            'age' => 1,
            ]);
            $idactivitySource42 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity80,
            'source_id' =>$idPlan7,
            'value' => 123594291.23,
            'goal' => 0,
            'evidence_balance' => 123594291.23,
            'age' => 1,
            ]);
            $idactivitySource45 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity81,
            'source_id' =>$idPlan2,
            'value' => 545939307.55,
            'goal' => 0,
            'evidence_balance' => 545939307.55,
            'age' => 1,
            ]);
            $idactivitySource46 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity25,
              'source_id' =>$idPlan12,
              'value' => 184418249,
              'goal' => 0,
              'evidence_balance' => 184418249,
              'age' => 1,
              ]);
              $idactivitySource47 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity62,
              'source_id' =>$idPlan13,
              'value' => 7851037611.3,
              'goal' => 0,
              'evidence_balance' => 7851037611.3,
              'age' => 1,
              ]);
              $idactivitySource49 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity63,
              'source_id' =>$idPlan5,
              'value' => 187467262.74,
              'goal' => 0,
              'evidence_balance' => 187467262.74,
              'age' => 1,
              ]);
              $idactivitySource50 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity75,
              'source_id' =>$idPlan7,
              'value' => 1068922090.74,
              'goal' => 0,
              'evidence_balance' => 1068922090.74,
              'age' => 1,
              ]);
              $idactivitySource51 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity80,
              'source_id' =>$idPlan6,
              'value' => 2655974663.52,
              'goal' => 0,
              'evidence_balance' => 2655974663.52,
              'age' => 1,
              ]);
              $idactivitySource52 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('activity_sources')->insert([
              'activity_id' => $idactivity81,
              'source_id' =>$idPlan9,
              'value' => 135549587.55,
              'goal' => 0,
              'evidence_balance' => 135549587.55,
              'age' => 1,
              ]);
              $idactivitySource53 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity80,
                'source_id' =>$idPlan11,
                'value' => 2023379544,
                'goal' => 0,
                'evidence_balance' => 2023379544,
                'age' => 1,
                ]);
                $idactivitySource54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity81,
                'source_id' =>$idPlan10,
                'value' => 80764950.665,
                'goal' => 0,
                'evidence_balance' => 80764950.665,
                'age' => 1,
                ]);
                $idactivitySource55 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity80,
                  'source_id' =>$idPlan3,
                  'value' => 759710393.1,
                  'goal' => 0,
                  'evidence_balance' => 759710393.1,
                  'age' => 1,
                  ]);
                  $idactivitySource56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activity_sources')->insert([
                  'activity_id' => $idactivity81,
                  'source_id' =>$idPlan8,
                  'value' => 5869419.3,
                  'goal' => 0,
                  'evidence_balance' => 5869419.3,
                  'age' => 1,
                  ]);
                  $idactivitySource57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity80,
                    'source_id' =>$idPlan2,
                    'value' => 76708901.1499996,
                    'goal' => 0,
                    'evidence_balance' => 76708901.1499996,
                    'age' => 1,
                    ]);
                    $idactivitySource58 = DB::getPdo()->lastInsertId();

                  
                    
                    
                    
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia1,
                      'activity_source_id' =>$idactivitySource1,
                      'value' => 796104225,
                      ]);
                      $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia2,
                      'activity_source_id' =>$idactivitySource2,
                      'value' => 811123108,
                      ]);
                      $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia3,
                      'activity_source_id' =>$idactivitySource3,
                      'value' => 766119664,
                      ]);
                      $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia8,
                      'activity_source_id' =>$idactivitySource5,
                      'value' => 2174268404,
                      ]);
                      $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia9,
                      'activity_source_id' =>$idactivitySource6,
                      'value' => 216672276,
                      ]);
                      $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia10,
                      'activity_source_id' =>$idactivitySource7,
                      'value' => 197955517,
                      ]);
                      $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia17,
                      'activity_source_id' =>$idactivitySource9,
                      'value' => 804472066,
                      ]);
                      $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia25,
                      'activity_source_id' =>$idactivitySource12,
                      'value' => 276422878,
                      ]);
                      $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia26,
                      'activity_source_id' =>$idactivitySource13,
                      'value' => 448937005,
                      ]);
                      $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia27,
                      'activity_source_id' =>$idactivitySource14,
                      'value' => 609379787,
                      ]);
                      $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia28,
                      'activity_source_id' =>$idactivitySource15,
                      'value' => 588292191,
                      ]);
                      $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia29,
                      'activity_source_id' =>$idactivitySource16,
                      'value' => 95500000,
                      ]);
                      $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia33,
                      'activity_source_id' =>$idactivitySource18,
                      'value' => 1589201352,
                      ]);
                      $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia34,
                      'activity_source_id' =>$idactivitySource19,
                      'value' => 486806178,
                      ]);
                      $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia38,
                      'activity_source_id' =>$idactivitySource21,
                      'value' => 558439110,
                      ]);
                      $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia42,
                      'activity_source_id' =>$idactivitySource23,
                      'value' => 749399120,
                      ]);
                      $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia52,
                      'activity_source_id' =>$idactivitySource27,
                      'value' => 2523276083,
                      ]);
                      $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia53,
                      'activity_source_id' =>$idactivitySource28,
                      'value' => 150000000,
                      ]);
                      $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia58,
                      'activity_source_id' =>$idactivitySource30,
                      'value' => 2407978766,
                      ]);
                      $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia59,
                      'activity_source_id' =>$idactivitySource31,
                      'value' => 157012229,
                      ]);
                      $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia60,
                      'activity_source_id' =>$idactivitySource32,
                      'value' => 884160269,
                      ]);
                      $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia61,
                      'activity_source_id' =>$idactivitySource33,
                      'value' => 2118590835,
                      ]);
                      $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia62,
                      'activity_source_id' =>$idactivitySource34,
                      'value' => 8945994029.7,
                      ]);
                      $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
                      

                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia63,
                        'activity_source_id' =>$idactivitySource35,
                        'value' => 925067234,
                        ]);
                        $idevidenceFinancial35 = DB::getPdo()->lastInsertId();

                      
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia71,
                      'activity_source_id' =>$idactivitySource38,
                      'value' => 413280000,
                      ]);
                      $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia72,
                      'activity_source_id' =>$idactivitySource39,
                      'value' => 289956212,
                      ]);
                      $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia73,
                      'activity_source_id' =>$idactivitySource40,
                      'value' => 140000000,
                      ]);
                      $idevidenceFinancial40 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia74,
                      'activity_source_id' =>$idactivitySource41,
                      'value' => 1022174519,
                      ]);
                      $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia75,
                      'activity_source_id' =>$idactivitySource42,
                      'value' => 108614846.26,
                      ]);
                      $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia80,
                      'activity_source_id' =>$idactivitySource45,
                      'value' => 123594291.23,
                      ]);
                      $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia81,
                      'activity_source_id' =>$idactivitySource46,
                      'value' => 545939307.55,
                      ]);
                      $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia25,
                        'activity_source_id' =>$idactivitySource47,
                        'value' => 178869279,
                        ]);
                        $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia62,
                        'activity_source_id' =>$idactivitySource49,
                        'value' => 6888230622.3,
                        ]);
                        $idevidenceFinancial49 = DB::getPdo()->lastInsertId();

                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia75,
                        'activity_source_id' =>$idactivitySource51,
                        'value' => 993145347.74,
                        ]);
                        $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia80,
                        'activity_source_id' =>$idactivitySource52,
                        'value' => 2655974663.52,
                        ]);
                        $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('evidence_financial')->insert([
                        'evidence_id' => $idevidencia81,
                        'activity_source_id' =>$idactivitySource53,
                        'value' => 135549587.55,
                        ]);
                        $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                        
                        
                        
                        DB::table('evidence_financial')->insert([
                          'evidence_id' => $idevidencia80,
                          'activity_source_id' =>$idactivitySource11,
                          'value' => 2023379544,
                          ]);
                          $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                          

                        
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia81,
                            'activity_source_id' =>$idactivitySource10,
                            'value' => 45286924.8999996,
                            ]);
                            $idevidenceFinancial55 = DB::getPdo()->lastInsertId();

                          
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia80,
                              'activity_source_id' =>$idactivitySource56,
                              'value' => 645746279.249,
                              ]);
                              $idevidenceFinancial56 = DB::getPdo()->lastInsertId();

                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity1,
                                'source_id' =>$idPlan15,
                                'value' => 932357168,
                                'goal' => 0,
                                'evidence_balance' => 932357168,
                                'age' => 2,
                                ]);
                                $idactivitySource59 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity2,
                                'source_id' =>$idPlan15,
                                'value' => 931891753,
                                'goal' => 0,
                                'evidence_balance' => 931891753,
                                'age' => 2,
                                ]);
                                $idactivitySource60 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity3,
                                'source_id' =>$idPlan15,
                                'value' => 1081439732,
                                'goal' => 0,
                                'evidence_balance' => 1081439732,
                                'age' => 2,
                                ]);
                                $idactivitySource61 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity7,
                                'source_id' =>$idPlan15,
                                'value' => 292247591,
                                'goal' => 0,
                                'evidence_balance' => 292247591,
                                'age' => 2,
                                ]);
                                $idactivitySource62 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity8,
                                'source_id' =>$idPlan15,
                                'value' => 2345903728,
                                'goal' => 0,
                                'evidence_balance' => 2345903728,
                                'age' => 2,
                                ]);
                                $idactivitySource63 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity9,
                                'source_id' =>$idPlan15,
                                'value' => 263553635,
                                'goal' => 0,
                                'evidence_balance' => 263553635,
                                'age' => 2,
                                ]);
                                $idactivitySource64 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity10,
                                'source_id' =>$idPlan15,
                                'value' => 235854070,
                                'goal' => 0,
                                'evidence_balance' => 235854070,
                                'age' => 2,
                                ]);
                                $idactivitySource65 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity16,
                                'source_id' =>$idPlan15,
                                'value' => 15751910645,
                                'goal' => 0,
                                'evidence_balance' => 15751910645,
                                'age' => 2,
                                ]);
                                $idactivitySource66 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity17,
                                'source_id' =>$idPlan15,
                                'value' => 667471984,
                                'goal' => 0,
                                'evidence_balance' => 667471984,
                                'age' => 2,
                                ]);
                                $idactivitySource67 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity20,
                                'source_id' =>$idPlan18,
                                'value' => 1000000000,
                                'goal' => 0,
                                'evidence_balance' => 1000000000,
                                'age' => 2,
                                ]);
                                $idactivitySource68 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity24,
                                'source_id' =>$idPlan18,
                                'value' => 2477540344,
                                'goal' => 0,
                                'evidence_balance' => 2477540344,
                                'age' => 2,
                                ]);
                                $idactivitySource69 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity25,
                                'source_id' =>$idPlan18,
                                'value' => 460841127,
                                'goal' => 0,
                                'evidence_balance' => 460841127,
                                'age' => 2,
                                ]);
                                $idactivitySource70 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity26,
                                'source_id' =>$idPlan18,
                                'value' => 453752279,
                                'goal' => 0,
                                'evidence_balance' => 453752279,
                                'age' => 2,
                                ]);
                                $idactivitySource71 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity27,
                                'source_id' =>$idPlan18,
                                'value' => 618211343,
                                'goal' => 0,
                                'evidence_balance' => 618211343,
                                'age' => 2,
                                ]);
                                $idactivitySource72 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity28,
                                'source_id' =>$idPlan18,
                                'value' => 605641309,
                                'goal' => 0,
                                'evidence_balance' => 605641309,
                                'age' => 2,
                                ]);
                                $idactivitySource73 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity29,
                                'source_id' =>$idPlan18,
                                'value' => 100000000,
                                'goal' => 0,
                                'evidence_balance' => 100000000,
                                'age' => 2,
                                ]);
                                $idactivitySource74 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity32,
                                'source_id' =>$idPlan18,
                                'value' => 2171435772,
                                'goal' => 0,
                                'evidence_balance' => 2171435772,
                                'age' => 2,
                                ]);
                                $idactivitySource75 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity33,
                                'source_id' =>$idPlan18,
                                'value' => 1636208788,
                                'goal' => 0,
                                'evidence_balance' => 1636208788,
                                'age' => 2,
                                ]);
                                $idactivitySource76 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity34,
                                'source_id' =>$idPlan18,
                                'value' => 626910080,
                                'goal' => 0,
                                'evidence_balance' => 626910080,
                                'age' => 2,
                                ]);
                                $idactivitySource77 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity37,
                                'source_id' =>$idPlan18,
                                'value' => 2717588165,
                                'goal' => 0,
                                'evidence_balance' => 2717588165,
                                'age' => 2,
                                ]);
                                $idactivitySource78 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity38,
                                'source_id' =>$idPlan18,
                                'value' => 879342950,
                                'goal' => 0,
                                'evidence_balance' => 879342950,
                                'age' => 2,
                                ]);
                                $idactivitySource79 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity41,
                                'source_id' =>$idPlan18,
                                'value' => 600000000,
                                'goal' => 0,
                                'evidence_balance' => 600000000,
                                'age' => 2,
                                ]);
                                $idactivitySource80 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity42,
                                'source_id' =>$idPlan18,
                                'value' => 754290764,
                                'goal' => 0,
                                'evidence_balance' => 754290764,
                                'age' => 2,
                                ]);
                                $idactivitySource81 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity46,
                                'source_id' =>$idPlan18,
                                'value' => 862165991,
                                'goal' => 0,
                                'evidence_balance' => 862165991,
                                'age' => 2,
                                ]);
                                $idactivitySource82 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity48,
                                'source_id' =>$idPlan18,
                                'value' => 1872672546.1,
                                'goal' => 0,
                                'evidence_balance' => 1872672546.1,
                                'age' => 2,
                                ]);
                                $idactivitySource83 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity51,
                                'source_id' =>$idPlan19,
                                'value' => 2100000000,
                                'goal' => 0,
                                'evidence_balance' => 2100000000,
                                'age' => 2,
                                ]);
                                $idactivitySource84 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity52,
                                'source_id' =>$idPlan19,
                                'value' => 2638317302,
                                'goal' => 0,
                                'evidence_balance' => 2638317302,
                                'age' => 2,
                                ]);
                                $idactivitySource85 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity53,
                                'source_id' =>$idPlan19,
                                'value' => 150000000,
                                'goal' => 0,
                                'evidence_balance' => 150000000,
                                'age' => 2,
                                ]);
                                $idactivitySource86 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity57,
                                'source_id' =>$idPlan19,
                                'value' => 1926586025.1,
                                'goal' => 0,
                                'evidence_balance' => 1926586025.1,
                                'age' => 2,
                                ]);
                                $idactivitySource87 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity58,
                                'source_id' =>$idPlan27,
                                'value' => 2642994831,
                                'goal' => 0,
                                'evidence_balance' => 2642994831,
                                'age' => 2,
                                ]);
                                $idactivitySource88 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity59,
                                'source_id' =>$idPlan27,
                                'value' => 157130310,
                                'goal' => 0,
                                'evidence_balance' => 157130310,
                                'age' => 2,
                                ]);
                                $idactivitySource89 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity60,
                                'source_id' =>$idPlan27,
                                'value' => 886336133,
                                'goal' => 0,
                                'evidence_balance' => 886336133,
                                'age' => 2,
                                ]);
                                $idactivitySource90 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity61,
                                'source_id' =>$idPlan27,
                                'value' => 2192450241,
                                'goal' => 0,
                                'evidence_balance' => 2192450241,
                                'age' => 2,
                                ]);
                                $idactivitySource91 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity62,
                                'source_id' =>$idPlan27,
                                'value' => 4790388546.22,
                                'goal' => 0,
                                'evidence_balance' => 4790388546.22,
                                'age' => 2,
                                ]);
                                $idactivitySource92 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity67,
                                'source_id' =>$idPlan25,
                                'value' => 105837817.219999,
                                'goal' => 0,
                                'evidence_balance' => 105837817.219999,
                                'age' => 2,
                                ]);
                                $idactivitySource93 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity70,
                                'source_id' =>$idPlan21,
                                'value' => 732985358,
                                'goal' => 0,
                                'evidence_balance' => 732985358,
                                'age' => 2,
                                ]);
                                $idactivitySource94 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity71,
                                'source_id' =>$idPlan21,
                                'value' => 413280000,
                                'goal' => 0,
                                'evidence_balance' => 413280000,
                                'age' => 2,
                                ]);
                                $idactivitySource95 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity72,
                                'source_id' =>$idPlan21,
                                'value' => 298306059,
                                'goal' => 0,
                                'evidence_balance' => 298306059,
                                'age' => 2,
                                ]);
                                $idactivitySource96 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity73,
                                'source_id' =>$idPlan21,
                                'value' => 140000000,
                                'goal' => 0,
                                'evidence_balance' => 140000000,
                                'age' => 2,
                                ]);
                                $idactivitySource97 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity74,
                                'source_id' =>$idPlan21,
                                'value' => 397756502.869999,
                                'goal' => 0,
                                'evidence_balance' => 397756502.869999,
                                'age' => 2,
                                ]);
                                $idactivitySource98 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity75,
                                'source_id' =>$idPlan20,
                                'value' => 1177536937,
                                'goal' => 0,
                                'evidence_balance' => 1177536937,
                                'age' => 2,
                                ]);
                                $idactivitySource99 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity78,
                                'source_id' =>$idPlan20,
                                'value' => 925668030.42,
                                'goal' => 0,
                                'evidence_balance' => 925668030.42,
                                'age' => 2,
                                ]);
                                $idactivitySource100 = DB::getPdo()->lastInsertId();
                                
                                
                                
                              DB::table('activity_sources')->insert([
                                'activity_id' => $idactivity80,
                                'source_id' =>$idPlan17,
                                'value' => 510043043.92,
                                'goal' => 0,
                                'evidence_balance' => 510043043.92,
                                'age' => 2,
                                ]);
                                $idactivitySource102 = DB::getPdo()->lastInsertId();
                                
                                
                                
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity17,
                                  'source_id' =>$idPlan18,
                                  'value' => 253016594,
                                  'goal' => 0,
                                  'evidence_balance' => 253016594,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource103 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity48,
                                  'source_id' =>$idPlan19,
                                  'value' => 914554137.900002,
                                  'goal' => 0,
                                  'evidence_balance' => 914554137.900002,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource104 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity57,
                                  'source_id' =>$idPlan27,
                                  'value' => 1045804315.9,
                                  'goal' => 0,
                                  'evidence_balance' => 1045804315.9,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource105 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity62,
                                  'source_id' =>$idPlan26,
                                  'value' => 9987932392,
                                  'goal' => 0,
                                  'evidence_balance' => 9987932392,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource106 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity67,
                                  'source_id' =>$idPlan21,
                                  'value' => 960739221.780001,
                                  'goal' => 0,
                                  'evidence_balance' => 960739221.780001,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource107 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity74,
                                  'source_id' =>$idPlan20,
                                  'value' => 653140831.130001,
                                  'goal' => 0,
                                  'evidence_balance' => 653140831.130001,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource108 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity78,
                                  'source_id' =>$idPlan17,
                                  'value' => 520447023.58,
                                  'goal' => 0,
                                  'evidence_balance' => 520447023.58,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource109 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                DB::table('activity_sources')->insert([
                                  'activity_id' => $idactivity80,
                                  'source_id' =>$idPlan16,
                                  'value' => 873315007.2,
                                  'goal' => 0,
                                  'evidence_balance' => 873315007.2,
                                  'age' => 2,
                                  ]);
                                  $idactivitySource110 = DB::getPdo()->lastInsertId();
                                  
                                  
                                  
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity62,
                                    'source_id' =>$idPlan25,
                                    'value' => 2018710702.78,
                                    'goal' => 0,
                                    'evidence_balance' => 2018710702.78,
                                    'age' => 2,
                                    ]);
                                    $idactivitySource111 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                  DB::table('activity_sources')->insert([
                                    'activity_id' => $idactivity80,
                                    'source_id' =>$idPlan23,
                                    'value' => 468304294.65,
                                    'goal' => 0,
                                    'evidence_balance' => 468304294.65,
                                    'age' => 2,
                                    ]);
                                    $idactivitySource112 = DB::getPdo()->lastInsertId();
                                    
                                    
                                    
                                    DB::table('activity_sources')->insert([
                                      'activity_id' => $idactivity80,
                                      'source_id' =>$idPlan22,
                                      'value' => 63000000,
                                      'goal' => 0,
                                      'evidence_balance' => 63000000,
                                      'age' => 2,
                                      ]);
                                      $idactivitySource113 = DB::getPdo()->lastInsertId();
                                      

                                        DB::table('activity_sources')->insert([
                                          'activity_id' => $idactivity80,
                                          'source_id' =>$idPlan24,
                                          'value' => 81589617.25408,
                                          'goal' => 0,
                                          'evidence_balance' => 81589617.25408,
                                          'age' => 2,
                                          ]);
                                          $idactivitySource114 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        
                                        
                                        
                                        
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia82,
                                          'activity_source_id' =>$idactivitySource59,
                                          'value' => 796104225,
                                          ]);
                                          $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia83,
                                          'activity_source_id' =>$idactivitySource60,
                                          'value' => 811123108,
                                          ]);
                                          $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia84,
                                          'activity_source_id' =>$idactivitySource61,
                                          'value' => 766119664,
                                          ]);
                                          $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia88,
                                          'activity_source_id' =>$idactivitySource62,
                                          'value' => 187118251,
                                          ]);
                                          $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia89,
                                          'activity_source_id' =>$idactivitySource63,
                                          'value' => 2174268404,
                                          ]);
                                          $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia90,
                                          'activity_source_id' =>$idactivitySource64,
                                          'value' => 216672276,
                                          ]);
                                          $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia91,
                                          'activity_source_id' =>$idactivitySource65,
                                          'value' => 197955517,
                                          ]);
                                          $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia97,
                                          'activity_source_id' =>$idactivitySource66,
                                          'value' => 14277311000.005,
                                          ]);
                                          $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia98,
                                          'activity_source_id' =>$idactivitySource67,
                                          'value' => 667471984,
                                          ]);
                                          $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia101,
                                          'activity_source_id' =>$idactivitySource68,
                                          'value' => 806175453,
                                          ]);
                                          $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia105,
                                          'activity_source_id' =>$idactivitySource69,
                                          'value' => 2281778016,
                                          ]);
                                          $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia106,
                                          'activity_source_id' =>$idactivitySource70,
                                          'value' => 455292157,
                                          ]);
                                          $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia107,
                                          'activity_source_id' =>$idactivitySource71,
                                          'value' => 448937005,
                                          ]);
                                          $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia108,
                                          'activity_source_id' =>$idactivitySource72,
                                          'value' => 609379787,
                                          ]);
                                          $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia109,
                                          'activity_source_id' =>$idactivitySource73,
                                          'value' => 588292191,
                                          ]);
                                          $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia110,
                                          'activity_source_id' =>$idactivitySource74,
                                          'value' => 95500000,
                                          ]);
                                          $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia113,
                                          'activity_source_id' =>$idactivitySource75,
                                          'value' => 1974398930,
                                          ]);
                                          $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia114,
                                          'activity_source_id' =>$idactivitySource76,
                                          'value' => 1589201352,
                                          ]);
                                          $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia115,
                                          'activity_source_id' =>$idactivitySource77,
                                          'value' => 486806178,
                                          ]);
                                          $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia118,
                                          'activity_source_id' =>$idactivitySource78,
                                          'value' => 2633850993,
                                          ]);
                                          $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia119,
                                          'activity_source_id' =>$idactivitySource79,
                                          'value' => 558439110,
                                          ]);
                                          $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia122,
                                          'activity_source_id' =>$idactivitySource80,
                                          'value' => 566862294,
                                          ]);
                                          $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia123,
                                          'activity_source_id' =>$idactivitySource81,
                                          'value' => 749399120,
                                          ]);
                                          $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia127,
                                          'activity_source_id' =>$idactivitySource82,
                                          'value' => 421687199,
                                          ]);
                                          $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia129,
                                          'activity_source_id' =>$idactivitySource83,
                                          'value' => 1872672546.1,
                                          ]);
                                          $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia132,
                                          'activity_source_id' =>$idactivitySource84,
                                          'value' => 2099718937,
                                          ]);
                                          $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia133,
                                          'activity_source_id' =>$idactivitySource85,
                                          'value' => 2523276083,
                                          ]);
                                          $idevidenceFinancial85 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia134,
                                          'activity_source_id' =>$idactivitySource86,
                                          'value' => 150000000,
                                          ]);
                                          $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia138,
                                          'activity_source_id' =>$idactivitySource87,
                                          'value' => 1926586025.1,
                                          ]);
                                          $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia139,
                                          'activity_source_id' =>$idactivitySource88,
                                          'value' => 2407978766,
                                          ]);
                                          $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia140,
                                          'activity_source_id' =>$idactivitySource89,
                                          'value' => 157012229,
                                          ]);
                                          $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia141,
                                          'activity_source_id' =>$idactivitySource90,
                                          'value' => 884160269,
                                          ]);
                                          $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia142,
                                          'activity_source_id' =>$idactivitySource91,
                                          'value' => 2118590835,
                                          ]);
                                          $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia143,
                                          'activity_source_id' =>$idactivitySource92,
                                          'value' => 4790388546.22,
                                          ]);
                                          $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia148,
                                          'activity_source_id' =>$idactivitySource93,
                                          'value' => 105837817.219999,
                                          ]);
                                          $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia151,
                                          'activity_source_id' =>$idactivitySource94,
                                          'value' => 723507205,
                                          ]);
                                          $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia152,
                                          'activity_source_id' =>$idactivitySource95,
                                          'value' => 413280000,
                                          ]);
                                          $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia153,
                                          'activity_source_id' =>$idactivitySource96,
                                          'value' => 289956212,
                                          ]);
                                          $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia154,
                                          'activity_source_id' =>$idactivitySource97,
                                          'value' => 140000000,
                                          ]);
                                          $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia155,
                                          'activity_source_id' =>$idactivitySource98,
                                          'value' => 397756502.869999,
                                          ]);
                                          $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia156,
                                          'activity_source_id' =>$idactivitySource99,
                                          'value' => 1101760194,
                                          ]);
                                          $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia159,
                                          'activity_source_id' =>$idactivitySource100,
                                          'value' => 925668030.42,
                                          ]);
                                          $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                        DB::table('evidence_financial')->insert([
                                          'evidence_id' => $idevidencia161,
                                          'activity_source_id' =>$idactivitySource102,
                                          'value' => 510043043.92,
                                          ]);
                                          $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                                          
                                          
                                          
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia98,
                                            'activity_source_id' =>$idactivitySource103,
                                            'value' => 137000082,
                                            ]);
                                            $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia129,
                                            'activity_source_id' =>$idactivitySource104,
                                            'value' => 882817369.900002,
                                            ]);
                                            $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia138,
                                            'activity_source_id' =>$idactivitySource105,
                                            'value' => 803861768.900002,
                                            ]);
                                            $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia143,
                                            'activity_source_id' =>$idactivitySource106,
                                            'value' => 9987932392,
                                            ]);
                                            $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia148,
                                            'activity_source_id' =>$idactivitySource107,
                                            'value' => 853172678.780001,
                                            ]);
                                            $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia155,
                                            'activity_source_id' =>$idactivitySource108,
                                            'value' => 624418016.130001,
                                            ]);
                                            $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia159,
                                            'activity_source_id' =>$idactivitySource109,
                                            'value' => 383760519.58,
                                            ]);
                                            $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                          DB::table('evidence_financial')->insert([
                                            'evidence_id' => $idevidencia161,
                                            'activity_source_id' =>$idactivitySource110,
                                            'value' => 873315007.2,
                                            ]);
                                            $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                                            
                                            
                                            
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia143,
                                              'activity_source_id' =>$idactivitySource111,
                                              'value' => 1055903713.78,
                                              ]);
                                              $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                            DB::table('evidence_financial')->insert([
                                              'evidence_id' => $idevidencia161,
                                              'activity_source_id' =>$idactivitySource112,
                                              'value' => 468304294.65,
                                              ]);
                                              $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                                              
                                              
                                              
                                              DB::table('evidence_financial')->insert([
                                                'evidence_id' => $idevidencia161,
                                                'activity_source_id' =>$idactivitySource113,
                                                'value' => 63000000,
                                                ]);
                                                $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                                                
                                                
                                                
                                                DB::table('evidence_financial')->insert([
                                                  'evidence_id' => $idevidencia161,
                                                  'activity_source_id' =>$idactivitySource114,
                                                  'value' => 3534032432.229,
                                                  ]);
                                                  $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                                                  
                                                  
                                                                 
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity1,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 606762592,
                                                    'goal' => 0,
                                                    'evidence_balance' => 606762592,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource115 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity2,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 401424938,
                                                    'goal' => 0,
                                                    'evidence_balance' => 401424938,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource116 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity3,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 1096490772,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1096490772,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource117 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity7,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 354162591,
                                                    'goal' => 0,
                                                    'evidence_balance' => 354162591,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource118 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity8,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 4116911896,
                                                    'goal' => 0,
                                                    'evidence_balance' => 4116911896,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource119 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity9,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 156044513,
                                                    'goal' => 0,
                                                    'evidence_balance' => 156044513,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource120 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity10,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 178568853,
                                                    'goal' => 0,
                                                    'evidence_balance' => 178568853,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource121 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity16,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 10928620994,
                                                    'goal' => 0,
                                                    'evidence_balance' => 10928620994,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource122 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity17,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 5853939641,
                                                    'goal' => 0,
                                                    'evidence_balance' => 5853939641,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource123 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity20,
                                                    'source_id' =>$idPlan29,
                                                    'value' => 349404749,
                                                    'goal' => 0,
                                                    'evidence_balance' => 349404749,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource124 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity24,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 1651193711,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1651193711,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource125 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity25,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 305164602,
                                                    'goal' => 0,
                                                    'evidence_balance' => 305164602,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource126 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity26,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 303495745,
                                                    'goal' => 0,
                                                    'evidence_balance' => 303495745,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource127 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity27,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 489457491,
                                                    'goal' => 0,
                                                    'evidence_balance' => 489457491,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource128 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity28,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 644973003,
                                                    'goal' => 0,
                                                    'evidence_balance' => 644973003,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource129 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity29,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 229354980,
                                                    'goal' => 0,
                                                    'evidence_balance' => 229354980,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource130 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity32,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 1723690493,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1723690493,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource131 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity33,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 1131555509,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1131555509,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource132 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity34,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 568965550,
                                                    'goal' => 0,
                                                    'evidence_balance' => 568965550,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource133 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity37,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 998814135,
                                                    'goal' => 0,
                                                    'evidence_balance' => 998814135,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource134 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity38,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 792921253,
                                                    'goal' => 0,
                                                    'evidence_balance' => 792921253,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource135 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity41,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 241617817,
                                                    'goal' => 0,
                                                    'evidence_balance' => 241617817,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource136 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity42,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 3230102329,
                                                    'goal' => 0,
                                                    'evidence_balance' => 3230102329,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource137 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity45,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 246075045,
                                                    'goal' => 0,
                                                    'evidence_balance' => 246075045,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource138 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity48,
                                                    'source_id' =>$idPlan40,
                                                    'value' => 1042883738,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1042883738,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource139 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity51,
                                                    'source_id' =>$idPlan41,
                                                    'value' => 5504721198,
                                                    'goal' => 0,
                                                    'evidence_balance' => 5504721198,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource140 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity52,
                                                    'source_id' =>$idPlan41,
                                                    'value' => 1953955313,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1953955313,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource141 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity53,
                                                    'source_id' =>$idPlan41,
                                                    'value' => 1219010263,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1219010263,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource142 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity57,
                                                    'source_id' =>$idPlan41,
                                                    'value' => 2106471326.88,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2106471326.88,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource143 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity58,
                                                    'source_id' =>$idPlan32,
                                                    'value' => 2473188944,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2473188944,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource144 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity59,
                                                    'source_id' =>$idPlan32,
                                                    'value' => 230645976,
                                                    'goal' => 0,
                                                    'evidence_balance' => 230645976,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource145 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity60,
                                                    'source_id' =>$idPlan32,
                                                    'value' => 2151660309,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2151660309,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource146 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity61,
                                                    'source_id' =>$idPlan32,
                                                    'value' => 1996011481,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1996011481,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource147 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity62,
                                                    'source_id' =>$idPlan32,
                                                    'value' => 9167678624.78,
                                                    'goal' => 0,
                                                    'evidence_balance' => 9167678624.78,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource148 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity63,
                                                    'source_id' =>$idPlan33,
                                                    'value' => 2489950077,
                                                    'goal' => 0,
                                                    'evidence_balance' => 2489950077,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource149 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity67,
                                                    'source_id' =>$idPlan33,
                                                    'value' => 826776396.780001,
                                                    'goal' => 0,
                                                    'evidence_balance' => 826776396.780001,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource150 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity70,
                                                    'source_id' =>$idPlan35,
                                                    'value' => 195778912,
                                                    'goal' => 0,
                                                    'evidence_balance' => 195778912,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource151 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity71,
                                                    'source_id' =>$idPlan35,
                                                    'value' => 332101328,
                                                    'goal' => 0,
                                                    'evidence_balance' => 332101328,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource152 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity72,
                                                    'source_id' =>$idPlan35,
                                                    'value' => 244248198,
                                                    'goal' => 0,
                                                    'evidence_balance' => 244248198,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource153 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity73,
                                                    'source_id' =>$idPlan35,
                                                    'value' => 145021120,
                                                    'goal' => 0,
                                                    'evidence_balance' => 145021120,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource154 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity74,
                                                    'source_id' =>$idPlan35,
                                                    'value' => 543931055.35,
                                                    'goal' => 0,
                                                    'evidence_balance' => 543931055.35,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource155 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity75,
                                                    'source_id' =>$idPlan34,
                                                    'value' => 395536652,
                                                    'goal' => 0,
                                                    'evidence_balance' => 395536652,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource156 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity78,
                                                    'source_id' =>$idPlan34,
                                                    'value' => 1329585316,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1329585316,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource157 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity79,
                                                    'source_id' =>$idPlan34,
                                                    'value' => 231630928,
                                                    'goal' => 0,
                                                    'evidence_balance' => 231630928,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource158 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity80,
                                                    'source_id' =>$idPlan34,
                                                    'value' => 1127857561.7,
                                                    'goal' => 0,
                                                    'evidence_balance' => 1127857561.7,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource159 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                  DB::table('activity_sources')->insert([
                                                    'activity_id' => $idactivity81,
                                                    'source_id' =>$idPlan39,
                                                    'value' => 203970314.900001,
                                                    'goal' => 0,
                                                    'evidence_balance' => 203970314.900001,
                                                    'age' => 3,
                                                    ]);
                                                    $idactivitySource160 = DB::getPdo()->lastInsertId();
                                                    
                                                    
                                                    
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity20,
                                                      'source_id' =>$idPlan40,
                                                      'value' => 2796739531,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2796739531,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource161 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity48,
                                                      'source_id' =>$idPlan41,
                                                      'value' => 86296387,
                                                      'goal' => 0,
                                                      'evidence_balance' => 86296387,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource162 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity57,
                                                      'source_id' =>$idPlan32,
                                                      'value' => 2320109721.12,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2320109721.12,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource163 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity62,
                                                      'source_id' =>$idPlan33,
                                                      'value' => 6202180326.22,
                                                      'goal' => 0,
                                                      'evidence_balance' => 6202180326.22,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource164 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity67,
                                                      'source_id' =>$idPlan35,
                                                      'value' => 2973705594.22,
                                                      'goal' => 0,
                                                      'evidence_balance' => 2973705594.22,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource165 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity74,
                                                      'source_id' =>$idPlan34,
                                                      'value' => 298305928.65,
                                                      'goal' => 0,
                                                      'evidence_balance' => 298305928.65,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource166 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity80,
                                                      'source_id' =>$idPlan30,
                                                      'value' => 1196441559.9,
                                                      'goal' => 0,
                                                      'evidence_balance' => 1196441559.9,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource167 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                    DB::table('activity_sources')->insert([
                                                      'activity_id' => $idactivity81,
                                                      'source_id' =>$idPlan37,
                                                      'value' => 659412836.8,
                                                      'goal' => 0,
                                                      'evidence_balance' => 659412836.8,
                                                      'age' => 3,
                                                      ]);
                                                      $idactivitySource168 = DB::getPdo()->lastInsertId();
                                                      
                                                      
                                                      
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity80,
                                                        'source_id' =>$idPlan31,
                                                        'value' => 1619617263.3,
                                                        'goal' => 0,
                                                        'evidence_balance' => 1619617263.3,
                                                        'age' => 3,
                                                        ]);
                                                        $idactivitySource169 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                      DB::table('activity_sources')->insert([
                                                        'activity_id' => $idactivity81,
                                                        'source_id' =>$idPlan36,
                                                        'value' => 57549369.6,
                                                        'goal' => 0,
                                                        'evidence_balance' => 57549369.6,
                                                        'age' => 3,
                                                        ]);
                                                        $idactivitySource170 = DB::getPdo()->lastInsertId();
                                                        
                                                        
                                                        
                                                        DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity80,
                                                          'source_id' =>$idPlan39,
                                                          'value' => 1071486693.1,
                                                          'goal' => 0,
                                                          'evidence_balance' => 1071486693.1,
                                                          'age' => 3,
                                                          ]);
                                                          $idactivitySource171 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                        DB::table('activity_sources')->insert([
                                                          'activity_id' => $idactivity81,
                                                          'source_id' =>$idPlan38,
                                                          'value' => 36521483.24594,
                                                          'goal' => 0,
                                                          'evidence_balance' => 36521483.24594,
                                                          'age' => 3,
                                                          ]);
                                                          $idactivitySource172 = DB::getPdo()->lastInsertId();
                                                          
                                                          
                                                          
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia163,
                                                            'activity_source_id' =>$idactivitySource115,
                                                            'value' => 476906540,
                                                            ]);
                                                            $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia164,
                                                            'activity_source_id' =>$idactivitySource116,
                                                            'value' => 263111985,
                                                            ]);
                                                            $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia165,
                                                            'activity_source_id' =>$idactivitySource117,
                                                            'value' => 1029129683,
                                                            ]);
                                                            $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia169,
                                                            'activity_source_id' =>$idactivitySource118,
                                                            'value' => 212571283,
                                                            ]);
                                                            $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia170,
                                                            'activity_source_id' =>$idactivitySource119,
                                                            'value' => 3935883805,
                                                            ]);
                                                            $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia171,
                                                            'activity_source_id' =>$idactivitySource120,
                                                            'value' => 144261490,
                                                            ]);
                                                            $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia172,
                                                            'activity_source_id' =>$idactivitySource121,
                                                            'value' => 165702776,
                                                            ]);
                                                            $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia178,
                                                            'activity_source_id' =>$idactivitySource122,
                                                            'value' => 10289927469,
                                                            ]);
                                                            $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia179,
                                                            'activity_source_id' =>$idactivitySource123,
                                                            'value' => 5147183872,
                                                            ]);
                                                            $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia182,
                                                            'activity_source_id' =>$idactivitySource124,
                                                            'value' => 349404749,
                                                            ]);
                                                            $idevidenceFinancial124 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia186,
                                                            'activity_source_id' =>$idactivitySource125,
                                                            'value' => 1575263586,
                                                            ]);
                                                            $idevidenceFinancial125 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia187,
                                                            'activity_source_id' =>$idactivitySource126,
                                                            'value' => 302397685,
                                                            ]);
                                                            $idevidenceFinancial126 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia188,
                                                            'activity_source_id' =>$idactivitySource127,
                                                            'value' => 294509815,
                                                            ]);
                                                            $idevidenceFinancial127 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia189,
                                                            'activity_source_id' =>$idactivitySource128,
                                                            'value' => 487814658,
                                                            ]);
                                                            $idevidenceFinancial128 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia190,
                                                            'activity_source_id' =>$idactivitySource129,
                                                            'value' => 641890239,
                                                            ]);
                                                            $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia191,
                                                            'activity_source_id' =>$idactivitySource130,
                                                            'value' => 216965675,
                                                            ]);
                                                            $idevidenceFinancial130 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia194,
                                                            'activity_source_id' =>$idactivitySource131,
                                                            'value' => 1651391364,
                                                            ]);
                                                            $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia195,
                                                            'activity_source_id' =>$idactivitySource132,
                                                            'value' => 1104180362,
                                                            ]);
                                                            $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia196,
                                                            'activity_source_id' =>$idactivitySource133,
                                                            'value' => 556425385,
                                                            ]);
                                                            $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia199,
                                                            'activity_source_id' =>$idactivitySource134,
                                                            'value' => 728677937,
                                                            ]);
                                                            $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia200,
                                                            'activity_source_id' =>$idactivitySource135,
                                                            'value' => 787029838,
                                                            ]);
                                                            $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia203,
                                                            'activity_source_id' =>$idactivitySource136,
                                                            'value' => 171500194,
                                                            ]);
                                                            $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia204,
                                                            'activity_source_id' =>$idactivitySource137,
                                                            'value' => 3023469297,
                                                            ]);
                                                            $idevidenceFinancial137 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia207,
                                                            'activity_source_id' =>$idactivitySource138,
                                                            'value' => 243310073,
                                                            ]);
                                                            $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia210,
                                                            'activity_source_id' =>$idactivitySource139,
                                                            'value' => 1042883738,
                                                            ]);
                                                            $idevidenceFinancial139 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia213,
                                                            'activity_source_id' =>$idactivitySource140,
                                                            'value' => 5406444661,
                                                            ]);
                                                            $idevidenceFinancial140 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia214,
                                                            'activity_source_id' =>$idactivitySource141,
                                                            'value' => 1510392382,
                                                            ]);
                                                            $idevidenceFinancial141 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia215,
                                                            'activity_source_id' =>$idactivitySource142,
                                                            'value' => 796778711,
                                                            ]);
                                                            $idevidenceFinancial142 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia219,
                                                            'activity_source_id' =>$idactivitySource143,
                                                            'value' => 2106471326.88,
                                                            ]);
                                                            $idevidenceFinancial143 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia220,
                                                            'activity_source_id' =>$idactivitySource144,
                                                            'value' => 2367052888,
                                                            ]);
                                                            $idevidenceFinancial144 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia221,
                                                            'activity_source_id' =>$idactivitySource145,
                                                            'value' => 229388225,
                                                            ]);
                                                            $idevidenceFinancial145 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia222,
                                                            'activity_source_id' =>$idactivitySource146,
                                                            'value' => 1857762295,
                                                            ]);
                                                            $idevidenceFinancial146 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia223,
                                                            'activity_source_id' =>$idactivitySource147,
                                                            'value' => 1985618945,
                                                            ]);
                                                            $idevidenceFinancial147 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia224,
                                                            'activity_source_id' =>$idactivitySource148,
                                                            'value' => 9167678624.78,
                                                            ]);
                                                            $idevidenceFinancial148 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia225,
                                                            'activity_source_id' =>$idactivitySource149,
                                                            'value' => 2429287737,
                                                            ]);
                                                            $idevidenceFinancial149 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia229,
                                                            'activity_source_id' =>$idactivitySource150,
                                                            'value' => 826776396.780001,
                                                            ]);
                                                            $idevidenceFinancial150 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia232,
                                                            'activity_source_id' =>$idactivitySource151,
                                                            'value' => 188755503,
                                                            ]);
                                                            $idevidenceFinancial151 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia233,
                                                            'activity_source_id' =>$idactivitySource152,
                                                            'value' => 218185200,
                                                            ]);
                                                            $idevidenceFinancial152 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia234,
                                                            'activity_source_id' =>$idactivitySource153,
                                                            'value' => 26916646,
                                                            ]);
                                                            $idevidenceFinancial153 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia235,
                                                            'activity_source_id' =>$idactivitySource154,
                                                            'value' => 143579186,
                                                            ]);
                                                            $idevidenceFinancial154 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia236,
                                                            'activity_source_id' =>$idactivitySource155,
                                                            'value' => 543931055.35,
                                                            ]);
                                                            $idevidenceFinancial155 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia237,
                                                            'activity_source_id' =>$idactivitySource156,
                                                            'value' => 219367753,
                                                            ]);
                                                            $idevidenceFinancial156 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia240,
                                                            'activity_source_id' =>$idactivitySource157,
                                                            'value' => 1291481951,
                                                            ]);
                                                            $idevidenceFinancial157 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia241,
                                                            'activity_source_id' =>$idactivitySource158,
                                                            'value' => 226542895,
                                                            ]);
                                                            $idevidenceFinancial158 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia242,
                                                            'activity_source_id' =>$idactivitySource159,
                                                            'value' => 1127857561.7,
                                                            ]);
                                                            $idevidenceFinancial159 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                          DB::table('evidence_financial')->insert([
                                                            'evidence_id' => $idevidencia243,
                                                            'activity_source_id' =>$idactivitySource160,
                                                            'value' => 203970314.900001,
                                                            ]);
                                                            $idevidenceFinancial160 = DB::getPdo()->lastInsertId();
                                                            
                                                            
                                                            
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia182,
                                                              'activity_source_id' =>$idactivitySource161,
                                                              'value' => 2264754204,
                                                              ]);
                                                              $idevidenceFinancial161 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia210,
                                                              'activity_source_id' =>$idactivitySource162,
                                                              'value' => 23674046,
                                                              ]);
                                                              $idevidenceFinancial162 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia219,
                                                              'activity_source_id' =>$idactivitySource163,
                                                              'value' => 2265586795.12,
                                                              ]);
                                                              $idevidenceFinancial163 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia224,
                                                              'activity_source_id' =>$idactivitySource164,
                                                              'value' => 5906978281.22,
                                                              ]);
                                                              $idevidenceFinancial164 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia229,
                                                              'activity_source_id' =>$idactivitySource165,
                                                              'value' => 2630258938.22,
                                                              ]);
                                                              $idevidenceFinancial165 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia236,
                                                              'activity_source_id' =>$idactivitySource166,
                                                              'value' => 233274053.65,
                                                              ]);
                                                              $idevidenceFinancial166 = DB::getPdo()->lastInsertId();
                                                              
                                                              
                                                              
                                                            DB::table('evidence_financial')->insert([
                                                              'evidence_id' => $idevidencia242,
                                                              'activity_source_id' =>$idactivitySource167,
                                                              'value' => 1196441559.9,
                                                              ]);
                                                              $idevidenceFinancial167 = DB::getPdo()->lastInsertId();


                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia243,
                                                                'activity_source_id' =>$idactivitySource168,
                                                                'value' => 653855693.099999,
                                                                ]);
                                                                $idevidenceFinancial168 = DB::getPdo()->lastInsertId();
                                                                

                                                              DB::table('evidence_financial')->insert([
                                                                'evidence_id' => $idevidencia242,
                                                                'activity_source_id' =>$idactivitySource169,
                                                                'value' => 1619617263.3,
                                                                ]);
                                                                $idevidenceFinancial169 = DB::getPdo()->lastInsertId();

                                                                
                                                                DB::table('evidence_financial')->insert([
                                                                  'evidence_id' => $idevidencia242,
                                                                  'activity_source_id' =>$idactivitySource171,
                                                                  'value' => 1017654926.1,
                                                                  ]);
                                                                  $idevidenceFinancial171 = DB::getPdo()->lastInsertId();
                                                                  

                                                                  
                                                                  
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity1,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 932357168,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 932357168,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource173 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity2,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 931891753,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 931891753,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource174 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity3,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 1081439732,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1081439732,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource175 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity7,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 292247591,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 292247591,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource176 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity8,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 2345903728,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2345903728,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource177 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity9,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 263553635,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 263553635,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource178 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity10,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 235854070,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 235854070,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource179 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity16,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 15751910645,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 15751910645,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource180 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity17,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 920488578,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 920488578,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource181 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity20,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 1000000000,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1000000000,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource182 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity24,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 2477540344,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2477540344,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource183 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity25,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 460841127,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 460841127,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource184 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity26,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 453752279,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 453752279,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource185 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity27,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 618211343,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 618211343,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource186 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity28,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 605641309,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 605641309,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource187 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity29,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 100000000,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 100000000,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource188 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity32,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 2171435772,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2171435772,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource189 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity33,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 1636208788,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1636208788,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource190 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity34,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 626910080,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 626910080,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource191 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity37,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 2717588165,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2717588165,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource192 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity38,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 879342950,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 879342950,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource193 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity41,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 600000000,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 600000000,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource194 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity42,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 754290764,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 754290764,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource195 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity45,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 862165991,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 862165991,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource196 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity48,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 2787226684,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2787226684,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource197 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity51,
                                                                    'source_id' =>$idPlan57,
                                                                    'value' => 60918525,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 60918525,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource198 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity52,
                                                                    'source_id' =>$idPlan54,
                                                                    'value' => 2638317302,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2638317302,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource199 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity53,
                                                                    'source_id' =>$idPlan54,
                                                                    'value' => 150000000,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 150000000,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource200 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity57,
                                                                    'source_id' =>$idPlan54,
                                                                    'value' => 2972390341,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2972390341,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource201 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity58,
                                                                    'source_id' =>$idPlan54,
                                                                    'value' => 2642994831,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 2642994831,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource202 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity59,
                                                                    'source_id' =>$idPlan54,
                                                                    'value' => 157130310,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 157130310,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource203 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity60,
                                                                    'source_id' =>$idPlan54,
                                                                    'value' => 886336133,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 886336133,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource204 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity61,
                                                                    'source_id' =>$idPlan54,
                                                                    'value' => 1925471876.95,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1925471876.95,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource205 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity62,
                                                                    'source_id' =>$idPlan44,
                                                                    'value' => 16797031641,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 16797031641,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource206 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity63,
                                                                    'source_id' =>$idPlan44,
                                                                    'value' => 1160357135,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1160357135,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource207 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity67,
                                                                    'source_id' =>$idPlan44,
                                                                    'value' => 1066577039,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1066577039,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource208 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity70,
                                                                    'source_id' =>$idPlan44,
                                                                    'value' => 732985358,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 732985358,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource209 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity71,
                                                                    'source_id' =>$idPlan44,
                                                                    'value' => 413280000,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 413280000,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource210 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity72,
                                                                    'source_id' =>$idPlan44,
                                                                    'value' => 10793436.5499992,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 10793436.5499992,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource211 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity73,
                                                                    'source_id' =>$idPlan48,
                                                                    'value' => 140000000,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 140000000,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource212 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity74,
                                                                    'source_id' =>$idPlan48,
                                                                    'value' => 1050897334,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1050897334,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource213 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity75,
                                                                    'source_id' =>$idPlan48,
                                                                    'value' => 1177536937,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1177536937,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource214 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity78,
                                                                    'source_id' =>$idPlan48,
                                                                    'value' => 1446115054,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1446115054,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource215 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity80,
                                                                    'source_id' =>$idPlan48,
                                                                    'value' => 1280336758.05,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 1280336758.05,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource217 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                  DB::table('activity_sources')->insert([
                                                                    'activity_id' => $idactivity81,
                                                                    'source_id' =>$idPlan47,
                                                                    'value' => 768122875,
                                                                    'goal' => 0,
                                                                    'evidence_balance' => 768122875,
                                                                    'age' => 4,
                                                                    ]);
                                                                    $idactivitySource218 = DB::getPdo()->lastInsertId();
                                                                    
                                                                    
                                                                    
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity1,
                                                                      'source_id' =>$idPlan54,
                                                                      'value' => 2039081475,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 2039081475,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource219 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity11,
                                                                      'source_id' =>$idPlan44,
                                                                      'value' => 266978364.049999,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 266978364.049999,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource220 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity22,
                                                                      'source_id' =>$idPlan48,
                                                                      'value' => 287512622.450001,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 287512622.450001,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource221 = DB::getPdo()->lastInsertId();
                                                                      
                                                                      
                                                                      
                                                                    DB::table('activity_sources')->insert([
                                                                      'activity_id' => $idactivity30,
                                                                      'source_id' =>$idPlan47,
                                                                      'value' => 4359031034.95,
                                                                      'goal' => 0,
                                                                      'evidence_balance' => 4359031034.95,
                                                                      'age' => 4,
                                                                      ]);
                                                                      $idactivitySource222 = DB::getPdo()->lastInsertId();

                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia244,
                                                                        'activity_source_id' =>$idactivitySource173,
                                                                        'value' => 796104225,
                                                                        ]);
                                                                        $idevidenceFinancial173 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia245,
                                                                        'activity_source_id' =>$idactivitySource174,
                                                                        'value' => 811123108,
                                                                        ]);
                                                                        $idevidenceFinancial174 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia246,
                                                                        'activity_source_id' =>$idactivitySource175,
                                                                        'value' => 766119664,
                                                                        ]);
                                                                        $idevidenceFinancial175 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia250,
                                                                        'activity_source_id' =>$idactivitySource176,
                                                                        'value' => 187118251,
                                                                        ]);
                                                                        $idevidenceFinancial176 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia251,
                                                                        'activity_source_id' =>$idactivitySource177,
                                                                        'value' => 2174268404,
                                                                        ]);
                                                                        $idevidenceFinancial177 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia252,
                                                                        'activity_source_id' =>$idactivitySource178,
                                                                        'value' => 216672276,
                                                                        ]);
                                                                        $idevidenceFinancial178 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia253,
                                                                        'activity_source_id' =>$idactivitySource179,
                                                                        'value' => 197955517,
                                                                        ]);
                                                                        $idevidenceFinancial179 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia259,
                                                                        'activity_source_id' =>$idactivitySource180,
                                                                        'value' => 14277311000.005,
                                                                        ]);
                                                                        $idevidenceFinancial180 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia260,
                                                                        'activity_source_id' =>$idactivitySource181,
                                                                        'value' => 804472066,
                                                                        ]);
                                                                        $idevidenceFinancial181 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia263,
                                                                        'activity_source_id' =>$idactivitySource182,
                                                                        'value' => 806175453,
                                                                        ]);
                                                                        $idevidenceFinancial182 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia267,
                                                                        'activity_source_id' =>$idactivitySource183,
                                                                        'value' => 2281778016,
                                                                        ]);
                                                                        $idevidenceFinancial183 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia268,
                                                                        'activity_source_id' =>$idactivitySource184,
                                                                        'value' => 455292157,
                                                                        ]);
                                                                        $idevidenceFinancial184 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia269,
                                                                        'activity_source_id' =>$idactivitySource185,
                                                                        'value' => 448937005,
                                                                        ]);
                                                                        $idevidenceFinancial185 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia270,
                                                                        'activity_source_id' =>$idactivitySource186,
                                                                        'value' => 609379787,
                                                                        ]);
                                                                        $idevidenceFinancial186 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia271,
                                                                        'activity_source_id' =>$idactivitySource187,
                                                                        'value' => 588292191,
                                                                        ]);
                                                                        $idevidenceFinancial187 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia272,
                                                                        'activity_source_id' =>$idactivitySource188,
                                                                        'value' => 95500000,
                                                                        ]);
                                                                        $idevidenceFinancial188 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia275,
                                                                        'activity_source_id' =>$idactivitySource189,
                                                                        'value' => 1974398930,
                                                                        ]);
                                                                        $idevidenceFinancial189 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia276,
                                                                        'activity_source_id' =>$idactivitySource190,
                                                                        'value' => 1589201352,
                                                                        ]);
                                                                        $idevidenceFinancial190 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia277,
                                                                        'activity_source_id' =>$idactivitySource191,
                                                                        'value' => 486806178,
                                                                        ]);
                                                                        $idevidenceFinancial191 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia280,
                                                                        'activity_source_id' =>$idactivitySource192,
                                                                        'value' => 2633850993,
                                                                        ]);
                                                                        $idevidenceFinancial192 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia281,
                                                                        'activity_source_id' =>$idactivitySource193,
                                                                        'value' => 558439110,
                                                                        ]);
                                                                        $idevidenceFinancial193 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia284,
                                                                        'activity_source_id' =>$idactivitySource194,
                                                                        'value' => 566862294,
                                                                        ]);
                                                                        $idevidenceFinancial194 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia285,
                                                                        'activity_source_id' =>$idactivitySource195,
                                                                        'value' => 749399120,
                                                                        ]);
                                                                        $idevidenceFinancial195 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia288,
                                                                        'activity_source_id' =>$idactivitySource196,
                                                                        'value' => 421687199,
                                                                        ]);
                                                                        $idevidenceFinancial196 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia291,
                                                                        'activity_source_id' =>$idactivitySource197,
                                                                        'value' => 2755489916,
                                                                        ]);
                                                                        $idevidenceFinancial197 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia294,
                                                                        'activity_source_id' =>$idactivitySource198,
                                                                        'value' => 60918525,
                                                                        ]);
                                                                        $idevidenceFinancial198 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia295,
                                                                        'activity_source_id' =>$idactivitySource199,
                                                                        'value' => 2523276083,
                                                                        ]);
                                                                        $idevidenceFinancial199 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia296,
                                                                        'activity_source_id' =>$idactivitySource200,
                                                                        'value' => 150000000,
                                                                        ]);
                                                                        $idevidenceFinancial200 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia300,
                                                                        'activity_source_id' =>$idactivitySource201,
                                                                        'value' => 2730447794,
                                                                        ]);
                                                                        $idevidenceFinancial201 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia301,
                                                                        'activity_source_id' =>$idactivitySource202,
                                                                        'value' => 2407978766,
                                                                        ]);
                                                                        $idevidenceFinancial202 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia302,
                                                                        'activity_source_id' =>$idactivitySource203,
                                                                        'value' => 157012229,
                                                                        ]);
                                                                        $idevidenceFinancial203 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia303,
                                                                        'activity_source_id' =>$idactivitySource204,
                                                                        'value' => 884160269,
                                                                        ]);
                                                                        $idevidenceFinancial204 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia304,
                                                                        'activity_source_id' =>$idactivitySource205,
                                                                        'value' => 1925471876.95,
                                                                        ]);
                                                                        $idevidenceFinancial205 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia305,
                                                                        'activity_source_id' =>$idactivitySource206,
                                                                        'value' => 15834224652,
                                                                        ]);
                                                                        $idevidenceFinancial206 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia306,
                                                                        'activity_source_id' =>$idactivitySource207,
                                                                        'value' => 925067234,
                                                                        ]);
                                                                        $idevidenceFinancial207 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia310,
                                                                        'activity_source_id' =>$idactivitySource208,
                                                                        'value' => 959010496,
                                                                        ]);
                                                                        $idevidenceFinancial208 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia313,
                                                                        'activity_source_id' =>$idactivitySource209,
                                                                        'value' => 723507205,
                                                                        ]);
                                                                        $idevidenceFinancial209 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia314,
                                                                        'activity_source_id' =>$idactivitySource210,
                                                                        'value' => 413280000,
                                                                        ]);
                                                                        $idevidenceFinancial210 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia315,
                                                                        'activity_source_id' =>$idactivitySource211,
                                                                        'value' => 10793436.5499992,
                                                                        ]);
                                                                        $idevidenceFinancial211 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia316,
                                                                        'activity_source_id' =>$idactivitySource212,
                                                                        'value' => 140000000,
                                                                        ]);
                                                                        $idevidenceFinancial212 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia317,
                                                                        'activity_source_id' =>$idactivitySource213,
                                                                        'value' => 1022174519,
                                                                        ]);
                                                                        $idevidenceFinancial213 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia318,
                                                                        'activity_source_id' =>$idactivitySource214,
                                                                        'value' => 1101760194,
                                                                        ]);
                                                                        $idevidenceFinancial214 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia321,
                                                                        'activity_source_id' =>$idactivitySource215,
                                                                        'value' => 1309428550,
                                                                        ]);
                                                                        $idevidenceFinancial215 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia323,
                                                                        'activity_source_id' =>$idactivitySource217,
                                                                        'value' => 1280336758.05,
                                                                        ]);
                                                                        $idevidenceFinancial217 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                      DB::table('evidence_financial')->insert([
                                                                        'evidence_id' => $idevidencia324,
                                                                        'activity_source_id' =>$idactivitySource218,
                                                                        'value' => 726775820,
                                                                        ]);
                                                                        $idevidenceFinancial218 = DB::getPdo()->lastInsertId();
                                                                        
                                                                        
                                                                        
                                                                        DB::table('evidence_financial')->insert([
                                                                          'evidence_id' => $idevidencia294,
                                                                          'activity_source_id' =>$idactivitySource219,
                                                                          'value' => 2038800412,
                                                                          ]);
                                                                          $idevidenceFinancial219 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                        DB::table('evidence_financial')->insert([
                                                                          'evidence_id' => $idevidencia304,
                                                                          'activity_source_id' =>$idactivitySource220,
                                                                          'value' => 193118958.049999,
                                                                          ]);
                                                                          $idevidenceFinancial220 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                        DB::table('evidence_financial')->insert([
                                                                          'evidence_id' => $idevidencia315,
                                                                          'activity_source_id' =>$idactivitySource221,
                                                                          'value' => 279162775.450001,
                                                                          ]);
                                                                          $idevidenceFinancial221 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
                                                                          
                                                                        DB::table('evidence_financial')->insert([
                                                                          'evidence_id' => $idevidencia323,
                                                                          'activity_source_id' =>$idactivitySource222,
                                                                          'value' => 4168358019.949,
                                                                          ]);
                                                                          $idevidenceFinancial222 = DB::getPdo()->lastInsertId();
                                                                          
                                                                          
    } 
  }

