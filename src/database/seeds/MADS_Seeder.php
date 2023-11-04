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

class MADS_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pai=PAI::create([
            'name' => 'CORPOGUAVIO VIVE SU NATURALEZA ',
            'start_date' => '2020-01-01',
            'end_date' => '2023-12-31',
            'director_name' => 'OSWALDO JIMENEZ DÍAZ',
            'group_id' => 22,
            ]);
            $idpai1 = DB::getPdo()->lastInsertId();
            
        DB::table('strategic_lines')->insert([
            'name' => 'FORTALECIMIENTO DE LA PLANIFICACIÓN, REGULACIÓN Y EL ORDENAMIENTO AMBIENTAL EN LA JURISDICCIÓN.',
            'weighing' => 30,
            'p_a_i_id' => $idpai1,
            ]);
            $idline1 = DB::getPdo()->lastInsertId();
            
            
        DB::table('strategic_lines')->insert([
            'name' => 'ACCIONES DE CONSERVACIÓN EN EL TERRITORIO Y PROMOCIÓN DE LA SOSTENIBILIDAD DE PROCESOS PRODUCTIVOS Y EXTRACTIVOS COMPONENTES DEL CAMINO HACIA EL AMBIENTE SANO REGIONAL.',
            'weighing' => 40,
            'p_a_i_id' => $idpai1,
            ]);
            $idline2 = DB::getPdo()->lastInsertId();
            
            
        DB::table('strategic_lines')->insert([
            'name' => 'FORTALECIMIENTO DEL DESEMPEÑO INSTITUCIONAL EL BUEN GOBIERNO Y LA GOBERNANZA DE Y CON LOS ACTORES REGIONALES',
            'weighing' => 30,
            'p_a_i_id' => $idpai1,
            ]);
            $idline3 = DB::getPdo()->lastInsertId();
            
            
        DB::table('programs')->insert([
            'strategic_line_id' => $idline1,
            'national_program_id' => 579,
            'car_program' => 'Ordenamiento Ambiental del Territorio',
            'weighing' => 100,
            ]);
            $idprogram1 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('programs')->insert([
            'strategic_line_id' => $idline2,
            'national_program_id' => 791,
            'car_program' => 'Sostenibilidad Ambiental del Territorio',
            'weighing' => 100,
            ]);
            $idprogram2 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 790,
            'car_program' => 'Fortalecimiento para el Buen Gobierno',
            'weighing' => 30,
            ]);
            $idprogram3 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 764,
            'car_program' => 'Tejido Interinstitucional para la Gobernanza del Territorio',
            'weighing' => 30,
            ]);
            $idprogram4 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('programs')->insert([
            'strategic_line_id' => $idline3,
            'national_program_id' => 791,
            'car_program' => 'Fortalecer la Gobernabilidad Ambiental',
            'weighing' => 40,
            ]);
            $idprogram5 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Desarrollo de Procesos para la Planificación y Regulación Ambiental',
            'weighing' => 60,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Asistencia y orientación a los procesos de planificación territorial',
            'weighing' => 40,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Conservación y Restauración',
            'weighing' => 48,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Fortalecimiento de buenas prácticas productivas y negocios verdes',
            'weighing' => 36,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Saneamiento Básico Ambiental',
            'weighing' => 16,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Mejoramiento de la Gestión Institucional',
            'weighing' => 100,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Comprometidos con la Educación para Construir un Ambiente de Paz',
            'weighing' => 100,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'Fortalecimiento de la Gobernabilidad Ambiental',
            'weighing' => 100,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject1,
            'objective' => 'Formular y/o ajustar y generar seguimiento a los Instrumentos de planificación interna para la gestión Ambiental',
            'weighing' => 20,
            ]);
            $idobjective1 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject1,
            'objective' => 'Formular y Adoptar instrumentos de Planificación y Regulación de los Recursos Naturales',
            'weighing' => 50,
            ]);
            $idobjective2 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject1,
            'objective' => 'Formular instrumentos de Planificación de los recursos Naturales',
            'weighing' => 30,
            ]);
            $idobjective3 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject2,
            'objective' => 'Aumentar el conocimiento del riesgo de Desastres y el Cambio Climático en la jurisdicción de la Corporación',
            'weighing' => 40,
            ]);
            $idobjective4 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject2,
            'objective' => 'Reducir el Riesgo de Desastres y efectos del Cambio Climático en la jurisdicción de la Corporación',
            'weighing' => 30,
            ]);
            $idobjective5 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject2,
            'objective' => 'Asegurar la articulación de las decisiones territoriales y los instrumentos de planificación',
            'weighing' => 30,
            ]);
            $idobjective6 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject3,
            'objective' => 'Implementar los instrumentos de planificación regulación y gestión',
            'weighing' => 30,
            ]);
            $idobjective7 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject3,
            'objective' => 'Proteger fuentes hídricas e implementar los instrumentos económicos',
            'weighing' => 30,
            ]);
            $idobjective8 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject3,
            'objective' => 'Implementar prácticas integrales de conservación del suelo',
            'weighing' => 10,
            ]);
            $idobjective9 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject3,
            'objective' => 'Restaurar áreas afectadas por uso inadecuado del suelo',
            'weighing' => 30,
            ]);
            $idobjective10 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject4,
            'objective' => 'Fomentar en los sectores productivos la implementación de prácticas productivas sostenibles',
            'weighing' => 50,
            ]);
            $idobjective11 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject4,
            'objective' => 'Desarrollar estrategias de negocios verdes.',
            'weighing' => 50,
            ]);
            $idobjective12 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject5,
            'objective' => 'Promover acciones para la adecuada gestión de los residuos sólidos en la Jurisdicción.',
            'weighing' => 33,
            ]);
            $idobjective13 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject5,
            'objective' => 'Establecer instrumentos de control para la gestión y manejo de los vertimientos en la jurisdicción',
            'weighing' => 33,
            ]);
            $idobjective14 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject5,
            'objective' => 'Articular la ejecución de acciones establecidas en los instrumentos de planeación para el Saneamiento Básico Ambiental en la Jurisdicción.',
            'weighing' => 34,
            ]);
            $idobjective15 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject6,
            'objective' => 'Aumentar la capacidad y uso eficiente de la plataforma tecnológica y de la comunicaciones',
            'weighing' => 30,
            ]);
            $idobjective16 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject6,
            'objective' => 'Fortalecer la Gestión Documental',
            'weighing' => 20,
            ]);
            $idobjective17 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject6,
            'objective' => 'Fortalecer el Servicio al Ciudadano',
            'weighing' => 25,
            ]);
            $idobjective18 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject6,
            'objective' => 'Definir, ejecutar, verificar y evaluar acciones a fin de fortalecer el desempeño institucional y el grado de cumplimiento del Sistema Integrado de Gestión y Control -SIGYCO',
            'weighing' => 25,
            ]);
            $idobjective19 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject7,
            'objective' => 'Transformar la cultura ambiental de la población y construir tejido social mediante procesos y herramientas de educación y participación',
            'weighing' => 60,
            ]);
            $idobjective20 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject7,
            'objective' => 'Implementar estrategias de comunicación que fortalezcan los procesos de participación y educación ambiental para garantizar el reconocimiento, empoderamiento y posicionamiento comunitario e institucional',
            'weighing' => 40,
            ]);
            $idobjective21 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject8,
            'objective' => 'Realizar la evaluación oportuna y seguimiento a las quejas y tramites ambientales',
            'weighing' => 30,
            ]);
            $idobjective22 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject8,
            'objective' => 'Ejercer la potetad sancionatoria conforme a lo establecido en la Ley 1333 de 2009 o aquella que la modifique o sustituya.',
            'weighing' => 30,
            ]);
            $idobjective23 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject8,
            'objective' => 'Realizar el seguimiento a subsectores productivos bajo protocolos de IVC',
            'weighing' => 30,
            ]);
            $idobjective24 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objectives')->insert([
            'project_id' => $idproject8,
            'objective' => 'Ejecutar la estrategia al control del tráfico ilegal de especies de flora y fauna',
            'weighing' => 10,
            ]);
            $idobjective25 = DB::getPdo()->lastInsertId();
            
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective1,
            'product_id' => null,
            'product_other' => 'Instrumentos de Planificación Interna formulados y/o ajustados con seguimiento',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 100,
            ]);
            $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective2,
            'product_id' => null,
            'product_other' => 'Planes de Ordenación y Manejo de las Cuencas Hidrográficas (POMCAS) formulados y con seguimiento',
            'goal_1' => 0,
            'goal_2' => 0,
            'goal_3' => 40,
            'goal_4' => 60,
            'total_goal' => 100,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 878,
            'weighing' => 18,
            ]);
            $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective2,
            'product_id' => null,
            'product_other' => 'Acciones de ordenamiento del recurso hidríco',
            'goal_1' => 3,
            'goal_2' => 3,
            'goal_3' => 2,
            'goal_4' => 2,
            'total_goal' => 10,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 878,
            'weighing' => 16,
            ]);
            $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective2,
            'product_id' => null,
            'product_other' => 'Planes de manejo de áreas protegidas formulados',
            'goal_1' => 2,
            'goal_2' => 4,
            'goal_3' => 6,
            'goal_4' => 8,
            'total_goal' => 20,
            'unit_goal' => 62,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 17,
            ]);
            $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective2,
            'product_id' => null,
            'product_other' => 'Áreas protegidas en procesos de declaratoria',
            'goal_1' => 2,
            'goal_2' => 1,
            'goal_3' => 0,
            'goal_4' => 0,
            'total_goal' => 3,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 16,
            ]);
            $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective2,
            'product_id' => null,
            'product_other' => 'Planes de manejo y ordenación forestal adoptados',
            'goal_1' => 1,
            'goal_2' => 0,
            'goal_3' => 0,
            'goal_4' => 0,
            'total_goal' => 1,
            'unit_goal' => 61,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 17,
            ]);
            $idobjectiveproduct6 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective2,
            'product_id' => null,
            'product_other' => 'Planes de manejo de ecosistemas estratégicos formulados',
            'goal_1' => 0,
            'goal_2' => 1,
            'goal_3' => 1,
            'goal_4' => 2,
            'total_goal' => 4,
            'unit_goal' => 62,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 16,
            ]);
            $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective3,
            'product_id' => null,
            'product_other' => 'Estrategias de manejo de especies invasoras formuladas',
            'goal_1' => 0,
            'goal_2' => 2,
            'goal_3' => 0,
            'goal_4' => 2,
            'total_goal' => 4,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 50,
            ]);
            $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective3,
            'product_id' => null,
            'product_other' => 'Planes de conservación de especies amenazadas formulados',
            'goal_1' => 0,
            'goal_2' => 1,
            'goal_3' => 1,
            'goal_4' => 4,
            'total_goal' => 6,
            'unit_goal' => 61,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 50,
            ]);
            $idobjectiveproduct9 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective4,
            'product_id' => null,
            'product_other' => 'Estudio de Identificación, Evaluación y Análisis del Riesgo',
            'goal_1' => 5,
            'goal_2' => 1,
            'goal_3' => 1,
            'goal_4' => 1,
            'total_goal' => 8,
            'unit_goal' => 37,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 60,
            ]);
            $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective4,
            'product_id' => null,
            'product_other' => 'Estrategias de monitoreo y comunicación del Riesgo y cambio climático',
            'goal_1' => 1,
            'goal_2' => 1,
            'goal_3' => 1,
            'goal_4' => 1,
            'total_goal' => 4,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 872,
            'weighing' => 40,
            ]);
            $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective5,
            'product_id' => null,
            'product_other' => 'Servicios de asistencia técnica, seguimiento y monitoreo para la reducción del riesgo',
            'goal_1' => 3,
            'goal_2' => 13,
            'goal_3' => 0,
            'goal_4' => 1,
            'total_goal' => 17,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 40,
            ]);
            $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective5,
            'product_id' => null,
            'product_other' => 'Medidas de reducción del Riesgo de Desastres',
            'goal_1' => 11,
            'goal_2' => 3,
            'goal_3' => 3,
            'goal_4' => 3,
            'total_goal' => 20,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 60,
            ]);
            $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective6,
            'product_id' => null,
            'product_other' => 'Documento de Determinantes ambientales actualizado',
            'goal_1' => 1,
            'goal_2' => 0,
            'goal_3' => 0,
            'goal_4' => 0,
            'total_goal' => 1,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 70,
            ]);
            $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective6,
            'product_id' => null,
            'product_other' => 'Documento Seguimiento y asistencia técnica a los municipios para el Ordenamiento Territorial',
            'goal_1' => 1,
            'goal_2' => 0,
            'goal_3' => 0,
            'goal_4' => 1,
            'total_goal' => 2,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 30,
            ]);
            $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective7,
            'product_id' => null,
            'product_other' => 'Administrar el Sistema Regional de Áreas Protegidas junto con los sistemas de información ambiental del orden nacional',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 50,
            ]);
            $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective7,
            'product_id' => null,
            'product_other' => 'Monitoreo del Recurso Hidríco',
            'goal_1' => 1,
            'goal_2' => 1,
            'goal_3' => 1,
            'goal_4' => 1,
            'total_goal' => 4,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 878,
            'weighing' => 30,
            ]);
            $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective7,
            'product_id' => null,
            'product_other' => 'Alinderación de áreas protegidas y predios de la Corporación',
            'goal_1' => 0,
            'goal_2' => 1,
            'goal_3' => 1,
            'goal_4' => 1,
            'total_goal' => 3,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 876,
            'weighing' => 20,
            ]);
            $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective8,
            'product_id' => null,
            'product_other' => 'Protección e implementación de instrumentos económicos en fuentes hídricas',
            'goal_1' => 10,
            'goal_2' => 15,
            'goal_3' => 15,
            'goal_4' => 15,
            'total_goal' => 55,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 878,
            'weighing' => 80,
            ]);
            $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective8,
            'product_id' => null,
            'product_other' => 'Cofinanciación para la adquisición de predios de importancia estratégica',
            'goal_1' => 1,
            'goal_2' => 2,
            'goal_3' => 2,
            'goal_4' => 2,
            'total_goal' => 7,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 20,
            ]);
            $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective9,
            'product_id' => null,
            'product_other' => 'Establecimiento y mantenimiento de sistemas  alternativos de recuperación de suelos',
            'goal_1' => 45,
            'goal_2' => 55,
            'goal_3' => 75,
            'goal_4' => 95,
            'total_goal' => 270,
            'unit_goal' => 39,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 880,
            'weighing' => 100,
            ]);
            $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective10,
            'product_id' => null,
            'product_other' => 'Restauración y/o rehabilitación de predios degradados por incendios forestales.',
            'goal_1' => 10,
            'goal_2' => 10,
            'goal_3' => 10,
            'goal_4' => 10,
            'total_goal' => 40,
            'unit_goal' => 39,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 880,
            'weighing' => 34,
            ]);
            $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective10,
            'product_id' => null,
            'product_other' => 'Restauración y/o rehabilitación de predios con pasivos ambientales',
            'goal_1' => 24,
            'goal_2' => 25,
            'goal_3' => 25,
            'goal_4' => 26,
            'total_goal' => 100,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 880,
            'weighing' => 33,
            ]);
            $idobjectiveproduct23 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective10,
            'product_id' => null,
            'product_other' => 'Restauración y/o rehabilitación de áreas degradadas por deforestación.',
            'goal_1' => 68,
            'goal_2' => 50,
            'goal_3' => 50,
            'goal_4' => 50,
            'total_goal' => 218,
            'unit_goal' => 39,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 880,
            'weighing' => 33,
            ]);
            $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective11,
            'product_id' => null,
            'product_other' => 'Caracterización de sectores productivos',
            'goal_1' => 1,
            'goal_2' => 4,
            'goal_3' => 1,
            'goal_4' => 0,
            'total_goal' => 6,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 879,
            'weighing' => 33,
            ]);
            $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective11,
            'product_id' => null,
            'product_other' => 'Cumplimiento de acuerdos establecidos con los sectores productivos.',
            'goal_1' => 20,
            'goal_2' => 30,
            'goal_3' => 30,
            'goal_4' => 20,
            'total_goal' => 100,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 879,
            'weighing' => 33,
            ]);
            $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective11,
            'product_id' => null,
            'product_other' => 'Implementación de prácticas productivas sostenibles.',
            'goal_1' => 1,
            'goal_2' => 2,
            'goal_3' => 2,
            'goal_4' => 1,
            'total_goal' => 6,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 879,
            'weighing' => 34,
            ]);
            $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective12,
            'product_id' => null,
            'product_other' => 'Promoción de bienes y servicios producidos mediante la incorporación de buenas practicas ambientales.',
            'goal_1' => 1,
            'goal_2' => 3,
            'goal_3' => 3,
            'goal_4' => 1,
            'total_goal' => 8,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 879,
            'weighing' => 25,
            ]);
            $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective13,
            'product_id' => null,
            'product_other' => 'Apoyar acciones  para el manejo de  residuos sólidos',
            'goal_1' => 1,
            'goal_2' => 5,
            'goal_3' => 3,
            'goal_4' => 3,
            'total_goal' => 12,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 878,
            'weighing' => 100,
            ]);
            $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective14,
            'product_id' => null,
            'product_other' => 'Instrumentos implementados para el manejo de vertimientos',
            'goal_1' => 3,
            'goal_2' => 3,
            'goal_3' => 3,
            'goal_4' => 3,
            'total_goal' => 12,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 870,
            'weighing' => 100,
            ]);
            $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective15,
            'product_id' => null,
            'product_other' => 'Apoyar la ejecución de las actividades establecidas en los instrumentos de planeación para el saneamiento básico Ambiental',
            'goal_1' => 5,
            'goal_2' => 4,
            'goal_3' => 5,
            'goal_4' => 5,
            'total_goal' => 19,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 870,
            'weighing' => 100,
            ]);
            $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective16,
            'product_id' => null,
            'product_other' => 'Estrategia de Gobierno en Línea -GEL, implementada en las actividades priorizadas',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 30,
            ]);
            $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective16,
            'product_id' => null,
            'product_other' => 'Cobertura WAN y LAN',
            'goal_1' => 90,
            'goal_2' => 90,
            'goal_3' => 90,
            'goal_4' => 90,
            'total_goal' => 360,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 20,
            ]);
            $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective16,
            'product_id' => null,
            'product_other' => 'Infraestructura tecnológica',
            'goal_1' => 95,
            'goal_2' => 95,
            'goal_3' => 95,
            'goal_4' => 95,
            'total_goal' => 380,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 20,
            ]);
            $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective16,
            'product_id' => null,
            'product_other' => 'Sistema de Información Geográfico SIG',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 30,
            ]);
            $idobjectiveproduct35 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective17,
            'product_id' => null,
            'product_other' => 'Sistema de Gestión Documental',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 100,
            ]);
            $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective18,
            'product_id' => null,
            'product_other' => 'Sistema de servicio al ciudadano fortalecido',
            'goal_1' => 90,
            'goal_2' => 10,
            'goal_3' => 0,
            'goal_4' => 0,
            'total_goal' => 100,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 100,
            ]);
            $idobjectiveproduct37 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective19,
            'product_id' => null,
            'product_other' => 'Sistema Integrado de Gestión y Control -SIGYCO',
            'goal_1' => 93,
            'goal_2' => 93,
            'goal_3' => 94,
            'goal_4' => 95,
            'total_goal' => 375,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 50,
            ]);
            $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective19,
            'product_id' => null,
            'product_other' => 'Banco de Programas y Proyectos',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 30,
            ]);
            $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective19,
            'product_id' => null,
            'product_other' => 'Mejoramiento de la infraestructura Institucional',
            'goal_1' => 90,
            'goal_2' => 10,
            'goal_3' => 0,
            'goal_4' => 0,
            'total_goal' => 100,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 20,
            ]);
            $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective20,
            'product_id' => null,
            'product_other' => 'Articulación entre  los niveles intersectoriales, interinstitucionales e intrainstitucionales en el desarrollo de procesos de educación ambiental y participación',
            'goal_1' => 3,
            'goal_2' => 3,
            'goal_3' => 3,
            'goal_4' => 3,
            'total_goal' => 12,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 873,
            'weighing' => 22,
            ]);
            $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective20,
            'product_id' => null,
            'product_other' => 'Procesos de formación, divulgación  y de gestión del conocimiento orientados a la participación ciudadana',
            'goal_1' => 1,
            'goal_2' => 2,
            'goal_3' => 2,
            'goal_4' => 2,
            'total_goal' => 7,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 873,
            'weighing' => 30,
            ]);
            $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective20,
            'product_id' => null,
            'product_other' => 'Procesos de formación, divulgación  y de gestión del conocimiento orientados a la participación ciudadana.',
            'goal_1' => 1,
            'goal_2' => 2,
            'goal_3' => 2,
            'goal_4' => 2,
            'total_goal' => 7,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 873,
            'weighing' => 24,
            ]);
            $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective20,
            'product_id' => null,
            'product_other' => 'Estrategias pedagógicas y/o didácticas para el desarrollo de la gestión ambiental institucional',
            'goal_1' => 1,
            'goal_2' => 2,
            'goal_3' => 2,
            'goal_4' => 2,
            'total_goal' => 7,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 873,
            'weighing' => 24,
            ]);
            $idobjectiveproduct44 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective21,
            'product_id' => null,
            'product_other' => 'Estrategias de comunicación para los diferentes públicos',
            'goal_1' => 1,
            'goal_2' => 1,
            'goal_3' => 1,
            'goal_4' => 1,
            'total_goal' => 4,
            'unit_goal' => 50,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 873,
            'weighing' => 100,
            ]);
            $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective22,
            'product_id' => null,
            'product_other' => 'Solicitudes de permisos ambientales resueltos conforme a los tiempos establecidos por la normatividad vigente y la Corporación',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 35,
            ]);
            $idobjectiveproduct46 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective22,
            'product_id' => null,
            'product_other' => 'Atención a las peticiones y quejas ambientales',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 30,
            ]);
            $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective22,
            'product_id' => null,
            'product_other' => 'Ejecución del plan de seguimiento de expedientes de tramites ambientales (licencias, permisos, concesiones, autorizaciones, pueaa y psmv)',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 35,
            ]);
            $idobjectiveproduct48 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective23,
            'product_id' => null,
            'product_other' => 'Trámites sancionatorio atendidos de conformidad con lo establecido en la Ley 1333 de 2009 o la norma que la modifique o sustituya',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 50,
            ]);
            $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective23,
            'product_id' => null,
            'product_other' => 'Ejecución del plan de seguimiento de expedientes de tramites administrativos de carácter sancionatorio',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 50,
            ]);
            $idobjectiveproduct50 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective24,
            'product_id' => null,
            'product_other' => 'Ejecución del plan de seguimiento de expedientes y bitácoras de subsectores productivos',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 100,
            ]);
            $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
            
            
            
        DB::table('objective_products')->insert([
            'objective_id' => $idobjective25,
            'product_id' => null,
            'product_other' => 'Ejecución de la estrategia al control del tráfico ilegal de especies de flora y fauna',
            'goal_1' => 100,
            'goal_2' => 100,
            'goal_3' => 100,
            'goal_4' => 100,
            'total_goal' => 400,
            'unit_goal' => 63,
            'indicator_national_id' => 791,
            'indicator_ods_id' => 882,
            'national_policy_id' => 867,
            'weighing' => 100,
            ]);
            $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
            
                
                $pai=PAI::create([
                    'name' => 'PAI PRUEBAS GAE',
                    'start_date' => '2009-08-10',
                    'end_date' => '2014-08-09',
                    'director_name' => 'Gte Arq Empresarial',
                    'group_id' => 1,
                    ]);
                    $idpai2 = DB::getPdo()->lastInsertId();
                    
                DB::table('strategic_lines')->insert([
                    'name' => 'LE1 GAE',
                    'weighing' => 35,
                    'p_a_i_id' => $idpai2,
                    ]);
                    $idline4 = DB::getPdo()->lastInsertId();
                    
                    
                DB::table('strategic_lines')->insert([
                    'name' => 'LE1 GAE',
                    'weighing' => 65,
                    'p_a_i_id' => $idpai2,
                    ]);
                    $idline5 = DB::getPdo()->lastInsertId();
                    
                    
                DB::table('programs')->insert([
                    'strategic_line_id' => $idline4,
                    'national_program_id' => 160,
                    'car_program' => 'PROGRAMA 1 LE2 GAE',
                    'weighing' => 100,
                    ]);
                    $idprogram6 = DB::getPdo()->lastInsertId();
                    
                    
                    
                DB::table('programs')->insert([
                    'strategic_line_id' => $idline5,
                    'national_program_id' => 764,
                    'car_program' => 'PROGRAMA 1 LE1 GAE',
                    'weighing' => 100,
                    ]);
                    $idprogram7 = DB::getPdo()->lastInsertId();
                    
                    
                    
                DB::table('projects')->insert([
                    'program_id' => $idprogram6,
                    'project' => 'PROYECTO1 PG1 LE1 GAE ',
                    'weighing' => 100,
                    ]);
                    $idproject9 = DB::getPdo()->lastInsertId();
                    
                    
                    
                DB::table('projects')->insert([
                    'program_id' => $idprogram7,
                    'project' => 'PROYECTO 1 PG1 LE2 GAE ',
                    'weighing' => 100,
                    ]);
                    $idproject10 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('objectives')->insert([
                        'project_id' => $idproject9,
                        'objective' => 'OBJ1 PY1 PG1 LE1 GAE',
                        'weighing' => 100,
                        ]);
                        $idobjective26 = DB::getPdo()->lastInsertId();
                        
                        
                        
                    DB::table('objectives')->insert([
                        'project_id' => $idproject10,
                        'objective' => 'OBJ1 PY1 PG1 LE2 GAE',
                        'weighing' => 100,
                        ]);
                        $idobjective27 = DB::getPdo()->lastInsertId();
                        
                        
                        
                    DB::table('objective_products')->insert([
                        'objective_id' => $idobjective26,
                        'product_id' => null,
                        'product_other' => 'PDTO1 OBJ1 PY1 LE1 GAE',
                        'goal_1' => 10,
                        'goal_2' => 12,
                        'goal_3' => 15,
                        'goal_4' => 20,
                        'total_goal' => 57,
                        'unit_goal' => 26,
                        'indicator_national_id' => 791,
                        'indicator_ods_id' => 897,
                        'national_policy_id' => 875,
                        'weighing' => 100,
                        ]);
                        $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                        
                        
                        
                    DB::table('objective_products')->insert([
                        'objective_id' => $idobjective27,
                        'product_id' => 783,
                        'goal_1' => 10,
                        'goal_2' => 40,
                        'goal_3' => 10,
                        'goal_4' => 5,
                        'total_goal' => 65,
                        'unit_goal' => 35,
                        'indicator_national_id' => 785,
                        'indicator_ods_id' => 886,
                        'national_policy_id' => 867,
                        'weighing' => 100,
                        ]);
                        $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                        
                        
                        
                            
    }
}
