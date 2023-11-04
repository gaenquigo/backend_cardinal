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
 * Class HistoricPAI_CORPOBOYACA_Seeder
 */
class HistoricPAI_CORPOBOYACA_Seeder extends Seeder
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
      'director_name' => 'José Ricardo López Dulcey',
      'group_id' => 17,
      'approved' => 1,
      ]);
      $idpai1 = DB::getPdo()->lastInsertId();

      DB::table('strategic_lines')->insert([
        'name' => ' Fortalecimiento Institucional',
        'weighing' => 100,
        'p_a_i_id' => $idpai1,
        ]);
        $idline1 = DB::getPdo()->lastInsertId();
        
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 1. PLANEACIÓN Y ORDENAMIENTO DEL TERRITORIO. ',
          'weighing' => 11,
          ]);
          $idprogram1 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 2. GESTION DEL RIESGO DE DESASTRES Y  ADAPTACIÓN AL CAMBIO CLIMÁTICO',
          'weighing' => 11,
          ]);
          $idprogram2 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 3. CONSERVACIÓN, RESTAURACIÓN Y MANEJO DE ECOSISTEMAS Y BIODIVERSIDAD. ',
          'weighing' => 11,
          ]);
          $idprogram3 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 4. DESARROLLO DE PROCESOS PRODUCTIVOS SOSTENIBLES. ',
          'weighing' => 11,
          ]);
          $idprogram4 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 5. SANEAMIENTO AMBIENTAL.',
          'weighing' => 11,
          ]);
          $idprogram5 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 6. MANEJO INTEGRAL DEL RECURSO HÍDRICO.',
          'weighing' => 11,
          ]);
          $idprogram6 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 7. FORTALECIMIENTO INTERNO',
          'weighing' => 11,
          ]);
          $idprogram7 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 8. COMUNICACIÓN, EDUCACIÓN Y PARTICIPACIÓN',
          'weighing' => 11,
          ]);
          $idprogram8 = DB::getPdo()->lastInsertId();
          
          
          
        DB::table('programs')->insert([
          'strategic_line_id' => $idline1,
          'national_program_id' => 799,
          'car_program' => 'PROGRAMA 9. EVALUACIÓN, CONTROL, SEGUIMIENTO Y REGULACIÓN DEL ESTADO Y USO DE LOS RECURSOS NATURALES',
          'weighing' => 12,
          ]);
          $idprogram9 = DB::getPdo()->lastInsertId();
          
          
          
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.1. Formulación y/o Ajuste a POMCAS en la jurisdicción ',
            'weighing' => 14,
            ]);
            $idproject1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.2. Formulación de planes de manejo de áreas protegidas',
            'weighing' => 14,
            ]);
            $idproject2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.3. Formulación de planes de manejo de ecosistemas estratégicos',
            'weighing' => 14,
            ]);
            $idproject3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.4. Instrumentos de Planificación Corporativos',
            'weighing' => 14,
            ]);
            $idproject4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.5. Asistencia Técnico - jurídica y Seguimiento en Ordenamiento Territorial, a los municipios de la jurisdicción',
            'weighing' => 14,
            ]);
            $idproject5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.6. Elaborar estudios técnicos ambientales como insumo para la delimitación de los complejos de páramos de la jurisdicción de CORPOBOYACÁ',
            'weighing' => 15,
            ]);
            $idproject6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram1,
            'project' => 'Proyecto 1.7. Administración y Manejo de Áreas Protegidas',
            'weighing' => 15,
            ]);
            $idproject7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram2,
            'project' => 'Proyecto 2.1. Formulación e implementación de  acciones para la gestión del riesgo y adaptación al cambio climático',
            'weighing' => 100,
            ]);
            $idproject8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.1. Evitar la deforestacion y degradacion de los bosques',
            'weighing' => 12,
            ]);
            $idproject9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.2. Restauración en áreas con vocación forestal, áreas para la conservación de los recursos naturales y/o áreas con suelos degradados',
            'weighing' => 12,
            ]);
            $idproject10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.3. Conservación de Coberturas vegetales arbóreas del Distrito de paramos, complejo de paramos Tota -  Bijagual – Mamapacha y su área de influencia en el Departamento de Boyacá',
            'weighing' => 12,
            ]);
            $idproject11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3. 4. Adquisición de predios en áreas estratégicas',
            'weighing' => 12,
            ]);
            $idproject12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.5. Medidas de conservación en áreas protegidas declaradas',
            'weighing' => 13,
            ]);
            $idproject13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.6. Protección y Conservación de fauna y flora silvestre',
            'weighing' => 13,
            ]);
            $idproject14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.7. Disminución de conflictos entre el ser humano y la fauna silvestre',
            'weighing' => 13,
            ]);
            $idproject15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram3,
            'project' => 'Proyecto 3.8. Manejo de especies invasoras',
            'weighing' => 13,
            ]);
            $idproject16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.1. Manejo y protección del suelo',
            'weighing' => 14,
            ]);
            $idproject17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.2. Fortalecimiento del conocimiento ambiental en buenas practicas en los sectores productivos (agropecuario y minero)',
            'weighing' => 14,
            ]);
            $idproject18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.3. Seguimiento a la información sectorial Minera y Agropecuaria',
            'weighing' => 14,
            ]);
            $idproject19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.4. Negocios verdes sostenibles',
            'weighing' => 14,
            ]);
            $idproject20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.5. Implementación de la estrategia Boyacá 2030, 20% menos carbono',
            'weighing' => 14,
            ]);
            $idproject21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.6. Implementación de Sistemas Silvopatoriles en los municipios de la Provincia de Lengupá, Jurisdicción de Corpoboyacá. departamento de Boyacá',
            'weighing' => 15,
            ]);
            $idproject22 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram4,
            'project' => 'Proyecto 4.7 Implementar el ecoturismo como estrategia de conservación y desarrollo sostenible en el Parque Natural Regional Serranía El Peligro.',
            'weighing' => 15,
            ]);
            $idproject23 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'Proyecto 5.1. Gestión integral de residuos peligrosos',
            'weighing' => 50,
            ]);
            $idproject24 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram5,
            'project' => 'Proyecto 5.2. Orientación, Apoyo y Seguimiento a los PGIRS',
            'weighing' => 50,
            ]);
            $idproject25 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.1. PORH Cuenca alta y media del Río Chicamocha',
            'weighing' => 9,
            ]);
            $idproject26 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.2. Reglamentación del uso de agua',
            'weighing' => 9,
            ]);
            $idproject27 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.3. Uso eficiente y ahorro del agua',
            'weighing' => 9,
            ]);
            $idproject28 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.4. Administración del recurso hídrico',
            'weighing' => 9,
            ]);
            $idproject29 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.5. Evaluación Estudio Regional del Agua-ERA  para una cuenca prioritaria. ',
            'weighing' => 9,
            ]);
            $idproject30 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.6. Conservación protección y recuperación del Sistema integrado de aguas termo minerales y aguas subterráneas ',
            'weighing' => 9,
            ]);
            $idproject31 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.7. Implementación del Sistema Integral Recurso Hídrico (SIRH).',
            'weighing' => 9,
            ]);
            $idproject32 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.8 Descontaminación de fuentes hídricas',
            'weighing' => 9,
            ]);
            $idproject33 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.9. Acciones de manejo en  Lago de Tota de acuerdo a las   competencias de la Corporación  en el  CONPES 3801',
            'weighing' => 9,
            ]);
            $idproject34 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.10. Metas de carga global contaminante en las fuentes hídricas',
            'weighing' => 9,
            ]);
            $idproject35 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram6,
            'project' => 'Proyecto 6.11.Planes de manejo de acuíferos',
            'weighing' => 10,
            ]);
            $idproject36 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.1. Actualización de la información geoespacial ',
            'weighing' => 7,
            ]);
            $idproject37 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.2. Operar, actualizar y mantener los sistemas de información corporativos ',
            'weighing' => 7,
            ]);
            $idproject38 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.3. Fortalecer y Operar los centros de información de la corporación',
            'weighing' => 7,
            ]);
            $idproject39 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.4. Implementar y mantener la estrategia de gobierno en linea',
            'weighing' => 7,
            ]);
            $idproject40 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.5. Mapas de ruido',
            'weighing' => 8,
            ]);
            $idproject41 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.6. Control de gases en fuentes móviles ',
            'weighing' => 8,
            ]);
            $idproject42 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.7. Vigilancia de Calidad del aire',
            'weighing' => 8,
            ]);
            $idproject43 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.8. Monitoreo Calidad del agua',
            'weighing' => 8,
            ]);
            $idproject44 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.9. Plan de monitoreo a cuerpos de agua',
            'weighing' => 8,
            ]);
            $idproject45 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.10. Laboratorio de la Calidad Ambiental',
            'weighing' => 8,
            ]);
            $idproject46 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.11. Fortalecimiento Institucional',
            'weighing' => 8,
            ]);
            $idproject47 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.12. Operación y Seguimiento del OCAD-CORPOBOYACA',
            'weighing' => 8,
            ]);
            $idproject48 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram7,
            'project' => 'Proyecto 7.13. Laboratorio de análisis',
            'weighing' => 8,
            ]);
            $idproject49 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'Proyecto 8.1. Educación ambiental',
            'weighing' => 33,
            ]);
            $idproject50 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'Proyecto 8.2. Asistencia técnica a CIDEAS, PRAES Y PROCEDAS',
            'weighing' => 33,
            ]);
            $idproject51 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram8,
            'project' => 'Proyecto 8.3. Formulación y ejecución de un Plan de Medios',
            'weighing' => 34,
            ]);
            $idproject52 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('projects')->insert([
            'program_id' => $idprogram9,
            'project' => 'Proyecto 9.1. Evaluación control y vigilancia al uso, Manejo y aprovechamiento de los recursos naturales',
            'weighing' => 100,
            ]);
            $idproject53 = DB::getPdo()->lastInsertId();
            
          

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
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject33,
              'objective' => 'Objetivo 33',
              'weighing' => 100,
              ]);
              $idobjective33 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject34,
              'objective' => 'Objetivo 34',
              'weighing' => 100,
              ]);
              $idobjective34 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject35,
              'objective' => 'Objetivo 35',
              'weighing' => 100,
              ]);
              $idobjective35 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject36,
              'objective' => 'Objetivo 36',
              'weighing' => 100,
              ]);
              $idobjective36 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject37,
              'objective' => 'Objetivo 37',
              'weighing' => 100,
              ]);
              $idobjective37 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject38,
              'objective' => 'Objetivo 38',
              'weighing' => 100,
              ]);
              $idobjective38 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject39,
              'objective' => 'Objetivo 39',
              'weighing' => 100,
              ]);
              $idobjective39 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject40,
              'objective' => 'Objetivo 40',
              'weighing' => 100,
              ]);
              $idobjective40 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject41,
              'objective' => 'Objetivo 41',
              'weighing' => 100,
              ]);
              $idobjective41 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject42,
              'objective' => 'Objetivo 42',
              'weighing' => 100,
              ]);
              $idobjective42 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject43,
              'objective' => 'Objetivo 43',
              'weighing' => 100,
              ]);
              $idobjective43 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject44,
              'objective' => 'Objetivo 44',
              'weighing' => 100,
              ]);
              $idobjective44 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject45,
              'objective' => 'Objetivo 45',
              'weighing' => 100,
              ]);
              $idobjective45 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject46,
              'objective' => 'Objetivo 46',
              'weighing' => 100,
              ]);
              $idobjective46 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject47,
              'objective' => 'Objetivo 47',
              'weighing' => 100,
              ]);
              $idobjective47 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject48,
              'objective' => 'Objetivo 48',
              'weighing' => 100,
              ]);
              $idobjective48 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject49,
              'objective' => 'Objetivo 49',
              'weighing' => 100,
              ]);
              $idobjective49 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject50,
              'objective' => 'Objetivo 50',
              'weighing' => 100,
              ]);
              $idobjective50 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject51,
              'objective' => 'Objetivo 51',
              'weighing' => 100,
              ]);
              $idobjective51 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject52,
              'objective' => 'Objetivo 52',
              'weighing' => 100,
              ]);
              $idobjective52 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('objectives')->insert([
              'project_id' => $idproject53,
              'objective' => 'Objetivo 53',
              'weighing' => 100,
              ]);
              $idobjective53 = DB::getPdo()->lastInsertId();
              
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 1,
                'product_other' => 'Producto 1',
                'goal_1' => 40,
                'goal_2' => 50,
                'goal_3' => 10,
                'goal_4' => 0,
                'goal_1_balance' => 40,
                'goal_2_balance' => 50,
                'goal_3_balance' => 10,
                'goal_4_balance' => 0,
                'total_goal' => 100,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct1 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 2,
                'product_other' => 'Producto 2',
                'goal_1' => 40,
                'goal_2' => 43,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 40,
                'goal_2_balance' => 43,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 83,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct2 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 3,
                'product_other' => 'Producto 3',
                'goal_1' => 40,
                'goal_2' => 43,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 40,
                'goal_2_balance' => 43,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 83,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct3 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 4,
                'product_other' => 'Producto 4',
                'goal_1' => 0,
                'goal_2' => 50,
                'goal_3' => 50,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 50,
                'goal_3_balance' => 50,
                'goal_4_balance' => 0,
                'total_goal' => 100,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct4 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 5,
                'product_other' => 'Producto 5',
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
                'weighing' => 19,
                ]);
                $idobjectiveproduct5 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective1,
                'product_id' => 6,
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
                'product_id' => 7,
                'product_other' => 'Producto 1',
                'goal_1' => 11,
                'goal_2' => 8.33,
                'goal_3' => 15.83,
                'goal_4' => 15,
                'goal_1_balance' => 11,
                'goal_2_balance' => 8.33,
                'goal_3_balance' => 15.83,
                'goal_4_balance' => 15,
                'total_goal' => 50.16,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct7 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 8,
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
                $idobjectiveproduct8 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective2,
                'product_id' => 9,
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
                'product_id' => 10,
                'product_other' => 'Producto 1',
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct10 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective3,
                'product_id' => 11,
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
                $idobjectiveproduct11 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => 12,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 0,
                'goal_3' => 0.4,
                'goal_4' => 100,
                'goal_1_balance' => 1,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0.4,
                'goal_4_balance' => 100,
                'total_goal' => 101.4,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct12 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective4,
                'product_id' => 13,
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
                $idobjectiveproduct13 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => 14,
                'product_other' => 'Producto 1',
                'goal_1' => 8,
                'goal_2' => 34,
                'goal_3' => 34,
                'goal_4' => 23,
                'goal_1_balance' => 8,
                'goal_2_balance' => 34,
                'goal_3_balance' => 34,
                'goal_4_balance' => 23,
                'total_goal' => 99,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct14 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => 15,
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
                $idobjectiveproduct15 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective5,
                'product_id' => 16,
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
                $idobjectiveproduct16 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => 17,
                'product_other' => 'Producto 1',
                'goal_1' => 6,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 6,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct17 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => 18,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct18 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective6,
                'product_id' => 19,
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
                $idobjectiveproduct19 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 20,
                'product_other' => 'Producto 1',
                'goal_1' => 25,
                'goal_2' => 100,
                'goal_3' => 100,
                'goal_4' => 100,
                'goal_1_balance' => 25,
                'goal_2_balance' => 100,
                'goal_3_balance' => 100,
                'goal_4_balance' => 100,
                'total_goal' => 325,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct20 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 21,
                'product_other' => 'Producto 2',
                'goal_1' => 2,
                'goal_2' => 15,
                'goal_3' => 1,
                'goal_4' => 2,
                'goal_1_balance' => 2,
                'goal_2_balance' => 15,
                'goal_3_balance' => 1,
                'goal_4_balance' => 2,
                'total_goal' => 20,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct21 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 22,
                'product_other' => 'Producto 3',
                'goal_1' => 1,
                'goal_2' => 100,
                'goal_3' => 1,
                'goal_4' => 100,
                'goal_1_balance' => 1,
                'goal_2_balance' => 100,
                'goal_3_balance' => 1,
                'goal_4_balance' => 100,
                'total_goal' => 202,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct22 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective7,
                'product_id' => 23,
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
                'objective_id' => $idobjective8,
                'product_id' => 24,
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
                $idobjectiveproduct24 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective8,
                'product_id' => 25,
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
                $idobjectiveproduct25 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => 26,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct26 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective9,
                'product_id' => 27,
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
                $idobjectiveproduct27 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 28,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 7,
                'goal_3' => 9,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 7,
                'goal_3_balance' => 9,
                'goal_4_balance' => 0,
                'total_goal' => 17,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct28 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 29,
                'product_other' => 'Producto 2',
                'goal_1' => 700,
                'goal_2' => 750,
                'goal_3' => 450,
                'goal_4' => 700,
                'goal_1_balance' => 700,
                'goal_2_balance' => 750,
                'goal_3_balance' => 450,
                'goal_4_balance' => 700,
                'total_goal' => 2600,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct29 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective10,
                'product_id' => 30,
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
                $idobjectiveproduct30 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => 31,
                'product_other' => 'Producto 1',
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct31 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => 32,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 500,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 500,
                'goal_4_balance' => 0,
                'total_goal' => 500,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct32 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective11,
                'product_id' => 33,
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
                $idobjectiveproduct33 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => 34,
                'product_other' => 'Producto 1',
                'goal_1' => 305,
                'goal_2' => 2000,
                'goal_3' => 200,
                'goal_4' => 200,
                'goal_1_balance' => 305,
                'goal_2_balance' => 2000,
                'goal_3_balance' => 200,
                'goal_4_balance' => 200,
                'total_goal' => 2705,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct34 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective12,
                'product_id' => 35,
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
                'objective_id' => $idobjective13,
                'product_id' => 36,
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
                $idobjectiveproduct36 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective13,
                'product_id' => 37,
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
                'objective_id' => $idobjective14,
                'product_id' => 38,
                'product_other' => 'Producto 1',
                'goal_1' => 8,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 8,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 26,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct38 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 39,
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
                'weighing' => 49,
                ]);
                $idobjectiveproduct39 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective14,
                'product_id' => 40,
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
                $idobjectiveproduct40 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 41,
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
                $idobjectiveproduct41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective15,
                'product_id' => 42,
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
                $idobjectiveproduct42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 43,
                'product_other' => 'Producto 1',
                'goal_1' => 20,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 20,
                'goal_1_balance' => 20,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 20,
                'total_goal' => 80,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective16,
                'product_id' => 44,
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
                'objective_id' => $idobjective17,
                'product_id' => 45,
                'product_other' => 'Producto 1',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 21,
                'goal_4' => 21,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 21,
                'goal_4_balance' => 21,
                'total_goal' => 54,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective17,
                'product_id' => 46,
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
                'objective_id' => $idobjective18,
                'product_id' => 47,
                'product_other' => 'Producto 1',
                'goal_1' => 35,
                'goal_2' => 35,
                'goal_3' => 35,
                'goal_4' => 35,
                'goal_1_balance' => 35,
                'goal_2_balance' => 35,
                'goal_3_balance' => 35,
                'goal_4_balance' => 35,
                'total_goal' => 140,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective18,
                'product_id' => 48,
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
                'objective_id' => $idobjective19,
                'product_id' => 49,
                'product_other' => 'Producto 1',
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective19,
                'product_id' => 50,
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
                'product_id' => 51,
                'product_other' => 'Producto 1',
                'goal_1' => 5,
                'goal_2' => 15,
                'goal_3' => 15,
                'goal_4' => 15,
                'goal_1_balance' => 5,
                'goal_2_balance' => 15,
                'goal_3_balance' => 15,
                'goal_4_balance' => 15,
                'total_goal' => 50,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 52,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 3,
                'goal_4' => 3,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 3,
                'goal_4_balance' => 3,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective20,
                'product_id' => 53,
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
                $idobjectiveproduct53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 54,
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
                $idobjectiveproduct54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 55,
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
                $idobjectiveproduct55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 56,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 57,
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
                $idobjectiveproduct57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 58,
                'product_other' => 'Producto 5',
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
                'weighing' => 19,
                ]);
                $idobjectiveproduct58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective21,
                'product_id' => 59,
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
                $idobjectiveproduct59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 60,
                'product_other' => 'Producto 1',
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 61,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 200,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 200,
                'goal_4_balance' => 0,
                'total_goal' => 200,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective22,
                'product_id' => 62,
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
                $idobjectiveproduct62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 63,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 64,
                'product_other' => 'Producto 2',
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
                $idobjectiveproduct64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 65,
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
                $idobjectiveproduct65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective23,
                'product_id' => 66,
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
                $idobjectiveproduct66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => 67,
                'product_other' => 'Producto 1',
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => 68,
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
                $idobjectiveproduct68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => 69,
                'product_other' => 'Producto 3',
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective24,
                'product_id' => 70,
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
                $idobjectiveproduct70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 71,
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
                $idobjectiveproduct71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 72,
                'product_other' => 'Producto 2',
                'goal_1' => 8,
                'goal_2' => 9,
                'goal_3' => 9,
                'goal_4' => 9,
                'goal_1_balance' => 8,
                'goal_2_balance' => 9,
                'goal_3_balance' => 9,
                'goal_4_balance' => 9,
                'total_goal' => 35,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 73,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 74,
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
                $idobjectiveproduct74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 75,
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
                $idobjectiveproduct75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective25,
                'product_id' => 76,
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
                $idobjectiveproduct76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => 77,
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
                'objective_id' => $idobjective26,
                'product_id' => 78,
                'product_other' => 'Producto 2',
                'goal_1' => 9,
                'goal_2' => 29,
                'goal_3' => 25,
                'goal_4' => 37,
                'goal_1_balance' => 9,
                'goal_2_balance' => 29,
                'goal_3_balance' => 25,
                'goal_4_balance' => 37,
                'total_goal' => 100,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective26,
                'product_id' => 79,
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
                'objective_id' => $idobjective27,
                'product_id' => 80,
                'product_other' => 'Producto 1',
                'goal_1' => 1,
                'goal_2' => 2,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 1,
                'goal_2_balance' => 2,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 3,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => 81,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct81 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => 82,
                'product_other' => 'Producto 3',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 2,
                'goal_4' => 0,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 2,
                'goal_4_balance' => 0,
                'total_goal' => 2,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct82 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective27,
                'product_id' => 83,
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
                'objective_id' => $idobjective28,
                'product_id' => 84,
                'product_other' => 'Producto 1',
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct84 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
                'product_id' => 85,
                'product_other' => 'Producto 2',
                'goal_1' => 20,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 20,
                'goal_1_balance' => 20,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 20,
                'total_goal' => 80,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct85 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective28,
                'product_id' => 86,
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
                'objective_id' => $idobjective29,
                'product_id' => 87,
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
                $idobjectiveproduct87 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective29,
                'product_id' => 88,
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
                $idobjectiveproduct88 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
                'product_id' => 89,
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
                $idobjectiveproduct89 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective30,
                'product_id' => 90,
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
                $idobjectiveproduct90 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
                'product_id' => 91,
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct91 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective31,
                'product_id' => 92,
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
                $idobjectiveproduct92 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => 93,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 27,
                'goal_3' => 27,
                'goal_4' => 26,
                'goal_1_balance' => 0,
                'goal_2_balance' => 27,
                'goal_3_balance' => 27,
                'goal_4_balance' => 26,
                'total_goal' => 80,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct93 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective32,
                'product_id' => 94,
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
                $idobjectiveproduct94 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective33,
                'product_id' => 95,
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct95 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective33,
                'product_id' => 96,
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
                $idobjectiveproduct96 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective34,
                'product_id' => 97,
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct97 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective34,
                'product_id' => 98,
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
                'objective_id' => $idobjective35,
                'product_id' => 99,
                'product_other' => 'Producto 1',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 20,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 50,
                ]);
                $idobjectiveproduct99 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective35,
                'product_id' => 100,
                'product_other' => 'Producto 2',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 20,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 49,
                ]);
                $idobjectiveproduct100 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective35,
                'product_id' => 101,
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
                $idobjectiveproduct101 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective36,
                'product_id' => 102,
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
                'weighing' => 99,
                ]);
                $idobjectiveproduct102 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective36,
                'product_id' => 103,
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
                $idobjectiveproduct103 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective37,
                'product_id' => 104,
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
                $idobjectiveproduct104 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective37,
                'product_id' => 105,
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
                $idobjectiveproduct105 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective37,
                'product_id' => 106,
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
                $idobjectiveproduct106 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective37,
                'product_id' => 107,
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
                $idobjectiveproduct107 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective38,
                'product_id' => 108,
                'product_other' => 'Producto 1',
                'goal_1' => 40,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 40,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 70,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct108 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective38,
                'product_id' => 109,
                'product_other' => 'Producto 2',
                'goal_1' => 40,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 40,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 70,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct109 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective38,
                'product_id' => 110,
                'product_other' => 'Producto 3',
                'goal_1' => 20,
                'goal_2' => 10,
                'goal_3' => 10,
                'goal_4' => 10,
                'goal_1_balance' => 20,
                'goal_2_balance' => 10,
                'goal_3_balance' => 10,
                'goal_4_balance' => 10,
                'total_goal' => 50,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct110 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective38,
                'product_id' => 111,
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
                'objective_id' => $idobjective39,
                'product_id' => 112,
                'product_other' => 'Producto 1',
                'goal_1' => 650,
                'goal_2' => 650,
                'goal_3' => 650,
                'goal_4' => 650,
                'goal_1_balance' => 650,
                'goal_2_balance' => 650,
                'goal_3_balance' => 650,
                'goal_4_balance' => 650,
                'total_goal' => 2600,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct112 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective39,
                'product_id' => 113,
                'product_other' => 'Producto 2',
                'goal_1' => 400,
                'goal_2' => 400,
                'goal_3' => 400,
                'goal_4' => 400,
                'goal_1_balance' => 400,
                'goal_2_balance' => 400,
                'goal_3_balance' => 400,
                'goal_4_balance' => 400,
                'total_goal' => 1600,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct113 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective39,
                'product_id' => 114,
                'product_other' => 'Producto 3',
                'goal_1' => 10,
                'goal_2' => 20,
                'goal_3' => 30,
                'goal_4' => 40,
                'goal_1_balance' => 10,
                'goal_2_balance' => 20,
                'goal_3_balance' => 30,
                'goal_4_balance' => 40,
                'total_goal' => 100,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct114 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective39,
                'product_id' => 115,
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
                'objective_id' => $idobjective40,
                'product_id' => 116,
                'product_other' => 'Producto 1',
                'goal_1' => 10,
                'goal_2' => 10,
                'goal_3' => 5,
                'goal_4' => 5,
                'goal_1_balance' => 10,
                'goal_2_balance' => 10,
                'goal_3_balance' => 5,
                'goal_4_balance' => 5,
                'total_goal' => 30,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct116 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective40,
                'product_id' => 117,
                'product_other' => 'Producto 2',
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct117 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective40,
                'product_id' => 118,
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
                $idobjectiveproduct118 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective40,
                'product_id' => 119,
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
                $idobjectiveproduct119 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective40,
                'product_id' => 120,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 6,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 6,
                'total_goal' => 6,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct120 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective40,
                'product_id' => 121,
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
                'objective_id' => $idobjective41,
                'product_id' => 122,
                'product_other' => 'Producto 1',
                'goal_1' => 2,
                'goal_2' => 3,
                'goal_3' => 3,
                'goal_4' => 100,
                'goal_1_balance' => 2,
                'goal_2_balance' => 3,
                'goal_3_balance' => 3,
                'goal_4_balance' => 100,
                'total_goal' => 108,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct122 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective41,
                'product_id' => 123,
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
                $idobjectiveproduct123 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective42,
                'product_id' => 124,
                'product_other' => 'Producto 1',
                'goal_1' => 7,
                'goal_2' => 7,
                'goal_3' => 7,
                'goal_4' => 7,
                'goal_1_balance' => 7,
                'goal_2_balance' => 7,
                'goal_3_balance' => 7,
                'goal_4_balance' => 7,
                'total_goal' => 28,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct124 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective42,
                'product_id' => 125,
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
                $idobjectiveproduct125 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective43,
                'product_id' => 126,
                'product_other' => 'Producto 1',
                'goal_1' => 33,
                'goal_2' => 34,
                'goal_3' => 0,
                'goal_4' => 0,
                'goal_1_balance' => 33,
                'goal_2_balance' => 34,
                'goal_3_balance' => 0,
                'goal_4_balance' => 0,
                'total_goal' => 67,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct126 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective43,
                'product_id' => 127,
                'product_other' => 'Producto 2',
                'goal_1' => 40,
                'goal_2' => 20,
                'goal_3' => 20,
                'goal_4' => 20,
                'goal_1_balance' => 40,
                'goal_2_balance' => 20,
                'goal_3_balance' => 20,
                'goal_4_balance' => 20,
                'total_goal' => 100,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct127 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective43,
                'product_id' => 128,
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
                $idobjectiveproduct128 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective43,
                'product_id' => 129,
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
                $idobjectiveproduct129 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective44,
                'product_id' => 130,
                'product_other' => 'Producto 1',
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct130 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective44,
                'product_id' => 131,
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
                $idobjectiveproduct131 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective44,
                'product_id' => 132,
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
                $idobjectiveproduct132 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective45,
                'product_id' => 133,
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
                $idobjectiveproduct133 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective45,
                'product_id' => 134,
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct134 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective45,
                'product_id' => 135,
                'product_other' => 'Producto 3',
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
                'weighing' => 33,
                ]);
                $idobjectiveproduct135 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective45,
                'product_id' => 136,
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
                $idobjectiveproduct136 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective46,
                'product_id' => 137,
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
                $idobjectiveproduct137 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective46,
                'product_id' => 138,
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
                $idobjectiveproduct138 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective46,
                'product_id' => 139,
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
                $idobjectiveproduct139 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective47,
                'product_id' => 140,
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
                $idobjectiveproduct140 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective47,
                'product_id' => 141,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct141 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective47,
                'product_id' => 142,
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct142 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective47,
                'product_id' => 143,
                'product_other' => 'Producto 4',
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
                'weighing' => 20,
                ]);
                $idobjectiveproduct143 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective47,
                'product_id' => 144,
                'product_other' => 'Producto 5',
                'goal_1' => 0,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 2,
                'goal_1_balance' => 0,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 2,
                'total_goal' => 2,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 19,
                ]);
                $idobjectiveproduct144 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective47,
                'product_id' => 145,
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
                $idobjectiveproduct145 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective48,
                'product_id' => 146,
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
                'weighing' => 50,
                ]);
                $idobjectiveproduct146 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective48,
                'product_id' => 147,
                'product_other' => 'Producto 2',
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
                'weighing' => 49,
                ]);
                $idobjectiveproduct147 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective48,
                'product_id' => 148,
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
                $idobjectiveproduct148 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective49,
                'product_id' => 149,
                'product_other' => 'Producto 1',
                'goal_1' => 50,
                'goal_2' => 0,
                'goal_3' => 0,
                'goal_4' => 100,
                'goal_1_balance' => 50,
                'goal_2_balance' => 0,
                'goal_3_balance' => 0,
                'goal_4_balance' => 100,
                'total_goal' => 150,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 99,
                ]);
                $idobjectiveproduct149 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective49,
                'product_id' => 150,
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
                $idobjectiveproduct150 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => 151,
                'product_other' => 'Producto 1',
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
                'weighing' => 16,
                ]);
                $idobjectiveproduct151 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => 152,
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
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 16,
                ]);
                $idobjectiveproduct152 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => 153,
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
                'weighing' => 16,
                ]);
                $idobjectiveproduct153 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => 154,
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
                $idobjectiveproduct154 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => 155,
                'product_other' => 'Producto 5',
                'goal_1' => 5,
                'goal_2' => 5,
                'goal_3' => 0.05,
                'goal_4' => 5,
                'goal_1_balance' => 5,
                'goal_2_balance' => 5,
                'goal_3_balance' => 0.05,
                'goal_4_balance' => 5,
                'total_goal' => 15.05,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 17,
                ]);
                $idobjectiveproduct155 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => 156,
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
                'weighing' => 17,
                ]);
                $idobjectiveproduct156 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective50,
                'product_id' => 157,
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
                $idobjectiveproduct157 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective51,
                'product_id' => 158,
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
                $idobjectiveproduct158 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective51,
                'product_id' => 159,
                'product_other' => 'Producto 2',
                'goal_1' => 6,
                'goal_2' => 6,
                'goal_3' => 6,
                'goal_4' => 6,
                'goal_1_balance' => 6,
                'goal_2_balance' => 6,
                'goal_3_balance' => 6,
                'goal_4_balance' => 6,
                'total_goal' => 24,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct159 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective51,
                'product_id' => 160,
                'product_other' => 'Producto 3',
                'goal_1' => 8,
                'goal_2' => 8,
                'goal_3' => 8,
                'goal_4' => 8,
                'goal_1_balance' => 8,
                'goal_2_balance' => 8,
                'goal_3_balance' => 8,
                'goal_4_balance' => 8,
                'total_goal' => 32,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 33,
                ]);
                $idobjectiveproduct160 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective51,
                'product_id' => 161,
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
                $idobjectiveproduct161 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective52,
                'product_id' => 162,
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
                $idobjectiveproduct162 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective52,
                'product_id' => 163,
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
                $idobjectiveproduct163 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective52,
                'product_id' => 164,
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
                $idobjectiveproduct164 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
                'product_id' => 165,
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
                'weighing' => 19,
                ]);
                $idobjectiveproduct165 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
                'product_id' => 166,
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
                $idobjectiveproduct166 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
                'product_id' => 167,
                'product_other' => 'Producto 3',
                'goal_1' => 25,
                'goal_2' => 25,
                'goal_3' => 25,
                'goal_4' => 100,
                'goal_1_balance' => 25,
                'goal_2_balance' => 25,
                'goal_3_balance' => 25,
                'goal_4_balance' => 100,
                'total_goal' => 175,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct167 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
                'product_id' => 168,
                'product_other' => 'Producto 4',
                'goal_1' => 300,
                'goal_2' => 300,
                'goal_3' => 300,
                'goal_4' => 300,
                'goal_1_balance' => 300,
                'goal_2_balance' => 300,
                'goal_3_balance' => 300,
                'goal_4_balance' => 300,
                'total_goal' => 1200,
                'unit_goal' => 63,
                'indicator_national_id' => 791,
                'indicator_ods_id' => 882,
                'national_policy_id' => 867,
                'weighing' => 20,
                ]);
                $idobjectiveproduct168 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
                'product_id' => 169,
                'product_other' => 'Producto 5',
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
                $idobjectiveproduct169 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('objective_products')->insert([
                'objective_id' => $idobjective53,
                'product_id' => 170,
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
                $idobjectiveproduct170 = DB::getPdo()->lastInsertId();
        
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct1,
                  'name' => 'Formulación del POMCA Directos al Magdalena',
                  'goal_1' => 40,
                  'goal_2' => 50,
                  'goal_3' => 10,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity1 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct2,
                  'name' => 'Ajuste al POMCA Cuenca Alta del Río Chicamocha',
                  'goal_1' => 40,
                  'goal_2' => 43,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 83,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity2 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct3,
                  'name' => 'Ajuste del POMCA Cuenca Media y Baja del Río Suárez',
                  'goal_1' => 40,
                  'goal_2' => 43,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 83,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity3 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct4,
                  'name' => 'Apoyo a la formulación y/o ajuste a los POMCAS priorizado',
                  'goal_1' => 0,
                  'goal_2' => 50,
                  'goal_3' => 50,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity4 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective1,
                  'product_id' =>$idobjectiveproduct5,
                  'name' => 'Soporte técnico para apoyar  la formulación y/o ajuste de los POMCA´s de la jurisdicción ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 100,
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
                  'name' => 'Actualización, Formulación y adopción de planes de manejo para las áreas protegidas de la Corporación',
                  'goal_1' => 11,
                  'goal_2' => 8.33,
                  'goal_3' => 15.83,
                  'goal_4' => 15,
                  'goal' => 50.16,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity7 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct8,
                  'name' => 'Apoyo a las acciones del Plan de Manejo Páramo de Rabanal - Unión Europea',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity8 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective2,
                  'product_id' =>$idobjectiveproduct9,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity9 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct10,
                  'name' => 'Formular plan de manejo de ecosistemas estratégicos de la Ciénega de Palagua',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity10 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective3,
                  'product_id' =>$idobjectiveproduct11,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity11 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct12,
                  'name' => 'Elaborar los instrumentos corporativos de planificación',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0.4,
                  'goal_4' => 100,
                  'goal' => 101.4,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity12 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective4,
                  'product_id' =>$idobjectiveproduct13,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity13 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct14,
                  'name' => 'Asesorar o asistir a los municipios en la incorporación de los determinantes ambientales para la revisión y ajuste de los POT adoptados',
                  'goal_1' => 8,
                  'goal_2' => 34,
                  'goal_3' => 34,
                  'goal_4' => 23,
                  'goal' => 99,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity14 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct15,
                  'name' => 'Atender las solicitudes de trámite de concertación de asuntos ambientales en los proyectos de revisión a los POT, presentadas por los municipios de la jurisdicción',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity15 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective5,
                  'product_id' =>$idobjectiveproduct16,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity16 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct17,
                  'name' => 'Realizar ajustes de los documentos de los complejos de páramo Altiplano cundiboyacense, Rabanal, Pisba, Iguaque-Merchán, Tota-Bijagual-Mamapacha, Guantiva-La Rusia; solicitados por el MADS',
                  'goal_1' => 6,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 6,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity17 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct18,
                  'name' => 'Formular y adoptar los planes de manejo de los páramos delimitados',
                  'goal_1' => 5,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 5,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity18 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective6,
                  'product_id' =>$idobjectiveproduct19,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity19 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct20,
                  'name' => 'Administrar y Fortalecer la Red Física del SIRAP CORPOBOYACA',
                  'goal_1' => 25,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 325,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity20 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct21,
                  'name' => 'Inscripción de áreas protegidas en el RUNAP',
                  'goal_1' => 2,
                  'goal_2' => 15,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 20,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity21 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct22,
                  'name' => 'Administrar y Fortalecer la Red de Actores del SIRAP CORPOBOYACÁ',
                  'goal_1' => 1,
                  'goal_2' => 100,
                  'goal_3' => 1,
                  'goal_4' => 100,
                  'goal' => 202,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity22 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective7,
                  'product_id' =>$idobjectiveproduct23,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity23 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct24,
                  'name' => 'Avance en la implementación de acciones para la gestión del riesgo y/o adaptación al cambio climático en los municipios de la jurisdicción',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity24 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective8,
                  'product_id' =>$idobjectiveproduct25,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity25 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct26,
                  'name' => 'Implementación de estrategias para evitar la deforestación y degradación en zonas de bosques afectadas por la tala ilegal',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity26 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective9,
                  'product_id' =>$idobjectiveproduct27,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity27 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct28,
                  'name' => 'Restaurar, rehabilitar, recuperar y/o mantener áreas priorizadas',
                  'goal_1' => 1,
                  'goal_2' => 7,
                  'goal_3' => 9,
                  'goal_4' => 0,
                  'goal' => 17,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity28 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct29,
                  'name' => 'Mantenimiento de proyectos de restauración, rehabilitación y/o recuperación; en ecosistemas estratégicos',
                  'goal_1' => 700,
                  'goal_2' => 750,
                  'goal_3' => 450,
                  'goal_4' => 700,
                  'goal' => 2600,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity29 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective10,
                  'product_id' =>$idobjectiveproduct30,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity30 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct31,
                  'name' => 'Iniciar procesos de restauración ecológica en las áreas afectadas por actividades antrópicas.',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity31 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct32,
                  'name' => 'Implementar procesos de sensibilización ambiental con los diferentes actores locales de la región',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 500,
                  'goal_4' => 0,
                  'goal' => 500,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity32 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective11,
                  'product_id' =>$idobjectiveproduct33,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity33 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct34,
                  'name' => 'Adquisición hectáreas para la conservación y protección de ecosistemas estratégicos',
                  'goal_1' => 305,
                  'goal_2' => 2000,
                  'goal_3' => 200,
                  'goal_4' => 200,
                  'goal' => 2705,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity34 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective12,
                  'product_id' =>$idobjectiveproduct35,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity35 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct36,
                  'name' => 'Implementación de medidas de conservación de manejo en áreas protegidas',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity36 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective13,
                  'product_id' =>$idobjectiveproduct37,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity37 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct38,
                  'name' => 'Implementar acciones de conservación de fauna y flora amenazada',
                  'goal_1' => 8,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal' => 26,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity38 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct39,
                  'name' => 'Dar manejo adecuado a las especies de fauna silvestre incautadas',
                  'goal_1' => 2,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 5,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity39 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective14,
                  'product_id' =>$idobjectiveproduct40,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity40 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct41,
                  'name' => 'Implementar estrategias que permitan disminuir el conflicto entre el ser humano y la fauna silvestre',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 3,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective15,
                  'product_id' =>$idobjectiveproduct42,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct43,
                  'name' => 'Formular e implementar planes de manejo para especies invasoras',
                  'goal_1' => 20,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 20,
                  'goal' => 80,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective16,
                  'product_id' =>$idobjectiveproduct44,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct45,
                  'name' => 'Implementación de estrategias para recuperación del suelo',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 21,
                  'goal_4' => 21,
                  'goal' => 54,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective17,
                  'product_id' =>$idobjectiveproduct46,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective18,
                  'product_id' =>$idobjectiveproduct47,
                  'name' => 'Desarrollar actividades de generación de conocimiento no formal en los sectores productivos: agropecuario, forestal, hidrobiológica y minero',
                  'goal_1' => 35,
                  'goal_2' => 35,
                  'goal_3' => 35,
                  'goal_4' => 35,
                  'goal' => 140,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity47 = DB::getPdo()->lastInsertId();
                  
                  
                  
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
                  'name' => 'Implementación y operación de ventanillas ambientales',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
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
                  'name' => 'Formulación e implementación del programa regional de negocios verdes',
                  'goal_1' => 5,
                  'goal_2' => 15,
                  'goal_3' => 15,
                  'goal_4' => 15,
                  'goal' => 50,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct52,
                  'name' => 'Implementación de Acciones de Manejo y Conservación de ecosistemas Estratégicos',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 3,
                  'goal_4' => 3,
                  'goal' => 6,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective20,
                  'product_id' =>$idobjectiveproduct53,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct54,
                  'name' => 'Monitorear proyectos de producción más limpia en sectores de producción artesanal de ladrillo y cal',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct55,
                  'name' => 'Promover y gestionar las estrategias relacionadas con esquemas de pagos por servicios ambientales en los sectores productivos',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct56,
                  'name' => 'Hacer seguimiento al proyecto de erradicación de fuentes contaminantes',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct57,
                  'name' => 'Apoyar proyectos de producción más limpia Sector carbón, calizas, esmeraldas y las actividades de alfarería y coquización',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct58,
                  'name' => 'Apoyar proyectos de reconversión tecnológica en los sectores agroindustrial, agropecuario, forestal hidrobiológico y/o biocomercio',
                  'goal_1' => 2,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 5,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective21,
                  'product_id' =>$idobjectiveproduct59,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct60,
                  'name' => 'Establecer sistemas silvopastoriles en áreas con vocación ganadera',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 100,
                  'goal_4' => 0,
                  'goal' => 100,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct61,
                  'name' => 'Fortalecer la participación comunitaria  en el manejo de sistemas silvopastoriles',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 200,
                  'goal_4' => 0,
                  'goal' => 200,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective22,
                  'product_id' =>$idobjectiveproduct62,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct63,
                  'name' => 'Fortalecer los procesos comunitarios locales y articularlos con las acciones institucionales entorno a los procesos de conservación a través del ecoturismo',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct64,
                  'name' => 'Implementar la fase I  del plan de  ordenamiento ecoturístico del área protegida',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct65,
                  'name' => 'Desarrollar una plataforma interactiva de ecoturismo a través de la Ventanilla de Negocios Verdes de Corpoboyacá',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 1,
                  'goal' => 1,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective23,
                  'product_id' =>$idobjectiveproduct66,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct67,
                  'name' => 'Prevenir y minimizar la generación de Residuos Sólidos peligrosos Respel',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct68,
                  'name' => 'Reporte de la información en el SIAC ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct69,
                  'name' => 'Promover el aprovechamiento y valorización de Residuos Sólidos Peligrosos Respel',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective24,
                  'product_id' =>$idobjectiveproduct70,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct71,
                  'name' => 'Hacer seguimiento a los PGIRS',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct72,
                  'name' => 'Implementar procesos de orientación para la minimización, separación  y aprovechamiento de Residuos Sólidos en la fuente  ',
                  'goal_1' => 8,
                  'goal_2' => 9,
                  'goal_3' => 9,
                  'goal_4' => 9,
                  'goal' => 35,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct73,
                  'name' => 'Apoyo y seguimiento a  las cadenas u organizaciones de recuperación y comercialización de residuos aprovechables',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct74,
                  'name' => 'Fortalecimiento de la mesa regional de reciclaje',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct75,
                  'name' => ' Apoyo y seguimiento al establecimiento de proyectos modelo para el aprovechamiento de residuos sólidos urbanos ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective25,
                  'product_id' =>$idobjectiveproduct76,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct77,
                  'name' => 'Adopción del Plan de Ordenamiento del Recursos Hídrico PORH Cuenca alta y media del Río Chicamocha ',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct78,
                  'name' => 'Implementación del Plan de Ordenamiento del Recursos Hídrico PORH Cuenca alta y media del Río Chicamocha',
                  'goal_1' => 9,
                  'goal_2' => 29,
                  'goal_3' => 25,
                  'goal_4' => 37,
                  'goal' => 100,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective26,
                  'product_id' =>$idobjectiveproduct79,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct80,
                  'name' => 'Reglamentar el uso del agua',
                  'goal_1' => 1,
                  'goal_2' => 2,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 3,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct81,
                  'name' => 'Porcentaje de cuerpos de agua priorizados con reglamentación del uso de agua',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct82,
                  'name' => ' Porcentaje de actos administrativos de reglamentacion del uso del agua ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 2,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity82 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective27,
                  'product_id' =>$idobjectiveproduct83,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity83 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct84,
                  'name' => 'Realizar un proyecto piloto para el uso eficiente y ahorro de agua enfocado a acueductos veredales ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 2,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity84 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct85,
                  'name' => 'Apoyo en la formulación y evaluación de los PUEAA  a los usuarios de recursos hídrico con concesión vigente y caudal menor o igual a 0.5 l/s',
                  'goal_1' => 20,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 20,
                  'goal' => 80,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity85 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective28,
                  'product_id' =>$idobjectiveproduct86,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity86 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct87,
                  'name' => 'Administrar el recurso hídrico ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity87 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective29,
                  'product_id' =>$idobjectiveproduct88,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity88 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct89,
                  'name' => 'Evaluación del Estudio Regional del Agua-ERA, en la Cuenca Alta del rio Chicamocha',
                  'goal_1' => 1,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 1,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity89 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective30,
                  'product_id' =>$idobjectiveproduct90,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity90 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct91,
                  'name' => 'Establecer e Implementar acciones encaminadas a la conservación protección y Recuperación del Sistema integrado de aguas termominerales, y subterráneas del área de influencia de la microcuenca Quebrada Honda y Lago Sochagota',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity91 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective31,
                  'product_id' =>$idobjectiveproduct92,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity92 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct93,
                  'name' => 'Implementar el Sistema Integral Recurso Hídrico (SIRH)',
                  'goal_1' => 0,
                  'goal_2' => 27,
                  'goal_3' => 27,
                  'goal_4' => 26,
                  'goal' => 80,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity93 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective32,
                  'product_id' =>$idobjectiveproduct94,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity94 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective33,
                  'product_id' =>$idobjectiveproduct95,
                  'name' => 'Apoyar la descontaminación de fuentes hídricas ',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity95 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective33,
                  'product_id' =>$idobjectiveproduct96,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity96 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective34,
                  'product_id' =>$idobjectiveproduct97,
                  'name' => 'Implementación de medidas de manejo en el Lago de Tota',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity97 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective34,
                  'product_id' =>$idobjectiveproduct98,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity98 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective35,
                  'product_id' =>$idobjectiveproduct99,
                  'name' => 'Establecer objetivos de calidad ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 20,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity99 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective35,
                  'product_id' =>$idobjectiveproduct100,
                  'name' => 'Establecer metas de carga global contaminante',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 20,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity100 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective35,
                  'product_id' =>$idobjectiveproduct101,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity101 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective36,
                  'product_id' =>$idobjectiveproduct102,
                  'name' => 'Formular y adoptar el plan de manejo de un acuífero priorizado',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity102 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective36,
                  'product_id' =>$idobjectiveproduct103,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity103 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective37,
                  'product_id' =>$idobjectiveproduct104,
                  'name' => 'Actualización de bases de datos de información especializada de trámites permisionarios del recurso hídrico ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity104 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective37,
                  'product_id' =>$idobjectiveproduct105,
                  'name' => 'Actualización de bases de datos de información especializada de trámites permisionarios de los demás procesos  misionales (aprovechamientos forestales, quejas e infracciones, fuentes fijas, Licencias ambientales, minas-bocaminas y minería ilegal, permisos de vertimientos)',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity105 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective37,
                  'product_id' =>$idobjectiveproduct106,
                  'name' => 'Apoyar los procesos de actualización  catastral en los municipios priorizados ',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 0,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity106 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective37,
                  'product_id' =>$idobjectiveproduct107,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity107 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective38,
                  'product_id' =>$idobjectiveproduct108,
                  'name' => 'Implementación, actualización y mantenimiento a los sistemas de información de la Corporación, Almera.',
                  'goal_1' => 40,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 70,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity108 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective38,
                  'product_id' =>$idobjectiveproduct109,
                  'name' => 'Implementación, actualización y mantenimiento a los sistemas de información  Geo Ambiental de la Corporación',
                  'goal_1' => 40,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 70,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity109 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective38,
                  'product_id' =>$idobjectiveproduct110,
                  'name' => 'Realizar la actualización y mantenimiento a los sistemas de información de la Corporación (Sysman y otros)',
                  'goal_1' => 20,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 50,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity110 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective38,
                  'product_id' =>$idobjectiveproduct111,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity111 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective39,
                  'product_id' =>$idobjectiveproduct112,
                  'name' => 'Digitalizar las portadas de las publicaciones priorizadas para el fortalecimiento del catálogo de la página web.',
                  'goal_1' => 650,
                  'goal_2' => 650,
                  'goal_3' => 650,
                  'goal_4' => 650,
                  'goal' => 2600,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity112 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective39,
                  'product_id' =>$idobjectiveproduct113,
                  'name' => 'Continuar con la implementación del software KOHA',
                  'goal_1' => 400,
                  'goal_2' => 400,
                  'goal_3' => 400,
                  'goal_4' => 400,
                  'goal' => 1600,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity113 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective39,
                  'product_id' =>$idobjectiveproduct114,
                  'name' => 'Digitalizar los archivos de la corporación',
                  'goal_1' => 10,
                  'goal_2' => 20,
                  'goal_3' => 30,
                  'goal_4' => 40,
                  'goal' => 100,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity114 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective39,
                  'product_id' =>$idobjectiveproduct115,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity115 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective40,
                  'product_id' =>$idobjectiveproduct116,
                  'name' => 'Actualizar la infraestructura tecnológica de la entidad',
                  'goal_1' => 10,
                  'goal_2' => 10,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 30,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity116 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective40,
                  'product_id' =>$idobjectiveproduct117,
                  'name' => 'Establecer los mecanismos necesarios para mantener la seguridad de la información',
                  'goal_1' => 10,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 10,
                  'goal' => 60,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity117 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective40,
                  'product_id' =>$idobjectiveproduct118,
                  'name' => 'Garantizar la conexión a internet de las sedes corporativas',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 5,
                  'goal_4' => 5,
                  'goal' => 20,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity118 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective40,
                  'product_id' =>$idobjectiveproduct119,
                  'name' => 'Garantizar el servicio de correo electrónico a todos los funcionarios de la Corporación',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity119 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective40,
                  'product_id' =>$idobjectiveproduct120,
                  'name' => 'priorizadas en el Plan estratégico de tecnologías de la información PETI, plan de tratamiento de riesgos de seguridad y privacidad de la información PTRI y Plan de Seguridad y privacidad de la información PTRI y Plan de Seguiridad y privacidad de la información PSPI',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 6,
                  'goal' => 6,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity120 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective40,
                  'product_id' =>$idobjectiveproduct121,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity121 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective41,
                  'product_id' =>$idobjectiveproduct122,
                  'name' => 'Actualización, Seguimiento y/o elaboración de mapas para el manejo del ruido en las poblaciones por encima de 100.000 habitantes.',
                  'goal_1' => 2,
                  'goal_2' => 3,
                  'goal_3' => 3,
                  'goal_4' => 100,
                  'goal' => 108,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity122 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective41,
                  'product_id' =>$idobjectiveproduct123,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity123 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective42,
                  'product_id' =>$idobjectiveproduct124,
                  'name' => 'Realizar operativos control de gases en fuentes móviles ',
                  'goal_1' => 7,
                  'goal_2' => 7,
                  'goal_3' => 7,
                  'goal_4' => 7,
                  'goal' => 28,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity124 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective42,
                  'product_id' =>$idobjectiveproduct125,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity125 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective43,
                  'product_id' =>$idobjectiveproduct126,
                  'name' => 'Adquisición, Fortalecimiento,  Operación, mantenimiento y calibración de las estaciones de monitoreo de calidad del aire y meteorológicas.',
                  'goal_1' => 33,
                  'goal_2' => 34,
                  'goal_3' => 0,
                  'goal_4' => 0,
                  'goal' => 67,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity126 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective43,
                  'product_id' =>$idobjectiveproduct127,
                  'name' => 'Formulación e implementación de un programa de seguimiento a la calidad del aire.',
                  'goal_1' => 40,
                  'goal_2' => 20,
                  'goal_3' => 20,
                  'goal_4' => 20,
                  'goal' => 100,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity127 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective43,
                  'product_id' =>$idobjectiveproduct128,
                  'name' => 'Reporte de la información al SIAC Aire',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity128 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective43,
                  'product_id' =>$idobjectiveproduct129,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity129 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective44,
                  'product_id' =>$idobjectiveproduct130,
                  'name' => ' Operación, mantenimiento y calibración de las estaciones de monitoreo de calidad del agua',
                  'goal_1' => 50,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 350,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity130 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective44,
                  'product_id' =>$idobjectiveproduct131,
                  'name' => 'Reporte de la información al SIAC Agua',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity131 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective44,
                  'product_id' =>$idobjectiveproduct132,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity132 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective45,
                  'product_id' =>$idobjectiveproduct133,
                  'name' => ' Realizar monitoreos a sujetos pasivos',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity133 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective45,
                  'product_id' =>$idobjectiveproduct134,
                  'name' => 'Realizar monitoreo al sistema integrado de aguas termominerales, subterráneas del área de influencia microcuenca quebrada honda Lago Sochagota (Paipa)',
                  'goal_1' => 0,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 4,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity134 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective45,
                  'product_id' =>$idobjectiveproduct135,
                  'name' => 'Realizar monitoreos cuencas priorizadas',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 2,
                  'goal' => 5,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity135 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective45,
                  'product_id' =>$idobjectiveproduct136,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity136 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective46,
                  'product_id' =>$idobjectiveproduct137,
                  'name' => 'Realizar adquisición, mantenimiento y calibración de equipos materiales y reactivos del laboratorio de calidad ambiental.',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity137 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective46,
                  'product_id' =>$idobjectiveproduct138,
                  'name' => 'Participar en pruebas interlaboratorios.',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity138 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective46,
                  'product_id' =>$idobjectiveproduct139,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity139 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective47,
                  'product_id' =>$idobjectiveproduct140,
                  'name' => 'Control de transferencias Municipales',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity140 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective47,
                  'product_id' =>$idobjectiveproduct141,
                  'name' => 'Fortalecimiento Asociativo',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity141 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective47,
                  'product_id' =>$idobjectiveproduct142,
                  'name' => 'Auditoría externa de seguimiento certificación Sistema de Gestión Calidad',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity142 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective47,
                  'product_id' =>$idobjectiveproduct143,
                  'name' => 'Fortalecimiento físico sede administrativa central',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 100,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity143 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective47,
                  'product_id' =>$idobjectiveproduct144,
                  'name' => 'Desarrollo de actividades priorizadas en el PINAR',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 2,
                  'goal' => 2,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity144 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective47,
                  'product_id' =>$idobjectiveproduct145,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity145 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective48,
                  'product_id' =>$idobjectiveproduct146,
                  'name' => 'Operar  la  Secretaria Técnica del OCAD de Corpoboyaca, para la Vigencia Fiscal 2019 - 2020',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 100,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity146 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective48,
                  'product_id' =>$idobjectiveproduct147,
                  'name' => 'Seguimiento, Monitoreo, control y evaluacion de las inversiónes realizadas con recursos del SGR',
                  'goal_1' => 0,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 100,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity147 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective48,
                  'product_id' =>$idobjectiveproduct148,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity148 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective49,
                  'product_id' =>$idobjectiveproduct149,
                  'name' => 'Construir un laboratorio de análisis ambiental',
                  'goal_1' => 50,
                  'goal_2' => 0,
                  'goal_3' => 0,
                  'goal_4' => 100,
                  'goal' => 150,
                  'weighing' => 99,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity149 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective49,
                  'product_id' =>$idobjectiveproduct150,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity150 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct151,
                  'name' => 'Desarrollo de procesos educativos y fortalecimiento de la cultura ambiental a través de Jóvenes de Ambiente',
                  'goal_1' => 2,
                  'goal_2' => 2,
                  'goal_3' => 2,
                  'goal_4' => 2,
                  'goal' => 8,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity151 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct152,
                  'name' => 'Promover la estrategia Recuperando Sueños en las instituciones educativas',
                  'goal_1' => 10,
                  'goal_2' => 10,
                  'goal_3' => 10,
                  'goal_4' => 10,
                  'goal' => 40,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity152 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct153,
                  'name' => 'Diseño y elaboración de  materiales pedagógicos; producción y emisión de contenidos audiovisuales como parte de campañas de sensibilización y educación ambiental',
                  'goal_1' => 4,
                  'goal_2' => 4,
                  'goal_3' => 4,
                  'goal_4' => 4,
                  'goal' => 16,
                  'weighing' => 16,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity153 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct154,
                  'name' => 'Estímulo y reconocimiento a la gestión ambiental',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity154 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct155,
                  'name' => 'Fortalecimiento del comité interinstitucional de educación ambiental de Boyacá en apoyo al Plan Departamental de Educación ambiental',
                  'goal_1' => 5,
                  'goal_2' => 5,
                  'goal_3' => 0.05,
                  'goal_4' => 5,
                  'goal' => 15.05,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity155 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct156,
                  'name' => 'Fortalecimiento de las ONG´s ambientales ',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 17,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity156 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective50,
                  'product_id' =>$idobjectiveproduct157,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity157 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective51,
                  'product_id' =>$idobjectiveproduct158,
                  'name' => 'Fortalecimiento organizativo y operativo de los CIDEAS Municipales',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity158 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective51,
                  'product_id' =>$idobjectiveproduct159,
                  'name' => 'Acompañar procesos de educación no formal en la formulación y educación de PROCEDAS',
                  'goal_1' => 6,
                  'goal_2' => 6,
                  'goal_3' => 6,
                  'goal_4' => 6,
                  'goal' => 24,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity159 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective51,
                  'product_id' =>$idobjectiveproduct160,
                  'name' => 'Apoyo a la educación formal en la formulación y ejecución de los PRAES',
                  'goal_1' => 8,
                  'goal_2' => 8,
                  'goal_3' => 8,
                  'goal_4' => 8,
                  'goal' => 32,
                  'weighing' => 33,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity160 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective51,
                  'product_id' =>$idobjectiveproduct161,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity161 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective52,
                  'product_id' =>$idobjectiveproduct162,
                  'name' => 'Fortalecimiento las estrategias de comunicación dentro y fuera de la corporación',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 50,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity162 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective52,
                  'product_id' =>$idobjectiveproduct163,
                  'name' => 'Diseñar y elaborar material de divulgación',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 49,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity163 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective52,
                  'product_id' =>$idobjectiveproduct164,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity164 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct165,
                  'name' => 'Atender trámites permisionarios',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 19,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity165 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct166,
                  'name' => 'Atender procesos sancionatorios ',
                  'goal_1' => 100,
                  'goal_2' => 100,
                  'goal_3' => 100,
                  'goal_4' => 100,
                  'goal' => 400,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity166 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct167,
                  'name' => 'Realizar el seguimiento a licencias, concesiones, permisos, autorizaciones vigentes e infracciones ambientales',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 100,
                  'goal' => 175,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity167 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct168,
                  'name' => 'Realizar operativos y monitoreos para el control de uso y movilización de los Recursos Naturales, el control de emisiones de fuentes fijas',
                  'goal_1' => 300,
                  'goal_2' => 300,
                  'goal_3' => 300,
                  'goal_4' => 300,
                  'goal' => 1200,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity168 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct169,
                  'name' => 'Realizar seguimiento a los PSMV municipales',
                  'goal_1' => 25,
                  'goal_2' => 25,
                  'goal_3' => 25,
                  'goal_4' => 25,
                  'goal' => 100,
                  'weighing' => 20,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity169 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('activities')->insert([
                  'objective_id' => $idobjective53,
                  'product_id' =>$idobjectiveproduct170,
                  'name' => 'ASIGNACION PRESUPUESTAL',
                  'goal_1' => 1,
                  'goal_2' => 1,
                  'goal_3' => 1,
                  'goal_4' => 1,
                  'goal' => 4,
                  'weighing' => 1,  'geometry' => 4,'ocde_category_id' =>1173, 'indicator_id' => null, 'variable_id' => null,]);$idactivity170 = DB::getPdo()->lastInsertId();
        
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>1,
          'value' => 25,
          'description' => 'Se avanza en el desarrollo de la fase de aprestamiento, la cual incluye el desarrollo de la etapa de preconsulta con la comunidad indígena Motorduchake Alto Nacaberdwua, se han efectuado acercamientos con las administraciones municipales de los tres municipios que hacen parte de la cuenca Cimitarra y Bolívar en el Departamento de Santander y Puerto Boyacá en el departamento de Boyacá',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia1 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>1,
          'value' => 31.5,
          'description' => 'Se logró la culminación de la fase de aprestamiento, elección del consejo de cuenca y avanzar en un 80% en la construcción del diagnóstico',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia2 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>1,
          'value' => 14,
          'description' => 'En el marco de esta actividad se logró la culminación de la fase de aprestamiento, elección del consejo de cuenca y avanzar en un 40% en la construcción del diagnóstico',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia3 = DB::getPdo()->lastInsertId(); 


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
          'value' => 9,
          'description' => 'Formulación del plan de manejo del Distrito de manejo y área de recreación lago sochagota y la cuenca que lo alimenta ,   Se radicó bajo ante el MADS,  el documento   Plan de Manejo de la Reserva Forestal Protectora El Peligro  , para su revisión y adopción
        Adopcioon Planes de Manejo:
         PNR Serranía de la Quinchas: Mediante Acuerdos 028 y 029 del 13 de Diciembre de 2016 

         PNR Rabanal: Mediante Acuerdo 026 y 030 del 13 de Diciembre de 2016  Plan de Manejo para el PNR  Páramo de Rabanal

         PNR Serranía El Peligro: Mediante Acuerdo 022 y 032 
        Se realizó el diseño para el folleto divulgativo de los planes de manejo del PNR Serranía el Peligro y RFP Sierra El peligro
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia7 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>1,
          'value' => 90,
          'description' => ' Se realizó mesa de trabajo para seguimiento al Convenio entre el instituto Alexander von Humboldt y CORPOBOYACA para definir avances en el convenio.Corpoboyacá realizó la primera entrega de información vía correo electrónico a Corpochivor.

         Se realizó la revisión del acta de terminación y liquidación y se entregó la certificación de bienes y servicios por parte Corpobyacá a Corpochivor, en el mes de octubre.
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia8 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>1,
          'value' => 1,
          'description' => '',
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
          'activity_id' => $idactivity12,
          'year' =>1,
          'value' => 1,
          'description' => 'Por medio de la consultoría CPS 2016-016 cuyo objeto fue la  “Prestación  de servicios para la asesoría técnica y acompañamiento a la corporación autónoma regional de Boyacá “Corpoboyacá” en la formulación del plan de acción 2016-2019 y elementos argumentados para la  actualización del PGAR 2009-2019, de conformidad  con las especificaciones técnicas establecidas en los estudios previos”  se Formulo de manera el Pla de Acción 2016 -2019  el cual contó con la participación de la comunidad con un total de 9 encuentros regionales, mesas  de trabajo con expertos internos,   expertos externos y ONGs  que aportaron en la construcción de este instrumentos de planificación',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia12 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia13 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>1,
          'value' => 8,
          'description' => 'asistencia técnico-jurídica mediante oferta y demanda: por oferta se priorizaron trece (13) municipios, con los cuales se adelantaron mesas de trabajo, visitas a los mismos e instructivos en temáticas relacionadas con gestión del riesgo, áreas protegidas, instrumentos de planificación local e incorporación de áreas para vivienda campestre en los Planes de Ordenamiento Territorial',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia14 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>1,
          'value' => 100,
          'description' => 'Se dio cumplimiento legal al trámite de concertación de asuntos ambientales de   los documentos que hacen parte de los proyectos de revisión de ordenamiento territorial y planes parciales que fueron radicados por los municipios para tal fin.',
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
          'value' => 6,
          'description' => ' Se culminó con el proceso para la elaboración de todos los Estudios Técnicos, Económicos, Sociales y Ambientales (ETESA) de los 7 complejos de páramo de la jurisdición, el cual es el principal requisito para la delimitación de este importante ecosistema, logrando con esto que el MADS delimitara 4 complejos (Iguaque-Merchán, Tota-Bijagual-Mamapacha, Altiplano Cundiboyacense y Rabanal-Río Bogotá).',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia17 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity18,
          'year' =>1,
          'value' => 3.9,
          'description' => 'Estudio socioeconómico de las comunidades vinculadas a las actividades agropecuarias y mineras del complejo de páramo Pisba en la jurisdicción
        Se realizó la revisión de la información secundaria, primera mesa de acercamiento con las alcaldías municipales de los 7 entes territoriales que forman parte del complejo, se avanzó en la descripción de las coberturas vegetales y se presentó el primer informe de avance ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia18 = DB::getPdo()->lastInsertId(); 
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
          'description' => ' Consolidación del documento técnico correspondiente al Proyecto Plan padrino.  
         Se definieron los lineamientos jurídicos y la justificación del proyecto.  
         Se Realizó reunión con la CAR el 21 de septiembre para conocer las experiencias de esa Corporación frente al proceso que se adelanta para el tema de humedales.
         Se elaboró en el video institucional de SIRAP
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia20 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>1,
          'value' => 100,
          'description' => ' Se realizó el cargue de la información básica del PNR El Valle ante la plataforma del Registro Único Nacional de Áreas Protegidas (RUNAP) administrada por Parques Naturales Nacionales, lo cual fue validado y corroborado en el mes de agosto de 2016 por la mencionada dependencia, quien informó a Corpoboyacá, que fueron inscritas las 2.442 Has del PNR El Valle y las 16.508 Has del PNR Cortadera',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia21 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>1,
          'value' => 1,
          'description' => ' Se realizó el proceso para la contratación CDS 172   para garantizar el servicio de logística requerido para el desarrollo del quinto encuentro del CORAP 
         El 24 de noviembre se adelantó el 5º. Encuentro del CORAP Regional, contando con la participación de los COLAP de la jurisdicción
        ',
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
          'value' => 87,
          'description' => 'Actualización e implementación del plan corporativo de contingencia fenómeno El Niño  
        Participación en reuniones de Consejo Municipal para la Gestión del Riesgo de Desastres CMGRD de 87 los municipios de la jurisdicción
        e diseñaron, elaboraron y divulgaron instrumentos de gestión para afrontar el fenómeno El Niño en la jurisdicción de Corpoboyacá, con lineamientos impartidos a través de circulares, protocolos, resoluciones, seguimientos, comunicados, campañas y videos generados por el gobierno nacional, a través de la Unidad Nacional para la Gestión del Riesgo de Desastres UNGRD y el IDEAM, en conjunto con las medidas adoptadas por la Corporación. A través de once convenios con los municipios de Combita, Tuta, Corrales, Sotaquirá, Tibasosa, Oicatá, Sutamarchan, Nobsa, Duitama, Paipa, Sogamoso, se adelantó la limpieza y retiro de material vegetal y  residuos sólidos que ocupan el cauce principal de la cuenca alta del Río Chicamocha y el Río Sutamarchán y que impiden el  paso normal de la corriente de agua',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia24 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia25 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia27 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>1,
          'value' => 0.7,
          'description' => 'Se intervinieron con restauración activa 29 hectáreas ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia28 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>1,
          'value' => 700,
          'description' => 'CNV 2016-022 con la Asociación Agroforestal del Magdalena Medio 9 hectareas
        Acompañamiento técnico con CPS para el mantenimiento de 400 hectareas provincia Norte
        Acompañamiento técnico con CPS y produccion material para 300 hestareas en la Serrania de las Quinchas ',
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
          'activity_id' => $idactivity33,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia33 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>1,
          'value' => 305,
          'description' => 'En asocio con los municipios de Miraflores y Paipa se adquirieron dos predios con extensión total de 170 hectáreas, Mediante compensación ambiental a cargo de la empresa TGI se recibieron 193,4 hectáreas ',
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
          'value' => 100,
          'description' => 'Cuatro monitores de aves en el AICA Lago de Tota; diagnóstico y la formulación del Plan de Ordenamiento Ecoturístico para el área del Parque Natural Regional  Siscunsí – Ocetá',
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
          'value' => 8,
          'description' => 'Se realizó el diagnóstico de las amenazas, presiones y vulnerabilidades del Oso Andino Tremarctos ornatus  y especies acompañantes en los municipios de Chita y Socotá; Se realizó propagación de 10.000 plantas de Roble (Quercus humboldtii) y Abarco (Cariniana piriformis), en los viveros de Corpoboyacá',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia38 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>1,
          'value' => 2,
          'description' => 'Disposición final de 133 ejemplares de fauna silvestre decomisados, rescatados o entregados voluntariamente a la Corporación y remitidos para la administración y manejo técnico en el hogar de paso de fauna silvestre',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia39 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia40 = DB::getPdo()->lastInsertId(); 

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
          'description' => ' Se apoyó a los municipios con la identificación del caracol terrestre.
         Se realizaron capacitaciones a los municipios de Maripi y Puerto Boyacá respectivamente.
         Se participó en el Consejo Territorial de Salud Ambiental.
         Se realizaron campañas de recolección en Berbeo, Páez, Miraflores y Puerto Boyacá.
         Se diseñó un video para publicar en la página de la corporación.
         Se trabajó permanentemente con las alcaldías de la jurisdicción.
         Se participó en reuniones con la Procuraduría.
        ',
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
          'description' => 'Se alcanzó la implementación de 200 hectáreas   con buenas prácticas ambientales en sistemas productivos para la conservación de los recursos suelo y agua mediante el modelo de  agricultura orgánica, ecológica, biopreparados y renovación de praderas en los  municipios de Sotaquira, Tunja, Tuta, Paipa, Chivata, Siachoque, Toca, Duitama, Tibasosa, Tota, Aquitania y Cuitiva; se desarrolló una estrategia de implementación de Buenas Prácticas Agrícolas en el cultivo de la cebolla larga (Allium Fistulosum), dentro de la cuenca hidrográfica del Lago de Tota,',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia45 = DB::getPdo()->lastInsertId(); 
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
          'value' => 35,
          'description' => ' Durante el año 2016 se realizaron dos mercados verdes en los municipios de Duitama y Sogamoso   con el fin de ofertar productos limpios y sanos a los consumidores por parte de productores quienes implementan prácticas amigables con el medio ambiente, vinculándose a esta iniciativa las respectivas alcaldías, Secretarias de Desarrollo, Gobernación de Boyacá, 254 productores y más de 300 asistentes particulares. Además de los municipios anfitriones, asistieron: Beteitiva, Santa Rosa de Viterbo, Tunja, Belén, Floresta, Cerinza, Sotaquira, Tota, Corrales, Tuta, Paipa, Nobsa, Tibasosa',
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
          'value' => 2,
          'description' => 'Esta meta se cumplió a través del apoyo y fortalecimiento de la ventanilla ambiental minera y del sector agropecuario, la ventanilla ambiental minera fue apoyada por suscripción de convenio con el Ministerio de Minas y Energía y se encuentra alojada en el link: http://www.corpoboyaca.gov.co/nuestra-gestion/ventanilla-ambiental-sectores-productivos.',
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
          'value' => 5,
          'description' => 'se realizaron dos mercados verdes en los municipios de Duitama y Sogamoso   con el fin de ofertar productos limpios y sanos a los consumidores por parte de productores quienes implementan prácticas amigables con el medio ambiente',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia51 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia53 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>1,
          'value' => 1,
          'description' => 'Se realizó el  seguimiento a los nueve proyectos de reconversión tecnológica   para la producción de ladrillo y cal que desarrollaron su actividad productiva con el apoyo de Corpoboyacá implementando ductos y chimeneas para sus hornos ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia54 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>1,
          'value' => 100,
          'description' => 'promoción de la Estrategia BANCO2, como una alternativa para la implementación de pago por servicios ambientales ante entidades públicas y privadas de la región. En especial se hicieron acercamientos con la Gobernación de Boyacá y con 80 empresas de diferentes sectores productivos quienes, en el marco del Primer Foro de Responsabilidad Social Ambiental liderado y organizado por la Corporación',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia55 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>1,
          'value' => 1,
          'description' => 'Certificación ICONTEC adelantó la auditoria de verificación de la reducción de emisiones logradas por las actividades propuestas en el marco del proyecto    Erradicación de fuentes de emisiones contaminantes para los sectores artesanales de ladrillo y cal en el valle de Sugamuxi en el Departamento de Boyacá”. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia56 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>1,
          'value' => 1,
          'description' => 'con el municipio de Paipa se viene adelantando el proyecto de producción más limpia en el sector del carbón con la implementación de buenas prácticas mineras con el objeto de reducir la inadecuada disposición de material estéril y de vertimiento de aguas ácidas de mina sin tratar a la subcuenca de Quebrada Honda',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia57 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>1,
          'value' => 2,
          'description' => 'Proyecto piloto piscícola en la cuenca media de la quebrada El Ermitaño, vereda El Ermitaño del Municipio de Puerto Boyacá
        Convenio con el Ministerio de Minas y Energia involucra actividades con las UPM con título y licencia activas susceptibles a ser intervenidas (50 UPM)',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia58 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia59 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia62 = DB::getPdo()->lastInsertId(); 



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
          'value' => 2,
          'description' => 'Convenio interinstitucional con CORPOCHIVOR y la corporación ECOEFICIENCIA, se desarrolló el programa Hospital Sostenible 7ª.  Versión, con la participación de 50 entidades
        Convenio de cooperación con Corporación ECOEFICIENCIA, para el  desarrolló la 3ª.  versión del programa de producción más limpia ECOPROFIT y la conformación del Club ECOPROFIT ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia67 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>1,
          'value' => 100,
          'description' => ' Inscripción al registro de generadores de 66 establecimientos de la jurisdicción  y complementariamente se verificó y transmitió la información de otras 256 empresas que actualizaron su registro
         Inscripción de seis empresas manufactureras al registro RUA y transmisión de información de 54 empresas que actualizaron su registro.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia68 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>1,
          'value' => 2,
          'description' => 'Campañas de recolección de residuos pos consumo de RAEE`s, pilas, medicamentos vencidos o parcialmente consumidos, insecticidas domésticos, llantas y luminarias',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia69 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia70 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>1,
          'value' => 25,
          'description' => 'Acompañamiento a los procesos de actualización de Planes de Gestión Integral de Residuos Sólidos de 11 municipios
        Se acompañaron las reuniones de activación del comité coordinador de 11 municipios',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia71 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>1,
          'value' => 6,
          'description' => 'Se adquirieron elementos e insumos requeridos para el desarrollo del programa ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia72 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>1,
          'value' => 1,
          'description' => 'Desarrollo el  IV Encuentro Regional Sectorial de reciclaje en el municipio de Paipa',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia74 = DB::getPdo()->lastInsertId(); 

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
          'description' => 'Resolución No. 2769 del 25 de agosto de 2016 se adopta el Plan de Ordenamiento del Recurso Hídrico de la corriente principal de la cuenca alta y la cuenca media del Río Chicamocha ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia77 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>1,
          'value' => 9,
          'description' => 'Estudios técnicos necesarios para determinar las alternativas de adecuación hidráulica y delimitación de la cota máxima de inundación en el cauce principal de la cuenca alta del Rio Chicamocha, proyecto éste que se tiene programado entregar en la vigencia 2018',
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
          'value' => 0.67,
          'description' => 'Se previo realizar la reglamentación de las microcuencas de los ríos Cane, La Cebada y Leyva y  las microcuencas de las quebradas El Roble y La Colorada, los canales Españoles y Rosita y sus tributarios, en los municipios de Arcabuco, Chíquiza, Villa de Leyva, y Gachantivá, de acuerdo con los lineamientos establecidos en el Decreto 1076 de 2015. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia80 = DB::getPdo()->lastInsertId(); 


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
          'value' => 1,
          'description' => 'Se apoyó a 100 acueductos veredales mediante el suministro, instalación y puesta en marcha de dispositivos de regulación de caudal cerrados con sistema de seguridad antifraude, para controlar los caudales concesionados',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia84 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>1,
          'value' => 20,
          'description' => 'Fueron allegados para evaluación a Corpoboyacá 66 documentos de programas de uso eficiente y ahorro de agua, PUEAA',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia85 = DB::getPdo()->lastInsertId(); 
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
          'value' => 65,
          'description' => 'Se radicaron 569 tramites de los cuales se expidio resolucion de 126 en la vigencia; Se radicaron 248 tramites de los cuales se expidio resolucion de 218 en periodos anteriores',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia87 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia88 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity89,
          'year' =>1,
          'value' => 0.9,
          'description' => 'Convenio con STOCKHOLM ENVIRONMENT INSTITUTE U.S INC Y SOLUCIONES HÍDRICAS RQR SA.S,  para  realizar la investigación que determinará la evaluación regional del agua, ERA, de la Cuenca Alta del Rio Chicamocha y transferencia de tecnología al equipo de modelación de Corpoboyacá mediante la implementación del modelo WEAP',
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
          'activity_id' => $idactivity91,
          'year' =>1,
          'value' => 1,
          'description' => 'Se unificaron esfuerzos técnicos, administrativos y financieros con el municipio de Paipa para la rehabilitación de las compuertas de desagüe al canal de alivio y cerramiento del área aferente, Lago Sochagota.
        Convenio con el municipio de Paipa para implementacion de buenas practicas mineras, diseño del sistema de sedimentacion en el tramo de entrada a quebrada Honda, acciones preventivas de mitigación, restauración ecológica, ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia91 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia92 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia94 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>1,
          'value' => 25,
          'description' => 'Convenio con el municipio de Sogamoso se adelantó la construcción de componentes auxiliares para la operación de la planta de tratamiento de aguas residuales de la PTAR del municipio de Sogamoso',
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
          'value' => 0.75,
          'description' => 'Se retomó la mesa permanente de trabajo por el Lago de Tota
        una mesa interinstitucional (MVCT, Gobernación, Alcaldías, PDA, MADS y Corpoboyacà) para gestionar los recursos de la PTAR del municipio de Aquitania y articular la implementación de los Planes de Gestión Integral de Residuos Sólidos de los municipios de la cuenca.
        Se continuó con la estrategia de pactos por la Tota-lidad, bajo la visión de generar un territorio seguro.  
        Se realizaron dos campañas de monitoreo de calidad y cantidad de agua en el Lago de Tota y sus tributarios, en las cuales se recolectaron 56 muestras en total, estudiando para cada muestra 15 parámetros fisicoquímicos y microbiológicos, realizando en total 840 ensayos de laboratorio, 13 muestras estándar, 36 muestras-duplicados y 12 muestras-blanco, para un total de 888 muestras procesadas',
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
          'activity_id' => $idactivity101,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia101 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia103 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>1,
          'value' => 100,
          'description' => 'Se hizo la verificación de la base de datos de formatos de coordenadas registrados al SIAT. Se realizó una verificación previa si las coordenadas aparecen o no en el municipio, vereda adecuada. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia104 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>1,
          'value' => 100,
          'description' => 'se hizo la verificación de la base de datos de formatos de coordenadas registrados al SIAT. Se realizó una verificación previa si las coordenadas aparecen o no en el municipio, vereda adecuada. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia105 = DB::getPdo()->lastInsertId(); 

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
          'value' => 40,
          'description' => 'Se firmó el contrato de servicios CDS  2016140 por valor de $ 19.488.000  para la actualización, seguimiento y mantenimiento del sistema de información Almera -SGI',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia108 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>1,
          'value' => 40,
          'description' => 'Se adicionó el CDS 2015202, por un valor de $39.000.000
        Se terminó y liquidó el CDS 2015202
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia109 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>1,
          'value' => 20,
          'description' => 'Se adicionó y prorrogó el CDS 2015024, por tres meses con un valor de $16455560
        Se firmó el contrato de servicios CDS 2016102 por valor de $22.384.180
        El CDS 2016102 se encuentra en ejecución
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia110 = DB::getPdo()->lastInsertId(); 
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
          'value' => 650,
          'description' => 'Se han digitalizado y cargado al catálogo 650 portadas ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia112 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>1,
          'value' => 400,
          'description' => 'Se cargaron los registros del centro de documentación al sistema KOHA y se subieron las portadas de los libros del centro de documentación que estaban contemplados como metas dentro del plan de acción.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia113 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>1,
          'value' => 4,
          'description' => 'Se adquirieron los scanner para iniciar la digitalización de los expedientes',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia114 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia115 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>1,
          'value' => 10,
          'description' => 'Se contrató el licenciamiento de ARCGIS, para garantizar el funcionamiento, actualización y consulta del sistema de información geográfico de la entidad.
        Así mismo se adelantó la contratación para la adquisición de equipos y elementos tecnológicos para la corporación 
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia116 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>1,
          'value' => 10,
          'description' => 'Se mantuvo el servicio de respaldo de la información vital de la entidad. (copia de seguridad en la nube)
        Se mantuvo el servicio de seguridad gestionada (firewall) al canal de internet de la corporación
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia117 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>1,
          'value' => 5,
          'description' => 'La entidad cuenta con conexión a internet en la sede centro, las cuatro oficinas regionales y la oficina de Santa Inés en Aquitania',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia118 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>1,
          'value' => 100,
          'description' => 'Se renovaron 300 cuentas de correo electrónico para todos los funcionarios de Corpoboyacá.
         
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia119 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia121 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>1,
          'value' => 2,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia122 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia123 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>1,
          'value' => 7,
          'description' => 'Se realizaron inspecciones para 221 fuentes móviles, en los municipios de Tunja, Paipa, Duitama y Sogamoso; Corredores Viales Tunja – Bogotá, Duitama- Sogamoso y  Tunja – Paipa',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia124 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia125 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>1,
          'value' => 33,
          'description' => 'Se instalaron tres  nuevas estaciones, con el esfuerzo y apoyo del gobierno de Corea del Sur, a través de la Agencia de Cooperación Internacional de Corea KOICA, y la Corporación Ambiental de Corea KECO,',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia126 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>1,
          'value' => 20,
          'description' => 'Se desarrollo el proceso contractual a través del concurso de méritos No. 008 de 2016, el cual surtio su etapa contractual y fue declarado desierto en la fase de evaluación de propuestas por no cumplimiento de los requisitos técnicos exigidos en los pliegos de condiciones del proceso por parte de dos los (2) proponentes ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia127 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>1,
          'value' => 100,
          'description' => 'Información Publicada en el SISAIRE hasta el mes de Diciembre',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia128 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia129 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>1,
          'value' => 50,
          'description' => 'Realización de monitoreo del recurso hídrico en 14 estaciones ubicadas a lo largo de la cuenca alta y media del Rio Chicamocha. El monitoreo incluye la recolección de muestras y determinación de parámetros de calidad y cantidad',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia130 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>1,
          'value' => 100,
          'description' => 'Se realizo el cargue respectivo',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia131 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia132 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>1,
          'value' => 0.5,
          'description' => 'Se realizó la campaña de monitoreo a cuencas priorizadas dentro de la jurisdicción de Corpoboyacá, incluyendo análisis físico, químico, microbiológico e hidrobiológico, para la determinación de características de calidad del recurso hídrico',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia133 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>1,
          'value' => 0.5,
          'description' => 'Se realizó una campaña de monitoreo a sujetos pasivos objeto de cobro de tasa retributiva en diferentes puntos del área de jurisdicción de Corpoboyacá, dando cobertura a diferentes actividades y sectores productivos',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia135 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia136 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>1,
          'value' => 96,
          'description' => 'El fortalecimiento del laboratorio de calidad ambiental se hizo mediante la adquisición de equipos para los ensayos analíticos, materiales, instrumentos y reactivos para la operación y funcionamiento. 
        Se realizó mantenimiento y calibración de equipos de laboratorio (preventivo y correctivo) en equipos priorizados, verificación metrológica y calibración en variables acreditadas, de acuerdo a programación interna y en cumplimiento de la Norma NTC-ISO/IEC 17025.

        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia137 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>1,
          'value' => 2,
          'description' => 'Se participó en el programa de pruebas interlaboratorios PICCAP
        También se participó en el programa interlaboratorios IDEAM ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia138 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia139 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>1,
          'value' => 1,
          'description' => 'La auditoría da inicio en el mes de octubre de 2016, logrando auditar a los 87 municipios, lo que contribuyo con el aumento en el recaudo, ya que los municipios han venido reportando sus pagos, se concientiza a los municipios en las transferencias a tiempo',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia140 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>1,
          'value' => 1,
          'description' => 'Se mantiene activo el proceso de cooperación con ASOCARS cumpliendo con la cuota de sostenimiento establecida',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia141 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>1,
          'value' => 1,
          'description' => 'La auditoría de seguimiento se llevó a cabo el día 16 de noviembre de 2016, ratificando la certificación de Corpoboyacá',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia142 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia145 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia148 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia150 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>1,
          'value' => 2,
          'description' => ' Procesos educativos de fortalecimiento de una la cultura ambiental a través de grupos de interés como lo son Jóvenes de Ambiente.
        Consolidación participativa de la Red de Jóvenes Capitulo Boyacá, en el V Encuentro Nacional de Jóvenes de Ambiente.',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia151 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>1,
          'value' => 10,
          'description' => 'Durante el año 2016 se desarrolló la segunda versión de la estrategia con la participacion de 10 instituciones educativas',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia152 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>1,
          'value' => 4,
          'description' => 'Diseño y elaboración de materiales pedagógicos, producción y emisión de contenidos audiovisuales como parte de campañas de sensibilización y educación ambiental',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia153 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>1,
          'value' => 0.2,
          'description' => 'Se están gestionando recursos para el cumplimiento de la meta programada ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia154 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>1,
          'value' => 5,
          'description' => 'Convenio Interadministrativo con la Universidad de Boyacá, para el fortalecimiento del Comité Interinstitucional de Educación Ambiental de Boyacá-CIDEABOY en apoyo al Plan Departamental de Educación Ambiental de Boyacá',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia155 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>1,
          'value' => 1,
          'description' => 'Fortalecimiento de las ONG ambientales: Apoyo logístico para el fortalecimiento de las organizaciones no gubernamentales en formulación de proyectos.                                                      
         Convenio con el Fondo Mixto para el diseño de material de apoyo al encuentro de las ONG
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia156 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia157 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>1,
          'value' => 100,
          'description' => 'Convenio con la ONG Cabildo Verde Los Sauces y Municipio de Combita en el fortalecimiento del Comité de Educación Ambiental del Municipio a partir de estrategias de educación no formal',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia158 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>1,
          'value' => 6,
          'description' => 'Suscripción de convenio interadministrativo con la ONG Primavera   en la ejecución de seis Proyectos Comunitarios de Educación Ambiental –PROCEDAS',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia159 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>1,
          'value' => 8,
          'description' => 'Se adelantó a través de convenios con ONG, beneficiando a 8 instituciones',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia160 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia161 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>1,
          'value' => 100,
          'description' => 'Con corte a fecha 30 de diciembre de 2016, el proceso Gestión Comunicaciones, adelantó el proceso de elaboración y estructuración del Plan de Medios, así mismo elaboró el PEC 2016-2019. Se llevó a cabo la firma del convenio con el Fondo Mixto de Cultura de Boyacá, asegurando la puesta en marcha del Plan de Medios en los diferentes medios de comunicación de la jurisdicción de Corpoboyacá y la proyección, diseño y elaboración del material P.O.P, requeridos por los procesos de la entidad. 
        Se fortaleció el equipo de comunicaciones con la contratación de un comunicador social, un técnico en fotografía, un estudiante de comunicación social y un diseñador gráfico. Así mismo por medio del convenio interinstitucional con el Fondo Mixto de Cultura de Boyacá, se llevó a cabo la contratación del personal a cargo de la actualización y funcionamiento de la página web corporativa o Web Master.
         Se participó en la Feria Internacional del Medio Ambiente en donde se realizaron de foros, mesas de trabajo, socializaciones, reuniones, capacitaciones, talleres, encuentros departamentales. 
        Posicionamiento de la imagen corporativa y acciones que se adelantan desde la Corporación, en los principales medios de comunicación nacionales y regionales, donde se difunde el accionar de la Entidad, de igual manera al interior de la misma por medio de la red interna, comunicados y carteleras entre otros. Semanalmente se llevó a cabo la actualización de las redes sociales, página Web y canal en YouTube, con el desarrollo de estrategias comunicacionales encaminadas a difundir, socializar y posicionar a Corpoboyacá en los municipios de su jurisdicción.
         El proceso Gestión Comunicaciones sirvió de enlace entre las Subdirecciones de la Entidad y los operadores a cargo de la producción del material POP corporativo, con el fin de garantizar la calidad de los diferentes productos elaborados, cumpliendo con los requerimientos de calidad que están establecidos en el manual de identidad corporativa.
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia162 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>1,
          'value' => 100,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia163 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity164,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia164 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity165,
          'year' =>1,
          'value' => 82,
          'description' => 'Se resolvieron 42 trámites permisionarios vigencias 2012-2015 
        De vigencias anteriores era de 90; se resolvieron durante la vigencia 2016 42 trámites quedando un total de 48 por resolver',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia165 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>1,
          'value' => 95,
          'description' => '200 expedientes para decisiones de fondo.
        395 expedientes  para impulso procesal de los sancionatorios aperturados entre 01/01/2012 y 31/12/2015 265 expedientes iniciados durante el 2016, para lo cual debía darse impulso procesal al 75% de los procesos sancionatorios que corresponde a 198 impulsos. 
        Durante el 2016 se realizaron 1158 actos administrativos propios del proceso sancionatorio, de los cuales se generaron 263 Autos (23%) y 865 Resoluciones (75%) relacionadas con actuaciones procesales propias de los trámites sancionatorios contempladas en la Ley 1333 de 2009
        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia166 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity167,
          'year' =>1,
          'value' => 20,
          'description' => 'Se hizo seguimiento a 500 expedientes, que comprendió visita, concepto técnico y acto administrativo u oficio de requerimiento a través de los cuales se retroalimenta a los titulares para que ajusten sus actividades a los parámetros señalados por la autoridad ambiental y al marco legal vigente. Varios de estos seguimientos, terminaron con el inicio de acciones sancionatorias por el incumplimiento de las obligaciones; cumpliendo la meta establecida del 25% de los 900 seguimiento programados en el 2016',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia167 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity168,
          'year' =>1,
          'value' => 300,
          'description' => 'Para el año 2016 se realizaron 344 operativos de control a la movilización de productos maderables y no maderables, tráfico de fauna, minería, emisiones atmosféricas, recurso hídrico, planes de contingencia, fuentes móviles, fuentes fijas (ruido) y ecosistemas de páramo con el   acompañamiento de la fuerza pública; como resultado se realizó la imposición de medidas preventivas, suspensión de actividades, decomiso de material forestal y especies de fauna. ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia168 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>1,
          'value' => 22,
          'description' => 'Se proyectó realizar seguimiento a los  87  municipios de la jurisdicción de la Corporación de los cuales se realizo seguimiento a 46 con un cumplimiento del 25% de los establecidos 

        ',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia169 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity170,
          'year' =>1,
          'value' => 1,
          'description' => '',
          'date_report' => '2016-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia170 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>2,
          'value' => 36,
          'description' => 'Se avanza en el desarrollo de otras actividades correspondientes a la Fase de Diagnóstico en los siguientes componentes:  Caracterización básica de la cuenca, Clima, Geología, Hidrografia, Morfometría, Pendientes, Hidrología, Geomorfología, Capacidad y Uso de las Tierras, Coberturas y uso de la Tierra, cracterización de las condiciones de riesgo, Actividades complementarias y de SIG .  
        Se continua con el proceso para la vigencia 2018.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia171 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity2,
          'year' =>2,
          'value' => 41,
          'description' => 'Se tienen productos a satisfacción por la interventoria y la Corporación, se esta en proceso de publicación según Decreto 1640/12 para atender las recomendaciones y observaciones de los actores de la cuenca, luego proceder a la adopción',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia172 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity3,
          'year' =>2,
          'value' => 34.5,
          'description' => 'Se tienen productos a satisfacción por la interventoria y la Comision Conjunta, se esta en proceso de publicación según Decreto 1640/12 para atender las recomendaciones y observaciones  de los actores de la cuenca, luego proceder a la adopción. Contrato en proceso de liquidación. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia173 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>2,
          'value' => 50,
          'description' => 'En el marco de las Comisiones Conjuntas con las Autoridades Ambientales que lideran los procesos de Formulación y/o actualización de los POMCAS se han adelantado las Fases:  Procesos Formales, AprestamientoDiagnóstico, Zonificación y Formulación, logrando alcalzar las siguientes metas:

        1.  POMCA Garagoa: 80%
        2.  POMCA Cravo Sur:  65%
        3.  POMCA Alto Suárez: 95%
        4. POMCA Carare Minero: 75%
        5.  POMCA Río Negro:  45%',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia174 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia176 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>2,
          'value' => 3.33,
          'description' => 'Se adjudicó Contrato  de Consultoria CCC 2017239 suscrito con ANDEAN GEOLOGICAL SERVICES LIMITADA AGS, cuyo objeto es: formular los planes de manejo de las áreas protegidas parque natural regional pan de azúcar-el consuelo y la reserva forestal protectora el Malmo y la actualización del plan de manejo del Parque Natural Regional Unidad Biogeográfica Siscunsí - Ocetá de acuerdo a lo establecido en el decreto 1076 de 2015.

        Se realizó la revisión de la infromación secundaria, se definió cronograma de actividades y se dio incio a los acercamientos con las alcaldías de los municipios de Sogamoso, Aquitania, Mongua y Monguí.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia177 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia179 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia181 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia183 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>2,
          'value' => 33.24,
          'description' => ' logrado un 98,75% de avance en las actividades previstas de asistencia técnica y jurídica, con los municipios priorizados para la vigencia 2017, debido a que el municipio de Siachoque no contó con disponibilidad para desarrollar la visita de campo y la segunda mesa de trabajo previstas.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia184 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>2,
          'value' => 100,
          'description' => '.  Solicitud del municipio de Paipa, realizando la lectura de documento correspondiente al Proyecto de Revisión General al POT y efectuando  su devolución por no cumplir con los requisitos de Ley para la concertación de asuntos ambientales.  Se realizó mesa de trabajo con el municipio con el fin de socializar los resultados de la revisión por parte de Corpoboyacá.

        2.  Se atendió solicitud de concertación de asuntos ambientales del Plan Parcial Guanzá del municipio de Paipa, realizando devolución de la documentación por incumplimiento de requisitos.

        3.  En el mes de mayo se atendieron las solicitudes de trámite de concertación de asuntos ambientales de los proyectos de Revisión General a los EOT de los municipios de Güicán y Maripí, generando su devolución por incumplimiento de requisitos técnicos, especialmente en materia de Gestión del Riesgo de Desastres.

        4.  Se atendió solicitud de concertación de asuntos ambientales de la Modificación Excepcional del EOT del municipio de Toca , realizando lectura y análisis del proyecto radicado  y devolución de la documentación por iinadecuada incorporación de Determinantes Ambientales.

        5.  Se inició trámite de concertación de asuntos ambientales de la Revisión General del Esquema de Ordenamiento Territorial de Cómbita, realizando verificación de documentos y de determinanets ambientales y de gestión del riesgo.  Se realizaron tres mesas  y tres visitas técnicas en el marco de la concertación.  El municipio decide retirar el documento soporte, al evidenciar algunas debilidades que considiera deben ser subsanadas para inicar nuevamente el trámite de concertación de asuntos ambientales.

        6. Se recibió solicitud de trámite de concertación de asuntos ambientales de la Revisión General del EOT de Maripí y de Modificación Excepcional de el municipio de Socotá,  realizando verificación de documentos y de determinanets ambientales y de gestión del riesgo, decidiendo devolución de los mismos por incumplimiento de requisitos a través de mesas de trabajo con cada administración municipal.

        7.  Se recibe solicitud de trámite deconcertación de ambientales de los procesos de Revisión General de los POT e os municpios de:  Cóbita, Tinjacá y Nobsa, cuyas deciisones finales se tomarán en la vigecia siguiente, atendiendo a los plazos establecidos por Ley. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia185 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia186 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia189 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>2,
          'value' => 95,
          'description' => 'Apoyar técnicamente para el fortalecimeinto del SIMAP- Duitama
        Acciones para el fortalecimiento de la pagina WEB del SIRAP-CORPOBOYACA
        Se formuló el plan de manejo de RNSC del páramo de Agüeros como una estrategia de fortalecimiento de las áreas protegidas adscritas al SIRAP
        Avance en la implementación de acciones para el fortalecimiento del Plan Padrino. Se recibieron y entregaron los elementos divulgativos del SIRAP como: botilitos, Carpetas, Esferos, Camisas y carrieles a los actores sociales, como estrategia de divulgación corporativa. Se suscribio contrato de consultoria CCC 2017200 para generar los insumos de la declaratoria de área protegida regional de bosques secos del Chicamocha. Se adelantó la revisión en SIG de la información predial del Parque Natural Regional  RFP, El Peligro y de la RFP El Peligro.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia190 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>2,
          'value' => 15,
          'description' => 'Se  envió a Parques Naturales Regionales las coberturas vegetales Corin Land Cover del PNR Cortadera, para comenzar el proceso de contraste y realizar la inscripción y registro del PNR Cortadera',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia191 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>2,
          'value' => 100,
          'description' => 'Se realizó el sexto encuentro del Comité Regional de Áreas Protegidas – CORAP Se realizaron las tres mesas de trabajo con los subcomités regionales,  municipales y privados logrando el fortalecimeinto de  cada una de las categorrias de las áreas protegidas.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia192 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia193 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>2,
          'value' => 91,
          'description' => '37 Brigadas conformadas ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia194 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>2,
          'value' => 1,
          'description' => 'desarrollo del proyecto de investigación “Establecimiento De Estrategias De Monitoreo De Contenidos De Carbono En Parcelas Permanentes De Monitoreo (Ppm) En Los Complejos De Páramo De La Jurisdicción De Corpoboyacá',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia195 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>2,
          'value' => 0.93,
          'description' => 'Actividades en campo de la consultoria  dieciseis municipios
        Se realizaron las respectivas socializaciones y capacitaciones en los municipios intervenidos con el objeto del proyecto
        elaboración de un Pendón, 200 Gorras y la impresión de 5.000 folletos de la campaña Evitar la Deforestación y sus consecuencias
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia196 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia197 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>2,
          'value' => 7,
          'description' => 'Se ejecuto proyecto BPIN 20160110009 recursos PGN
        Se realizon convenio con Corpochivor para atender restauracion en provincia Lengupa
        actividades de reforestación y cercado de proytección en predios y nacimientos de la microcuenca de Quebrada Honda y Salitre, afluentes del DMI Sochagota
         convenio con la fundación Uwa KARIT IBITA',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia198 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>2,
          'value' => 750,
          'description' => 'actividades de mantenimiento a los establecimientos y aislamientos ejecutados en el marco del proyecto IMPLEMENTAR ACCIONES DE RESTAURACIÓN ECOLÓGICA EN EL PARQUE NATURAL REGIONAL SERRANÍA DE LAS QUINCHAS Y AREAS CONEXAS EN LA PROVINCIA DE OCCIDENTE DEL DEPARTAMENTO DE BOYACÁ del año 2015.
        mantenimiento a especies del  convenio con la fundación Uwa KARIT IBITA',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia199 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia200 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia203 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>2,
          'value' => 200,
          'description' => 'Se realizaron los desembolsos para la adquisición de los predios la rosita, el olvido y el cajon del municipio de Combita (20 has);  y la selva y la union en el municipio de Miraflores (43.2 has). 
        Durante el mes de diciembre se expidieron cinco conceptos técnicos, a solicitudes de los municipios de Tunja, El Espino, San Mateo, Boavita y San José de Pare.; y se expiden siete conceptos técnicos a solicitudes de las empresas TGI y PAREX en marco de inversión 1% proyectos petroleros.
        Se estan adelantando el traspaso del predio La Montaña con 85.5 hectáreas adquirido por TGI en el municipio de Páez en el marco de compensación ambiental de obligaciones impuestas por la Corporación. 
        Se encuentra en traspaso los predios adquiridos en compensación ambiental de la empresa CONPROS al municipio de Otanche, predios San Isidro, Palo Bonito y San Agustin, con un área total de 109 has, cumpliendo la meta de adquisición 200 has, para la protección y conservación de ecosistemas estratégicos que surten de agua a acueductos.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia204 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia205 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>2,
          'value' => 100,
          'description' => 'i) Se Formuló el Plan de Ordenamiento Ecoturistico para el Parque Natural Regional Serranía El Peligro, como insumo para el desarrollo del ecoturismo-turismo natural, (Contrato de consultoría No. CCC 2017-189).    ii) Se implementaron acciones relacionadas con el Distrito de Manejo Integrado Sochagota y su área de influencia (Contrato de prestación de servicios No. CPS 2017-144).  iii) Se reactivó el COLAP en la vereda Cañas y se participó en el Comite regional en Tunja, se evaluaron predios para presentar proyecto de restauración y se continúo con el trabajo con municipios de Mongui, Mongua y Sogamoso y comunidad local para implementar el Plan de Ordenamiento Ecoturistico del PNR Siscunsí - Ocetá (Funcionarios de Corpoboyacá),  iv) En el   PNR Rabanal, en coordinación con el municipio de Samacá se identificaron y evaluaron 5 predios, en áreas de importancia para la conservación del recurso hidrico, con el fin de que sean adquiridas por el ente territorial (funcionarios de Corpoboyacá), v) Las acciones implementadas en el PNR Serranía de las Quinchas se describen en el proyecto Restaurar áreas con vocación forestal. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia206 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia207 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>2,
          'value' => 5.4,
          'description' => 'Investigación el cual tiene por objetivo identificar la   Preferencia de hábitat y densidad poblacional de la Alondra cornuda (Eremophila alpestris peregrina) en el embalse La Copa (Toca – Boyacá – Colombia
        uministro de plántulas de pino romeron y otros insumos, como estrategia para iniciar con actividades de  conservación de flora amenazada',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia208 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>2,
          'value' => 0.3,
          'description' => 'Se atendieron  en el Hogar de Paso (CNV 2017-001), 175 individuos de fauna silvestre producto de operativos de decomiso, entregas voluntarias y rescates',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia209 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia210 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>2,
          'value' => 1,
          'description' => 'Consolidación del Grupo de Respuesta al Conflicto (GRECO) como estrategia de manejo del conflicto entre humanos y carnívoros silvestres, por casos de depredación de ganado, en Jurisdicción de Corpoboyacá',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia211 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia212 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>2,
          'value' => 18,
          'description' => 'se plantearon objetivos y metas para identificar los sitios propensos a la dispersión de esta especie invasora y las medidas para su control a través del Establecimiento de patrones de distribución espacial y los mecanismos de dispersión local y regional de la especie, estimación de la densidad poblacional del caracol gigante africano de cada municipio, en relación a las coberturas y/o locaciones urbanas, estudios histológicos sobre las principales estructuras y tejidos del caracol gigante, descripción del ciclo de vida, los ritmos biológicos y asociaciones con coberturas y/o locaciones urbanas en los municipios objeto de estudio, diseño de estrategias de control del caracol africano en los municipios objeto de estudio',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia213 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia214 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>2,
          'value' => 6,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia215 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia216 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>2,
          'value' => 33,
          'description' => 'Se han efectuado 33 eventos de capacitación con 400 asistentes sobre temas relacionados con Protección del medio ambiente, practicas amigables con el medio ambiente, siembra de cercas vivas, cambio climático, agricultura orgánica, sistemas silvopástoriles',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia217 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia218 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>2,
          'value' => 2,
          'description' => 'Se realizo el lanzamiento de la  ventanilla de negocios verdes en la Camara de Comercio de Sogamoso con la participacion de 100 usuarios y entidades regionales como la UPTC, ONG´s, entre otros minas y energia
        La ventanilla minera se alimentara con los resultados del convenio con el ministerio de minas 
        Estas ventanillas estan ubicadas en la pagina web de corpoboyaca
        UPM priorizadas convenio GGC No. 247 de 2017 82
        UPM con tramite ambiental Vigente ante CORPOBOYACA 38
        UPM sin tramite ambiental ante CORPOBOYACA  44
        Autorizaciones Temporales seleccionadas para el convenio  10
        Municipios donde se ubican las UPM priorizadas  28
        Minerales  de las UPM priorizadas  arcilla , carbón,  arena,  asfaltita, caolín, caliza, puzolana, roca fosfórica, materiales de construcción, esmeraldas.
        Charlas de acompañamiento realizadas a las  82 UPM priorizadas.  tres acompañamientos  por UPM para un total de   246 acompañamientos.
        Actividades de divulgación de convenio  1 Convocatoria Concejo de Sogamoso, 2 Charlas de capacitación autoridades municipales cobre licenciamiento de A. T. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia219 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia220 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>2,
          'value' => 15,
          'description' => 'estudio de capacidad de carga del PNR serranía las Quinchas.95% por ciento del documento denominado lineamientos del ecoturismo en le PNR serranía las Quinchas.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia221 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia223 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>2,
          'value' => 0.95,
          'description' => ' 54 visitas de seguimiento de los hornos de Cal  y Alfareros, con  Seguimiento al proyecto de reconversión tecnológica una (1) visita por mes a cada proyecto, tanto a proyectos de reconversión de alfareros, como de caleros. En los municipios de Sogamoso y Nobsa',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia224 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>2,
          'value' => 100,
          'description' => 'Mas bosques  implemento la plataforma de pagos del proyecto de erradicacion de fuentes como estrategia de pago por servicios ambientales convenio que va hasta el año 2019',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia225 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>2,
          'value' => 1,
          'description' => 'Se realizaron 450 vistas de monitoreo al sector calero y Alfarero, por cada visita se levantó un acta de visita diligenciado y con firma de los productores o usuarios',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia226 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>2,
          'value' => 1,
          'description' => 'Se ejecuto convenio con la empresa FUNDAREC para la  Implementación de Producicón mas limpia en el carbón (35 umps) en los municipios de Paipa, Chivata, Combita, Tunja entre otros',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia227 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>2,
          'value' => 1,
          'description' => 'Se realizo la implementacion de criterios ambientales tecnicos y sociales a 5 empresas hacia la estrategia nacional de negocios verdes con el fin de que estas empresas realicen procesos de reconversion, produccion y comercio con el fin de ser viables como negocios verdes',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia228 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia229 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia232 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia236 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>2,
          'value' => 2,
          'description' => 'Desarrollo de la Octava versión del programa Hospital Sostenible
        Implementación de la estrategia denominada   Mejoramiento del desempeño ambiental de 9 establecimientos de alojamiento y hospedaje',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia237 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>2,
          'value' => 100,
          'description' => 'Recepción de 44 solicitudes de inscripción en el registro de generadores de residuos peligrosos -RESPEL, 8 registros RUA- Sector manufacturero, e inscripción de 1 propietario en el Inventario Nacional de PCB, verificación de información citada al IDEAM',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia238 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>2,
          'value' => 2,
          'description' => 'Desarrollo de 2 campañas  de recolección de residuos posconsumo durante los días 12 al 17 de Junio, y del 7 al 8 de noviembre.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia239 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia240 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>2,
          'value' => 25,
          'description' => 'Revision del programa de aprovechamiento del PGIRS de 87 municipios de la jurisdicción.

        Acompañamiento al proceso de formulación de la Política Departamental para la Gestión Integral de los Residuos Sólidos a la Dirección de Medio ambiente, Agua Potable y Saneamiento de la Gobernación. 

        Participación en la actualización del plan operativo de  la Mesa Plan Departamental Ambiental (PDA).
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia241 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>2,
          'value' => 9,
          'description' => 'Fortalecimiento de recurso humano dirigido al seguimiento de implementación de los componenetes ambientales de los PGIRS de la jurisdicción',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia242 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>2,
          'value' => 1,
          'description' => 'rientación para la formalización de las Asociaciones recicladores de Tunja, Paipa , Duitama, Sogamoso, Soata, Puerto Boyaca y Villa de Leyva, previendo la gradualidad de inlcusión en el esquema de la prestación del servicio público de aseo.

        Fortalecimiento de las organizaciones de recicladores formalizadas en el proceso operativo de Estaciones de  Clasificación y  Aprovechamiento de residuos sólidos- ECAS',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia243 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>2,
          'value' => 1,
          'description' => 'Desarrollo del quinto encuentro regional de reciclaje en el municipio de Paipa, para los 87 municipios de la jurisdicción, tema central Marco Tarifario',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia244 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>2,
          'value' => 0.4,
          'description' => 'Esta actividad no fue adelantada, teniendo en cuenta que los entes territoriales objeto de apoyo, no dieron alcance a los requisistos técnicos y legales para el fin propuesto.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia245 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia246 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>2,
          'value' => 24,
          'description' => 'Documento (ajustado) de análisis y diagnóstico de la condición actual del río Chicamocha en el tramo que va desde los nacimientos de los ríos La Vega y Jordán, hasta el punto antes de iniciar el embalse La Playa.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia248 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia249 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity80,
          'year' =>2,
          'value' => 1.97,
          'description' => 'Revision cartografica de informacion secundaria de POMCA del Rio Suarez y EOTs de los municios de Arcabuco, Gachantiva, Villa de Leyva y Chiquiza. DIAGNOSTICO: se realizó la revisión y análisis de información secundaria (Programas de monitoreo de calidad y cantidad del agua existentes, Censos de usuarios, Inventario de obras hidráulicas, Oferta y demanda del agua,) y la recopilación de información necearía para alimentar el modelo hidrológico de oferta hídrica. Se revisaron las bases de datos de trámites y expedientes de recurso hídrico y se alimentó la base de datos preliminar de usuarios del recurso hídrico',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia250 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia253 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>2,
          'value' => 20,
          'description' => 'Durante el año 2017 fueron allegados para evaluación a CORPOBOYACÁ 58 documentos de Programas de Uso Eficiente y Ahorro de Agua – PUEAA, el estado de estos PUEAA´s es el siguiente: Evaluación y aprobación: 30 PUEAA´s, Evaluación: 15 PUEAA, Requerimientos 3 PUEAA´s y pendientes por evaluar los cuales fueron entregados por los usuarios a final de la vigencia: 10 PUEAA´s. Superando la meta en 7 PUEAA´s formulados',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia255 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia256 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>2,
          'value' => 78,
          'description' => 'Impulso procesal a 368 radicados.
        Proyección de 430 autos de inicio.
        Se realizaron 205 visitas .
        Elaboración de 144 conceptos técnicos.
        Proferir 110 resoluciones otorgando o negando la solicitud elevada.
        Se realizaron 169 visitas .
        Elaboración de 325 conceptos técnicos.
        Proferir 314  resoluciones otorgando o negando la solicitud elevada.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia257 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia258 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia260 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>2,
          'value' => 0.78,
          'description' => 'Documento de los estudios y la definición de la zona de ronda',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia261 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia262 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>2,
          'value' => 27,
          'description' => 'En el mes de diciembre,  se ingresaron 15 tramites de concesión de aguas en la plataforma SIRH',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia263 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia264 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>2,
          'value' => 25,
          'description' => 'Se apoyo CONSTRUCCIÓN DE COMPONENTES AUXILIARES PARA LA OPERACIÓN DE LA PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES PTAR DEL MUNICIPIO DE SOGAMOSO – BOYACÁ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia265 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia266 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>2,
          'value' => 1,
          'description' => 'Se realizó extracción de aproximadamente 2500 m3 de maleza acuatica en los sitios Hato Laguna, Rancho Tota y Llano de Alarcon, con el parque automotor (2 Cosechadoras, Transportador, Elevador de Orilla y Volqueta)',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia267 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia268 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia271 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia273 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>2,
          'value' => 100,
          'description' => 'Se revisaron las solicitudes recibidas durante el año y se actulizo la base de datos de permisos de recurso hidrico, permisos de aprovechamientos forestales, fuentes fijas, quejas infracciones, licencias ambientales, mineria y mineria ilegal.
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia274 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>2,
          'value' => 100,
          'description' => 'Se actualizó cartografia proveniente de procesos misionales, permisos de aprovechamientos forestales, fuentes fijas, quejas infracciones, licencias ambientales, mineria y mineria ilegal',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia275 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia277 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>2,
          'value' => 10,
          'description' => 'Se realizo contratacion para el mantenimiento del aplicativo Almera',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia278 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>2,
          'value' => 10,
          'description' => 'Se realizo contratacion para el mantenimiento del aplicativo Geoambiental',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia279 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>2,
          'value' => 10,
          'description' => 'Se realizo contratacion para el mantenimiento del aplicativo Sysman',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia280 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia281 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>2,
          'value' => 650,
          'description' => 'Se han digitalizado 660 portadas de publicaciones',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia282 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>2,
          'value' => 400,
          'description' => 'Se han actualizado 400  registros en KOHA',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia283 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>2,
          'value' => 20,
          'description' => 'Se realizo la digitalización de expedientes misionales y su correspondiente actualización en el sistema geoambiental.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia284 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia285 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>2,
          'value' => 10,
          'description' => 'Se contrato con las firmas  GEOINSTRUMENTOS S.A.S. y SUMIMAS S.A.S',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia286 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>2,
          'value' => 20,
          'description' => 'Se contrato con las firmas  E&C INGENIEROS,  ESRI COLOMBIA SAS, licenciamiento de AUTOCAD, NEX COMPUTER S.A.
         y I3NET S.A.S.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia287 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>2,
          'value' => 5,
          'description' => 'Con ETB, Para la conexión a internet de la sede de Tunja, con Azteca comunicaciones Colombia S.A.S para regionales',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia288 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>2,
          'value' => 100,
          'description' => 'Contrato con con EFORCERS S.A. y SUMMIMAS S.A.S',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia289 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia291 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>2,
          'value' => 2.4,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia292 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia293 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>2,
          'value' => 7,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia294 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia295 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity126,
          'year' =>2,
          'value' => 33,
          'description' => 'servicio de internet banda ancha de las estaciones de calidad del aire,mantenimiento de aires acondicionados, adquisicion de termohigrometros, acreditacion ante el IDEAM de las matrices Agua y Aire,mantenimiento y calibracion  de equipos de medidores de flujo, mantenimiento correctivo de equipos de material particulado
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia296 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>2,
          'value' => 20,
          'description' => 'Se elabora documento en el cual se refleja el estado de la calidad del aire en la jurisdiccion y el trabajo que se viene realizando en el seguimiento del mismo, con las estaciones de calidad del aire en la jurisdiccion',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia297 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>2,
          'value' => 100,
          'description' => 'Reporte de informacion al SISAIRE de las estaciones de calidad del aire ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia298 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia299 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>2,
          'value' => 100,
          'description' => 'monitoreo y caracterizacion de aguas termoninerales y adquicion de sondas para las estaciones ubicadas en el lago sochagota, ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia300 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>2,
          'value' => 100,
          'description' => 'monitoreo de cuenca lago de Tota y Sochagota',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia301 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia302 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>2,
          'value' => 0.58,
          'description' => 'Identificacion y monitoreos  a sujetos pasivos. Por condiciones meteorologicas se realizo prorroga y finaliza el 7 de febrero.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia303 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>2,
          'value' => 0.9,
          'description' => 'monitoreo y caracterizacion de aguas termoninerales y adquicion de sondas para las estaciones ubicadas en el lago sochagota',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia304 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>2,
          'value' => 0.85,
          'description' => 'monitoreo de cuenca lago de Tota y Sochagota',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia305 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia306 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>2,
          'value' => 100,
          'description' => ' calibracion acreditada en temperatura, mantenimiento preventivo de equipos MEMMERT,servicio de Mantenimiento y Calibración de los equipos Destilador de agua y Ultrapurificador de agua, servicio de Mantenimiento y Calibración de los equipos: pHmetro Metrohm 691, Titulador automático Metrohm Titrino Plus 877, Destilador de Nitrógeno Büchi K35, Digestor Büchi K-424, Scrubber Büchi B-414, servicio de Mantenimiento preventivo del equipo Extractor de solventes VELP SER148, servicio de mantenimiento del los equipos marca THERMO SCIENTIFIC,calibracion acreditada en volumen de material de vidrio, mantenimiento del Turbidimetro,  compra de equipo (Desionizador),calibracion acreditada de balanza digital
        ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia307 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>2,
          'value' => 1,
          'description' => 'IDEAM para pruebas interlaboratorios',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia308 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia309 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>2,
          'value' => 1,
          'description' => 'Se ha entregado informacion de 44  municipios',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia310 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>2,
          'value' => 1,
          'description' => 'El proceso de cooperación con  ASOCARS se adelanta de acuerdo a lo previsto.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia311 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>2,
          'value' => 1,
          'description' => 'Se realizo  el 20 y 21 de diciembre de 2017',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia312 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia315 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia318 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia320 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>2,
          'value' => 2,
          'description' => 'realizacion del V Encuentro Departamental de la Red de Jovenes de Ambiente Nodo Boyacá, participación de la delegacion de la Red de Jóvenes de Ambiente Nodo Boyacá al VIII Encuentro Nacional de Jovenes de Ambiente.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia321 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>2,
          'value' => 10,
          'description' => 'III Version del Programa Recuperando Sueños',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia322 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>2,
          'value' => 4,
          'description' => 'fechas ambientales tales como:Domingo de Ramos,Dia del Reciclaje, Dia del Medio Ambiente, Dia de la Tierra, Dia de la capa de ozono.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia323 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>2,
          'value' => 1,
          'description' => 'Entrega del reconocimiento  Espelitia Dorada con el proposito de visibilizar la gestión ambiental liderada por personas u organizaciones que promueven la protección ambiental, el manejo sostenible de los recursos naturales, la conservación y el fomento de una cultura de responsabilidad ambienta',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia324 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>2,
          'value' => 5,
          'description' => 'fortaleciento del Comité Departamental de Educación Ambiental, realización del IV Foro Departamental de Educación Ambiental y elaboración de  cartilla orientadora en temas de educación ambiental',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia325 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>2,
          'value' => 1,
          'description' => 'Diseño  de material de apoyo a la gestion de las ONG mediante la elaboración de brochure y video de presentación de las mismas',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia326 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia327 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>2,
          'value' => 100,
          'description' => 'Asistencia tecnica a la operatividad de los CIDEA municipales en acompañamiento a las sesiones realizadas y actividades programadas, fortaleciento del CIDEA Municipal de la jurisdicion de Corpoboyacá. Encuentro primer taller fortalecimiento a CIDEA municipales.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia328 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>2,
          'value' => 6,
          'description' => ' municipio de Tibasosa contribuyendo al mejoramiento de las condiciones de vida, a través de la aplicación de estrategias de participación y fortalecimiento comunitario,  Municipio de Paz de Rio, en el fortaleciemitno de fuentes hidricas y manejo de residos solidos,  impelmentacion del PROCEDA “Educación Ambiental Comunitario Fortalecimiento del Proceso de Turismo Rural de Base Comunitaria, Con Criterios de Desarrollo Sostenible en las  Provincias Norte y Gutierrez, MADS y CORPOBOYACA con la participación de las Juntas de Acueducto que se abastecen de la Microcuenca del Rio Olarte afluente del Lago de Tota',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia329 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>2,
          'value' => 8,
          'description' => 'actualización de los Proyectos Ambientales Escolares  de las I.E de los  municipios de Cuitiva, Chiquiza, Arcabuco, Belen, Tibasosa, Boavita, Socha  y San Pablo de Borbur.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia330 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia331 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>2,
          'value' => 100,
          'description' => 'Elaboración y estructuración del Plan de Medios, para ser ejecutado los meses de julio, agosto, septiembre, octubre, 45 medios de comunicación de la Jurisdicción, especialistas en radio, web, prensa escrita y televisión, que emitieron y difundieron 10080 audios de piezas radiales, 5600 anuncios de piezas audiovisuales, 130 artículos y/o avisos, que dieron a conocer el quehacer de la Corporación y sus principales proyectos. noviembre y diciembre. Durante el 2017 fueron proyectados y difundidos 180 comunicados internos, además del envío y difusión de mensajes dirigidos a la planta de personal, informándoles sobre acontecimientos especiales como eventos, exaltación de onomásticos, entre otros. Así como el acompañamiento a la planeación y ejecución de las diferentes actividades que adelantaron los procesos de la Corporación. También se adelantaron 5 jornadas de capacitación enfocada a la apropiación de las redes sociales, dirigida a todos los funcionarios de la Corporación, tanto de la sede central como de las cuatro oficinas territoriales. Fueron publicadas alrededor de 2000 notas informativas en nuestras redes sociales como Facebook, Instagram y Twitter, 84 publicaciones en la Página Web, 55 vídeos en el canal de YouTube y transmitidos 51 Video Foros interactivos, . Fueron proyectados y difundidos 70 boletines de prensa, para medios de comunicación nacionales y departamentales; se produjeron y transmitieron 30 cápsulas informativas en formato televisivo, 30 programas radiales, 30 cápsulas informativas y 10 cuñas, a lo largo del 2017, con temáticas misionales de interés general, que permitieron avanzar en el posicionamiento de la imagen corporativa. Además se contrató al técnico en fotografía. Se llevó a cabo el apoyo, cubrimiento y difusión de 208 eventos dentro y fuera de la Corporación, además de la realización de Foros, Mesas de Trabajo, Socializaciones, Reuniones, Capacitaciones, Talleres, Encuentros Departamentales. Escenarios en los que el proceso adelantó todos los requerimientos logísticos y comunicacionales requeridos por cada uno de ellos. Se contrataron un técnico en comunicación social y un diseñador gráfico. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia332 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>2,
          'value' => 100,
          'description' => 'Se produjeron 4 videos temáticos de POMCAS, Gestión del Riesgo, Cultura Ambiental y Gestión de la Corporación; los cuales se difundirán durante el 2018, por los diferentes canales de comunicación con los que cuenta la Corporación. Se realizó el diseño e impresión de más de 2000 piezas de material publicitario corporativo, para la difusión y posicionamiento de la Imagen Institucional en los 87 municipios de su Jurisdicción y la comunidad en general.  Además se contrató al experto en diseño gráfico. ',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia333 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity164,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia334 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity165,
          'year' =>2,
          'value' => 100,
          'description' => 'se han  decidido 98 trámites de Vigencias anteriores, se han  decidido 34 trámites, de los cuales 29 han sido en términos',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia335 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>2,
          'value' => 87,
          'description' => ' decidido 250 procesos sancionatorios ambientales, todos debidamente firmados y enumerados,  proyectado 1140 actos administrativos de impulso procesal de los trámites sancionatorios ambientales en curso correspondientes a vigencias anteriores, todos debidamente firmados y enumerados., de 312 procesos sancionatorios iniciados en la actual vigencia se ha dado impulso procesal a 140.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia336 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity167,
          'year' =>2,
          'value' => 24.05,
          'description' => 'seguimientos a 20 expedientes con Programa de Uso Eficiente y Ahorro del agua',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia337 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity168,
          'year' =>2,
          'value' => 100,
          'description' => 'se han realizado 358 operativos, con corte al 30 de diciembre de 2017.',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia338 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>2,
          'value' => 94,
          'description' => 'Se proyectó realizar seguimiento al PSMV de los 87 municipios de la jurisdicción de CORPOBOYACÁ, de los cuales a la fecha se ha realizado seguimiento a 82',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia339 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity170,
          'year' =>2,
          'value' => 1,
          'description' => '',
          'date_report' => '2017-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia340 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity1,
          'year' =>3,
          'value' => 6,
          'description' => 'Se adelantaron las siguientes actividades:
        Fase de aprestamiento - 100%.  Fase de Diagnostico - 93,6% . 
        Se encuentra en revisión por parte de la Supervisión documento presentado con ajustes por parte de la Consultoría. 
        Fase de Prospectiva y Zonificación Ambiental - Se llevan a cabo los espacios de participación con los actores sociales de la cuenca y el Consejo de Cuenca, en desarrollo de ésta.  ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia341 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity4,
          'year' =>3,
          'value' => 50,
          'description' => 'Se asistió y participó en las mesas técnicas de las Comisiones Conjuntas de los siguientes POMCAS :
        1. Cuenca Carare - Minero. 
        2. Cuenca Cravo Sur. 
        3. Cuenca Garagoa. 
        4. Cuenca Río Cusiana.
        5, Cuenca Río Negro
        Se aprobaron mediante Resolución los POMCA Cuenca alta del rio Chicamocha,cuenca media y baja rio Suarez, cuenca alta del rio Suarez, Cuenca Cravo Sur, cuenca del rio Garagoa',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia344 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia346 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>3,
          'value' => 15.83,
          'description' => 'Se elaboró el documento técnico para la formulación de los planes de manejo del PNR Pan de Azúcar el Consuelo, RFP El Malmo y actualización del PNR Siscunsi Oceta.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia347 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>3,
          'value' => 100,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia348 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia349 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity10,
          'year' =>3,
          'value' => 0.85,
          'description' => 'Se realizó el contrato de consultoria CCC 184 que tiene por objeto   FORMULAR EL PLAN DE MANEJO DEL HUMEDAL DELIMITADO CIÉNEGA DE PALAGUA LOCALIZADO EN EL MUNICIPIO DE PUERTO BOYACÁ DE ACUERDO A LO ESTABLECIDO EN LA RESOLUCIÓN 196 DE 2006 DEL MINISTERIO DE AMBIENTE.  CM. SE adelantó la elaboración del tiene elaborado el componente diagnostico, de zonificaición y propuesta del componente programático',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia350 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia351 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>3,
          'value' => 0.2,
          'description' => 'El proceso de Evaluación Misional realizó seguimiento al PGAR 2009-2019 con corte a 30 de junio de 2018

        Se identificaron los lineamientos del orden Internacional, Nacional y regional para la formulación del PGAR 2020 - 2031

        Se determinaron los requerimientos mínimos y las capacidades institucionales para la formulación del PGAR',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia352 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia353 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>3,
          'value' => 31.21,
          'description' => 'Asistencia tecnica según solicitud',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia354 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>3,
          'value' => 100,
          'description' => 'Asistencia tecnica según solicitud',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia355 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia356 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia359 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>3,
          'value' => 89.32,
          'description' => 'Se elaboró la información de los folletos divulgativos para el SIRAP Corpoboyacá y los ecosistemas de páramo, los cuales fueron enviados a la oficina de comunicaciones para su diseño y posterior impresión. Además, se avanza en la recopilación de toda la información para la cartilla del SIRAP-Corpoboyacá. Se elaboró la base de datos de la información predial con la que cuenta la Corporación analizar el número de predios existentes dentro del Parque Natural Regional Serranía El Peligro y la Reserva Forestal Protectora Sierra El Peligro como punto de partida en el proceso de estudio de tenencia de tierra dentro del Sistema Regional de Áreas Protegidas (SIRAP) de Corpoboyacá.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia360 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>3,
          'value' => 0.85,
          'description' => 'Se cuenta con la información necesaria para comenzar con el proceso de registro del área protegida Distrito Regional de Manejo Integrado Lago Sochagota y la cuenca que lo alimenta; la cual fue incorporada para el proceso de registro del DRMI Lago Sochagota y la cuenca que lo alimenta ante el Registro Único Nacional de Áreas Protegidas (RUNAP) del Sistema de PNN.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia361 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>3,
          'value' => 1,
          'description' => ' Séptimo Encuentro del Comité Regional de Áreas Protegidas (CORAP)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia362 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia363 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>3,
          'value' => 100,
          'description' => 'Recorridos Diagnósticos realizados como acciones de prevención frente a la 1er. y 2a. temporada de lluvias a las fuentes hídricas: Río Tuta y Chicamocha (Tuta), Canal Cuche (Santa Rosa y Nobsa), Quebrada el Ciral (Sogamoso), Río Sáchica (Sáchica), Rio Sutamarchán (Sutamarchán), Quebrada El Guirre y Calderón (Belén), Río Surba (Duitama), Quebrada La Aroma (Duitama).

        Acompañamiento permanente a las acciones de manejo y de implementación del Plan de Acción Específico - PAE del Fénómeno de Remoción en Masa de gran magnitud del municipio de San Eduardo. CNV2018004 - ASOCIACION COLOMBIANA DE HIDROGEOLOGOS - ACH - $35.714.286
        REALIZACIÓN DEL VI CONGRESO COLOMBIANO DE HIDROGEOLOGÍA – PAIPA, DEL 22 AL 28 DE JULIO DE 2018 - ESPACIO PARA EL INTERCAMBIO DE CONOCIMIENTOS EN TEMAS DE HIDROGEOLOGÍA – AGUA SUBTERRÁNEA, ALTERNATIVA DE SOLUCIÓN A PROBLEMAS DE ABASTECIMIENTO PROVOCADOS POR EL FENÓMENO “EL NIÑO”.

        ACTA DE TERMINACION DEL 19/08/2018 Y ACTA DE LIQUIDACION DEL 12/12/2018',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia364 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia365 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity26,
          'year' =>3,
          'value' => 1,
          'description' => '100% de actividades ejecutadas para socializar medidas que recuzcan la deforestación',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia366 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia367 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity28,
          'year' =>3,
          'value' => 9,
          'description' => 'Acciones a desarrolladas en cuanto al mantenimiento y protección forestal de los establecimientos y aislamientos priorizados ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia368 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>3,
          'value' => 450,
          'description' => 'Ejecución de los mantenimientos según lo rpoyectado. Se supero la meta establecida para el año 2018',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia369 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia370 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity31,
          'year' =>3,
          'value' => 100,
          'description' => 'para el Municipio de Mongua, se intervinieron  dos pedios  para un total 175 Hás,  para   el Municipio de Mongui se  dos predios con un total  128 Hás,  para  el municipio de sogamoso  tres predios  con un total 590 Hás, para un total de 769 Has de las cuales en 65 Has fueron procesos de restauración activa y en las restantes se aisladas para continuar con los procesos de restauración espontanea.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia371 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity32,
          'year' =>3,
          'value' => 500,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia372 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia373 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>3,
          'value' => 200,
          'description' => ' convenio 2018-014 con el municipio de Boavita  para la adquisición del predio La Lavandera que tiene un área de 94 has. Se reciben los predios Los Alpes con un área de 29,4 has, La Envidia con un área de 22,1 has y La Primavera con un área de 68,9 has, como parte de la obligación de inversión del 1% para el campo Jazmin, operado por Mansarovar Energy Ltd. Estos predios quedan a nombre de CORPOBOYACA. Con el municipio de Miraflores no se pudo realizar convenio, ya que no se presento la totalidad de la documentación.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia374 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia375 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>3,
          'value' => 95.8,
          'description' => 'Se firmo el convenio 2018-016  para el proyecto BIO Elaboración de un protocolo para la valorización ambiental, económica y jurídica del servicio ambiental de captura de carbono en suelos de Páramo en el Departamento de Boyacá: caso de estudio Páramo de La Cortadera  , se realiza desembolso. Se suscribio convenio No. 2018-014 para aunar esfuerzos tecnicos financieros entre la Corporación Autónoma Regional de Boyacá y el Municipio Boavita, para la adquisición del predio La Lavandera en la Vda. San Bernardo del Municipio La Uvita, para conservación y protección del recurso hidrico, aportando $19.929215, se realiza desembolso. Se suscribio convenio No. 2018-015 con el Fondo Mixto, entre las actividades se encuentra implementación de acciones de sensibilización y divulgación en torno a las áreas protegidas de la jurisdicción,  con un aporte para esta actividad por $62.750.000; se realiza desembolso por valor del 70% ($43.925.000), el restante 30% se desembolsará por parte de la Oficina de cultura ambiental una vez liquidado el convenio. Sin presupuesto de este proyecto, se han realizado las siguientes acciones: Proyecto Restauración Ecológica en Tota - Bijagual - Mamapacha, se inicio el proceso de siembra en el Parque Natural R. Siscunsí - Ocetá. En el PNR Serranía de las Quinchas: se continua con procesos de mantenimiento de restauración y manejo de fauna silvestre. En el PNR Serranía El Peligro: se formuló un proyecto para implementación del plan de ordenamiento ecoturistico, se presentó al Ministerio de Medio Ambiente - Negocios Verdes, el cual fue aprobado para ejecución en el 2019. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia376 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia377 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>3,
          'value' => 5.16,
          'description' => 'Para el año 2018, en el marco del convenio No. 2016-014 suscrito con la UPTC se están realizando monitoreos de las especies Alondra cornuda y Tingua bogotana

        En ejecución el convenio 2018-001 con la Fundación Universitaria Juan de Castellanos donde se realizó protocolo de atención y atención al 100% d

        Acciones para conservación de Oso andino ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia378 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>3,
          'value' => 1,
          'description' => ' A través del convenio 2018-001 con la Fundación Universitaria Juan de Castellanos, se dio manejo al 100% de la fauna silvestre recibida por Corpoboyacá, la opción de disposición final más alta fue la liberación, gracias al tratamiento recibido en Hogar de paso, en total se atendieron 220 ejemplares durante el 2018. Avance actividad del 100%.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia379 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia380 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia381 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia382 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>3,
          'value' => 20,
          'description' => 'Se elaboró y compiló la información para el diseño del folleto y afiche de retamo espinoso y Caracol Gigante Africano.

        Se realizó visita técnica atendiendo solicitud del municipio de Paipa donde se reporta la presencia de la especie potencial invasora Procambarus clarkii (Langostilla o Cangrejo rojo) y se envió oficio al Ministerio de Ambiente y Desarrollo Sostenible - MADS solicitando apoyo para el manejo de esta especie. 

        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia383 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia384 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>3,
          'value' => 21,
          'description' => 'Se han realizado 40 visitas Institucionales con el fin de acordar acciones y definir actividades de buenas prácticas ambientales (producción más limpia).  
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia385 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia386 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>3,
          'value' => 35,
          'description' => 'Se efectuaron 38 capacitaciones con 400 asistentes en temas ambientales como el cuidado de los recursos naturales, normatividad ambiental, cambio climático, buenas prácticas agrícolas, biopreparados y agricultura orgánica; siembra de cercas vivas, compostaje.
        Se realizaron cuatro (4) Escuelas Ambientales Rurales (ESAR), como apoyo al Proyecto Sectores Productivos y Negocios Verdes Sostenibles, en los municipios de Aquitania, Tibasosa, Firavitoba, y Chivata con la participación de 47 usuarios',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia387 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia388 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>3,
          'value' => 2,
          'description' => 'Ejecución del convenio interadministrativo GGC No. 247 de 2017 de MINMINAS y Corpoboyacá con el fin de desarrollar actividades de legalización en el sector minero; para ello se nombró profesionales de diferentes áreas como ingenieros de minas, ambientales, trabajador social y abogada, se seleccionaron 82 UPM (unidades productoras minera), en las cuales se realizó el acompañamiento a los titulares mineros para la formalización de su actividad.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia389 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia390 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>3,
          'value' => 12.75,
          'description' => 'Se han realizado tres reuniones del nodo de produccion de negocios verdes.
        Se implementación del programa de Negocios Verdes mediante la aplicación de los criterios de negocios verdes a seis (6) empresas ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia391 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>3,
          'value' => 2.7,
          'description' => 'Ejecución de acciones en la elaboracion de 5 Planes de Manejo Ecoturisticos',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia392 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia393 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>3,
          'value' => 1,
          'description' => 'Se realizaron las visitas de monitoreo mensual a los proyectos que se ejecutaron con el fin de mejorar los sistemas de captación de emisiones para los hornos que hacen parte de la Reconversión Tecnológica en el sector calero del municipio de Nobsa: ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia394 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>3,
          'value' => 80,
          'description' => 'Se avanza en el desarrollo de la plataforma Banco2 para la comercialización de bonos de carbono CO2, emitidos por la descontaminación del Valle de Sogamoso.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia395 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>3,
          'value' => 1,
          'description' => 'Se realiza visitas a 150 usuarios pertenecientes al proyecto erradicación de fuentes contaminantes, en los municipios de Nobsa Boyacá y Sogamoso Boyacá',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia396 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>3,
          'value' => 0.9,
          'description' => 'Se desarrolló e implemento un convenio No.2018-005  cuyo objetivo  es “ Aunar esfuerzos técnicos y financieros entre la Corporación Autónoma Regional de Boyacá, CORPOBOYACÁ y la ONG FUNDAICÓN PARA EL DESARROLLO AMBIENTAL Y SOCIAL DE COLOMBIA- FUNDEREC para contribuir con la “implementación de buenas prácticas mineras en 35 Unidades Productivas Mineras UPM de Carbón en el marco del proyecto: “Implementación de la estrategia “Boyacá 2030, 20% menos Carbono,” ubicadas en los municipios de Sogamoso, Paipa, Chivata, Motavita y Samacá”.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia397 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>3,
          'value' => 0.3,
          'description' => 'Se programo apoyar la siembra de alevinos e implementacion de practivas pisicolas en el municipio de Puerto Boyaca, se inicio proceso de concurso de meritos, se declaro desierto y se vuelve a iniciar el proceso',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia398 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia399 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity60,
          'year' =>3,
          'value' => 100,
          'description' => 'Ejecución de lo programado',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia400 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity61,
          'year' =>3,
          'value' => 200,
          'description' => 'Ejecución de lo programado',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia401 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia402 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia406 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>3,
          'value' => 1.1,
          'description' => 'En ejecución el proyecto Hospital Sostenible Novena Versión, suscrito con ECOEFICIENCIA , por medio de CNV-2018002. 

        convenio Hoteles Sostenibles en el municipio de Villa de Leyva, el cual fue suspendido el día 23 de octubre de 2018, teniendo en cuenta que los establecimientos beneficiarios solicitaron su aplazamiento a fin de cumplir con compromisos adquidridos previamente con COTELCO y por inicio de temporada alta.
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia407 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>3,
          'value' => 100,
          'description' => 'Reporte del 100% de la informacion recibida',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia408 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>3,
          'value' => 2,
          'description' => 'Se realiza jornada de recolección de residuos posconsumo para los días 28 a 1 de junio.

        Contratación de apoyo logístico para desarrollo de actividades con el sector automotríz e implementación del registro PCB.

        Coordinación interinstitucional de operativo al sector automotríz en el municipio de Sogamoso a desarrollarse en el mes de octubre, desarrollo de  operativo en 88 establecimientos generadores de residuos derivados de hidrocarburos en el municipio de Sogamoso.
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia409 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia410 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>3,
          'value' => 25,
          'description' => 'Revision del PGIRS en su componente de aprovechamiento con los municipios priorizados',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia411 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>3,
          'value' => 9,
          'description' => 'Ejecución de lo programado ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia412 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>3,
          'value' => 1,
          'description' => 'Se realizó reunión con Asociaciones de Recicladores, con el fin de definir los temas para el apoyo de la Corporación. 

        Se brindó asesoría a la Asociación Asortibasosa

        Entrega de 30 overoles a cada una de las asociaciones de recicladores informales organizados ARFUSOG y RECIPAIPA, de Sogamoso y Paipa, respectivamente.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia413 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>3,
          'value' => 1,
          'description' => 'Desarrollo del  SEXTO ENCUENTRO REGIONAL DE RECICLAJE en Tunja. Temas abordados:   Retos y Procesos del nuevo marco normativo de aprovechamiento y formalización de los recicladores como prestadores   y   La Georreferenciación como estrategia para la definición y acceso al incentivo tarifario para aprovechamiento de residuos sólidos urbanos  . Convocados 87 municipios, 15 organizaciones de recicladores de la jurisdicción, Gobernación,  operadores del servicio de aseo para residuos no aprovechables, Entes de Control.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia414 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>3,
          'value' => 1,
          'description' => 'Se realizó visita de reconocimiento a un proyecto para manejo de residuos orgánicos en el municipio de Chivatá, interesado VADAMA.

        Se realizó visita de verificación a proyecto de planta de aprovechamiento de residuos orgánicos en el municipio de Iza.

        Revisión de condiciones de operación de la planta de aprovechamiento en el municipio de Santana',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia415 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia416 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>3,
          'value' => 23,
          'description' => 'Se hizo entrega de los productos de alternativas de adecuación hidráulica y diseños de adecuación hidráulica del tramo 1 (Nacimientos ríos Vega y Jordán hasta el embalse la Playa).

        Se continúan haciendo entregas de los ajustes a la Ronda Hídrica de acuerdo a la Guía técnica de criterios para el acotamiento de las rondas hídricas en Colombia. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia418 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia419 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity82,
          'year' =>3,
          'value' => 2,
          'description' => 'Se hizo la publicación de los dos avisos de prensa en cumplimiento al decreto 1076 de 2015 Articulo 2.2.3.2.13.5 Proyecto de distribución de aguas, se publico el proyecto de distribución  en las alcaldías PNNC SFFI, Corpoboyacá, Personería e Inspecciones de Policía. 

        Se publicó el acto administrativo en el diario oficial con lo cual se dio cumplimiento al 100% del contrato y a los requisitos técnicos y legales exigidos en el decreto 1076 del 2015. Por esta razón el contrato CCC 2016 189 se terminó y liquido el 28 de diciembre de 2018.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia422 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia423 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>3,
          'value' => 20,
          'description' => 'Evaluacion y formulacion de los PUEAA programados',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia425 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia426 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>3,
          'value' => 94,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia427 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia428 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia430 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>3,
          'value' => 0.83,
          'description' => 'Se hizo entrega de los productos de alternativas de adecuación hidráulica y diseños de adecuación hidráulica del tramo 1 (Nacimientos ríos Vega y Jordán hasta el embalse la Playa).

        Se continúan haciendo entregas de los ajustes a la Ronda Hídrica de acuerdo a la Guía técnica de criterios para el acotamiento de las rondas hídricas en Colombia.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia431 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia432 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>3,
          'value' => 27,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia433 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia434 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>3,
          'value' => 25,
          'description' => 'El dia 18 de Octubre de 2018 se firmo el Convenio CNV 2018 011 entre el Municipio de Samaca, la ESPB SA ESP y CORPOBOYACA, cuyo objeto es “AUNAR ESFUERZOS TÉCNICOS, ADMINISTRATIVOS Y FINANCIEROS ENTRE  LA EMPRESA DEPARTAMENTAL DE SERVICIOS PÚBLICOS DE BOYACÁ S.A. E.S.P, LA CORPORACIÓN AUTÓNOMA REGIONAL DE BOYACÁ - CORPOBOYACA Y EL MUNICIPIO DE SAMACÁ; PARA GARANTIZAR LOS RECURSOS NECESARIOS QUE PERMITAN LA EJECUCIÓN DEL PROYECTO DENOMINADO “CONSTRUCCIÓN PLANTA DE TRATAMIENTO DE AGUAS RESIDUALES DOMESTICAS SAMACÀ, BOYACÁ, CENTRO ORIENTE. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia435 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia436 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>3,
          'value' => 0.9,
          'description' => 'Para el mes de Diciembre se continua con la implementación del esquema administrativo para la operación de servicios en playa blanca, en maqrco del cual se adelantaron las siguientes acciones: 
        - Se contó con personal para el manejo del area del parqueadero de manera permanente.
        - Se realizaron reuniones de articulación interinstitucional con la Policia Fluvial, de transito, ambiental y de turismo para coordinar el manejod e la temporada alta. 
        - Se contó con personal para el registro y control de vehiculos y cobro de tarifas de manera permanente.
        - Se consolidaron las estadisticas del ingreso de vehiculos, numero de personas del periodo comprendido del primero de agosto y 31 de diciembre. 
        - Se realizo el manejo, traslado y disposicion final de residuos solidos de Playa Blanca.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia437 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia438 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>3,
          'value' => 10,
          'description' => 'Se cumplio con lo programado',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia439 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>3,
          'value' => 10,
          'description' => 'Se cumplio con lo programado',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia440 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia441 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia443 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>3,
          'value' => 100,
          'description' => 'Actualizacion de las capas misionales a diciembre de 2018',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia444 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>3,
          'value' => 100,
          'description' => 'En proceso de actualizacion de los tramites permisionarios priorizados al Sistema de Información Corporativo',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia445 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia447 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>3,
          'value' => 10,
          'description' => 'En implementacion el subsistemas de Información Almera',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia448 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>3,
          'value' => 9,
          'description' => 'En implementacion el subsistemas de Información Geoambiental',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia449 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>3,
          'value' => 10,
          'description' => 'En implementacion el subsistemas de Información Sysman y otros',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia450 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia451 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>3,
          'value' => 650,
          'description' => 'Digitalizacion de lo programado',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia452 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>3,
          'value' => 400,
          'description' => 'Implemetacion del Koha',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia453 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>3,
          'value' => 30,
          'description' => 'Digitalizacion de los expeientes progrmados',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia454 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia455 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>3,
          'value' => 4.98,
          'description' => 'Actualización de lo priorizado',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia456 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>3,
          'value' => 20,
          'description' => 'Implementación de mecanismos de seguridad corporativos',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia457 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>3,
          'value' => 5,
          'description' => 'Conexión garantizada',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia458 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>3,
          'value' => 100,
          'description' => 'Correo corporativo garantizado',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia459 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia461 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>3,
          'value' => 3,
          'description' => 'Estudios previos para adquisicion de estacion meteorologica ( PORCESO DE ADQUISICION DE REACTIVOS E INSTRUMENTOS -  S.A 011 DEL 2018 ) ,CDC 2018169
        Calibracion de pistofonos
        Entrega de mapa de ruido y capacitacion de medicion de ruido y normatividad de emision de ruido y ruido ambiental al municipio de Duitama. 
        Contrato para por parte de IDEAM para auditoria externa 26 de octubre radicado No 150-12999',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia462 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia463 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>3,
          'value' => 7,
          'description' => 'Ejecucion del contrato CDS 2018134 Para realizar operativos en control de gases
        OPERATIVOS EN LOS CORREDORES VIALES TUNJA- BOGOTA , TUNJA- PAIPA Y DUITAMA - SOGAMOSO, MUNICIPIO SOGAMOSO, MUNICIPIO DE TUNJA (CDA) Y PARQUE REECRACIONAL DEL NORTE, MUNICIPIO DE PAIPA, MUNICIPIO DE DUITAMA, MUNICIPIO DE DUITAMA (CDA), MUNICIPIO DE SOGAMOSO(CDA)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia464 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia465 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>3,
          'value' => 20,
          'description' => 'Informe de calidad del aire mes de enero, febrero , marzo, abril, Mayo junio, julio,agosto, septiembre   y octubre e informe trimestral (enero a marzo) (Marzo a Junio)   (Julio a Septiembre) (septiembre - Diciembre)',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia467 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>3,
          'value' => 100,
          'description' => 'Reporte de informacion al SISAIRE de las estaciones de calidad del aire ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia468 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia469 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>3,
          'value' => 100,
          'description' => 'Las 15 estaciones estan en operacion, se esta haciendo verificacion mensual a cada una de ellas con su respectivo mantenimiento preventivo, asi mismo su reporte de datos',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia470 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>3,
          'value' => 100,
          'description' => 'Reportes al SIAC y SIRH',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia471 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia472 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>3,
          'value' => 0.3,
          'description' => 'Elaboracion de estudios previos para monitoreos y analsis del sector, Licitacion Publica 001 del 2018 
        -CDS2018181 monitoreo a vertimientos y cuencas priorozadas, teniendo en cuenta que en el proceso de licitacion el proponente se presento con un valor mas bajo al inicialmente definido pornla coproracion, los recursos se utilizaran en una adicion al contrato',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia473 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>3,
          'value' => 0.8,
          'description' => 'suministro de reactivos para monitoreos',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia474 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>3,
          'value' => 0.8,
          'description' => 'Ejecución del 80% según programación',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia475 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia476 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>3,
          'value' => 82,
          'description' => 'Equipos adquiridos por diferentes modalidades de contratacion',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia477 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>3,
          'value' => 2,
          'description' => 'Participación en las priebas programadas',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia478 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia479 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>3,
          'value' => 1,
          'description' => 'La actividad se realizó bajo a modalidad de contratación de cinco (5) profesionales, los cuales realizaron seguimiento en TREINTA (30)  municipios de la jurisdicción de la Coporación, seguimiento que se realiza con sistema de información de los municipios, y liquidación realizada por el grupo auditor.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia480 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>3,
          'value' => 1,
          'description' => 'Las actividades de cooperación y asistencia horizontal se desarrollan normalmente',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia481 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>3,
          'value' => 1,
          'description' => 'Con la expedición del Decreto 1499 de 2017 la actividad se debe redefinir y ajustar.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia482 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia485 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia486 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia488 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia490 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>3,
          'value' => 2,
          'description' => 'Adelanto de manera conjunta de la campaña  “QUE TU RAMO, SEA EL ÁRBOL QUE CUIDARAS” en los Comité Interinstitucional de Educación Ambiental Municipales de la jurisdicción CIDEA.
        Contrato CCS 2018172 ,para apoyo logistico en el desarrollo del VI ncuentro Departamental de la Red de Jovenes de Ambiente Nodo Boyacá realizado en el Municipio de Villa de Leyva.
        Apoyo por parte de la Red de Jóvenes de Ambiente en la campaña “QUE TU RAMO, SEA EL ÁRBOL QUE CUIDARAS” en los Comité Interinstitucional de Educación Ambiental Municipales-CIDEA y CIDEABOY.
        Servicio de impresion de material para el encuentro departamental de jovenes de ambiente CDS 2018149.
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia491 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>3,
          'value' => 10,
          'description' => ' Socializacion de la IV version del Programa Recuperando Sueños en las Instituciones Educativas de los municipios de Miraflores, Siachoque, Tuta, Paipa, Samacá, Firavitoba, Chivata, Toca,   Güican de la Sierra y Socota          Contrato de prestación de servicios de comunicadora social  para el apoyo de actividades en el marco de la implementacion del programa.
        Contrato CDS 2018219 en el suministro de los parques infantiles en desarrollo del Programa Recuperando Sueños.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia492 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>3,
          'value' => 4,
          'description' => 'Se adelanto el contrato para el apoyo logistico de la Feria Internacional de Medio Ambiente.
        Definición de material pedagogico para el apoyo de las actividades del proceso.
        Se adelanto el contrato de apoyo logistico para el suministro de refrigerios para las activiades de la oficina de Cultura Ambiental  
        Celebración conmemoración del Día del Agua, Dia de la Tierra,  Dia del Reciclaje y Medio Ambiente.
        Servicio de impresion de material de educación ambiental en desarrollo de los eventos de educación ambiental. CDS 2019149',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia493 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>3,
          'value' => 1,
          'description' => 'Se adelanto el convenio 2018010 con el Fondo mMxto de Cultura de Boyacá , con el proposito “Desarrollar acciones encaminadas a fortalecer procesos de gestión de la cultura ambiental, mediante el Programa Compromiso con la Producción Ambientalmente Sostenible - COMPAS, en empresas dedicadas a la producción y comercialización de bienes y/o servicios                                                                                                                                                                    Contrato de prestación de servicios de comunicadora social  para el apoyo de actividades en el marco de la implementacion de la estrategia espeletia dorada.
        II Version Espeletia Dorada  en la categorias merito ambiental educativa en las subcategorias proyectos ambientales escolares y  proyectos de investigación
        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia494 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>3,
          'value' => 0.05,
          'description' => '
        Participación en la construccion del plan operativo de la vigencia 2018,                                                              Contrato de prestación de servicios de comunicadora social  para el apoyo de actividades en de educación ambiental . 
        Estructuracion de la estrategia de educacion ambiental dirigida a sedes rurales de Instituciones Educativas en los municipios de Nobsa,Sogamoso,Duitama, Santa Rosa de Viterbo y Siachoque, denominda coloreando escuelas CDS 2018146.
        Servicio de impresion de material en marco del IV  Foro de Educación Ambiental    Ecoturismo,Etnoeducacio´n y Perpectiva de Genero   ,organizado por el CIDEABOY CDS 2018149                         ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia495 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>3,
          'value' => 1,
          'description' => 'Se viene realizando el acompañamiento a las ONG con el fin de documentar en medio audiovisual el trabajo articulado de estas con la Corporación, ademas para fortalecer su actuar se apoyan con la elaboración de los portafolios de servicio.
        Se adelanto convenio 2018009 con la ONG CORPONATURALEZA con el proposito  desarrollar el fortalecimiento de las ONG de las jurisdiccion de Corpoboyaca´ realizando el II Encuentro de ONG de la jurisdiccion de la Corporación.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia496 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia497 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>3,
          'value' => 100,
          'description' => 'Se realizó la orientación a los Comites Interinstitucionales de Educación Ambiental de los  municipios de las provincias de Lengupa, Norte y Gutierrez, Centro,Ricaurte, Sugamuxi ,Tundama y Occidente en la formulación de los planes operativos del comité.
        Estructuracion de la estrategia de educacion ambiental dirigida a sedes rurales de Instituciones Educativas en los municipios de Nobsa,Sogamoso,Duitama, Santa Rosa de Viterbo y Siachoque, denominda coloreando escuelas CDS 2018146.
        Contrato de impresion de guia metodologica CIDEA,PRAE y PROCEDA   CDS 2018149.
        Apoyo a los municipios en material de educación ambiental, en desarrolllo de eventos ambientales.

        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia498 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>3,
          'value' => 6,
          'description' => 'Se adelantó convenio 2018003    con la  ONG PRIMAVERA   en la orientaciones a organizacioens de base en la implementación  de Proyectos Comunitarios de Educación Ambiental PROCEDA en los municipios de Soata, Miraflores,Moniquira, Tasco y Santa Rosa de Viterbo.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia499 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>3,
          'value' => 8,
          'description' => 'Se realizaron talleres en la orientacion de la metodologia para la elaboracion de los PRAE de las instituciones educativas de las provoncias de Centro,Tundama, Sugamuxi,Ricaurte,Valderrrama,Norte,Gutierrez y Occidente.

        Se adelantó convenio 2018003    con la  ONG PRIMAVERA  que se encargada de la actualizacion y/o formulacion de los Proyectos Ambientales Escolares de las siguientes instituciones educativas : Institución Educativa Antonio Nariño,Institución Educativa Marco Fidel Suárez,Institución Educativa Saza,Institución Educativa La Libertad,Institución Educativa Técnica el Portachuelo,Institución Educativa Sergio Camargo,Institución Educativa López Quevedo e Institución Educativa El Chapetón',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia500 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia501 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>3,
          'value' => 100,
          'description' => 'El 30 de noviembre quedo vigente con el Fondo Mixto de Boyacá un nuevo Convenio a través del cual se pauta y difunde el Plan de Medios Corporativo que vincula a los medios de comunicación de mayor alcance e influencia en la jurisdicción de la Corporación, este nuevo plan lo integran 49 medios de formato radial, televisivo, prensa escrita y alternos (web), por medio de los cuales durante el mes de noviembre fueron socializados eventos como la entrega de parques, encuentro de ONG´s y resultados de jornadas silvopastoriles, entre otros temas misionales de la Entidad. Dentro de esta actividad se han desembolsado recursos a los contratistas del proceso Gestión Comunicaciones: tres Comunicadores Sociales, un Diseñador Gráfico y un Fotógrafo. Siendo cancelados por concepto de honorarios y pagos al Plan de Medios del fondo mixto $324.670.396. Fueron proyectados y difundidos 65 comunicados internos, además del envío y difusión de mensajes dirigidos a la planta de personal, informándoles sobre acontecimientos especiales como eventos, exaltación de onomásticos, entre otros. Así como el acompañamiento a la planeación, ejecución y difusión de las diferentes actividades que adelantaron los procesos de la Corporación. Se dio cumplimiento a lo establecido según el Plan de Medios. Se llevó a cabo el apoyo, cubrimiento y difusión de 14 eventos dentro y fuera de la Corporación, además de la realización de Foros, Mesas de Trabajo, Socializaciones, Reuniones, Capacitaciones, Talleres. Escenarios en los que el proceso adelantó todos los requerimientos logísticos y comunicacionales requeridos por cada uno de ellos. Diseño, lanzamiento y ejecución de la campaña interna ¨Olimpiadas Navideñas¨. ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia502 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>3,
          'value' => 100,
          'description' => 'Se produjeron y transmitieron por los principales medios de comunicación departamentales y redes sociales corporativas 36 cápsulas informativas y 18 productos más para promocionar Aliados del Ambiente y el accionar corporativo en formato televisivo, además de 21 productos radiales. Se han diseñado e impreso de más de 2,000  piezas de material publicitario corporativo, para la difusión y posicionamiento de la Imagen Institucional en los 87 municipios de su Jurisdicción y la comunidad en general.  ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia503 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity164,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia504 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity165,
          'year' =>3,
          'value' => 100,
          'description' => 'Con corte a 31 de DICIEMBRE se decidieron en total  87 trámites de vigencias anteriores asi:
        Licencias Ambientales: 21
        Permiso de Emisiones: 14
        Aprovechamiento Forestal OOAF: 23
        Aprovechamiento Arboles Aislados AFAA: 29

        Con corte a 30 de DICIEMBRE DE 2018, se han decidido 105 Trámites permisionarios de la vigencia 2018, de los cuales  se han decidido en los tiempos estipulados 72, para un avance general de la meta del 69%.

        AFAA= Total decididos 94, En tiempos 68.
        OOLA-= Total decididos 7, En tiempos 3. 
        PERM= Total decididos 2, En tiempos 0.
        OOAF= Total decididos 2, En tiempos 1,',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia505 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>3,
          'value' => 77,
          'description' => 'Con corte a 30 de Diciembre de 2018 se han decidido 393  procesos sancionatorios ambientales, todos debidamente firmados y enumerados. Con lo cual se da cumplimiento a  la meta propuesta de 250 procesos.

        Con corte a 31 de Diciembre de 2018 se proyectaron 961 actos administrativos de impulso procesal de los trámites sancionatorios ambientales en curso correspondientes a vigencias anteriores, todos debidamente firmados y enumerados.

        De 170 procesos sancionatorios iniciados en la actual vigencia 2018, se dio impulso a 40 actos administrativos.



        ',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia506 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity167,
          'year' =>3,
          'value' => 25,
          'description' => 'A 31 de diciembre de 2018 se realizaron 20 seguimientos a expedientes con Programa de Uso Eficiente y Ahorro del agua                                                                                                                                               De los 600 seguimientos programados para la vigencia 2018,  a 31 de diciembre se han realizado 600 seguimientos.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia507 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity168,
          'year' =>3,
          'value' => 300,
          'description' => 'Para el 2018 se proyectó realizar 300 operativos. Hasta el 31 de diciembre del año 2018 se han realizado 318 operativos.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia508 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>3,
          'value' => 23,
          'description' => 'Se proyectó realizar seguimiento al PSMV de los 87 municipios de la jurisdicción de CORPOBOYACÁ, de los cuales hasta el mes dediciembre de 2018 se han realizado 80 seguimientos.',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia509 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity170,
          'year' =>3,
          'value' => 1,
          'description' => '',
          'date_report' => '2018-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia510 = DB::getPdo()->lastInsertId(); 




         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity5,
          'year' =>4,
          'value' => 92,
          'description' => 'Durante la vigencia, la Corporación continúa liderando la formulación del POMCA directos al Magdalena entre Ríos Negro y Río Carare (Código 2311) y participa en Comisión Conjunta en la actualización del POMCA río Cusiana (Código. 3519-01), la formulación del POMCA de la Cuenca Bajo Chicamocha (Código 2403-03) y aprobación del POMCA del río Carare Minero (2312).

        En ejecución del contrato de consultoría suscrito para la formulación del POMCA del río Directos al Magdalena entre Ríos Negro y Río Carare, se revisó la cuarta versión de los documentos de la fase de diagnóstico, y se emitió concepto técnico, lo cual fue insumo para que la Comisión Conjunta conformada junto con la Corporación Autónoma Regional de Santander y la Dirección de Gestión Integral de Recurso hídrico del MADS, aprobara los productos y actividades de fase.
        Publicación del POMCA Directos al Magdalena entre Ríos Negro y Río Carare (15 octubre 2019)',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia515 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity6,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia516 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity7,
          'year' =>4,
          'value' => 15,
          'description' => 'Mediante acuerdo 004 del 31 de enero de 2019, fue adoptado el Plan de Manejo del Distrito Regional de Manejo Integrado (DRMI) Lago Sochagota y la Cuenca que lo alimenta, ubicado en los municipios de Paipa, Firavitoba y Tuta, Departamento de Boyacá

        En el momento se están revisando los documentos finales para presentar al Consejo Directivo la actualización del Plan de Manejo del Parque Natural Regional Siscunsí Ocetá y la formulación del Plan de Manejo del Parque Natural Regional Pan de azúcar- el consuelo. 

        El 19 de junio se realizó reunión con el MADS, en la que se verificó estado de formulación y/o ajuste de Planes de Manejo de Reservas Forestales Protectoras y se suscribieron compromisos para adelantar ajustes, dentro de los cuales se encuentra la entrega final con los ajustes pertinentes solicitados por el MADS del documento técnico “Plan de Manejo Reserva Forestal Protectora Sierra el Peligro”, así como de la presentación del documento técnico “Plan de Manejo Reserva Forestal El Malmo”

        Los días 19 de junio y 3 y 4 de septiembre, se realizó reuniones con el MADS, en la que se verificó estado de formulación y/o ajuste de Planes de Manejo de Reservas Forestales Protectoras y se suscribieron compromisos para adelantar ajustes, dentro de los cuales se encuentra la entrega final con los ajustes pertinentes solicitados por el MADS del documento técnico “Plan de Manejo Reserva Forestal Protectora Sierra el Peligro”, así como de la presentación del documento técnico “Plan de Manejo Reserva Forestal El Malmo”

        Se tiene proyectado presentar ante consejo directivo los PM del PNR Siscunsí Ocetá y PNR Pan de Azúcar el Consuelo para el mes de diciembre.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia517 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity8,
          'year' =>4,
          'value' => 100,
          'description' => 'Durante el periodo se han realizado 3 reuniones de Comisiones Conjuntas (8 y 9 de abril, 25 y 26 de abril y 28 de junio), en las que se avanzó en la definición de la metodología para llevar a cabo la zonificación y definición de régimen de usos; igualmente se realizó seguimiento al avance y concertaron de acciones en el marco de la ejecución del proyecto Páramos: Biodiversidad y Recursos Hídricos en los andes del norte 

        Se continúa con la ejecución de las actividades previstas en el proyecto Páramos: Biodiversidad y Recusrso Hídricos en los Andes del Norte.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia518 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity9,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia519 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity11,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia521 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity12,
          'year' =>4,
          'value' => 100,
          'description' => 'Reunión de inicio en la que se socializaron los criterios y directrices definidos por el Responsable del proceso Gestión Gerencial y el Plan de trabajo general a seguir (21-03-2019). 

        Reunión de preparación con equipo interno para la formulación del PGAR (14 y 17-06-2019)
        Reunión con equipo interno para la formulación del PGAR, en la que se revisó avances de elaboración de documento de diagnóstico, el cual tiene un avance del 90% (10 y 11 de julio de 2019)
        Taller de formulación con el equipo definido (1, 2 y y 5 de agosto)
        Realización de 15 talleres de divulgación y consulta con los actores pririozados de las comunidades de las provincias Centro, Ricaurte, Tundama, Sugamuxi, Gutierrez, Norte y Valderrama, Lengupá y Márquez, y en los municipios de Puerto Boyacá, Pauna y Otanche,  (09, 12, 14, 15, 22, 23 y 27 de agosto, 4, 10, 25 y 26 de septiembre), así como con las RNSC (21-08-2019) y con las comunidades Embera y U´wa (10 y 30 de septiembre) obteniendo como resultado la identificación de los asuntos ambientales más importantes de cada provincia y percepción sobre objetivos y líneas estratégicas (dimensiones temáticas), durante la realización de los talleres los participantes construyeron visiones regionales para la gestión ambiental.
        Realización de taller lecciones aprendidas con el equipo interno de la Corporación, evaluando los logros, retos y resultados y lecciones aprendidas del PGAR 2009-2019.  21 de octubre 
        Realización taller dimensiones temáticas con el equipo interno de la Corporación en donde se socializaron los resultados de los talleres de divulgación y consulta y se presentó el análisis sistémico de la situación actual y las dimensiones temáticas. 22 de octubre 
        Taller de sistema de monitoreo y evaluación talleres con el equipo formulador obteniendo como resultado el sistema de monitoreo y evaluación del instrumento de planificación ambiental regional.
        Realizacion de taller de divulgación con el equipo formulador en donde se socializo el sistema de monitoreo y evaluación del instrumento de planificación, resultado de los talleres realizados los días 13 y 14 de noviembre.
        Radicación ante el Consejo Directivo para estudio y aprobación 03 de diciembre de 2019.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia522 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity13,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia523 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity14,
          'year' =>4,
          'value' => 23,
          'description' => 'Priorización de 10 municipios para prestación de asistencia técnica (Belén, Corrales, Pauna, Samacá, Sogamoso, Tota, Paz de Río, Sáchica, Socotá y San José Pare) y definición de ponderación de actividades a realizar: Mesa inicial de trabajo (30%), 2 Comunicaciones orientadoras (20%), Mesa de trabajo (30%), Visita técnica (20%).

        Realización Mesas iniciales de Trabajo con los municipios priorizados para Asesoría técnico jurídica en Seguimiento y Evaluación (25-02-2019) y Revisión y Ajuste de POT (26-02-2019)

        Seguimiento de asuntos ambientales concertados en los POT de los municipios de Aquitania, Belén,  Puerto Boyacá,  Sogamoso y Tota, 

        Seguimiento a 550 licencias de construcción y parcelación en suelo rural y rural suburbano, las cuales fueron reportadas por los municipios de Arcabuco, Belén, Betéitiva, Briceño. Busbanzá, Cerinza, Chivata, Chitaraque, Cómbita, Cóper, Cucaita, Duitama, El Espino, Firavitoba, Floresta, Iza, Moniquirá, Motavita, Muzo, Nobsa, Oicatá, Paipa, Panqueba, Pauna, Pesca, Quípama, Rondón, Sáchica, Sámaca, San Eduardo, San José de Pare, San Pablo de Borbur, Santa Rosa de Viterbo, Santa Sofia, Soata, Sogamoso, Sotaquira, Tibasosa, Tinjacá, Tipacoque, Toguí, Tununguá, Tuta y Vila de Leyva
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia524 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity15,
          'year' =>4,
          'value' => 100,
          'description' => 'Concertación  de Asuntos Ambientales del proyecto de revisión y ajuste del Esquema de Ordenamiento Territorial de los municipios de  Siachoque (28-06-2019), Chitaraque (05-11-2019)  y Tibasosa (10-10-2019), y del PBOT del municipio de Miraflores (28-06-2019),

        Los municipios de Chiquiza, Chivatá, Guacamayas, Oicatá, Otanche,  Páez ,  Soracá, Sutamarchán  y Tunja radicaron documentos para iniciar proceso de concertación de Asuntos Ambientales de revisión y ajuste de  Ordenamiento Territorial, sin embargo, una vez verificados los documentos se evidenció que no incorporaron en su totalidad las Determinantes Ambientales y la Gestión de riesgo. 
        Los municipios de Covarachía, Sativasur ,Socotá y Toca, radicaron documentos para iniciar proceso de concertación de Asuntos Ambientales de modificación excepcional de norma urbanística de sus Esquemas de Ordenamiento Territorial, sin embargo, una vez verificados los documentos se evidenció que estos no incorporaron en su totalidad las Determinantes Ambientales y la Gestión de riesgo, razón por lo que una vez expuesta la situación ante los municipios en reunión, estos retiraron los documentos. 


        Para resolver dudas relacionadas con el proceso de concertación de asuntos ambientales con el municipio de Miraflores y Tunja, se realizó mesa de trabajo con el municipio, el consultor y el Ministerio de Vivienda y Desarrollo Territorial (06-09-2019 y 27/11/30)

        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia525 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity16,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia526 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity19,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia529 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity20,
          'year' =>4,
          'value' => 87.5,
          'description' => 'Dentro de las acciones de fortalecimiento del SIRAP y los ecosistemas estratégicos (páramos y/o humedales), realizadas a la fecha, se destacan las siguientes:

        Áreas protegidas.
         Reunión con gobernación para avanzar en proceso de fortalecimiento del SIDAP Boyacá.
         Participación Consejo Nacional de Áreas Protegidas (CONAP) realizado en la ciudad de Bogotá el 5 de mayo. 
         Acompañamiento a delegación de la Corporación en visita técnica realizada en DRMI Bosques Secos del Chicamocha y participación en reunión para avanzar en la Formulación del Plan de Ordenamiento Ecoturístico, la cual se realizó el 26 de marzo. 
         Gestión de recursos ante el programa Riqueza Natural de USAID que permita el cumplimiento de los objetivos de conservación del Área protegida y el fortalecimiento del turismo rural del DRMI Bosques Secos de Chicamocha
         Reuniones con las administraciones municipales de Duitama, Nobsa y Tota, para fortalecimiento de los Sistemas Municipales de Áreas protegidas (09 y 16 de mayo y 07 de junio) y con el municipio de Páez, para conformación del SIMAP (18 de junio)

        Ecosistemas estratégicos – Humedales.
         Socialización de resultados finales y concertación de los programas y proyectos del Plan de Manejo del humedal Ciénaga de Palagua, con la comunidad de influencia directa de ejecución del proyecto (Ver Figura 10). 
         Presentación del componente estratégico del PM de Ciénaga de palagua, ante gremio de hidrocarburos para retroalimentación
         Participación en foro deliberativo para la protección y manejo sostenible del humedal Ciénega de palagua convocada por el Sistema de control fiscal participativo de la contraloría general de la nación
         Finalización del proceso de delimitación de los humedales priorizados en el municipio de Tunja, y adopción mediante Resolución 1336 del 8 de mayo de 2019.
         Finalización del proceso de delimitación del humedal El Cortez, adopción mediante Resolución 1474 del 16 de mayo de 2019 y socialización de resultados
         Finalización del proceso de delimitación del humedal El Rosal del municipio de Iza, y adopción mediante Resolución 1587 del 24 de mayo de 2019.
         Mesa de trabajo con WWF, Minambiente y Fundación montecitos para avanzar en análisis técnicos que permita proponer una figura de manejo para la preservación, restauración y uso sostenible del Lago de Tota.
        Ecosistemas estratégicos – Páramos.
         Participación en reunión con las comunidades de los municipios de Monguí, Gámeza, Socha, Toca, Tota, en las que se resolvió dudas sobre el proceso y alcance de la delimitación de los páramos Siscunsí- Ocetá, Pisba y Tota- Bijagual - Mapapacha respectivamente (Ver Figura 11).
         Participación en mesa de trabajo realizada con el Ministro y profesionales del MADS, del MADR y MME, para avanzar en la delimitación del complejo de páramo de Pisba.
         Participación en las mesas de trabajo realizadas por el MADS en los municipios de Socha, Gámeza y Socotá, en el marco de la delimitación del páramo de Pisba.
        Con el propósito de empoderar a la comunidad y brindar apoyo económico que promueva alternativas sostenibles, a la vez que se fortalece la presencia institucional en las áreas protegidas, junto con la gobernación de Boyacá, se inició la implementación del programa Guardaparques protectores del ambiente en 6 de las 13 áreas protegidas regionales y 1 de las 4 áreas protegidas nacionales, quienes han realizado visitas para el levantamiento de información primaria, predial, han apoyado el seguimiento y control y además han liderado y participado jornadas de reforestación. De los 16 guardaparques, son financiados con recursos propios de la Corporación',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia530 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity21,
          'year' =>4,
          'value' => 0.9,
          'description' => 'Declaratoria de DRMI Bosques Secos del Chicamocha. (Acuerdo 002 de 31 de enero de 2019), ubicado en los municipios de Boavita, Soatá y Tipacoque, el cual tiene un área de 12.655,24 ha.

        Homologación de DRMI Lago Sochagota y la cuenca que lo alimenta. Acuerdo 003 de 31 de enero de 2019, ubicado en los municipios de Paipa, Firavitoba y Toca, el cual tiene un área de 8.139,11 ha.

        La información para inscripción en el RUNAP de estas dos áreas protegidas, fue remitida en marzo de 2019 a la Subdirección de Gestión de Información de áreas Protegidas de Parques Naturales Regionales.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia531 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity22,
          'year' =>4,
          'value' => 100,
          'description' => 'Posicionamiento y divulgación del SIRAP.
        Diseño de un folleto informativo sobre los ecosistemas estratégicos de páramo, en el que se presenta el estado actual del páramo, su importancia como ecosistema estratégico para la nación, problemáticas y presiones que están generando su alteración, normatividad vigente y la visión de la Corporación de los páramos para avanzar en la protección, manejo y gobernanza con inclusión social.

        Realización del  Octavo encuentrro del Comité Regional de Áreas Protegidas (CORAP) con la participación de 340 personas, 23 entidades, 1 instituto de investigación, 4 universidades, 5 corporaciones, 1 gobernación, 40 RNSC, 10 SIMAPs y representantes de comunidades de 11 áreas protegidas regionales.

        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia532 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity23,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia533 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity24,
          'year' =>4,
          'value' => 100,
          'description' => 'Monitoreo a fuentes hídricas abastecedoras de acueductos urbanos -  Desabastecimiento por Posible Fenómeno   El Niño   2019
        - 43 municipios: Cómbita, Cucaita, Gachantivá, Motavita, Oicatá, Santa Sofía, Santana, Soracá, Sutamarchán, Tibasosa, Tópaga, Paipa, Sora, Santa Rosa de Viterbo, Floresta, Togüi, Nobsa, Sotaquirá, Firavitoba, Tuta, Villa de Leyva, Otanche, La Victoria, Quipama, Sáchica, Tinjacá, Arcabuco, Cerinza, Gámeza, Chiquiza, Pauna, El Espino, Chita, Socha, Corrales, San José de Pare, Cuitiva, Belén, Pesca, Tutazá, Tunungua, San Pablo de Borbur, Coper.
        - 67 fuentes abastecedoras principales monitoredas.

        Tala por riesgo inminente de caída:
        40 municipios: Aquitania (4) - Arcabuco (4) - Belén (1) - Briceño (1) - Chivatá (1) - Cómbita (2) - Cucaita (3) - Cuitiva (3) -  Coper (6) - Duitama (25) - El Espino (1) -  Firavitoba (3) - Maripí (1) -  Moniquirá (12) - Motavita (3) -  Muzo (1) - Nobsa (12) - Oicatá (1) - Otanche (1) - Paipa (4) - Panqueba (1) - Pauna (1) - Puerto Boyacá (28) - Sáchica (1) -  Samacá (4) - San José de Pare (5) - San Mateo (1) - Santa Rosa de Viterbo (1) - Soatá (3) - Sogamoso (23) - Siachoque (2) - Soatá (1) - Sotaquirá (1) - Sutamarchán (1) - Tinjacá (3) - Toca (2) - Togüi (1) -  Tota (1) - Tunja (34) - Tuta (6) - Villa de Leyva (23)
        Total solicitudes de Tala: 232

        Recorridos Diagnósticos:
        Firavitoba: Río Chiquito / Toca: Río Toca  / Tuta: Río Tuta / Sotaquirá: Río Sotaquirá 
        Sogamoso: Río Chiquito / Canal Vargas / Canal venecia
        Tinjacá: Río Tinjacá
        Oicatá: Quebradas La Mecha y Pionono
        Togüi: Río Ubaza

        Adicionalmente se ha realizado acompañamiento permanente a Plan de Acción Específico - PAE elaborado para atender el fenómeno de Remoción en Masa de gran magnitud ocurrido en el Municipio de San Eduardo, en el que activó la Comisión de Geólogos de Corpoboyacá y OPAD - Boyacá para monitoreo permanente y se realizó inspección a sitios críticos identificados para evaluar pertinencia de evacuación de aguas represadas en fuentes hídricas comprometidas a través del CMGRD.

        Con ocasión a los incendios de cobertura vegetal presentados, a la fecha se ha realizado la evaluación de las áreas afectadas en: 

        • Cómbita - Arcabuco registrado a finales de diciembre-2018 (Ver Figura 14)
        • Duitama - Paipa registrado a finales de diciembre-2018
        • Boavita, El Espino San Mateo, Sativasur, Soatá registrados a comienzos de enero-2019
        • Güicán, Tota, Mongua - febrero-2019
        • Aquitania -abril -19

        Se han atendido 111 solicitudes de tala por riesgo inminente de caída en 24 municipios de la jurisdicción. 

        En cumplimiento de las obligaciones de la Concurso de la Acción Popular 15001-23-33-000-2018-00413-00 del 26 de septiembre de 2018, se adelanta Concurso de Méritos CM 001 DE 2019 – para la realización de los estudios y diseños necesarios para la estabilización y/o mitigación del movimiento en masa del talud y de las obras localizadas en la transversal 16 del cerro san José alto, en el municipio de Duitama. 

        Se suscribió Convenio Interadministrativo CNV2019008 con el municipio de Oicatá con el propósito de realizar labores de limpieza y mantenimiento de las Quebradas La Mecha y Pionono.
        Asistencia a los Consejos Municipales de Gestión de Riesgo de Desastres convocados en 59 municipios apoyados: Aquitania (2) - Arcabuco (3) - Belén (2) - Briceño (1) - Cerinza (1) - Chiscas (3) - Chiquiza (4) - Chitaraque (2) - Chivatá (2) - Corrales (3) - Cucaita (6) - Duitama (8) - El Cocuy (4) - Firavitoba (4)  - Floresta (3) - Gámeza (2) - Güicán (3) - Jericó (3) - Maripí (3) - Miraflores (1)- Mongua (4) - Mongui (1) - Moniquirá (5) - Motavita (3) - Nobsa (5) - Oicatá (9) - Paipa (2) -  Panqueba (5) - Pauna (3) - Paz de Río (1) - Puerto Boyacá (6) - Samacá (4) - San Eduardo (4) - San José de Pare (3) - San Mateo (1) - San Pablo de Borbur (1) - Santa Rosa de Viterbo (2) - Santa Sofia (1) - Santana (1) - Sativanorte (1) - Siachoque (3) - Soata (4) - Socotá (2) - Sogamoso (3) - Sora (3) - Soracá (2) - Sotaquirá (1) - Tasco (2) - Tibasosa (9) - Tinjacá (6) - Tipacoque (1) - Toca (2) - Togüi (1) - Tópaga (3) - Tota (4) -  Tunja (6) - Tunungua (3) - Tuta (5) - Villa de Leyva (5)
        -Total reuniones de CMGRD: 188

        Se han realizado 36 visitas técnicas en 20 municipios: Aquitania (2) - Arcabuco (4) - Duitama (2) - Jericó (1) - Moniquirá (3) - Paipa (2) - Pauna (1) - Paz de Río (2) - Sáchica (1) - Samacá (1) - San Eduardo (1) - Santana (1) - Santa Rosa de Viterbo (1) - Tibasosa (3) - Tota (1) Tunja (1) - Villa de Leyva (2)

        En el marco de la asistencia técnica para la incorporación de la gestión de riesgo y cambio climático en los Planes de Ordenamiento Territorial se han asistido 23 municipios:  Arcabuco (1) - Beteitiva (2) - Busbanzá (1) - Chiquiza (1) - Chitaraque (2) - Chivatá (1) -  El Cocuy (2) - Jericó (1) - Iza (1) - Miraflores (3) - Moniquirá (1) - Otanche (1) - San José de Pare (4) - Sáchica (1) - Socotá (1) -  Soracá (2) - Tibasosa (2) - Tópaga (2) - Tunungua (1) -  Tunja (5) - Villa de Leyva (2) - Zetaquira (2), para un total de 41 asistencias técnicas.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia534 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity25,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia535 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity27,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia537 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity29,
          'year' =>4,
          'value' => 700,
          'description' => 'Acta de terminación del Convenio 2017- 028 con la fundación KARIT IBITA, cuyo objeto es realizar procesos de restauración en el territorio Uwa con las comunidades de Bachira, Sinsiga y Bócota, con base en el ACTA DE RECIBO A SATISFACCION del convenio.

        Se continua monitoreando las parcelas y realizando los seguimientos a las áreas restauradas con proyectos de la vigencia pasada. Se han programado replantes y refertilizaciones en áreas restauradas. Se ha enfatizado el mantenimiento a los proyectos de restauración ejecutados en el PNR Serranía de Las Quinchas, Complejo de Páramos Siscunsi Oceta y procesos silvopastoriles en Lengupa. 

        Se han realizado acercamientos con la empresa Acerias Paz del Rio, para modificar sus obligaciones de compensacion ambiental y llevar a cabo actividades enmarcadas en el POE de Playa Blanca, especficamente con la actividad de iniciar procesos de restauracion a través de la extraccion de material vegetal exotico que se encuentra en riesgo.  Se trabaja en zonas que drenan directamente al Lago de Tota.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia539 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity30,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia540 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity33,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia543 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity34,
          'year' =>4,
          'value' => 36,
          'description' => 'Durante el año 2019, se adelantó la siguiente gestión: 
        • Se celebró Convenio 020 del 13/11/2019 con el municipio de Mongua, para la adquisición del predio Laguna Negra, ubicado en la vereda Monguí del municipio de Mongua, tendiente a la Conservación y protección del Recurso hídrico. Dicho predio tiene una cabida de 35,5844 Ha y el aporte comprometido y pagado por parte de Corpoboyacá correspondió a la suma de $ 219.126.118 más el 4x1000. Dicho convenio tiene vigencia hasta el 9 de febrero de 2020; si bien al cierre de año, se efectuó respectivo desembolso a cuenta especial aperturada por el municipio, quedó pendiente la compra venta por parte del ente territorial para la vigencia 2020. 

        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia544 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity35,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia545 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity36,
          'year' =>4,
          'value' => 92,
          'description' => 'Se han realizado los censos de aves planeados para el primer semestre de 2019, uno mensual, con los cuales se busca establecer la dinámica poblacional, espacial y temporal de la estructura de aves acuáticas y terrestres para este ecosistema.

        Convenio 2016014, con la UPTC, se presentó informe de avance al 92%, se autorizo el desembolso de los recursos. A la fecha se han realizado 11 monitoreos de los 12 programados

        Se avanza en un 96%  en investigación y programa de monitoreo de fauna amenazada en el PNR Serranía de las Quinchas (Convenio 2019-001 con la UPTC).
        - Avanza en un 52% la ejecución del CNV 2019-009 con la UPTC, a través del cual se desarrolla “Biotecnología para el manejo y conservación de frailejones amenazados   de los PNR Siscunsí - Ocetá y Rabanal.
        - Se avanza en un 94% en la ejecución de la CPS 2019-116, a traves de la cual se gestionaron proyectos en áreas protegidas y ecosistemas estratégicos con recursos provenientes de las compensaciones, para PNR El Peligro, DRMI Sochagota, PNR S. Quinchas, entre otras.
        - A través de la CPS 2019-103, se efectuó seguimiento a los predios en los que se hizo aislamiento: Mongua (predios Laguna Negra y Argos), en Siscunsi, (predios Siscunsi, Tinto y Volcán); se efectuó acompañamiento a la limpia de buchón en la represa La Playa de Tuta; se efectuó acompañamiento a las actividades que se realizan en Playa Blanca.
        - Se avanza en un 85% en la recopilación y revisión de la información cartográfica y geográfica de las coberturas vegetales boscosas de las áreas protegidas declaradas y/o administradas por la Corporación con Plan de Manejo adoptado a través de la CPS 2019-183 con la Ingeniero Forestal.
        - Se continuó y culminó en un 100% la ejecución de los contratos de 3 técnicos guardabosques para el PNR Serranía de las Quinchas (CPS 2019-217; CPS 2019-214; CPS 2019-215), de los cuales se recopilaron las evidencias finales de la ejecución de las actividades de vigilar y velar por la salvaguarda de los ecosistemas y zonas estratégicas dentro del PNR Serranía de las Quinchas, controlando el acceso de personas no autorizadas, así como de semovientes; impedir y/o reportar irregularidades que se presenten sobre la extracción y/o el aprovechamiento no autorizado por la Corporación de los recursos naturales del PNR Serranía de las Quinchas, entre otras actividades (actas y registro fotográfico).
        - Se firma convenio CNV 2019-022 con la Corporación para la gestión del ambiente Corpoambiente para desarrollar el proyecto “Implementación de acciones enfocadas hacia la conservación de avifauna asociada a los bosques de roble en la vereda San José de la Montaña, Parque Natural Regional Pan de Azúcar – El Consuelo” de conformidad con las especificaciones que obran en los estudios previos y dar cumplimiento al plan de acción de la corporación con relación a las metas; 2.1.1.4.1 implementación de medidas de conservación de manejo en áreas protegidas.
        - Se realizan estudios previos para Aunar esfuerzos técnicos, financieros y operativos entre Corpoboyacá y una ESAL, para desarrollar acciones en el marco del Plan de Manejo Ambiental formulado para la Reserva Forestal Protectora Sucuncuca, específicamente que aporten al cumplimiento de los siguientes programas: a) Reconversión y desarrollo de procesos productivos. b) Herramientas para el desarrollo del proceso de conservación de la RFP “La Cuchilla de Sucuncuca” , y c)  Comunicación, educación, participación y concientización ambiental; los cuales están en proceso de revisión para publicación de invitación pública.
        - Se realizan estudios previos para convocatoria pública para realizar trabajos de mano de obra no calificada en el desarrollo de las actividades de establecimiento, seguimiento y mantenimiento de plantaciones en áreas priorizadas”, ubicadas en los municipios de Puerto Boyacá y Otanche y dar cumplimiento al Plan de Acción de la Corporación con relación a la meta 2.1.1.2 Restauración en áreas con vocación forestal, áreas para la conservación de los recursos naturales y/o áreas con suelos degradados; los cuales están en proceso de revisión.


        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia546 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity37,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia547 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity38,
          'year' =>4,
          'value' => 5.1,
          'description' => 'En el marco de la vigencia futura del convenio 2016014, a la fecha se han realizado 12 monitoreos de los 12 programados, el monitoreo aportó de manera particular al plan de conservación de Eremophila alpestris y Cistothorus apolinari . 

        El convenio suscrito con la UPTC CNV 2019-009, con el objeto de desarrollar biotecnologia para el manejo y conservación  de 3 especies de frailejones amenazados (Espeletia paipana, Espeletia oswaldiana y Espeletia tunjana), avanza en un 51%. Tuvo que ser prorrogado por problemas de orden administrativo de la UPTC y cambio de director del proyecto por calamidad. 



        Se adicionó el convenio 2018-001, con la Fundación Universitaria Juan de Castellanos, el cual finalizó satisfactoriamente y se encuentra en proceso de liquidación para realizar el respectivo desembolso del 100% (El ejecutor no ha presentado los últimos requisitos administrativos para el desembolso). Se suscribió un nuevo convenio con la misma entidad (CNV 2019-004), para continuar dando manejo a las especies amenazadas por la extracción ilegal.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia548 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity39,
          'year' =>4,
          'value' => 0.65,
          'description' => 'La atención de especies de fauna silvestre amenazadas por extracción de su medio natural avanza en un 90%,  a través de 1) Adición al convenio 2018-001, con la Fundación Universitaria Juan de Castellanos, terminado satisfactoriamente y en proceso de revisión de soportes financieros, para liquidación y posterior desembolso del 100% ($10.000.000, de esta actividad).  2) Se suscribe un nuevo convenio con la misma entidad en mayo (CNV 2019-004), con el fin de continuar dando manejo a especies amenazadas por la extracción ilegal, con un aporte de esta actividad de $33,674,409. 3) Según comité técnico realizado el 29 de noviembre de 2019, se realizará adición y prorroga al  convenio 2019-004, con el fin de garantizar el manejo de grupos de especies que ya estan en proceso de recuperación y no pueden interrumpir el tratamiento. Se aportará de esta actividad un valor de $ 13.309.775

        Se realiza avalúo comercial del predio San Antonio Primer a través de CDS 2019-255 (inversión $4.417.600); terminado y liquidado. Se suscribe contrato de compraventa CCV 2019-291, realizando la firma de escrituras el día 19 de noviembre; está pendiente el registro ante instrumentos públicos, para realizar el desembolso del valor total del predio $185,740,000. La ejecución es baja, debido a que por razones administrativas y contractuales el proceso de compra de predio, se dilato más de lo proyectado y teniendo en cuenta que la siguiente fase es una licitación publica para contratar la obra;  el tiempo de la vigencia 2019, no es suficiente para continuar con el proceso de establecimiento del Centro de Atención y Valoracion - CAV. 


        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia549 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity40,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia550 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity41,
          'year' =>4,
          'value' => 1,
          'description' => 'Se avanzá en un  100% en la implementación de una estrategia de sensibilización y capacitación a través de :  1)  CPS-2019078 realizando  talleres en instituciones educativas y con comunidades adultas,  en Paipa, Mongua, Rondón;  así como instalación y revisión de cámaras trampa para realizar monitoreo de fauna silvestre.  2) Se participo en la redacción y se imprimio cartilla para conservacion de oso andino a través de aporte de $6,819,279 al CNV 2019-017, con el fondo mixto. Se redujeron costos por alianza con autoridades ambientales CNV 2015-1104 y apoyo de Parques Nacionales. Por tanto, si bien los recursos financieros no se han ejecutado al 100%, la ejecución fisica fue del 100%',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia551 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity42,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia552 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity43,
          'year' =>4,
          'value' => 20,
          'description' => 'Se avanzó en la elaboración del documento de formulación del plan de manejo de las especies invasoras retamo espinoso y retamo liso; así mismo, en la elaboración del mapa con la distribución de las dos especies en la jurisdicción. 

        Se encuentra en ejecución el convenio CNV 2019-012 cuyo objeto es: Aunar esfuerzos técnicos, de talento humano, técnicos y cientificos para la ejecución conjunta del proyecto denominado   Uso del cangrejo rojo (Procambarus clarkii) en la formulación de dietas para trucha arcoíris (Oncorhynchus mykiss) y como mecanismo para el aprovechamiento y control de una especie invasora  . En el mes de diciembre, se efectuaron cuatro (4) salidas de campo para socialización del proyecto (municipios de Villa de Leyva, Paipa, Gachantivá y Sutamarchán). Se aprobó para impresión la cartilla denominada: EXPLORANDO LA NATURALEZA, CANGREJO ROJO DE RIO, UN EXÓTICO INVASOR EN TIERRAS BOYACENSES. Esta cartilla, es aporte de CORPOBOYACÁ por valor de $10.000.000 incluidos dentro de las actividades del Convenio CNV-2019017 con el FONDO MIXTO PARA LA PROMOCIÓN DE LA CULTURA Y LAS ARTES DE BOYACÁ, para aunar esfuerzos tecnicos financieros operativos con una entidad sin animo lucro con el fin promover procesos de apropiación cultura ambiental participativa para fortalecimiento eduambiental diferentes actores (convenio liquidado).

        El presupuesto restante ($18.185.596) del rubo de especies invasoras, se ejecutó dentro del Convenio con el fondo mixto CNV 2019-017, con inversión en plan de medios: Video 2D, dos (2) radio clip, plan de medios antena 2 (Divulgación Nacional), ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia553 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity44,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia554 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity45,
          'year' =>4,
          'value' => 17.04,
          'description' => 'Se contrató y ejecutó el suministro de insumos agrícolas (abonos, fertilizantes, sulfatos, etc),  asegurando la entrega de estos insumos en las capacitaciones que se dictan con los usuarios del proyecto para la elaboración de biopreparados, compostaje, caldo super cuatro y bokashi.
         ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia555 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity46,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia556 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity47,
          'year' =>4,
          'value' => 35,
          'description' => 'Se realizaron 10 capacitaciones relacionadas con temas como: mitigación de emisiones, seguridad en procesos de cocción de calizas y arcillas e impacto ambiental de las emisiones de gases de efecto invernadero dirigida a productores mineros, trabajadores técnicos y administrativos. 
        Se realizaron capacitaciones sobre Buenas Prácticas Agrícolas y amigables con el medio ambiente en los municipios de Paipa y Santa Rosa de Viterbo.
        Se realizaron las capacitaciones de Biopreparados y compostaje caldo super cuatro y Bokashi en los municipios de Paipa, Belén y Tunja.
        Se realizaron tres (3) capacitaciones sobre temas relacionados con los tramites del proceso del licenciamiento ambiental minero enfocado en proyectos de producción más limpia y tres (3) talleres para afianzar conocimientos sobre normatividad ambiental minera, dirigidos a usuarios de los sectores carbón, calizas, alfarería y coquización de los municipios de Duitama, Paipa, Motavita. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia557 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity48,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia558 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity49,
          'year' =>4,
          'value' => 1.5,
          'description' => 'Se está recopilando la información relacionada con el desarrollo de la ventanilla ambiental minera, en portales de noticias, redes sociales, páginas de entidades oficiales y empresas.

        Se gestionó con el Ministerio de Minas y Energía una posible alianza, para brindar acompañamiento a la gestión para la regularización minero ambiental, que pretendía realizar el acompañamiento permanente a pequeños mineros en la gestión de sus trámites ambientales, y en lo relacionado con normatividad minero ambiental, apuntando al cumplimiento de los requerimientos ambientales. No fue posible llegar a un acuerdo con el ministerio, sobre las condiciones para la ejecución del convenio.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia559 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity50,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia560 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity51,
          'year' =>4,
          'value' => 15,
          'description' => 'Se realizó visita de identificación de negocios verdes a empresa GYRO del municipio de Puerto Boyacá  con posibilidad de aplicación de criterios ambientales.
        Se realizó visita de identificación de negocios verdes a empresa ASOCIACION DE PRODUCTORES Y TRANSFORMADORES DE SACHA INCHI EL COLIBRI municipio de Puerto Boyacá  con posibilidad de aplicación de criterios ambientales.
        Se realizó acompañamiento a capacitación de negocios verdes Municipio de Otanche.
        Visita de identificación de negocios verdes a empresa PLANTAS AROMATICAS JAVEL con posibilidad de aplicación de Criterios Ambientales 
        Se realizó  visita de identificación de negocios verdes a empresa EL BICHO COLOMBIA con posibilidad de aplicación de criterios ambientales.
        Se realizó capacitación y socialización sobre negocios verdes en la serranía de las Quinchas, a productores de Sacha Inchi del municipio de Otanche.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia561 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity52,
          'year' =>4,
          'value' => 3,
          'description' => 'Se realizó una reunión de asesoría con una familia que trabaja en un emprendimiento ecoturístico ubicado en el Parque Natural Regional Unidad Biogeográfica Siscunsí Ocetá, específicamente en la vereda Las Cintas del Municipio de Sogamoso, a quienes se les socializó el POE formulado en 2016 para el área protegida y se les compartió información técnica para que el desarrollo del ecoturismo en su predio esté alineado con las proyecciones del POE.
        Se consolidó un informe final de los avances en implementación de los planes de acción contenidos en los Planes de Ordenamiento Ecoturístico, formulados para el PNR Unidad Biogeográfica Siscunsí Ocetá y los ecosistemas estratégicos de Ciénaga Palagua y Playa Blanca. 
        Se realizó una charla de capacitación a los estudiantes de la Especialización Técnica en Gestión del Ecoturismo del SENA, la cual se orientó al fortalecimiento de sus capacidades relacionadas con la realización de estudios de capacidad de carga. 
        Se realizó el lanzamiento oficial del Portal Multimedial Interactivo, desarrollado de manera conjunta con el grupo de investigación GICAB (Grupo de Investigación, Innovación y Conocimiento Aplicado de Boyacá), del SENA Sogamoso, en el marco de la implementación del POE formulado para el PNR Unidad Biogeográfica Siscunsí Ocetá.
        Se realizó una reunión de trabajo con una comisión de la asociación de prestadores de servicios turísticos de Playa Blanca, con quienes se construyó un acta de acuerdo para ofrecer servicios turísticos durante la temporada alta de diciembre, contemplada entre el 15 y el 31, con algunos condicionamientos encaminados a garantizar la seguridad de los visitantes. Dicha acta se suscribió con el fin de afectar lo menos posible la economía familiar de las comunidades locales, teniendo en cuenta que actualmente hay obras en desarrollo en el predio que no se pueden suspender.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia562 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity53,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia563 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity54,
          'year' =>4,
          'value' => 0.8,
          'description' => 'Se está recopilando la información relacionada con los hornos de producción alfarera en los municipios de Paipa, Tuta, Oicata, Chivatá, Cómbita, Tunja y Siachoque; con el propósito de crear la línea base para verificar el cumplimiento de la Resolución 618 de 2013.

        Se realizó seguimiento a hornos de cal (usuarios del proyecto de erradicación de emisiones).',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia564 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity55,
          'year' =>4,
          'value' => 100,
          'description' => 'Se creó la línea base de los hornos de producción aarera en el área de influencia de los municipios de Paipa, Combita, Tuta, Oicata, Chivata Tunja y Siachoque, con el fin de vericar el cumplimiento de la resolución 618 de 2013, se realizó seguimiento a ésta línea base y se consolidó la información secundaria obtenida de éstos municipios.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia565 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity56,
          'year' =>4,
          'value' => 1,
          'description' => 'Reunión con la empresa Argos para gestionar recursos  para proyectos bajo modalidad de pago por servicios ambientales mediante plataforma Banco 2, se consiguieron 1812 millones como pago de compensaciones bajo Resolución No. 4307 de 17 de diciembre de 2019.
        Se elaboró informe de Masbosques de pago de la donación de Colconcretos S.A.S. a través de Banco 2.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia566 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity57,
          'year' =>4,
          'value' => 1,
          'description' => 'Entrega de novedades mes de diciembre de 2019, de usuarios pertenecientes al proyecto erradicación de fuentes contaminantes sector las caleras, novedades de pago a cuentas de ahorro de usuarios municipio de Nobsa, como novedad se realizó la gestión con la empresa Colconcretos S.A.S., por un valor de 25 millones de pesos y se realizó el pago del beneficio a los usuarios pertenecientes al proyecto de erradicación de fuentes contaminantes municipio de Nobsa sector las caleras, a través de Banco2. Se realizó una reunión el 27 de diciembre de 2019 en la Cámara de Comercio de Sogamoso con los 150 ususarios pertencientes al proyecto de erradicación de fuentes contaminantes de Sogamoso, diligenciando los documentos para la nueva vinculación a este proyecto y contunuar el pago a través de Banco2 .',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia567 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity58,
          'year' =>4,
          'value' => 1,
          'description' => 'Se realizó la liquidación del Convenio CNV 2019-006 con el objeto de: Aunar esfuerzos técnicos y financieros entre la Corporación Autónoma Regional de Boyacá-CORPOBOYACÁ y la Corporación para el Desarrollo Social Naturaleza y Vida “CORPONATURALEZA”, para “Apoyar a la realización de buenas prácticas mineras en 40 UPM de carbón en cumplimiento del proyecto “Implementación de la estrategia “Boyacá 2030 20% menos carbono”, ubicadas en los municipios de Paipa, Chivatá y Samacá el cual finalizó el 20 de noviembre de 2019.
        Se realizaron setenta (70) visitas técnicas a las Unidades de producción Minera (UPM,) para la aplicación de normas ambientales y mineras para la legalización ambiental en tos municipios de Paipa, Combita, Tuta, Oicata, Chivata Tunja y Siachoque.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia568 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity59,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia569 = DB::getPdo()->lastInsertId(); 


         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity62,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia572 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity66,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia576 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity67,
          'year' =>4,
          'value' => 2,
          'description' => 'Estructuración de programa para el  mejoramiento del desempeño ambiental y productivo del sector automotriz, a trabajar conjuntamente con Cámara de Comercio de Sogamoso:
        -Lanzamiento del programa y apertura de inscripciones.
        -Se realizó visitas diagnósticas a 20 establecimientos vinculados al proyecto.
        -Socialización a los beneficiarios del programa en tema de residuos sólidos y manejo de sustancias químicas.
        -Realización de  20 visitas de seguimiento y control
        -Realización de 20 visitas de verificación al plan de cumplimiento
        -Realización de 3 capacitaciones a los 20 establecimientos del sector automotriz
        Fortalecimiento del recurso humano a través de la contratación de una profesional para apoyar la actividad de sensibilización a la Gestión Integral de Residuos Peligrosos:  110 visitas a establecimientos generadores de residuos peligrosos de los municipios de Tunja, Duitama y Sogamoso y elaboración de los correspondientes informes de aspectos encontrados.
        15 visitas a generadores de aceite de cocina usado en el municipio de Sogamoso y elaboración de los informes de aspectos encontrados.
        Elaboración  de material didactico y técnico para promover la gestión adecuada de residuos peligrosos.
        Se alimentó base de datos correspondiente a los Informes de Gestión de Residuos Peligrosos de (200) establecimientos del año 2018. 
        Se da terminación al convenio CNV-2018008
        Seguimiento a la Gestión Integral de Residuos Peligrosos a 200 establecimientos generadores del sector servicios e industrial y 180 del sector salud.
        Se suscribe convenio CNV2019-007, para el desarrollo de la décima versión del programa hospital sostenible.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia577 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity68,
          'year' =>4,
          'value' => 100,
          'description' => 'Atención de solicitudes de inscripción al registro de generadores de residuos peligrosos (62 establecimientos), revisión y transmisión de la información reportada por 375 establecimientos generadores de residuos peligrosos y requerimiento de ajuste a 34 establecimientos. 

        Atención de solicitudes de inscripción al registro RUA Manufacturero (5 establecimientos),  revisión y transmisión de la información reportada por 73 establecimientos  inscritos en el registro.

        Atención de solicitudes de inscripción al registro PCB (1 establecimiento), realización de mesas de trabajo con propietarios de equipos contenedores de PCB.

        Descargue de sabanas de información para la verificación de la información reportada en el registro PCB.

        Revisión y transmisión al IDEAM de información de lo reportado en la plataforma PCB de 53 empresas que poseen equipos generadores de aceite dieléctrico, y ajuste de la información de 8 resportes de propietarios por solicitud del IDEAM.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia578 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity69,
          'year' =>4,
          'value' => 2,
          'description' => 'Elaboración del plan de trabajo vigencia 2019, (implementación de campaña de recolección de residuos posconsumo en el mes de julio y operativo sector automotríz en el municipio de Duitama)
        Fortalecimiento del recurso humano a través de la contratación de una profesional para apoyar la actividad de sensibilización a la Gestión Integral de Residuos Peligrosos.
        Desarrollo de taller de diligenciamiento de registro respel a los generadores de residuos peligrosos, en los municipios de las provincias Sugamuxi, Tundama y Centro.
        Charla de sensibilización sobre la gestión integral de residuos peligrosos a funcionarios de la empresa INVERTRAC 
        Reunión con profesionales de ANDI, para coordinar jornada Posconsumo, vigencia 2019.
        Elaboración y envío de circulares informativas de la jornada posconsumo vigencia 2019.
        Desarrollo de la jornada posconsumo 2019, 22 al 31 de julio.
        Coordinación y desarrollo de operativo en el sector automotríz del municipio de Duitama los días 25, 26 y 27 de Noviembre de 2019 a 40 establecimientos.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia579 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity70,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia580 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity71,
          'year' =>4,
          'value' => 25,
          'description' => 'Se realizaron mesas técnicas de orientación en temática de PGIRS, a los municipios de El Cocuy, Sogamoso, Tunja, Puerto Boyacá, Chivatá, Tasco, Oicatá, Miraflores, Otanche, Tota, Aquitania, Cuítiva, Firavitoba, Iza, Socha, Covarachía, Monguí, Muzo, Tununguá, Pauna, Soracá, Floresta, Sativanorte, Sáchica, Samacá, Chíquiza, Boavita, Togui ,Toca, Arcabuco y Cómbita. 
        Asistencia y participación en el comité coordinador PGIRS en los municipios de Tibasosa, Tasco, Tota, Oicatá, Belén, Sáchica, Tunja, Puerto Boyacá, Moniquirá, Socha, Tutazá, Villa de Leyva, Duitama, Sogamoso,  Corrales, Iza, Soracá, Cerinza, Chíquiza, Chivatá, Combita, Floresta, Tópaga, Nobsa, Arcabuco, Aquitania, Monguí, Sora, Toca, Paipa, Busbanza, Cicaita municipios de Asolengupá  (Miraflores, Zetaquira, Rondón, Berbeo, San Eduardo y Páez) 
        Participación en la mesa interinstitucional de residuos sólidos de Boyacá con Contraloría, Procuraduría, Empresa de Servicios Públicos de Boyacá, PDA, Secretaría de Medio Ambiente de la Gobernación. Corpochivor y alcaldías de Tunja y Sogamoso y sus operadores de servicio, la cual sesionò en los muniicpios de Tunja, Duitama y Sogamoso.
        Elaboración de informe de situación de residuos en Boyacá y posibles soluciones regionales, para ser presentado ante instancias nacionales CCGR) y socialización del mismo en las oficinas de Bogotá.
        Elaboración y envío a los municipios de circulares No. 26 con asunto Gestión de Residuos de Construcción y Demolición, No. 27 acerca de Recomendaciones Ajustes PGIRS, No. 31 Plan de Acción para la Gestión Integral de Residuos Sólidos Municipales, No. 34 relacionada con adopción de PGIRS, No. 52 Seguimiento y control - RCD.
        Asistencia y participación en reunión convocada por el Procurador Regional de Boyacá y Procuradores Ambientales y Agrarios, Superintendencia de Servicios públicos SSPD, para evaluar cumplimiento de compromisos de avance de PGIRS por parte de los municipios de Tunja y los demás beneficiados por el relleno de PIRGUA.
        Asistencia y participaciòn en el evento    Diàlogos de seguimietno ciudadano a la gestiòn integral de residuos sòlidos de Boyacà   . Audiencia General convocada por la Contralorìa Departamental en JDC.
        Reuniones conjuntas para concertaciones POT Tunja y  Delimitaciòn de Acuìfero de Tunja (asociado a la temàtica de incroporaciòn de àreas para implementar infraestructura asociada a la gestiòn de Residuos Sòlidos) 



        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia581 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity72,
          'year' =>4,
          'value' => 9,
          'description' => 'A la fecha se desarrollaron las actividades:
        CPS-2019033: Reunión con la supervisora, para establecer plan de trabajo y suministro de materiales para la implementación del programa de minimización y separación de residuos, solicitud de cotizaciones de los materiales acordados.
        Solicitud al equipo de comunicaciones de diseño de cartilla e imantados para desarrollo del programa.
        Solicitud del número ISBN, ante la Cámara Colombiana del Libro para la cartilla Separando Vamos Cuidando el Ambiente y recepción del mismo. 
        Socialización del programa a través de los CIDEA de los municipios de: Paz de Río, Tunja, Sogamoso, Duitama, Paipa, empresa Red Vital de Paipa, Tota, Socha, Soatá, Miraflores y Aquitania, con el fin que este sea integrado a los Planes Operativos de estos Comités, en este sentido se realizó diligenciamiento de la matriz del plan operativo de los CIDEA de Tunja y Sogamoso, incluyendo las actividades del programa.
        Socialización del programa de educación ambiental para la minimización y separación de residuos sólidos en la fuente, en el municipio de Puerto Boyacá, en reunión de grupo coordinador PGIRS.
        Orientación sobre procesos de minimización y separación de residuos sólidos en el municipio de Soracá, agentes de la Policía Metropolitana de Tunja y estudiantes de la Institución Educativa el Rosario de Paipa, Institución Educativa Técnica Industrial y Minera de Paz de Rio, Grupo Ecológico   Voces de la Naturaleza   de la Policía Metropolitana de Tunja, funcionarios de la empresa INVERTRAC de Duitama, funcionarios del peaje de Tuta, estudiantes de segundo semestre de la Licenciatura en Educación Infantil de la UPTC.
        Charla de orientación a estudiantes de grados 10 y 11 de la IE Héctor Julio Rangel Quintero del municipio de Floresta, SENA-CEDEAGRO Duitama, IE Técnica Pedro José Sarmiento de Socha, estudiantes del programa de Ingeniería Ambiental de la Universidad de Boyacá, comunidad del municipio de Paz de Río, Institución Educativa Sergio Camargo de Miraflores, estudiantes de los grados octavo y noveno de la Institución Educativa Jorge Eliecer Gaitán de Tota, a los estudiantes de Institución Educativa Técnica la Libertad e Institución Educativa Técnica Pio Morantes del municipio de Tutazá, Escuela Normal Superior   La Presentación   de Soatá, Colegio la Presentación de Tunja, a participantes del I concurso de Elaboración de esculturas de especies silvestres en material reciclado, IET Ramón Ignacio Avella de Aquitania.
        Participación en la primera semana ambiental del municipio de Samacá, con charla dirigida a la comunidad en general, estudiantes, empresarios entre otros.
        Reunión con las funcionarias de Cultura Ambiental adscritas a las Oficinas territoriales, con el fin de socializar el programa y solicitar apoyo.
        Envío de comunicación escrita el 26 de abril de 2019 a los municipios de Tunja, Paz de Río, Sogamoso, Duitama, Tota, Socha, Soatá, Sotaquirá, Aquitania y Miraflores, con la metodología y actividades del programa, en espera de confirmación de participación.
        El día 19 de junio de 2019, en compañía de una funcionaria de la Oficina de Cultura Ambiental, se acudió a las instalaciones de la Alcaldía del municipio de Sotaquirá, en donde se realizó reunión con el Secretario de Planeación, el cual indicó que había interés de participación y se comprometía a dar respuesta al oficio antes de terminar el mes.
        Reenvío de la comunicación recordatoria vía correo electrónico a los municipios, que no habían dado respuesta a la solicitud inicial.
        Socialización de la cartilla en el municipio de Tunja, con administración municipal y Servitunja S.A. E.S.P y a los integrantes del CIDEA del municipio de Aquitania.
        Recepción de las comunicaciones de los municipios manifestando interés de participar en el programa.
        Participación en la celebración del día internacional del reciclaje, evento realizado en Unicentro Tunja con la feria RECICLARTE.
        Revisión de PGIRS de los municipios de Aquitania, Duitama, Paipa, Paz de Río, Soatá, Socha, Sogamoso, Sotaquirá, Tota, Tunja y Puerto Boyacá, para establecer los programas y proyectos que se articulan con la estrategia de minimización de la Corporación. 
        Revisión del PGIRS de la provincia de Lengupá en conjunto con el técnico del proyecto.
        Extensión del programa al municipio de Tibasosa a través del CIDEA con capacitaciones sobre gestión adecuada de residuos sólidos y entrega de bolsas ecológicas, en la actividad ensúciate para limpiar el agua de nuestro país.
        Se ha realizado la entrega de 5.000 bolsas ecológicas autoguardables en kambrel, en los municipios de Puerto Boyacá, Tibasosa, Tunja, Paipa, Aquitania, Paz de Río, Socha, Duitama, Sogamoso, Tota y Miraflores.
        Entrega de 20.400 ejemplares de la Cartilla “SEPARANDO EL AMBIENTE VAMOS CUIDANDO, en los municipios de Tunja, Aquitania, Socha, Paz de Río, Paipa, Duitama, Sogamoso, Miraflores y Tota 
        Entrega de 14.600 imantados en los municipios de Tunja, Aquitania, Socha, Paz de Río, Paipa, Duitama, Sogamoso, Miraflores y Tota.
        Elaboración y envío de Circular 19, a los 87 municipios de la jurisdicción, referente a la adecuada implementación y operación de estaciones de clasificación y aprovechamiento de residuos sólidos.
        Reunión con recicladores de oficio del municipio de Puerto Boyacá, con el fin de rendir información acerca del Decreto 596 de 2016, de importancia del CENSO DE RECICLADORES.
        Acompañamiento reunión con los recicladores de oficio para definición del plan de acción para el apoyo a su formalización.
        Envío por correo electrónico certificados de participación en las entregas de los materiales, a los estudiantes de los municipios de Sogamoso, Tota, Miraflores, Soatá, Socha.
        Diseño y entrega a los municipios, de estrategia de fortalecimiento y consolidación para la permanencia en el programa de minimización.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia582 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity73,
          'year' =>4,
          'value' => 1,
          'description' => 'Se adelantaron reuniones con las asociaciones de recicladores de los municipios de Tunja, Paipa, Duitama, Sogamoso, Soatá y Villa de Leyva, con el ánimo de verificar la inclusión de las mismas al esquema de aprovechamiento de residuos sólidos en los municipios donde se encuentran dichas asociaciones. 

        Reunión con recicladores formales e informales del municipio de Puerto Boyacá, para brindar charlas de orientación en transformación empresarial.

        Acompañamiento en reunión de asociaciones de  recicladores organizados, para conformarse como organización de segundo nivel (departamental) 

        Desarrollo del Séptimo encuentro regional de reciclaje en Paipa.

        Realización de 4 charlas de orientación sobre el marco normativo del aprovechamiento y reciclaje de residuos sólidos, dirigido a recicladores de oficio del municipio de Tunja, en coordinación con la Fundación Juan de Castellanos.

        Visita de reconocimiento a las instalaciones de la ECA de  asociaciòn de recicladores de oficio de Sogamoso - ARFUSOG ,en proceso de transformaciòn empresarial  la cual iniciò reporte de  toneladas aprovechadas al  SUI administrado por la SSPD. 
           



        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia583 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity74,
          'year' =>4,
          'value' => 1,
          'description' => 'Reunión con el Jefe de la Oficina de Cultura Ambiental, para establecer la temática a desarrollar en la mesa de reciclaje y posibles invitados.

        Solicitud de apoyo a la Asociación Nacional de Empresarios  ANDI, como ponente principal en el desarrollo de la mesa de reciclaje.

        Solicitud de cotizaciones a operadores logísticos para elaboración de estudio de mercado, para el desarrollo del séptimo encuentro regional de reciclaje en el mes de julio. 

        Desarrollo del séptimo encuentro regional de reciclaje',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia584 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity75,
          'year' =>4,
          'value' => 1,
          'description' => 'Visita de inspección y orientación al proyecto de transformación de residuos orgánicos Fundación Prospei en el municipio de Iza.

        Asistencia  presentación de proyecto de transformación de orgánicos para el municipio de Tunja con sede en Cómbita, Precooperativa Multiactiva Hidro-Orgánica.

        Reunión con funcionarios del  municipio de Miraflores, Servilengupá y Asolengupá, para definir el alcance del proyecto a desarrollar en la planta de tratamiento y aprovechamiento de MIRAFLORES.
         
        Solicitud de cotizaciones para elaboración de estudio de mercado, para el desarrollo del proyecto Planta Miraflores.

        Establecimiento de las características y especificaciones técnicas del proceso precontractual (estudios previos) para Suministro de maquinaria para la optimización de la planta regional de tratamiento y aprovechamiento de residuos sólidos ordinarios del municipio de Miraflores, en marco del Proyecto Orientación, Apoyo y Seguimiento a los PGIRS.

        Se apoyó a través del recurso humano de la entidad, los procesos de formalización de los recicladores de oficio de los municipios de Tunja, Paipa, Duitama y Sogamoso; adicionalmente se establecieron en los mismos municipios macrorutas para la implementación de la actividad de aprovechamiento con el acompañamiento de las empresas prestadores del servicio púbico de aseo',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia585 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity76,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia586 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity78,
          'year' =>4,
          'value' => 37,
          'description' => 'Se contrato la obra e interventoria para la ejecucion de las actividades en marco de la implemnetacion de la adecuacion hidraulica del rio Chicamohca 

        CONTRATO CEO 2019 296 Cuyo objeto es: REALIZAR OBRAS PRIORITARIAS DE ADECUACIÓN HIDRÁULICA EN MARCO DE LA IMPLEMENTACIÓN DEL PLAN DE ORDENAMIENTO DE RECURSO HÍDRICO Y EN CUMPLIMIENTO DE LA LÍNEA ESTRATÉGICA GESTIÓN INTEGRADA DEL RECURSO HÍDRICO, PROGRAMA “MANEJO INTEGRAL DEL RECURSO HÍDRICO” DEL PROYECTO “PORH CUENCA ALTA Y MEDIA CHICAMOCHA”, OBRAS DE MANEJO DE AGUAS TERMOMINERALES EN MARCO DEL PROYECTO “CONSERVACIÓN, PROTECCIÓN Y RECUPERACIÓN DEL SISTEMA INTEGRADO DE AGUAS TERMO MINERALES Y AGUAS SUBTERRÁNEAS”, Y EL CERRAMIENTO DEL PREDIO PLAYA BLANCA DE PROPIEDAD DE CORPOBOYACA, EN MARCO DEL PROYECTO “ACCIONES DE MANEJO EN LAGO DE TOTA DE ACUERDO A LAS COMPETENCIAS DE LA CORPORACIÓN EN EL CONPES 3801

        Contrato CCC 2019 306 CUYO OBJETO ES: INTERVENTORÍA TÉCNICA, ADMINISTRATIVA, SOCIAL, AMBIENTAL, CONTABLE, JURÍDICA Y FINANCIERA AL PROYECTO “REALIZAR OBRAS PRIORITARIAS DE ADECUACIÓN HIDRÁULICA EN MARCO DE LA IMPLEMENTACIÓN DEL PLAN DE ORDENAMIENTO DE RECURSO HÍDRICO Y EN CUMPLIMIENTO DE LA LÍNEA ESTRATÉGICA GESTIÓN INTEGRADA DEL RECURSO HÍDRICO, PROGRAMA “MANEJO INTEGRAL DEL RECURSO HÍDRICO” DEL PROYECTO “PORH CUENCA ALTA Y MEDIA CHICAMOCHA”, OBRAS DE MANEJO DE AGUAS TERMOMINERALES EN MARCO DEL PROYECTO “CONSERVACIÓN, PROTECCIÓN Y RECUPERACIÓN DEL SISTEMA INTEGRADO DE AGUAS TERMO MINERALES Y AGUAS SUBTERRÁNEAS”, Y EL CERRAMIENTO DEL PREDIO PLAYA BLANCA DE PROPIEDAD DE CORPOBOYACA, EN MARCO DEL PROYECTO “ACCIONES DE MANEJO EN LAGO DE TOTA DE ACUERDO A LAS COMPETENCIAS DE LA CORPORACIÓN EN EL CONPES 3801”

        Se firmó acta de inicio el dia 12 de diciembre de 2019.

        Se suscribio acta de suspensión a los contratos de obra e interventoria el dia 2o de diciembre de 2019. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia588 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity79,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia589 = DB::getPdo()->lastInsertId(); 



         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity83,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia593 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity85,
          'year' =>4,
          'value' => 20,
          'description' => 'Al mes de Diciembre se ha superado la meta establecida en el Plan de Acción, la cual era Apoyar la formulación de PUEAAs a 20 usuarios y a la fecha se han atendido 282.

        Durante el año 2019 fueron allegados para evaluación a CORPOBOYACÁ 68 documentos de Programas de Uso Eficiente y Ahorro de Agua – PUEAA, descritos a continuación:
        Por otra parte, CORPOBOYACÁ continúa con el apoyo a los usuarios del recurso hídrico mediante la formulación del PUEAA a través del diligenciamiento del formato FGP-09, para los caudales otorgados y solicitados en concesiones de aguas menores o iguales a 0.5 lps. Como resultado de esta estrategia se tiene el apoyo a 282 PUEAA´s formulados mediante el apoyo la Corporación.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia595 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity86,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia596 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity87,
          'year' =>4,
          'value' => 89,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia597 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity88,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia598 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity90,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia600 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity91,
          'year' =>4,
          'value' => 1,
          'description' => 'Se elaboraron los conceptos tecnicos de los monitoreos de caudal  que se desarrollaron en el transcurso del año en los sectores ITP, y la Playa del Municipio de Paipa.

        Se elaboraron encuestas referentes al uso del recurso hidrico a los usuarios de las aguas termonimerales en los sectores ITP, y la Playa del Municipio de Paipa.

        Se consolido un informe general de las labores realizadas por la Corporacion en los ultimos cuatro años en cuanto a Aguas termominerales. 

          Se contrato la obra e interventoria para la ejecucion de las actividades en marco de las actividades establecidas en el DMRI de la microcuenca Quebrada Honda y Lago Sochagota 

        CONTRATO CEO 2019 296 Cuyo objeto es: REALIZAR OBRAS PRIORITARIAS DE ADECUACIÓN HIDRÁULICA EN MARCO DE LA IMPLEMENTACIÓN DEL PLAN DE ORDENAMIENTO DE RECURSO HÍDRICO Y EN CUMPLIMIENTO DE LA LÍNEA ESTRATÉGICA GESTIÓN INTEGRADA DEL RECURSO HÍDRICO, PROGRAMA “MANEJO INTEGRAL DEL RECURSO HÍDRICO” DEL PROYECTO “PORH CUENCA ALTA Y MEDIA CHICAMOCHA”, OBRAS DE MANEJO DE AGUAS TERMOMINERALES EN MARCO DEL PROYECTO “CONSERVACIÓN, PROTECCIÓN Y RECUPERACIÓN DEL SISTEMA INTEGRADO DE AGUAS TERMO MINERALES Y AGUAS SUBTERRÁNEAS”, Y EL CERRAMIENTO DEL PREDIO PLAYA BLANCA DE PROPIEDAD DE CORPOBOYACA, EN MARCO DEL PROYECTO “ACCIONES DE MANEJO EN LAGO DE TOTA DE ACUERDO A LAS COMPETENCIAS DE LA CORPORACIÓN EN EL CONPES 3801

        Contrato CCC 2019 306 CUYO OBJETO ES: INTERVENTORÍA TÉCNICA, ADMINISTRATIVA, SOCIAL, AMBIENTAL, CONTABLE, JURÍDICA Y FINANCIERA AL PROYECTO “REALIZAR OBRAS PRIORITARIAS DE ADECUACIÓN HIDRÁULICA EN MARCO DE LA IMPLEMENTACIÓN DEL PLAN DE ORDENAMIENTO DE RECURSO HÍDRICO Y EN CUMPLIMIENTO DE LA LÍNEA ESTRATÉGICA GESTIÓN INTEGRADA DEL RECURSO HÍDRICO, PROGRAMA “MANEJO INTEGRAL DEL RECURSO HÍDRICO” DEL PROYECTO “PORH CUENCA ALTA Y MEDIA CHICAMOCHA”, OBRAS DE MANEJO DE AGUAS TERMOMINERALES EN MARCO DEL PROYECTO “CONSERVACIÓN, PROTECCIÓN Y RECUPERACIÓN DEL SISTEMA INTEGRADO DE AGUAS TERMO MINERALES Y AGUAS SUBTERRÁNEAS”, Y EL CERRAMIENTO DEL PREDIO PLAYA BLANCA DE PROPIEDAD DE CORPOBOYACA, EN MARCO DEL PROYECTO “ACCIONES DE MANEJO EN LAGO DE TOTA DE ACUERDO A LAS COMPETENCIAS DE LA CORPORACIÓN EN EL CONPES 3801”  

        Se firmó acta de inicio el dia 12 de diciembre de 2019.

        Se suscribio acta de suspensión a los contratos de obra e interventoria el dia 2o de diciembre de 2019. 
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia601 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity92,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia602 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity93,
          'year' =>4,
          'value' => 26,
          'description' => 'Durante el mes de diciembre se realizó el cargue de información sobre la concesión otorgada y/o programa de ahorro y uso eficiente asociado según el caso para los siguientes 34 expedientes: RECA-01285-19, RECA-01286-19, RECA-00001-18, RECA-01256-19, RECA-00130-19 (Pueaa), OOCA-00162-18, OOCA-00081-19, OOCA-00033-18, RECA-00131-19 (Pueaa), RECA-00264-19 (Pueaa), RECA-00132-19 (Pueaa), RECA-00219-19 (Pueaa), RECA-00129-19 (Pueaa), RECA-00239-19 (Pueaa), RECA-00808-19 , RECA-00207-19 (Pueaa), RECA-00688-19 (Pueaa), OOCA-00052-16, OOCA-00058-19, CAPP-00007-17, OOCA-00195-18, OOCA-00064-19, RECA-01289-19, RECA-01290-19, RECA-01291-19, RECA-01293-19, RECA-01296-19, RECA-01297-19, RECA-01298-19, RECA-01299-19, RECA-00220-19 (Pueaa), RECA-00322-19 (Pueaa), RECA-00456-19 (Pueaa), OOCA-00042-19



        Para un total de 539 expedientes ingresados durante el año 2019.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia603 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity94,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia604 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity95,
          'year' =>4,
          'value' => 25,
          'description' => 'De los municipios que manifestaron interés para apoyo de financiación de proyectos de descontaminación, se seleccionaron a Soracá y Sutamarchán; los cuales cumplieron con el 100% de los requisitos técnicos, jurídicos y ambientales; celebrando los siguientes convenios:

         CNV-2019011 con el Municipio de Soracá para la construcción de la PTARD y colector final. el cual a 30 de diembre de 2019 lleva un porcentaje de avance fisico del 95,57% y un avance financiero del 40%. 

         CNV-2019010, con el Municipio de Sutamarchan para la construcción del interceptor final.
        A la fecha se lleva un30% de avance de ejecución de obra y un 40% de avance financiero. 


        Con la suscripción de los dos convenios se dio cumplimineto a la meta establecida, la cual era el apoyo a 1 proyecto de descontaminacion de fuentes hidricas. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia605 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity96,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia606 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity97,
          'year' =>4,
          'value' => 1,
          'description' => 'Para el desarrollo de las actividades de Seguimiento e implementación al CONPES 3801  hasta el mes de diciembre se ejecutaron acciones misionales como: 
        -
        - Visitas de conceptos de concesión de aguas superficiales 
        - Apertura del 100% de los expedientes de reglamentación 1539 de 2012 - RECAS
        - Visitas de conceptos de permisos de ocupación de cauce 
        - Evaluación y/o aprobación de PUEAAs para caudales menores e iguales a 0.5 lps pertenecientes al proceso de reglamentación del as microcuencas de la Resolución 1539 de 2012.
        - Evaluación y/o aprobación de PUEAAs para caudales mayores a 0.5 lps para los sectores agrícola y pecuario. 
        - Evaluación y/o aprobación de obras del sistema de captación y control de caudal 
        - Monitoreos físico químicos y microbiológicos de los 22 puntos de muestreo priorizados por la Corporación. 
        - Atención quejas y PQRS sobre el uso y el aprovechamiento de os recursos naturales. 

        Se desarrollaron reuniones con la Oficina de Cultura Ambiental y el Dr. Gustavo Wilches Chaux, con el acompañamiento de CORPOBOYACÁ, para articular la propuesta de la red de lagos y lagunas (Lago de Tota, Fúquene y La Cocha) para la conservación, como compromiso de la Mesa Permanente de Trabajo por el Lago de Tota.

        Se desarrollaron secretarias técnicas para el inicio de  la ejecución del contrato de consultoria que involucra entre otras cosas lo siguiente: Ajuste POMCAS, formulación de PORH, Acotamiento de rondas hídricas (dos tributarios), implemetacion de pago por servicios ambientales, implementación de plan de negocios, zonificación ambiental del complejo de paramo Tota, Bijagual Mamapacha, entre otros.

        Acompañamiento técnico para la ejecución del convenio  suscrito entre MADS y Agrosavia, con el objetivo de la implementación de buenas prácticas agrícolas a dos distritos de riego priorizados en la cuenca del Lago.

        Acompañamiento técnico en la ejecución del proyecto AICCA, cuyo objetivo es “generar y compartir datos, información y experiencias relevantes para la adaptación a la variabilidad y el cambio climático, y útiles para la formulación de políticas en sectores seleccionados y realizar inversiónes piloto en áreas prioritarios en los cuatro países andinos.
         
        Reunión con la Procuraduría General de la Nación, MADS, Gobernación de Boyacá, Alcaldía de Aquitania, Agencia Nacional de Tierras y CORPOBOYACA el día 27 de noviembre, con el fin de socializar el avance del deslinde agrario por parte de la Agencia Nacional de Tierras. 
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia607 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity98,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia608 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity99,
          'year' =>4,
          'value' => 10,
          'description' => 'Ya se cuenta con el acto administrativo de los,objetivos de calidad Resolucion 4736 de 28 diciembre del 2018 y la Resolucion 1433 de 10 de Mayo con la cual se ajustaron puntos de ubicación  y se modifico el nombre de un tramo',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia609 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity100,
          'year' =>4,
          'value' => 9.8,
          'description' => 'A la fecha se ha ejecutado lo siguiente:

        Ya se cuenta con el Documento de la Linea base del Proceso de Consulta de Carga Golbal Contaminate de la Subcuenca del Rio Sutamarchan,  Moniquira y Suaresz A-D (Afluentes Directos) Se encuetra en la Pagian Web de la Corporacoion en el link del proceso de metas

        Ya se cuenta con el Documento del Diagnostico de Calidad de la fuente Hidrica de la Subcuenca el Rio Sutamarchan,  Moniquira y Suaresz A-D (Afluentes Directos) Se encuetra en la Pagina Web de la Corporacion  en el link del proceso de metas

        1.Ya se cuenta con el Acto Adminsitrativo de la apertura de  Consulta de 1432 del 10 de Mayo  del 2019.
        2.Se Realizó la presentacion del Proyecto de Acuerdo de metas ante el consejo Directivo el 26 de cotubre del 2019.

        Se llevo a Cabo el taller preconsulta el 2 de mayo en el muncipio de Tunja se conto con la participacion de 38 personas, el Primer taller se llevo a cabo el 24 de mayo enel Municipio de Sutamarchan y se conto con la participacion de los municipios de Tinjaca, Suttamarchan, Santasofia , Gachantiva y demas otros usuarios para una participacion total de 9 personas,  el segundo Taller se llevo a cabo el 30 de mayo en Villa de Leyva contando con la presentcia de funcionarios de la Alcaldia de Villa de Leyva, Samaca , Sachica, Cucaita y Sora y demas Usuarios con la participacion de 16 personas, El 7 de junio se llevo a cabo el tercer taller en Moniquirá se conto la participación de funcionarios de la alcaldia y de la empresa de servicios públicos y otros usuarios para un toal de 12 personas, el cuarto taller se llevo el 7 de mjujnio en Arcabuco se conto con la particpación de los municipios de Togui y Arcabuco y otros usaurios para un total de 8 personas, el quinto taller se llevo a cabo el 12 de junio  enSsan Jose de Pare , se conto con la participacionde municipio de Santana, Chitaraque y San José de Pare y demas usuarios con  la participación de 16 personas. 
        Adicional a esto se llevaron a cabo mesas de trabajo en forma personalizada desde el 17 junio al 28 de junio, contando con la participacoion de 10 municipios (Togui, Chitaraque, Villa de Leyva, Moniquirá, Cucaita, Chiquiza, Arcabuco, Santa Sofía, Tinjaca,Sáchica) .
        Se evaluaron las 20 propuestas de meta de carga global  que allegaron los usuarios, de las cuales 9 fueron de municipios de la area de influencia. y el resto de los demas usuarios.
        Se  recibieron 21 Propuestas y se evcaluaron para establecer la propuesta de meta para cada usuario la cual fue publicada el 20 de agosto en la Pagina WEB para ser somnetida a la consulta publica, se llevo a cabo taller para todos los usuarios el 14 de agosto con la participacion de 48 personas entre municipios y demas usuarios-..
        Se llevo a Cabo video Institucional del  Poryecto.

        3. Se cuenta con el Acuerdo 15  del 25 de Noviembre del 2019 de Metas de Carga Global Contaminante para la Subcuenca del Riuo Sutamarchan-moniquira y Saurez A.D (Afluetnes Directos)

        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia610 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity101,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia611 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity103,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia613 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity104,
          'year' =>4,
          'value' => 100,
          'description' => 'CPS 2019-040 
        Durante el año 2019 se dió cumplimiento en la validación de 550 registors validados en Geoambiental  y se superó la meta en 155 registros validados.

        CDS-2019258 (5,360,687) Se dio cumplimiento al 100% de la ejecucion de los curso, el pago esta en proceso para el mes de febrero 2020,

        CPS-20192113 (1,725,798) Se validaron y actualizaron 100 expedientes migrados en el año 2018 que no cuentan con datos de usuario. 
        CPS 2019-041. Se atendieron todas las solicitudes allegadas durante el año 2019

        CPS 2019-040 Se realizó control de calidad de 550 expedientes de proceso sancionatorio ingresados por contratistas y se generó el respectivo informe

        CPS-20192113 (1,026,500) Se realizó el control de calidad de los expedientes migrados durante el mes de diciembre',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia614 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity105,
          'year' =>4,
          'value' => 100,
          'description' => 'CPS 2019-041
        Se depuro la base de terceros de geoambiental 8700 registros 
        CPS 2019-040
        Se realizó la revisión y validación de 55 módulos de geoambiental para la implementación y acomplamiento de la herramienta con los tramites misionales
        CPS 2019-041 Se validaron 1089 registros de coordenadas cargados a Geoambiental, correspondientes aprovechamiento forestal y se supera la meta en 539 registros validados.

        CPS 2019- 301. Se realizo la digitalización y migracion de 25 expedientes a Geoambiental.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia615 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity107,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia617 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity108,
          'year' =>4,
          'value' => 10,
          'description' => 'Se encuentra en ejecución contrato de servicio CDS 2019-119, cuyo objeto es: servicio de soporte, mantenimiento y actualización para los módulos del sistema de gestión integral SGI - Almera que posee Corpoboyacá.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia618 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity109,
          'year' =>4,
          'value' => 10,
          'description' => 'Se encuentra en ejecución contrato de servicio CDS 2019-127, cuyo objeto es: servicio de soporte, mantenimiento y actualización para los módulos del sistema Geoambiental que posee Corpoboyacá de conformidad con las especificaciones técnicas descritas en los estudios previos.

        Se encuentra en ejecución contrato de servicio CDS 2019-166, cuyo objeto es: servicio de implantación del módulo de pase de expedientes “modelo siux”, creación de los formatos FEV del sistema de gestión de calidad y del formulario técnico para el tramite plan de contingencia para el manejo de derrames hidrocarburos o sustancias nocivas dentro de la plataforma Geoambiental que posee Corpoboyacá de conformidad con las especificaciones técnicas descritas en los estudios previos.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia619 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity110,
          'year' =>4,
          'value' => 10,
          'description' => 'Se encuentra en ejecución contrato de servicio CDS 2019 - 133, cuyo objeto es: servicio de actualización, mantenimiento para los módulos contabilidad, tesorería, control presupuestal, almacén e inventarios, control de contratos, nómina y facturación de tasas retributivas y soporte presencial, telefónico, remoto y correo electrónico de los módulos mencionados, los cuales conforman el sistema de información administrativo y financiero Sysman software que posee Corpoboyacá.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia620 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity111,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia621 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity112,
          'year' =>4,
          'value' => 650,
          'description' => 'A la fecha se ha logrado cumplir las metas establecidas en el Plan de Acción, brindando de esta manera un mejor servicio al usuario al permitirle ver la portada de los libros, o publicaciones que desea consultar. Se han digitalizado 650 portadas.

        Se ha evidenciado a lo largo del año que cada día son más los usuarios virtuales, lo cual nos lleva a mejorar y fortalecer los servicios que actualmente tenemos, como también a implementar nuevos servicios virtuales que satisfagan las necesidades de información de quienes consultan diariamente nuestro catálogo del Centro de Documentación.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia622 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity113,
          'year' =>4,
          'value' => 400,
          'description' => '400 nuevos registros actualizados en KOHA. Se han atendido a 3.429 usuarios.

        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia623 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity114,
          'year' =>4,
          'value' => 40,
          'description' => 'TOTAL  FOLIOS ESCANEADOS EN AÑO 2019 = 130275 (1,737 Expedientes)
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia624 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity115,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia625 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity116,
          'year' =>4,
          'value' => 4.18,
          'description' => 'Se ejecutó contrato de servicio CDC 2019-144, cuyo objeto es: suministro de computadores y periféricos a través del acuerdo marco de precios para la adquisición de computadores y periféricos - segmento 5 - periféricos de entrada y salida, en las cantidades y especificaciones técnicas definidas en los siguientes estudios previos.

        Se ejecutó contrato de servicio CDC 2019-145, cuyo objeto es: suministro de computadores y periféricos a través del acuerdo marco de precios para la adquisición de computadores y periféricos - segmento 1 computadores de escritorio.

        Se encuentra en ejecución contrato CPS-2019-060, cuyo objeto es: prestación de servicios como ingeniero catastral y geodesta, para apoyar la ejecución de las actividades que se enmarcan en el proyecto: implementar y mantener el gobierno digital de la entidad, de conformidad con las especificaciones técnicas que obran en los estudios previos.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia626 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity117,
          'year' =>4,
          'value' => 10,
          'description' => 'El proceso de Soporte Tecnológico a fin de disminuir la dependencia de terceros, fortalecer el control de la seguridad y optimizar los recursos financieros y de equipos TICS disponibles para esta actividad, se encuentra viabilizando los siguientes procesos:

         Estudios previos y estudio de mercado para dotar de Servicios de conectividad de Datos a las sedes corporativas
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia627 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity118,
          'year' =>4,
          'value' => 5,
          'description' => 'Se encuentran en ejecución los siguientes contratos:

         Contrato CIA-2019-057, con ETB SA ESP para el internet de la Sede Principal.
         Contrato CIA-2019-124, con ETB SA ESP para Sede Ecosistemas y sede Archivo.
         Contrato CDS-2019-186, con COLOMBIA MAS TV para Cuatro Sedes Territoriales.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia628 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity119,
          'year' =>4,
          'value' => 100,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia629 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity120,
          'year' =>4,
          'value' => 6,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia630 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity121,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia631 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity122,
          'year' =>4,
          'value' => 100,
          'description' => 'Calibración y mantenimiento de sonómetros y pistofonos  del laboratorio de calidad ambiental de la corporación, atención a auditorias de renovación de acreditación (interna y externa)
        Se realiza acompañamiento técnico al municipio de Sogamoso, Tunja, Puerto Boyacá, Moniquira, para seguimiento y medición de ruido. 
        Adjudicacion de contrato para la calobracion de los pistofonos y sonometros CDS 2019 202- CALIBRACION DE EQUIPOS EJECUTADO 
        Adjudicacion contrato para auditoria interna de Ruido bajo la 17025',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia632 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity123,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia633 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity124,
          'year' =>4,
          'value' => 3,
          'description' => 'Se adelantó proceso de contratación directa con la CAR bajo la asesoría y acompañamiento de la oficina de contratación, agotados los trámites de rigor, se elabora minuta y firma por parte de la Secretaría General y Jurídica; sin embargo, la CAR a la fecha no ha devuelto el contrato firmado. 
        Profesionales del laboratorio de la CAR, requieren que se hagan algunos ajustes en los Estudios Previos y en la Minuta. Ya fueron elaborados y enviados los documentos respectivos a la CAR, para continuar con el trámite  de contratación, se está  pendiente de la firma respectiva de la minuta y  la formalización  del contrato. Por directriz de Subdirección de Administración de Recursos Naturales, y teniendo en cuenta que a la fecha no ha habido  definición por parte de la CAR, se define iniciar proceso por mínima cuantía, que actualmente se encuentra en contratación para definir la invitación publica  a oferentes. Se realizaron tres operativos  pedagógicos de fuentes móviles  con apoyo de la CAR, no fue posible efectuar  la contratación por mínima cuantía referida, teniendo en cuenta que se declaró de desierto dicho proceso.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia634 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity125,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia635 = DB::getPdo()->lastInsertId(); 

         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity127,
          'year' =>4,
          'value' => 20,
          'description' => 'Informes de calidad del aire publicados en la pagina de Corpoboyaca
        • Elaboración de Informes de calidad del aire publicados en la página de Corpoboyaca para los meses de enero, febrero, Marzo, Trimestral, abril, mayo, Junio, semestral, julio, agosto, septiembre, trimestral, octubre, noviembre   y diciembre',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia637 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity128,
          'year' =>4,
          'value' => 100,
          'description' => 'Reporte a sisaire mes de enero, febrero, marzo, abril, mayo, junio julio, agosto,  septiembre, octubre, noviembre y diciembre',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia638 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity129,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia639 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity130,
          'year' =>4,
          'value' => 100,
          'description' => 'Las 14 estaciones están en operación, se está haciendo verificación mensual a cada una de ellas con su respectivo mantenimiento preventivo, así mismo su reporte de datos 

        Contratacion de personal perteneciente al grupo de red de monitoreo de calidad ambiental:
        1. CPS 2019024- Tecnólogo Químico 
        2. CPS 2019036- Técnico electromecánico  
        3. CPS 2019021-Quimico de alimentos 
        4. CPS 2019021-Ingeniero de sistemas
        5. CDS 2019150- Plataforma MAIGRAI
        6. CDC 2019 155- Consumibles estaciones
        7. CPS 2019 014- Conductor.
        8. CPS 2019 310 Conductor 
        Acciones Realizadas por el personal: 
        Profesional Universitario G8 - SARN : Gestion en la contratacion del personal requerido para la estaciones.
        Contratistas: 
        Ingeniero quimico Grado 10: Gestion en la contratacioon y seguimiento contractual 
        Quimico de alimentos Categoria  6: Analisis de datos de estaciones de calidad del agua 
        Ingeniero de sistemas: descarga  de los datos generados por las estaciones 
        Tecnicos estaciones: Mantenimientos limpieza y verificaciones a las estaciones',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia640 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity131,
          'year' =>4,
          'value' => 100,
          'description' => 'Reportes de campañas y monitoreo a cuencas y lago de Tota ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia641 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity132,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia642 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity133,
          'year' =>4,
          'value' => 0.9,
          'description' => 'Se realizaron monitoreos (Trabajo de campo) a sujetos pasivos bajo el contrato CDS 2019230, y entrega de resultados para revision y aprobacion por parte de la Corporaciòn dentro de la ejecucion del contrato a los siguientes municipios:

        VERTIMIENTOS DE MUNICIPIOS   MONITOREADOS 
        Santana Duitama 
        San José de Pare Cerinza
        Santa Sofía Tutaza
        Gachantiva Sativa Sur
        Paez Sativa Norte
        Miraflores Boavita
        San Eduardo Chita
        Sachica Panqueva
        Samaca Soata
        Berbeo La Uvita
        Zetaquirá Socha
        Rondón Paz del Río
        Tuta Algarra Socotá
        Sogamoso Coper
        Mongua Otanche
        Firavitoba Puerto Boyaca 
        Monguí Tasco
        Topaga Beteitiva
        Gamesa Lago de Tota 
        Motavita  Tunja 
        Paipa  Sotaquira',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia643 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity134,
          'year' =>4,
          'value' => 1.8,
          'description' => 'Se Elaboraron monitoreos (Trabajo de campo) a aguas termominerales bajo el contrato CDS 2019230 y entrega de resultados para revision y aprobacion por parte de la Corporaciòn dentro de la ejecucion del contrato a los siguientes puntos:
        AGUAS TERMOMINERALES
        Manantial Olitas
        Piscina La playa
        Tina La curiosidad caliente(Contra La Peña)
        El Delfín 2
        El Delfín 1 (Contra La Peña )
        Pozo Azul
        Pozo Maderos
        Pozo de Apoyo Hotel Sochagota
        Pozo Hotel Lanceros
        Pozo Hotel Casona del Salitre
        Ojo del Diablo
        Pozo Hotel Panorama
        Pozo Hotel Estelar
        Quebrada Honda
        Lago Sochagota
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia644 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity135,
          'year' =>4,
          'value' => 1.8,
          'description' => 'Se Elaboraron monitoreos (Trabajo de campo) a las cuencas rio Chicamocha (51 PUNTOS) , rio Suarez ( 23 PUNTOS)  bajo el contrato CDS 2019230 
        INICIO DE EJECUCION A CONTRATO CDS 2019-230- y entrega de resultados para revision y aprobacion por parte de la Corporaciòn dentro de la ejecucion del contrato 
        PLANIFICACION DE EJECUCION- RECOLECCION DE MUESTRAS A CUENCAS PRIORIZADAS  
        Monitoreo lago de Tota 
        Monitoreo lago Sochagota 
        Tecnico G10 - Laboratorio Aquitania : Muestreo 
        Monitoreo a embalse la Playa 
        Profesional Universitario G8 - Laboratorio : Muestreo
        Tecnico G10 - Laboratorio : Muestreo 
        Tecnico profesional en quimica industrial Categoria 3:  Muestreo y analsis 
        Quimico de alimentos Categoria  6: analisis de muestras 
        Profesional Especielizado G16 - Laboratorio: analisis de muestras ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia645 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity136,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia646 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity137,
          'year' =>4,
          'value' => 91,
          'description' => '- Calibracion y mantenimiento de equipos de laboratorio de calidad ambiental de tunja y aquitania 

        -Proceso de seleccion Abreviada de menor cuantoa 006 del 2019 para para el mantenimiento y calibracion creditada de equipos de laboratorio
        Contrato CDS F1672019 211, Se han realizado el 63 % del servicio de mantenimiento (37 equipos) y calibracion (23 equipos) 

        NOTA: SE SUSCRIBE ACTA DE SUSPENSIÓN DEL CONTRATO CDS 2019211 EL 17 DE DICIEMBRE DE 2019 HASTA EL 7 DE FEBERERO DE 2020  PAGO SUJETO A LA ENTREGA TOTAL DE LOS EQUIPOS 
        Minima cuantia 23 calibracion de termohigrometros.
        Contrato CDS 2019 199
        Se realizo la calibracion y mantenimiento de 3 termohigrometros pertenecientes al laboratorio
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia647 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity138,
          'year' =>4,
          'value' => 2,
          'description' => 'Participación en ensayos de aptitud desacuerdo a estándares internacionales basados en la norma IEC 17043 (CDS 2019-171).',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia648 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity139,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia649 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity140,
          'year' =>4,
          'value' => 1,
          'description' => 'Se realizó seguimiento a los 87 municipios de la jurisdicción de la Corporación, por concepto a las transferencias de la Sobretasa y/o Porcentaje Ambienteal, correspondiente al IV Trimestre de la vigencia 2017 y a la vigencia 2018.  No se realizó en su totalidad liquidación definitiva, toda vez que los municipio sno facilitan la información correspondiente, para lo cual se notifició a los entes de control (Procuraduria y Contraloría), quedando bajo la oficina de Tesorería continuar con el seguimiento.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia650 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity141,
          'year' =>4,
          'value' => 1,
          'description' => 'Esta actividad se desarrolló de acuerdo a lo planeado sin novedades.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia651 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity142,
          'year' =>4,
          'value' => 1,
          'description' => 'La Auditoría se realizó durante los días 5 y 6 de diciembre de 2019 obteniendo la certificación por parte de ICONTEC DEL sgc BAJO LA NORMA iso 9001:2015.
        La actividad seejecuto según lo previsto. No fue necesario afectar el presupuesto estimado.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia652 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity143,
          'year' =>4,
          'value' => 96,
          'description' => 'Se ejecuto en su totalidad el contrato de estudios y diseños para la construcción de baños y comedor;  el avance de construcción de la obra tiene un 96% de ejecución, teniendo en cuenta que hubo demoras en la entrega por parte de los proveedores de las divisiones para para baño.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia653 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity144,
          'year' =>4,
          'value' => 1.73,
          'description' => 'se transfirieron 239.739 folios  de las dependencias:  Scretaría General y Jurídica y Subdirección de R.N. atendiendo a los recursos asignados.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia654 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity145,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia655 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity146,
          'year' =>4,
          'value' => 100,
          'description' => 'META CUMPLIDA
        Se realizo en el mes de febrero sesión de rendición de cuentas del segundo semestre del año 2018
        En el mes de mayo se realizo sesión de instalación OCAD-CORPOBOYACA año 2019, donde se eligió como Presidente al alcalde de Chitarque
        Con estas dos reuniones se cumple la meta programada para el año 2019
        META CUMPLIDA
        Enero-Febrero-Marzo. 
        Se presentaron ante MADS, los proyectos: RECUPERACIÓN DE COBERTURAS VEGETALES AFECTADAS POR EL INCENDIO EN EL SECTOR LOS VALLES DEL MUNICIPIO DE CHISCAS EN EL DEPARTAMENTO DE BOYACÁ y FORMULACIÓN DEL PLAN DE MANEJO AMBIENTAL, ZONIFICACIÓN Y RÉGIMEN DE USO DE SUELOS DEL COMPLEJO DE PÁRAMO TOTA- BIJAGUAL - MAMAPACHA, DEPARTAMENTOS DE BOYACÁ Y CASANARE.
        Abril.-
        Se realizaron ajustes solicitados por MADS al proyecto RESTAURACIÓN EN EL MUNICIPIO DE CHISCAS
        Mayo 
        Se apoyó el inicio de la formulación del proyecto que dará continuidad al pago de compensación ambiental a los alfareros y caleros del Valle de sogamoso. Asistencia y apoyo a reuniones generadas por la Subdirección de Recursos Naturales para la formulación del proyecto
        Junio. 
        Se realizo revisión metodológica, apoyo para ajustes, solicitud de concepto tecnico y de certificado de aprobación y registro de los siguientes proyectos:
        1. Fortalecimiento ambiental a través de la educación juvenil infantil conformada por la institución educativa ecológica san francisco del municipio de combita
        2. Se realizó revisión del proyecto RECUPERACIÓN DE SUELOS EN AREAS DE RECARGA DEL SISTEMA ACUÍFERO DE TUNJA VEREDA PIJAOS MUNICIPIO DE CUCAITA
        3. Se realizó revisión del proyecto CONSTRUCCIÓN INTERCEPTOR DEL ALCANTARILLADO DEL MUNICIPIO DE SUTAMARCHÁN BOYACÁ”
        4. Se realizó revisión del proyecto ADQUISICIÓN DEL PREDIO LOTE LAGUNA DEL PIÑUELAL UBICADO EN LA VEREDA PEDREGAL DEL MUNICIPIO DE SUTAMARCHÁN PARA LA CONSERVACIÓN Y PROTECCIÓN DEL RECURSO HÍDRICO
        5. Se realizó revisión del proyecto CONSTRUCCIÓN DEL SISTEMA DE SEPARACIÓN DE LAS AGUAS LLUVIAS DE LAS AGUAS RESIDUALES DOMÉSTICAS, CON EL FIN DE DAR CUMPLIMIENTO A LA META ESTABLECIDA EN MARCO DE ALCANZAR LOS OBJETIVOS DE CALIDAD DEL TRAMO 3 DEL RIO CHICAMOCHA, MUNICIPIO SOGAMOSO – BOYACÁ
        6. Se realizó revisión del proyecto Aunar esfuerzos técnicos, financieros y operativos para llevar a cabo actividades de fortalecimiento y realización del tercer encuentro con las Organizaciones no Gubernamentales ONG´s ambientales de la jurisdicción de Corpoboyacá
        7. Se realizó revisión del proyecto CONSTRUCCIÓN TRAMO COLECTOR FINAL Y PTARD PARA EL MUNICIPIO DE SORACA
        8. Se realizó revisión del proyecto ADQUISICIÓN DEL PREDIO LOTE LAGUNA NEGRA UBICADO EN LA VEREDA MONGUI DEL MUNICIPIO DE MONGUA PARA LA CONSERVACIÓN Y PROTECCIÓN DEL RECURSO HÍDRICO
        Julio, 
        se atendio solicitud de informacion para la formulacion de proyecto FORTALECIMIENTO DEL PROGRAMA DE ERRADICACIÓN DE FUENTES DE EMISIONES CONTAMINANTES PARA LOS SECTORES ARTESANALES DE PRODUCCIÓN DE LADRILLO EN EL MUNICIPIO DE SOGAMOSO, DEPARTAMENTO DE BOYACÁ
        Agosto 
        Se apoyó la formulacion del proyecto “Desarrollo de la estrategia cultural ambiental enmarcada con énfasis lúdico – teatral en las empresas pertenecientes al programa Compromiso con la Productividad Ambientalmente Sostenible – COMPAS t “Programa Compromiso con la Producción Ambientalmente Sostenible, Fase II –COMPAS-”.
        Se realizó la formulación del proyecto Evaluación de la incidencia de sistemas de recolección y extracción de residuos y desechos generados en el proceso de truchicultura en jaulas sobre la calidad del recurso hídrico en el Lago de Tota
        El proyecto FORTALECIMIENTO DEL PROGRAMA DE ERRADICACIÓN DE FUENTES DE EMISIONES CONTAMINANTES PARA LOS SECTORES ARTESANALES DE PRODUCCIÓN DE LADRILLO EN EL MUNICIPIO DE SOGAMOSO, DEPARTAMENTO DE BOYACÁ, se encuentra presentado a DNP y gobernación para viabilidad
        Septiembre
        Con estos proyectos formulados y apoyados en formulación y viabilización se cumple la meta programada para el año 2019, a la fecha no se han recibido directrices nuevas
        Octubre
        Se formulo el pryecto REALIZAR LOS ESTUDIOS DETALLADOS DE ZONIFICACIÓN DE LA AMENAZA, VULNERABILIDAD Y RIESGO, ASÍ COMO DETERMINAR LAS MEDIDAS DE MITIGACIÓN QUE INCLUYAN LOS DISEÑOS NECESARIOS PARA LA ESTABILIZACIÓN DEL MOVIMIENTO EN MASA DEL TALUD Y DE LAS OBRAS LOCALIZADAS EN EL SECTOR DE LA TRANSVERSAL 16 DEL CERRO SAN JOSÉ ALTO, EN EL MUNICIPIO DE DUITAMA, DEPARTAMENTO DE BOYACÁ

        META CUMPLIDA
        Se realizo  OCAD NO PRESENCIAL EL 13/02/2019, correspondiente a Rendicion de Cuentas del segundo semestre de 2018
        Se realiza revisión presupuestal para  sesión de rendición de cuentas del año 2019, en mesa de trabajo el 19-11-2019 con DNP Y MADS
        Se realizo  OCAD NO PRESENCIAL EL 22/11/2019, correspondiente a Rendicion de Cuentas del año 2019',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia656 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity147,
          'year' =>4,
          'value' => 100,
          'description' => 'META CUMPLIDA
        Se realizó cargue de la plataforma con GESPROY correspondiente a los meses de enero, febrero, marzo, abril, mayo,  junio, julio, agosto,septiembre,octubre y noviembre lo correspondiente a diciembre  se cargara en el mes de enero de 2020 

        Se ha solicitado acciones necesarias para generar el último pago de CDS 2014-057 con el fin de lograr el cierre del proyecto BPIN . 2013004150009 “ERRADICACION DE LAS FUENTES DE EMISIONES CONTAMINANTES PARA LOS SECTORES ARTESANALES DE PRODUCCION DE LADRILLO Y CAL EN EL VALLE DE SUGAMUXI DEL DEPARTAMENTO DE BOYACA, en la plataforma GESPROY
        META CUMPLIDA
        En  los meses de enero, febrero, marzo, abril, mayo, junio , julio, agosto, septiembre, octubre, noviembre y diciembre de 2019  se ha dado respuesta a información solicitada por la contraloria referente a: 
        - Proyectos financiados con recursos del Sistema General de Regalías, mediante formato SIRECCI.
         - DNP alertas de monitoreo.
        Quedaria pendiente dar respuesta en el mes de diciembre si llega algun requerimiento

        Se suscribió CPS 2019-212, con el fin de realizar revisión total de los recursos recibidos en CORPOBOYACA provenientes del  FNR y el SGR, para verificar  los saldos disponibles y el cumplimiento con el giro de rendimientos financieros en los casos que aplica 
        Para cumplir con este propósito  se solicito en el mes de septiembre información al Ministerio de Minas acerca de los giros realizados por esta entidad a Corpoboyacá por el concepto regalías  .
        Se realizó mesa de trabajo con DNP y MADS con el fin de recibir apoyo en la revisión de los saldos de los OCAD de las Corporaciones Autónomas Regionales, teniendo en cuenta la próxima rendición de cuentas que serán programadas antes del 15 de diciembre 2019.
        META CUMPLIDA
        En  los meses de enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre, octubre, noviembre y diciembre de 2019 no se ha realizado autidoria visible, por parte de ningún ente de control, se atendio alertas detectadas por la subdireccion de monitoreo y seguimiento de las regalías.
        En  los meses de enero, febrero, marzo, abril, mayo, junio, julio, agosto, septiembre,octubre y noviembre   de 2019, se entrego informe SIRECCI de la contraloria, mensual y trimestral correspondiente a los tres primeros trimestres del año 2019.  lo correspondiente al cuarto trimestre y al mes de diciembre se entregará en enero del año 2020

        Se ha dado respuesta a comunicaciones de alertas correspondientes a los nueve  meses que van corridos del año 2019
        Se han enviado informe de EJECUCIÓN DE PROYECTOS DE INVERSIÓN FINANCIADOS CON RECURSOS DE REGALÍAS Y COMPENSACIONES DISPONIBLES A DICIEMBRE 31 DE 2011 formatos FSCV-17 y CERTIFICACIÓN DE CONTRATOS SUSCRITOS POR ENTIDADES BENEFICIARIAS CON RECURSOS DISPONIBLES A DICIEMBRE 31 DE 2011 formatos FSCV-18 correspondientes a primer, segundo y tercer trimestre de 2019. Lo correspondiente al cuarto trimestre se realizará en el mes de enero del año 2020.
        Se entrego información de proyectos ejecutados, con asignaciones directas, contratos suscritos con dineros recibidos del SGR para el funcionamiento y el Sistema de monitoreo del OCAD-CORPOBOYACA a la contratista de la CPS 2019-212 con fin de adelantar saneamiento contable, presupuestal y tesoral de los dineros del Fondo Nacional de Regalías y el Sistema General de Regalías
        Asistencia a capacitación sobre SPGR para conocer su manejo y funcionamiento  
        Apoyo en revisión contractual, contable y tesoral de las ejecuciones realizadas con dineros del Fondo Nacional de Regalías y el Sistema General de Regalías.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia657 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity148,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia658 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity149,
          'year' =>4,
          'value' => 50,
          'description' => 'Para la construcción del laboratorio se cuenta con los diseños aprobados para la construcción del mismo y en trámite la licencia de construcción. 
        proceso de solicitud de licencia de construccion y subsanacion de documentos ante curaduria urbana 

        Se incorporaron recursos mediante acuerdo 009 del 13 de junio, para la construcción del laboratorio de análisis ambiental 

        Elaboracion de estudios previos para contruccion de laboratorio  
        se realizan mesas de trabajo para el analsis del mercado del laboratorio de calidad ambiental
        Informe final de analsis del mecarcado con oferta y demanda 
        se libera a favor de corpoboyaca $ 1,436,155
        Se Elaboraron los estudios previos para la Estudio de análisis jurídico y financiero para la estructuración del laboratorio de calidad ambiental, Adjudicacion del contrato CPS 2019 247 ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia659 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity150,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia660 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity151,
          'year' =>4,
          'value' => 2,
          'description' => 'Se llevó a cabo la primera Jornada de Fortalecimiento de la Red de Jóvenes de Ambiente de Boyacá el día 13 de septiembre de 2019, con la asistencia de 105 jóvenes provenientes de  los 24 nodos municipales de la jurisdicción de Corpoboyacá.

        - Apoyo en la logística (hospedaje y desayunos) de 120 jóvenes convocados al X Encuentro Nacional de la Red de Jóvenes de Ambiente; jornada realizada durante los días 15, 16 y 17 de noviembre de 2019 en el municipio de Paipa. 
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia661 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity152,
          'year' =>4,
          'value' => 10,
          'description' => 'Socialización de la metodologia a tener en cuenta para la apropiacion de la estrategia recuperando sueños con  las instituciones educativas a partcipar y adelanto del proceso contractual en la adquision de los elementos a entregar a las instituciones educativas participantes.                                                                                                                                            Suministro de parques infantiles, quioscos para lectura y puntos ecológicos, elaborados en madera plástica; en el marco del programa “RECUPERANDO SUEÑOS”, para desarrollar procesos educativos y orientadores de la minimización, separación en la fuente y aprovechamiento de residuos sólidos                                                                                                                                                   ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia662 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity153,
          'year' =>4,
          'value' => 4,
          'description' => 'Definicion de materiales que se requieren en apoyo a las diferentes actividades que se desarrollan en el proceso de educación ambiental.                                                                                   Contrato de suministro de refrigerios  CDS-2019151  en apoyo a los diferentes eventos de educacion ambiental en conmemoracion de fechas ambientales como la celebarcion del dia de la tierra, medio ambiente y reciclaje.                                                                                                   Realizacion de material pedagogico en marco del apoyo actividades de educación ambiental.                                                                                                                                                                                      ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia663 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity154,
          'year' =>4,
          'value' => 1,
          'description' => 'Convocatoria  a partcipar en la III Version de Espeletia Dorada que seran de premio a lider ambeintal y niño ambientalistas.Adelanto de proceso contractual para la realizacion de la premiacion de la III Version de Espeletia Dorada.                                           Contarto CCS 2019220 para el apoyo logistico en la estrategia de Reconocimiento y Estímulo a la Gestión Ambiental Espeletia Dorada.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia664 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity155,
          'year' =>4,
          'value' => 5,
          'description' => 'Contrato prestación  de servicios profesionales  en apoyo al eje de formacion de dinamizadores ambientales.                                                                                                                                Contrato CDS 2019141 en el desarrollo de la estrategia Coloreando Escuelas en los municipios de Tota,Tasco ,Oicata,Tuta y Duitama.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia665 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity156,
          'year' =>4,
          'value' => 0.8,
          'description' => 'CNV 2019021 CORPORACIÓN PARA EL DESARROLLO SOCIAL NATURALEZA Y VIDA- CORPONATURALEZA, EN LA ORIENTACIÓN EN EL FORTALECIMIENTO DE  LAS ORGANIZACIONES NO GUBERNAMENTALES ONG´S AMBIENTALES DE LA JURISDICCIÓN DE CORPOBOYACÁ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia666 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity157,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia667 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity158,
          'year' =>4,
          'value' => 100,
          'description' => 'Solicitud a los municipios información de programacion de reuniones y plan de accion vigencia 2019 y apoyo en la operativización de los CIDEA   asesoria em las reuniones y desarrollo de actividades en cada uno de los Comité.Realización del II encuentro de Cidea municipales.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia668 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity159,
          'year' =>4,
          'value' => 6,
          'description' => 'Convenio 2019005 con el proposito de   acompañar procesos de educación no formal en la formulación e implementación de Proyectos Comunitarios de Educación Ambiental PROCEDA en los municipios de  maripi,toca,chivata, duitama, san jose de pare y oicata                                                                   ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia669 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity160,
          'year' =>4,
          'value' => 8,
          'description' => 'Convenio 2019005 con el proposito de   acompañar procesos de educación  formal en la formulación e implementación de Proyectos  Escolares de Educación Ambiental PRAE  en Las instituciones educativas de Horizontes, Jorge Eliecer Gaitán, El Cruce,Técnica Plinio Mendoza Neira,Antonio José Sandoval , Nueva Familia, Nicolás Cuervo y Rojas Y Técnica Agropecuaria Chivata.                                                         ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia670 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity161,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia671 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity162,
          'year' =>4,
          'value' => 97.5,
          'description' => 'Fue contratada una Comunicadora Social - Periodista, con experiencia  en  diseño y ejecución de plan de medios corporativo, para apoyar la realización de actividades dentro del marco del proyecto Formulación y Ejecución de un Plan de Medios, apoyando la actividad: ¨Diseñar y ejecutar un plan de medios anual, según las necesidades corporativas  y las estrategias  establecidas para gestionar los contenidos institucionales”, la cual hace parte del Plan de Comunicación, Educación y Participación 2016-2019. A quien le han sido pagados $19.678.935 por concepto de honorarios. 


        Fue contratado un Comunicador Social y Periodista, cuyo objeto contractual es: Prestación de servicios para la asesoría profesional y acompañamiento como comunicador social y periodista con experiencia en medios nacionales, para generar espacios de difusión y promoción del accionar corporativo a través de los principales medios de comunicación nacionales, dentro del marco del proyecto Formulación y Ejecución de un Plan de Medios. A quien le han sido pagados $23.582.889 por concepto de honorarios. 


        Fue contratado el servicio de publicación con el Diario Boyacá 7 Días en su especial ambiental semanal ¨Al Natural¨, para la promoción de lo relacionado con Áreas Protegidas y demás temas ambientales corporativos como estrategia de divulgación del quehacer institucional. Actividad por la que han sido pagados $55.730.069. 

        Se ejecuta el plan de medios corporativo a través del Fondo Mixto de Cultura de Boyacá, convenio al cual se le han desembolsado $388.567.127. Fueron proyectados y enviados 75 Comunicados Internos con material informativo alusivo al accionar de la entidad, así como 200 onomásticos enviados a los funcionarios a través de los correos corporativos. Información que también es publicada en la página interna de comunicaciones.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia672 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity163,
          'year' =>4,
          'value' => 96.07,
          'description' => 'De acuerdo con las actividades planteadas en el plan de acción, su ejecución física y financiera se cumplió al 100%, sin embargo falta realizar algunos pagos, ya que algunos contratos se liquididaron hasta el 30 de diciembre. 
        Fueron proyectados y enviados 75 Comunicados Internos con material informativo alusivo al accionar de la entidad, así como 200 mensajes de felicitación por cumpleaños enviados a los funcionarios a través de los correos corporativos Información que también es publicada en la página interna de comunicaciones, y se realizaron estrategias de comunicación interna con entrega de material P.O.P. y con actividades lúdicas a los colaboradores de la Corporación 
        Fueron proyectados y enviados 77 Boletines de Prensa a los principales medios de comunicación regionales y nacionales. Fueron publicadas 3051 notas informativas en nuestras redes sociales como Facebook, Instagram, Twitter y 35 vídeos en el canal de YouTube. Dentro de esta actividad se adelantó el proceso contractual de un Técnico en Fotografía a quien durante la vigencia le han fueron pagados $25,300,800 por concepto de honorarios. Un Comunicador Social - Periodista, con experiencia en el área ambiental  a quien  le han sido pagados $30,987,100 por concepto de honorarios. Una Comunicadora Social con experiencia en educación, a quien  le han sido pagados $21.687,367 por concepto de honorarios y se apoyaron actividasdes del CNV 017 - 2019. Dentro de esta actividad se adelantó el proceso contractual de un Comunicador Social a quien durante la vigencia se le pagaron $19839040  por concepto de honorarios y se realizaron diferentes productos audiovisuales en convenio con el Fonfo Mixto 
        Dentro de esta actividad se han diseñado e impreso 1843 piezas gráficas. Se adelantó el proceso contractual de un Diseñador Gráfico, a quien a la fecha le han sido pagados $34.752.456 por concepto de honorarios.',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia673 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity164,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia674 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity165,
          'year' =>4,
          'value' => 86,
          'description' => 'Con corte a 30 de diciembre de 2019 se decidieron 102 Trámites permisionarios vigencias 2012-2018 así:
        Aprovechamiento de Árboles Aislados: 80
        Aprovechamiento persistente / Único: 5
        Permiso de Emisiones: 6
        Licencia Ambiental: 11
        Porcentaje de avance: 102/40=255% 
        Con corte a 30 de diciembre de 2019, se han decidido 35 trámites de Modificación Licenciamiento Ambiental. 
        Con corte a  30 de diciembre de 2019 se decidieron 94 trámites, de los cuales 83 cumplieron los tiempos establecidos, así:
        OOLA: 4 de 6
        PERM: 6 de 6
        AFAA: 73 de 82
        Porcentaje de avance real: 83/94=0,88 / 0,8*100 = 110%',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia675 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity166,
          'year' =>4,
          'value' => 89,
          'description' => 'Con corte a 30 de Diciembre de 2019 se decidieron trescientos cuarenta y un (341) procesos sancionatorios de vigencias anteriores, correspondientes a 18 cesaciones, 82 decisiones, 45 caducidades, 22 pérdida de fuerza y 174 archivos de expedientes cumpliendo en un 100% esta actividad , con un aporte del 33% de este indicador a la meta. 
        Con corte a 30 de Diciembre de 2019 se le dio impulso procesal a setecientos cuarenta y cinco (745) procesos sancionatorios de vigencias anteriores. cumpliendo con la meta POA, para esta actividad , y con un aporte del 34% de este indicador a la meta. 
        Con corte a 30 de Diciembre se iniciaron doscientos quince (215) procesos sancionatorios, de los cuales ciento setenta y cuatro (174) son inicios de 2019 y cuarenta y un (41) inicios de otros años, de la totalidad de los iniciados se les dio impulso procesal atreinta y seis (36), con un cumplimiento del 68% de este indicador y con un aporte a la meta del 22%.
        ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia676 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity167,
          'year' =>4,
          'value' => 96,
          'description' => 'Corte de 31 de noviembre se reporta 20  seguimientos a PUEAA (OOCA-0016/14,OOCA-0131/15,OOCA-0014/12,OOCA-0055/14,OOCA-0127/15,OOCA-0167/15,OOCA-0325/16,OOCA-0177/15,OOCA-0164/13,OOCA-0093/15,OOCA-0063/16, OOCA-0102/11,OOCA-0156/15,OOCA-0137/15,OOCA-0088/13,OOCA-0047/12,OOCA-0148/12,OOCA-0068/13 ,OOCA-0083/11,OOCA-0152/12). Se realizaron 667 seguimientos a expedientes a corte de 31 de diciembre del año 2019, de 706 programados en el FGR-74',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia677 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity168,
          'year' =>4,
          'value' => 298,
          'description' => 'A corte de 31 de diciembre   realizaron 298 operativos en la jurisdiccion (Pauna 66 operativos, Miraflores 47 operativos, Soata 42 operativos, Socha 42 operativos y centro 101 operativos)',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia678 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity169,
          'year' =>4,
          'value' => 22,
          'description' => 'En la vigencia 2019 se realizaron 78 seguimientos a los PSMV correspondientes a 87 municipios de la jurisdicción de CORPOBOYACÁ. ',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia679 = DB::getPdo()->lastInsertId(); 
         DB::table('evidence_advance')->insert([
          'activity_id' => $idactivity170,
          'year' =>4,
          'value' => 1,
          'description' => '',
          'date_report' => '2019-12-31',
          'rezago' => false, 'type' => 0, 'value_state' =>0, ]); $idevidencia680 = DB::getPdo()->lastInsertId(); 

         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente1 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 11,
          'code' => '1.1.1.1.1.1.1.1',
          'name' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'description' => 'Participación de la sobretasa ambiental - Corporaciones Autónomas Regionales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente2 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 58,
          'code' => '1.1.2.2.2.1.1',
          'name' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'description' => 'Evaluación de licencias, permisos, concesiones, autorizaciones y demás trámites ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente3 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 27,
          'code' => '1.1.2.1.1.1.1.1',
          'name' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'description' => 'Contribución sector eléctrico - Hidroeléctrica (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente4 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 208,
          'code' => '1.2.5.1.3',
          'name' => 'Otros Convenios',
          'description' => 'Otros Convenios',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente5 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 42,
          'code' => '1.1.2.2.1.1.1.1',
          'name' => 'Tasa retributiva (vigencia actual)',
          'description' => 'Tasa retributiva (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente6 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 54,
          'code' => '1.1.2.2.1.1.5.1',
          'name' => 'Otras tasas (vigencia actual)',
          'description' => 'Otras tasas (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente7 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 45,
          'code' => '1.1.2.2.1.1.2.1',
          'name' => 'Tasa por el uso del agua (vigencia actual)',
          'description' => 'Tasa por el uso del agua (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente8 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 48,
          'code' => '1.1.2.2.1.1.3.1',
          'name' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'description' => 'Tasa de aprovechamiento Forestal (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente9 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 54,
          'code' => '1.1.2.2.1.1.5.1',
          'name' => 'Otras tasas (vigencia actual)',
          'description' => 'Otras tasas (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente10 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 84,
          'code' => '1.1.2.3.1.1.1',
          'name' => 'Multas ambientales (vigencia actual)',
          'description' => 'Multas ambientales (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente11 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 79,
          'code' => '1.1.2.2.2.8.1',
          'name' => 'Otros servicios (vigencia actual)',
          'description' => 'Otros servicios (vigencia actual)',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente12 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.6',
          'name' => 'Rendimientos financieros',
          'description' => 'Rendimientos financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente13 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 145,
          'code' => '1.2.2.7',
          'name' => 'Excedentes financieros',
          'description' => 'Excedentes financieros',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente14 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 279,
          'code' => '1.2.7.3.3.5',
          'name' => 'Cancelación de reservas Otras tasas',
          'description' => 'Cancelación de reservas Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente15 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 241,
          'code' => '1.2.6.3.5',
          'name' => 'Recuperación de cartera Otras tasas',
          'description' => 'Recuperación de cartera Otras tasas',
          'type_id' => 22,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente16 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 119,
          'code' => '1.1.2.5.1.1.1.4',
          'name' => 'Aportes de la Nación Funcionamiento',
          'description' => 'Aportes de la Nación Funcionamiento',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente17 = DB::getPdo()->lastInsertId();
           
         DB::table('financing_sources')->insert([
          'father_id' => 118,
          'code' => '1.1.2.5.1.1.2',
          'name' => 'Aportes de la Nación para Inversión',
          'description' => 'Aportes de la Nación para Inversión',
          'type_id' => 23,
          'final_level' => true,
          'group_id' => 17,
          ]);
          $idFuente18 = DB::getPdo()->lastInsertId();
          
          DB::table('financing_sources')->insert([
            'father_id' => 1,
            'code' => '1.3',
            'name' => 'Rezago Año Anterior',
            'description' => 'Rezago Año Anterior',
            'type_id' => 22,
            'final_level' => true,
            'group_id' => 17,
            ]);
            $idFuente19 = DB::getPdo()->lastInsertId();
            
          
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente1,
          'value' => 15500000000,
          'functioning_percentage' => 25,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 75,
          'functioning' => 3875000000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 11625000000,
          'year' => 1,
          ]);
          $idPlan1 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 650000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 650000000,
          'year' => 1,
          ]);
          $idPlan2 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 8250000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 8250000000,
          'year' => 1,
          ]);
          $idPlan3 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 650360322,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 650360322,
          'year' => 1,
          ]);
          $idPlan4 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 2000000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 84,
          'fund_percentage' => 0,
          'investment_percentage' => 16,
          'functioning' => 0,
          'debt_service' => 1680000000,
          'fund' => 0,
          'investment' => 320000000,
          'year' => 1,
          ]);
          $idPlan5 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 320000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 320000000,
          'year' => 1,
          ]);
          $idPlan6 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 23000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 23000000,
          'year' => 1,
          ]);
          $idPlan7 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 200000000,
          'functioning_percentage' => 22.96,
          'debt_service_percentage' => 2.5,
          'fund_percentage' => 0,
          'investment_percentage' => 74.54,
          'functioning' => 45920000,
          'debt_service' => 5000000,
          'fund' => 0,
          'investment' => 149080000,
          'year' => 1,
          ]);
          $idPlan8 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 21000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 21000000,
          'year' => 1,
          ]);
          $idPlan9 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 250000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 250000000,
          'year' => 1,
          ]);
          $idPlan10 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 3398724126,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 3398724126,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan11 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 39647629,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 39647629,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan12 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 820000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 820000000,
          'year' => 1,
          ]);
          $idPlan13 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 1835257575,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1835257575,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 1,
          ]);
          $idPlan14 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 1562220000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1562220000,
          'year' => 1,
          ]);
          $idPlan15 = DB::getPdo()->lastInsertId();

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 16740000000,
          'functioning_percentage' => 13,
          'debt_service_percentage' => 87,
          'fund_percentage' => 0,
          'investment_percentage' => 87,
          'functioning' => 2176200000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 14563800000,
          'year' => 2,
          ]);
          $idPlan16 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 741000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 741000000,
          'year' => 2,
          ]);
          $idPlan17 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 7659600000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 7659600000,
          'year' => 2,
          ]);
          $idPlan18 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 722940115,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 722940115,
          'year' => 2,
          ]);
          $idPlan19 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 2402679500,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 68,
          'fund_percentage' => 0,
          'investment_percentage' => 32,
          'functioning' => 0,
          'debt_service' => 1633822060,
          'fund' => 0,
          'investment' => 768857440,
          'year' => 2,
          ]);
          $idPlan20 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 360000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 360000000,
          'year' => 2,
          ]);
          $idPlan21 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 15000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 15000000,
          'year' => 2,
          ]);
          $idPlan22 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 202000000,
          'functioning_percentage' => 39.0448,
          'debt_service_percentage' => 8.009,
          'fund_percentage' => 0,
          'investment_percentage' => 52.9462,
          'functioning' => 78870496,
          'debt_service' => 16178180,
          'fund' => 0,
          'investment' => 106951324,
          'year' => 2,
          ]);
          $idPlan23 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 45000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 45000000,
          'year' => 2,
          ]);
          $idPlan24 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 280000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 280000000,
          'year' => 2,
          ]);
          $idPlan25 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 4889455685,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 4889455685,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan26 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 46861566,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 46861566,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan27 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 885400000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 885400000,
          'year' => 2,
          ]);
          $idPlan28 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 1969961000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1969961000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 2,
          ]);
          $idPlan29 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 1523500000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1523500000,
          'year' => 2,
          ]);
          $idPlan30 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 17912000000,
          'functioning_percentage' => 20,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 80,
          'functioning' => 3582400000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 14329600000,
          'year' => 3,
          ]);
          $idPlan31 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
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
          $idPlan32 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 8240000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 8240000000,
          'year' => 3,
          ]);
          $idPlan33 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente5,
          'value' => 458337000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 458337000,
          'year' => 3,
          ]);
          $idPlan34 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 1800000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 88,
          'fund_percentage' => 0,
          'investment_percentage' => 12,
          'functioning' => 0,
          'debt_service' => 1584000000,
          'fund' => 0,
          'investment' => 216000000,
          'year' => 3,
          ]);
          $idPlan35 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 420000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 420000000,
          'year' => 3,
          ]);
          $idPlan36 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 16500000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 16500000,
          'year' => 3,
          ]);
          $idPlan37 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 150000000,
          'functioning_percentage' => 9.024,
          'debt_service_percentage' => 10.667,
          'fund_percentage' => 0,
          'investment_percentage' => 80.309,
          'functioning' => 13536000,
          'debt_service' => 16000500,
          'fund' => 0,
          'investment' => 120463500,
          'year' => 3,
          ]);
          $idPlan38 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 62000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 62000000,
          'year' => 3,
          ]);
          $idPlan39 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 250000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 250000000,
          'year' => 3,
          ]);
          $idPlan40 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 3831127424,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 3831127424,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan41 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 433251002,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 433251002,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan42 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 1172000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1172000000,
          'year' => 3,
          ]);
          $idPlan43 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2041127000,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2041127000,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 3,
          ]);
          $idPlan44 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente18,
          'value' => 1069048000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1069048000,
          'year' => 3,
          ]);
          $idPlan45 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente2,
          'value' => 20500000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 20500000000,
          'year' => 4,
          ]);
          $idPlan46 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente3,
          'value' => 1266000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1266000000,
          'year' => 4,
          ]);
          $idPlan47 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente4,
          'value' => 8819000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 8819000000,
          'year' => 4,
          ]);
          $idPlan48 = DB::getPdo()->lastInsertId();
           

         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente6,
          'value' => 4000000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 51,
          'fund_percentage' => 0,
          'investment_percentage' => 49,
          'functioning' => 0,
          'debt_service' => 2040000000,
          'fund' => 0,
          'investment' => 1960000000,
          'year' => 4,
          ]);
          $idPlan49 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente7,
          'value' => 10000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 10000000,
          'year' => 4,
          ]);
          $idPlan50 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente8,
          'value' => 430000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 430000000,
          'year' => 4,
          ]);
          $idPlan51 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente9,
          'value' => 10000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 10000000,
          'year' => 4,
          ]);
          $idPlan52 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente10,
          'value' => 7000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 7000000,
          'year' => 4,
          ]);
          $idPlan53 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente11,
          'value' => 150000000,
          'functioning_percentage' => 43.463,
          'debt_service_percentage' => 40.333,
          'fund_percentage' => 0,
          'investment_percentage' => 16.204,
          'functioning' => 65194500,
          'debt_service' => 60499500,
          'fund' => 0,
          'investment' => 24306000,
          'year' => 4,
          ]);
          $idPlan54 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente12,
          'value' => 267000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 267000000,
          'year' => 4,
          ]);
          $idPlan55 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente13,
          'value' => 260000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 260000000,
          'year' => 4,
          ]);
          $idPlan56 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente14,
          'value' => 10710050686,
          'functioning_percentage' => 77,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 23,
          'functioning' => 8246739028.22,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 2463311657.78,
          'year' => 4,
          ]);
          $idPlan57 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente15,
          'value' => 1677583061,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 1677583061,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan58 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente16,
          'value' => 1665000000,
          'functioning_percentage' => 0,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 100,
          'functioning' => 0,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 1665000000,
          'year' => 4,
          ]);
          $idPlan59 = DB::getPdo()->lastInsertId();
           
         DB::table('financial_plans')->insert([
          'p_a_i_id' => $idpai1,
          'source_id' => $idFuente17,
          'value' => 2106368186,
          'functioning_percentage' => 100,
          'debt_service_percentage' => 0,
          'fund_percentage' => 0,
          'investment_percentage' => 0,
          'functioning' => 2106368186,
          'debt_service' => 0,
          'fund' => 0,
          'investment' => 0,
          'year' => 4,
          ]);
          $idPlan60 = DB::getPdo()->lastInsertId();
          
          
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
           
        DB::table('implementations')->insert([
          'p_a_i_s_id'=>$idpai1,
          ]);
          $idImplementation1 = DB::getPdo()->lastInsertId();


         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 15486872188,
          'financial_plans_id' => $idPlan1,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo1 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1255460962,
          'financial_plans_id' => $idPlan2,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo2 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 6653447888,
          'financial_plans_id' => $idPlan3,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo3 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 440901910,
          'financial_plans_id' => $idPlan4,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo4 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 2668669182,
          'financial_plans_id' => $idPlan5,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo5 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 326595904,
          'financial_plans_id' => $idPlan6,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo6 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 14901580,
          'financial_plans_id' => $idPlan7,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo7 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 94576381,
          'financial_plans_id' => $idPlan8,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo8 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 111832284,
          'financial_plans_id' => $idPlan9,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo9 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 303388029,
          'financial_plans_id' => $idPlan10,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo10 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 3398724126,
          'financial_plans_id' => $idPlan11,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo11 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 39647629,
          'financial_plans_id' => $idPlan12,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo12 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1732589858,
          'financial_plans_id' => $idPlan13,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo13 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1835257575,
          'financial_plans_id' => $idPlan14,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo14 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 1033241000,
          'financial_plans_id' => $idPlan15,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo15 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2016-12-31',
          'value' => 603075205,
          'financial_plans_id' => $idPlan61,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo61 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 17635332116,
          'financial_plans_id' => $idPlan16,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo16 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1057223390,
          'financial_plans_id' => $idPlan17,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo17 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 6976048107,
          'financial_plans_id' => $idPlan18,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo18 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 566321264,
          'financial_plans_id' => $idPlan19,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo19 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 2812584957,
          'financial_plans_id' => $idPlan20,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo20 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 437622112,
          'financial_plans_id' => $idPlan21,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo21 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 20798160,
          'financial_plans_id' => $idPlan22,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo22 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 248674661,
          'financial_plans_id' => $idPlan23,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo23 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 91745958,
          'financial_plans_id' => $idPlan24,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo24 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 249660383,
          'financial_plans_id' => $idPlan25,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo25 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 4889455685,
          'financial_plans_id' => $idPlan26,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo26 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 46861566,
          'financial_plans_id' => $idPlan27,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo27 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 662848533,
          'financial_plans_id' => $idPlan28,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo28 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 1969655310,
          'financial_plans_id' => $idPlan29,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo29 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 422418019,
          'financial_plans_id' => $idPlan30,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo30 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2017-12-31',
          'value' => 528979000,
          'financial_plans_id' => $idPlan62,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo62 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 21718856647,
          'financial_plans_id' => $idPlan31,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo31 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 835828934.6,
          'financial_plans_id' => $idPlan32,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo32 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 7741476703.43,
          'financial_plans_id' => $idPlan33,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo33 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 198092000,
          'financial_plans_id' => $idPlan34,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo34 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 3754851419.68,
          'financial_plans_id' => $idPlan35,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo35 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 412601108.4,
          'financial_plans_id' => $idPlan36,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo36 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 13056860,
          'financial_plans_id' => $idPlan37,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo37 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 202772467,
          'financial_plans_id' => $idPlan38,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo38 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 91784953,
          'financial_plans_id' => $idPlan39,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo39 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 160177293.9,
          'financial_plans_id' => $idPlan40,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo40 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 3831127424,
          'financial_plans_id' => $idPlan41,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo41 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 433251002,
          'financial_plans_id' => $idPlan42,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo42 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 1651642807.55,
          'financial_plans_id' => $idPlan43,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo43 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 2066245278,
          'financial_plans_id' => $idPlan44,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo44 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 299551433.67,
          'financial_plans_id' => $idPlan45,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo45 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2018-12-31',
          'value' => 972095356,
          'financial_plans_id' => $idPlan63,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo63 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 24596380908.19,
          'financial_plans_id' => $idPlan46,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo46 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1759778045,
          'financial_plans_id' => $idPlan47,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo47 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 11124984245.62,
          'financial_plans_id' => $idPlan48,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo48 = DB::getPdo()->lastInsertId();
           

         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 4005605316.2,
          'financial_plans_id' => $idPlan49,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo49 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1770068,
          'financial_plans_id' => $idPlan50,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo50 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 463715263.19,
          'financial_plans_id' => $idPlan51,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo51 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 0,
          'financial_plans_id' => $idPlan52,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo52 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 5210800,
          'financial_plans_id' => $idPlan53,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo53 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 147158892.18,
          'financial_plans_id' => $idPlan54,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo54 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 441436180,
          'financial_plans_id' => $idPlan55,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo55 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 306803621.06,
          'financial_plans_id' => $idPlan56,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo56 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 10710050686,
          'financial_plans_id' => $idPlan57,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo57 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1677583061,
          'financial_plans_id' => $idPlan58,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo58 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 1492249940.21,
          'financial_plans_id' => $idPlan59,
          'implementation_id' => $idImplementation1,
          ]);
          $idRecaudo59 = DB::getPdo()->lastInsertId();
           
         DB::table('fundraisings')->insert([
          'date' => '2019-12-31',
          'value' => 2083468035,
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
            'group_id' => 17,
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
            'group_id' => 17,
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
            'group_id' => 17,
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
            'group_id' => 17,
            ]);
            $idFuenteGasto6 = DB::getPdo()->lastInsertId();
            
            
          DB::table('cost_sources')->insert([
            'father_id' => 29,
            'code' => '2.1.4.3.1',
            'name' => 'Cuota de fiscalización y auditaje',
            'description' => 'Cuota de fiscalización y auditaje',
            'functioning' => TRUE,
            'compensation' => FALSE,
            'debt_service' => FALSE,
            'group_id' => 17,
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
            'group_id' => 17,
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
            'group_id' => 17,
            ]);
            $idFuenteGasto7 = DB::getPdo()->lastInsertId();
            
            
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 4218594535,
              'value_comitted' => 3566911727,
              'value_paid' => 3492670675,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto1,
              'p_a_i_id' => $idpai1,
              'group_id' => 17,
              ]);
              $idGasto1 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 540000000,
              'value_comitted' => 485942405,
              'value_paid' => 397437539,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto2,
              'p_a_i_id' => $idpai1,
              'group_id' => 17,
              ]);
              $idGasto2 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 1780842870,
              'value_comitted' => 1639084434,
              'value_paid' => 1297613776,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto3,
              'p_a_i_id' => $idpai1,
              'group_id' => 17,
              ]);
              $idGasto3 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 92777000,
              'value_comitted' => 71603581,
              'value_paid' => 69621207,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto4,
              'p_a_i_id' => $idpai1,
              'group_id' => 17,
              ]);
              $idGasto4 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 36077000,
              'value_comitted' => 35667031,
              'value_paid' => 35667031,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto5,
              'p_a_i_id' => $idpai1,
              'group_id' => 17,
              ]);
              $idGasto5 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 691000000,
              'value_comitted' => 4442100,
              'value_paid' => 4442100,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => TRUE,
              'compensation' => FALSE,
              'debt_service' => FALSE,
              'cost_sources_id' => $idFuenteGasto6,
              'p_a_i_id' => $idpai1,
              'group_id' => 17,
              ]);
              $idGasto6 = DB::getPdo()->lastInsertId();
              
              
            DB::table('financial_costs')->insert([
              'year' => 1,
              'value_bugeted' => 1685000000,
              'value_comitted' => 1669923940,
              'value_paid' => 1669923940,
              'own' => TRUE,
              'nation' => FALSE,
              'royalties' => FALSE,
              'funds' => FALSE,
              'functioning' => FALSE,
              'compensation' => FALSE,
              'debt_service' => TRUE,
              'cost_sources_id' => $idFuenteGasto7,
              'p_a_i_id' => $idpai1,
              'group_id' => 17,
              ]);
              $idGasto7 = DB::getPdo()->lastInsertId();
              
              
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 1747609045,
                'value_comitted' => 1747609045,
                'value_paid' => 1747609045,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto1,
                'p_a_i_id' => $idpai1,
                'group_id' => 17,
                ]);
                $idGasto8 = DB::getPdo()->lastInsertId();
                
                
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 66783530,
                'value_comitted' => 66783530,
                'value_paid' => 66783530,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto3,
                'p_a_i_id' => $idpai1,
                'group_id' => 17,
                ]);
                $idGasto9 = DB::getPdo()->lastInsertId();
                
                
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
                'group_id' => 17,
                ]);
                $idGasto10 = DB::getPdo()->lastInsertId();
                
                
              DB::table('financial_costs')->insert([
                'year' => 1,
                'value_bugeted' => 13642000,
                'value_comitted' => 13642000,
                'value_paid' => 13642000,
                'own' => FALSE,
                'nation' => TRUE,
                'royalties' => FALSE,
                'funds' => FALSE,
                'functioning' => TRUE,
                'compensation' => FALSE,
                'debt_service' => FALSE,
                'cost_sources_id' => $idFuenteGasto5,
                'p_a_i_id' => $idpai1,
                'group_id' => 17,
                ]);
                $idGasto11 = DB::getPdo()->lastInsertId();
                
                
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 3667528000,
                  'value_comitted' => 3434305370,
                  'value_paid' => 3404160693,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto1,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 17,
                  ]);
                  $idGasto12 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 424000000,
                  'value_comitted' => 334690332,
                  'value_paid' => 302114447,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto2,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 17,
                  ]);
                  $idGasto13 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 2172374250,
                  'value_comitted' => 1957955054,
                  'value_paid' => 1456956657,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto3,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 17,
                  ]);
                  $idGasto14 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 101127000,
                  'value_comitted' => 79479006,
                  'value_paid' => 77236140,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto4,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 17,
                  ]);
                  $idGasto15 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 46358000,
                  'value_comitted' => 45006680,
                  'value_paid' => 45006680,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto5,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 17,
                  ]);
                  $idGasto16 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 780000000,
                  'value_comitted' => 306413080,
                  'value_paid' => 306413080,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => TRUE,
                  'compensation' => FALSE,
                  'debt_service' => FALSE,
                  'cost_sources_id' => $idFuenteGasto6,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 17,
                  ]);
                  $idGasto17 = DB::getPdo()->lastInsertId();
                  
                  
                DB::table('financial_costs')->insert([
                  'year' => 2,
                  'value_bugeted' => 1650000000,
                  'value_comitted' => 1574169133,
                  'value_paid' => 1574169133,
                  'own' => TRUE,
                  'nation' => FALSE,
                  'royalties' => FALSE,
                  'funds' => FALSE,
                  'functioning' => FALSE,
                  'compensation' => FALSE,
                  'debt_service' => TRUE,
                  'cost_sources_id' => $idFuenteGasto7,
                  'p_a_i_id' => $idpai1,
                  'group_id' => 17,
                  ]);
                  $idGasto18 = DB::getPdo()->lastInsertId();
                  
                  
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 1885651000,
                    'value_comitted' => 1885651000,
                    'value_paid' => 1885651000,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto1,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 17,
                    ]);
                    $idGasto19 = DB::getPdo()->lastInsertId();
                    
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 63445000,
                    'value_comitted' => 63139610,
                    'value_paid' => 63139610,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto3,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 17,
                    ]);
                    $idGasto20 = DB::getPdo()->lastInsertId();
                    
                    
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
                    'group_id' => 17,
                    ]);
                    $idGasto21 = DB::getPdo()->lastInsertId();
                    
                    
                  DB::table('financial_costs')->insert([
                    'year' => 2,
                    'value_bugeted' => 13642000,
                    'value_comitted' => 13642000,
                    'value_paid' => 13642000,
                    'own' => FALSE,
                    'nation' => TRUE,
                    'royalties' => FALSE,
                    'funds' => FALSE,
                    'functioning' => TRUE,
                    'compensation' => FALSE,
                    'debt_service' => FALSE,
                    'cost_sources_id' => $idFuenteGasto5,
                    'p_a_i_id' => $idpai1,
                    'group_id' => 17,
                    ]);
                    $idGasto22 = DB::getPdo()->lastInsertId();
                    
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 4203851000,
                      'value_comitted' => 3806671672,
                      'value_paid' => 3797042898,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto1,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 17,
                      ]);
                      $idGasto23 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 481000000,
                      'value_comitted' => 383232637,
                      'value_paid' => 353001125,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto2,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 17,
                      ]);
                      $idGasto24 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 2202955000,
                      'value_comitted' => 1943724142,
                      'value_paid' => 1507027483,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto3,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 17,
                      ]);
                      $idGasto25 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 81560000,
                      'value_comitted' => 78758705,
                      'value_paid' => 78758705,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto4,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 17,
                      ]);
                      $idGasto26 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 50949000,
                      'value_comitted' => 50083680,
                      'value_paid' => 50083680,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto5,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 17,
                      ]);
                      $idGasto27 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 840000000,
                      'value_comitted' => 176937403,
                      'value_paid' => 176937403,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => TRUE,
                      'compensation' => FALSE,
                      'debt_service' => FALSE,
                      'cost_sources_id' => $idFuenteGasto6,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 17,
                      ]);
                      $idGasto28 = DB::getPdo()->lastInsertId();
                      
                      
                    DB::table('financial_costs')->insert([
                      'year' => 3,
                      'value_bugeted' => 1600000000,
                      'value_comitted' => 1440965543,
                      'value_paid' => 1440965543,
                      'own' => TRUE,
                      'nation' => FALSE,
                      'royalties' => FALSE,
                      'funds' => FALSE,
                      'functioning' => FALSE,
                      'compensation' => FALSE,
                      'debt_service' => TRUE,
                      'cost_sources_id' => $idFuenteGasto7,
                      'p_a_i_id' => $idpai1,
                      'group_id' => 17,
                      ]);
                      $idGasto29 = DB::getPdo()->lastInsertId();
                      
                      
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 1956191000,
                        'value_comitted' => 1956191000,
                        'value_paid' => 1956191000,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto1,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 17,
                        ]);
                        $idGasto30 = DB::getPdo()->lastInsertId();
                        
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 63445000,
                        'value_comitted' => 63445000,
                        'value_paid' => 63445000,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto3,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 17,
                        ]);
                        $idGasto31 = DB::getPdo()->lastInsertId();
                        
                        
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
                        'group_id' => 17,
                        ]);
                        $idGasto32 = DB::getPdo()->lastInsertId();
                        
                      DB::table('financial_costs')->insert([
                        'year' => 3,
                        'value_bugeted' => 14051000,
                        'value_comitted' => 14051000,
                        'value_paid' => 14051000,
                        'own' => FALSE,
                        'nation' => TRUE,
                        'royalties' => FALSE,
                        'funds' => FALSE,
                        'functioning' => TRUE,
                        'compensation' => FALSE,
                        'debt_service' => FALSE,
                        'cost_sources_id' => $idFuenteGasto5,
                        'p_a_i_id' => $idpai1,
                        'group_id' => 17,
                        ]);
                        $idGasto33 = DB::getPdo()->lastInsertId();

                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 3816563814,
                          'value_comitted' => 3382071625,
                          'value_paid' => 3342038786,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto1,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 17,
                          ]);
                          $idGasto34 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 911803597,
                          'value_comitted' => 723102784,
                          'value_paid' => 666718282.48,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto2,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 17,
                          ]);
                          $idGasto35 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 4197858599,
                          'value_comitted' => 3748991845,
                          'value_paid' => 3285073666.4,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto3,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 17,
                          ]);
                          $idGasto36 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 107567800,
                          'value_comitted' => 71699256,
                          'value_paid' => 71699256,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto4,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 17,
                          ]);
                          $idGasto37 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 55723200,
                          'value_comitted' => 47257192,
                          'value_paid' => 47257192,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto5,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 17,
                          ]);
                          $idGasto38 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 900000000,
                          'value_comitted' => 407515341,
                          'value_paid' => 301024809,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => TRUE,
                          'compensation' => FALSE,
                          'debt_service' => FALSE,
                          'cost_sources_id' => $idFuenteGasto6,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 17,
                          ]);
                          $idGasto39 = DB::getPdo()->lastInsertId();
                          
                          
                        DB::table('financial_costs')->insert([
                          'year' => 4,
                          'value_bugeted' => 2100500000,
                          'value_comitted' => 2038631549,
                          'value_paid' => 2038631549,
                          'own' => TRUE,
                          'nation' => FALSE,
                          'royalties' => FALSE,
                          'funds' => FALSE,
                          'functioning' => FALSE,
                          'compensation' => FALSE,
                          'debt_service' => TRUE,
                          'cost_sources_id' => $idFuenteGasto7,
                          'p_a_i_id' => $idpai1,
                          'group_id' => 17,
                          ]);
                          $idGasto40 = DB::getPdo()->lastInsertId();
                          
                          
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 2020745303,
                            'value_comitted' => 2020745303,
                            'value_paid' => 2019170915,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto1,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 17,
                            ]);
                            $idGasto41 = DB::getPdo()->lastInsertId();
                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 63445000,
                            'value_comitted' => 63445000,
                            'value_paid' => 63445000,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto3,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 17,
                            ]);
                            $idGasto42 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 7663200,
                            'value_comitted' => 7663200,
                            'value_paid' => 7663200,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto4,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 17,
                            ]);
                            $idGasto43 = DB::getPdo()->lastInsertId();
                            
                            
                          DB::table('financial_costs')->insert([
                            'year' => 4,
                            'value_bugeted' => 14514683,
                            'value_comitted' => 14514683,
                            'value_paid' => 14514683,
                            'own' => FALSE,
                            'nation' => TRUE,
                            'royalties' => FALSE,
                            'funds' => FALSE,
                            'functioning' => TRUE,
                            'compensation' => FALSE,
                            'debt_service' => FALSE,
                            'cost_sources_id' => $idFuenteGasto5,
                            'p_a_i_id' => $idpai1,
                            'group_id' => 17,
                            ]);
                            $idGasto44 = DB::getPdo()->lastInsertId();
                         
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity6,
            'source_id' =>$idPlan1,
            'value' => 1737746949,
            'goal' => 0,
            'evidence_balance' => 1737746949,
            'age' => 1,
            ]);
            $idactivitySource1 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity9,
            'source_id' =>$idPlan1,
            'value' => 293670996,
            'goal' => 0,
            'evidence_balance' => 293670996,
            'age' => 1,
            ]);
            $idactivitySource2 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity13,
            'source_id' =>$idPlan1,
            'value' => 96062116,
            'goal' => 0,
            'evidence_balance' => 96062116,
            'age' => 1,
            ]);
            $idactivitySource3 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity19,
            'source_id' =>$idPlan1,
            'value' => 496991301,
            'goal' => 0,
            'evidence_balance' => 496991301,
            'age' => 1,
            ]);
            $idactivitySource4 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity23,
            'source_id' =>$idPlan1,
            'value' => 56599261,
            'goal' => 0,
            'evidence_balance' => 56599261,
            'age' => 1,
            ]);
            $idactivitySource5 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity25,
            'source_id' =>$idPlan1,
            'value' => 620000000,
            'goal' => 0,
            'evidence_balance' => 620000000,
            'age' => 1,
            ]);
            $idactivitySource6 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity30,
            'source_id' =>$idPlan1,
            'value' => 300942682,
            'goal' => 0,
            'evidence_balance' => 300942682,
            'age' => 1,
            ]);
            $idactivitySource7 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity35,
            'source_id' =>$idPlan1,
            'value' => 545000000,
            'goal' => 0,
            'evidence_balance' => 545000000,
            'age' => 1,
            ]);
            $idactivitySource8 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity37,
            'source_id' =>$idPlan1,
            'value' => 140000000,
            'goal' => 0,
            'evidence_balance' => 140000000,
            'age' => 1,
            ]);
            $idactivitySource9 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity40,
            'source_id' =>$idPlan1,
            'value' => 675000000,
            'goal' => 0,
            'evidence_balance' => 675000000,
            'age' => 1,
            ]);
            $idactivitySource10 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity46,
            'source_id' =>$idPlan1,
            'value' => 144886244,
            'goal' => 0,
            'evidence_balance' => 144886244,
            'age' => 1,
            ]);
            $idactivitySource11 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity48,
            'source_id' =>$idPlan1,
            'value' => 37600000,
            'goal' => 0,
            'evidence_balance' => 37600000,
            'age' => 1,
            ]);
            $idactivitySource12 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity50,
            'source_id' =>$idPlan1,
            'value' => 220000000,
            'goal' => 0,
            'evidence_balance' => 220000000,
            'age' => 1,
            ]);
            $idactivitySource13 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity53,
            'source_id' =>$idPlan1,
            'value' => 34603665,
            'goal' => 0,
            'evidence_balance' => 34603665,
            'age' => 1,
            ]);
            $idactivitySource14 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity59,
            'source_id' =>$idPlan1,
            'value' => 312035160,
            'goal' => 0,
            'evidence_balance' => 312035160,
            'age' => 1,
            ]);
            $idactivitySource15 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity70,
            'source_id' =>$idPlan1,
            'value' => 106424000,
            'goal' => 0,
            'evidence_balance' => 106424000,
            'age' => 1,
            ]);
            $idactivitySource16 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity76,
            'source_id' =>$idPlan1,
            'value' => 132576000,
            'goal' => 0,
            'evidence_balance' => 132576000,
            'age' => 1,
            ]);
            $idactivitySource17 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity79,
            'source_id' =>$idPlan1,
            'value' => 612690560,
            'goal' => 0,
            'evidence_balance' => 612690560,
            'age' => 1,
            ]);
            $idactivitySource18 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity83,
            'source_id' =>$idPlan1,
            'value' => 280000000,
            'goal' => 0,
            'evidence_balance' => 280000000,
            'age' => 1,
            ]);
            $idactivitySource19 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity86,
            'source_id' =>$idPlan1,
            'value' => 200000000,
            'goal' => 0,
            'evidence_balance' => 200000000,
            'age' => 1,
            ]);
            $idactivitySource20 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity88,
            'source_id' =>$idPlan1,
            'value' => 63000000,
            'goal' => 0,
            'evidence_balance' => 63000000,
            'age' => 1,
            ]);
            $idactivitySource21 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity90,
            'source_id' =>$idPlan1,
            'value' => 100000000,
            'goal' => 0,
            'evidence_balance' => 100000000,
            'age' => 1,
            ]);
            $idactivitySource22 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity92,
            'source_id' =>$idPlan1,
            'value' => 1525194775,
            'goal' => 0,
            'evidence_balance' => 1525194775,
            'age' => 1,
            ]);
            $idactivitySource23 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity96,
            'source_id' =>$idPlan1,
            'value' => 501000000,
            'goal' => 0,
            'evidence_balance' => 501000000,
            'age' => 1,
            ]);
            $idactivitySource24 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity98,
            'source_id' =>$idPlan1,
            'value' => 397360899,
            'goal' => 0,
            'evidence_balance' => 397360899,
            'age' => 1,
            ]);
            $idactivitySource25 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity107,
            'source_id' =>$idPlan1,
            'value' => 27458789,
            'goal' => 0,
            'evidence_balance' => 27458789,
            'age' => 1,
            ]);
            $idactivitySource26 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity111,
            'source_id' =>$idPlan1,
            'value' => 135156000,
            'goal' => 0,
            'evidence_balance' => 135156000,
            'age' => 1,
            ]);
            $idactivitySource27 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity115,
            'source_id' =>$idPlan1,
            'value' => 102000000,
            'goal' => 0,
            'evidence_balance' => 102000000,
            'age' => 1,
            ]);
            $idactivitySource28 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity121,
            'source_id' =>$idPlan1,
            'value' => 650190436,
            'goal' => 0,
            'evidence_balance' => 650190436,
            'age' => 1,
            ]);
            $idactivitySource29 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity125,
            'source_id' =>$idPlan1,
            'value' => 18338777,
            'goal' => 0,
            'evidence_balance' => 18338777,
            'age' => 1,
            ]);
            $idactivitySource30 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity129,
            'source_id' =>$idPlan1,
            'value' => 841836728,
            'goal' => 0,
            'evidence_balance' => 841836728,
            'age' => 1,
            ]);
            $idactivitySource31 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity132,
            'source_id' =>$idPlan1,
            'value' => 220634662,
            'goal' => 0,
            'evidence_balance' => 220634662,
            'age' => 1,
            ]);
            $idactivitySource32 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity136,
            'source_id' =>$idPlan3,
            'value' => 320000000,
            'goal' => 0,
            'evidence_balance' => 320000000,
            'age' => 1,
            ]);
            $idactivitySource33 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity139,
            'source_id' =>$idPlan3,
            'value' => 156824495,
            'goal' => 0,
            'evidence_balance' => 156824495,
            'age' => 1,
            ]);
            $idactivitySource34 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity145,
            'source_id' =>$idPlan3,
            'value' => 90000000,
            'goal' => 0,
            'evidence_balance' => 90000000,
            'age' => 1,
            ]);
            $idactivitySource35 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity157,
            'source_id' =>$idPlan3,
            'value' => 210153277,
            'goal' => 0,
            'evidence_balance' => 210153277,
            'age' => 1,
            ]);
            $idactivitySource36 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity161,
            'source_id' =>$idPlan3,
            'value' => 148846723,
            'goal' => 0,
            'evidence_balance' => 148846723,
            'age' => 1,
            ]);
            $idactivitySource37 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity164,
            'source_id' =>$idPlan3,
            'value' => 335000000,
            'goal' => 0,
            'evidence_balance' => 335000000,
            'age' => 1,
            ]);
            $idactivitySource38 = DB::getPdo()->lastInsertId();
            
            
            
          DB::table('activity_sources')->insert([
            'activity_id' => $idactivity170,
            'source_id' =>$idPlan3,
            'value' => 150000000,
            'goal' => 0,
            'evidence_balance' => 150000000,
            'age' => 1,
            ]);
            $idactivitySource39 = DB::getPdo()->lastInsertId();
            
            
            
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia6,
              'activity_source_id' =>$idactivitySource1,
              'value' => 1615146669,
              ]);
              $idevidenceFinancial1 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia9,
              'activity_source_id' =>$idactivitySource2,
              'value' => 220961324,
              ]);
              $idevidenceFinancial2 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia13,
              'activity_source_id' =>$idactivitySource3,
              'value' => 96062116,
              ]);
              $idevidenceFinancial3 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia19,
              'activity_source_id' =>$idactivitySource4,
              'value' => 491691253,
              ]);
              $idevidenceFinancial4 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia23,
              'activity_source_id' =>$idactivitySource5,
              'value' => 54795894,
              ]);
              $idevidenceFinancial5 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia25,
              'activity_source_id' =>$idactivitySource6,
              'value' => 516741443,
              ]);
              $idevidenceFinancial6 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia30,
              'activity_source_id' =>$idactivitySource7,
              'value' => 300942682,
              ]);
              $idevidenceFinancial7 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia35,
              'activity_source_id' =>$idactivitySource8,
              'value' => 443693118,
              ]);
              $idevidenceFinancial8 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia37,
              'activity_source_id' =>$idactivitySource9,
              'value' => 139540796,
              ]);
              $idevidenceFinancial9 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia40,
              'activity_source_id' =>$idactivitySource10,
              'value' => 142745941,
              ]);
              $idevidenceFinancial10 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia46,
              'activity_source_id' =>$idactivitySource11,
              'value' => 144886244,
              ]);
              $idevidenceFinancial11 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia48,
              'activity_source_id' =>$idactivitySource12,
              'value' => 34539757,
              ]);
              $idevidenceFinancial12 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia50,
              'activity_source_id' =>$idactivitySource13,
              'value' => 197362514,
              ]);
              $idevidenceFinancial13 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia53,
              'activity_source_id' =>$idactivitySource14,
              'value' => 34603111,
              ]);
              $idevidenceFinancial14 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia59,
              'activity_source_id' =>$idactivitySource15,
              'value' => 290890251,
              ]);
              $idevidenceFinancial15 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia70,
              'activity_source_id' =>$idactivitySource16,
              'value' => 106424000,
              ]);
              $idevidenceFinancial16 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia76,
              'activity_source_id' =>$idactivitySource17,
              'value' => 67016228,
              ]);
              $idevidenceFinancial17 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia79,
              'activity_source_id' =>$idactivitySource18,
              'value' => 582392623,
              ]);
              $idevidenceFinancial18 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia83,
              'activity_source_id' =>$idactivitySource19,
              'value' => 279885890,
              ]);
              $idevidenceFinancial19 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia86,
              'activity_source_id' =>$idactivitySource20,
              'value' => 199855965,
              ]);
              $idevidenceFinancial20 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia88,
              'activity_source_id' =>$idactivitySource21,
              'value' => 57726840,
              ]);
              $idevidenceFinancial21 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia90,
              'activity_source_id' =>$idactivitySource22,
              'value' => 100000000,
              ]);
              $idevidenceFinancial22 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia92,
              'activity_source_id' =>$idactivitySource23,
              'value' => 1426110824,
              ]);
              $idevidenceFinancial23 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia96,
              'activity_source_id' =>$idactivitySource24,
              'value' => 500996000,
              ]);
              $idevidenceFinancial24 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia98,
              'activity_source_id' =>$idactivitySource25,
              'value' => 292240214,
              ]);
              $idevidenceFinancial25 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia107,
              'activity_source_id' =>$idactivitySource26,
              'value' => 27458789,
              ]);
              $idevidenceFinancial26 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia111,
              'activity_source_id' =>$idactivitySource27,
              'value' => 133122778,
              ]);
              $idevidenceFinancial27 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia115,
              'activity_source_id' =>$idactivitySource28,
              'value' => 94113666,
              ]);
              $idevidenceFinancial28 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia121,
              'activity_source_id' =>$idactivitySource29,
              'value' => 550240350,
              ]);
              $idevidenceFinancial29 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia125,
              'activity_source_id' =>$idactivitySource30,
              'value' => 18338777,
              ]);
              $idevidenceFinancial30 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia129,
              'activity_source_id' =>$idactivitySource31,
              'value' => 284428793,
              ]);
              $idevidenceFinancial31 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia132,
              'activity_source_id' =>$idactivitySource32,
              'value' => 39925486,
              ]);
              $idevidenceFinancial32 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia136,
              'activity_source_id' =>$idactivitySource33,
              'value' => 318737048,
              ]);
              $idevidenceFinancial33 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia139,
              'activity_source_id' =>$idactivitySource34,
              'value' => 120025404,
              ]);
              $idevidenceFinancial34 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia145,
              'activity_source_id' =>$idactivitySource35,
              'value' => 80807670,
              ]);
              $idevidenceFinancial35 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia157,
              'activity_source_id' =>$idactivitySource36,
              'value' => 194376459,
              ]);
              $idevidenceFinancial36 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia161,
              'activity_source_id' =>$idactivitySource37,
              'value' => 148048000,
              ]);
              $idevidenceFinancial37 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia164,
              'activity_source_id' =>$idactivitySource38,
              'value' => 333297561,
              ]);
              $idevidenceFinancial38 = DB::getPdo()->lastInsertId();
              
              
              
            DB::table('evidence_financial')->insert([
              'evidence_id' => $idevidencia170,
              'activity_source_id' =>$idactivitySource39,
              'value' => 143375757,
              ]);
              $idevidenceFinancial39 = DB::getPdo()->lastInsertId();
              
              
              
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity6,
                'source_id' =>$idPlan16,
                'value' => 755058851,
                'goal' => 0,
                'evidence_balance' => 755058851,
                'age' => 2,
                ]);
                $idactivitySource41 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity9,
                'source_id' =>$idPlan16,
                'value' => 371560000,
                'goal' => 0,
                'evidence_balance' => 371560000,
                'age' => 2,
                ]);
                $idactivitySource42 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity23,
                'source_id' =>$idPlan16,
                'value' => 384815000,
                'goal' => 0,
                'evidence_balance' => 384815000,
                'age' => 2,
                ]);
                $idactivitySource43 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity25,
                'source_id' =>$idPlan16,
                'value' => 727022493,
                'goal' => 0,
                'evidence_balance' => 727022493,
                'age' => 2,
                ]);
                $idactivitySource44 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity27,
                'source_id' =>$idPlan16,
                'value' => 93249965,
                'goal' => 0,
                'evidence_balance' => 93249965,
                'age' => 2,
                ]);
                $idactivitySource45 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity30,
                'source_id' =>$idPlan16,
                'value' => 2208641195,
                'goal' => 0,
                'evidence_balance' => 2208641195,
                'age' => 2,
                ]);
                $idactivitySource46 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity35,
                'source_id' =>$idPlan16,
                'value' => 334318771,
                'goal' => 0,
                'evidence_balance' => 334318771,
                'age' => 2,
                ]);
                $idactivitySource47 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity37,
                'source_id' =>$idPlan16,
                'value' => 167849965,
                'goal' => 0,
                'evidence_balance' => 167849965,
                'age' => 2,
                ]);
                $idactivitySource48 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity40,
                'source_id' =>$idPlan16,
                'value' => 167849965,
                'goal' => 0,
                'evidence_balance' => 167849965,
                'age' => 2,
                ]);
                $idactivitySource49 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity42,
                'source_id' =>$idPlan16,
                'value' => 55949965,
                'goal' => 0,
                'evidence_balance' => 55949965,
                'age' => 2,
                ]);
                $idactivitySource50 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity44,
                'source_id' =>$idPlan16,
                'value' => 27974960,
                'goal' => 0,
                'evidence_balance' => 27974960,
                'age' => 2,
                ]);
                $idactivitySource51 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity46,
                'source_id' =>$idPlan16,
                'value' => 99000000,
                'goal' => 0,
                'evidence_balance' => 99000000,
                'age' => 2,
                ]);
                $idactivitySource52 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity48,
                'source_id' =>$idPlan16,
                'value' => 43700000,
                'goal' => 0,
                'evidence_balance' => 43700000,
                'age' => 2,
                ]);
                $idactivitySource53 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity50,
                'source_id' =>$idPlan16,
                'value' => 405020000,
                'goal' => 0,
                'evidence_balance' => 405020000,
                'age' => 2,
                ]);
                $idactivitySource54 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity53,
                'source_id' =>$idPlan16,
                'value' => 100600000,
                'goal' => 0,
                'evidence_balance' => 100600000,
                'age' => 2,
                ]);
                $idactivitySource55 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity59,
                'source_id' =>$idPlan16,
                'value' => 588440000,
                'goal' => 0,
                'evidence_balance' => 588440000,
                'age' => 2,
                ]);
                $idactivitySource56 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity70,
                'source_id' =>$idPlan16,
                'value' => 82993102,
                'goal' => 0,
                'evidence_balance' => 82993102,
                'age' => 2,
                ]);
                $idactivitySource57 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity76,
                'source_id' =>$idPlan16,
                'value' => 161321898,
                'goal' => 0,
                'evidence_balance' => 161321898,
                'age' => 2,
                ]);
                $idactivitySource58 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity79,
                'source_id' =>$idPlan16,
                'value' => 1865000000,
                'goal' => 0,
                'evidence_balance' => 1865000000,
                'age' => 2,
                ]);
                $idactivitySource59 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity83,
                'source_id' =>$idPlan16,
                'value' => 251144954,
                'goal' => 0,
                'evidence_balance' => 251144954,
                'age' => 2,
                ]);
                $idactivitySource60 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity86,
                'source_id' =>$idPlan16,
                'value' => 7460000,
                'goal' => 0,
                'evidence_balance' => 7460000,
                'age' => 2,
                ]);
                $idactivitySource61 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity88,
                'source_id' =>$idPlan16,
                'value' => 63410000,
                'goal' => 0,
                'evidence_balance' => 63410000,
                'age' => 2,
                ]);
                $idactivitySource62 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity92,
                'source_id' =>$idPlan16,
                'value' => 180000000,
                'goal' => 0,
                'evidence_balance' => 180000000,
                'age' => 2,
                ]);
                $idactivitySource63 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity94,
                'source_id' =>$idPlan16,
                'value' => 9325000,
                'goal' => 0,
                'evidence_balance' => 9325000,
                'age' => 2,
                ]);
                $idactivitySource64 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity96,
                'source_id' =>$idPlan16,
                'value' => 925244611,
                'goal' => 0,
                'evidence_balance' => 925244611,
                'age' => 2,
                ]);
                $idactivitySource65 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity98,
                'source_id' =>$idPlan16,
                'value' => 354379321,
                'goal' => 0,
                'evidence_balance' => 354379321,
                'age' => 2,
                ]);
                $idactivitySource66 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity107,
                'source_id' =>$idPlan16,
                'value' => 54000000,
                'goal' => 0,
                'evidence_balance' => 54000000,
                'age' => 2,
                ]);
                $idactivitySource67 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity111,
                'source_id' =>$idPlan16,
                'value' => 190000000,
                'goal' => 0,
                'evidence_balance' => 190000000,
                'age' => 2,
                ]);
                $idactivitySource68 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity115,
                'source_id' =>$idPlan16,
                'value' => 91000000,
                'goal' => 0,
                'evidence_balance' => 91000000,
                'age' => 2,
                ]);
                $idactivitySource69 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity121,
                'source_id' =>$idPlan16,
                'value' => 525000000,
                'goal' => 0,
                'evidence_balance' => 525000000,
                'age' => 2,
                ]);
                $idactivitySource70 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity123,
                'source_id' =>$idPlan16,
                'value' => 80000000,
                'goal' => 0,
                'evidence_balance' => 80000000,
                'age' => 2,
                ]);
                $idactivitySource71 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity125,
                'source_id' =>$idPlan16,
                'value' => 25000000,
                'goal' => 0,
                'evidence_balance' => 25000000,
                'age' => 2,
                ]);
                $idactivitySource72 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity129,
                'source_id' =>$idPlan16,
                'value' => 300000000,
                'goal' => 0,
                'evidence_balance' => 300000000,
                'age' => 2,
                ]);
                $idactivitySource73 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity132,
                'source_id' =>$idPlan16,
                'value' => 300000000,
                'goal' => 0,
                'evidence_balance' => 300000000,
                'age' => 2,
                ]);
                $idactivitySource74 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity136,
                'source_id' =>$idPlan16,
                'value' => 520000000,
                'goal' => 0,
                'evidence_balance' => 520000000,
                'age' => 2,
                ]);
                $idactivitySource75 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity139,
                'source_id' =>$idPlan16,
                'value' => 152000000,
                'goal' => 0,
                'evidence_balance' => 152000000,
                'age' => 2,
                ]);
                $idactivitySource76 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity145,
                'source_id' =>$idPlan16,
                'value' => 70000000,
                'goal' => 0,
                'evidence_balance' => 70000000,
                'age' => 2,
                ]);
                $idactivitySource77 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity157,
                'source_id' =>$idPlan16,
                'value' => 262007440,
                'goal' => 0,
                'evidence_balance' => 262007440,
                'age' => 2,
                ]);
                $idactivitySource78 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity161,
                'source_id' =>$idPlan16,
                'value' => 184000000,
                'goal' => 0,
                'evidence_balance' => 184000000,
                'age' => 2,
                ]);
                $idactivitySource79 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity164,
                'source_id' =>$idPlan16,
                'value' => 475575000,
                'goal' => 0,
                'evidence_balance' => 475575000,
                'age' => 2,
                ]);
                $idactivitySource80 = DB::getPdo()->lastInsertId();
                
                
                
              DB::table('activity_sources')->insert([
                'activity_id' => $idactivity170,
                'source_id' =>$idPlan16,
                'value' => 273875000,
                'goal' => 0,
                'evidence_balance' => 273875000,
                'age' => 2,
                ]);
                $idactivitySource81 = DB::getPdo()->lastInsertId();
                
                
                
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia176,
                  'activity_source_id' =>$idactivitySource41,
                  'value' => 754680010,
                  ]);
                  $idevidenceFinancial41 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia179,
                  'activity_source_id' =>$idactivitySource42,
                  'value' => 259114852,
                  ]);
                  $idevidenceFinancial42 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia193,
                  'activity_source_id' =>$idactivitySource43,
                  'value' => 349141371,
                  ]);
                  $idevidenceFinancial43 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia195,
                  'activity_source_id' =>$idactivitySource44,
                  'value' => 662355305,
                  ]);
                  $idevidenceFinancial44 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia197,
                  'activity_source_id' =>$idactivitySource45,
                  'value' => 93180288,
                  ]);
                  $idevidenceFinancial45 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia200,
                  'activity_source_id' =>$idactivitySource46,
                  'value' => 2149313293,
                  ]);
                  $idevidenceFinancial46 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia205,
                  'activity_source_id' =>$idactivitySource47,
                  'value' => 241205955,
                  ]);
                  $idevidenceFinancial47 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia207,
                  'activity_source_id' =>$idactivitySource48,
                  'value' => 158441963,
                  ]);
                  $idevidenceFinancial48 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia210,
                  'activity_source_id' =>$idactivitySource49,
                  'value' => 162551819,
                  ]);
                  $idevidenceFinancial49 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia212,
                  'activity_source_id' =>$idactivitySource50,
                  'value' => 54405044,
                  ]);
                  $idevidenceFinancial50 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia214,
                  'activity_source_id' =>$idactivitySource51,
                  'value' => 26606000,
                  ]);
                  $idevidenceFinancial51 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia216,
                  'activity_source_id' =>$idactivitySource52,
                  'value' => 89941731,
                  ]);
                  $idevidenceFinancial52 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia218,
                  'activity_source_id' =>$idactivitySource53,
                  'value' => 37204074,
                  ]);
                  $idevidenceFinancial53 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia220,
                  'activity_source_id' =>$idactivitySource54,
                  'value' => 384926680,
                  ]);
                  $idevidenceFinancial54 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia223,
                  'activity_source_id' =>$idactivitySource55,
                  'value' => 65385349,
                  ]);
                  $idevidenceFinancial55 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia229,
                  'activity_source_id' =>$idactivitySource56,
                  'value' => 258441890,
                  ]);
                  $idevidenceFinancial56 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia240,
                  'activity_source_id' =>$idactivitySource57,
                  'value' => 82993102,
                  ]);
                  $idevidenceFinancial57 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia246,
                  'activity_source_id' =>$idactivitySource58,
                  'value' => 61727842,
                  ]);
                  $idevidenceFinancial58 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia249,
                  'activity_source_id' =>$idactivitySource59,
                  'value' => 1865000000,
                  ]);
                  $idevidenceFinancial59 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia253,
                  'activity_source_id' =>$idactivitySource60,
                  'value' => 250980981,
                  ]);
                  $idevidenceFinancial60 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia256,
                  'activity_source_id' =>$idactivitySource61,
                  'value' => 7459998,
                  ]);
                  $idevidenceFinancial61 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia258,
                  'activity_source_id' =>$idactivitySource62,
                  'value' => 62725212,
                  ]);
                  $idevidenceFinancial62 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia262,
                  'activity_source_id' =>$idactivitySource63,
                  'value' => 180000000,
                  ]);
                  $idevidenceFinancial63 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia264,
                  'activity_source_id' =>$idactivitySource64,
                  'value' => 8147346,
                  ]);
                  $idevidenceFinancial64 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia266,
                  'activity_source_id' =>$idactivitySource65,
                  'value' => 256916943,
                  ]);
                  $idevidenceFinancial65 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia268,
                  'activity_source_id' =>$idactivitySource66,
                  'value' => 347151121,
                  ]);
                  $idevidenceFinancial66 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia277,
                  'activity_source_id' =>$idactivitySource67,
                  'value' => 36542190,
                  ]);
                  $idevidenceFinancial67 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia281,
                  'activity_source_id' =>$idactivitySource68,
                  'value' => 162179938,
                  ]);
                  $idevidenceFinancial68 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia285,
                  'activity_source_id' =>$idactivitySource69,
                  'value' => 77141994,
                  ]);
                  $idevidenceFinancial69 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia291,
                  'activity_source_id' =>$idactivitySource70,
                  'value' => 494499415,
                  ]);
                  $idevidenceFinancial70 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia293,
                  'activity_source_id' =>$idactivitySource71,
                  'value' => 79448988,
                  ]);
                  $idevidenceFinancial71 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia295,
                  'activity_source_id' =>$idactivitySource72,
                  'value' => 18924998,
                  ]);
                  $idevidenceFinancial72 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia299,
                  'activity_source_id' =>$idactivitySource73,
                  'value' => 226460357,
                  ]);
                  $idevidenceFinancial73 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia302,
                  'activity_source_id' =>$idactivitySource74,
                  'value' => 294189966,
                  ]);
                  $idevidenceFinancial74 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia306,
                  'activity_source_id' =>$idactivitySource75,
                  'value' => 467646568,
                  ]);
                  $idevidenceFinancial75 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia309,
                  'activity_source_id' =>$idactivitySource76,
                  'value' => 125049200,
                  ]);
                  $idevidenceFinancial76 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia315,
                  'activity_source_id' =>$idactivitySource77,
                  'value' => 69718543,
                  ]);
                  $idevidenceFinancial77 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia327,
                  'activity_source_id' =>$idactivitySource78,
                  'value' => 239581388,
                  ]);
                  $idevidenceFinancial78 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia331,
                  'activity_source_id' =>$idactivitySource79,
                  'value' => 171411216,
                  ]);
                  $idevidenceFinancial79 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia334,
                  'activity_source_id' =>$idactivitySource80,
                  'value' => 475575000,
                  ]);
                  $idevidenceFinancial80 = DB::getPdo()->lastInsertId();
                  
                  
                  
                DB::table('evidence_financial')->insert([
                  'evidence_id' => $idevidencia340,
                  'activity_source_id' =>$idactivitySource81,
                  'value' => 270283613,
                  ]);
                  $idevidenceFinancial81 = DB::getPdo()->lastInsertId();
                  
                  
                  
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity6,
                    'source_id' =>$idPlan31,
                    'value' => 686175957,
                    'goal' => 0,
                    'evidence_balance' => 686175957,
                    'age' => 3,
                    ]);
                    $idactivitySource82 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity9,
                    'source_id' =>$idPlan31,
                    'value' => 310000000,
                    'goal' => 0,
                    'evidence_balance' => 310000000,
                    'age' => 3,
                    ]);
                    $idactivitySource83 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity11,
                    'source_id' =>$idPlan31,
                    'value' => 190000000,
                    'goal' => 0,
                    'evidence_balance' => 190000000,
                    'age' => 3,
                    ]);
                    $idactivitySource84 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity23,
                    'source_id' =>$idPlan31,
                    'value' => 212899367,
                    'goal' => 0,
                    'evidence_balance' => 212899367,
                    'age' => 3,
                    ]);
                    $idactivitySource86 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity25,
                    'source_id' =>$idPlan31,
                    'value' => 197691003,
                    'goal' => 0,
                    'evidence_balance' => 197691003,
                    'age' => 3,
                    ]);
                    $idactivitySource87 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity27,
                    'source_id' =>$idPlan31,
                    'value' => 93611965,
                    'goal' => 0,
                    'evidence_balance' => 93611965,
                    'age' => 3,
                    ]);
                    $idactivitySource88 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity30,
                    'source_id' =>$idPlan31,
                    'value' => 550000000,
                    'goal' => 0,
                    'evidence_balance' => 550000000,
                    'age' => 3,
                    ]);
                    $idactivitySource89 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity33,
                    'source_id' =>$idPlan31,
                    'value' => 620000000,
                    'goal' => 0,
                    'evidence_balance' => 620000000,
                    'age' => 3,
                    ]);
                    $idactivitySource90 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity35,
                    'source_id' =>$idPlan31,
                    'value' => 141000000,
                    'goal' => 0,
                    'evidence_balance' => 141000000,
                    'age' => 3,
                    ]);
                    $idactivitySource91 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity37,
                    'source_id' =>$idPlan31,
                    'value' => 169000000,
                    'goal' => 0,
                    'evidence_balance' => 169000000,
                    'age' => 3,
                    ]);
                    $idactivitySource92 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity40,
                    'source_id' =>$idPlan31,
                    'value' => 169000000,
                    'goal' => 0,
                    'evidence_balance' => 169000000,
                    'age' => 3,
                    ]);
                    $idactivitySource93 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity42,
                    'source_id' =>$idPlan31,
                    'value' => 56000000,
                    'goal' => 0,
                    'evidence_balance' => 56000000,
                    'age' => 3,
                    ]);
                    $idactivitySource94 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity44,
                    'source_id' =>$idPlan31,
                    'value' => 28000000,
                    'goal' => 0,
                    'evidence_balance' => 28000000,
                    'age' => 3,
                    ]);
                    $idactivitySource95 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity46,
                    'source_id' =>$idPlan31,
                    'value' => 50000000,
                    'goal' => 0,
                    'evidence_balance' => 50000000,
                    'age' => 3,
                    ]);
                    $idactivitySource96 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity48,
                    'source_id' =>$idPlan31,
                    'value' => 47000000,
                    'goal' => 0,
                    'evidence_balance' => 47000000,
                    'age' => 3,
                    ]);
                    $idactivitySource97 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity50,
                    'source_id' =>$idPlan31,
                    'value' => 227092000,
                    'goal' => 0,
                    'evidence_balance' => 227092000,
                    'age' => 3,
                    ]);
                    $idactivitySource98 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity53,
                    'source_id' =>$idPlan31,
                    'value' => 500000000,
                    'goal' => 0,
                    'evidence_balance' => 500000000,
                    'age' => 3,
                    ]);
                    $idactivitySource99 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity59,
                    'source_id' =>$idPlan31,
                    'value' => 506941852,
                    'goal' => 0,
                    'evidence_balance' => 506941852,
                    'age' => 3,
                    ]);
                    $idactivitySource100 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity62,
                    'source_id' =>$idPlan31,
                    'value' => 449048000,
                    'goal' => 0,
                    'evidence_balance' => 449048000,
                    'age' => 3,
                    ]);
                    $idactivitySource101 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity70,
                    'source_id' =>$idPlan31,
                    'value' => 92556166,
                    'goal' => 0,
                    'evidence_balance' => 92556166,
                    'age' => 3,
                    ]);
                    $idactivitySource102 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity76,
                    'source_id' =>$idPlan31,
                    'value' => 140588470,
                    'goal' => 0,
                    'evidence_balance' => 140588470,
                    'age' => 3,
                    ]);
                    $idactivitySource103 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity79,
                    'source_id' =>$idPlan31,
                    'value' => 1796000000,
                    'goal' => 0,
                    'evidence_balance' => 1796000000,
                    'age' => 3,
                    ]);
                    $idactivitySource104 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity83,
                    'source_id' =>$idPlan31,
                    'value' => 94935175,
                    'goal' => 0,
                    'evidence_balance' => 94935175,
                    'age' => 3,
                    ]);
                    $idactivitySource105 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity86,
                    'source_id' =>$idPlan31,
                    'value' => 8000000,
                    'goal' => 0,
                    'evidence_balance' => 8000000,
                    'age' => 3,
                    ]);
                    $idactivitySource106 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity88,
                    'source_id' =>$idPlan31,
                    'value' => 64000000,
                    'goal' => 0,
                    'evidence_balance' => 64000000,
                    'age' => 3,
                    ]);
                    $idactivitySource107 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity92,
                    'source_id' =>$idPlan31,
                    'value' => 377000000,
                    'goal' => 0,
                    'evidence_balance' => 377000000,
                    'age' => 3,
                    ]);
                    $idactivitySource108 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity94,
                    'source_id' =>$idPlan31,
                    'value' => 12900000,
                    'goal' => 0,
                    'evidence_balance' => 12900000,
                    'age' => 3,
                    ]);
                    $idactivitySource109 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity96,
                    'source_id' =>$idPlan31,
                    'value' => 1100000000,
                    'goal' => 0,
                    'evidence_balance' => 1100000000,
                    'age' => 3,
                    ]);
                    $idactivitySource110 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity98,
                    'source_id' =>$idPlan31,
                    'value' => 250000000,
                    'goal' => 0,
                    'evidence_balance' => 250000000,
                    'age' => 3,
                    ]);
                    $idactivitySource111 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity101,
                    'source_id' =>$idPlan31,
                    'value' => 140000000,
                    'goal' => 0,
                    'evidence_balance' => 140000000,
                    'age' => 3,
                    ]);
                    $idactivitySource112 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity107,
                    'source_id' =>$idPlan31,
                    'value' => 94000000,
                    'goal' => 0,
                    'evidence_balance' => 94000000,
                    'age' => 3,
                    ]);
                    $idactivitySource113 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity111,
                    'source_id' =>$idPlan31,
                    'value' => 158000000,
                    'goal' => 0,
                    'evidence_balance' => 158000000,
                    'age' => 3,
                    ]);
                    $idactivitySource114 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity115,
                    'source_id' =>$idPlan31,
                    'value' => 90000000,
                    'goal' => 0,
                    'evidence_balance' => 90000000,
                    'age' => 3,
                    ]);
                    $idactivitySource115 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity121,
                    'source_id' =>$idPlan31,
                    'value' => 420000000,
                    'goal' => 0,
                    'evidence_balance' => 420000000,
                    'age' => 3,
                    ]);
                    $idactivitySource116 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity123,
                    'source_id' =>$idPlan31,
                    'value' => 5000000,
                    'goal' => 0,
                    'evidence_balance' => 5000000,
                    'age' => 3,
                    ]);
                    $idactivitySource117 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity125,
                    'source_id' =>$idPlan31,
                    'value' => 23000000,
                    'goal' => 0,
                    'evidence_balance' => 23000000,
                    'age' => 3,
                    ]);
                    $idactivitySource118 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity129,
                    'source_id' =>$idPlan31,
                    'value' => 300000000,
                    'goal' => 0,
                    'evidence_balance' => 300000000,
                    'age' => 3,
                    ]);
                    $idactivitySource119 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity132,
                    'source_id' =>$idPlan31,
                    'value' => 200000000,
                    'goal' => 0,
                    'evidence_balance' => 200000000,
                    'age' => 3,
                    ]);
                    $idactivitySource120 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity136,
                    'source_id' =>$idPlan31,
                    'value' => 763828334,
                    'goal' => 0,
                    'evidence_balance' => 763828334,
                    'age' => 3,
                    ]);
                    $idactivitySource121 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity139,
                    'source_id' =>$idPlan31,
                    'value' => 150000000,
                    'goal' => 0,
                    'evidence_balance' => 150000000,
                    'age' => 3,
                    ]);
                    $idactivitySource122 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity145,
                    'source_id' =>$idPlan31,
                    'value' => 86000000,
                    'goal' => 0,
                    'evidence_balance' => 86000000,
                    'age' => 3,
                    ]);
                    $idactivitySource123 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity157,
                    'source_id' =>$idPlan31,
                    'value' => 526929890,
                    'goal' => 0,
                    'evidence_balance' => 526929890,
                    'age' => 3,
                    ]);
                    $idactivitySource124 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity161,
                    'source_id' =>$idPlan31,
                    'value' => 155771634,
                    'goal' => 0,
                    'evidence_balance' => 155771634,
                    'age' => 3,
                    ]);
                    $idactivitySource125 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity164,
                    'source_id' =>$idPlan31,
                    'value' => 496022485,
                    'goal' => 0,
                    'evidence_balance' => 496022485,
                    'age' => 3,
                    ]);
                    $idactivitySource126 = DB::getPdo()->lastInsertId();
                    
                    
                    
                  DB::table('activity_sources')->insert([
                    'activity_id' => $idactivity170,
                    'source_id' =>$idPlan31,
                    'value' => 328335000,
                    'goal' => 0,
                    'evidence_balance' => 328335000,
                    'age' => 3,
                    ]);
                    $idactivitySource127 = DB::getPdo()->lastInsertId();
                    
                    
                    
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia346,
                      'activity_source_id' =>$idactivitySource82,
                      'value' => 662565792,
                      ]);
                      $idevidenceFinancial82 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia349,
                      'activity_source_id' =>$idactivitySource83,
                      'value' => 234700000,
                      ]);
                      $idevidenceFinancial83 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia351,
                      'activity_source_id' =>$idactivitySource84,
                      'value' => 189236324,
                      ]);
                      $idevidenceFinancial84 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia363,
                      'activity_source_id' =>$idactivitySource86,
                      'value' => 203707299,
                      ]);
                      $idevidenceFinancial86 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia365,
                      'activity_source_id' =>$idactivitySource87,
                      'value' => 183890262,
                      ]);
                      $idevidenceFinancial87 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia367,
                      'activity_source_id' =>$idactivitySource88,
                      'value' => 93538059,
                      ]);
                      $idevidenceFinancial88 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia370,
                      'activity_source_id' =>$idactivitySource89,
                      'value' => 543434890,
                      ]);
                      $idevidenceFinancial89 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia373,
                      'activity_source_id' =>$idactivitySource90,
                      'value' => 619544230,
                      ]);
                      $idevidenceFinancial90 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia375,
                      'activity_source_id' =>$idactivitySource91,
                      'value' => 47886969,
                      ]);
                      $idevidenceFinancial91 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia377,
                      'activity_source_id' =>$idactivitySource92,
                      'value' => 168837658,
                      ]);
                      $idevidenceFinancial92 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia380,
                      'activity_source_id' =>$idactivitySource93,
                      'value' => 153475278,
                      ]);
                      $idevidenceFinancial93 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia382,
                      'activity_source_id' =>$idactivitySource94,
                      'value' => 55923985,
                      ]);
                      $idevidenceFinancial94 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia384,
                      'activity_source_id' =>$idactivitySource95,
                      'value' => 20175649,
                      ]);
                      $idevidenceFinancial95 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia386,
                      'activity_source_id' =>$idactivitySource96,
                      'value' => 45571877,
                      ]);
                      $idevidenceFinancial96 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia388,
                      'activity_source_id' =>$idactivitySource97,
                      'value' => 23399063,
                      ]);
                      $idevidenceFinancial97 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia390,
                      'activity_source_id' =>$idactivitySource98,
                      'value' => 191228333,
                      ]);
                      $idevidenceFinancial98 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia393,
                      'activity_source_id' =>$idactivitySource99,
                      'value' => 491030155,
                      ]);
                      $idevidenceFinancial99 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia399,
                      'activity_source_id' =>$idactivitySource100,
                      'value' => 492054521,
                      ]);
                      $idevidenceFinancial100 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia402,
                      'activity_source_id' =>$idactivitySource101,
                      'value' => 434810705,
                      ]);
                      $idevidenceFinancial101 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia410,
                      'activity_source_id' =>$idactivitySource102,
                      'value' => 92231174,
                      ]);
                      $idevidenceFinancial102 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia416,
                      'activity_source_id' =>$idactivitySource103,
                      'value' => 55528817,
                      ]);
                      $idevidenceFinancial103 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia419,
                      'activity_source_id' =>$idactivitySource104,
                      'value' => 1794965619,
                      ]);
                      $idevidenceFinancial104 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia423,
                      'activity_source_id' =>$idactivitySource105,
                      'value' => 94690051,
                      ]);
                      $idevidenceFinancial105 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia426,
                      'activity_source_id' =>$idactivitySource106,
                      'value' => 8000000,
                      ]);
                      $idevidenceFinancial106 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia428,
                      'activity_source_id' =>$idactivitySource107,
                      'value' => 62290107,
                      ]);
                      $idevidenceFinancial107 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia432,
                      'activity_source_id' =>$idactivitySource108,
                      'value' => 376414050,
                      ]);
                      $idevidenceFinancial108 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia434,
                      'activity_source_id' =>$idactivitySource109,
                      'value' => 12459640,
                      ]);
                      $idevidenceFinancial109 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia436,
                      'activity_source_id' =>$idactivitySource110,
                      'value' => 1020563992,
                      ]);
                      $idevidenceFinancial110 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia438,
                      'activity_source_id' =>$idactivitySource111,
                      'value' => 247635050,
                      ]);
                      $idevidenceFinancial111 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia441,
                      'activity_source_id' =>$idactivitySource112,
                      'value' => 139980074,
                      ]);
                      $idevidenceFinancial112 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia447,
                      'activity_source_id' =>$idactivitySource113,
                      'value' => 93726412,
                      ]);
                      $idevidenceFinancial113 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia451,
                      'activity_source_id' =>$idactivitySource114,
                      'value' => 137899476,
                      ]);
                      $idevidenceFinancial114 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia455,
                      'activity_source_id' =>$idactivitySource115,
                      'value' => 76929866,
                      ]);
                      $idevidenceFinancial115 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia461,
                      'activity_source_id' =>$idactivitySource116,
                      'value' => 404203733,
                      ]);
                      $idevidenceFinancial116 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia463,
                      'activity_source_id' =>$idactivitySource117,
                      'value' => 4999985,
                      ]);
                      $idevidenceFinancial117 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia465,
                      'activity_source_id' =>$idactivitySource118,
                      'value' => 21571392,
                      ]);
                      $idevidenceFinancial118 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia469,
                      'activity_source_id' =>$idactivitySource119,
                      'value' => 296863445,
                      ]);
                      $idevidenceFinancial119 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia472,
                      'activity_source_id' =>$idactivitySource120,
                      'value' => 169898042,
                      ]);
                      $idevidenceFinancial120 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia476,
                      'activity_source_id' =>$idactivitySource121,
                      'value' => 727180158,
                      ]);
                      $idevidenceFinancial121 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia479,
                      'activity_source_id' =>$idactivitySource122,
                      'value' => 148804650,
                      ]);
                      $idevidenceFinancial122 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia485,
                      'activity_source_id' =>$idactivitySource123,
                      'value' => 66555845,
                      ]);
                      $idevidenceFinancial123 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia497,
                      'activity_source_id' =>$idactivitySource124,
                      'value' => 522776030,
                      ]);
                      $idevidenceFinancial124 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia501,
                      'activity_source_id' =>$idactivitySource125,
                      'value' => 155771634,
                      ]);
                      $idevidenceFinancial125 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia504,
                      'activity_source_id' =>$idactivitySource126,
                      'value' => 494368427,
                      ]);
                      $idevidenceFinancial126 = DB::getPdo()->lastInsertId();
                      
                      
                      
                    DB::table('evidence_financial')->insert([
                      'evidence_id' => $idevidencia510,
                      'activity_source_id' =>$idactivitySource127,
                      'value' => 324615195,
                      ]);
                      $idevidenceFinancial127 = DB::getPdo()->lastInsertId();
                      
                      
                      
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity6,
                        'source_id' =>$idPlan46,
                        'value' => 591252633,
                        'goal' => 0,
                        'evidence_balance' => 591252633,
                        'age' => 4,
                        ]);
                        $idactivitySource128 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity13,
                        'source_id' =>$idPlan46,
                        'value' => 216211919,
                        'goal' => 0,
                        'evidence_balance' => 216211919,
                        'age' => 4,
                        ]);
                        $idactivitySource129 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity23,
                        'source_id' =>$idPlan46,
                        'value' => 264944640,
                        'goal' => 0,
                        'evidence_balance' => 264944640,
                        'age' => 4,
                        ]);
                        $idactivitySource130 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity25,
                        'source_id' =>$idPlan46,
                        'value' => 445600000,
                        'goal' => 0,
                        'evidence_balance' => 445600000,
                        'age' => 4,
                        ]);
                        $idactivitySource131 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity30,
                        'source_id' =>$idPlan46,
                        'value' => 348209229,
                        'goal' => 0,
                        'evidence_balance' => 348209229,
                        'age' => 4,
                        ]);
                        $idactivitySource132 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity35,
                        'source_id' =>$idPlan46,
                        'value' => 243598184,
                        'goal' => 0,
                        'evidence_balance' => 243598184,
                        'age' => 4,
                        ]);
                        $idactivitySource133 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity37,
                        'source_id' =>$idPlan46,
                        'value' => 663711400,
                        'goal' => 0,
                        'evidence_balance' => 663711400,
                        'age' => 4,
                        ]);
                        $idactivitySource134 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity40,
                        'source_id' =>$idPlan46,
                        'value' => 771942456,
                        'goal' => 0,
                        'evidence_balance' => 771942456,
                        'age' => 4,
                        ]);
                        $idactivitySource135 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity42,
                        'source_id' =>$idPlan46,
                        'value' => 56371140,
                        'goal' => 0,
                        'evidence_balance' => 56371140,
                        'age' => 4,
                        ]);
                        $idactivitySource136 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity44,
                        'source_id' =>$idPlan46,
                        'value' => 28185570,
                        'goal' => 0,
                        'evidence_balance' => 28185570,
                        'age' => 4,
                        ]);
                        $idactivitySource137 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity46,
                        'source_id' =>$idPlan46,
                        'value' => 97884000,
                        'goal' => 0,
                        'evidence_balance' => 97884000,
                        'age' => 4,
                        ]);
                        $idactivitySource138 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity50,
                        'source_id' =>$idPlan46,
                        'value' => 19775596,
                        'goal' => 0,
                        'evidence_balance' => 19775596,
                        'age' => 4,
                        ]);
                        $idactivitySource140 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity53,
                        'source_id' =>$idPlan46,
                        'value' => 240927850,
                        'goal' => 0,
                        'evidence_balance' => 240927850,
                        'age' => 4,
                        ]);
                        $idactivitySource141 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity59,
                        'source_id' =>$idPlan46,
                        'value' => 408060058,
                        'goal' => 0,
                        'evidence_balance' => 408060058,
                        'age' => 4,
                        ]);
                        $idactivitySource142 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity70,
                        'source_id' =>$idPlan46,
                        'value' => 93011781,
                        'goal' => 0,
                        'evidence_balance' => 93011781,
                        'age' => 4,
                        ]);
                        $idactivitySource143 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity76,
                        'source_id' =>$idPlan46,
                        'value' => 209513337,
                        'goal' => 0,
                        'evidence_balance' => 209513337,
                        'age' => 4,
                        ]);
                        $idactivitySource144 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity79,
                        'source_id' =>$idPlan46,
                        'value' => 2127517000,
                        'goal' => 0,
                        'evidence_balance' => 2127517000,
                        'age' => 4,
                        ]);
                        $idactivitySource145 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity86,
                        'source_id' =>$idPlan46,
                        'value' => 7516144,
                        'goal' => 0,
                        'evidence_balance' => 7516144,
                        'age' => 4,
                        ]);
                        $idactivitySource146 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity88,
                        'source_id' =>$idPlan46,
                        'value' => 63887224,
                        'goal' => 0,
                        'evidence_balance' => 63887224,
                        'age' => 4,
                        ]);
                        $idactivitySource147 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity92,
                        'source_id' =>$idPlan46,
                        'value' => 657006626,
                        'goal' => 0,
                        'evidence_balance' => 657006626,
                        'age' => 4,
                        ]);
                        $idactivitySource148 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity94,
                        'source_id' =>$idPlan46,
                        'value' => 9569154,
                        'goal' => 0,
                        'evidence_balance' => 9569154,
                        'age' => 4,
                        ]);
                        $idactivitySource149 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity96,
                        'source_id' =>$idPlan46,
                        'value' => 4064090318,
                        'goal' => 0,
                        'evidence_balance' => 4064090318,
                        'age' => 4,
                        ]);
                        $idactivitySource150 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity98,
                        'source_id' =>$idPlan46,
                        'value' => 2150000000,
                        'goal' => 0,
                        'evidence_balance' => 2150000000,
                        'age' => 4,
                        ]);
                        $idactivitySource151 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity101,
                        'source_id' =>$idPlan46,
                        'value' => 260897164,
                        'goal' => 0,
                        'evidence_balance' => 260897164,
                        'age' => 4,
                        ]);
                        $idactivitySource152 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity107,
                        'source_id' =>$idPlan46,
                        'value' => 67710000,
                        'goal' => 0,
                        'evidence_balance' => 67710000,
                        'age' => 4,
                        ]);
                        $idactivitySource153 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity111,
                        'source_id' =>$idPlan46,
                        'value' => 239000000,
                        'goal' => 0,
                        'evidence_balance' => 239000000,
                        'age' => 4,
                        ]);
                        $idactivitySource154 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity115,
                        'source_id' =>$idPlan46,
                        'value' => 118514899,
                        'goal' => 0,
                        'evidence_balance' => 118514899,
                        'age' => 4,
                        ]);
                        $idactivitySource155 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity121,
                        'source_id' =>$idPlan46,
                        'value' => 865099501,
                        'goal' => 0,
                        'evidence_balance' => 865099501,
                        'age' => 4,
                        ]);
                        $idactivitySource156 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity123,
                        'source_id' =>$idPlan46,
                        'value' => 9395180,
                        'goal' => 0,
                        'evidence_balance' => 9395180,
                        'age' => 4,
                        ]);
                        $idactivitySource157 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity129,
                        'source_id' =>$idPlan46,
                        'value' => 428831300,
                        'goal' => 0,
                        'evidence_balance' => 428831300,
                        'age' => 4,
                        ]);
                        $idactivitySource159 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity132,
                        'source_id' =>$idPlan46,
                        'value' => 375807200,
                        'goal' => 0,
                        'evidence_balance' => 375807200,
                        'age' => 4,
                        ]);
                        $idactivitySource160 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity136,
                        'source_id' =>$idPlan46,
                        'value' => 450000000,
                        'goal' => 0,
                        'evidence_balance' => 450000000,
                        'age' => 4,
                        ]);
                        $idactivitySource161 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity139,
                        'source_id' =>$idPlan46,
                        'value' => 434057216,
                        'goal' => 0,
                        'evidence_balance' => 434057216,
                        'age' => 4,
                        ]);
                        $idactivitySource162 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity145,
                        'source_id' =>$idPlan46,
                        'value' => 435000000,
                        'goal' => 0,
                        'evidence_balance' => 435000000,
                        'age' => 4,
                        ]);
                        $idactivitySource163 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity148,
                        'source_id' =>$idPlan46,
                        'value' => 55000000,
                        'goal' => 0,
                        'evidence_balance' => 55000000,
                        'age' => 4,
                        ]);
                        $idactivitySource164 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity150,
                        'source_id' =>$idPlan46,
                        'value' => 1150000000,
                        'goal' => 0,
                        'evidence_balance' => 1150000000,
                        'age' => 4,
                        ]);
                        $idactivitySource165 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity157,
                        'source_id' =>$idPlan46,
                        'value' => 580000000,
                        'goal' => 0,
                        'evidence_balance' => 580000000,
                        'age' => 4,
                        ]);
                        $idactivitySource166 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity161,
                        'source_id' =>$idPlan46,
                        'value' => 140617974,
                        'goal' => 0,
                        'evidence_balance' => 140617974,
                        'age' => 4,
                        ]);
                        $idactivitySource167 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity164,
                        'source_id' =>$idPlan46,
                        'value' => 1047966141,
                        'goal' => 0,
                        'evidence_balance' => 1047966141,
                        'age' => 4,
                        ]);
                        $idactivitySource168 = DB::getPdo()->lastInsertId();
                        
                        
                        
                      DB::table('activity_sources')->insert([
                        'activity_id' => $idactivity170,
                        'source_id' =>$idPlan48,
                        'value' => 1016955478,
                        'goal' => 0,
                        'evidence_balance' => 1016955478,
                        'age' => 4,
                        ]);
                        $idactivitySource169 = DB::getPdo()->lastInsertId();
                        
                        DB::table('activity_sources')->insert([
                          'activity_id' => $idactivity164,
                          'source_id' =>$idPlan48,
                          'value' => 70971159,
                          'goal' => 0,
                          'evidence_balance' => 70971159,
                          'age' => 4,
                          ]);
                          $idactivitySource170 = DB::getPdo()->lastInsertId();

                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia516,
                            'activity_source_id' =>$idactivitySource128,
                            'value' => 585584381,
                            ]);
                            $idevidenceFinancial128 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia523,
                            'activity_source_id' =>$idactivitySource129,
                            'value' => 174802450,
                            ]);
                            $idevidenceFinancial129 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia533,
                            'activity_source_id' =>$idactivitySource130,
                            'value' => 192486700,
                            ]);
                            $idevidenceFinancial130 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia535,
                            'activity_source_id' =>$idactivitySource131,
                            'value' => 425718275,
                            ]);
                            $idevidenceFinancial131 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia540,
                            'activity_source_id' =>$idactivitySource132,
                            'value' => 266764923,
                            ]);
                            $idevidenceFinancial132 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia545,
                            'activity_source_id' =>$idactivitySource133,
                            'value' => 220002622,
                            ]);
                            $idevidenceFinancial133 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia547,
                            'activity_source_id' =>$idactivitySource134,
                            'value' => 330359417,
                            ]);
                            $idevidenceFinancial134 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia550,
                            'activity_source_id' =>$idactivitySource135,
                            'value' => 359238146,
                            ]);
                            $idevidenceFinancial135 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia552,
                            'activity_source_id' =>$idactivitySource136,
                            'value' => 38385039,
                            ]);
                            $idevidenceFinancial136 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia554,
                            'activity_source_id' =>$idactivitySource137,
                            'value' => 28185569,
                            ]);
                            $idevidenceFinancial137 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia556,
                            'activity_source_id' =>$idactivitySource138,
                            'value' => 80023820,
                            ]);
                            $idevidenceFinancial138 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia560,
                            'activity_source_id' =>$idactivitySource140,
                            'value' => 3595726,
                            ]);
                            $idevidenceFinancial140 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia563,
                            'activity_source_id' =>$idactivitySource141,
                            'value' => 189974021,
                            ]);
                            $idevidenceFinancial141 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia569,
                            'activity_source_id' =>$idactivitySource142,
                            'value' => 318585051,
                            ]);
                            $idevidenceFinancial142 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia580,
                            'activity_source_id' =>$idactivitySource143,
                            'value' => 86090992,
                            ]);
                            $idevidenceFinancial143 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia586,
                            'activity_source_id' =>$idactivitySource144,
                            'value' => 104757270,
                            ]);
                            $idevidenceFinancial144 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia589,
                            'activity_source_id' =>$idactivitySource145,
                            'value' => 2091345506,
                            ]);
                            $idevidenceFinancial145 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia596,
                            'activity_source_id' =>$idactivitySource146,
                            'value' => 5792076,
                            ]);
                            $idevidenceFinancial146 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia598,
                            'activity_source_id' =>$idactivitySource147,
                            'value' => 56093998,
                            ]);
                            $idevidenceFinancial147 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia602,
                            'activity_source_id' =>$idactivitySource148,
                            'value' => 627058910,
                            ]);
                            $idevidenceFinancial148 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia604,
                            'activity_source_id' =>$idactivitySource149,
                            'value' => 9319128,
                            ]);
                            $idevidenceFinancial149 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia606,
                            'activity_source_id' =>$idactivitySource150,
                            'value' => 3439776969,
                            ]);
                            $idevidenceFinancial150 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia608,
                            'activity_source_id' =>$idactivitySource151,
                            'value' => 1954719148,
                            ]);
                            $idevidenceFinancial151 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia611,
                            'activity_source_id' =>$idactivitySource152,
                            'value' => 247797343,
                            ]);
                            $idevidenceFinancial152 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia617,
                            'activity_source_id' =>$idactivitySource153,
                            'value' => 65306849,
                            ]);
                            $idevidenceFinancial153 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia621,
                            'activity_source_id' =>$idactivitySource154,
                            'value' => 238664623,
                            ]);
                            $idevidenceFinancial154 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia625,
                            'activity_source_id' =>$idactivitySource155,
                            'value' => 114804650,
                            ]);
                            $idevidenceFinancial155 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia631,
                            'activity_source_id' =>$idactivitySource156,
                            'value' => 767935089,
                            ]);
                            $idevidenceFinancial156 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia633,
                            'activity_source_id' =>$idactivitySource157,
                            'value' => 9395180,
                            ]);
                            $idevidenceFinancial157 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia639,
                            'activity_source_id' =>$idactivitySource159,
                            'value' => 352221680,
                            ]);
                            $idevidenceFinancial159 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia642,
                            'activity_source_id' =>$idactivitySource160,
                            'value' => 360011689,
                            ]);
                            $idevidenceFinancial160 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia646,
                            'activity_source_id' =>$idactivitySource161,
                            'value' => 449785471,
                            ]);
                            $idevidenceFinancial161 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia649,
                            'activity_source_id' =>$idactivitySource162,
                            'value' => 395424199,
                            ]);
                            $idevidenceFinancial162 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia655,
                            'activity_source_id' =>$idactivitySource163,
                            'value' => 388119923,
                            ]);
                            $idevidenceFinancial163 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia658,
                            'activity_source_id' =>$idactivitySource164,
                            'value' => 52947479,
                            ]);
                            $idevidenceFinancial164 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia660,
                            'activity_source_id' =>$idactivitySource165,
                            'value' => 35614156,
                            ]);
                            $idevidenceFinancial165 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia667,
                            'activity_source_id' =>$idactivitySource166,
                            'value' => 475740035,
                            ]);
                            $idevidenceFinancial166 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia671,
                            'activity_source_id' =>$idactivitySource167,
                            'value' => 137870948,
                            ]);
                            $idevidenceFinancial167 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia674,
                            'activity_source_id' =>$idactivitySource168,
                            'value' => 1047966141,
                            ]);
                            $idevidenceFinancial168 = DB::getPdo()->lastInsertId();
                            
                            
                            
                          DB::table('evidence_financial')->insert([
                            'evidence_id' => $idevidencia680,
                            'activity_source_id' =>$idactivitySource169,
                            'value' => 921363594,
                            ]);
                            $idevidenceFinancial169 = DB::getPdo()->lastInsertId();
                            
                            
                            
                            DB::table('evidence_financial')->insert([
                              'evidence_id' => $idevidencia674,
                              'activity_source_id' =>$idactivitySource170,
                              'value' => 70940992,
                              ]);
                              $idevidenceFinancial170 = DB::getPdo()->lastInsertId();
                              
  } 
}